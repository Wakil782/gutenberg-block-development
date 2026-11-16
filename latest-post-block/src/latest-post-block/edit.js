import { InspectorControls, useBlockProps } from "@wordpress/block-editor";
import {PanelBody, RangeControl, ToggleControl, Spinner, Notice } from "@wordpress/components";

import {useSelect} from "@wordpress/data";
import {dateI18n} from "@wordpress/data";

export default function Edit({attributes, setAttributes}){
	const {postToShow, displayDate, displayExcerpt} = attributes;
	const blockprops = useBlockProps({
		className: 'latest-posts-block'
	});

	const {posts, isResolving} = useSelect((select)=> {
		const core = select('core');
		 return {
			posts: core.getEntityRecords(
				'postType',
				'post',
				{
					per_page: postToShow,
					order: 'desc',
					orderby: 'date',
					status: 'publish',
					_embed: true
				}
			),
			isResolving: core.isResolving(
				'getEntityRecords',
				[
					'postType',
					'post',
					{
						per_page: postToShow,
						order: 'desc',
						orderby: 'date',
						status: 'publish',
					    _embed: true 					
				} 
				]
			)
		 };
	}, [postToShow]);

	return(
		<>
		<InspectorControls>
			<PanelBody
			title={__('latest posts settings', 'latest-post-block')}
			initialOpen={true}
			>
			<RangeControl
			label={__('Number of posts', 'latest-post-block')}
			value={postToShow}
			onChange={(value)=> {
				setAttributes({postToShow: value})
			}}
			min={1}
			max={10}
			/>
			<ToggleControl
			label={__('Show Date', 'latest-post-block')}	
			checked={displayDate}
			onChange={(value) => {
				setAttributes({displayDate: value})
			}}	
			/>
			<ToggleControl
			label={__('Show Excerpt', 'latest-post-block')}
			checked={displayExcerpt}
			onChange={(value)=> {
				setAttributes({displayExcerpt: value})
			}}
			/>

			</PanelBody>
		</InspectorControls>
		<div {...blockprops}>
			<h2 className="latest-posts-heading">
				{__('Latest Posts', 'latest-post-block')}
			</h2>
			{isResolving && <Spinner/>}
				{!isResolving && posts && posts.length === 0 && (
					<Notice status="info" isDismissible={false}>
						{__('No Posts Found', 'latest-post-block')}
					</Notice>
				)}

				{!isResolving && posts && posts.length > 0 && (
					<ul className="latest-posts-list">
						{posts.map((post)=> (
							<li key={post.id} className="latest-post-item">
								<h3>
									<a
									href={post.link}
									onClick={(event)=> {
										event.preventDefault();
									}}
									>
										<span 
										dangerouslySetInnerHTML={{
											__html: post.title.rendered
										}}
										/>
									</a>
								</h3>
								{displayDate && (
									<p className="latest-post-date">
										{dateI18n(
											'F j, Y',
											post.date
										)}
									</p>
								)}
								{displayExcerpt && (
									<div className="latest-post-excerpt"
									dangerouslySetInnerHTML={{
										__html: post.excerpt.rendered
									}}
									/>
								)}
							</li>
						))}
					</ul>
				)}

		</div>
		</>
	)
}










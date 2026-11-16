import { useBlockProps, RichText, LinkControl } from "@wordpress/block-editor";

export default function Edit({attributes, setAttributes}){
	const { buttonText, link } = attributes
	return(
		<div {...useBlockProps()}>
			<RichText 
			tagName="p"
			value={buttonText}
			onChange={(value)=> {
				setAttributes({buttonText: value})
			}}
			/>
			<LinkControl 
			value={link}
			onChange={(newLink)=> {
				setAttributes({link: newLink})
			}}
			/>
			<p>
				selected URL: {link?.url}
			</p>
		</div>
	)
}


import { InspectorControls, useBlockProps } from "@wordpress/block-editor";
import {PanelBody, TextControl, TextareaControl, ColorPicker} from "@wordpress/components";
import { __ } from "@wordpress/i18n";

export default function Edit({attributes, setAttributes}){
	const {serviceTitle, description, icon, buttonText, buttonUrl, cardBackground} = attributes;
	const blockprpps = useBlockProps({
		className: "service-card-editor"
	});
	return(
		<>
		<InspectorControls>
			<PanelBody
			title={__('Service settings', 'service-card-block')}
			initialOpen={true}
			>
			<TextControl
			label={__('service title', 'service-card-block')}
			value={serviceTitle}
			onChange={(value)=> {
				setAttributes({serviceTitle: value})
			}}
			/>
			<TextControl
			label={__('Description', 'service-card-block')}
			value={description}
			onChange={(value)=> {
				setAttributes({description: value})
			}}
			/>
			<TextControl
			label={__('icon / emoji', 'service-card-block')}
			value={icon}
			onChange={(value)=> {
				setAttributes({icon: value})
			}}
			/>

			<TextControl
			label={__('Button Text', 'service-card-block')}
			value={buttonText}
			onChange={(value)=> {
				setAttributes({buttonText: value})
			}}
			/>

			<TextControl
			label={__('Button URL', 'service-card-block')}
			value={buttonUrl}
			onChange={(value)=> {
				setAttributes({buttonUrl: value})
			}}
			/>
			<p>
				{__('Card Background', 'service-card-block')}
			</p>
			<ColorPicker
			color={cardBackground}
			onChangeComplete={(value)=> {
				setAttributes({cardBackground: value.hex})
			}}
			enableAlpha={false}
			/>
			</PanelBody>
		</InspectorControls>
		<div {...blockprpps} >
			<div className="service-card-preview"
				style={{
					backgroundColor: cardBackground
				}}
				>
					<div className="service-card-icon">
						{icon}
					</div>
					<h3>{ serviceTitle }</h3>
					<p>{description}</p>
					<div className="service-card-button">
						{buttonText}
					</div>

				</div>
		</div>
		</>
	)
}
































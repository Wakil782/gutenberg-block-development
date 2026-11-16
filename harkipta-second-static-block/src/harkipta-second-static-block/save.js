import { useBlockProps, RichText } from "@wordpress/block-editor";

export default function save({attributes}){
	const {  buttonText, link } = attributes
	return(
		<div {...useBlockProps.save()}>
			<a 
			href={link?.url}
			target={link?.opensInNewTab ? "_blank": "_self"}
			rel={link?.opensInNewTab ? "noopener noreferrer": undefined}
			>
			<RichText.Content
			tagName="span" 
			value={buttonText}

			/>
			</a>
		</div>
	)
}
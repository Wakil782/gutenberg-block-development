import {
    useBlockProps,
    RichText
} from "@wordpress/block-editor";

export default function Edit({
    attributes,
    setAttributes,
    context
}) {

    const { title } = attributes;

    const parentColor = context["amar/color"];

    return (
        <div
            {...useBlockProps({
                style: {
                    backgroundColor: parentColor,
                    padding: "20px",
                    marginTop: "20px"
                }
            })}
        >

            <RichText
                tagName="p"
                value={title}
                onChange={(value) =>
                    setAttributes({ title: value })
                }
                placeholder="Write child content..."
            />

            <p>
                Parent Color: {parentColor}
            </p>

        </div>
    );
}
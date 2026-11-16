import {
    useBlockProps,
    InnerBlocks,
    InspectorControls
} from "@wordpress/block-editor";

import {
    PanelBody,
    TextControl,
    ColorPicker
} from "@wordpress/components";

export default function Edit({ attributes, setAttributes }) {

    const { text, color } = attributes;

    return (
        <>
            <InspectorControls>

                <PanelBody title="Parent Settings">

                    <TextControl
                        label="Parent Text"
                        value={text}
                        onChange={(value) => {
                            setAttributes({ text: value });
                        }}
                    />

                    <ColorPicker
                        color={color}
                        onChange={(value) => {
                            setAttributes({ color: value });
                        }}
                    />

                </PanelBody>

            </InspectorControls>

            <div
                {...useBlockProps({
                    style: {
                        border: `3px solid ${color}`,
                        padding: "20px"
                    }
                })}
            >

                <InnerBlocks
                    allowedBlocks={["amar/surinder-block"]}
                />

            </div>
        </>
    );
}







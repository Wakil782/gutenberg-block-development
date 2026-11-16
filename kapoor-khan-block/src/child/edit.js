import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ColorPalette } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit({ attributes, setAttributes }) {
    const blockProps = useBlockProps();
    const { text, bgColor } = attributes;

    return (
        <>
            <InspectorControls>
                <PanelBody title={__('Child Settings')}>
                    <p>{__('Background Color')}</p>
                    <ColorPalette
                        value={bgColor}
                        onChange={(color) => setAttributes({ bgColor: color })}
                    />
                </PanelBody>
            </InspectorControls>

            <div {...blockProps} style={{ backgroundColor: bgColor, padding: '15px', borderRadius: '5px' }}>
                <RichText
                    tagName="p"
                    placeholder={__('Child er text likho...')}
                    value={text}
                    onChange={(val) => setAttributes({ text: val })}
                />
            </div>
        </>
    );
}
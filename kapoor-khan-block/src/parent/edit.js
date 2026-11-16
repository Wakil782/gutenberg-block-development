import { useBlockProps, InnerBlocks, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit({ attributes, setAttributes }) {
    const blockProps = useBlockProps();
    const { title } = attributes;

    const ALLOWED_BLOCKS = ['amar/child-block'];

    const TEMPLATE = [
        ['amar/child-block', {}]
    ];

    return (
        <>
            <InspectorControls>
                <PanelBody title={__('Parent Settings')}>
                    <TextControl
                        label={__('Parent Title')}
                        value={title}
                        onChange={(val) => setAttributes({ title: val })}
                    />
                </PanelBody>
            </InspectorControls>
            
            <div {...blockProps}>
                <h2>{title || __('Parent Block')}</h2>
                <InnerBlocks 
                    allowedBlocks={ALLOWED_BLOCKS}
                    template={TEMPLATE}
                    templateLock={false} // user chaile aro child add korte parbe
                />
            </div>
        </>
    );
}
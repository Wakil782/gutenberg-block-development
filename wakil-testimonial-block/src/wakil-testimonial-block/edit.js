
import {
    RichText,
    InspectorControls,
    useBlockProps,
    MediaUploadCheck,
    MediaUpload
} from '@wordpress/block-editor';

import {
    PanelBody,
    Button,
    RangeControl,
    ColorPicker
} from '@wordpress/components';

import { __ } from '@wordpress/i18n';

import './style.css';

export default function Edit({ attributes, setAttributes }) {
    const {
        clientName,
        designation,
        company,
        testimonial,
        imageUrl,
        imageId,
        rating,
        cardBackground,
        textColor,
        accentColor
    } = attributes;

    const safeRating = Math.max(
        1,
        Math.min(5, Number(rating) || 5)
    );

    const blockProps = useBlockProps({
        className: 'wakil-testimonial-editor'
    });

    const stars =
        '★'.repeat(safeRating) +
        '☆'.repeat(5 - safeRating);

    return (
        <>
            <InspectorControls>
                <PanelBody
                    title={__('Testimonial Settings', 'wakil-testimonial-block')}
                    initialOpen={true}
                >
                    <RangeControl
                        label={__('Star Rating', 'wakil-testimonial-block')}
                        value={safeRating}
                        onChange={(value) =>
                            setAttributes({ rating: value })
                        }
                        min={1}
                        max={5}
                    />

                    <p>{__('Card Background', 'wakil-testimonial-block')}</p>

                    <ColorPicker
                        color={cardBackground}
                        onChangeComplete={(value) =>
                            setAttributes({
                                cardBackground: value.hex
                            })
                        }
                        disableAlpha
                    />

                    <p>{__('Text Color', 'wakil-testimonial-block')}</p>

                    <ColorPicker
                        color={textColor}
                        onChangeComplete={(value) =>
                            setAttributes({
                                textColor: value.hex
                            })
                        }
                        disableAlpha
                    />

                    <p>{__('Accent Color', 'wakil-testimonial-block')}</p>

                    <ColorPicker
                        color={accentColor}
                        onChangeComplete={(value) =>
                            setAttributes({
                                accentColor: value.hex
                            })
                        }
                        disableAlpha
                    />
                </PanelBody>
            </InspectorControls>

            <div {...blockProps}>
                <div
                    className="wakil-testimonial-card"
                    style={{
                        backgroundColor: cardBackground,
                        color: textColor
                    }}
                >
                    <div
                        className="wakil-testimonial-stars"
                        aria-label={`${safeRating} out of 5 stars`}
                    >
                        <span style={{ color: accentColor }}>
                            {stars}
                        </span>
                    </div>

                    <RichText
                        tagName="blockquote"
                        className="wakil-testimonial-content"
                        value={testimonial}
                        onChange={(value) =>
                            setAttributes({ testimonial: value })
                        }
                        placeholder={__(
                            'Write the client testimonial...',
                            'wakil-testimonial-block'
                        )}
                    />

                    <div className="wakil-testimonial-profile">
                        <MediaUploadCheck>
                            <MediaUpload
                                value={imageId}
                                allowedTypes={['image']}
                                onSelect={(media) =>
                                    setAttributes({
                                        imageUrl: media.url || '',
                                        imageId: media.id || 0
                                    })
                                }
                                render={({ open }) => (
                                    <Button
                                        onClick={open}
                                        variant="secondary"
                                        className="wakil-testimonial-image-button"
                                    >
                                        {imageUrl ? (
                                            <img
                                                src={imageUrl}
                                                alt={clientName}
                                                className="wakil-testimonial-avatar"
                                            />
                                        ) : (
                                            __(
                                                'Choose Photo',
                                                'wakil-testimonial-block'
                                            )
                                        )}
                                    </Button>
                                )}
                            />
                        </MediaUploadCheck>

                        <div className="wakil-testimonial-details">
                            <RichText
                                tagName="h3"
                                value={clientName}
                                onChange={(value) =>
                                    setAttributes({ clientName: value })
                                }
                                placeholder={__(
                                    'Client name',
                                    'wakil-testimonial-block'
                                )}
                            />

                            <RichText
                                tagName="p"
                                value={designation}
                                onChange={(value) =>
                                    setAttributes({ designation: value })
                                }
                                placeholder={__(
                                    'Designation',
                                    'wakil-testimonial-block'
                                )}
                            />

                            <RichText
                                tagName="p"
                                value={company}
                                onChange={(value) =>
                                    setAttributes({ company: value })
                                }
                                placeholder={__(
                                    'Company Name',
                                    'wakil-testimonial-block'
                                )}
                            />
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

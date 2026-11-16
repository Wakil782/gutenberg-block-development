import { RichText, MediaUpload, MediaUploadCheck, useBlockProps, InspectorControls } from "@wordpress/block-editor";
import {  PanelBody, TextControl, RangeControl, ToggleControl, ColorPalette, Button } from "@wordpress/components";

import { Fragment } from "@wordpress/element";
import { __ } from "@wordpress/i18n";

export default function Edit({attributes, setAttributes}){
    const {name, 
        designation, 
        description, 
        imageUrl, 
        imageId, 
        facebookUrl, 
        linkedinUrl, 
        twitterUrl, 
        buttonText, 
        buttonUrl, 
        showSocial, 
        cardBackground, 
        nameColor, 
        designationColor, 
        buttonColor, 
        buttonTextColor, 
        imageSize } = attributes;

        const blockProps= useBlockProps({
            className: "team-member-editor",
        });
        const colors = [
            {name: "blue", color: "#0073aa"},
            {name: "dark", color: "#111827"},
            {name: "gray", color: "#64748b"},
            {name: "green", color: "#16a34a"},
            {name: "red", color: "#dc2626"},
            {name: "white", color: "#ffffff"}
        ];

        return (
            <Fragment>
                <InspectorControls>
                    <PanelBody
                    title={__("profile image", "team-member-block")}
                    initialOpen={true}
                    >
                        <MediaUploadCheck>
                            <MediaUpload
                            onSelect={(media) => {
                                setAttributes({
                                    imageUrl: media.url,
                                    imageId: media.id
                                });
                            }}
                            value={imageId}
                            allowedTypes={['image']}
                            render={({open}) => (
                               <Button
                               variant="primary"
                               onClick={open}
                               >
                                {imageUrl ? __( "Change Image", "team-member-block" ) : __("Select Image", "team-member-block")}
                               </Button>
                            )}

                            />
                        </MediaUploadCheck>
                        {imageUrl && (
                            <Button
                            variant="tertiary"
                            isDestructive
                            onClick={() => {
                                setAttributes({
                                    imageUrl: '',
                                    imageId: undefined
                                })
                            }}
                            >
                                {__("Remove Image", "team-member-block")}
                            </Button>
                        )}
                        <RangeControl
                        label={__("Image size", "team-member-block")}
                        value={imageSize}
                        onChange={(value) => {
                            setAttributes({ imageSize: value })
                        }}
                        min={80}
                        max={250}
                        />
                    </PanelBody>
                        <PanelBody
                        title={__("Social Links", "team-member-block")}
                        initialOpen={false}
                        >
                            <ToggleControl 
                            title={__("Show Social Links", "team-member-block")}
                            checked={showSocial}
                            onChange={(value)=> {
                                setAttributes({showSocial: value})
                            }}
                            />
                            <TextControl 
                            label="Facebook Url"
                            value={facebookUrl}
                            onChange={(value) => {
                                setAttributes({facebookUrl: value})
                            }}
                            />
                            <TextControl 
                            label="Linkedin  Url"
                            value={linkedinUrl}
                            onChange={(value) => {
                                setAttributes({linkedinUrl: value})
                            }}
                            />
                            <TextControl 
                            label="twitter Url"
                            value={twitterUrl}
                            onChange={(value) => {
                                setAttributes({twitterUrl: value})
                            }}
                            />

                        </PanelBody>

                    <PanelBody
                    title={__("Button settings", "team-member-block")}
                    initialOpen={false}
                    >
                        <TextControl
                        label={__("button text", "team-member-block")}
                        value={buttonText}
                        onChange={(value)=> {
                            setAttributes({buttonText: value})
                        }}
                        />
                        <TextControl 
                        label={__("button url", "team-member-block")}
                        value={buttonUrl}
                        onChange={(value)=> {
                            setAttributes({buttonUrl: value})
                        }}
                        />
                        <p>{__("Button Background", "team-member-block")}</p>
                        <ColorPalette
                        colors={colors}
                        value={buttonColor}
                        onChange={(value)=> {
                            value&& setAttributes({buttonColor: value})
                        }}
                        />
                         <p>{__("Button text color", "team-member-block")}</p>
                         <ColorPalette
                         colors={colors}
                         value={buttonTextColor}
                         onChange={(value) => {
                            value && setAttributes({buttonTextColor: value})
                         }}
                         />

                    </PanelBody>
                    <PanelBody
                    title={__("Colors settings", "team-member-block")}
                    initialOpen={false}
                    >
                        <p>{__("card background", "team-member-block")}</p>
                        <ColorPalette
                        colors={colors}
                        value={cardBackground}
                        onChange={(value)=> {
                            value&& setAttributes({cardBackground: value})
                        }}
                        />
                        <p>{__("name color", "team-member-block")}</p>
                        <ColorPalette
                        colors={colors}
                        value={nameColor}
                        onChange={(value)=> {
                            value && setAttributes({nameColor: value})
                        }}
                        />
                        <p>{__("designation color", "team-member-block")}</p>
                        <ColorPalette
                        colors={colors}
                        value={designationColor}
                        onChange={(value)=> {
                            value && setAttributes({designationColor: value})
                        }}
                        />
                    </PanelBody>

                </InspectorControls>

                <div {...blockProps}>
                    <div
                    className="team-member-card"
                    style={{backgroundColor: cardBackground}}
                    >
                        {imageUrl ? (
                            <img
                            className="team-member-image"
                            alt={name}
                            style={{
                                height: `${imageSize}px`,
                                weight: `${imageSize}px`
                            }}
                            />
                        ): (
                            <div
                            className="team-member-placeholder"
                            style={{
                                height: `${imageSize}px`,
                                weight: `${imageSize}px`
                            }}
                            > 
                            {__("select a profile image", "team-member-block")}
                            </div>
                        )}

                        <RichText 
                        tagName="h3"
                        className="team-member-name"
                        value={name}
                        onChange={(value)=> {
                            setAttributes({name: value})
                        }}
                        placeholder={__("Member Name", "team-member-block")}
                        style={{color: nameColor}}
                        allowedFormats={[]}
                        />
                        <RichText
                        tagName="p"
                        className="team-member-designation"
                        value={designation}
                        onChange={(value)=> {
                            setAttributes({designation: value})
                        }}
                        placeholder={__("Job Title", "team-member-block")}
                        style={{color: designation}}
                        allowedFormats={[]}
                        />
                        <RichText
                        tagName="p"
                        className="team-member-description"
                        value={description}
                        onChange={(value)=> {
                            setAttributes({description: value})
                        }}
                        placeholder={__("write a short bio...", "team-member-block")}
                        />
                        {showSocial && (
                            <div className="team-member-social">
                                {facebookUrl && (
                                    <a href={facebookUrl} target="_blank" rel="noreferrer" >Facebook</a>
                                )}
                                {linkedinUrl && (
                                    <a href={linkedinUrl} target="_blank" rel="noreferrer">Linkedin</a>
                                )}
                                 {twitterUrl && (
                                    <a href={twitterUrl} target="_blank" rel="noreferrer">twitter</a>
                                )}
                                 </div>
                        )}
                        <a
                        className="team-member-button"
                        href={buttonUrl || "#"}
                        style={{
                            color: buttonTextColor,
                            backgroundColor: buttonColor
                        }}
                        >
                            {buttonText || __("view profile", "team-member-block")}
                        </a>

                    </div>
                </div>

            </Fragment>
        )
}























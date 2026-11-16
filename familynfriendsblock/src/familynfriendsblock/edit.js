
import { useBlockProps } from "@wordpress/block-editor";
import { Button } from "@wordpress/components";
import { useDispatch } from "@wordpress/components";


export default function Edit({attributes, setAttributes, clientId}){
    const { name, role } = attributes;
    const { updateBlockAttributes } = useDispatch('core/block-editor');
    const changeName = () => {
        updateBlockAttributes(
            clientId,
            {
                name: "Gandhi!"
            }
        );
    }
    const changeRole = () => {
        updateBlockAttributes(
            clientId,
            {
                role: "Gutenberg developer"
            }
        );
    }
    return(
        <div {...useBlockProps()}>
            <h3>{name}</h3>
            <p>{role}</p>
            <Button
            onClick={changeName}
            >
            Change Name
            </Button>
            <Button
            onClick={changeRole}

            >
               Change Role 
            </Button>
        </div>
    )
}


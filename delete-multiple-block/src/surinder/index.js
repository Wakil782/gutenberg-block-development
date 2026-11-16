import { registerBlockType } from "@wordpress/blocks";
import metadate from "./block.json";
import Edit from "./edit";
registerBlockType(metadate.name, {
    edit: Edit,
    save: () => null,
});
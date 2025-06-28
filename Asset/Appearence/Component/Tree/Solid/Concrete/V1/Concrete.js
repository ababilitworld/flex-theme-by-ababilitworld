// classes/GenericTree.js
import AbstractTree from "../Base/AbstractTree.js";
import TreeNode from "./TreeNode.js";

export default class GenericTree extends AbstractTree 
{
    constructor(data) 
    {
        super(data);
        this.buildTree();
    }

    buildTree() 
    {
        this.data.forEach(item => {
            this.addNode(new TreeNode(item.node, item.parent, item.children));
        });

        this.data.forEach(item => {
            if (item.parent) {
                this.getNode(item.parent).addChild(this.getNode(item.node));
            } else {
                this.root = this.getNode(item.node);
            }
        });
    }

    getHTML(node = this.root) 
    {
        if (!node) return "";
        let html = `<li><span class="node-name" data-node="${node.name}">${node.name}</span>`;
        if (node.children.length > 0) {
            html += "<ul>";
            node.children.forEach(child => {
                html += this.getHTML(child);
            });
            html += "</ul>";
        }
        html += "</li>";
        return html;
    }
}

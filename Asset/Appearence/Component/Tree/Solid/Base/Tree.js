// Base/Tree.js
import Tree from "../Contract/Tree.js";

export default class Tree extends Tree 
{
    constructor(data = []) 
    {
        super();
        if (new.target === Tree) {
            throw new Error("Cannot instantiate an abstract base class.");
        }
        this.nodes = {};
        this.root = null;
        this.data = data;
    }

    addNode(node) {
        this.nodes[node.name] = node;
    }

    getNode(name) {
        return this.nodes[name] || null;
    }
}

class UI {
    constructor(tree) {
        this.tree = tree;
        this.container = document.getElementById("tree-container");
    }

    async render() {
        await this.tree.buildTree();
        this.displayTree(this.tree.getTreeData());
    }

    displayTree(nodes, parentElement = this.container) {
        nodes.forEach(node => {
            const div = document.createElement("div");
            div.textContent = node.node;
            div.classList.add("tree-node");
            parentElement.appendChild(div);

            if (node.children.length > 0) {
                const childContainer = document.createElement("div");
                childContainer.classList.add("tree-children");
                parentElement.appendChild(childContainer);
                this.displayTree(node.children, childContainer);
            }
        });
    }
}

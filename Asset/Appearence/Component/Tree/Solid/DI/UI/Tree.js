// classes/UI.js
import GenericTree from "./GenericTree.js";

export default class UI {
    static nodeDetails = {
        "Node1": "Description for Node1.",
        "Node2": "Description for Node2.",
        "Node3": "Description for Node3.",
        // Add more node details here
    };

    constructor(data) {
        this.tree = new GenericTree(data);
    }

    renderTree() {
        document.getElementById("tree-container").innerHTML = `<ul>${this.tree.getHTML()}</ul>`;
        this.addClickEvents();
    }

    addClickEvents() {
        document.querySelectorAll(".node-name").forEach(element => {
            element.addEventListener("click", e => {
                this.showNodeDetails(e.target.dataset.node);
            });
        });
    }

    showNodeDetails(nodeName) {
        document.getElementById("modal-title").innerText = nodeName;
        document.getElementById("modal-description").innerText = UI.nodeDetails[nodeName] || "Details not available.";
        document.getElementById("node-modal").style.display = "block";
    }

    closeModal() {
        document.getElementById("node-modal").style.display = "none";
    }
}

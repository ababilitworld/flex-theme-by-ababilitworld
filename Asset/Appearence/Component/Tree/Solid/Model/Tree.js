// data.js
export const CLASSIFICATION_DATA = [
    { node: "Root", parent: null, children: ["Node1", "Node2"] },
    { node: "Node1", parent: "Root", children: ["Node1.1", "Node1.2"] },
    { node: "Node2", parent: "Root", children: ["Node2.1"] },
    { node: "Node1.1", parent: "Node1", children: [] },
    { node: "Node1.2", parent: "Node1", children: [] },
    { node: "Node2.1", parent: "Node2", children: [] }
];

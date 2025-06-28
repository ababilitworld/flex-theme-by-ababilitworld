class APITreeService 
{
    constructor(apiUrl) {
        this.apiUrl = apiUrl;
    }

    async fetchTreeData() {
        try {
            const response = await fetch(this.apiUrl);
            const data = await response.json();

            // Convert API data into the required tree format
            return this.transformDataToTree(data);
        } catch (error) {
            console.error("API fetch error:", error);
            return [];
        }
    }

    transformDataToTree(data) {
        // Assuming API returns flat data with node, parent, child structure
        const tree = [];
        const nodeMap = new Map();

        data.forEach(item => {
            nodeMap.set(item.node, { ...item, children: [] });
        });

        data.forEach(item => {
            if (item.parent !== null) {
                nodeMap.get(item.parent).children.push(nodeMap.get(item.node));
            } else {
                tree.push(nodeMap.get(item.node));
            }
        });

        return tree;
    }
}

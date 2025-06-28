class GenericTree extends AbstractTree {
    constructor(apiService) {
        super();
        this.apiService = apiService;
        this.treeData = [];
    }

    async buildTree() {
        this.treeData = await this.apiService.fetchTreeData();
    }

    getTreeData() {
        return this.treeData;
    }
}

class App 
{
    constructor() 
    {
        this.data = new Data();
        this.modal = new Modal("infoModal", "modalOverlay");
    }

    showData(index) 
    {
        const info = this.data.getData(index);
        if (info) 
        {
            this.modal.open(info);
        }
    }
}
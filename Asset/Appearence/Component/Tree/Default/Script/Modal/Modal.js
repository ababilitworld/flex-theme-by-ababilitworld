class Modal 
{
    constructor(modalId, overlayId) 
    {
        this.modal = document.getElementById(modalId);
        this.overlay = document.getElementById(overlayId);
        this.titleElement = this.modal.querySelector("#modalTitle");
        this.bodyElement = this.modal.querySelector("#modalBody");
        this.overlay.addEventListener("click", () => this.close());
    }

    open(data) 
    {
        this.titleElement.innerHTML = `
            <p><strong>Title:</strong> ${data.name}</p>
        `;
        this.bodyElement.innerHTML = `
            <p><strong>Definition:</strong> ${data.definition}</p>
            <p><strong>Condition:</strong> ${data.condition}</p>
            <p><strong>Duration:</strong> ${data.duration}</p>
            <p><strong>Example:</strong> <em>${data.example}</em></p>
            <p><strong>Explanation:</strong> ${data.explanation}</p>
        `;
        this.overlay.style.display = "block";
        this.modal.style.display = "block";
    }

    close() 
    {
        this.overlay.style.display = "none";
        this.modal.style.display = "none";
    }
}
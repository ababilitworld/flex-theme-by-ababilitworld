document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.alphabet-grid div').forEach(function (el) {
        el.addEventListener('click', function () {
            var soundName = this.getAttribute('data-sound');
            if (soundName) {
                var audio = new Audio('assets/sounds/' + soundName + '.mp3');
                audio.play();
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.tree-container tree span').forEach(function (el) {
        el.addEventListener('click', function () {
            var nodeIndex = this.getAttribute('data-index');
            if (nodeIndex) {
                App.showData(nodeIndex);
            }
        });
    });
});
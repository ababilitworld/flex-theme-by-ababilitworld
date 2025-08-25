function rgbToHex(rgb) {
    let result = rgb.match(/\d+/g);
    return "#" + result.map(x => {
        let hex = parseInt(x).toString(16);
        return hex.length == 1 ? "0" + hex : hex;
    }).join('');
}

jQuery(document).ready(function ($) {

    // Update value & background when color is changed
    $('.ababilithub input[type="color"]').on('input change', function () {
        let color = $(this).val();
        this.setAttribute('value', color);
    });
});

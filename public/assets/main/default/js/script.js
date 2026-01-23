

let popup_container = $('#popup-container');
let popup_overlay = $('#popup-overlay');
let popup_activator = $('#popup-activator');

popup_activator.on('click', () => {
    popup_container.toggleClass('active')
})

popup_overlay.on('click', () => {
    popup_container.removeClass('active')
})
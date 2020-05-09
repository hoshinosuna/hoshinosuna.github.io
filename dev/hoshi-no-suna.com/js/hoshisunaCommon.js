// FLOW
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('flow-toggle-btn')
        .addEventListener('click', function() {
            document.querySelector('.flow-list').classList.toggle('is-open');
            document.querySelector('#flow-toggle-btn').classList.toggle('is-open');
        });
}, false);

// notice
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('close-notice')
        .addEventListener('click', function() {
            document.querySelector('#notice').classList.toggle('close');
            document.querySelector('#header-section').classList.toggle('hide');
        });

    var isHiddenMenu = document.getElementById('hidden-menu-checkbox1').checked;
    if (isHiddenMenu) {
        document.querySelector('#header-section').classList.toggle('hide');
    }

}, false);


// FAQ
function toggleAnswer(num) {
    document.querySelector('#question' + num).classList.toggle('open');
}

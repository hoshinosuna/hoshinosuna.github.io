document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('flow-toggle-btn')
        .addEventListener('click', function() {
            document.querySelector('.flow-list').classList.toggle('is-open');
        });
}, false);

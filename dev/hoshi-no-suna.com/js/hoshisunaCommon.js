// FLOW
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('flow-toggle-btn')
    .addEventListener('click', function() {
      document.querySelector('.flow-list').classList.toggle('is-open');
      document.querySelector('#flow-toggle-btn').classList.toggle('is-open');
    });
}, false);



// FAQ
$(function() {
  $('.question').on('click', function() {
    $(this).next('.answer').slideToggle();
    $(this).toggleClass('open');
  });
});


function toggleAnswer(num) {
  // alert('#question' + num);
  document.querySelector('#question' + num).classList.toggle('open');

}

const backToTopButton = document.querySelector('.back-to-top')

function backToTop() {
  if (window.scrollY >= 1000) {
    backToTopButton.classList.add('show')
  } else {
    backToTopButton.classList.remove('show')
  }
}

// /* When Scroll*/
window.addEventListener('scroll', function () {
  backToTop()
})

const backToTopButton = document.querySelector('.back-to-top ')

function backToTop() {
  if (window.scrollY >= 1) {
    backToTopButton.classList.add('show')
  } else {
    backToTopButton.classList.remove('show')
  }
}

// const menuVisible = document.querySelector('#header ')

// function header() {
//   if (window.scrollY >= 1) {
//     menuVisible.classList.add('show')
//   } else {
//     menuVisible.classList.remove('show')
//   }
// }
// /* When Scroll*/
// window.addEventListener('scroll', function () {
//   backToTop()
//   header()
// })

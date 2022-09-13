function validate() {
  var email = document.getElementById('floatingInput')

  if (email.value == '') {
    alert('Nome não informado')

    email.focus()
  }
}

// function validate() {
//   var password = document.getElementById('floatingPassword')

//   if (password.value == '') {
//     alert('senha não informado')

//     password.focus()
//   }
// }

function checkForm() {
  const inputs = document.getElementsByClassName('required')
  const len = inputs.length
  var validation = true

  for (let i = 0; i < len; i++) {
    if (!inputs[i].value) {
      validation = false
    }
  }

  if (!validation) {
    alert('Preencha os campos obrigatorios *')
    return false
  } else {
    return true
  }
}

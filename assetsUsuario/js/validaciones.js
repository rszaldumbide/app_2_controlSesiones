function validador(evt) {
  let cod = evt.which ? evt.which : evt.keyCode;

  if (cod >= 48 && cod <= 57) {
    return true;
  } else {
    return false;
  }
}

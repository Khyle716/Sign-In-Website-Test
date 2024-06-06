function showPass() {
  var passInput = document.getElementById("EnterPassword");
  var btn = document.getElementById("PassVisible");
  
  if (passInput.type === "password") {
    passInput.type = "text"
    passInput.placeholder = " "
    btn.value = "—"
  } else {
    passInput.type = "password"
    btn.value = "O"
    passInput.placeholder = "Enter Password"
  }
}
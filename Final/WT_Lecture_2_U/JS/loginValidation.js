function handleValidate() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  let hasEmailError = true;
  let hasPasswordError = true;
  if (!email) {
    document.getElementById("emailErr").innerHTML = "Email is not valid";
    hasEmailError = true;
  } else {
    document.getElementById("emailErr").innerHTML = "";
    hasEmailError = false;
  }

  if (password.length < 6) {
    document.getElementById("passErr").innerHTML =
      "Password must contain 6 char";
    hasPasswordError = true;
  } else {
    document.getElementById("passErr").innerHTML = "";
    hasPasswordError = false;
  }
  if (hasEmailError || hasPasswordError) {
    return false;
  }
}

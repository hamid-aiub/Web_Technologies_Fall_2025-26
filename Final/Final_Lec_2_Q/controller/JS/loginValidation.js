function handleValidation() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  let hasEmailError = true;
  let hasPasswordError = true;
  if (!email) {
    document.getElementById("emailErr").innerHTML = "Email filed is required";
    hasEmailError = true;
  } else {
    document.getElementById("emailErr").innerHTML = "";
    hasEmailError = false;
  }

  if (!password) {
    document.getElementById("passwordErr").innerHTML =
      "Password field is required";
    hasPasswordError = true;
  } else if (password.length < 6) {
    document.getElementById("passwordErr").innerHTML =
      "Password must contain 6 character";
    hasPasswordError = true;
  } else {
    document.getElementById("passwordErr").innerHTML = "";
    hasPasswordError = false;
  }

  if (hasEmailError || hasPasswordError) {
    return false;
  } else {
    return true;
  }
}

function handleValidation() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
  const isValidEmail = emailPattern.test(email);

  let hasEmailErr = true;
  let hasPasswordErr = true;
  if (!email) {
    document.getElementById("emailErr").innerHTML = "Email field is required";
    hasEmailErr = true;
  } else if (!isValidEmail) {
    document.getElementById("emailErr").innerHTML = "Email is not valid";
  } else {
    document.getElementById("emailErr").innerHTML = "";
    hasEmailErr = false;
  }

  if (!password) {
    document.getElementById("passErr").innerHTML =
      "Passeword field is required";
    hasPasswordErr = true;
  } else if (password.length < 6) {
    document.getElementById("passErr").innerHTML =
      "Password can not be less than 6 char";
    hasPasswordErr = true;
  } else {
    document.getElementById("passErr").innerHTML = "";
    hasPasswordErr = false;
  }

  if (hasEmailErr || hasPasswordErr) {
    return false;
  } else {
    return true;
  }
}

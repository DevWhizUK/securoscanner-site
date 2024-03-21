document.getElementById("password").addEventListener("input", function () {
  var passwordValue = this.value;
  var strength = zxcvbn(passwordValue).score;
  var strengthBar = document.getElementById("strengthBar");
  var strengthValue = strength * 25; // Convert strength score to a percentage

  strengthBar.style.width = strengthValue + "%";

  strengthBar.classList.remove(
    "bg-red-500",
    "bg-yellow-500",
    "bg-blue-500",
    "bg-green-500"
  );
  if (passwordValue) {
    switch (strength) {
      case 0:
      case 1:
        strengthBar.classList.add("bg-red-500"); // Weak
        break;
      case 2:
        strengthBar.classList.add("bg-yellow-500"); // Fair
        break;
      case 3:
        strengthBar.classList.add("bg-blue-500"); // Good
        break;
      case 4:
        strengthBar.classList.add("bg-green-500"); // Strong
        break;
    }
  } else {
    strengthBar.style.width = "0%"; // Clear bar when input is empty
  }
});

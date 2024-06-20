function validateForm() {
    var email = document.getElementById("email").value;
    var phone_number = document.getElementById("phone_number").value;
    var name = document.getElementById("name").value;
    var needs = document.getElementById("needs").value;

    // Check if name, email, and password are not empty
    if (email === "" || phone_number === "" || name == "" || needs == "") {
      alert("Please fill in all fields");
      return false;
    }

    // Check if the email is valid
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
      alert("Please enter a valid email address");
      return false;
    }

    // Check if the phone number is at least 10 characters long
    if (phone_number.length < 10) {
      alert("Phone number must be at least 10 characters long");
      return false;
    }

    // Form is valid, allow submission
    return true;
  }
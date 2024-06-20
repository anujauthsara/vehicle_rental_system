
  function pcheck()
  {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "admin" && password == "1234")
        {  
        window.location.href = "user_data.php";
        } 
    else 
        {
        alert("Invalid credentials. Please try again.");
        }
  
  }
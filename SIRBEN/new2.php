<!DOCTYPE html>
<html>
<head>
  <title>Sign-up Form Validation</title>
  <script>
    function validateSignUp() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var name = document.getElementById("name").value;

      // Regular expressions for validation
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

      if (!emailRegex.test(email)) {
        alert("Invalid email address");
        return false;
      }

      if (!passwordRegex.test(password)) {
        alert("Invalid password. Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, and one digit.");
        return false;
      }

      if (name.trim() === "") {
        alert("Name cannot be empty");
        return false;
      }

      // All inputs are valid
      return true;
    }
  </script>
</head>
<body>
  <h1>Sign-up Form</h1>
  <form onsubmit="return validateSignUp()">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <input type="submit" value="Sign Up">
  </form>
</body>
</html>

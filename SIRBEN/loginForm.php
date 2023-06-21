<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-dark">
    <div class="container-fluid w-50 mt-5 text-bg-dark rounded p-5">
        <form action="loginForm.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                <div id="passwordHelp" class="form-text"></div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Show Pass</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var form = document.querySelector("form");
            var emailhelp = document.getElementById("emailHelp");
            var passwordhelp = document.getElementById("passwordHelp");
            var validDomains = ["gmail.com", "yahoo.com", "hotmail.com", "outlook.com", "icloud.com"];
            var showPassword = document.getElementById("exampleCheck1");
            var password = document.getElementById("exampleInputPassword1");

            // for showing password
            showPassword.addEventListener("click", function () {
                if (showPassword.checked == true) {
                    password.type = "text";
                } else {
                    password.type = "password";
                }
            });

            // for form validation and submission
            form.addEventListener("submit", function (event) {
                event.preventDefault();


                // username and password values
                var Uname = document.getElementById("exampleInputEmail1").value;
                var Pword = document.getElementById("exampleInputPassword1").value;

                // changing the color of the help text
                passwordhelp.style.color = "red";
                emailhelp.style.color = "red";

                if (Uname.trim() == "" && Pword.trim() == "") {
                    emailhelp.innerHTML = "Please enter your email";
                    passwordhelp.innerHTML = "Please enter your password";
                } else if (Uname == "") {
                    emailhelp.innerHTML = "Please enter your email";
                } else if (Pword == "") {
                    passwordhelp.innerHTML = "Please enter your password";
                } else if (!/[a-z]/.test(Pword)) {
                    passwordhelp.innerHTML = "Password must contain at least one lowercase letter";
                } else if (!/[A-Z]/.test(Pword)) {
                    passwordhelp.innerHTML = "Password must contain at least one uppercase letter";
                } else if (!/[0-9]/.test(Pword)) {
                    passwordhelp.innerHTML = "Password must contain at least one number";
                } else if (!/[!@#$%^&*]/.test(Pword)) {
                    passwordhelp.innerHTML = "Password must contain at least one special character";
                } else if (Pword.length < 8) {
                    passwordhelp.innerHTML = "Password must be at least 8 characters";
                } else if (Uname.length < 8) {
                    emailhelp.innerHTML = "Email must be at least 8 characters";
                } else if (validDomains.includes(Uname.split("@")[1]) == false) {
                    emailhelp.innerHTML = "Please enter a valid email";
                } else {
                    console.log("Login Successful");
                    emailhelp.innerHTML = "";
                    passwordhelp.innerHTML = "";
                    alert("Login Successful");
                    form.submit();
                }
            });
        });
    </script>
</body>

</html>

<!-- regular Expression -->
<!--
    /d, /w, /s, /D, /W, /S
    [a-z], [A-Z], [0-9], [!@#$%^&*]
-->
<!DOCTYPE html>
<html>

<head>
    <title>Contactform2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/contactform2.css">
</head>

<body>
    <div class="inline">
        <div class="signup">
            <h2>Be our member here</h2><button onclick="document.getElementById('id01').style.display='block'" class="bouncy">Sign Up</button>
            <h3>Or</h3>
        </div>
        <?php include 'loginform.php'?>
    </div>
    <div id="id01" class="modal">
        <form class="modal-content" action="/action_page.php">
            <div class="container">
                <h1>Registration Form</h1>
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <p class="fill">Please fill in this form to create an account.</p>
                <hr>
                <ul>
                    <li class="name">
                        <label for="firstname">
                            <p>First name</p>
                        </label>
                        <input type="text" placeholder="Enter First name" name="firstname" required></li>
                    <li class="name"><label for="lastname">
                            <p>Last name</p>
                        </label>
                        <input type="text" placeholder="Enter Last name" name="lastname" required></li>
                    <li class="email"><label for="email">
                            <p>Email</p>
                        </label>
                        <input type="text" placeholder="Enter Email" name="email" required></li>

                    <li class="password"><label for="psw">
                            <p>Password</p>
                        </label>
                        <input type="password" placeholder="Enter Password" name="psw" required></li>

                    <li class="password"><label for="psw-repeat">
                            <p>Repeat Password</p>
                        </label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required></li>
                </ul>

                <div class="clearfix">
                    <button type="submit" class="signupbtn color-1">registrer</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <title>Contactform2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/loginform.css">
</head>

<body>
    <div class="login">
        <button onclick="document.getElementById('id02').style.display='block'">Login</button>
    </div>
    <div id="id02" class="modal1">

        <form class="modal1-content animate" action="/action_page.php" method="post">
            <div class="textcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal1">&times;</span>
                <h2>Log in</h2>
                <p class="here">Log in here using your email and password.</p>
            </div>

            <div class="logincontainer">
                <input type="text" placeholder="Enter Email" name="email" required>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <div class="logincontainer">
                <button type="submit" class="loginbtn btn-3"><span>Log in</span></button>
            </div>
        </form>
    </div>
</body>

</html>

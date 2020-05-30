<!DOCTYPE html>
<html>

<head>
    <title>Contactform3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/contactform3.css">
</head>

<body>
    <div class="signupSection">
        <form action="#" method="POST" class="signupForm" name="signupform">
            <h2>Send a message</h2>
            <ul>
                <li class="halv">
                    <label for="name"></label>
                    <input type="text" class="inputFields " id="name" name="name" placeholder="Name" value="" oninput="return NameValidation(this.value)" required />
                </li>
                <li class="halv">
                    <label for="email"></label>
                    <input type="email" class="inputFields " id="email" name="email" placeholder="Email" value="" oninput="return emailValidation(this.value)" required />
                </li>
                <li class="hel">
                    <label for="message"></label>
                    <input type="text" class="message" id="message" name="message" placeholder="Message" value="" required />
                </li>
                <button type="submit" id="request-btn" name="request" alt="request" value="request">Submit</button>
            </ul>
        </form>
        <?php include 'contactform2.php'?>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <title>Contactform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/contactform.css">
</head>

<body>
    <div class="bg" style="width:100%; height:100%;">
        <div class="signupSection">
            <form action="#" method="POST" class="signupForm" name="signupform">
                <h2>Contact Us About Your Case</h2>
                <ul class="noBullet">
                    <li>
                        <label for="name"></label>
                        <input type="text" class="inputFields" id="name" name="name" placeholder="Name" value="" oninput="return NameValidation(this.value)" required />
                    </li>
                    <li>
                        <label for="email"></label>
                        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" oninput="return emailValidation(this.value)" required />
                    </li>
                    <li>
                        <label for="message"></label>
                        <input type="text" class="inputFields" id="message" name="message" placeholder="Message" value="" required />
                    </li>
                    <button type="submit" id="request-btn" name="request" alt="request" value="request">Submit Request</button>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>

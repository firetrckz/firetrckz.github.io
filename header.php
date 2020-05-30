<!DOCTYPE html>
<html>

<head>
    <title>Header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="header">
        <img src="../media/logo.png" style="width:100%">
        <div class="headernav" id="myHeadernav">
            <div class="row">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>

                <a href="../html/contact.php">Contact</a>
                <a href="../html/casestudy.php">Case Study</a>
                <a href="../html/team.php">Team</a>
                <a href="../html/services.php">Services</a>
                <a href="../html/about.php">About</a>
                <a href="../html/index.php" class="active">Home</a>

            </div>
            <div class="row">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search here" name="search" class="search-box">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("myHeadernav");
                if (x.className === "headernav") {
                    x.className += " responsive";
                } else {
                    x.className = "headernav";
                }
            }

        </script>
    </div>
</body>

</html>

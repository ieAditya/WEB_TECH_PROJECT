<?php
session_start();
if(!isset($_SESSION['username']))
    header('location : index.html')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/sections.css">
<link rel="stylesheet" href="css/footer.css">


<body>
    <nav class="header">
        <div class="left">
            <a href="home.php"><img src="images/logo.png" alt=""></a>
        </div>
        <div class="mid">
        <ul class="navbar">
        <li><a href="home.php" class="active">HOME</a></li>
                <li><a href="https://rog.asus.com/articles/" target = "_blank">ABOUT</a></li>
                <li><a href="https://www.apunkagames.biz/" target="_blank">GAMES</a></li>
                <li><a href="https://rog.asus.com/articles/news/" target="_blank">NEWS</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </div>
        <div class="right">
            <div class="user"><?php echo $_SESSION['username']; ?></div>
            <div><a href="logout.php" class="link_btn">LOGOUT</a></div>
        </div>
    </nav>

    <div class="section1">
        <div class="container-left1">
            <p>We collected 16 of the best free online gta games.
                These games include browser games for both your computer and mobile devices,
                as well as apps for your Android and iOS phones and tablets.
                They include new gta games such as and top gta games such as Downtown 1930s Mafia,
                Grand Action Simulator: New York Car Gang, and Mad Town Andreas: Mafia Storie.</p>
        </div>
        <div class="container-right1">
            <img src="images/2.jpg" alt="">
        </div>
    </div>

    <div class="section2">
        <div class="container-right2">
            <img src="images/3.jpg" alt="">
        </div>
        <div class="container-left2">
            <p>The Netherrealm studio created one of the most popular games
                 in the world, Mortal Kombat. There are huge, high-quality 
                 shots from the games, which have made this website bright 
                 and impressive. The main emphasis on this website is on the 
                 game itself rather than on corporate info. We collected 16 of the best free online gta games.
                 These games include browser games for both your computer and mobile devices,
                 as well as apps for your Android and iOS phones and tablets.
                 They include new gta games such as and top gta games such as Downtown 1930s Mafia,
                 Grand Action Simulator: New York Car Gang, and Mad Town Andreas: Mafia Storie.
            </p>
        </div>
    </div>

    <div class="section3">
        <div class="container-left3">
            <p>We collected 16 of the best free online gta games.
                These games include browser games for both your computer and mobile devices,
                as well as apps for your Android and iOS phones and tablets.
                They include new gta games such as and top gta games such as Downtown 1930s Mafia,
                Grand Action Simulator: New York Car Gang, and Mad Town Andreas: Mafia Storie.
                We collected 16 of the best free online gta games.
                These games include browser games for both your computer and mobile devices,
                as well as apps for your Android and iOS phones and tablets.
                They include new gta games such as and top gta games such as Downtown 1930s Mafia,
                Grand Action Simulator: New York Car Gang, and Mad Town Andreas: Mafia Storie.
            </p>
        </div>
        <div class="container-right3">
            <img src="images/4.jpg" alt="">
        </div>
    </div>

    <footer>
        <div>
            <p>Reach us</p>
        </div>
        <div class="footer_div1">
            <ul>
                <li>
                    <a href="https://www.facebook.com/ASUSROGInd/"><img src="images/fb.png" alt=""></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/asusrog.in/?hl=en" target="_blank"><img src="images/insta.png" alt=""></a>
                </li>
                <li>
                    <a href="https://twitter.com/asus_rog_in?lang=en"><img src="images/twitter.png" alt=""></a>
                </li>
            </ul>
        </div>
        <div class="footer_div2">
            <p>Terms and conditions apply</p>
        </div>
        <div class="footer_div3">
            <a href="https://rog.asus.com/in/" target="_blank">rog.asus.com</a>
        </div>
    </footer>
</body>

</html>
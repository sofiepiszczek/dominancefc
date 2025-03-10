<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>About</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/629904b720.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include ("includes/navbar.php");
?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center text-white text-center">
        <div>
            <p class="h1 text-primary py-5 custom-text">ABOUT</p>
        </div>

        <div class="">
            <img src="images/about1.jpg" class="w-75 px-3" alt="Portræt af Mark O. Madsen">
        </div>

        <div class="text-start p-5">
            <p class="h5 text-primary custom-text mb-3">WHAT IS DOMINANCE FC?</p>
            <p class="h6 text-uppercase lh-lg">Dominance FC, short for <span class="text-primary">Dominance Fighting Championship</span>, was established by three-time Olympian and UFC veteran <span class="text-primary">Mark O. Madsen</span>. Dominance FC’s vision is to establish Europe’s <span class="text-primary">premier fight promotion</span>, hosting multiple DFC events annually. Dominance FC is dedicated to advancing the sport of MMA in Europe, <span class="text-primary">creating exceptional experiences</span> for fighters and fans alike.</>
        </div>

        <div class="px-0">
            <img src="images/about2.jpg" class="w-100 img-fluid" alt="Billede af ringen">
        </div>

        <div class="text-start p-5">
            <p class="h5 text-primary custom-text mb-3">WHY DOMINANCE FC?</p>
            <p class="h6 text-uppercase lh-lg">MMA, or Mixed Martial Arts, is the <span class="text-primary">world’s fastest-growing sport</span>, and we see <span class="text-primary">enormous potential</span> in the European MMA scene. Dominance FC aims to create a platform that matches this growth, promotes the sport in Europe, and provides <span class="text-primary">European talents</span> with an international stage to develop their potential and build their brand.</p>
        </div>

        <div class="px-0">
            <img src="images/about3.jpg" class="w-100 img-fluid" alt="Billede af Mark O. Madsen">
        </div>
    </div>
</div>
















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


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

    <title>Previous Fights</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/30d6e0b537.js" crossorigin="anonymous"></script>

    <!-- Favicon !-->
    <link rel="icon" type="image/x-icon" href="images/DominanceFavicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include ("includes/navbar.php");
?>




<div class="container">
    <div class="row text-center justify-content-center align-items-center">

        <div class="">
            <p class="h1 text-primary py-5 custom-text">PREVIOUS <br> FIGHTS</p>
        </div>


        <div class="col-12 col-md-9 col-lg-6 p-4 pb-5">
            <p class="h6 text-white text-start ps-4 custom-text">FIGHTS FROM DFC 2.O</p>
            <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/E2Kc_AKUBk0?si=LZsiCSIhCpzc9XIR" class="p-lg-3 p-md-2 p-1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/7792kUMUu7Y?si=xWpejm-oZhd7Jd-s" class="p-lg-3 p-md-2 p-1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

        <div class="mb-5">
            <button class="btn btn-primary rounded-2 px-5 py-2 text-white custom-text">VIEW MORE</button>
        </div>

        <div class="col-12 col-md-9 col-lg-6 p-4 pb-5">
            <p class="h6 text-white text-start ps-4 custom-text">FIGHTS FROM DFC 1.0</p>
            <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/Suqe9wlgYu0?si=kXIs3FfQcHCsHZ7p" class="p-lg-3 p-md-2 p-1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/RBqi4cHE-I8?si=TB5FMDcF1K-LeJfe" class="p-lg-3 p-md-2 p-1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>        </div>
        </div>
        <div class="mb-5">
            <button class="btn btn-primary rounded-2 px-5 py-2 text-white custom-text">VIEW MORE</button>
        </div>


    </div>
</div>



<?php
include ("includes/footies.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


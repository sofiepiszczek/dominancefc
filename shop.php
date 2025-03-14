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

    <title>Merch</title>

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
include("includes/navbar.php");
?>


<h1 class="custom-text text-primary text-center py-5">MERCH</h1>

<div class="container-fluid eventbaggrund w-100 pb-lg-4">
    <div class="row text-center justify-content-center">

        <div class="py-5 reveal">
            <p class="h4 text-white mb-0 custom-text">DRESS WITH <br> <span class="h2">DOMINANCE!</span></p>
        </div>

        <div class="col-12 col-md-5 pb-5 reveal">
            <img src="images/ilovemarkTee.jpg" class="w-75" alt="Billede af trøje">
            <p class="h6 text-white custom-text mt-4">UNISEX BLACK I <3 MARK T-SHIRT</p>
            <p class="h6 text-white custom-text my-3">€30</p>
            <a href="#" class="btn btn-primary text-white py-1 px-3 custom-text">BUY</a>
        </div>

        <div class="col-12 col-md-5 pb-5 reveal">
            <img src="images/dominanceCageTee.jpg" class="w-75" alt="Billede af trøje">
            <p class="h6 text-white custom-text mt-4">UNISEX BLACK DFC CAGE T-SHIRT</p>
            <p class="h6 text-white custom-text my-3">€30</p>
            <a href="#" class="btn btn-primary text-white py-1 px-3 custom-text">BUY</a>
        </div>

        <div class="col-12 col-md-5 pb-5 reveal">
            <img src="images/logoOutlineTee.png" class="w-75" alt="Billede af trøje">
            <p class="h6 text-white custom-text mt-4">UNISEX BLACK AD LOGO T-SHIRT</p>
            <p class="h6 text-white custom-text my-3">€30</p>
            <a href="#" class="btn btn-primary text-white py-1 px-3 custom-text">BUY</a>
        </div>

        <div class="col-12 col-md-5 pb-5 reveal">
            <img src="images/dOutlineTee.png" class="w-75" alt="Billede af trøje">
            <p class="h6 text-white custom-text mt-4">UNISEX BLACK AD OUTLINE T-SHIRT</p>
            <p class="h6 text-white custom-text my-3">€30</p>
            <a href="#" class="btn btn-primary text-white py-1 px-3 custom-text">BUY</a>
        </div>

        <div class="col-12 col-md-5 pb-5 reveal">
            <img src="images/bodyTee.jpg" class="w-75" alt="Billede af trøje">
            <p class="h6 text-white custom-text mt-4">UNISEX BLACK DFC BODY T-SHIRT</p>
            <p class="h6 text-white custom-text my-3">€30</p>
            <a href="#" class="btn btn-primary text-white py-1 px-3 custom-text">BUY</a>
        </div>

        <div class="col-12 col-md-5 pb-5 reveal">
            <img src="images/bodyCap.jpg" class="w-75" alt="Billede af cap">
            <p class="h6 text-white custom-text mt-4">UNISEX BLACK DFC BODY CAP</p>
            <p class="h6 text-white custom-text my-3">€25</p>
            <a href="#" class="btn btn-primary text-white py-1 px-3 custom-text">BUY</a>
        </div>

    </div>
</div>


<?php
include("includes/footies.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>


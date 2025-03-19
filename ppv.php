<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Payperview</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Favicon !-->
    <link rel="icon" type="image/x-icon" href="images/DominanceFavicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include("includes/navbar.php");
?>

<h1 class="custom-text text-primary text-center py-5">PAYPERVIEW</h1>

<div class="container-fluid">
    <div class="row">
        <div class="hero-section d-flex flex-column align-items-center justify-content-center text-white custom-text">
            <div class="col-md-7 text-center">
                <h2 class="reveal py-5 mt-3 fs-1 text-white">WATCH ADFC <br> ONLINE WITH PLUTO TV</h2>
            </div>

            <div class="col-md-6 text-center">
                <a class="btn btn-primary rounded-2 text-white w-75 py-2 py-md-3 fs-5 px-4" href="https://pluto.tv/dk/on-demand" target="_blank">WATCH ADFC
                    HERE</a>
            </div>
        </div>
    </div>
</div>
<div class="container pb-3">
    <div class="row">
        <div class="reveal col-12 d-inline-flex justify-content-center">
            <div class="col-9 col-md-6 col-lg-3 py-5 my-3 text-center ps-5">
                <a target="_blank" href="https://pluto.tv/dk/on-demand"><img src="images/Plutopng.png" class="img-fluid" alt="Pluto Logo"></a>
            </div>
        </div>
        <div class="reveal col-12 text-center text-white custom-text mb-4">
            <h2 class="fs-1">DISCOVER<br><span class="fs-5">MORE FROM</span><br> DOMINANCE</h2>
        </div>
        <div class="col-12 text-center my-4">
            <a href="behindTheScenes.php" class="btn btn-primary rounded-2 text-white custom-text py-2">CLICK HERE</a>
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

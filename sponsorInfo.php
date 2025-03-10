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

    <title>Sponsor Info</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/30d6e0b537.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include ("includes/navbar.php");
?>


<div class="container">
    <div class="row text-center justify-content-center align-items-center">

        <div class="">
            <p class="h1 text-primary py-5 custom-text">SPONSOR <br> INFO</p>
        </div>


        <div class="col-12 px-4 pb-5">
            <iframe width="300" height="168" src="https://www.youtube.com/embed/ikyIMVTR-eA?si=RvKKVmGCMG921KoP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <div class="mb-5">
            <p class="h1 text-white custom-text">BE OUR <br> CORNERMAN</p>
        </div>


        <div class="mb-5">
            <button class="btn btn-primary rounded-2 px-5 py-2 text-white custom-text">CONTACT</button>
        </div>

    </div>
</div>




<?php
include ("includes/footies.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

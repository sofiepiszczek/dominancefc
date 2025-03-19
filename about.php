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

    <!-- Favicon !-->
    <link rel="icon" type="image/x-icon" href="images/DominanceFavicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include("includes/navbar.php");
?>


<div class="container-fluid">
    <div class="row justify-content-center align-items-center text-white text-center">

        <div class="col-12">
            <p class="h1 text-primary py-5 custom-text">ABOUT</p>
        </div>

        <div class="col-md-5 col-lg-5 px-4 reveal">
            <img src="images/about1.jpg" class="w-75 img-fluid mb-4" alt="Portræt af Mark O. Madsen">
            <h6 class="text-white custom-text lh-lg">Mark O. Madsen <br> <span class="text-primary">CEO, Airtox Dominance FC</span></h6>
            <img src="images/markSigningWhite.png" class="w-50 img-fluid" alt="Marks underskrift">
        </div>
        <div class="col-md-7 col-lg-5 text-start p-5 reveal">
            <p class="h5 text-primary custom-text mb-3">WHAT IS AIRTOX DOMINANCE FC?</p>
            <h6 class="lh-lg">Airtox Dominance FC, short for <span class="text-primary">Airtox Dominance Fighting Championship</span>,
                was established by three-time Olympian and UFC veteran <span class="text-primary">Mark O. Madsen</span>.
                Airtox Dominance FC’s vision is to establish Europe’s <span
                        class="text-primary">premier fight promotion</span>, hosting multiple ADFC events annually.
                Airtox Dominance FC is dedicated to advancing the sport of MMA in Europe, <span class="text-primary">creating exceptional experiences</span>
                for fighters and fans alike.</h6>
        </div>

        <div class="col-md-6 col-lg-5 text-start p-5 order-2 order-md-1 reveal">
            <p class="h5 text-primary custom-text mb-3">WHY AIRTOX DOMINANCE FC?</p>
            <h6 class="lh-lg">MMA, or Mixed Martial Arts, is the <span class="text-primary">world’s fastest-growing sport</span>,
                and we see <span class="text-primary">enormous potential</span> in the European MMA scene. Airtox
                Dominance FC aims to create a platform that matches this growth, promotes the sport in Europe, and
                provides <span class="text-primary">European talents</span> with an international stage to develop their
                potential and build their brand.</h6>
        </div>
        <div class="col-md-6 col-lg-5 px-4 order-1 order-md-2 reveal">
            <img src="images/about2.jpg" class="img-fluid mb-4" alt="Billede af ringen">
        </div>
    </div>

    <div class="row justify-content-center reveal">
        <div class="col-md-7 col-lg-5 text-center my-5">
            <img src="images/about3.jpg" class="img-fluid" alt="Billede af Mark O. Madsen">
        </div>
    </div>
</div>

<div class="reveal mt-4 pb-4 text-center">
    <a href="#" class="btn btn-primary rounded-2 px-4 py-2 text-white custom-text">TO THE TOP</a>
</div>


<?php
include("includes/footies.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
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

    <!-- Favicon !-->
    <link rel="icon" type="image/x-icon" href="images/DominanceFavicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include("includes/navbar.php");
?>


<div class="container">
    <div class="row justify-content-center text-center">

        <div class="">
            <p class="h1 text-primary py-5 custom-text">SPONSOR <br> INFO</p>
        </div>

    <div class="col-md-6 px-5 pb-5">
        <p class="h6 text-white text-start custom-text">A WORD FROM THE PRESIDENT</p>
        <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/JoAs6WG4W-I?si=FVweBJdgs8webumR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

        <div class="col-md-12">
            <p class="h4 text-white pt-4 custom-text px-3">BENEFITS OF BEING AN AIRTOX DOMINANCE FC SPONSOR</p>
        </div>

        <div class="reveal row justify-content-center">
            <div class="col-md-5 col-lg-3 mt-5">
                <img src="images/benefitSpons1.jpg" class="w-100 mb-3" alt="billede">
                <div class="text-start text-white text-uppercase">
                    <p><span class="text-primary h5 custom-text">Gain Visibility</span> <br><br> Your business will be prominently featured at our MMA shows, on our social media platforms, and in our marketing materials.</p>
                </div>
            </div>

            <div class="reveal col-md-5 col-lg-3 mt-5">
                <img src="images/benefitSpons2.jpg" class="w-100 mb-3" alt="billede">
                <div class="text-start text-white text-uppercase">
                    <p><span class="text-primary h6 custom-text">Network with Leaders</span> <br><br> Access to the “Dominance Fight Club”, where you can network with entrepreneurs, business leaders, and MMA enthusiasts.</p>
                </div>
            </div>

            <div class="reveal col-md-5 col-lg-3 mt-5">
                <img src="images/benefitSpons3.jpg" class="w-100 mb-3" alt="billede">
                <div class="text-start text-white text-uppercase">
                    <p><span class="text-primary h5 custom-text">Exclusive Events</span> <br><br> Invitations to exclusive events and opportunities to meet fighters and other key figures in the MMA world.</p>
                </div>
            </div>

            <div class="reveal col-md-5 col-lg-3 mt-5">
                <img src="images/benefitSpons4.jpg" class="w-100 mb-3" alt="billede">
                <div class="text-start text-white text-uppercase">
                    <p><span class="text-primary h5 custom-text">Brand Association</span> <br><br> Associate your brand with a dynamic and rapidly growing sport, showcasing your support for the MMA community and professional athletes.</p>
                </div>
            </div>
        </div>

        <div class="reveal mt-5 mb-4">
            <p class="h1 text-white custom-text">BE OUR <br> CORNERMAN</p>
        </div>

        <div class="reveal mb-4">
            <a href="contact.php" class="btn btn-primary rounded-2 px-4 py-2 text-white custom-text">CONTACT</a>
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

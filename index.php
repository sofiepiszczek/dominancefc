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
    
    <title>Airtox Dominance FC</title>
    
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
include ("includes/navbar.php");
?>

<div class="container-fluid d-flex justify-content-center align-items-center banner m-0 p-0">
            <video autoplay="autoplay" muted="muted" loop="loop" class="videobg">
                <source src="video/forsidevideo.mp4" type="video/mp4">
            </video>

            <div class="tekst1 d-flex justify-content-center align-items-center h-100">
                <h1 class="custom-text bannertext text-center">FEAR <br> NOTHING</h1>
            </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-inline-flex flex-wrap justify-content-center align-items-center bg-primary bg-opacity-25 text-center custom-text py-5">
            <div class="nextEvent col-10 col-md-8 col-lg-5 card shadow-lg rounded-0 bg-secondary my-4 me-lg-4 reveal">
                <h2 class="pt-3 pt-md-4 fs-1">NEXT EVENT</h2>
                <p class="pb-1 fs-4 text-primary">26/04/2025</p>
                <p id="nextEventCountdown" class="fs-4 text-primary"></p>
                <div class="p-3 px-md-5 pb-md-5">
                    <a href="events.php"><img src="images/nextevent2.png" class="img-fluid" alt="event billede"></a>
                </div>
            </div>
            <div class="nextAcademy col-10 col-md-8 col-lg-5 card shadow-lg rounded-0 bg-secondary my-4 ms-lg-4 reveal">
                <h2 class="pt-3 pt-md-4 fs-1">NEXT ACADEMY</h2>
                <p class="pb-1 fs-4 text-primary">09/08/2025</p>
                <p id="nextAcademyCountdown" class="fs-4 text-primary"></p>
                <div class="p-3 px-md-5 pb-md-5">
                    <a href="events.php"><img src="images/nextacademy2.png" class="img-fluid" alt="academy billede"></a>
                </div>
            </div>
        </div>
        <div class="container banner position-relative gx-0 mb-5">
            <a href="ppv.php">
            <img src="images/banner-pluto.png" class="img-fluid position-absolute object-fit-cover h-100 w-100" alt="mma fighter">

                <div class="position-absolute top-50 start-50 translate-middle pb-5 reveal">
                    <p class="bannertext custom-text text-white text-center herotext">WATCH LIVE</p>
                </div>
            </a>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center reveal">
            <div class="col-10 col-md-7 col-lg-9 py-5 mb-4">
                <a href="behindTheScenes.php"><h2 class="custom-text text-white text-center py-3 herotext">DISCOVER MORE</h2></a>
            </div>

            <div class="col-12 text-center ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/05Hn8hPdTV8?si=USDIU4UFjy8bQ6pw" class="p-5" title="YouTube video player"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="col-12 text-center py-5">
                <a href="behindTheScenes.php" class="btn btn-primary text-white custom-text p-2 px-md-3 px-lg-5">WATCH MORE</a>
            </div>


            <div class="col-12 text-white text-center custom-text pt-5 reveal">
                <h2 class="py-4">BE FAMILY!</h2>

                <form class="d-inline-flex justify-content-center flex-wrap">
                    <div class="col-12 mb-3 d-flex justify-content-center">
                        <div class="col-10 col-md-5 ">
                        <input type="email" class="form-control py-md-3 text-white custom-text placeholder-gray rounded-0 bg-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-MAIL">
                        </div>
                    </div>
                    <div class="col-12 pb-3 p-md-3">
                    <button type="submit" class="btn btn-primary text-white p-2 px-md-3 px-lg-5">SUBSCRIBE</button>
                    </div>
                    <div class="col-12 col-md-7 text-center text-start text-uppercase subscribeText policyText px-2 ps-4">
                        <p class="px-4">By signing up for our newsletter, you accept our privacy policy and
                            consent to receiving marketing and website tracking.
                            You can withdraw your consent anytime.</p>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<?php
include ("includes/footies.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/scripts.js"></script>

</body>
</html>

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
    
    <title>Dominance FC</title>
    
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
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
            <div class="col-10 card shadow-lg rounded-0 bg-secondary my-4">
                <h2 class="pt-5 fs-1">NEXT EVENT</h2>
                <p class="pb-1 fs-4 text-primary">26/04/2025</p>
                <img src="images/nextevent2.png" class="img-fluid m-3" alt="event billede">
            </div>
            <div class="col-10 card shadow-lg rounded-0 bg-secondary my-4">
                <h2 class="pt-5 fs-1">NEXT ACADEMY</h2>
                <p class="pb-1 fs-4 text-primary">09/08/2025</p>
                <img src="images/nextacademy2.png" class="img-fluid m-4" alt="academy billede">
            </div>
        </div>
        <div class="container banner position-relative gx-0">
            <img src="images/banner-pluto.png" class="img-fluid position-absolute object-fit-cover h-100 w-100" alt="mma fighter">

                <div class="position-absolute top-50 start-50 translate-middle">
                    <p class="bannertext custom-text text-white text-center">WATCH LIVE</p>
                </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
            <div class="col-10 py-5">
            <p class="custom-text text-white text-center fs-1">DISCOVER MORE</p>
            </div>

            <div class="col-12 text-center pb-3">
                <iframe src="https://www.youtube.com/embed/05Hn8hPdTV8?si=USDIU4UFjy8bQ6pw" width="75%" height="100%" title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="col-12 text-center py-4">
                <a href="" class="btn bg-primary custom-text text-white p-2">WATCH MORE</a>
            </div>
            </div>

            <div class="col-12 text-white text-center custom-text pt-5">
                <h3 class="py-3">BE FAMILY!</h3>

                <form class="d-inline-flex justify-content-center flex-wrap">
                    <div class="col-12 mb-3 d-flex justify-content-center">
                        <div class="col-8">
                        <input type="email" class="form-control text-white custom-text placeholder-gray" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-MAIL">
                        </div>
                    </div>
                    <div class="col-12 py-3 px-4">
                    <button type="submit" class="btn btn-primary text-white">SUBSCRIBE</button>
                    </div>
                    <div class="col-12 text-start text-uppercase subscribeText">
                        <p>By signing up for our newsletter, you accept our privacy policy and
                            consent to receiving marketing and website tracking.
                            You can withdraw your consent anytime.</p>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

<br><br><br><br><br><br>

<?php
include ("includes/footies.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

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
include("includes/navbar.php");
?>

<!-- Hero Video -->
<div class="container-fluid banner m-0 p-0 d-flex justify-content-center align-items-center">
    <video autoplay muted loop class="videobg">
        <source src="video/forsidevideo.mp4" type="video/mp4">
    </video>
    <div class="tekst1 d-flex justify-content-center align-items-center flex-wrap flex-column h-100">
        <div><h1 class="custom-text bannertext text-center">FEAR <br> NOTHING</h1></div>
        <div><a class="fa-solid fa-chevron-down fa-beat-fade fa-2xl text-center text-primary fs-1 p-3" href="#scrollspyNext"></a></div>
    </div>
</div>

<!-- Event Cards -->
<div class="container-fluid text-center custom-text bg-primary bg-opacity-75 py-5" id="scrollspyNext">
    <div class="row justify-content-center align-items-center d-flex flex-wrap">
        <div class="nextEvent col-11 col-md-8 col-lg-5 card shadow-lg rounded-0 bg-secondary my-4 me-lg-4 reveal">
            <h2 class="pt-3 pt-md-4 fs-1">NEXT EVENT</h2>
            <p class="fs-4 text-primary custom-text">26/04/2025</p>
            <div class="px-3 pb-3 px-md-5">
                <a href="events.php"><img src="images/seeMore1.jpg" class="img-fluid" alt="event billede"></a>
            </div>
            <p id="nextEventCountdown" class="fs-4 text-white custom-text"></p>
        </div>
        <div class="nextAcademy col-11 col-md-8 col-lg-5 card shadow-lg rounded-0 bg-secondary my-4 ms-lg-4 reveal">
            <h2 class="pt-3 pt-md-4 fs-1">ACADEMY</h2>
            <p class="fs-4 text-primary custom-text">09/08/2025</p>
            <div class="px-3 pb-3 px-md-5">
                <a href="events.php"><img src="images/seeMore2.jpg" class="img-fluid" alt="academy billede"></a>
            </div>
            <p id="nextAcademyCountdown" class="fs-4 text-white custom-text"></p>
        </div>
    </div>
</div>

<!-- Watch Live Section -->
<a href="ppv.php" class="d-block text-decoration-none">
    <div class="container-fluid banner position-relative gx-0 mb-5">
        <!-- Background Image -->
        <img src="images/banner-pluto.png" class="img-fluid position-absolute object-fit-cover h-100 w-100" alt="MMA fighter">

        <!-- Content Wrapper -->
        <div class="row position-relative justify-content-center align-items-center">
            <!-- WATCH LIVE Text -->
            <div class="col-12 text-center">
                <h2 class="reveal custom-text text-white py-5 herotext">WATCH LIVE</h2>
            </div>
        </div>
    </div>
</a>

<!-- Discover More Section -->
<div class="container-fluid text-center">
    <div class="row justify-content-center reveal">
        <div class="col-10 col-md-7 col-lg-9 py-4 mb-4">
            <a href="behindTheScenes.php">
                <h2 class="custom-text text-white py-3 herotext">DISCOVER MORE</h2>
            </a>
        </div>
        <div class="col-12 col-md-6">
            <div class="reveal ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/05Hn8hPdTV8?si=USDIU4UFjy8bQ6pw"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="py-5">
                <a href="behindTheScenes.php" class="btn btn-primary text-white custom-text p-2 px-md-3 px-lg-5">WATCH MORE</a>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<div class="col-12 text-white text-center pt-5 reveal">
    <h2 class="herotext pt-4 pb-2 custom-text">BE FAMILY!</h2>
    <p class="pb-3 m-md-0 familySmallText text-uppercase custom-text text-primary">Stay in the loop - get our newsletter</p>

    <form class="d-inline-flex justify-content-center flex-wrap mb-md-2">
        <div class="col-10 mb-3 d-md-none">
            <input type="email" class="form-control py-2 text-secondary custom-text placeholder-gray rounded-0 bg-white" id="exampleInputEmail1" placeholder="E-MAIL">
        </div>
        <div class="col-10 pb-3 d-md-none">
            <button type="submit" class="btn btn-primary text-white px-5 custom-text w-100">SUBSCRIBE</button>
        </div>

        <div class="col-md-9 d-none d-md-flex flex-nowrap pb-md-3">
            <input type="email" class="form-control py-3 text-secondary custom-text placeholder-gray rounded-0 bg-white" id="exampleInputEmail1" placeholder="E-MAIL">
            <button type="submit" class="btn btn-primary rounded-0 shadow-none text-white custom-text submitBtn">SUBSCRIBE</button>
        </div>

        <div class="col-10 col-md-9 text-uppercase subscribeText policyText">
            <p>By signing up for our newsletter, you accept our privacy policy and consent to receiving marketing and website tracking. You can withdraw your consent anytime.</p>
        </div>
    </form>
</div>

    <?php
    include("includes/footies.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/scripts.js"></script>

</body>
</html>

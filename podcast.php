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

    <title>Podcast</title>

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
    <div class="row text-center justify-content-center align-items-center">

        <div class="">
            <h1 class="text-primary custom-text py-5">PODCAST</h1>
        </div>

        <div class="col-12 pb-5">
            <p class="px-4 text-white h6 custom-text">Enjoy our exclusive guest interviews & podcasts!</p>
        </div>

        <div class="col-12 col-md-6 px-4 pb-5 reveal">
            <p class="h6 text-white text-start ps-4 custom-text">DFC PODCAST EP. 2</p>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/ikyIMVTR-eA?si=RvKKVmGCMG921KoP" class="p-lg-3 p-md-2 p-1"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-12 col-md-6 px-4 pb-5 reveal">
            <p class="h6 text-white text-start ps-4 custom-text">DFC PODCAST EP. 1</p>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/wBDbDAHl9io?si=Qom3FApCE5YfRFOr" class="p-lg-3 p-md-2 p-1"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>


        <div class="my-4 reveal">
            <a target="_blank" href="https://www.youtube.com/@mark.o.madsen" class="btn btn-primary rounded-2 px-5 py-2 text-white custom-text">VIEW MORE</a>
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

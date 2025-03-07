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
    
    <title>Sigende titel</title>
    
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="container d-flex justify-content-center align-items-center banner">
            <video autoplay="autoplay" muted="muted" loop="loop" class="videobg">
                <source src="video/forsidevideo.mp4" type="video/mp4">
            </video>

            <div class="tekst1 d-flex justify-content-center align-items-center h-100">
                <h1 class="custom-text bannertext text-center">FEAR <br> NOTHING</h1>
            </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-orange">
            <div class="col-8 card bg-grey">
                <h2>NEXT EVENT</h2>
                <P>26/04/2025</P>
                <img src="images/" alt="">
            </div>
            <div class="col-8">
                <h2>NEXT ACADEMY</h2>
                <P>09/08/2025</P>
                <img src="images/" alt="">
            </div>

        </div>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

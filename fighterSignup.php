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

    <title>Fighter Signup</title>

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
include ("includes/navbar.php");
?>

<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-6">
            <p class="h1 text-primary custom-text py-5">FIGHTER <br> SIGNUP</p>
            <p class="px-4 custom-text"><strong>Apply for our fighter roster!</strong></p>
            <p class="px-4">Do you have what it takes to perform at the top level, and compete with some of the best and most prominent fighters in the world?</p>
        </div>


    <div class="row justify-content-center text-start">
        <div class="col-md-5 px-4 mt-5">
            <label class="form-label text-white custom-text fs-6 text-start">FULL NAME:</label>
            <input type="text" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT FULL NAME HERE">
        </div>

        <div class="col-md-5 px-4 mt-5">
            <label class="form-label text-white custom-text fs-6 text-start">EXPERIENCE:</label>
            <select class="form-select bg-white custom-text text-secondary placeholder-gray py-3 custom-placeholder" aria-label="Select your experience">
                <option selected>SELECT YOUR EXPERIENCE</option>
                <option value="1">PROFESSIONAL</option>
                <option value="2">AMATEUR</option>
            </select>
        </div>

        <div class="col-md-5 px-4 mt-5">
            <label class="form-label text-white custom-text fs-6 text-start">DATE OF BIRTH:</label>
            <input type="date" class="form-control bg-white custom-text text-secondary placeholder-gray py-3 custom-placeholder" placeholder="INSERT DATE OF BIRTH HERE">
        </div>

        <div class="col-md-5 px-4 mt-5">
            <label class="form-label text-white custom-text fs-6 text-start">E-MAIL:</label>
            <input type="email" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT E-MAIL HERE">
        </div>

        <div class="col-md-5 px-4 mt-5">
            <label class="form-label text-white custom-text fs-6 text-start">PHONE NUMBER:</label>
            <input type="number" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT NUMBER HERE">
        </div>

        <div class="col-md-5 px-4 mt-5">
            <label class="form-label text-white custom-text fs-6 text-start">NATIONALITY:</label>
            <input type="text" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT NATIONALITY HERE">
        </div>

        <div class="col-md-5 px-4 mt-5">
            <label class="form-label text-white custom-text fs-6 text-start">WEIGHT CLASS:</label>
            <input type="number" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT WEIGHT CLASS HERE">
        </div>

        <div class="col-md-5 px-4 mt-5">
            <label class="form-label text-white custom-text fs-6 text-start">FIGHT RECORD:</label>
            <input type="text" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT FIGHT RECORD HERE">
        </div>

        <div class="col-md-5 px-4 mt-5">
            <label class="form-label text-white custom-text fs-6 text-start">AFFILIATED GYM AND COACH:</label>
            <input type="text" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT HERE">
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-5 px-4 mt-5">
            <input type="text" class="form-control custom-text border-0 border-bottom bg-transparent text-white placeholder-gray text-center my-5 underline" style="box-shadow: none" placeholder="FACEBOOK LINK">

            <input type="text" class="form-control custom-text border-0 border-bottom bg-transparent text-white placeholder-gray text-center my-5 underline" style="box-shadow: none" placeholder="INSTAGRAM LINK">

            <input type="text" class="form-control custom-text border-0 border-bottom bg-transparent text-white placeholder-gray text-center my-5 underline" style="box-shadow: none" placeholder="TWITTER LINK">

            <input type="text" class="form-control custom-text border-0 border-bottom bg-transparent text-white placeholder-gray text-center my-5 underline" style="box-shadow: none" placeholder="LINKEDIN LINK">

            <input type="text" class="form-control custom-text border-0 border-bottom bg-transparent text-white placeholder-gray text-center my-5 underline" style="box-shadow: none" placeholder="YOUTUBE LINK">
        </div>
    </div>

    <div class="reveal row justify-content-center">
        <div class="col-md-4 px-4 mt-5">
            <p class="px-4 fw-bold text-start">Do you allow us to save your info for future events and agree to our privacy policy, marketing, and tracking? You can withdraw consent anytime.</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4 text-white text-start">
            <div class="d-flex align-items-center mt-5">
                <input type="radio" id="yes" name="permission" class="form-check-input ms-5 p-3">
                <label for="yes" class="ms-5 custom-text custom-fontsize">YES, YOU HAVE MY PERMISSION.</label>
            </div>

            <div class="d-flex align-items-center my-4">
                <input type="radio" id="no" name="permission" class="form-check-input ms-5 p-3">
                <label for="no" class="ms-5 custom-text custom-fontsize">NO.</label>
            </div>
        </div>

        <div class="reveal mb-5 mt-5 text-center">
            <a href="#" class="btn btn-primary rounded-2 px-5 py-2 text-white custom-text">SUBMIT</a>
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


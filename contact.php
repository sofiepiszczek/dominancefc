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

    <title>Contact</title>

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
    <div class="row justify-content-center align-items-center">

        <div class="text-center pb-4">
            <p class="h1 text-primary custom-text py-5">CONTACT</p>
            <p class="px-4"><strong>For all media and press-related inquiries, please contact our PR team. We look forward to assisting you with your questions, interview requests, and any other press-related matters.</strong></p>
        </div>


        <div class="mb-3 px-4">
            <label class="form-label text-white custom-text fs-4 text-start">NAME:</label>
            <input type="text" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT NAME HERE">

            <label class="form-label text-white custom-text mt-3 fs-4 text-start">SURNAME:</label>
            <input type="text" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT SURNAME HERE">

            <label class="form-label text-white custom-text mt-3 fs-4 text-start">COMPANY:</label>
            <input type="text" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT COMPANY HERE">

            <label class="form-label text-white custom-text mt-3 fs-4 text-start">E-MAIL:</label>
            <input type="email" class="form-control bg-white custom-text text-secondary placeholder-gray py-3" placeholder="INSERT E-MAIL HERE">
        </div>

        <div class="mb-3 px-4 pb-4">
            <label class="form-label text-white custom-text mt-3 fs-4 text-start">MESSAGE:</label>
            <textarea class="form-control bg-white custom-text text-secondary placeholder-gray" rows="5" placeholder="INSERT MESSAGE HERE"></textarea>
        </div>



        <div class="mb-5 text-center">
            <button class="btn btn-primary rounded-2 px-5 py-2 text-white custom-text">SUBMIT</button>
        </div>

    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

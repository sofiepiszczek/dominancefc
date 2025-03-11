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

    <!-- Favicon !-->
    <link rel="icon" type="image/x-icon" href="images/DominanceFavicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container-fluid">
        <img src="images/ADlogo.png" alt="Logo" style="height: 30px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse collapse" id="collapsibleNavbar">
            <div class="accordion border-0 mt-2" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header custom-text" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            EXPERIENCE
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body custom-text text-center">
                            <a href="#">TICKETS</a> <br>
                            <a href="#">EVENTS</a> <br>
                            <a href="#">PAYPERVIEW</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header custom-text text-white" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            DISCOVER
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body custom-text text-center">
                            <a href="#">BEHIND THE SCENES</a> <br>
                            <a href="#">PREVIOUS FIGHTS</a> <br>
                            <a href="#">SHOP</a> <br>
                            <a href="#">PODCAST</a> <br>
                            <a href="#">ABOUT</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header custom-text" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            BE FAMILY
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body custom-text text-center">
                            <a href="#">CONTACT</a> <br>
                            <a href="#">FIGHTER SIGNUP</a> <br>
                            <a href="#">SPONSOR INFO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 custom-text text-center mt-2">
                <button type="submit" class="btn btn-primary text-white">BUY TICKETS</button>
            </div>
        </div>
    </div>
    <div class="orange-line bg-primary w-100 position-absolute h-2 bottom-0"></div>

</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

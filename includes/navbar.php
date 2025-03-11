<script src="https://kit.fontawesome.com/629904b720.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-sm z-3 bg-secondary pt-4 d-sm-none">
    <div class="container-fluid">
        <a href="../index.php"><img src="images/ADlogo.png" alt="Logo" style="height: 30px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <i class="fa-solid fa-bars text-primary"></i>
        </button>

        <div class="collapse navbar-collapse collapse" id="collapsibleNavbar">
            <div class="accordion border-0 mt-2 text-primary pt-4 pb-4" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header custom-text" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            EXPERIENCE
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body custom-text text-center">
                            <a href="https://www.billetlugen.dk/artist/dominance-fc-3-0/?affiliate=P0G" target="_blank">TICKETS</a> <br>
                            <a href="../events.php">EVENTS</a> <br>
                            <a href="../ppv.php">PAYPERVIEW</a>
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
                            <a href="../behindTheScenes.php">BEHIND THE SCENES</a> <br>
                            <a href="../previousEvents.php">PREVIOUS FIGHTS</a> <br>
                            <a href="../shop.php">Merch</a> <br>
                            <a href="../podcast.php">PODCAST</a> <br>
                            <a href="../about.php">ABOUT</a>
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
                            <a href="../contact.php">CONTACT</a> <br>
                            <a href="../fighterSignup.php">FIGHTER SIGNUP</a> <br>
                            <a href="../sponsorInfo.php">SPONSOR INFO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 custom-text text-center mt-3 mb-3">
                <a type="submit" class="btn btn-primary text-white" href="https://www.billetlugen.dk/artist/dominance-fc-3-0/?affiliate=P0G" target="_blank">BUY TICKETS</a>
            </div>
        </div>
    </div>
    <div class="orange-line bg-primary w-75 bottom-0 mx-auto mt-3"></div>
</nav>

<!-- Top black bar with logo -->
<nav class="navbar bg-secondary py-3 d-none d-sm-block z-3">
    <div class="container d-flex justify-content-center">
        <a href="../index.php"><img src="images/ADlogo.png" alt="Logo" style="height: 50px;"></a>
    </div>
</nav>

<!-- Orange navigation bar -->
<nav class="navbar bg-primary d-none d-sm-block w-75 mx-auto z-3">
    <div class="container d-flex justify-content-center bg-primary">
        <ul class="nav text-uppercase fw-bold text-white flex-nowrap">
            <li class="nav-item custom-text"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item nav-divider pt-2">｜</li>
            <!-- Experience Dropdown -->
            <li class="nav-item dropdown custom-text">
                <a class="nav-link dropdown-toggle" href="#" id="experienceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Experience
                </a>
                <ul class="dropdown-menu" aria-labelledby="experienceDropdown">
                    <li><a class="dropdown-item" href="https://www.billetlugen.dk/artist/dominance-fc-3-0/?affiliate=P0G" target="_blank">Tickets</a></li>
                    <li><a class="dropdown-item" href="../events.php">Events</a></li>
                    <li><a class="dropdown-item" href="../ppv.php">Payperview</a></li>
                </ul>
            </li>
            <li class="nav-item nav-divider pt-2">｜</li>

            <!-- Discover Dropdown -->
            <li class="nav-item dropdown custom-text">
                <a class="nav-link dropdown-toggle" href="#" id="discoverDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Discover
                </a>
                <ul class="dropdown-menu text-white" aria-labelledby="discoverDropdown">
                    <li><a class="dropdown-item" href="../behindTheScenes.php">Behind the scenes</a></li>
                    <li><a class="dropdown-item" href="../previousEvents.php">Previous fights</a></li>
                    <li><a class="dropdown-item" href="../shop.php">Merch</a></li>
                    <li><a class="dropdown-item" href="../podcast.php">Podcast</a></li>
                    <li><a class="dropdown-item" href="../about.php">About</a></li>
                </ul>
            </li>
            <li class="nav-item nav-divider pt-2">｜</li>

            <!-- Be Family Dropdown -->
            <li class="nav-item dropdown custom-text">
                <a class="nav-link dropdown-toggle" href="#" id="beFamilyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Be Family
                </a>
                <ul class="dropdown-menu text-white" aria-labelledby="beFamilyDropdown">
                    <li><a class="dropdown-item" href="../contact.php">Contact</a></li>
                    <li><a class="dropdown-item" href="../fighterSignup.php">Fighter Signup</a></li>
                    <li><a class="dropdown-item" href="../sponsorInfo.php">Sponsor Info</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
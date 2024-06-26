<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
            </div>
        </div>
    </div>
</div>


<header class="top-header top-header-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="header-left">
                    <div class="header-left-card">
                        <ul>
                            <li>
                                <i class="bx bx-time"></i>
                                SUN - THU
                                <span>8:00 AM - 9:00 PM</span>
                            </li>
                            <li>
                                <i class="bx bx-map"></i>
                                OFFICE
                                <span>3460 Grove Avenue</span>
                            </li>
                            <li>
                                <i class="bx bx-phone-call"></i>
                                CALL
                                <span><a href="tel:+(103)2223333">+ (103) 222 3333</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="top-right">
                    <div class="language-list">
                        <select class="language-list-item">
                            <option>English</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="navbar-area">

    <div class="mobile-nav">
        <a href="home" class="logo">
            <img src="assets/images/logos/logo-1.png" class="logo-one" alt="Logo">
            <img src="assets/images/logos/logo-2.png" class="logo-two" alt="Logo">
        </a>
    </div>

    <div class="main-nav main-nav-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="home">
                    <img src="assets/images/logos/logo-1.png" class="logo-one" alt="Logo">
                    <img src="assets/images/logos/logo-2.png" class="logo-two" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <?php
                    // Get the current path
                    $currentPath = basename($_SERVER['PHP_SELF'], ".php");

                    // Debug output
                    echo "<!-- Current Path: $currentPath -->";

                    // Define the paths for the services sub-menu
                    $servicesPaths = ['fingerprint-cards', 'fbi-fingerprinting', 'mobile-fingerprinting', 'fingerprint-card-conversions'];

                    // Check if the current path is a services path
                    $isServiceActive = in_array($currentPath, $servicesPaths);
                    ?>

                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="home" class="nav-link <?php echo ($currentPath == '' || $currentPath == 'home'|| $currentPath == 'index') ? 'active' : ''; ?>">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link <?php echo $isServiceActive ? 'active' : ''; ?>">
                                Services
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="fingerprint-cards" class="nav-link <?php echo $currentPath == 'fingerprint-cards' ? 'active' : ''; ?>">
                                        Fingerprint Cards
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="fbi-fingerprinting" class="nav-link <?php echo $currentPath == 'fbi-fingerprinting' ? 'active' : ''; ?>">
                                        FBI Fingerprinting
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="mobile-fingerprinting" class="nav-link <?php echo $currentPath == 'mobile-fingerprinting' ? 'active' : ''; ?>">
                                        Mobile Fingerprinting
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="fingerprint-card-conversions" class="nav-link <?php echo $currentPath == 'fingerprint-card-conversions' ? 'active' : ''; ?>">
                                        Fingerprint Card Conversions
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="about" class="nav-link <?php echo $currentPath == 'about' ? 'active' : ''; ?>">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="faq" class="nav-link <?php echo $currentPath == 'faq' ? 'active' : ''; ?>">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact" class="nav-link <?php echo $currentPath == 'contact' ? 'active' : ''; ?>">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <div class="nav-bar-side">
                        <div class="nav-btn">
                            <a href="contact" class="default-btn-two">Get Started</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="side-nav-responsive">
        <div class="container-max">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item">
                            <a href="contact" class="side-nav-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
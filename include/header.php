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
                                MON - SUN
                                <span>7:00 AM - 9:00 PM</span>
                            </li>
                            <li>
                                <i class="bx bx-map"></i>
                                OFFICE
                                <span>153-27 Hillside Ave, Jamaica, NY-11432</span>
                            </li>
                            <li>
                                <i class="bx bx-phone-call"></i>
                                CALL
                                <span><a href="tel:+(631)9448334">+ (631) 944 8334</a></span>
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
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'fingerprint-cards' ? 'active' : ''; ?>">
                                        Fingerprint Cards
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'fbi-background-check' ? 'active' : ''; ?>">
                                        FBI Background Check
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'fbi-authorized-recipient' ? 'active' : ''; ?>">
                                        FBI Background Check (Authorized Recipient)
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'department-of-state' ? 'active' : ''; ?>">
                                        Department of State
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'atf-eft-fingerprinting' ? 'active' : ''; ?>">
                                        ATF EFT Submission
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'finra-fingerprinting' ? 'active' : ''; ?>">
                                        FINRA Fingerprinting
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'fdle-fingerprinting' ? 'active' : ''; ?>">
                                        FDLE Fingerprinting
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'swft-fingerprinting' ? 'active' : ''; ?>">
                                        SWFT Fingerprinting
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'utah-fingerprinting' ? 'active' : ''; ?>">
                                        Utah State Fingerprinting
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'arkansas-fingerprinting' ? 'active' : ''; ?>">
                                        Arkansas State Fingerprinting
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'fingerprint-archiving' ? 'active' : ''; ?>">
                                        Fingerprint Archiving
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'mobile-fingerprinting' ? 'active' : ''; ?>">
                                        Mobile Fingerprinting
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'about' ? 'active' : ''; ?>">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'faq' ? 'active' : ''; ?>">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tel:+(631)9448334" class="nav-link <?php echo $currentPath == 'contact' ? 'active' : ''; ?>">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <div class="nav-bar-side">
                        <div class="nav-btn">
                            <a href="tel:+(631)9448334" class="default-btn-two">Get Started</a>
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
<!doctype html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Coming Soon - SK Fingerprint</title>

    <?php include('include/css.php'); ?>
</head>
<body>


<?php include('include/header.php'); ?>


<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3> Coming Soon </h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                    <i class="bx bx-chevron-right"></i>
                </li>
                <li> Coming Soon</li>
            </ul>
        </div>
    </div>
    <div class="inner-line">
        <div class="line1"></div>
        <div class="line2"></div>
    </div>
</div>


<div class="coming-soon-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="coming-soon-content">
                    <h1>Coming Soon</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                    <div id="timer">
                        <div id="days"></div>
                        <div id="hours"></div>
                        <div id="minutes"></div>
                        <div id="seconds"></div>
                    </div>
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Enter email address" name="EMAIL"
                               required autocomplete="off">
                        <button type="submit" class="default-btn btn-bg1">
                            Subscribe Now
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('include/footer.php'); ?>


<?php include('include/js.php'); ?>
</body>
</html>
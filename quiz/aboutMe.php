<?php
session_start();
if ($_SESSION['level']!=='user') {
    header("Location: ../");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/about.css">
    <link rel="icon" href="../assets/img/logo.ico">
    <title>About Me</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-sm navbar-light shadow bg-light">
            <a class="navbar-brand">
                <img src="../assets/img/logoaz.png" width="150" height="50" alt="rsazra">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto font-weight-bold">
                    <li class="nav-item active"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item active"><a class="nav-link" href="myActivities.php">MY ACTIVITIES</a></li>
                    <li class="nav-item active"><a class="nav-link" href="aboutMe.php">ABOUT</a></li>
                </ul>
                <a href="../config/logout.php" class="ml-2 btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
        </div>       
    </nav>
    <div class="about-section">
        <div class="inner-width">
            <h1>About Me</h1>
            <div class="border"></div>
            <div class="about-section-row">
                <div class="about-section-col">
                    <div class="about">
                        <h5>Full-Stack Developer</h5>
                        <h2><strong>Adrian Adhari</strong></h2>
                        <blockquote class="blockquote">
                            <p class="mb-0"><em>“For the things we have to learn before we can do them, we learn by doing them.”</em></p>
                            <footer class="blockquote-footer">Aristotle  <cite title="Source Title">The Nicomachean Ethics</cite></footer>
                        </blockquote>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="about-section-col">
                    <div class="skills">
                        <div class="skill">
                            <div class="title">Web Development</div>
                            <div class="progress">
                                <div class="progress-bar p1"><span>65%</span></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="title">Web Design</div>
                            <div class="progress">
                                <div class="progress-bar p2"><span>48%</span></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="title">Networking</div>
                            <div class="progress">
                                <div class="progress-bar p3"><span>70%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>
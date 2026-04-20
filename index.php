<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- <img class="brand-logo" src="image/miguelvon-logo.png" alt="me" data-aos="fade-right"> -->
                <h1 class="title-logo">Miguel</h1>
            </a>

            <!-- Navigation Menu -->
            <nav id="navbar" data-aos="fade-left">
                <a href="#Home">Home</a>
                <a href="#About">About</a>
                <!-- <a href="#certificate">Certificate</a> -->
                <a href="#skills">Skills</a>
                <a href="#portfolio">Projects</a>
            </nav>

            <!-- Contact Button -->
            <a href="#contact" class="contact-btn">Contact</a>

            <!-- Hamburger Menu -->
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="Home"
        style=" background-image: url('image/background.jpg'); background-size: cover; background-position: center;">
        <div class="hero-content" data-aos="zoom-in">
            <!-- <img class="profile" src="image/me-1x1.png" alt="Miguel Von" class="hero-image"> -->
            <span>Hi, I'm Miguel Von</span>
            <h1>Mobile & Web Developer</h1>
            <p>Build amazing responsive web experiences</p>
            <!-- <button class="btn-hire">Get Started</button> -->
            <button class="btn-hire-me">
                See My Work
            </button>
        </div>
    </section>
    <section class="about" id="About"
        style=" background-image: url('image/about-background-2.jpg'); background-size: cover; background-position: center;">

        <div class="container">
            <h1 class="about-me" data-aos="zoom-in">ABOUT <span class="me">ME</span></h1>
            <div class="row">

                <div class="col-sm left" data-aos="fade-up">

                    <p class="aboutme-text">
                        I am a motivated and detail-oriented web developer seeking to leverage my technical skills and
                        collaborative aptitude to develop innovative digital solutions. I am eager to pursue a
                        professional growth opportunity that allows me to expand my expertise and contribute
                        meaningfully to the success of your organization through effective and impactful web
                        development.
                    </p>
                </div>
                <div class="col-sm">
                    <img src="image/me-1x1.png" alt="Profile Picture" class="about-image" data-aos="fade-down">
                </div>
            </div>
            <div class="social-media" data-aos="fade-up">
                <a href="https://www.facebook.com/Migiinnn" target="_blank" class="social-link"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://tiktok.com/@hyundaicarsbymiguel" target="_blank" class="social-link"><i
                        class="fab fa-tiktok"></i></a>
                <a href="https://linkedin.com" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com" target="_blank" class="social-link"><i class="fab fa-github"></i></a>
            </div>

        </div>
    </section>



    <section class="skills" id="skills">
        <div class="container">
            <h1 class="cert-title" data-aos="zoom-in">SKILLS</h1>
            <div class="skills-container">
                <!-- PHP -->
                <div class="skill-item" data-aos="fade-up">
                    <div class="skill-icon">
                        <i class="fab fa-php"></i>
                    </div>
                    <h3>PHP</h3>
                    <p>Server-side scripting</p>
                </div>

                <!-- SQL -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="skill-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>SQL</h3>
                    <p>Database management</p>
                </div>

                <!-- CSS -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="skill-icon">
                        <i class="fab fa-css3-alt"></i>
                    </div>
                    <h3>CSS</h3>
                    <p>Styling & design</p>
                </div>

                <!-- HTML -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="skill-icon">
                        <i class="fab fa-html5"></i>
                    </div>
                    <h3>HTML</h3>
                    <p>Web markup</p>
                </div>

                <!-- C++ -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="skill-icon">
                        <!-- <i class="fas fa-code"></i> -->
                        <img src="image/c++.png" alt="C++" style="width: 65%;">
                    </div>
                    <h3>C++</h3>
                    <p>System programming</p>
                </div>

                <!-- C# -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="skill-icon">
                        <!-- <i class="fas fa-hashtag"></i> -->
                        <img src="image/cc.png" alt="C#" style="width: 65%;">
                    </div>
                    <h3>C#</h3>
                    <p>.NET development</p>
                </div>

                <!-- JavaScript -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="600">
                    <div class="skill-icon">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <h3>JavaScript</h3>
                    <p>Interactive web</p>
                </div>

                <!-- Bootstrap -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="700">
                    <div class="skill-icon">
                        <i class="fab fa-bootstrap"></i>
                    </div>
                    <h3>Bootstrap</h3>
                    <p>Responsive framework</p>
                </div>

                <!-- .NET -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="800">
                    <div class="skill-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h3>.NET</h3>
                    <p>Framework</p>
                </div>

                <!-- Photoshop -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="900">
                    <div class="skill-icon">
                        <!-- <i class="fa-brands fa-adobe"></i> -->
                        <img class="Photoshop" src="image/ps.png" alt="Photoshop" style="width: 60%;">
                    </div>
                    <h3>Photoshop</h3>
                    <p>Image editing</p>
                </div>

                <!-- Arduino -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="1000">
                    <div class="skill-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>Arduino</h3>
                    <p>Embedded systems</p>
                </div>

                <!-- Git -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="1100">
                    <div class="skill-icon">
                        <i class="fab fa-git-alt"></i>
                    </div>
                    <h3>Git</h3>
                    <p>Version control</p>
                </div>

                <!-- Github -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="1200">
                    <div class="skill-icon">
                        <i class="fab fa-github"></i>
                    </div>
                    <h3>Github</h3>
                    <p>Code repository</p>
                </div>

                <!-- Flutter -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="1300">
                    <div class="skill-icon">
                        <!-- <i class="fab fa-flutter"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                            <path fill="rgb(255, 255, 255)"
                                d="M525.5 300.3L387.7 438.1L525.5 576L368 576C331.9 539.9 285.9 493.9 230.1 438.1L368 300.3L525.5 300.3zM368 64L112 320L190.8 398.8L525.5 64L368 64z" />
                        </svg>
                    </div>
                    <h3>Flutter</h3>
                    <p>Mobile development</p>
                </div>

                <!-- Dart -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="1400">
                    <div class="skill-icon">
                        <!-- <i class="fab fa-dart"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                            <path fill="rgb(255, 255, 255)"
                                d="M442.6 142.9C439.8 142.8 437 142.7 434.1 142.7L170 142.7L313.2 70.7C320.6 66.3 332 64 343.6 64C357.1 64 373 73.2 380.6 80.8L442.6 142.8L442.6 142.9zM171.3 160.5L434.1 160.5C450.1 160.5 459.5 161.9 469.5 169.8L576 276.2L576 485L496.7 485.7L171.3 160.5zM160.5 437L160.5 174.8L484.3 498.6L485 576L272.8 576L174.7 477.8C163.4 466.5 160.5 462.5 160.5 437zM142.7 169.3L142.7 437C142.7 440.3 142.8 443.3 142.9 446.1L80.9 384.1C70.5 373.3 64 358.3 64 343.6C64 336.8 67.9 326.1 70.7 320L142.7 169.3z" />
                        </svg>
                    </div>
                    <h3>Dart</h3>
                    <p>Programming language</p>
                </div>

                <!-- Web Hosting -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="1500">
                    <div class="skill-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Web Hosting</h3>
                    <p>Server management</p>
                </div>

                <!-- VSCode -->
                <div class="skill-item" data-aos="fade-up" data-aos-delay="1600">
                    <div class="skill-icon">
                        <!-- <i class="fab fa-code"></i> -->
                        <img class="vscode" src="image/vscode.png" alt="VSCode" style="width: 60%;">
                    </div>
                    <h3>VSCode</h3>
                    <p>Code editor</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <h1 class="cert-title" data-aos="zoom-in">PROJECTS</h1>
            <div class="row">
                <div class="col-sm">
                    The Hyundai Quezon Avenue website is a modern, user-friendly platform designed to provide visitors
                    with easy access to schedule test drives, request service appointments, and obtain information about
                    Hyundai vehicles, services, and promotions.
                </div>
                <div class="col-sm">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="certificate" id="certificate">
        <div class="wrapper">
            <h1 class="cert-title">CERTIFICATES</h1>
            <div class="carousel owl-carousel">
                <div class="card card-1">
                    <img src="image/certificate/Certificate-pdf.png" alt="Certificate 1">
                </div>
                <div class="card card-2">
                    <img src="image/certificate/certificate.jpg" alt="Certificate 2">
                </div>
                <div class="card card-3">
                    <img src="image/certificate/Data-Science.png" alt="Certificate 3">
                </div>
                <div class="card card-4">
                    <img src="image/certificate/Network-Defense.png" alt="Certificate 4">
                </div>
            </div>
        </div>
    </section>



    <script src="js/style.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        });
    </script>
</body>

</html>
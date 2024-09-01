<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Content Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <!-- Navigation Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light" id="navbar">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">MyPortfolio</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/content" class="nav-item nav-link active">Content</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                </div>
            </div>
        </div>
    </div>

<div class="myproject" id="myproject">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>PROJECTS</p>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="myproject-filter">
                    <li data-filter="*" class="filter-active">All</li>
                </ul>
            </div>
        </div>
        <div class="row myproject-container">
            <div class="col-lg-4 col-md-6 col-sm-12 myproject-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                <div class="myproject-wrap">
                    <div class="myproject-img">
                        <img src="img/portfolio-1.jpg" alt="eCommerce Website">
                    </div>
                    <div class="myproject-text">
                        <h3>E-Commerce Platform Proto</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 myproject-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                <div class="myproject-wrap">
                    <div class="myproject-img">
                        <img src="img/portfolio-2.jpg" alt="Product Landing Page">
                    </div>
                    <div class="myproject-text">
                        <h3>Java-Based Calculator Application</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 myproject-item filter-3 wow fadeInUp" data-wow-delay="1s">
                <div class="myproject-wrap">
                    <div class="myproject-img">
                        <img src="img/portfolio-6.jpg" alt="Company Website">
                    </div>
                    <div class="myproject-text">
                        <h3>Natural Disaster Prep Site</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="container copyright">
            <p>&copy; <a href="#">2024 MyPortfolio</a>, All Rights Reserved</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script>

        let lastScrollTop = 0;
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', function() {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
            if (currentScroll > lastScrollTop) {

                navbar.classList.add('hide');
            } else {

                navbar.classList.remove('hide');
            }
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
        });
    </script>
</body>
</html>

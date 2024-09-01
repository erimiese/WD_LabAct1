<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
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

    <link rel="stylesheet" href="/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <style>
        .front-text p, .front-text h1, #typed-element {
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
        }

        .front-text h1 {
            font-weight: 700;
        }

        #typed-element {
            font-size: 20px;
            display: inline-block;
            color: white; 
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">

    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">MyPortfolio</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/content" class="nav-item nav-link">Content</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                </div>
            </div>
        </div>
    </div>

    <div class="front" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="front-content">
                        <div class="front-text">
                            <p>Hi! I'm</p>
                            <h1>Valerie Soreda</h1>
                            <div id="typed-element"></div>
                            <script>
                                const typed = new Typed('#typed-element', {
                                    strings: ['Information Technology student', 'at Bicol University'],
                                    typeSpeed: 50,
                                    backSpeed: 20,
                                    cursorChar: '|',
                                    loop: true
                                });
                            </script>
                        </div>
                        <div class="front-btn">
                            <a class="btn" href="/content">Show More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="front-image">
                        <img src="img/me.png" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <script src="js/main.js"></script>

</body>
</html>

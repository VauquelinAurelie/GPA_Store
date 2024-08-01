<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Shop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="dist/assets/img/shop.png"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('dist/css/styles.css') }}">
</head>
<body id="page-top">

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="dist/assets/img/header/shop.png" alt="..."/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#header">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('categories.index')}}">Catégories</a></li>
                <li class="nav-item"><a class="nav-link" href="#product-gallery">Produits</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead-->
<header class="masthead" id="header">
    <div class="container">
        <div class="masthead-subheading">Bienvenue sur shop !</div>
        <div class="masthead-heading text-uppercase">Des produits de qualité à des prix incroyables, juste pour vous.
        </div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#carousel">En savoir plus</a>
    </div>
</header>

<!-- Carousel-->
<section class="page-section" id="carousel">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Promotions</h2>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="dist/assets/img/carousel/black_friday.png" class="d-block" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="dist/assets/img/carousel/mega_sale.jpg" class="d-block" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="dist/assets/img/carousel/summer_sales.jpg" class="d-block" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</section>

<!-- Categories-->
<section class="page-section" id="categories">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Catégories</h2>
        </div>
        <ul class="timeline">
            <li data-category="women's clothing">
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="dist/assets/img/categories/picto_vetements_femme.png" alt="Vêtements femme"/>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4><a href="#product-gallery" onclick="showProducts('women\'s clothing')">Vêtements femme</a></h4>
                    </div>
                </div>
            </li>
            <li data-category="men's clothing" class="timeline-inverted">
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="dist/assets/img/categories/picto_vetements_homme.png" alt="Vêtements homme"/>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4><a href="#product-gallery" onclick="showProducts('men\'s clothing')">Vêtements homme</a></h4>
                    </div>
                </div>
            </li>
            <li data-category="electronics">
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="dist/assets/img/categories/picto_electronique.png" alt="Electronique"/>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4><a href="#product-gallery" onclick="showProducts('electronics')">Electronique</a></h4>
                    </div>
                </div>
            </li>
            <li data-category="jewelery" class="timeline-inverted">
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="dist/assets/img/categories/picto_bijoux.png" alt="Bijoux"/>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4><a href="#product-gallery" onclick="showProducts('jewelery')">Bijoux</a></h4>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- Product Gallery -->
<section class="page-section product-gallery" id="product-gallery">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Produits</h2>
            <h6>Sélectionnez une catégorie</h6>
        </div>
        <div class="row" id="products-container">
            <!-- Products will be injected here by JavaScript -->
        </div>
    </div>
</section>

<!-- Contact form-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contactez nous</h2>
            <h3 class="section-subheading text-muted">Une question, une remarque ? Envoyez-nous votre demande via ce formulaire.</h3>
        </div>
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="name" type="text" placeholder="Votre nom *"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Votre Email *"
                               data-sb-validations="required,email"/>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Votre numéro *"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Votre message *"
                                  data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br/>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <!-- Submit Button-->
            <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Envoyer
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; Website 2024</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                <a class="link-dark text-decoration-none" href="#!">Made by Aurélie Vauquelin</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<!--scripts-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="dist/js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
{{--<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.min.js"></script>
<script src="{{ asset('src/js/api.js') }}"></script>
</body>
</html>

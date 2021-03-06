@extends('Pages.layout.main')
@section('content')

<main id="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/siao8.JPG);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Soyez les Bienvenues <span>au Salon International de Ouagadougou</span></h2>
                            <p>Le SIAO regroupe le meuilleur de l artisanat africain (bronze,- textile,maroquinerie,masques antiquaire,bijouterie...).Il promeut les acteurs de ces secteurs d activité, et tente de leur donner une vitrine internationale. Il lance également une réflexion sur les freins au développement de l artisanat sur le continent africain. Il attire de nombreux exposants et visiteurs de tous pays. Le salon se tient tout les deux ans.</p>
                            <div class="text-center"><a href="" class="btn-get-started">Voir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/siao7.JPG);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Pavillon de la Sculpture</h2>
                            <p>Le pavillon de la créativité comme à chaque édition regroupe les meilleures oeuvres de differents pays prennent part au salon Internationnal de l artisanat de Ouagadougou(SIAO).Plus de 160 oeuvres de 11 pays africains sont exposés au grand bonheur des visiteurs.</p>
                            <div class="text-center"><a href="" class="btn-get-started">Voir plus</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/siaoM.JPG);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Pavillon des bijoux et Sacs artisanal</h2>
                            <p>Vivre de ses créations peut paraître utopique, pourtant, il est tout à fait possible de réaliser un joli chiffre d’affaires grâce à la vente de bijoux. Pour cela, il suffit d’avoir la fibre artistique, d’être manuelle et de faire preuve de rigueur.</p>
                            <div class="text-center"><a href="" class="btn-get-started">Voir plus</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2>SALON INTERNATIONAL DE L ARTISANAT DE OUAGADOUGOU</h2>
                    <h3>Toutes les composantes du marché réunies</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <p>
                        Lieu d échanges et de rencontres, le SIAO étend son offre de conférences et d ateliers de formation, le complément indispensable à l exposition vente.
                        Le SIAO met à la disposition des visiteurs et des exposants un programme très complet de conférences autour du thème de l édition.
                        Une série d ateliers sur les problématiques liés à la production et à la promotion à l extérieur est proposée par des Centres spécialisés.
                        Invité dhonneur à chaque édition, une délégation d artisans et d officiels d un pays partage avec ses homologues africains sa passion de l artisanat, ses inquiétudes quant à la production et à la commercialisation des produits.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Sculpture (bois, bronze)</li>
                        <li><i class="ri-check-double-line"></i>Textile et confection</li>
                        <li><i class="ri-check-double-line"></i>Vannerie et poterie</li>
                    </ul>
                    <p class="fst-italic">
                        Le Salon International de l artisanat de Ouagadougou (SIAO) est une manifestation qui rassemble des artisans venus du monde entier. L artisanat africain est toutefois généralement à l honneur.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <img src="assets/img/imageService/malakite2.JPG" width="100" height="100" alt="">
                        </div>
                        <h4><a href="">Bijoux en malakite</a></h4>
                        <p>Beaucoup solicité pour sa qualité, fait a base des pierres precieuse</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <img src="assets/img/imageChauss/douzaine1.JPG" width="100" height="100" alt="">
                        </div>
                        <h4><a href="">Chaussures en cuire</a></h4>
                        <p>Fabriqué a base des peaux d animeaux</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <img src="assets/img/imagePagne/tissage1.JPG" width="100" height="100" alt="">
                        </div>
                        <h4><a href="">Pagne tissé</a></h4>
                        <p>Fabriqué a base du coton</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <img src="assets/img/imageRafia/vannerieD.JPG" width="100" height="100" alt="">
                        </div>
                        <h4><a href="">Pannier en liane</a></h4>
                        <p>Liane venant du congo</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <img src="assets/img/imageStatuette/statut1.jpg" width="100" height="100" alt="">
                        </div>
                        <h4><a href="">Statuette en bois</a></h4>
                        <p>Sculpture en bois noir</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <img src="assets/img/imageRafia/sac2.jpg" width="100" height="100" alt="">
                        </div>
                        <h4><a href="">Rafia</a></h4>
                        <p>Sac en rafia</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter=".filter-p" class="filter-active">Poterie</li>
                        <li data-filter=".filter-app">Tissage</li>
                        <li data-filter=".filter-card">Vannerie</li>

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-p">
                    <img src="assets/img/portfolio/poterie1.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Poterie du Burkina </h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-p">
                    <img src="assets/img/portfolio/poterie6.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Poterie du Benin </h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-p">
                    <img src="assets/img/portfolio/poterieG5.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Poterie du Maroc </h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-p">
                    <img src="assets/img/portfolio/poterie5.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Poterie de la Mauritanie</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-p">
                    <img src="assets/img/portfolio/poterieG1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Poterie du Niger</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-p">
                    <img src="assets/img/portfolio/pot3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Poterie du centrafrique</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-p">
                    <img src="assets/img/portfolio/pot4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Poterie du Niger</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-p">
                    <img src="assets/img/portfolio/pot6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Poterie du Niger</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/imagePagne/tissage1.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Pagne tissé du Burkina</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/imagePagne/pagnecote7.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Pagne tissé du Burkina</h4>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/imagePagne/pagnemauritanie6.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Pagne tissé de mauritanie</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/imagePagne/pagnecote8.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Pagne tissé de mauritanie</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/imagePagne/pagne3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Pagne de la CI</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/imagePagne/fasodaf1.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Pagne du Ghana</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/imagePagne/pagne1.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Pagne de la guine</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/imagePagne/pagne2.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Pagne du Nigeria</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/imagePagne/pagne4.JPG" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Pagne du Mali</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/vannerie/vannerieD.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Vannerie du Burkina Faso</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/vannerie/siaoD.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Vannerie du Maroc</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/vannerie/vannerieC.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Vannerie du Tchad</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/vannerie/vannerieB.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Vannerie du Gabon</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/vannerie/vannerieA.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Vannerie du congo</h4>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Partenaires Section ======= -->
    <section id="partenaires" class="partenaires">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Partenaires</h2>
            </div>

            <div class="row no-gutters partenaires-wrap clearfix" data-aos="fade-up">

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="partenaire-logo">
                        <img src="assets/img/clients/simplon1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="partenaire-logo">
                        <img src="assets/img/clients/ecobank1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="partenaire-logo">
                        <img src="assets/img/clients/orange1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="partenaire-logo">
                        <img src="assets/img/clients/coris1.png" class="img-fluid" alt="">
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Our Clients Section -->

</main><!-- End #main -->

@endsection
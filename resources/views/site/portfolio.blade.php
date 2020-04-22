@extends('layout')

@section('menu-portfolio-class', 'menu-active')

@section('conteudo')
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Portfólio</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
            </div>
        </div>

        <!--==========================
            Call To Action Section
        ============================-->
        <section id="call-to-action" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="cta-btn-container text-center">
                        <a class="cta-btn align-middle" data-filter="*" href="#all">Todos</a>
                        <a class="cta-btn align-middle" data-filter=".web" href="#web">Web</a>
                        <a class="cta-btn align-middle" data-filter=".socialmedia" href="#socialmedia">Social Media</a>
                        <a class="cta-btn align-middle" data-filter=".video" href="#video">Video</a>
                        <a class="cta-btn align-middle" data-filter=".foto" href="#foto">Foto</a>
                    </div>
                </div>
            </div>
        </section><!-- #call-to-action -->

        <div class="container-fluid">
            <div class="row no-gutters portfolio">

                
                <div class="col-lg-3 item col-md-4 item web">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/1.jpg" class="portfolio-popup">
                            <img src="img/portfolio/1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 item col-md-4 item web">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/1.jpg" class="portfolio-popup">
                            <img src="img/portfolio/1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 item socialmedia">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/2.jpg" class="portfolio-popup">
                            <img src="img/portfolio/2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 item video">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/3.jpg" class="portfolio-popup">
                            <img src="img/portfolio/3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 item foto">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/4.jpg" class="portfolio-popup">
                            <img src="img/portfolio/4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 item socialmedia">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/5.jpg" class="portfolio-popup">
                            <img src="img/portfolio/5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 item foto">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/6.jpg" class="portfolio-popup">
                            <img src="img/portfolio/6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 item web">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/7.jpg" class="portfolio-popup">
                            <img src="img/portfolio/7.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 item video">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/8.jpg" class="portfolio-popup">
                            <img src="img/portfolio/8.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #portfolio -->
@stop
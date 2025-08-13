<?php

/**
 * Template Name: Artikel
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<div id="content" class="site-content" style="background: #FFF3E9;">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <main id="main" class="site-main">

        <header class="entry-header featured-full-width-img text-light mb-5" style="background-position-y: bottom;background-color: #FFF3E9;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/berandaimage.png')">
            <div class="container entry-header d-flex flex-column justify-content-center align-items-center pb-3" style="height: 400px;">
                <h1 class="entry-title ">ARTIKEL</h1>
            </div>
        </header>

        <section id="listartikel">
            <div class="container" style="margin-top: 6rem;margin-bottom: 6rem;">
                <div class="row text-center mt-5 mb-5">
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-7.jpg" alt="Artikel 1" style="border-radius: 2rem !important;margin-right: 2rem;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#artikel1modal">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/sudut-mikat-kuadran-3-1.jpg" alt="Artikel 2" style="border-radius: 2rem !important;margin-right: 2rem;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#artikel2modal">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-6.jpg" alt="Artikel 3" style="border-radius: 2rem !important;margin-right: 2rem;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#artikel3modal">
                    </div>
                </div>
                <div class="row text-center mt-5 mb-5">
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
						<a href="https://bit.ly/EZINEHopeVol3Part1" target="_blank">
							<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZINEHopeVol3Part1.jpg" alt="Artikel 4" style="border-radius: 2rem !important;margin-right: 2rem;">
						</a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
                        <a href="https://bit.ly/EZineHopeVol2Part6" target="_blank">
							<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZineHopeVol2Part6.jpg" alt="Artikel 5" style="border-radius: 2rem !important;margin-right: 2rem;">
						</a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
                        <a href="https://bit.ly/EZINEHOPEVOL2PART5" target="_blank">
							<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZINEHOPEVOL2PART5.jpg" alt="Artikel 6" style="border-radius: 2rem !important;margin-right: 2rem;">
						</a>
                    </div>
                </div>
				<div class="row text-center mt-5 mb-5">
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
						<a href="https://bit.ly/EZineHopeVol2P4" target="_blank">
							<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZineHopeVol2P4.jpg" alt="Artikel 4" style="border-radius: 2rem !important;margin-right: 2rem;">
						</a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
                        <a href="https://bit.ly/EZINEHOPEVOL2PART3" target="_blank">
							<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZINEHOPEVOL2PART3-.jpg" alt="Artikel 5" style="border-radius: 2rem !important;margin-right: 2rem;">
						</a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
                        <a href="https://bit.ly/EZineHopeVol2Pt2" target="_blank">
							<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZineHopeVol2Pt2.jpg" alt="Artikel 6" style="border-radius: 2rem !important;margin-right: 2rem;">
						</a>
                    </div>
                </div>
				<div class="row text-center mt-5 mb-5">
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
						<a href="https://bit.ly/eZineHopeVol1" target="_blank">
							<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_eZineHopeVol1.jpg" alt="Artikel 4" style="border-radius: 2rem !important;margin-right: 2rem;">
						</a>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center p-4">
                    </div>
                </div>
            </div>
			
			<div class="modal fade" id="artikel1modal" tabindex="-1" aria-labelledby="artikel1modalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
					<div id="artikel1modalControls" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
						<button type="button" data-bs-target="#artikel1modalControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#artikel1modalControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#artikel1modalControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
						<button type="button" data-bs-target="#artikel1modalControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
						<button type="button" data-bs-target="#artikel1modalControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
						<button type="button" data-bs-target="#artikel1modalControls" data-bs-slide-to="5" aria-label="Slide 6"></button>
						<button type="button" data-bs-target="#artikel1modalControls" data-bs-slide-to="6" aria-label="Slide 7"></button>
					  </div>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-7.jpg" class="d-block w-100" alt="1">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2-6.jpg" class="d-block w-100" alt="2">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/3-6.jpg" class="d-block w-100" alt="3">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/4-6.jpg" class="d-block w-100" alt="4">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5-6.jpg" class="d-block w-100" alt="5">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/6-5.jpg" class="d-block w-100" alt="6">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/7-3.jpg" class="d-block w-100" alt="7">
						</div>
					  </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#artikel1modalControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#artikel1modalControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					  </button>
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
				  </div>
				</div>
			  </div>
			</div>

			<div class="modal fade" id="artikel2modal" tabindex="-1" aria-labelledby="artikel2modalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div id="artikel2modalControls" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#artikel2modalControls" data-bs-slide-to="0"
										class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#artikel2modalControls" data-bs-slide-to="1"
										aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#artikel2modalControls" data-bs-slide-to="2"
										aria-label="Slide 3"></button>
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/sudut-mikat-kuadran-3-1.jpg"
											class="d-block w-100" alt="1">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/sudut-mikat-kuadran-3-2.jpg"
											class="d-block w-100" alt="2">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/sudut-mikat-kuadran-3-3.jpg"
											class="d-block w-100" alt="3">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#artikel2modalControls"
									data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#artikel2modalControls"
									data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="artikel3modal" tabindex="-1" aria-labelledby="artikel3modalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div id="artikel3modalControls" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#artikel3modalControls" data-bs-slide-to="0"
										class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#artikel3modalControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#artikel3modalControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
									<button type="button" data-bs-target="#artikel3modalControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
									<button type="button" data-bs-target="#artikel3modalControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
									<button type="button" data-bs-target="#artikel3modalControls" data-bs-slide-to="5" aria-label="Slide 6"></button>
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-6.jpg" class="d-block w-100" alt="1">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2-5.jpg" class="d-block w-100" alt="2">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/3-5.jpg" class="d-block w-100" alt="3">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/4-5.jpg" class="d-block w-100" alt="4">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5-5.jpg" class="d-block w-100" alt="5">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/6-4.jpg" class="d-block w-100" alt="6">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#artikel3modalControls"
									data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#artikel3modalControls"
									data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="artikel4modal" tabindex="-1" aria-labelledby="artikel4modalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div id="artikel3modalControls" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#artikel4modalControls" data-bs-slide-to="0"
										class="active" aria-current="true" aria-label="Slide 1"></button>
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZINEHopeVol3Part1.jpg" class="d-block w-100" alt="1">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#artikel4modalControls"
									data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#artikel4modalControls"
									data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						</div>
					</div>
				</div>
			</div>
			
        </section>

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();

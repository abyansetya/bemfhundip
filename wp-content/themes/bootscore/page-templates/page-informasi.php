<?php

/**
 * Template Name: Informasi
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

        <section id="informasiterbaru" style="background: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/Rectangle-62.png'); background-size: cover;background-position: center;background-repeat: no-repeat;">
          <div class="container mt-5">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="margin-top: 5rem;margin-bottom: 5rem;">
                <h2 class="text-white">INFORMASI TERBARU</h2>

                <div class="listinformasiterbaru ms-5 my-5">
                  <img style="border-radius: 2rem !important;margin-right: 2rem;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052342_0.jpg" alt="INFO 1" data-bs-toggle="modal" data-bs-target="#info1modal">
                  <img style="border-radius: 2rem !important;margin-right: 2rem;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052326_0.jpg" alt="INFO 2" data-bs-toggle="modal" data-bs-target="#info2modal">
                  <img style="border-radius: 2rem !important;margin-right: 2rem;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052344_0.jpg" alt="INFO 3" data-bs-toggle="modal" data-bs-target="#info3modal">
				  <img style="border-radius: 2rem !important;margin-right: 2rem;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/10/opreg.jpg" alt="INFO 4" data-bs-toggle="modal" data-bs-target="#info4modal">
				  <img style="border-radius: 2rem !important;margin-right: 2rem;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052339_0.jpg" alt="INFO 5" data-bs-toggle="modal" data-bs-target="#info5modal">
                </div>
              </div>
            </div>
          </div>
			
			<!-- START Modal -->
			<div class="modal fade" id="info1modal" tabindex="-1" aria-labelledby="info1modalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
					<div id="info1modalControls" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
						<button type="button" data-bs-target="#info1modalControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#info1modalControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
					  </div>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052342_0.jpg" class="d-block w-100" alt="1">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052343_0.jpg" class="d-block w-100" alt="2">
						</div>
					  </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#info1modalControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#info1modalControls" data-bs-slide="next">
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

			<div class="modal fade" id="info2modal" tabindex="-1" aria-labelledby="info2modalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
					<div id="info2modalControls" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
						<button type="button" data-bs-target="#info2modalControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#info2modalControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
					  </div>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052326_0.jpg" class="d-block w-100" alt="1">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052328_0.jpg" class="d-block w-100" alt="2">
						</div>
					  </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#info2modalControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#info2modalControls" data-bs-slide="next">
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

			<div class="modal fade" id="info3modal" tabindex="-1" aria-labelledby="info3modalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
					<div id="info3modalControls" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
						<button type="button" data-bs-target="#info3modalControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#info3modalControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
					  </div>
						
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052344_0.jpg" class="d-block w-100" alt="1">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052345_0.jpg" class="d-block w-100" alt="2">
					  </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#info3modalControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#info3modalControls" data-bs-slide="next">
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
		</div>
				
		   <div class="modal fade" id="info4modal" tabindex="-1" aria-labelledby="info4modalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
					<div id="info4modalControls" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
						<button type="button" data-bs-target="#info4modalControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#info4modalControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
					  </div>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/10/opreg.jpg" class="d-block w-100" alt="1">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/10/qrop.jpg" class="d-block w-100" alt="2">
					  </div>
					 </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#info4modalControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#info4modalControls" data-bs-slide="next">
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

				
			<div class="modal fade" id="info5modal" tabindex="-1" aria-labelledby="info5modalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
					<div id="info5modalControls" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
						<button type="button" data-bs-target="#info5modalControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#info5modalControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
	
					  </div>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052339_0.jpg" alt="1">
						</div>
						<div class="carousel-item">
						  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/S__23052341_0.jpg" class="d-block w-100" alt="2">
					  </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#info5modalControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#info4modalControls" data-bs-slide="next">
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
		</div>
			<!-- END Modal -->
        </section>

        <section id="kemahasiswaan">
			<div class="container">
              <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
					<h2 class="fw-bolder text-start">Kemahasiswaan</h2>

                    <div class="listkemahasiswaan my-5">
						<a href="https://docs.google.com/document/d/17WJNFJn-Et_-dJDWqSElglgHFR9WnjUp/edit?usp=drive_link&ouid=102651183702431473778&rtpof=true&sd=true" target="_blank">
                      	<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/SR-PMM-min.png" alt="kemahasiswaan 1" data-bs-toggle="modal" data-bs-target="#kemahasiswaan1modal">
						</a>
						<a href="https://docs.google.com/document/d/12EZGvrjobRLeOLh5sV8WGCmKj8NhO-2c/edit?usp=drive_link&ouid=102651183702431473778&rtpof=true&sd=true" target="_blank">
                      	<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/SURAT-IJIN-MAGANG-min.png" alt="kemahasiswaan 1" data-bs-toggle="modal" data-bs-target="#kemahasiswaan1modal">
						</a>
						<a href="https://docs.google.com/document/d/1arcc2Qs125Jo63p3hGcTaOBmgEJTWNsE/edit?usp=drive_link" target="_blank">
                      	<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/IJIN-KULIAH-min.png" alt="kemahasiswaan 1" data-bs-toggle="modal" data-bs-target="#kemahasiswaan1modal">
						</a>
						<a href="https://docs.google.com/document/d/1ShAJQM7CFemvP6zUmNBpJIy5NF4uSEPn/edit?usp=drive_link" target="_blank">
                      	<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/SKET-AKTIF-min.png" alt="kemahasiswaan 1" data-bs-toggle="modal" data-bs-target="#kemahasiswaan1modal">
						</a>
						<a href="https://docs.google.com/document/d/12Kug3JZmClzlOqtzNig3z8yid1cNq4SI/edit?usp=drive_link&ouid=102651183702431473778&rtpof=true&sd=true" target="_blank">
                      	<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/SR-BEASISWA.png" alt="kemahasiswaan 1" data-bs-toggle="modal" data-bs-target="#kemahasiswaan1modal">
						</a>
                    </div>
                </div>
              </div>
            </div>

			<!-- <div class="modal fade" id="kemahasiswaan1modal" tabindex="-1" aria-labelledby="kemahasiswaan1Label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div id="kemahasiswaan1Controls" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
									<button type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
									<button type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
									<button type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
									<button type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
									<button type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
									<button type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide-to="8" aria-label="Slide 9"></button>
									<button type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide-to="9" aria-label="Slide 10"></button>
								</div>
								<div class="carousel-inner">
								<div class="carousel-item active">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-2.jpg" class="d-block w-100" alt="1">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2-2.jpg" class="d-block w-100" alt="2">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/3-2.jpg" class="d-block w-100" alt="3">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/4-2.jpg" class="d-block w-100" alt="4">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5-2.jpg" class="d-block w-100" alt="5">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/6-1.jpg" class="d-block w-100" alt="6">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/7.jpg" class="d-block w-100" alt="7">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/8.jpg" class="d-block w-100" alt="8">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/9.jpg" class="d-block w-100" alt="9">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/10.jpg" class="d-block w-100" alt="10">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#kemahasiswaan1Controls" data-bs-slide="next">
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
			</div> -->

		</section>

		<section id="karierdanprofesi">
			<div class="container">
              <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
					<h2 class="fw-bolder text-start">Karier Dan Profesi</h2>

                    <div class="listkapro my-5">
                      	<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/1-1.jpg" alt="kapro 1" data-bs-toggle="modal" data-bs-target="#kapro1modal">
                    </div>
                </div>
              </div>
            </div>

			<div class="modal fade" id="kapro1modal" tabindex="-1" aria-labelledby="kapro1Label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div id="kapro1Controls" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#kapro1Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#kapro1Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#kapro1Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
									<button type="button" data-bs-target="#kapro1Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
									<button type="button" data-bs-target="#kapro1Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
								</div>
								<div class="carousel-inner">
								<div class="carousel-item active">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/1-1.jpg" class="d-block w-100" alt="1">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/2-1.jpg" class="d-block w-100" alt="2">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/3-1.jpg" class="d-block w-100" alt="3">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/4-1.jpg" class="d-block w-100" alt="4">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/5-1.jpg" class="d-block w-100" alt="5">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#kapro1Controls" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#kapro1Controls" data-bs-slide="next">
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

		<section id="beasiswa">
			<div class="container">
              <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
					<h2 class="fw-bolder text-start">Beasiswa</h2>

                    <div class="listbeasiswa my-5">
                      	<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/1.jpeg" alt="beasiswa 1" data-bs-toggle="modal" data-bs-target="#beasiswa1modal">
                        <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/1.jpg" alt="beasiswa 2" data-bs-toggle="modal" data-bs-target="#beasiswa2modal">
                        <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/1-1.jpeg" alt="beasiswa 3" data-bs-toggle="modal" data-bs-target="#beasiswa3modal">
                    </div>
                </div>
              </div>
            </div>

			<div class="modal fade" id="beasiswa1modal" tabindex="-1" aria-labelledby="beasiswa1Label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div id="beasiswa1Controls" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#beasiswa1Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#beasiswa1Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#beasiswa1Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
									<button type="button" data-bs-target="#beasiswa1Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
									<button type="button" data-bs-target="#beasiswa1Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
								</div>
								<div class="carousel-inner">
								<div class="carousel-item active">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/1.jpeg" class="d-block w-100" alt="1">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/2.jpeg" class="d-block w-100" alt="2">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/3.jpeg" class="d-block w-100" alt="3">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/4.jpeg" class="d-block w-100" alt="4">
									</div>
									<div class="carousel-item">
									  <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/5.jpeg" class="d-block w-100" alt="5">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#beasiswa1Controls" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#beasiswa1Controls" data-bs-slide="next">
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

			<div class="modal fade" id="beasiswa2modal" tabindex="-1" aria-labelledby="beasiswa2Label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div id="beasiswa2Controls" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#beasiswa2Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#beasiswa2Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#beasiswa2Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
									<button type="button" data-bs-target="#beasiswa2Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
									<button type="button" data-bs-target="#beasiswa2Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/1.jpg" class="d-block w-100" alt="1">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/2.jpg" class="d-block w-100" alt="2">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/3.jpg" class="d-block w-100" alt="3">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/4.jpg" class="d-block w-100" alt="4">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/5.jpg" class="d-block w-100" alt="5">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#beasiswa2Controls" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#beasiswa2Controls" data-bs-slide="next">
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

			<div class="modal fade" id="beasiswa3modal" tabindex="-1" aria-labelledby="beasiswa3Label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div id="beasiswa3Controls" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#beasiswa3Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#beasiswa3Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#beasiswa3Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
									<button type="button" data-bs-target="#beasiswa3Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
									<button type="button" data-bs-target="#beasiswa3Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
									<button type="button" data-bs-target="#beasiswa3Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/1-1.jpeg" class="d-block w-100" alt="1">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/2-1.jpeg" class="d-block w-100" alt="2">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/3-1.jpeg" class="d-block w-100" alt="3">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/4-1.jpeg" class="d-block w-100" alt="4">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/5-1.jpeg" class="d-block w-100" alt="5">
									</div>
									<div class="carousel-item">
										<img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/09/6.jpg" class="d-block w-100" alt="6">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#beasiswa3Controls" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#beasiswa3Controls" data-bs-slide="next">
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

		<section id="produkhukum">
			<div class="container">
              <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
					<h2 class="fw-bolder text-start">Produk Hukum BEM FH UNDIP</h2>

                    <div class="listprodukhukum my-5">
                      	<a href="https://drive.google.com/file/d/13BBufQNm3GdBY6GAZCQYO95pvv0klf3A/view?usp=drive_link" target="_blank">
							<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/AD-ART-COV-min.png" alt="produkhukum 1">
						</a>
						<a href="https://drive.google.com/file/d/18mf7FVoRrFCcHuDOF-R-eInMOJEI4ggH/view?usp=drive_link" target="_blank">
							<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/PPO-GBHK-min.png" alt="produkhukum 1">
						</a>
						<a href="https://drive.google.com/drive/folders/1PHW_FbPE-1bnEYDT7wXnd0e2K7AhGxkB?usp=drive_link" target="_blank">
							<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/MEKANISME-PEMINJAMAN-KOPERASI-BEM-min.png" alt="produkhukum 1">
						</a>
                    </div>
                </div>
              </div>
            </div>
		</section>

		<section id="administrasi">
			<div class="container">
              <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
					<h2 class="fw-bolder text-start">Administrasi</h2>

                    <div class="listadministrasi my-5">
                      	<a href="https://drive.google.com/drive/folders/1HqytihAuCaww7FPMutdiDHxWe0RckXJc?usp=drive_link" target="_blank">
							<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/pedoman-biro-min.png" alt="administrasi 1">
						</a>
                        <a href="https://drive.google.com/file/d/1-PVH2kquCkvTV3Q2pDhFMwu4XWZnEpo9/view" target="_blank">
							<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/SURAT-ONLINE-min.png" alt="administrasi 1">
						</a>
						<a href="https://drive.google.com/file/d/1eXyVTK6lz9ox13WMHn_uJ1VF0FRTNnK8/view?usp=drive_link" target="_blank">
							<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/09/PPO-GBHK-min.png" alt="administrasi 1">
						</a>
						<a href="https://ilmuhukum.fh.undip.ac.id/wp-content/uploads/2023/09/Panduan-Tugas-Akhir-2023.pdf" target="_blank">
							<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/10/BP-Tugas-akhir.png" alt="administrasi 1">
						</a>
						<a href="https://drive.google.com/drive/folders/1y5E5KNo7BnW_Se44wAz08LqbN38JHjMR" target="_blank">
							<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/10/SERT-LKMMPD.png" alt="administrasi 1">
						</a>
						<a href="https://drive.google.com/drive/folders/1aehuVqJNkeRR9cxsf0i2cqU99DWBYJcv" target="_blank">
							<img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2023/10/sertif-pkkmb.png" alt="administrasi 1">
						</a>
                    </div>
                </div>
              </div>
            </div>
		</section>

        <section id="informasilainnya">
            <div class="container mt-5">
            </div>
        </section>

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();

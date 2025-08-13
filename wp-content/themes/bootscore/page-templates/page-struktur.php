<?php

/**
 * Template Name: Struktur Organisasi
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<style>
    .card {
        position: relative;
        display: flex;
        flex-direction: unset;
        align-items: flex-end;
        overflow: hidden;
        padding: 1rem;
        width: 100%;
        text-align: center;
        color: whitesmoke;
        /* background-color: whitesmoke; */
        /* box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1); */
    }
    @media (min-width: 600px) {
        .card {
            height: 320px;
            width: 320px;
        }
    }
    .card:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: 0 0;
        transition: transform calc(var(--d) * 1.5) var(--e);
        pointer-events: none;
    }
    .card:after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 200%;
        pointer-events: none;
        background: #C14953;
        /* background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.009) 11.7%, rgba(0, 0, 0, 0.034) 22.1%, rgba(0, 0, 0, 0.072) 31.2%, rgba(0, 0, 0, 0.123) 39.4%, rgba(0, 0, 0, 0.182) 46.6%, rgba(0, 0, 0, 0.249) 53.1%, rgba(0, 0, 0, 0.32) 58.9%, rgba(0, 0, 0, 0.394) 64.3%, rgba(0, 0, 0, 0.468) 69.3%, rgba(0, 0, 0, 0.54) 74.1%, rgba(0, 0, 0, 0.607) 78.8%, rgba(0, 0, 0, 0.668) 83.6%, rgba(0, 0, 0, 0.721) 88.7%, rgba(0, 0, 0, 0.762) 94.1%, rgba(0, 0, 0, 0.79) 100%); */
        opacity: 0;
        transform: translateY(-50%);
        transition: transform calc(var(--d) * 2) var(--e);
    }
    .content {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        /* padding: 1rem; */
        transition: transform var(--d) var(--e);
        z-index: 1;
    }
    .content > * + * {
        margin-top: 1rem;
    }
    .btn {
        cursor: pointer;
        margin-top: 1.5rem;
        padding: 0.75rem 1.5rem;
        font-size: 0.65rem;
        font-weight: bold;
        letter-spacing: 0.025rem;
        text-transform: uppercase;
        color: white;
        background-color: black;
        border: none;
    }
    .btn:hover {
        background-color: #0d0d0d;
    }
    .btn:focus {
        outline: 1px dashed yellow;
        outline-offset: 3px;
    }
    @media (hover: hover) and (min-width: 600px) {
        .card:after {
            transform: translateY(0);
        }

        .content {
            transform: translateY(calc(100% - 4.5rem));
        }
        .content > *:not(.title) {
            opacity: 0;
            transition: opacity .5s ease-out;
            -moz-transition: opacity .5s ease-out;
            -webkit-transition: opacity .5s ease-out;
            -o-transition: opacity .5s ease-out;
            transform: translateY(1rem);
            transition: transform var(--d) var(--e), opacity var(--d) var(--e);
        }

        .card:hover,
        .card:focus-within {
            align-items: center;
        }
        .card:hover:before,
        .card:focus-within:before {
            transform: translateY(-4%);
        }
        .card:hover:after,
        .card:focus-within:after {
            opacity: 1;
            transition: opacity .2s ease-out;
            -moz-transition: opacity .2s ease-out;
            -webkit-transition: opacity .2s ease-out;
            -o-transition: opacity .2s ease-out;
            transform: translateY(-50%);
        }
        .card:hover .content,
        .card:focus-within .content {
            transform: translateY(0);
        }
        .card:hover .content > *:not(.title),
        .card:focus-within .content > *:not(.title) {
            opacity: 1;
            transform: translateY(0);
            transition-delay: calc(var(--d) / 8);
        }

        .card:focus-within:before, .card:focus-within:after,
        .card:focus-within .content,
        .card:focus-within .content > *:not(.title) {
            transition-duration: 0s;
        }
    }

    .text-hover-inverse-secondary:hover {
        transition: color .2s ease,background-color .2s ease;
        color: #3f4254!important;
    }

    .bg-hover-secondary:hover {
        --bg-color: 228,230,239;
        background-color: #e4e6ef!important;
    }

    .text-hover-inverse-secondary {
        transition: color .2s ease,background-color .2s ease;
    }
</style>

<div id="content" class="site-content" style="background: #FFF3E9;">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <main id="main" class="site-main">

        <header class="entry-header featured-full-width-img text-light mb-5" style="background-position-y: bottom;background-color: #FFF3E9;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/berandaimage.png')">
            <div class="container entry-header d-flex flex-column justify-content-center align-items-center pb-3" style="height: 400px;">
                <h1 class="entry-title ">STRUKTUR ORGANISASI</h1>
            </div>
        </header>

        <section id="struktur">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <img class="bg-hover-secondary text-hover-inverse-secondary rounded-4" style="cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Ketua-dan-Wakil.svg" alt="Ketua dan Wakil" data-bs-toggle="modal" data-bs-target="#modalph">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img class="bg-hover-secondary text-hover-inverse-secondary rounded-4" style="cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Sekretaris-Umum-IIIIII.png" alt="Sekretaris Umum I&II" data-bs-toggle="modal" data-bs-target="#modalph">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img class="bg-hover-secondary text-hover-inverse-secondary rounded-4" style="cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Bendahara-Umum-III.png" alt="Bendahara Umum I&II" data-bs-toggle="modal" data-bs-target="#modalph">
                </div>
            </div>
            <!-- SECTION START MODAL -->
            <div id="modalph" class="modal" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <div class="row p-5">
                                <h4 class="text-center fw-bolder">KETUA DAN WAKIL KETUA</h4>
                                <h4 class="text-center">BEM FH UNDIP 2024</h4>
                                <div class="col-lg-6 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/sofa-.svg" alt="Sofa-Dzunnuhasani" style="height: 80%;">
                                    <h5 class="text-success fw-bolder mt-4">Sofa Dzunnuhasani</h5>
                                    <h6>Ketua BEM FH Undip 2024</h6>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/ratna-1.svg" alt="Ratnasari-Nur" style="height: 80%;">
                                    <h5 class="text-success fw-bolder mt-4">Ratnasari Nur A.</h5>
                                    <h6>Wakil Ketua BEM FH Undip 2024</h6>
                                </div>
                            </div>

                            <div class="row p-5">
                                <h4 class="text-center fw-bolder">SEKRETARIS UMUM</h4>
                                <div class="col-lg-4 col-md-6 col-sm-10 d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/intan-1.svg" alt="Teresa-Amanda" style="height: 60%;">
                                    <h5 class="text-success fw-bolder mt-4">Intan Esti</h5>
                                    <h6>Sekretaris Umum I</h6>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/galuh-1.svg" alt="Intan-Esti" style="height: 60%;">
                                    <h5 class="text-success fw-bolder mt-4">Galuh Kurnia</h5>
                                    <h6>Sekretaris Umum II</h6>
                                </div>
								<div class="col-lg-4 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/salma-1.svg" alt="Atika-Anrelia" style="height: 60%;">
                                    <h5 class="text-success fw-bolder mt-4">Salma Nurfaiza</h5>
                                    <h6>Sekretaris Umum III</h6>
                                </div>
                            </div>

                            <div class="row p-5">
                                <h4 class="text-center fw-bolder">BENDAHARA UMUM</h4>
                                <div class="col-lg-4 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/haning-1.svg" alt="Joyce-Yedija" style="height: 60%;">
                                    <h5 class="text-success fw-bolder mt-4">Surya Nofitri Nugrahaning</h5>
                                    <h6>Bendahara Umum I</h6>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/titi-1.svg" alt="Thalillah-Rivia-Saloom" style="height: 60%;">
                                    <h5 class="text-success fw-bolder mt-4">Nabila Putri Nastiti</h5>
                                    <h6>Bendahara Umum II</h6>
                                </div>
								<div class="col-lg-4 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/nadin-1.svg" alt="Shabrina-Alifia-Maharani" style="height: 60%;">
                                    <h5 class="text-success fw-bolder mt-4">Nadine Maritzafiani</h5>
                                    <h6>Bendahara Umum III</h6>
                                </div>
                            </div>
							<button type="button" class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION END MODAL -->
            <div class="row text-center mt-5 mb-5">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 style="color: #AC3C3C;" class="fw-bolder mt-5">KOMISI AHLI, KEPALA KANTOR & KEPALA TIM</h4>

                    <div class="row text-center mt-5 mb-5">
                        <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/KA-PSDM-RISKEL.svg');background-repeat: no-repeat;width: 236px;height: 256px;">
                                <div class="content">
                                    <h4 class="copy p-3">Muhammad Fuad Nugroho</h4>
                                    <h6 class="copy">Komisi Ahli Bidang PSDM-RISKEL</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/KA-ADVOKESMA-KAPRO.svg');background-repeat: no-repeat;width: 236px;height: 256px;">
                                <div class="content">
                                    <h4 class="copy p-3">Davin Ananda Hanafia</h4>
                                    <h6 class="copy">Komisi Ahli Bidang ADVOKESMA-KAPRO</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/KA-DIMAS-HALMAS.svg');background-repeat: no-repeat;width: 236px;height: 256px;">
                                <div class="content">
                                    <h4 class="copy p-3">Mochammad Aqsal Yuwono</h4>
                                    <h6 class="copy">Komisi Ahli Bidang DIMAS-HALMAS</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center mt-5 mb-5">
                        <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/KA-HSP-PP.svg');background-repeat: no-repeat;width: 236px;height: 256px;">
                                <div class="content">
                                    <h4 class="copy p-3">Khalid Irsyad</h4>
                                    <h6 class="copy">Komisi Ahli Bidang HSP-PP</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/KA-MIKAT-EKOTIF.svg');background-repeat: no-repeat;width: 236px;height: 256px;">
                                <div class="content">
                                    <h4 class="copy p-3">Ridho Tri Cahyono</h4>
                                    <h6 class="copy">Komisi Ahli Bidang MIKAT-EKOTIF</h6>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Kepala-Kantor.svg');background-repeat: no-repeat;width: 236px;height: 256px;">
                                <div class="content">
                                    <h4 class="copy p-3">Muhammad Kindi Dayu Isya</h4>
                                    <h6 class="copy">Kepala Kantor Media dan Informasi</h6>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="row text-center mt-5 mb-5">
                        <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Kepala-Tim.svg');background-repeat: no-repeat;width: 236px;height: 256px;">
                                <div class="content">
                                    <h4 class="copy p-3">Rizky Adi</h4>
                                    <h6 class="copy">Kepala Tim Penjamin Mutu Organisasi</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/PSDM.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalpsdm">
                        <div class="content">
                            <h5 class="copy p-3" style="text-decoration: none;">Bidang Pengembangan Sumber Daya Mahasiswa</h5>
                            <h5 class="copy p-3" style="text-decoration: none;">(PSDM)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/RISKEL.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalriskel">
                        <div class="content">
                            <h5 class="copy p-3" style="text-decoration: none;">Bidang Riset dan Keilmuan</h5>
                            <h5 class="copy p-3" style="text-decoration: none;">(RISKEL)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/DIMAS.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modaldimas">
                        <div class="content">
                            <h5 class="copy p-3" style="text-decoration: none;">Bidang Pengabdian Masyarakat</h5>
                            <h5 class="copy p-3" style="text-decoration: none;">(DIMAS)</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION START MODAL -->
            <div id="modalpsdm" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Bidang Pengembangan Sumber Daya Mahasiswa <br>(PSDM)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modalpsdmSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modalpsdmSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modalpsdmSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modalpsdmSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modalpsdmSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/PSDM.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/PSDM-1.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/PSDM-2.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/PSDM-3.png" class="d-block w-100" alt="Slide 4">
                                        </div>
										<div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/PSDM-4.png" class="d-block w-100" alt="Slide 5">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modalpsdmSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modalpsdmSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modalriskel" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Bidang Riset dan Keilmuan <br>(RISKEL)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modalriskelSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modalriskelSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modalriskelSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modalriskelSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modalriskelSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Riskel.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/1.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/2.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/3.png" class="d-block w-100" alt="Slide 4">
                                        </div>
										<div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/4.png" class="d-block w-100" alt="Slide 5">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modalriskelSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modalriskelSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modaldimas" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Bidang Pengabdian Masyarakat <br>(DIMAS)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modaldimasSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modaldimasSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modaldimasSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modaldimasSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modaldimasSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Dimas.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/1-1.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/2-1.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/3-1.png" class="d-block w-100" alt="Slide 4">
                                        </div>
										<div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/4-1.png" class="d-block w-100" alt="Slide 4">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modaldimasSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modaldimasSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION END MODAL -->
            <div class="row text-center mt-5 mb-5">
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/HSP.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalhsp">
                        <div class="content">
                            <h5 class="copy p-3" style="text-decoration: none;">Bidang Hukum Sosial dan Politik</h5>
                            <h5 class="copy p-3" style="text-decoration: none;">(HSP)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/PP.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalpp">
                        <div class="content">
                            <h5 class="copy p-3" style="text-decoration: none;">Bidang Pemberdayaan Perempuan</h5>
                            <h5 class="copy p-3" style="text-decoration: none;">(PP)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/HALMAS.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalhalmas">
                        <div class="content">
                            <h5 class="copy p-3" style="text-decoration: none;">Bidang Hubungan Antar Lembaga Masyarakat</h5>
                            <h5 class="copy p-3" style="text-decoration: none;">(HALMAS)</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION START MODAL -->
            <div id="modalhsp" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Bidang Hukum Sosial dan Politika <br>(HSP)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modalhspSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modalhspSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modalhspSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modalhspSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modalhspSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#modalhspSlide" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/HSP.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/13.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/22.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/32.png" class="d-block w-100" alt="Slide 4">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/42.png" class="d-block w-100" alt="Slide 5">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modalhspSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modalhspSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modalpp" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Bidang Pemberdayaan Perempuan <br>(PP)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modalppSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modalppSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modalppSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modalppSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modalppSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/PP.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/1-2.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/2-2.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/3-2.png" class="d-block w-100" alt="Slide 4">
                                        </div>
										<div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/4-2.png" class="d-block w-100" alt="Slide 4">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modalppSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modalppSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modalhalmas" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Bidang Hubungan Antar Lembaga Masyarakat <br>(HALMAS)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modalhalmasSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modalhalmasSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modalhalmasSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modalhalmasSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modalhalmasSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Halmas.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/12.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/21.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/31.png" class="d-block w-100" alt="Slide 4">
                                        </div>
										<div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/41.png" class="d-block w-100" alt="Slide 4">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modalhalmasSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modalhalmasSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION END MODAL -->
            <div class="row text-center mt-5 mb-5">
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/KAPRO.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalkapro">
                        <div class="content">
                            <h5 class="copy p-3" style="text-decoration: none;">Bidang Karier dan Profesi</h5>
                            <h5 class="copy p-3" style="text-decoration: none;">(KAPRO)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/ADVOKESMA.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modaladvokesma">
                        <div class="content">
                            <h5 class="copy p-3" style="text-decoration: none;">Bidang Advokasi dan Kesejahteraan Masyarakat</h5>
                            <h5 class="copy p-3" style="text-decoration: none;">(ADVO-KESMA)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                    <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/MIKAT.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalmikat">
                        <div class="content">
                            <h5 class="copy p-3" style="text-decoration: none;">Bidang Minat dan Bakat</h5>
                            <h5 class="copy p-3" style="text-decoration: none;">(MIKAT)</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION START MODAL -->
            <div id="modalkapro" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Bidang Karier dan Profesi <br>(KAPRO)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modalkaproSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modalkaproSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modalkaproSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modalkaproSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modalkaproSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Kaproo.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/14.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/23.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/33.png" class="d-block w-100" alt="Slide 4">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modalkaproSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modalkaproSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modaladvokesma" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Bidang Advokasi dan Kesejahteraan Masyarakatn <br>(ADVO-KESMA)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modaladvokesmaSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modaladvokesmaSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modaladvokesmaSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modaladvokesmaSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modaladvokesmaSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Advo.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/12-1.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/21-1.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/31-1.png" class="d-block w-100" alt="Slide 4">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modaladvokesmaSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modaladvokesmaSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modalmikat" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Bidang Minat dan Bakat <br>(MIKAT)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modalmikatSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modalmikatSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modalmikatSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modalmikatSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modalmikatSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Mikat.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/15.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/24.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/34.png" class="d-block w-100" alt="Slide 4">
                                        </div>
										<div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/43.png" class="d-block w-100" alt="Slide 5">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modalmikatSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modalmikatSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION END MODAL -->
                <div class="row text-center mt-5 mb-5">
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                        <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/EKOTIF.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalekotif">
                            <div class="content">
                                <h5 class="copy p-3" style="text-decoration: none;">Bidang Ekonomi Kreatif</h5>
                                <h5 class="copy p-3" style="text-decoration: none;">(EKOTIF)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                        <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/KMI-1.png');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalkmi">
                            <div class="content">
                                <h5 class="copy p-3" style="text-decoration: none;">Kantor Media dan Informasi</h5>
                                <h5 class="copy p-3" style="text-decoration: none;">(KMI)</h5>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-center justify-content-center">
                        <div class="card border-0 rounded-4 p-0" style="background-color: transparent;background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/TPMO.svg');background-repeat: no-repeat;width: 308px;height: 308px;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modaltpmo">
                            <div class="content">
                                <h5 class="copy p-3" style="text-decoration: none;">Tim Penjamin Mutu Organisasi</h5>
                                <h5 class="copy p-3" style="text-decoration: none;">(TPMO)</h5>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- SECTION START MODAL -->
            <div id="modalekotif" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Bidang Ekonomi Kreatif <br>(EKOTIF)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modalekotifSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modalekotifSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modalekotifSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modalekotifSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modalekotifSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/Ekotif.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/25.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/16.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/35.png" class="d-block w-100" alt="Slide 4">
                                        </div>
										<div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/44.png" class="d-block w-100" alt="Slide 5">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modalekotifSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modalekotifSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modalkmi" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Kantor Media dan Informasi <br>(KMI)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modalkmiSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#modalkmiSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#modalkmiSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#modalkmiSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#modalkmiSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/KMI.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/KMI-1.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/KMI-2.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/KMI-3.png" class="d-block w-100" alt="Slide 4">
                                        </div>
										<div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/KMI-4.png" class="d-block w-100" alt="Slide 4">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modalkmiSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modalkmiSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div id="modaltpmo" class="modal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background: #FFF3E9;">
                        <div class="modal-body">
                            <h4 class="text-center fw-bolder">Tim Penjamin Mutu Organisasi <br>(TPMO)</h4>
                            <div class="row ps-5 pe-5 pb-5">
                                <div id="modaltpmoSlide" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="modaltpmoSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="modaltpmoSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="modaltpmoSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="modaltpmoSlide" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/TPMO-1.png" class="d-block w-100" alt="Cover">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/TPMO-2.png" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/TPMO-3.png" class="d-block w-100" alt="Slide 3">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/staf-tpmo-org-relation.png" class="d-block w-100" alt="Slide 4">
                                        </div>
										<div class="carousel-item">
                                            <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2024/12/staf-tpmo-humdev.png" class="d-block w-100" alt="Slide 4">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#modaltpmoSlide" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#modaltpmoSlide" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION END MODAL -->
        </section>

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();

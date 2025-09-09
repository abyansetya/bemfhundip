<?php

/**
 * Template Name: Full Width Image
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<style>
  @font-face {
    font-family: 'Norwester';
    src: url('<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/webfonts/Norwester-Regular.woff2') format('woff2'),
      url('<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/webfonts/Norwester-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
  }

  @font-face {
    font-family: 'Roboto';
    src: url('<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/webfonts/Roboto.woff') format('woff');
    font-weight: normal;
    font-style: normal;
  }

  .norwester {
    font-family: 'Norwester', sans-serif;
    letter-spacing: 2px;
    /* opsional */
  }

  .roboto {
    font-family: 'Roboto', sans-serif;
    letter-spacing: 2px;
  }

  .neon-text {
    font-size: 64px;
    color: #c14953;
    /* warna utama teks */
    text-shadow:
      0 0 5px #c14953,
      /* 0 0 10px #c14953,
    0 0 20px #c14953,
    0 0 40px #ff6b81,
    0 0 80px #ff6b81; */
  }

  .text-stack {
    position: relative;
    display: inline-block;
    /* bikin dia tetap satu blok penuh */
  }

  .text-stack h1 {
    font-size: 64px;
    margin: 0;
    /* menumpuk satu sama lain */
    top: 0;
    left: 0;
  }

  .text-stack .base {
    color: #c14953;
    text-shadow:
      0 0 0px #c14953,
      0 0 0px #c14953,
      0 0 0px #c14953,
      0 0 0px #ff6b81,
      0 0 20px #ff6b81;
  }

  .text-stack .base2 {
    color: #ce770c;
    text-shadow:
      0 0 5px #ce770c,
      0 0 10px #ce770c,
      0 0 20px #ce770c,
      0 0 40px #ce770c,
      0 0 80px #ce770c;
    opacity: 50%;
  }

  .text-stack .base3 {
    color: #ce770c;
    text-shadow:
      0 0 5px #ce770c,
      0 0 10px #ce770c,
      0 0 20px #ce770c,
      0 0 40px #ce770c,
      0 0 80px #ce770c;
    opacity: 50%;
  }

  .text-stack .overlay {
    color: white;
    top: -2px;
    /* geser ke bawah */
    left: -6px;
    /* geser ke kiri */
    text-shadow:
      0 0 0px white,
      0 0 0px white,
      0 0 0px white,
      0 0 0px white,
      0 0 20px white;
  }

  .text-stack .overlay3 {
    color: #ce770c;
    top: -2px;
    /* geser ke bawah */
    left: -6px;
    /* geser ke kiri */
    text-shadow:
      0 0 0px white,
      0 0 0px white,
      0 0 0px white,
      0 0 0px white,
      0 0 20px white;
  }

  .curved-svg-base {
    font-family: 'Norwester', sans-serif;
    font-size: 64px;
    font-weight: 700;
    letter-spacing: 20px;
    text-transform: uppercase;
    fill: #ce770c;
    /* Warna coklat untuk base text */
    filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.3));
  }

  .curved-svg-overlay {
    font-family: 'Norwester', sans-serif;
    font-size: 64px;
    font-weight: 700;
    letter-spacing: 20px;
    text-transform: uppercase;
    fill: white;
    /* Warna emas untuk overlay text */
    filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {

    .curved-svg-base,
    .curved-svg-overlay {
      font-size: 24px;
      letter-spacing: 1px;
    }
  }

  @media (max-width: 480px) {

    .curved-svg-base,
    .curved-svg-overlay {
      font-size: 18px;
      letter-spacing: 0.5px;
    }
  }

  .menu-box1 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    /* 2 kolom */
    gap: 10px;
    max-width: 600px;
    /* opsional, biar rapih di tengah */
    margin: 0 auto;
  }

  .menu-item1 {
    background-color: #c14953;
    padding: 15px;
    color: white;
    border-radius: 10px;
    font-size: 20px;
    text-align: center;
  }

  /* Responsive: di mobile jadi 1 kolom */
  @media (max-width: 768px) {
    .menu-box1 {
      grid-template-columns: 1fr;
      /* ubah jadi 1 kolom */
    }

    .center-item1 {
      grid-column: auto;
      justify-self: stretch;
      width: 100%;
    }
  }

  .center-item1 {
    grid-column: span 2;
    /* biar pakai 2 kolom */
    justify-self: center;
    /* taruh di tengah */
    width: fit-content;
    /* biar kotaknya ngepas isi */
  }
</style>


<div id="content" class="site-content" style="background: #FFF3E9;">
  <div id="primary" class="content-area">

    <main id="main" class="site-main">

      <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
      <header class="entry-header featured-full-width-img  d-flex align-items-center justify-content-center text-center"
        style="background-position: center; background-size: cover; background-color: #FFF3E9; height:100vh; background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2025/08/2.png');">

        <!-- HERO SECTION -->
        <div class="" style="display:flex; flex-direction: column; align-items:center;">
          <div class="text-stack">
            <h1 class="norwester base">WELCOME TO <br> BEM FH UNDIP 2025</h1>
            <h1 class="norwester overlay" style="position: absolute;">WELCOME TO <br> BEM FH UNDIP 2025</h1>
          </div>
          <br>
          <div style="display: flex; flex-direction: column; align-items: center;">
            <!-- Logo Image -->
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/LOGO-JUANG-ASA.png"
              alt="logo" style="max-width:500px; margin-top:-10px; width: 400px;">
            <div class="text-stack">
              <h1 class="norwester base2">KABINET JUANG ASA</h1>
              <h1 class="norwester overlay" style="position: absolute;">KABINET JUANG ASA</h1>
            </div>

            <!-- SVG Curved Text for KABINET JUANG ASA - positioned below image -->
            <!-- <div style="margin-top: 20px; width: 100%; max-width: 600px; position: absolute; transform: translateY(260px);">
              <svg width="100%" viewBox="0 0 800 550" style="width: 100%; height: auto;">
                <defs>
                  
                  <path id="kabinet-curve" d="M 100 50 Q 400 800 700 50" />
                </defs>

               
                <text class="norwester curved-svg-base">
                  <textPath href="#kabinet-curve" startOffset="50%" text-anchor="middle">
                    KABINET JUANG ASA
                  </textPath>
                </text>

                
                <text class="norwester curved-svg-overlay" transform="translate(2, -2)">
                  <textPath href="#kabinet-curve" startOffset="50%" text-anchor="middle">
                    KABINET JUANG ASA
                  </textPath>
                </text>
              </svg>
            </div> -->
          </div>
        </div>
      </header>
      <div style="height:20px; background: linear-gradient(135deg, #96373f, #c14953, #e78d5b); " class="mb-5"></div>


      <div class="pb-5">

        <!-- Hook to add something nice -->
        <?php // bs_after_primary(); 
        ?>

        <!-- Kabinet juang asa -->
        <section style="display: flex; justify-content: center; align-items: center; ">
          <div style="flex: 0 0 50%; display: flex; justify-content: center;">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/4.png"
              alt="Logo Kabinet Aksata Kirana"
              style="width:100%; height:auto; max-width: 600px;" />
          </div>
          <div style="flex: 0 0 50%; display: flex; flex-direction: column;  align-items: center;">
            <div class="text-stack " style="">
              <h1 class="norwester base3">KABINET JUANG ASA</h1>
              <h1 class="norwester overlay3" style="position: absolute;">KABINET JUANG ASA</h1>
            </div>
            <p class="norwester" style="font-size: 40px; text-align: center; color: #610008">JUANG ASA, GAPAI PERUBAHAN DAN IMPIAN</p>
            <div class="norwester menu-box1">
              <p class="menu-item1">TENTANG KAMI</p>
              <p class="menu-item1">GRAND DESIGN</p>
              <p class="menu-item1 center-item1">STRUKTUR ORGANISASI</p>
            </div>

          </div>
        </section>


        <!-- <section class="flex " style="display: flex; justify-content: center; width: 100%">
          <div class="col-lg-3 col-md-12 col-sm-12 text-lg-start text-sm-center">
            <div class="d-flex justify-content-center align-items-center ">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/4.png"
                alt="Logo Kabinet Aksata Kirana"
                style="width:100%; max-width:500px; height:auto;" />
            </div>
          </div>
          <div class="col-lg-9 col-md-11 col-sm-12">
            <h1 class="norwester" style="font-size:54px;color:#D75A5A;letter-spacing:5.6px;text-shadow:4px 3px 5px 0px rgba(48, 48, 48, 0.25);">KABINET JUANG ASA</h1>
            <p style="font-size:26px" class="mt-2">JUANG ASA, GAPAI PERUBAHAN DAN IMPIAN</h3>
            <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:32px; margin-top:40px; text-align:center;">

              <a href="https://bem.fh.undip.ac.id/?page_id=77"
                class="btn btn-orange fw-bold shadow "
                style="background-color:#F05365; color:white; padding-inline:48px; padding-block:12px; border-radius:6px; ">
                TENTANG KAMI
              </a>

              <a target="_blank"
                href="https://drive.google.com/file/d/1E_1w5BmT3uSptSutp60RPN3d1EZoIxnE/view"
                class="btn btn-orange fw-bold shadow"
                style="background-color:#F05365; color:white; padding-inline:48px; padding-block:12px; border-radius:6px;">
                GRAND DESIGN
              </a>


              <div style="flex-basis:100%; display:flex; justify-content:center; margin-top:5px;">
                <a href="https://bem.fh.undip.ac.id/?page_id=25"
                  class="fw-bold shadow"
                  style="background-color:#F05365; color:white; padding-inline:48px; padding-block:12px; border-radius:6px;">
                  STRUKTUR ORGANISASI
                </a>
              </div>
            </div>
          </div>
        </section> -->

        <!-- visi misi -->
        <div style="margin-block: 7rem; font-weight: bold;" class="container roboto">
          <!-- VISI -->
          <div style="background-color: rgba(215, 91, 91, 0.66);  padding:1rem; border-radius:1rem; margin-bottom:2rem; background-opacity: 66%">
            <h1 style="font-size:50px; color:#ebd4cd; text-align:center; margin-bottom:1.5rem;
               text-shadow: -2px -2px 0 #610008, 2px -2px 0 #610008, -2px 2px 0 #610008, 2px 2px 0 #610008;">VISI</h1>
            <p style="font-size:25px; color:#610008; text-align:center; margin:0;">
              "BEM FH Undip 2025 sebagai wadah pengkaderan yang berjuang bersama demi membawa pembaharuan
              untuk memberikan kebaikan pada FH Undip, Undip, dan Masyarakat"
            </p>
          </div>
          <!-- MISI -->
          <div style="background-color: rgba(215, 91, 91, 0.66); padding:1rem; border-radius:1rem;">
            <h1 style="font-size:50px; color:#ebd4cd; text-align:center; margin-bottom:1.5rem;
               text-shadow: -2px -2px 0 #610008, 2px -2px 0 #610008, -2px 2px 0 #610008, 2px 2px 0 #610008;">MISI</h1>
            <p style="font-size:25px; color:#610008;margin:0;">
              1. Menanamkan jiwa pengabdian melalui pengkaderan sebagai landasan perjuangan
            </p>
            <p style="font-size:25px; color:#610008; margin:0;">
              2. Merawat budaya responsif dan dialektika untuk mencapai nilai Juang Asa sehingga hidup rasa perjuangan dalam BEM FH Undip
            </p>
            <p style="font-size:25px; color:#610008;margin:0;">
              3. Menghasilkan pembaharuan karya pada BEM FH Undip 2025 dengan nilai Juang Asa
            </p>
            <p style="font-size:25px; color:#610008;  margin:0;">
              4. Memberikan kebaikan yang terukur, berkelanjutan, dan berdampak untuk FH Undip, Undip, dan masyarakat
            </p>
          </div>
        </div>

        <hr style="color: #F05365;border-top:4px solid;opacity: 0.75; " class="container">
        <div class=" container">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <h1 class="text-title fw-bolder norwester" style="letter-spacing: 5px;background-color: rgba(215, 91, 91, 0.66); border-radius:15px; color:white; display:inline-block; padding:5px 15px; margin-bottom: 20px; color: #FFF3E9; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">COMPANY PROFILE</h1>
            <div style="display:flex; align-items:center; gap:20px;">
              <!-- Kolom teks -->
              <p style="color:#610008; font-size:20px; width:50%; margin:0; text-align:justify; font-weight: bold;" class="roboto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla labore voluptate necessitatibus perspiciatis modi eum perferendis unde cumque ipsa aut reprehenderit, porro repellat sit ducimus nihil laboriosam libero numquam alias.
              </p>

              <!-- Kolom video -->
              <div style="width:50%; border-radius:15px; overflow:hidden;">
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/bO8q9cAtkE4" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>





        <hr style="color: #FFF3E9;border-top:4px solid;opacity: 0.75;margin-block: 5rem;">

        <section id="informasiterkini" class='bg-section ' style="background: linear-gradient(135deg, #dc713e, #aa2525, #dc713e);">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
                <h2 class=" norwester" style="color: #ebd4cd; font-size: 50px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">INFORMASI TERKINI</h2>
                <div class="listinformasi ms-5 my-5">
                  <img style="border-radius: 2rem !important;margin-right: 2rem;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2025/06/EZINE-VOL-3-COVER-Recovered-min.png" alt="INFO 4" data-bs-toggle="modal" data-bs-target="#info4modal">
                  <a href="https://growwithkg.id/join-us" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/10/312909244_874059746932898_4633159012524419047_n.jpg" alt="INFO 7">
                  </a>
                  <a href="https://bit.ly/RegistrationSekolahMawapresII" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/10/312897119_687872895733354_3940675789332418257_n.jpg" alt="INFO 8">
                  </a>
                  <a href="https://bit.ly/FormPengaduanMahasiswaFHUndip" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/10/312926947_794103538370584_1879960172146694985_n.jpg" alt="INFO 9">
                  </a>
                  <a href="https://bit.ly/PendaftaranCompanyVisitFHUndip2022" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/10/312489415_2666676853469922_7957767165266352823_n.jpg" alt="INFO 10">
                  </a>
                  <a href="https://bit.ly/DatabaseWirausahaFH" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/10/312364892_628562362089793_9136934300546242441_n.jpg" alt="INFO 11">
                  </a>
                  <a href="https://bit.ly/PendataanMagangMahasiswaFHUndip" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/10/312303448_1198219727400010_7583155193537373002_n.jpg" alt="INFO 12">
                  </a>
                  <a href="https://baznaskotasemarang.org/" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/10/312241721_171573562192513_8828556874445129717_n.jpg" alt="INFO 13">
                  </a>
                  <a href="https://kekancanmukti.com/career" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/10/312165948_203863505353507_6831067476761496522_n.jpg" alt="INFO 14">
                  </a>
                  <a href="https://e-recruitment.indofood.com/110jobvacancy/frmjobvacancy.aspx" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/312960858_136449022502468_436563550317352165_n.jpg" alt="INFO 15">
                  </a>
                  <a href="bit.ly/OpregBeasiswaRagamHarapan" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/313048139_1295243481311117_8728371325433682643_n.jpg" alt="INFO 16">
                  </a>
                </div>

                <!-- START Modal 1 -->
                <div class="modal fade" id="info1modal" tabindex="-1" aria-labelledby="info1modalLabel">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div id="info1modalControls" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            < type="z" data-bs-target="#info1modalControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#info1modalControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#info1modalControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              <button type="button" data-bs-target="#info1modalControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                              <button type="button" data-bs-target="#info1modalControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1.jpeg" class="d-block w-100" alt="1">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2.jpeg" class="d-block w-100" alt="2">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/3.jpeg" class="d-block w-100" alt="3">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/4.jpeg" class="d-block w-100" alt="4">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5.jpeg" class="d-block w-100" alt="5">
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
                <!-- END Modal 1 -->

                <!-- START Modal 6 -->
                <div class="modal fade" style="background-color: black;" id="info6modal" tabindex="-1" aria-labelledby="info1modalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div id="info1modalControls" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#info6modalControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#info6modalControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#info6modalControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#info6modalControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#info6modalControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#info6modalControls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1.jpeg" class="d-block w-100" alt="1">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2.jpeg" class="d-block w-100" alt="2">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/3.jpeg" class="d-block w-100" alt="3">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/4.jpeg" class="d-block w-100" alt="4">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5.jpeg" class="d-block w-100" alt="5">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5.jpeg" class="d-block w-100" alt="5">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#info6modalControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#info6modalControls" data-bs-slide="next">
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
                <!-- END Modal 6 -->

                <div class="modal fade" id="info2modal" tabindex="-1" aria-labelledby="info2modalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div id="info2modalControls" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#info2modalControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#info2modalControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#info2modalControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#info2modalControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#info2modalControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#info2modalControls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1.jpg" class="d-block w-100" alt="1">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2.jpg" class="d-block w-100" alt="2">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/3.jpg" class="d-block w-100" alt="3">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/4.jpg" class="d-block w-100" alt="4">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5.jpg" class="d-block w-100" alt="5">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/6.jpg" class="d-block w-100" alt="6">
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
                            <button type="button" data-bs-target="#info3modalControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#info3modalControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#info3modalControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-1.jpg" class="d-block w-100" alt="1">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2-1.jpg" class="d-block w-100" alt="2">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/3-1.jpg" class="d-block w-100" alt="3">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/4-1.jpg" class="d-block w-100" alt="4">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5-1.jpg" class="d-block w-100" alt="5">
                            </div>
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
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2025/06/EZINE-VOL-3-COVER-Recovered-min.png" class="d-block w-100" alt="1">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2-1.jpeg" class="d-block w-100" alt="2">
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
                            <button type="button" data-bs-target="#info5modalControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#info5modalControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#info5modalControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-2.jpeg" class="d-block w-100" alt="1">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2-2.jpeg" class="d-block w-100" alt="2">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/3-2.jpeg" class="d-block w-100" alt="3">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/4-2.jpeg" class="d-block w-100" alt="4">
                            </div>
                            <div class="carousel-item">
                              <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5-2.jpeg" class="d-block w-100" alt="5">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#info5modalControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#info5modalControls" data-bs-slide="next">
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
                <!-- END Modal -->

                <a href="https://bem.fh.undip.ac.id/?page_id=76" class="btn norwester shadow mb-5" style="padding: 20px;background-color:#255653;color: white; border-radius: 0.75rem !important; font-size: 20px;">Lihat Informasi Lebih Banyak</a>
              </div>
            </div>
          </div>
        </section>

        <hr style="color: #FFF3E9;border-top:4px solid;opacity: 0.75;margin-block: 4rem;">

        <section id="kajian">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
                <h2 class="text-title fw-bolder">KAJIAN</h2>

                <div class="listkajian my-5">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-2.jpg" alt="Kajian 1" data-bs-toggle="modal" data-bs-target="#kajian1modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-3.jpg" alt="Kajian 2" data-bs-toggle="modal" data-bs-target="#kajian2modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0683.jpg" alt="Kajian 3" data-bs-toggle="modal" data-bs-target="#kajian3modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0615.jpg" alt="Kajian 4" data-bs-toggle="modal" data-bs-target="#kajian4modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0631.jpg" alt="Kajian 5" data-bs-toggle="modal" data-bs-target="#kajian5modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0646.jpg" alt="Kajian 6" data-bs-toggle="modal" data-bs-target="#kajian6modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0691.jpg" alt="Kajian 7" data-bs-toggle="modal" data-bs-target="#kajian7modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0710.jpg" alt="Kajian 8" data-bs-toggle="modal" data-bs-target="#kajian8modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0672.jpg" alt="Kajian 9" data-bs-toggle="modal" data-bs-target="#kajian9modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-4.jpg" alt="Kajian 10" data-bs-toggle="modal" data-bs-target="#kajian10modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-5.jpg" alt="Kajian 11" data-bs-toggle="modal" data-bs-target="#kajian11modal">
                  <a href="https://bit.ly/RilisKajianRKUHPBEMFHUndip" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/10/296662116_1058096811502554_3339540714770191124_n.jpg" alt="Kajian 12">
                  </a>
                  <a href="https://bit.ly/AudiensiForkesma" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/10/300088796_500317178570008_8015327750139367880_n.jpg" alt="Kajian 13">
                  </a>
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/312988633_1249002798996484_9120823060364484999_n.jpg" alt="Kajian 14" data-bs-toggle="modal" data-bs-target="#kajian14modal">
                </div>

                <a href="https://bem.fh.undip.ac.id/?page_id=14" target="_blank" class="btn btn-success float-end"><span style="font-size: 13px;" class="px-3">Tampilkan Lebih Banyak</span></a>
              </div>
            </div>
          </div>

          <div class="modal fade" id="kajian1modal" tabindex="-1" aria-labelledby="kajian1Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian1Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian1Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian1Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian1Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian1Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian1Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian1Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian1Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#kajian1Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                      <button type="button" data-bs-target="#kajian1Controls" data-bs-slide-to="8" aria-label="Slide 9"></button>
                      <button type="button" data-bs-target="#kajian1Controls" data-bs-slide-to="9" aria-label="Slide 10"></button>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian1Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian1Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian2modal" tabindex="-1" aria-labelledby="kajian2Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian2Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian2Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian2Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian2Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian2Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian2Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian2Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian2Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#kajian2Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-3.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2-3.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/3-3.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/4-3.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5-3.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/6-2.jpg" class="d-block w-100" alt="6">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/7-1.jpg" class="d-block w-100" alt="7">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/8-1.jpg" class="d-block w-100" alt="8">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian2Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian2Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian3modal" tabindex="-1" aria-labelledby="kajian3Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian3Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian3Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian3Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian3Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian3Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian3Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian3Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian3Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#kajian3Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0683.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0684.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0685.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0686.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0687.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0688.jpg" class="d-block w-100" alt="6">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0689.jpg" class="d-block w-100" alt="7">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0690.jpg" class="d-block w-100" alt="8">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian3Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian3Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian4modal" tabindex="-1" aria-labelledby="kajian4Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian4Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian4Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian4Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian4Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian4Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian4Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian4Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian4Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#kajian4Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0615.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0616.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0617.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0618.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0619.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0620.jpg" class="d-block w-100" alt="6">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0621.jpg" class="d-block w-100" alt="7">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0622.jpg" class="d-block w-100" alt="8">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian4Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian4Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian5modal" tabindex="-1" aria-labelledby="kajian5Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian5Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian5Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian5Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian5Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian5Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian5Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian5Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian5Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#kajian5Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                      <button type="button" data-bs-target="#kajian5Controls" data-bs-slide-to="8" aria-label="Slide 9"></button>
                      <button type="button" data-bs-target="#kajian5Controls" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0631.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0632.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0633.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0634.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0635.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0636.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0637.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0638.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0639.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0640.jpg" class="d-block w-100" alt="5">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian5Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian5Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian6modal" tabindex="-1" aria-labelledby="kajian6Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian6Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian6Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian6Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian6Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian6Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian6Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian6Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian6Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#kajian6Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                      <button type="button" data-bs-target="#kajian6Controls" data-bs-slide-to="8" aria-label="Slide 9"></button>
                      <button type="button" data-bs-target="#kajian6Controls" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0646.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0647.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0648.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0649.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0650.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0651.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0652.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0653.jpg" class="d-block w-100" alt="5">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian6Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian6Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian7modal" tabindex="-1" aria-labelledby="kajian7Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian7Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian7Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian7Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian7Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian7Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian7Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian7Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian7Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0691.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0692.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0693.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0694.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0695.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0696.jpg" class="d-block w-100" alt="6">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0697.jpg" class="d-block w-100" alt="7">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian7Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian7Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian8modal" tabindex="-1" aria-labelledby="kajian8Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian8Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian8Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian8Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian8Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian8Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian8Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian8Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian8Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#kajian8Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                      <button type="button" data-bs-target="#kajian8Controls" data-bs-slide-to="8" aria-label="Slide 9"></button>
                      <button type="button" data-bs-target="#kajian8Controls" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0710.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0711.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0712.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_07131.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0713.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0715.jpg" class="d-block w-100" alt="6">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0716.jpg" class="d-block w-100" alt="7">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0717.jpg" class="d-block w-100" alt="8">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0718.jpg" class="d-block w-100" alt="9">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0719.jpg" class="d-block w-100" alt="10">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian8Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian8Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian9modal" tabindex="-1" aria-labelledby="kajian9Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian9Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian9Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian9Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian9Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian9Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian9Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian9Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian9Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#kajian9Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                      <button type="button" data-bs-target="#kajian9Controls" data-bs-slide-to="8" aria-label="Slide 9"></button>
                      <button type="button" data-bs-target="#kajian9Controls" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0672.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0673.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0674.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0675.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0676.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0677.jpg" class="d-block w-100" alt="6">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0678.jpg" class="d-block w-100" alt="7">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0679.jpg" class="d-block w-100" alt="8">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0680.jpg" class="d-block w-100" alt="9">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0681.jpg" class="d-block w-100" alt="10">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian9Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian9Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian10modal" tabindex="-1" aria-labelledby="kajian10Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian10Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian10Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian10Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian10Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian10Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian10Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian10Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian10Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-4.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/2-4.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/3-4.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/4-4.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/5-4.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/6-3.jpg" class="d-block w-100" alt="6">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/7-2.jpg" class="d-block w-100" alt="7">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian10Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian10Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian11modal" tabindex="-1" aria-labelledby="kajian11Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian11Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian11Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian11Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian11Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian11Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian11Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian11Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian11Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#kajian11Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                      <button type="button" data-bs-target="#kajian11Controls" data-bs-slide-to="8" aria-label="Slide 9"></button>
                      <button type="button" data-bs-target="#kajian11Controls" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-5.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/658.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0656.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0657.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0659.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0660.jpg" class="d-block w-100" alt="6">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0661.jpg" class="d-block w-100" alt="7">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0662.jpg" class="d-block w-100" alt="8">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0663.jpg" class="d-block w-100" alt="9">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/IMG_0664.jpg" class="d-block w-100" alt="10">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian11Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian11Controls" data-bs-slide="next">
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

          <div class="modal fade" id="kajian14modal" tabindex="-1" aria-labelledby="kajian14Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div id="kajian14Controls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kajian14Controls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kajian14Controls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kajian14Controls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#kajian14Controls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#kajian14Controls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#kajian14Controls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#kajian14Controls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#kajian14Controls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                      <button type="button" data-bs-target="#kajian14Controls" data-bs-slide-to="8" aria-label="Slide 9"></button>

                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/312988633_1249002798996484_9120823060364484999_n.jpg" class="d-block w-100" alt="1">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/313284030_1268375643944439_979988448125307017_n.jpg" class="d-block w-100" alt="2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/313295309_135735599215217_3860173487932522185_n.jpg" class="d-block w-100" alt="3">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/313199982_632854478314432_8042017544962627842_n.jpg" class="d-block w-100" alt="4">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/312841157_1099488670704763_7113446146592580095_n.jpg" class="d-block w-100" alt="5">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/313350921_636306261570401_966140387609652385_n.jpg" class="d-block w-100" alt="6">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/312925536_185633680628484_8005236466211372893_n.jpg" class="d-block w-100" alt="7">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/312803368_1382222138973021_5110466583275693942_n.jpg" class="d-block w-100" alt="8">
                      </div>
                      <div class="carousel-item">
                        <img src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/313495431_205918401856257_8189684728354892133_n.jpg" class="d-block w-100" alt="9">
                      </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kajian14Controls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kajian14Controls" data-bs-slide="next">
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

        <hr style="color: #FFF3E9;border-top:4px solid;opacity: 0.75;margin-block: 4rem;">

        <section id="artikel">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
                <h2 class="text-title fw-bolder">ARTIKEL</h2>

                <div class="listartikel my-5">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-7.jpg" alt="Artikel 1" data-bs-toggle="modal" data-bs-target="#artikel1modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/sudut-mikat-kuadran-3-1.jpg" alt="Artikel 2" data-bs-toggle="modal" data-bs-target="#artikel2modal">
                  <img style="border-radius: 2rem !important;cursor: pointer;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/1-6.jpg" alt="Artikel 3" data-bs-toggle="modal" data-bs-target="#artikel3modal">
                  <a href="https://bit.ly/EZINEHopeVol3Part1" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZINEHopeVol3Part1.jpg" alt="Artikel 4">
                  </a>
                  <a href="https://bit.ly/EZineHopeVol2Part6" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZineHopeVol2Part6.jpg" alt="Artikel 5">
                  </a>
                  <a href="https://bit.ly/EZineHopeVol2P4" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZineHopeVol2P4.jpg" alt="Artikel 6">
                  </a>
                  <a href="https://bit.ly/EZINEHOPEVOL2PART3" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZINEHOPEVOL2PART3-.jpg" alt="Artikel 7">
                  </a>
                  <a href="https://bit.ly/EZineHopeVol2Pt2" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_EZineHopeVol2Pt2.jpg" alt="Artikel 8">
                  </a>
                  <a href="https://bit.ly/eZineHopeVol1" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/08/bit.ly_eZineHopeVol1.jpg" alt="Artikel 9">
                  </a>
                  <a href="https://bit.ly/WartaBEM2022" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/306359671_349272734006335_6036704375830187932_n.jpg" alt="Artikel 10">
                  </a>
                  <a href="https://bit.ly/EZINEHOPEVOL3PART2" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/294959553_3221705941490655_9158263953790617364_n.jpg" alt="Artikel 11">
                  </a>
                  <a href="https://bit.ly/EZINEHOPEVOL2" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/278291946_1037153203826210_3073423771612661933_n.jpg" alt="Artikel 12">
                  </a>
                  <a href="https://bit.ly/EZineHopeVolume1Pt2" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/277604006_713188656706760_48709518294152520_n.jpg" alt="Artikel 13">
                  </a>
                  <a href="https://bit.ly/EZineHopeVol4Part3" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/313129989_436183025297619_6943371940273162937_n.jpg" alt="Artikel 14">
                  </a>
                  <a href="https://bit.ly/EZINEHOPEVOL4P2" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/311623673_520659192728509_4370815706071881710_n.jpg" alt="Artikel 15">
                  </a>
                  <a href="https://bit.ly/EZINEHOPEVOL4PT1" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/309619905_464653858961274_5406692428794086701_n.jpg" alt="Artikel 16">
                  </a>
                  <a href="https://bit.ly/EZINEHOPEVOL3PART6" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/307541947_465095555675916_8389934032741953317_n.jpg" alt="Artikel 17">
                  </a>
                  <a href="https://bit.ly/EZINEHopeVol3Part5" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/302435635_1408386643009021_4688661516074888204_n.jpg" alt="Artikel 18">
                  </a>
                  <a href="https://bit.ly/EZineHopeVol3Part4" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/299747073_390045356582428_4740710728769817645_n.jpg" alt="Artikel 19">
                  </a>
                  <a href="https://bit.ly/EZineHopeVolume3Part3_" target="_blank">
                    <img style="border-radius: 2rem !important;" src="https://bem.fh.undip.ac.id/wp-content/uploads/2022/11/297081291_344669604544188_9123141115546160066_n.jpg" alt="Artikel 20">
                  </a>
                </div>

                <a href="https://bem.fh.undip.ac.id/?page_id=15" target="_blank" class="btn btn-success float-end"><span style="font-size: 13px;" class="px-3">Tampilkan Lebih Banyak</span></a>
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
        </section>

        <hr style="color: #FFF3E9;border-top:4px solid;opacity: 0.75;margin-block: 4rem;">

        <section id="kalender">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
                <h2 class="text-title fw-bolder">KALENDER JUSTICIA</h2>

                <div class="row mt-5 mb-5">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="content w-100">
                      <div class="card rounded-5 border-0 shadow p-2" style="background: #F1F1F1;">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-7 col-md-12 col-sm-12" style="border-right: 4px solid white;">
                              <div class="calendar">
                                <div class="year-header">
                                  <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                  <span class="year" id="label"></span>
                                  <span class="right-button fa fa-chevron-right" id="next"> </span>
                                </div>
                                <table class="months-table w-100" style="border-spacing: 10px;">
                                  <tbody>
                                    <tr class="months-row">
                                      <td class="month">Jan</td>
                                      <td class="month">Feb</td>
                                      <td class="month">Mar</td>
                                      <td class="month">Apr</td>
                                      <td class="month">May</td>
                                      <td class="month">Jun</td>
                                      <td class="month">Jul</td>
                                      <td class="month">Aug</td>
                                      <td class="month">Sep</td>
                                      <td class="month">Oct</td>
                                      <td class="month">Nov</td>
                                      <td class="month">Dec</td>
                                    </tr>
                                  </tbody>
                                </table>

                                <table class="days-table w-100">
                                  <td class="day">Minggu</td>
                                  <td class="day">Senin</td>
                                  <td class="day">Selasa</td>
                                  <td class="day">Rabu</td>
                                  <td class="day">Kamis</td>
                                  <td class="day">Jumat</td>
                                  <td class="day">Sabtu</td>
                                </table>
                                <div class="frame">
                                  <table class="dates-table w-100" style="border-spacing:12px 5px;">
                                    <tbody class="tbody">
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12">
                              <div class="events-container" style="height: 450px;">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <footer class="container entry-footer">

        </footer>

        <?php comments_template(); ?>

      </div><!-- container -->

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();

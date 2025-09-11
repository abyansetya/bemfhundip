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

    @font-face {
        font-family: 'Sailor-condensed';
        src: url('<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/webfonts/sailors-condensed.woff') format('woff');
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

    .sailor-condensed {
        font-family: 'Sailor-condensed';
        letter-spacing: 2px;
    }

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

    .content>*+* {
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

        .content>*:not(.title) {
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

        .card:hover .content>*:not(.title),
        .card:focus-within .content>*:not(.title) {
            opacity: 1;
            transform: translateY(0);
            transition-delay: calc(var(--d) / 8);
        }

        .card:focus-within:before,
        .card:focus-within:after,
        .card:focus-within .content,
        .card:focus-within .content>*:not(.title) {
            transition-duration: 0s;
        }
    }

    .text-hover-inverse-secondary:hover {
        transition: color .2s ease, background-color .2s ease;
        color: #3f4254 !important;
    }

    .bg-hover-secondary:hover {
        --bg-color: 228, 230, 239;
        background-color: #e4e6ef !important;
    }

    .text-hover-inverse-secondary {
        transition: color .2s ease, background-color .2s ease;
    }

    .text-stack .base {
        color: #96373f;
    }

    .text-stack .overlay {
        color: #de773e;
        /* geser ke bawah */
        left: -5px;
        /* geser ke kiri */

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
</style>

<div id="content" class="site-content" style="background: #FFF3E9; margin-top: 100px;">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php bs_after_primary(); ?>


        <h2 class=" d-inline-block sailor-condensed" style="color: #ebd4cd;letter-spacing: 5px; font-size: 54px;text-shadow: -2px -2px 0 #610008, 2px -2px 0 #610008, -2px 2px 0 #610008, 2px 2px 0 #610008; background: #D75B5B; padding-inline: 4rem; padding-block: 12px; border-radius:0px 15px 15px 0px; margin-bottom: 32px">KATA SAMBUTAN</h2>
        <section class="container" style="display: flex; align-items: center; margin-bottom: 50px">
            <div>
                <p class="roboto" style="font-weight: bold; font-size: 22px; color: #610008">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem perspiciatis repudiandae quas. Rem esse nobis eos recusandae eius odit porro debitis, eum, molestias laudantium totam et labore provident quaerat repudiandae!</p>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative; width: 40%">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/anggota/ketua.png" style="width: 500px">
                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: #255653; padding: 10px; color: white; border-radius: 20px; border: 4px solid black; position: absolute; bottom: 0; width: max-content;">
                    <p style="font-size: 20px; margin-bottom:0">IMAM MOREZKI</p>
                    <p style="font-size: 20px; margin-bottom:0">KETUA BEM FH UNDIP 2025</p>
                </div>
            </div>
        </section>
        <div style="height:20px; background: linear-gradient(135deg, #96373f, #c14953, #e78d5b); " class="mb-5"></div>

        <!-- ORGANOGRAM -->
        <section class="container" style="display: flex;flex-direction:column; align-items: center; margin-bottom: 50px">
            <div class="text-stack " style="margin-bottom: 15px;">
                <h1 class="norwester base" style="letter-spacing: 5px;">ORGANOGRAM</h1>
                <h1 class="norwester overlay" style="position: absolute; letter-spacing: 5px;">ORGANOGRAM</h1>
            </div>
        </section>



        <!-- Struktur Organisasi -->
        <!-- Struktur Organisasi -->
        <section id="informasiterkini" class=' ' style="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
                        <div class="text-stack " style="margin-bottom: 15px;">
                            <h1 class="norwester base" style="letter-spacing: 5px;">STRUKTUR ORGANISASI</h1>
                            <h1 class="norwester overlay" style="position: absolute; letter-spacing: 5px;">STRUKTUR ORGANISASI</h1>
                        </div>
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
                    </div>
                </div>
            </div>
        </section>
    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();

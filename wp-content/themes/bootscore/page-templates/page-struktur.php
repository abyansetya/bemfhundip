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

    .card-container {
        max-width: 500px;
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 500px;
    }

    .card-box {
        border-radius: 2rem;
        cursor: pointer;
        background: radial-gradient(circle at 0% 0%, #d75b5b, #96373f);
        padding-right: 20px;
        padding-left: 20px;
        height: 300px;
        display: flex;
        justify-content: center;
        /* gambar tetap rata tengah secara horizontal */
        align-items: flex-end;
        /* gambar turun ke bawah */
    }

    .card-box img {
        max-height: 300px;
        border-radius: 2rem;
    }

    .card-container p {
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
        color: #f2f2f2;
        /* outline utama */
        text-shadow: -1px -1px 0 #610008,
            1px -1px 0 #610008,
            -1px 1px 0 #610008,
            1px 1px 0 #610008;
        /* fallback cross-browser */
        margin: 2px;
        /* hilangkan gap antar paragraf */
        font-size: 14px;
    }

    /* NEW STYLES FOR BEM FH UNDIP CARDS */
    .bem-cards-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
    }

    .bem-card {
        width: 250px;
        height: 250px;
        border-radius: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        cursor: pointer;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .bem-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .bem-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
        pointer-events: none;
    }

    /* Gradient backgrounds untuk setiap card */
    .bem-card-1 {
        background: linear-gradient(90deg, #cdaa50, #d59a64);
    }

    .bem-card-2 {
        background: radial-gradient(circle at 0% 0%, #d75b5b, #96373f);
    }

    .bem-card-3 {
        background: linear-gradient(90deg, #cdaa50, #d59a64);
    }

    .bem-card-4 {
        background: radial-gradient(circle at 0% 0%, #d75b5b, #96373f);
    }

    .bem-card-5 {
        background: radial-gradient(circle at 0% 0%, #d75b5b, #96373f);
    }

    .bem-card-6 {
        background: linear-gradient(90deg, #cdaa50, #d59a64);
    }

    .bem-card-7 {
        background: radial-gradient(circle at 0% 0%, #d75b5b, #96373f);
    }

    .bem-card-8 {
        background: linear-gradient(90deg, #cdaa50, #d59a64);
    }

    .bem-card-9 {
        background: linear-gradient(90deg, #cdaa50, #d59a64);
    }

    .bem-card-10 {
        background: radial-gradient(circle at 0% 0%, #d75b5b, #96373f);
    }

    .bem-card-11 {
        background: linear-gradient(90deg, #cdaa50, #d59a64);
    }

    .bem-card-12 {
        background: radial-gradient(circle at 0% 0%, #d75b5b, #96373f);
    }

    .bem-card-content {
        text-align: center;
        color: white;
        z-index: 2;
        position: relative;
        padding: 20px;
    }

    .bem-card-icon {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        font-size: 2rem;
        backdrop-filter: blur(10px);
    }

    .bem-card-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 5px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        font-family: 'Roboto', sans-serif;
    }

    .bem-card-subtitle {
        font-size: 0.9rem;
        opacity: 0.9;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        font-family: 'Roboto', sans-serif;
    }

    /* Responsive design untuk BEM cards */
    @media (max-width: 768px) {
        .bem-cards-grid {
            gap: 15px;
        }

        .bem-card {
            width: 200px;
            height: 200px;
        }

        .bem-card-icon {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .bem-card-title {
            font-size: 1rem;
        }

        .bem-card-subtitle {
            font-size: 0.8rem;
        }
    }

    @media (max-width: 480px) {
        .bem-cards-grid {
            gap: 10px;
        }

        .bem-card {
            width: 150px;
            height: 150px;
        }

        .bem-card-icon {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .bem-card-title {
            font-size: 0.9rem;
        }

        .bem-card-subtitle {
            font-size: 0.7rem;
        }
    }

    /* Animasi masuk untuk BEM cards */
    .bem-card {
        animation: fadeInUp 0.6s ease forwards;
        opacity: 0;
        transform: translateY(30px);
    }

    .bem-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .bem-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .bem-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    .bem-card:nth-child(4) {
        animation-delay: 0.4s;
    }

    .bem-card:nth-child(5) {
        animation-delay: 0.5s;
    }

    .bem-card:nth-child(6) {
        animation-delay: 0.6s;
    }

    .bem-card:nth-child(7) {
        animation-delay: 0.7s;
    }

    .bem-card:nth-child(8) {
        animation-delay: 0.8s;
    }

    .bem-card:nth-child(9) {
        animation-delay: 0.6s;
    }

    .bem-card:nth-child(10) {
        animation-delay: 0.7s;
    }

    .bem-card:nth-child(11) {
        animation-delay: 0.8s;
    }

    .bem-card:nth-child(12) {
        animation-delay: 0.8s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
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
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/ketua.png" style="width: 500px">
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
        <section id="informasiterkini" class=' '>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
                        <div class="text-stack " style="margin-bottom: 15px;">
                            <h1 class="norwester base" style="letter-spacing: 5px;">STRUKTUR ORGANISASI</h1>
                            <h1 class="norwester overlay" style="position: absolute; letter-spacing: 5px;">STRUKTUR ORGANISASI</h1>
                        </div>
                        <div class="listinformasi ms-5 my-5">
                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/ketua.png" alt="INFO 4">
                                </div>
                                <p class="roboto">Imam Morezki</p>
                                <p class="roboto">Ketua BEM</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Raffi_Ilya_WAKIL KETUA BEM.png" alt="INFO 4">
                                </div>
                                <p>Raffi Ilya</p>
                                <p>Wakil Ketua BEM</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Adriana Erwindyo_SEKRETARIS UMUM I.png" alt="INFO 4">
                                </div>
                                <p>Adriana Erwindyo</p>
                                <p>Sekretaris Umum I</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box" style="padding-top:25px;">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Karina Amala_SEKRETARIS UMUM II.png" alt="INFO 4">
                                </div>
                                <p>Karina Amala</p>
                                <p>Sekretaris Umum II</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Jihan Amalia_SEKRETARIS UMUM III.png" alt="INFO 4">
                                </div>
                                <p>Jihan Amalia</p>
                                <p>Sekretaris Umum III</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Nabila Nastiti_BENDAHARA UMUM I.png" alt="INFO 4">
                                </div>
                                <p>Nabila Nastiti</p>
                                <p>Bendahara Umum I</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Callysta Tsania_BENDAHARA UMUM II.png" alt="INFO 4">
                                </div>
                                <p>Callysta Tsania</p>
                                <p>Bendahara Umum II</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Viska Maghfira_BENDAHARA UMUM III.png" alt="INFO 4">
                                </div>
                                <p>Viska Maghfira</p>
                                <p>Bendahara Umum III</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Meyrindey Simbolon_KOMISI AHLI PENGEMBANGAN POTENSI.png" alt="INFO 4">
                                </div>
                                <p>Meyrindey Simbolon</p>
                                <p>Komisi Ahli Pengembangan Potensi</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Fiqhi Firmansyah_KOMISI AHLI PERGERAKAN.png" alt="INFO 4">
                                </div>
                                <p>Fiqhi Firmansyah</p>
                                <p>Komisi Ahli Pergerakan</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Kepin Munte_KOMISI AHLI KADERISASI.png" alt="INFO 4">
                                </div>
                                <p>Kepin Munte</p>
                                <p>Komisi Ahli Kaderisasi</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Nur Giafika_KOMISI AHLI KEMITRAAN.png" alt="INFO 4">
                                </div>
                                <p>Nur Giafika</p>
                                <p>Komisi Ahli Kemitraan</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Rizky Nathan_KOMISI AHLI PENGABDIAN.png" alt="INFO 4">
                                </div>
                                <p>Rizky Nathan</p>
                                <p>Komisi Ahli Pengabdian</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Allika Karamina_KETUA DIVISI SDM INSPEKTORAT PENJAMIN MUTU.png" alt="INFO 4">
                                </div>
                                <p>Allika Karamina</p>
                                <p>Ketua Divisi SDM Inspektorat Penjamin Mutu</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Gilang_Putra_KETUA DIVISI APARATUR INSPEKTUR PENJAMIN MUTU.png" alt="INFO 4">
                                </div>
                                <p>Gilang Putra</p>
                                <p>Ketua Divisi Aparatur Inspektur Penjamin Mutu</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Iqbal Muzakkiy_KEPALA KANTOR.png" alt="INFO 4">
                                </div>
                                <p>Iqbal Muzakkiy</p>
                                <p>Kepala Kantor</p>
                            </div>

                            <div class="card-container">
                                <div class="card-box">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/pengurus/Pradyaksa PJ_INSPEKTUR PENJAMIN MUTU_.png" alt="INFO 4">
                                </div>
                                <p>Pradyaksa PJ</p>
                                <p>Inspektur Penjamin Mutu</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Tubuh BEM FH -->
        <section class="container" style="display: flex;flex-direction:column; align-items: center; margin-bottom: 50px">
            <div class="text-stack " style="margin-bottom: 50px;">
                <h1 class="norwester base" style="letter-spacing: 5px;">TUBUH DARI BEM FH UNDIP</h1>
                <h1 class="norwester overlay" style="position: absolute; letter-spacing: 5px;">TUBUH DARI BEM FH UNDIP</h1>
            </div>

            <div class="bem-cards-grid">
                <div class="bem-card bem-card-1">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/MINAT DAN BAKAT.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="bem-card bem-card-2">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/EKONOMI KREATIF.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="bem-card bem-card-3">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/PENGEMBANGAN SUMBER DAYA MAHASISWA.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="bem-card bem-card-4">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/RISET DAN KEILMUAN.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="bem-card bem-card-5">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/HUKUM, SOSIAL, DAN POLITIK.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="bem-card bem-card-6">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/PEMBERDAYAAN PEREMPUAN.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="bem-card bem-card-7">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/HUBUNGAN ANTAR LEMBAGA MASYARAKAT.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="bem-card bem-card-8">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/KARIER DAN PROFESI.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="bem-card bem-card-9">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/ADVOKESMA.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="bem-card bem-card-10">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/PENGABDIAN MASYARAKAT.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="bem-card bem-card-11">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/KANTOR MEDIA DAN INFORMASI.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="bem-card bem-card-12">
                    <div class="bem-card-content">
                        <div class="bem-card-icon">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/bidang/INSPEKTORAT PENJAMIN MUTU.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();

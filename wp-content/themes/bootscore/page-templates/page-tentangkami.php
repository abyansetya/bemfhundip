<?php

/**
 * Template Name: Tentang Kami
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

    .sailor-condensed {
        font-family: 'Sailor-condensed';
        letter-spacing: 2px;
    }

    .text-stack {
        position: relative;
        display: inline-block;
        /* bikin dia tetap satu blok penuh */
    }

    .text-stack h1 {
        font-size: 54px;
        margin: 0;
        /* menumpuk satu sama lain */
        top: 0;
        left: 0;
    }

    .text-stack .base {
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
</style>

<div id="content" class="site-content" style="background: #FFF3E9;">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php bs_after_primary(); ?>

        <main id="main" class="site-main">

            <header class="entry-header  text-light mb-5" style="background-image: url('https://bem.fh.undip.ac.id/wp-content/uploads/2025/08/1.png'); ">
                <div class="container entry-header d-flex flex-column align-items-center" style="height: 500px; justify-content: end;">
                    <div class="text-stack" style="margin-bottom: 15px;">
                        <h1 class="norwester base" style="letter-spacing: 5px;">ABOUT US BEM FAKULTAS HUKUM UNDIP 2025</h1>
                        <h1 class="norwester overlay" style="position: absolute; letter-spacing: 5px;">ABOUT US BEM FAKULTAS HUKUM UNDIP 2025</h1>
                    </div>
                </div>
            </header>

            <section id="filosofilogo">
                <h2 class="text-white d-inline-block sailor-condensed" style="letter-spacing: 5px; font-size: 54px;text-shadow: -2px -2px 0 #610008, 2px -2px 0 #610008, -2px 2px 0 #610008, 2px 2px 0 #610008; background: #D75B5B; padding-inline: 4rem; padding-block: 12px; border-radius:0px 15px 15px 0px; margin-bottom: 32px">FILOSOFI LOGO</h2>

                <div class="container mt-5">
                    <div class="row" style="margin-bottom: 80px">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <img class="img-fluid px-5 " src="https://bem.fh.undip.ac.id/wp-content/uploads/2025/08/LOGO-JUANG-ASA-PADI-DAN-KAPAS.png" alt="Logo-1">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h3 style="text-align: justify;line-height: 1.5; color:#b04359; font-size: 34px;" class="norwester">
                                Padi dan Kapas</h3>
                            </h4>
                            <p style="font-size:22px;text-align: justify">
                                Padi dan Kapas diambil dari Sila ke-5 Pancasila sebagai wujud keadilan, kesejahteraan, dan kemakmuran. Padi diposisikan dengan sedikit menunduk, sebagai pencerminan bahwa BEM FH Undip bergerak dan berkepahaman berdasar keilmuan. Padi yang sedikit menunduk pula menggambarkan semakin berisi ilmu pengetahuan semakin merunduk dan rendah hati. Kemudian kapas sebagai wujud cita kesejahteraan yang dimaksudkan ialah kesejahteraan sangan pandang dan papan ini senada pula dengan wujud dari cita BEM FH Undip yang dharapkan dalam upaya untuk memberikan dampak pada lingkungan sekitarnya melalui pengkaderan untuk menyamakan pemahaman dan rasa perjuangan sebagai upaya mencapai cita-citanya yang didedikasikan untuk FH Undip, Undip, dan Indonesia.
                            </p>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 80px">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <img class="img-fluid px-5" src="https://bem.fh.undip.ac.id/wp-content/uploads/2025/08/LOGO-JUANG-ASA-KELOPAK-DAN-PADI.png" alt="Logo-1">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h3 style="text-align: justify;line-height: 1.5; color:#cdaa50; font-size: 34px;" class="norwester">
                                KELOPAK PADI</h3>
                            </h4>
                            <p style="font-size:22px;text-align: justify">
                                Makna hakiki dari sebuah Kelopak Padi melambangkan kerendahan hati sebagaimana ketika petani menanamkan padi yang harus membungkuk dan merunduk, serta kerelaan untuk membantu sesama tanpa pamrih sebagaimana padi memberikan manfaat pada lingkungan. Keberadaan dua kelopak di pinggiran juga menggambarkan budaya yang ingin dihidupkan di dalam tubuh BEM FH Undip yaitu Dialektika dan Responsif. Maka dari itu, kelopak diposisikan pada bagian samping untuk sebagai simbol mewadahi dan melindungi cita-cita yang diimpikan sebagai segala bentuk tindak-tanduk dari BEM FH Undip demi mencapai nilai-nilai yang diinginkan. </p>
                        </div>

                    </div>

                </div>

                <div style="display: flex; justify-content: end">
                    <h2 class="text-white d-inline-block sailor-condensed" style="letter-spacing: 5px; font-size: 54px;text-shadow: -2px -2px 0 #610008, 2px -2px 0 #610008, -2px 2px 0 #610008, 2px 2px 0 #610008; background: #D75B5B; padding-inline: 4rem; padding-block: 12px; border-radius:15px 0px 0px 15px; margin-bottom: 32px; ">FILOSOFI WARNA</h2>
                </div>

                <div class="container mt-5" style="display: flex; flex-direction: column; align-items: center">
                    <div class="row" style="margin-bottom: 70px">
                        <div class="col-lg-4 col-md-4 col-sm-4" style="display: flex; justify-content: center">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/bulat-merah.png"
                                alt="logo"
                                style="max-width: 250px; width: 100%; height: auto; object-fit: contain;">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h3 style="text-align: justify;line-height: 1.5; font-weight: bold; color: #610008" class="roboto">
                                <span style="color: #c14953; text-shadow: -2px -2px 0 #610008, 2px -2px 0 #610008, -2px 2px 0 #610008, 2px 2px 0 #610008;">
                                    Merah
                                </span> kami definisikan sebagai keberanian dan cinta. Dalam konteksnya, keberanian kami artikan sebagai BEM FH Undip berani dalam mengambil sikap, mengawal dan membantu, serta berani menghadapi tantangan dengan memiliki kekuatan untuk terus bertahan dalam memberi keberdampakan kepada FH Undip, Undip, dan Indonesia.

                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 80px">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h3 style="text-align: justify;line-height: 1.5; font-weight: bold;" class="roboto">
                                <span style="color:#cdaa50; text-shadow: -2px -2px 0 #610008, 2px -2px 0 #610008, -2px 2px 0 #610008, 2px 2px 0 #610008;">Emas </span> kami definisikan sebagai kebahagiaan dan romantisme. Dalam konteksnya, kebahagiaan kami artikan bahwa BEM FH Undip memberikan kebermanfaatan untuk menciptakan kebahagiaan seluas-luasnya melalui program yang dilaksanakan pada segenap mahasiswa, masyarakat, dan lingkungan.
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4" style="display: flex; justify-content: end">
                            <img src=" <?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/bulat-emas.png"
                                alt="logo"
                                style="max-width: 250px; width: 100%; height: auto; object-fit: contain;">
                        </div>
                    </div>
                </div>

                <h2 class="text-white d-inline-block sailor-condensed " style="letter-spacing: 5px; font-size: 54px;text-shadow: -2px -2px 0 #610008, 2px -2px 0 #610008, -2px 2px 0 #610008, 2px 2px 0 #610008; background: #D75B5B; padding-inline: 4rem; padding-block: 12px; border-radius:0px 15px 15px 0px; margin-bottom: 32px">VISI</h2>
                <div class="container mb-5">
                    <div>
                        <h1 class="roboto" style="font-weight: bold; font-size: 28px; text-align: center; color: #610008">“BEM FH Undip 2025 sebagai wadah pengkaderan yang berjuang bersama demi membawa pembaharuan untuk memberikan kebaikan pada FH Undip, Undip dan Masyarakat”
                        </h1>
                    </div>
                </div>

                <h2 class="text-white d-inline-block sailor-condensed" style="letter-spacing: 5px; font-size: 54px;text-shadow: -2px -2px 0 #610008, 2px -2px 0 #610008, -2px 2px 0 #610008, 2px 2px 0 #610008; background: #D75B5B; padding-inline: 4rem; padding-block: 12px; border-radius:0px 15px 15px 0px; margin-bottom: 32px">MISI</h2>
                <div class="container mb-5">
                    <div class="roboto" style="font-weight: bold">
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
            </section>



        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();

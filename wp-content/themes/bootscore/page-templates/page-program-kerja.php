<?php

/**
 * Template Name: Program Kerja
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

    .program-container {
        background: linear-gradient(135deg, #dc713e, #e58741, #dc713e);
        min-height: 100vh;
        padding: 120px 0 60px 0;
    }

    .program-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .program-card {
        background: #f5f5f5;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        text-align: center;
        min-height: 280px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
    }

    .program-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px 0;
    }

    .program-image {
        width: 120px;
        height: 80px;
        background: #fff;
        border-radius: 10px;
        margin: 0 auto 15px auto;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        color: #666;
        border: 2px solid #ddd;
    }

    .program-description {
        font-family: 'Arial', sans-serif;
        font-size: 14px;
        font-weight: bold;
        color: #333;
        text-transform: uppercase;
        line-height: 1.4;
        text-align: center;
    }

    .program-button {
        background: #5A7D7C;
        color: white;
        font-family: 'Norwester', Arial, sans-serif;
        font-size: 14px;
        font-weight: bold;
        padding: 12px 20px;
        border: none;
        border-radius: 25px;
        text-decoration: none;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 15px;
    }

    .program-button:hover {
        background: #4A6B6A;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .program-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .program-container {
            padding: 100px 0 40px 0;
        }
    }
</style>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <?php bs_after_primary(); ?>
        <div> 
            <div style="background: linear-gradient(135deg, #dc713e, #e58741, #dc713e); padding: 60px 0 40px 0; position: relative; overflow: hidden;">
                <!-- Background images -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.3; background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/program-kerja/program-kerja.png');">
                </div>
                
                <div class="container" style="position: relative; z-index: 2;">
                    <div class="text-center">
                        <h1 style="font-family: 'Norwester', Arial, sans-serif; font-size: 3.5rem; font-weight: bold; color: white; text-transform: uppercase; letter-spacing: 3px; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); margin: 0; line-height: 1.2;">
                            PROGRAM KERJA<br>
                            <span style="font-size: 4rem;">BEM FH UNDIP 2025</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <main id="main" class="site-main">
            <div class="program-container">
                <div class="container">
                    <div class="program-grid">
                        <!-- Card 1 -->
                        <div class="program-card">
                            <div class="program-content">
                                <div class="program-image">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logobidang/kmi.png" alt="KMI" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                </div>
                                <div class="program-description">
                                    Ketika di klik mengarah ke<br>
                                    Instagram akun masing-<br>
                                    masing bidang
                                </div>
                            </div>
                            <a href="#" class="program-button">Kantor Media dan Informasi</a>
                        </div>

                        <!-- Card 2 -->
                        <div class="program-card">
                            <div class="program-content">
                                <div class="program-image">Image 2</div>
                                <div class="program-description">
                                    Program pengembangan<br>
                                    potensi mahasiswa
                                </div>
                            </div>
                            <a href="#" class="program-button">Pengembangan Potensi Sumber Daya Mahasiswa</a>
                        </div>

                        <!-- Card 3 -->
                        <div class="program-card">
                            <div class="program-content">
                                <div class="program-image">Image 3</div>
                                <div class="program-description">
                                    Program minat dan bakat<br>
                                    mahasiswa
                                </div>
                            </div>
                            <a href="#" class="program-button">Minat dan Bakat</a>
                        </div>

                        <!-- Card 4 -->
                        <div class="program-card">
                            <div class="program-content">
                                <div class="program-image">Logo Proker Unggulan</div>
                                <div class="program-description">
                                    Program ekonomi kreatif<br>
                                    mahasiswa
                                </div>
                            </div>
                            <a href="#" class="program-button">Ekonomi Kreatif</a>
                        </div>

                        <!-- Card 5 -->
                        <div class="program-card">
                            <div class="program-content">
                                <div class="program-image">Image 5</div>
                                <div class="program-description">
                                    Program pemberdayaan<br>
                                    perempuan
                                </div>
                            </div>
                            <a href="#" class="program-button">Pemberdayaan Perempuan</a>
                        </div>

                        <!-- Card 6 -->
                        <div class="program-card">
                            <div class="program-content">
                                <div class="program-image">Image 6</div>
                                <div class="program-description">
                                    Program hukum, sosial<br>
                                    dan politik
                                </div>
                            </div>
                            <a href="#" class="program-button">Hukum, Sosial, dan Politik</a>
                        </div>

                        <!-- Card 7 -->
                        <div class="program-card">
                            <div class="program-content">
                                <div class="program-image">Image 7</div>
                                <div class="program-description">
                                    Program hubungan antar<br>
                                    lembaga masyarakat
                                </div>
                            </div>
                            <a href="#" class="program-button">Hubungan Antar Lembaga Masyarakat</a>
                        </div>

                        <!-- Card 8 -->
                        <div class="program-card">
                            <div class="program-content">
                                <div class="program-image">Image 8</div>
                                <div class="program-description">
                                    Program karier dan<br>
                                    profesi mahasiswa
                                </div>
                            </div>
                            <a href="#" class="program-button">Karier dan Profesi</a>
                        </div>

                        <!-- Card 9 -->
                        <div class="program-card">
                            <div class="program-content">
                                <div class="program-image">Image 9</div>
                                <div class="program-description">
                                    Program ekonomi kreatif<br>
                                    lanjutan
                                </div>
                            </div>
                            <a href="#" class="program-button">Ekonomi Kreatif</a>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
?>
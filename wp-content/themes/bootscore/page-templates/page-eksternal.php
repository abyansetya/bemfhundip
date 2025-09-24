<?php

/**
 * Template Name: Ekternal
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
        font-family: 'copperplate gothic 29 ab';
        src: url('<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/webfonts/Copperplate-Gothic-std-29-AB.woff2') format('woff2');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Roboto';
        src: url('<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/webfonts/Roboto.woff2') format('woff2'),
            url('<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/webfonts/Roboto.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    .eksternal-title {
        background: linear-gradient(135deg, #EBD4CD, #EBD4CD);
        color: #c14953;
        font-family: 'Norwester', Arial, sans-serif;
        font-size: 84px;
        font-weight: bold;
        text-align: center;
        padding: 60px 0;
        margin: 0;
        letter-spacing: 8px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        -webkit-text-stroke: 0.2px #610008;
        text-stroke: 0.2px #610008;
    }

    .eksternal-container {
        background: #EBD4CD;
        padding: 80px 0;
        min-height: 100vh;
    }

    .menu-buttons {
        display: flex;
        flex-direction: column;
        gap: 30px;
        max-width: 400px;
        margin: 0 auto 60px auto;
    }

    .menu-btn {
        background: #5A7D7C;
        color: white;
        font-family: 'copperplate gothic 29 ab', sans-serif;
        font-size: 20px;
        font-weight: bold;
        padding: 18px 40px;
        border: none;
        border-radius: 12px;
        text-decoration: none;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .menu-btn:hover {
        background: #4A6B6A;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        text-decoration: none;
    }

    .contact-section {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto;
    }

    .contact-title {
        background: #5A7D7C;
        color: white;
        font-family: 'copperplate gothic 29 ab', sans-serif;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        padding: 15px;
        margin: -40px -40px 30px -40px;
        border-radius: 20px 20px 0 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        color: #8B0000;
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #D4A574;
        border-radius: 8px;
        font-size: 16px;
        background: #F5F5F5;
    }

    .form-control:focus {
        outline: none;
        border-color: #5A7D7C;
        background: white;
    }

    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }
</style>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <?php bs_after_primary(); ?>

        <main id="main" class="site-main">
            <div class="eksternal-title" style="padding-top: 80px;">EKSTERNAL</div>

            <div class="eksternal-container">
            <div class="container">
                <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="menu-buttons">
                    <a href="#" class="menu-btn">LOST AND FOUND</a>
                    <a href="#" class="menu-btn">BERSUARA-SUARA</a>
                    <a href="#" class="menu-btn">MEDIA PARTNER</a>
                    <a href="#" class="menu-btn">SOP KUNJUNGAN</a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="contact-section">
                    <div class="contact-title">DON'T BE HESTITED TO CONTACT US</div>

                    <form>
                        <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                        <td><label class="form-label">Email</label></td>
                        <td><input type="email" class="form-control" placeholder=""></td>
                        
                        </div>

                        <div class="form-group">
                        <label class="form-label">Subject</label>
                        <input type="text" class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" placeholder=""></textarea>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();

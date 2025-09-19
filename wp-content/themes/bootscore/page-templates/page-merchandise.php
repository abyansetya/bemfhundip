<?php

/**
 * Template Name: Merchandise
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
        font-family: 'Copperplate Gothic 29 AB';
        src: url('<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/webfonts/Copperplate-Gothic-Std-29-AB.woff2') format('woff2');
        font-weight: normal;
        font-style: normal;
    }

    .norwester {
        font-family: 'Norwester', sans-serif;
        letter-spacing: 2px;
    }

    .roboto {
        font-family: 'Roboto', sans-serif;
        letter-spacing: 2px;
    }

    .merch-title {
        font-family: 'Norwester', sans-serif;
        color: #fff;
        font-size: 60px;
        letter-spacing: 4px;
        text-align: center;
        margin-top: 40px;
        margin-bottom: 32px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .merch-card {
        background: none;
        border: none;
        text-align: center;
        margin-bottom: 32px;
    }

    .merch-img {
        width: 260px;
        height: 320px;
        object-fit: cover;
        border-radius: 1.2rem;
        margin-bottom: 16px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
    }

    .merch-name {
        font-family: 'Roboto', sans-serif;
        font-size: 24px;
        color: #fff;
        margin-bottom: 4px;
        letter-spacing: 1px;
    }

    .merch-price {
        font-family: 'Roboto', sans-serif;
        font-size: 24px;
        color: #fff;
        margin-bottom: 16px;
        letter-spacing: 1px;
    }

    .merch-btn {
        background: #255653;
        color: #fff;
        font-family: 'Copperplate Gothic 29 AB', sans-serif;
        font-size: 20px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 0.5rem;
        padding: 10px 32px;
        margin-bottom: 8px;
        border: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        transition: background 0.2s;
    }

    .merch-btn:hover {
        background: #1d403f;
        color: #fff;
    }
</style>
padding: 10px 32px;
margin-bottom: 8px;
border: none;
box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
transition: background 0.2s;
}

.merch-btn:hover {
background: #1d403f;
color: #fff;
}
</style>
<div id="content" class="site-content" style="background:linear-gradient(135deg, #dc713e, #e58741, #dc713e); min-height:100vh;">
    <div id="primary" class="content-area">
        <?php bs_after_primary(); ?>
        <main id="main" class="site-main">
            <div class="container" style="margin-top: 120px;">
                <div class="merch-title norwester">MERCHANDISE</div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 merch-card">
                        <img class="merch-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/merchandise/merch.png" alt="merch1">
                        <div class="merch-name roboto">Tas Handphone Sepatu</div>
                        <div class="merch-price">Rp, xxx.xxx</div>
                        <a href="#" class="merch-btn">PESAN DISINI</a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 merch-card">
                        <img class="merch-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/merchandise/merch.png" alt="merch2">
                        <div class="merch-name roboto">Kaos PKKMB</div>
                        <div class="merch-price">Rp, xxx.xxx</div>
                        <a href="#" class="merch-btn">PESAN DISINI</a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 merch-card">
                        <img class="merch-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/merchandise/merch.png" alt="merch3">
                        <div class="merch-name roboto">Gantungan Kunci</div>
                        <div class="merch-price">Rp, xxx.xxx</div>
                        <a href="#" class="merch-btn bold">PESAN DISINI</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php
get_footer();

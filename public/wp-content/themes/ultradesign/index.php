<!--
Template Name: Головна
-->
<?php get_header(); ?>
    <!-- ШАПКА -->
    <div class="header">
        <div class="row">
            <div class="text">
                <h1><?php echo SCF::get('header_title'); ?></h1>
                <p><?php echo SCF::get('header_text'); ?></p>
                <div class="btn">
                    <a href="#request"><?php echo SCF::get('header_btn'); ?></a> 
                </div>
            </div>
            <div class="image">
                <div class="img-container"><img src="<?php echo wp_get_attachment_url(SCF::get('header_img'))?>" alt="image"></div>
                <div class="frame"></div>
            </div>
            <div class="btn-mobile">
                <a href="#request"><?php echo SCF::get('header_btn'); ?></a> 
            </div>
        </div>
    </div>
    <!-- БІЖУЧА СТРОКА -->
    <div class="marquee">
        <div class="marquee-content">
            <span>UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign </span>
            <span>UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign </span>
        </div>
    </div>
    <!-- ПОРТФОЛІО -->
    <a id="portfolio"></a>
    <div class="portfolio swiper">
        <h1><?php echo SCF::get('portfolio_title', 22); ?></h1>
        <div class="card-wrapper">
            <ul class="card-list swiper-wrapper"> 
                <?php $loop = SCF::get('portfolio', 22);
                foreach($loop as $row){?>   
                    <li class="card-item swiper-slide" style="background-image: url(<?php echo wp_get_attachment_url($row['portfolio_img'])?>);">
                        <h2><?php echo $row['portfolio_name']?></h2>
                        <a href="#request"><?php echo $row['portfolio_btn']?></a> 
                    </li> <?php }?>
                </ul> 
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="btn"><a href="#request"><?php echo SCF::get('portfolio_button', 22); ?></a></div>
    </div>
    <!-- ПОВІДОМЛЕННЯ -->
     <div class="message">
        <div class="message-inner" style="background-image: url(<?php echo wp_get_attachment_url(SCF::get('message_background', 24))?>)">
            <p><?php echo SCF::get('message_text', 24); ?></p>
        </div>
        <div class="container">
            <a class="button" href="#request"><?php echo SCF::get('message_btn', 24); ?></a> 
        </div>
    </div>
    <!-- БІЖУЧА СТРОКА -->
    <div class="marquee">
        <div class="marquee-content">
            <span>UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign </span>
            <span>UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign UltraDesign </span>
        </div>
    </div>
    <!-- ПОСЛУГИ -->
     <div class="services">
        <div class="container">
            <h1>Послуги</h1>
            <div class="row">
                <?php $loop = SCF::get('services', 26);
                foreach($loop as $row){?>
                    <div class="service col-6">
                        <h2><?php echo $row['service_title']?></h2>
                        <p><?php echo $row['service_text']?></p>
                        <a class="btn-s" href=""><?php echo $row['service_btn']?></a>                  
                    </div> 
                <?php } ?>
            </div>
        </div>
     </div>
     <!-- ЧОМУ ОБИРАЮТЬ НАС -->
    <div class="wcu">
        <h3><?php echo SCF::get('wcu_title', 28); ?></h3>
        <div class="container">
            <p><?php echo SCF::get('wcu_first', 28); ?></p>
            <p><?php echo SCF::get('wcu_second', 28); ?></p>
            <p><?php echo SCF::get('wcu_third', 28); ?></p>
            <p><?php echo SCF::get('wcu_fourth', 28); ?></p>
        </div>
    </div>
    <!-- ПРО НАС -->
    <div class="about">
        <div class="photo"><img src="<?php echo wp_get_attachment_url(SCF::get('about_img', 30))?>" alt=""></div>
        <div class="text">
            <h2><?php echo SCF::get('about_title', 30); ?></h2>
            <p><?php echo SCF::get('about_text', 30); ?></p>
        </div>
    </div>
    <!-- ДОСЯГНЕННЯ -->
    <div class="achives">
        <div class="container">
            <div class="row">
                <?php $loop = SCF::get('achives', 32);
                foreach($loop as $row){?>
                    <div class="achive col-3">
                        <div class="circle"></div>
                        <div class="text">
                            <span class="a-num"><?php echo $row['achive_num']?></span>
                            <span class="a-name"><?php echo $row['achive_title']?></span>
                            <p><?php echo $row['achive_tsxt']?></p>
                        </div>
                    </div> 
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ЯК ЦЕ ПРАЦЮЄ -->
    <div class="hiw">
        <div class="container">
            <div class="row">
                <div class="text col-6">
                    <h1><?php echo SCF::get('hiws_title', 34); ?></h1>
                    <?php $loop = SCF::get('hiw', 34);
                    foreach($loop as $row){?>
                        <div class="single">
                            <span class="num"><?php echo $row['hiw_num']?></span>
                            <span class="title"><?php echo $row['hiw_title']?></span>
                            <p><?php echo $row['hiw_text']?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="image col-6"><img src="<?php echo wp_get_attachment_url(SCF::get('hiws_img', 34))?>" alt=""></div>
            </div>
        </div>
    </div>
    <!-- ЗАЯВКА -->
     <div class="request" style="background-image: url(<?php echo wp_get_attachment_url(SCF::get('request_background', 36))?>)">
        <div class="container">
            <div class="row">
                <div class="text col-6">
                    <h1><?php echo SCF::get('request_title', 36); ?></h1>
                    <p><?php echo SCF::get('request_text', 36); ?></p>
                </div>
                <div class="form col-6">
                    <h1><?php echo SCF::get('form_text', 36); ?></h1>
                        <?php echo do_shortcode(SCF::get('form_shortcode', 36));?>
                </div>
            </div>
        </div>
     </div>
<?php get_footer(); ?> 

<?php
/*
	Template Name: главная страница
 	Template Post Type: page
*/

get_header();
?>

<div class="banner_section">
        <div class="container">
            <div class="banner_row row">
                <div class="banner-left col-12 col-xl-5 col-lg-12">
                    <h1 class="h1">
                        <?php echo carbon_get_post_meta( get_the_ID(), 'banner-title' ); ?>
                    </h1>

                    <div class="banner_buttons">
                        <div class="basic_buttons buttons">
                            <a href="#">
                                Заказать предложение
                            </a>
                        </div>

                        <div class="additional_buttons buttons">
                            <a href="#">
                                Готовые решения
                                <svg class="additional_buttons_icon buttons_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.97978 2.97982C9.17504 2.78456 9.49162 2.78456 9.68689 2.97982L14.3536 7.64649C14.4473 7.74026 14.5 7.86743 14.5 8.00004C14.5 8.13265 14.4473 8.25983 14.3536 8.35359L9.68689 13.0203C9.49162 13.2155 9.17504 13.2155 8.97978 13.0203C8.78452 12.825 8.78452 12.5084 8.97978 12.3132L12.7929 8.50004L2 8.50004C1.72386 8.50004 1.5 8.27618 1.5 8.00004C1.5 7.7239 1.72386 7.50004 2 7.50004L12.7929 7.50004L8.97978 3.68693C8.78452 3.49167 8.78452 3.17508 8.97978 2.97982Z" fill="#B39166"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="banner-right col-12 col-xl-7 col-lg-12">
                    <div class="banner_portfolio">
                        <div class="banner_portfolio_item">
                            <img class="banner_portfolio_background" src="<?php echo get_template_directory_uri(); ?>/assets/images/cards/banner_portfolio1.png" alt="background">

                            <img class="portfolio_popup" src="<?php echo carbon_get_post_meta( get_the_ID(), 'banner-img-1' ); ?>" alt="portfolio">

                            <span class="portfolio_title">
                                <?php echo carbon_get_post_meta( get_the_ID(), 'banner-img-text-1' ); ?>
                            </span>
                        </div>

                        <div class="banner_portfolio_item">
                            <img class="banner_portfolio_background" src="<?php echo get_template_directory_uri(); ?>/assets/images/cards/banner_portfolio2.png" alt="background">

                            <img class="portfolio_popup" src="<?php echo carbon_get_post_meta( get_the_ID(), 'banner-img-3' ); ?>" alt="portfolio">

                            <span class="portfolio_title">
                                <?php echo carbon_get_post_meta( get_the_ID(), 'banner-img-text-2' ); ?>
                            </span>
                        </div>

                        <div class="banner_portfolio_item">
                            <img class="banner_portfolio_background" src="<?php echo get_template_directory_uri(); ?>/assets/images/cards/banner_portfolio3.png" alt="background">

                            <img class="portfolio_popup" src="<?php echo carbon_get_post_meta( get_the_ID(), 'banner-img-3' ); ?>" alt="portfolio">

                            <span class="portfolio_title">
                                <?php echo carbon_get_post_meta( get_the_ID(), 'banner-img-text-3' ); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about_section">
        <div class="container">
            <div class="about_row">
                <div class="about_info">
                    <h3 class="h3">
                        <?php echo carbon_get_post_meta( get_the_ID(), 'projects-title' ); ?>
                    </h3>

                    <p class="p">
                        <?php echo carbon_get_post_meta( get_the_ID(), 'projects-desc' ); ?>
                    </p>

                    <div class="additional_buttons buttons">
                        <a href="#">
                            Все проекты
                            <svg class="additional_buttons_icon buttons_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.97978 2.97982C9.17504 2.78456 9.49162 2.78456 9.68689 2.97982L14.3536 7.64649C14.4473 7.74026 14.5 7.86743 14.5 8.00004C14.5 8.13265 14.4473 8.25983 14.3536 8.35359L9.68689 13.0203C9.49162 13.2155 9.17504 13.2155 8.97978 13.0203C8.78452 12.825 8.78452 12.5084 8.97978 12.3132L12.7929 8.50004L2 8.50004C1.72386 8.50004 1.5 8.27618 1.5 8.00004C1.5 7.7239 1.72386 7.50004 2 7.50004L12.7929 7.50004L8.97978 3.68693C8.78452 3.49167 8.78452 3.17508 8.97978 2.97982Z" fill="#B39166"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="about_right">
                    <div class="about_slider_top">
                        <div class="about_slider_pagination"></div>

                        <div class="about_slider_buttons">
                            <div class="about_slider_prev about_slider_button">
                                <svg class="about_slider_button_icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.70707 12L15.3535 18.6464L14.6464 19.3535L7.64641 12.3535C7.45115 12.1583 7.45115 11.8417 7.64641 11.6464L14.6464 4.64641L15.3535 5.35352L8.70707 12Z" fill="#D6B384"/>
                                </svg>
                            </div>
                            <div class="about_slider_next about_slider_button">
                                <svg class="about_slider_button_icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2929 12L8.64648 5.35351L9.35359 4.64641L16.3536 11.6464C16.5489 11.8417 16.5489 12.1583 16.3536 12.3535L9.35359 19.3535L8.64648 18.6464L15.2929 12Z" fill="#D6B384"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="about_slider">
                        <div class="swiper about_slider_name">
                            <div class="swiper-wrapper">
                                <?php
                                    $args = array(
                                        'post_type' => 'projects',
                                        'posts_per_page' => 6,
                                    );
                                    $projects_posts = get_posts( $args );
                                ?>

                                <?php
                                    foreach($projects_posts as $key => $post) :
                                        setup_postdata( $post );
                                ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" alt="project">

                                        <div class="internal_slider">
                                            <div class="swiper internal_slider_name">
                                                <div class="swiper-wrapper">
                                                    <?php
                                                    $internalData = carbon_get_post_meta( get_the_ID(), 'projects-item-slider' );

                                                    if (!empty($internalData)) :
                                                        foreach($internalData as $internalDataIndex => $internalDataItem) :
                                                    ?>
                                                    <div class="swiper-slide">
                                                        <a href="<?= the_permalink(); ?>" class="project_link"></a>
                                                        <img src="<?= $internalDataItem['projects-item-slider-image'] ?>" alt="image">

                                                        <div class="overlay"></div>

                                                        <div class="internal_slide_text">
                                                            <div class="icons">
                                                                <?= $internalDataItem['projects-item-slider-icons'] ?>
                                                            </div>

                                                            <span class="card_header">
                                                                <?= $internalDataItem['projects-item-slider-name'] ?>
                                                            </span>

                                                            <p class="p">
                                                                <?= $internalDataItem['projects-item-slider-desc'] ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        endforeach; 
                                                    endif; 
                                                    ?>
                                                </div>
                                                <div class="internal_slider_pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package liya
 */

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIYA - your gift concierge</title>

    <!-- your styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
    <!-- your styles -->

    <!-- fonts -->
    <link href = "<?php echo get_template_directory_uri(); ?>/assets/fonts/inter/stylesheet.css" rel="stylesheet" type="text/css"/>
    <link href = "<?php echo get_template_directory_uri(); ?>/assets/fonts/literaturnaya/stylesheet.css" rel="stylesheet" type="text/css"/>
    <!-- fonts -->

    <!-- libraries and frameworks -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">-->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <!-- libraries and frameworks -->
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header_row">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>" class="logo-item">
                        <?php the_custom_logo(); ?>
                    </a>
                </div>

                <div class="header_right">
                    <div class="header_right_item">
                        <nav class="header_menu">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'menu'			 => 'menu',
                                        'container'      => 'ul',
                                    )
                                );
                            ?>
                        </nav>
                    </div>

                    <div class="header_right_item">
                        <div class="header-contact">
                            <a href="tel:88001235476">
                                8 (800) 123-54-76
                            </a>
                        </div>
                    </div>

                    <div class="header_right_item">
                        <div class="header_cart">
                            <img class="header_cart_trigger" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/header_cart.svg" alt="cart">
                        </div>

                        <div class="header_cart_dropdown">
                            <div class="cart_item">
                                <div class="cart_item_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cards/cart1.png" alt="product">
                                </div>

                                <div class="card_item_info">
                                    <div class="card_item_top">
                                        <div class="icons">
                                            Для неё
                                        </div>

                                        <div class="name">
                                            Название товара
                                        </div>
                                    </div>

                                    <div class="card_item_count">
                                        <div class="quantity">
                                            <button class="minus_button quantity_button" type="button" name="button">
                                                <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.5H8V1.5H0V0.5Z" fill="#D6B384"/>
                                                </svg>
                                            </button>
                                            <input type="text" name="name" value="1">
                                            <button class="plus_button quantity_button" type="button" name="button">
                                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 3.5V0H4.5V3.5H8V4.5H4.5V8H3.5V4.5H0V3.5L3.5 3.5Z" fill="#D6B384"/>
                                                </svg>
                                            </button>
                                        </div>

                                        <span class="total">
                                            9 999 ₽
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="cart_footer">
                                <div class="cart_total">
                                    <div class="name">
                                        Итого:
                                    </div>

                                    <p class="p_up">
                                        9 999 999 999 ₽
                                    </p>
                                </div>

                                <div class="additional_buttons buttons">
                                    <a href="#">
                                        Перейти в корзину
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile_header">
        <div class="container">
            <div class="mobile_header_row">
                <div class="mobile_header_item">
                    <div class="header_cart">
                        <img class="header_cart_trigger mobile_cart_trigger" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/header_cart.svg" alt="cart">
                    </div>

                    <div class="header_cart_dropdown mobile_cart_dropdown">
                        <div class="cart_item">
                            <div class="cart_item_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cards/cart1.png" alt="product">
                            </div>

                            <div class="card_item_info">
                                <div class="card_item_top">
                                    <div class="icons">
                                        Для неё
                                    </div>

                                    <div class="name">
                                        Название товара
                                    </div>
                                </div>

                                <div class="card_item_count">
                                    <div class="quantity">
                                        <button class="minus_button quantity_button" type="button" name="button">
                                            <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.5H8V1.5H0V0.5Z" fill="#D6B384"/>
                                            </svg>
                                        </button>
                                        <input type="text" name="name" value="1">
                                        <button class="plus_button quantity_button" type="button" name="button">
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 3.5V0H4.5V3.5H8V4.5H4.5V8H3.5V4.5H0V3.5L3.5 3.5Z" fill="#D6B384"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <span class="total">
                                            9 999 ₽
                                        </span>
                                </div>
                            </div>
                        </div>

                        <div class="cart_footer">
                            <div class="cart_total">
                                <div class="name">
                                    Итого:
                                </div>

                                <p class="p_up">
                                    9 999 999 999 ₽
                                </p>
                            </div>

                            <div class="additional_buttons buttons">
                                <a href="#">
                                    Перейти в корзину
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mobile_header_item">
                    <div class="logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="mobile_header_item">
                    <div class="burger">
                        <img class="burger_trigger" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/burger.svg" alt="burger">
                    </div>
                </div>

                <div class="burger_dropdown">
                    <nav class="header_menu mobile_menu">
                        <ul>
                            <li class="menu-item">
                                <a href="#">
                                    Магазин

                                    <svg class="menu_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.64648 10.3536L3.64648 6.35359L4.35359 5.64648L8.00004 9.29293L11.6465 5.64648L12.3536 6.35359L8.35359 10.3536C8.15833 10.5489 7.84175 10.5489 7.64648 10.3536Z" fill="#2E1C17"/>
                                    </svg>
                                </a>

                                <ul class="menu_dropdown">
                                    <li>
                                        <a href="#" class="input_regular">
                                            Test
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="input_regular">
                                            Test
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="input_regular">
                                            Test
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item">
                                <a href="#">
                                    Портфолио
                                    <svg class="menu_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.64648 10.3536L3.64648 6.35359L4.35359 5.64648L8.00004 9.29293L11.6465 5.64648L12.3536 6.35359L8.35359 10.3536C8.15833 10.5489 7.84175 10.5489 7.64648 10.3536Z" fill="#2E1C17"/>
                                    </svg>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="#">
                                    О компании
                                    <svg class="menu_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.64648 10.3536L3.64648 6.35359L4.35359 5.64648L8.00004 9.29293L11.6465 5.64648L12.3536 6.35359L8.35359 10.3536C8.15833 10.5489 7.84175 10.5489 7.64648 10.3536Z" fill="#2E1C17"/>
                                    </svg>
                                </a>
                            </li>

                        </ul>
                    </nav>

                    <div class="burger_contact">
                        <div class="burger_contact_item">
                            <a href="tel:88001235476" class="p">
                                8 (800) 123-54-76
                            </a>
                        </div>

                        <div class="burger_contact_item">
                            <a href="mailto:gift@liyaconcierge.com" class="mark_l">
                                gift@liyaconcierge.com
                            </a>
                        </div>

                        <div class="burger_contact_item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/burger_icon.svg" alt="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/burger_icon.svg" alt="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/burger_icon.svg" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

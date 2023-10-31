<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rodeo Style</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jssor.slider.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/js/owlcarousel/assets/owl.theme.default.min.css">
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/owlcarousel/owl.carousel.js"></script>
    <link href="<?php bloginfo('template_directory'); ?>/assets/js/lightbox/css/lightbox.css" rel="stylesheet" />
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/lightbox/js/lightbox.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/rodeos.js"></script>
</head>
<body>
<div id="wrapper-header">
    <div id="header-top">
        <div class="container">
            <div id="logo">
                <a href="/">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/RS_Logotype.png" id="img-logo"/>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-mobile.png" id="img-logo-mobile"/>
                </a>
            </div>
            <div id="menu">
                <div id="menu-top" class="flex-end">
                    <p class="p-lang">
                    <div id="google_translate_element"></div>
                        <!--<a href="/en" class="a-en">English</a> <span>|</span> <a class="a-ja active" href="/ja">日本語</a>-->
                    </p>
                    <p class="p-social">
                        <a href="https://www.youtube.com/channel/UCx2JkRx2PA_pdj2_CYWXB9g" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/YouTube.svg"/></a>
                        <a href="https://www.instagram.com/nostylelikerodeostyle/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/Instagram.svg"/></a>
                        <a href="https://www.facebook.com/nostylelikerodeostyle" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/Facebook.png"/></a>
                    </p>
                </div>
                <div id="menu-bot" class="flex-end">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">ホーム</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/fighting-academy/">ファイティングアカデミー</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/gym/">ジム</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/dance-fitness/">ダンスフィットネス</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/fee/">料金システム</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/schedule/">スケジュール</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/access/">アクセス</a></li>
                                    <li class="nav-item"><a class="nav-link" href="https://rodeostyle.weebly.com/blog" target="_blank">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href=" /free-trial/">無料体験</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/contact/">お問合せ</a></li>
                                    <li class="nav-item nav-item-mobile">
                                        <p class="p-lang">
                                        <div id="google_translate_element_mobile"></div>
                                        <script>
                                          function googleTranslateElementInit() {
                                            var elm = window.screen.width <= 768 ? 'google_translate_element_mobile': 'google_translate_element';
                                            new google.translate.TranslateElement({
                                              pageLanguage: 'en,ja',
                                              includedLanguages: 'en,ja',
                                              layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                            }, elm);
                                          }
                                        </script>
                                        <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                           <!-- <a href="/" class="a-en">English</a> <span>|</span> <a class="a-ja active" href="/">日本語</a>-->
                                        </p>
                                    </li>
                                    <li class="nav-item nav-item-mobile">
                                        <p class="p-social">
                                            <a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/YouTube.svg"/></a>
                                            <a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/Instagram.svg"/></a>
                                            <a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/Facebook.png"/></a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
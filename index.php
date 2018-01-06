<?php $data = require 'data.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $siteTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500" rel="stylesheet">
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="flexslider/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
    <div class="header-container">
        <nav>
            <ul class="menu-items list">
                <?php
                foreach ($data['mainMenu'] as $menuItem) {
                    ?>
                    <li><a href="<?php echo $menuItem['url']; ?>"><?php echo $menuItem['title']; ?></a>
                        <div class="overlay"></div>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <a href="#"><img src="<?php $siteLogo = $data['siteLogo'];
                echo $siteLogo; ?>" alt="Cantus"></a>
            <div class="right-menu">
                <ul class="social-items list">
                    <?php
                    foreach ($data['socialLinks'] as $socialItem) {
                        ?>
                        <li>
                            <a href="#"><i class="<?php echo $socialItem['class']; ?>" aria-hidden="true"></i></a>
                            <span><?php echo $socialItem['count']; ?></span>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <?php $purchaseButton = $data['buttonBuy']; ?>
                <a href="<?php echo $purchaseButton['url']; ?>"
                   class="purchase button"><?php echo $purchaseButton['title']; ?></a>
            </div>
        </nav>
    </div>
</header>
<section class="main-section">
    <div class="flexslider">
        <ul class="slides">
            <li class="first-bg"></li>
            <li class="second-bg"></li>
            <li class="third-bg"></li>
        </ul>
        <div class="main-text">
            <div class="container">
                <h1><?php $mainHeading = $data['mainHeading'];
                    echo $mainHeading['title']; ?>
                    <span><?php echo $mainHeading['partOfTitle']; ?></span></h1>
                <a href="#" class="button main-button"><?php $buttonMain = $data['buttonMain'];
                    echo $buttonMain; ?></a>
            </div>
        </div>
    </div>
</section>
<section class="introducing">
    <div class="container introducing-block">
        <div class="section-name">
            <h2><?php $introducingHeading = $data['introducingHeading'];
                echo $introducingHeading['title']; ?>
                <span><?php echo $introducingHeading['partOfTitle']; ?></span></h2>
        </div>
        <div class="custom-navigation">
            <a href="#" class="flex-prev"><i
                    class="<?php $introducingDirectionLinks = $data['introducingDirectionLinks'];
                    echo $introducingDirectionLinks['classPrev']; ?>" aria-hidden="true"></i></a>
            <div class="custom-controls-container"></div>
            <a href="#" class="flex-next"><i class="<?php echo $introducingDirectionLinks['classNext']; ?>"
                                             aria-hidden="true"></i></a>
        </div>
        <div class="flexslider-introducing">
            <ul class="slides">
                <?php
                foreach ($data['introducingSlider'] as $introducingSliders) {
                    ?>
                    <li>
                        <img src="<?php echo $introducingSliders['img']; ?>"
                             alt="<?php echo $introducingSliders['alt']; ?>">
                        <div class="description">
                            <div class="performer">
                                <h3><?php echo $introducingSliders['name']; ?></h3>
                                <span><?php echo $introducingSliders['occupation']; ?></span>
                            </div>
                            <ul class="social-items description-list">
                                <?php
                                foreach ($introducingSliders['socialLinksMember'] as $memberItem) {
                                    ?>
                                    <li>
                                        <a href="<?php echo $memberItem['url']; ?>"><i
                                                class="<?php echo $memberItem['class']; ?>" aria-hidden="true"></i></a>
                                        <span><?php echo $memberItem['count']; ?></span>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>
<div class="upcoming-latest">
    <div class="container">
        <div class="upcoming-latest-section">
            <section class="upcoming">
                <div class="section-name">
                    <h2><?php $upcomingHeading = $data['upcomingHeading'];
                        echo $upcomingHeading['title']; ?>
                        <span><?php echo $upcomingHeading['partOfTitle']; ?></span></h2>
                </div>
                <div class="flexslider-concert">
                    <ul class="slides">
                        <?php
                        foreach ($data['upcomingSlider'] as $upcomingSliders) {
                            ?>
                            <li>
                                <div class="main-upcoming">
                                    <div class="picture-consert">
                                        <img src="<?php echo $upcomingSliders['img']; ?>" alt="concert">
                                        <div class="date-concert">
                                            <span><?php echo $upcomingSliders['number']; ?></span><?php echo $upcomingSliders['month']; ?>
                                        </div>
                                    </div>
                                    <div class="consert-details">
                                        <h3><?php echo $upcomingSliders['title']; ?></h3>
                                        <ul class="location">
                                            <li><?php echo $upcomingSliders['locationTitle']; ?>
                                                <span>:</span><?php echo $upcomingSliders['location']; ?></li>
                                            <li><?php echo $upcomingSliders['dateTitle']; ?>
                                                <span>:</span><?php echo $upcomingSliders['date']; ?></li>
                                            <li><?php echo $upcomingSliders['timeTitle']; ?>
                                                <span>:</span><?php echo $upcomingSliders['time']; ?></li>
                                            <li><?php echo $upcomingSliders['priceTitle']; ?>
                                                <span>:</span><?php echo $upcomingSliders['price']; ?></li>
                                        </ul>
                                        <a href="<?php echo $purchaseButton['url']; ?>"
                                           class="main-button button upcoming-button"><?php echo $purchaseButton['title']; ?></a>
                                    </div>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </section>
            <section class="latest">
                <div class="section-name">
                    <h2><?php $latestHeading = $data['latestHeading'];
                        echo $latestHeading['title']; ?>
                        <span><?php echo $latestHeading['partOfTitle']; ?></span></h2>
                </div>
                <div class="custom-navigation-videos">
                    <a href="#" class="flex-prev"><i
                            class="<?php $latestDirectionLinks = $data['latestDirectionLinks'];
                            echo $latestDirectionLinks['classPrev']; ?>" aria-hidden="true"></i></a>
                    <div class="custom-controls-container-videos"></div>
                    <a href="#" class="flex-next"><i class="<?php echo $latestDirectionLinks['classNext']; ?>"
                                                     aria-hidden="true"></i></a>
                </div>
                <div class="flexslider-videos">
                    <ul class="slides">
                        <?php
                        foreach ($videoLinks = $data['videoLinks'] as $videoItem) {
                            ?>
                            <li>
                                <?php echo $videoItem['iframe']; ?>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>
<section class="learn-more">
    <div class="container ">
        <div class="learn-block">
            <h2><?php $learnMore = $data['learnMore'];
                echo $learnMore['heading']; ?></h2>
            <p><?php echo $learnMore['description']; ?></p>
            <a class="button learn-more-button"><?php echo $learnMore['buttonLearn']; ?></a>
        </div>
    </div>
    <div class="popup">
        <div class="main-popup">
            <a class="close-popup"><i class="<?php $popup = $data['popup'];
                $closePopup = $popup['closePopup'];
                echo $closePopup['class']; ?>" aria-hidden="true"></i>
            </a>
            <div class="popup-content">
                <span><?php echo $popup['text'] ?></span>
                <form action="#" id="learn-form" name="learn-form" method="post"
                      enctype="application/x-www-form-urlencoded">
                    <input type="text" name="email" id="email" placeholder="<?php $formPopup = $popup['formPopup'];
                    echo $formPopup['inputPlaceholder']; ?>" class="email">
                    <input type="submit" class="submit" value="<?php echo $formPopup['submitValue']; ?>">
                </form>
            </div>
        </div>
    </div>
</section>
<div class="popular-instagram">
    <div class="container">
        <div class="popular-instagram-block">
            <section class="popular">
                <div class="section-name">
                    <h2><?php $popularHeading = $data['popularHeading'];
                        echo $popularHeading['title']; ?>
                        <span><?php echo $popularHeading['partOfTitle']; ?></span></h2>
                </div>
                <?php $songIframe = $data['songIframe'];
                echo $songIframe; ?>
                <ol class="songs">
                    <?php
                    foreach ($songsList = $data['songsList'] as $song) {
                        ?>
                        <li><a href="<?php echo $song['url']; ?>"><?php echo $song['title']; ?></a></li>
                        <?php
                    }
                    ?>
                </ol>
            </section>
            <section class="instagram">
                <div class="section-name">
                    <h2><?php $instagramHeading = $data['instagramHeading'];
                        echo $instagramHeading['title']; ?>
                        <span><?php echo $popularHeading['partOfTitle']; ?></span></h2>
                </div>
                <div class="instagram-pictures">
                    <?php
                    foreach ($instagramPictures = $data['instagramPictures'] as $instagramPicture) {
                        ?>
                        <a href="<?php echo $instagramPicture['url']; ?>"><img
                                src="<?php echo $instagramPicture['img']; ?>"
                                alt="<?php echo $instagramPicture['alt']; ?>"></a>
                        <?php
                    }
                    ?>
                </div>
            </section>
        </div>
    </div>
</div>
<section class="download">
    <div class="container">
        <div class="download-block">
            <h2><?php $download = $data['download'];
                echo $download['title']; ?></h2>
            <p><?php echo $download['text']; ?></p>
            <div class="download-buttons">
                <?php
                foreach ($downloadAppsButtons = $download['downloadAppsButtons'] as $downloadButton) {
                    ?>
                    <a href="<?php echo $downloadButton['url']; ?>" class="<?php echo $downloadButton['class']; ?>"><img
                            src="<?php echo $downloadButton['img']; ?>" alt="<?php echo $downloadButton['alt']; ?>"></a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<div class="newsletter">
    <div class="container">
        <form action="#" id="form" name="form" method="post" enctype="application/x-www-form-urlencoded">
            <textarea rows="1" cols="70" placeholder="<?php $formNewsletter = $data['formNewsletter'];
            echo $formNewsletter['textareaPlaceholder']; ?>"></textarea>
            <button type="submit"><i class="<?php echo $formNewsletter['buttonClass']; ?>" aria-hidden="true"></i>
            </button>
        </form>
    </div>
</div>
<footer>
    <div class="container">
        <ul class="footer-list">
            <?php
            foreach ($data['mainMenu'] as $menuItem) {
                ?>
                <li><a href="<?php echo $menuItem['url']; ?>"><?php echo $menuItem['title']; ?></a></li>
                <?php
            }
            ?>
        </ul>
        <p><?php $copyright = $data['copyright'];
            echo $copyright; ?></p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="flexslider/jquery.flexslider.js"></script>
<script src="js/main.js"></script>
</body>
</html>
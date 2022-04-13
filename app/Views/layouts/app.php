<!DOCTYPE html>
<html lang="fr">

<head>
    <script nonce="d10d5343-23d8-4d0a-86a9-47db6b470f1e">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
                    deferred: []
                }, a.zaraz.track = (e, t) => {
                    for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
                }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                    a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
                }, a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), z.defer = !0, z.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
            }(w, d, 0, "script");
        })(window, document);
    </script>
    <title><?= "Accueil | ". $title ?? "Centre Missionnaire de Lubumbashi" ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My Podcast template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= link_tag('public/assets/css/main.css') ?>
    <?= link_tag('public/assets/css/main_style.css') ?>
</head>

<body>
    <div class="super_container">

        <header class="header trans_400">

            <div class="logo">
                <a href="#"><span>my</span>podcast<?= img('public/assets/images/xplay.png.pagespeed.ic.IEpt9ndsY3.png', '', 'logo cmlu')?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
                            <nav class="main_nav">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="episodes.html">Episodes</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_right d-flex flex-row align-items-start justify-content-start">

                <div class="submit"><a href="#">Submit a Podcast</a></div>

                <div class="social">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            </div>
        </header>

        <div class="menu">
            <div class="menu_content d-flex flex-column align-items-end justify-content-start">
                <ul class="menu_nav_list text-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="episodes.html">Episodes</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <div class="menu_extra d-flex flex-column align-items-end justify-content-start">
                    <div class="menu_submit"><a href="#">Submit your podcast</a></div>
                    <div class="social">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="home">
            <div class="background_image" style="background-image:url(<?= site_url('public/assets/images/xindex.jpg.pagespeed.ic.EMib8i9JDR.jpg') ?>)"></div>

            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="tags">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="#">lifestyle</a></li>
                                        <li><a href="#">interview</a></li>
                                        <li><a href="#">last episode</a></li>
                                    </ul>
                                </div>
                                <div class="home_title">
                                    <h1>Season 4 Episode 48 available.</h1>
                                </div>
                                <div class="home_subtitle">Check out my latest podcast a massive interview with John Doe</div>
                                <div class="track_info">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="#">September 24, 2018</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li>56:40</li>
                                        <li><a href="#">0 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="track track_home">
                                    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/197004056&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;show_teaser=false"></iframe>
                                </div>
                                <div class="button_border home_button trans_200"><a href="#">More Info</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <?= $this->renderSection('content')?>

        <footer class="footer">
            <div class="container">
                <div class="row footer_logo_row">
                    <div class="col d-flex flex-row align-items-center justify-content-center">
                        <div class="logo">
                            <a href="#"><span>my</span>podcast<?= img('public/assets/images/xplay.png.pagespeed.ic.IEpt9ndsY3.png')?></a>
                        </div>
                    </div>
                </div>
                <div class="row footer_content_row">

                    <div class="col-lg-4">
                        <div class="footer_title">Tags</div>
                        <div class="footer_list">
                            <div>
                                <div><a href="#">music</a></div>
                            </div>
                            <div>
                                <div><a href="#">art</a></div>
                            </div>
                            <div>
                                <div><a href="#">technology</a></div>
                            </div>
                            <div>
                                <div><a href="#">travel & food</a></div>
                            </div>
                            <div>
                                <div><a href="#">viral</a></div>
                            </div>
                            <div>
                                <div><a href="#">social media</a></div>
                            </div>
                            <div>
                                <div><a href="#">interview</a></div>
                            </div>
                            <div>
                                <div><a href="#">developement</a></div>
                            </div>
                            <div>
                                <div><a href="#">success</a></div>
                            </div>
                            <div>
                                <div><a href="#">live</a></div>
                            </div>
                            <div>
                                <div><a href="#">did you know?</a></div>
                            </div>
                            <div>
                                <div><a href="#">health</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="footer_title">Latest Episodes</div>
                        <div class="latest_container">

                            <div class="latest">
                                <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                                    <a href="episode.html">
                                        <div class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="latest_play">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
                                                    <g id="Play">
                                                        <path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="latest_title_content">
                                                <div class="latest_title">Season 4 Episode 48 - A Step Further</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest_episode_info">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="#">September 24, 2018</a></li>
                                        <li><a href="#">Music</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="latest">
                                <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                                    <a href="episode.html">
                                        <div class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="latest_play">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
                                                    <g id="Play">
                                                        <path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="latest_title_content">
                                                <div class="latest_title">Season 4 Episode 47 - Deep in Crypto</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest_episode_info">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="#">September 24, 2018</a></li>
                                        <li><a href="#">Music</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="latest">
                                <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                                    <a href="episode.html">
                                        <div class="d-flex flex-row align-items-start justify-content-start">
                                            <div class="latest_play">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
                                                    <g id="Play">
                                                        <path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="latest_title_content">
                                                <div class="latest_title">Season 4 Episode 46 - Nothing is real</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest_episode_info">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="#">September 24, 2018</a></li>
                                        <li><a href="#">Music</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="footer_title">Instagram</div>
                        <div class="gallery d-flex flex-row align-items-start justify-content-start flex-wrap">

                            <div class="gallery_item">
                                <a class="colorbox" href="<?= base_url()?>/public/assets/images/gallery_1_large.jpg"><img src="<?= site_url('public/assets/images/xgallery_1.jpg.pagespeed.ic.OLTdUutXxA.jpg')?>" alt=""></a>
                            </div>

                            <div class="gallery_item">
                                <a class="colorbox" href="<?= base_url()?>/public/assets/images/gallery_2_large.jpg"><img src="<?= site_url('public/assets/images/xgallery_1.jpg.pagespeed.ic.OLTdUutXxA.jpg')?>" alt=""></a>
                            </div>

                            <div class="gallery_item">
                                <a class="colorbox" href="<?= base_url()?>/public/assets/images/gallery_3_large.jpg"><img src="<?= site_url('public/assets/images/xgallery_1.jpg.pagespeed.ic.OLTdUutXxA.jpg')?>" alt=""></a>
                            </div>

                            <div class="gallery_item">
                                <a class="colorbox" href="<?= base_url()?>/public/assets/images/gallery_4_large.jpg"><img src="<?= site_url('public/assets/images/xgallery_1.jpg.pagespeed.ic.OLTdUutXxA.jpg')?>" alt=""></a>
                            </div>

                            <div class="gallery_item">
                                <a class="colorbox" href="<?= base_url()?>/public/assets/images/gallery_5_large.jpg"><img src="<?= site_url('public/assets/images/xgallery_1.jpg.pagespeed.ic.OLTdUutXxA.jpg')?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer_social_row">
                    <div class="col">
                        <div class="footer_social">
                            <ul class="d-flex flex-row align-items-center justify-content-center">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </br></br>
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

            </div>
        </footer>
    </div>
    <?= script_tag('public/assets/js/jquery-3.3.1.min.js')?>
    <?= script_tag('public/assets/plugins/js/bootstrap-4.1.2/popper.js')?>
    <?= script_tag('public/assets/plugins/js/bootstrap-4.1.2/bootstrap.min.js')?>
    <?= script_tag('public/assets/plugins/js/greensock/TweenMax.min.js')?>
    <?= script_tag('public/assets/plugins/js/greensock/main-plugins.js')?>

    <script>
        eval(mod_pagespeed_E5t$q8S3wD);
    </script>
    <script>
        eval(mod_pagespeed_yIzQqQk4mU);
    </script>
    <script>
        eval(mod_pagespeed_AEu86u_i5O);
    </script>
    <script>
        eval(mod_pagespeed_$vqM02XAr6);
    </script>
    <script>
        eval(mod_pagespeed_dch6Nm9XO1);
    </script>
    <script>
        eval(mod_pagespeed_$36$KeigdZ);
    </script>
    <script>
        eval(mod_pagespeed_rSXM3F4kPH);
    </script>
    <script>
        eval(mod_pagespeed_EXrkD4rwSu);
    </script>
    <?= script_tag('public/assets/js/custom.js')?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ef6fb740d919cb8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>
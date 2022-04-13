<?= $this->extend('layouts/app') ?>
<?= $this->section('content'); ?>
<div class="shows">
    <div class="container">
        <div class="row shows_row">

            <div class="col-lg-4 col-sm-4">
                <div class="show">
                    <div class="show_image">
                        <a href="episode.html">
                            <?= img('public/assets/images/xshow_1.jpg.pagespeed.ic.QWxZxqNWHP.jpg', '', 'alt="Sermons"') ?>
                        </a>
                        <div class="show_tags">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">Music</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="show_play_icon">
                            <?= img('public/assets/images/play.svg', '', 'alt="play centre missionnaire de lubumbashi"') ?>
                        </div>
                    </div>
                    <div class="show_content">
                        <div class="show_date"><a href="#">24 September, 2018</a></div>
                        <div class="show_title"><a href="episode.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</a></div>
                        <div class="show_info d-flex flex-row align-items-start justify-content-start">
                            <div class="show_fav d-flex flex-row align-items-center justify-content-start">
                                <div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
                                <div class="show_fav_count">2371</div>
                            </div>
                            <div class="show_comments">
                                <a href="#">
                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
                                        <div class="show_comments_count">88 Comments</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4">
                <div class="show">
                    <div class="show_image">
                        <a href="episode.html">
                            <?= img('public/assets/images/xshow_2.jpg.pagespeed.ic.VZPWHSVBmP.jpg', '', 'alt="Sermons Cerntre missionnaire de lubumbashi"') ?>

                        </a>
                        <div class="show_tags">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">Experiment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="show_play_icon">
                            <div class="show_play_icon">
                                <?= img('public/assets/images/play.svg', '', 'alt="play centre missionnaire de lubumbashi"') ?>
                            </div>
                        </div>
                        <div class="show_content">
                            <div class="show_date"><a href="#">24 September, 2018</a></div>
                            <div class="show_title"><a href="episode.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</a></div>
                            <div class="show_info d-flex flex-row align-items-start justify-content-start">
                                <div class="show_fav d-flex flex-row align-items-center justify-content-start">
                                    <div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
                                    <div class="show_fav_count">2371</div>
                                </div>
                                <div class="show_comments">
                                    <a href="#">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
                                            <div class="show_comments_count">88 Comments</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="show">
                    <div class="show_image">
                        <a href="episode.html">
                            <?= img('public/assets/images/xshow_1.jpg.pagespeed.ic.QWxZxqNWHP.jpg', '', 'alt="Sermons"') ?>
                        </a>
                        <div class="show_tags">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">Music</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="show_play_icon">
                            <?= img('public/assets/images/play.svg', '', 'alt="play centre missionnaire de lubumbashi"') ?>
                        </div>
                    </div>
                    <div class="show_content">
                        <div class="show_date"><a href="#">24 September, 2018</a></div>
                        <div class="show_title"><a href="episode.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</a></div>
                        <div class="show_info d-flex flex-row align-items-start justify-content-start">
                            <div class="show_fav d-flex flex-row align-items-center justify-content-start">
                                <div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
                                <div class="show_fav_count">2371</div>
                            </div>
                            <div class="show_comments">
                                <a href="#">
                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
                                        <div class="show_comments_count">88 Comments</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <div class="button_fill shows_button"><a href="#">browse shows</a></div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="weekly">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?= site_url('public/assets/images/xindex.jpg.pagespeed.ic.EMib8i9JDR.jpg') ?>" data-speed="0.8"></div>
    <div class="container">
        <div class="row row-eq-height">

            <div class="col-lg-6">
                <div class="weekly_content d-flex flex-column align-items-start justify-content-lg-center justify-content-start">
                    <div>
                        <div class="weekly_title">
                            <h1>Bi-weekly episodes</h1>
                        </div>
                        <div class="weekly_text">
                            <p>Cras congue et risus eget congue. Integer id justo non orci suscipit cursus a scelerisque libero.
                                Fusce in tortor mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus mus. Maecenas euismod sed magna.</p>
                        </div>
                        <div class="shops d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="button_border"><a href="#">Amazon</a></div>
                            <div class="button_border"><a href="#">Itunes</a></div>
                            <div class="button_border"><a href="#">Spotify</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="weekly_image">
                    <?= img('public/assets/images/xshow_3.jpg.pagespeed.ic.KYPOYaIAuH.jpg') ?>
                    <div class="logo">
                        <a href="#" class="d-flex flex-row"><span>my</span>podcast<div>
                                <?= img('public/assets/images/xplay_2.png.pagespeed.ic.e_xeiMOhOS.png') ?>
                            </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="shows_2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="shows_2_title">By Category</div>
            </div>
        </div>
        <div class="row shows_2_row">

            <div class="col-xl-3 col-md-6">
                <div class="show">
                    <div class="show_image">
                        <a href="episode.html">
                            <?= img('public/assets/images/xshow_4.jpg.pagespeed.ic.87RqUiyRHp.jpg') ?>

                            <div class="show_play_icon">
                            <?= img('public/assets/images/play.svg') ?>
                            </div>
                            <div class="show_title_2">Cras malesuada ipsum sapien.</div>
                        </a>
                        <div class="show_tags">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">travel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="show">
                    <div class="show_image">
                        <a href="episode.html">
                            <?= img('public/assets/images/xshow_5.jpg.pagespeed.ic.UxGPbxuFq2.jpg') ?>
                            <div class="show_play_icon">
                            <?= img('public/assets/images/play.svg') ?>
                            </div>
                            <div class="show_title_2">Cras malesuada ipsum sapien.</div>
                        </a>
                        <div class="show_tags">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">lifestyle</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="show">
                    <div class="show_image">
                        <a href="episode.html">
                        <?= img('public/assets/images/xshow_6.jpg.pagespeed.ic.QnNTPSBM_y.jpg') ?>

                            <div class="show_play_icon">
                            <?= img('public/assets/images/play.svg') ?>
                            </div>
                            <div class="show_title_2">Cras malesuada ipsum sapien.</div>
                        </a>
                        <div class="show_tags">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">music</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="show">
                    <div class="show_image">
                        <a href="episode.html">
                        <?= img('public/assets/images/xshow_7.jpg.pagespeed.ic.mIW3ucjimF.jpg') ?>
                            <div class="show_play_icon">
                            <?= img('public/assets/images/play.svg') ?>
                            </div>
                            <div class="show_title_2">Cras malesuada ipsum sapien.</div>
                        </a>
                        <div class="show_tags">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">travel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="button_fill shows_2_button"><a href="#">browse shows</a></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
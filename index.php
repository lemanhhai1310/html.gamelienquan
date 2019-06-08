<?php include "header.php"; ?>
<div class="lq-content uk-position-relative">
    <div class="uk-container uk-container-small">
        <div id="lq-block1" class="uk-child-width-1-2 uk-grid-small uk-margin-medium uk-visible@m" uk-grid>
            <div>
                <div class="uk-cover-container lq-box1">
                    <img src="imgs/img1.jpg" alt="" uk-cover>
                    <canvas width="605" height="303"></canvas>
                    <div class="uk-position-top-right">
                        <ul class="uk-subnav uk-subnav-pill uk-text-center lq-nav1" uk-switcher>
                            <li><a href="#">liên <br> quân</a></li>
                            <li class="uk-active"><a href="#">free <br> fire</a></li>
                            <li><a href="#">pubg <br> mobile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-cover-container lq-box1">
                    <img src="https://meonho24h.com/wp-content/uploads/2019/04/doi-mk-lien-quan-3.jpg" alt="" uk-cover>
                    <canvas width="605" height="303"></canvas>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid>
            <?php
            $data = array(
                'imgs/btn-lienquan1.png',
                'imgs/btn-lienquan2.png',
                'imgs/btn-lienquan3.png',
                'imgs/btn-lienquan4.png',
            );
            foreach ($data as $k1 => $v1){ ?>
                <div>
                    <a href="#"><img src="<?= $v1 ?>" alt=""></a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="uk-container">
        <div class="lq-catalog-txt uk-flex uk-flex-middle uk-flex-column uk-flex-center uk-text-center uk-text-uppercase uk-height-medium uk-background-norepeat uk-background-center-center" data-src="imgs/bg3.png" uk-img>
            <span>danh mục</span>
            <div>game liên quân</div>
        </div>
        <div class="lq-padding">
            <div class="lq-fillter uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid>
                <div class="uk-width-1-2 uk-visible@m">

                </div>
                <div>
                    <div class="uk-grid-collapse lq-label-box" uk-grid>
                        <div class="uk-width-auto c1 uk-background-norepeat" data-src="imgs/bg_label.png" uk-img>
                            <label class="uk-text-truncate" for="">tướng dai ra hai</label>
                        </div>
                        <div class="uk-width-expand">
                            <input class="uk-input" type="text" placeholder="" value="NGỘ KHÔNG">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid-collapse lq-label-box" uk-grid>
                        <div class="uk-width-auto c1 uk-background-norepeat" data-src="imgs/bg_label.png" uk-img>
                            <label class="uk-text-truncate" for="">skin</label>
                        </div>
                        <div class="uk-width-expand">
                            <input class="uk-input" type="text" placeholder="" value="NGỘ KHÔNG KHÁ BẢNH">
                        </div>
                    </div>
                </div>
                <?php
                $data = array(
                    array(
                        'title' => 'giá tiền',
                        'option' => array(
                            'TỪ 500K - 1 TRIỆU',
                            'Trên 1 TRIỆU',
                        ),
                    ),
                    array(
                        'title' => 'rank',
                        'option' => array(
                            'thách đấu',
                        ),
                    ),
                    array(
                        'title' => 'đá quý',
                        'option' => array(
                            'không',
                        ),
                    ),
                    array(
                        'title' => 'ngọc 90',
                        'option' => array(
                            'có',
                        ),
                    ),
                );
                foreach ($data as $k1 => $v1){ ?>
                    <div>
                        <div class="uk-grid-collapse lq-label-box" uk-grid>
                            <div class="uk-width-auto c1 uk-background-norepeat" data-src="imgs/bg_label.png" uk-img>
                                <label class="uk-text-truncate" for=""><?= $v1['title'] ?></label>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        <?php foreach ($v1['option'] as $k2 => $v2){ ?>
                                            <option value="<?= $k2 ?>"><?= $v2 ?></option>
                                        <?php } ?>
                                    </select>
                                    <button class="uk-button uk-button-default uk-width-1-1 uk-text-truncate" type="button" tabindex="-1">
                                        <span></span>
                                        <img class="uk-position-center-right" src="imgs/icon_down.png" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="uk-padding-large uk-height-viewport uk-background-norepeat" style="background-size: 100%" data-src="imgs/bg2.png" uk-img>
            <div class="uk-child-width-1-4@m uk-grid-small" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'imgs/img2.png',
                        'sao' => 5,
                    ),
                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/header (9)-1x1.jpg',
                        'sao' => 3,
                    ),
                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/578080_steampowered-1x1.jpg',
                        'sao' => 2,
                    ),
                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/646910_steampowered-1x1.jpg',
                        'sao' => 5,
                    ),

                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/324800_steampowered-1x1.jpg',
                        'sao' => 5,
                    ),
                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/33230_steampowered-1x1.jpg',
                        'sao' => 3,
                    ),
                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/22300_steampowered-1x1.jpg',
                        'sao' => 2,
                    ),
                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/322330_steampowered-1x1.jpg',
                        'sao' => 5,
                    ),

                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/VAIN-1x1.jpg',
                        'sao' => 5,
                    ),
                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/550_steampowered-1x1.jpg',
                        'sao' => 3,
                    ),
                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/tank-1x1.jpg',
                        'sao' => 2,
                    ),
                    array(
                        'src' => 'https://envilstore.com/image/cache/catalog/346110_steampowered-1x1.jpg',
                        'sao' => 5,
                    ),
                );
                foreach ($data as $k1 => $v1){ ?>
                    <div>
                        <div class="lq-card1 uk-position-relative uk-margin">
                            <div class="uk-cover-container uk-margin-small">
                                <img src="<?= $v1['src'] ?>" alt="" uk-cover>
                                <canvas width="264" height="151"></canvas>
                                <div class="uk-position-bottom-center lq-rate">
                                    <?php for ($i=1; $i<= $v1['sao']; $i++){ ?>
                                        <img src="imgs/sao.png" alt="">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="uk-child-width-1-2 uk-grid-match uk-grid-collapse" uk-grid>
                                <div>
                                    <div class="lq-txt1">RANK:  BẠCH KIM 1</div>
                                    <div class="lq-txt1">TƯỚNG: 25</div>
                                    <div class="lq-txt1">TRANG PHỤC: 60</div>
                                    <div class="lq-txt1">ĐÁ QUÝ: 1</div>
                                    <div class="lq-txt1">NGỌC 90: KHÔNG</div>
                                </div>
                                <div class="uk-flex uk-flex-row uk-flex-between uk-text-right">
                                    <span class="lq-code uk-flex-1">MS#1029</span>
                                    <div class="lq-price uk-flex uk-flex-column uk-flex-right">
                                        <div><span>15.000.000</span> VNĐ</div>
                                        <div><del>20.000.000 VNĐ</del></div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-position-bottom uk-background-norepeat lq-line" style="height: 9px; background-size: 100%" data-src="imgs/bg_sp.png" uk-img></div>
                        </div>
                        <div class="uk-grid-small uk-flex-center uk-child-width-1-2 uk-margin-medium-bottom lq-bottom" uk-grid>
                            <div>
                                <a href="#" class="uk-button lq-btn1 uk-button-default uk-width-1-1 uk-background-norepeat uk-background-contain" style="" data-src="imgs/bg_btn1.png" uk-img><span>xem chi tiết</span></a>
                            </div>
                            <div>
                                <a href="#" class="uk-button lq-btn1 uk-button-default uk-width-1-1 uk-background-norepeat uk-background-contain" style="" data-src="imgs/bg_btn1.png" uk-img><span>mua ngay</span></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <ul class="uk-pagination lq-pagination uk-flex-center uk-flex-middle" uk-margin>
                <li><a href="#"><img src="imgs/pagi_left.png" alt=""></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#"><img src="imgs/pagi_right.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
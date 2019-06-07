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

    </div>
</div>
<?php include "footer.php"; ?>
<?php
use \yii\helpers\Url;
?>
<section class="offers plr" style="margin-top: 70px">
    <div class="offers-wrap limit-width">
        <div class="offers__items">
            <?php foreach ($mfoAll as $mfo) : ?>
            <div class="mfo_card">
                <?php if($mfo->akcii == 1) : ?>
                    <div class="mfo_achieve promo">Акция</div>
                <?php endif; ?>
                <div class="mfo_card_company">
                    <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo->url]) ?>">
                        <img src="<?= $mfo->logo; ?>" alt="<?= $mfo->mfo_name ?>" width="210" height="70">
                    </a>
                </div>
<!--                <div class="mfo_card_compare">-->
<!--                    <a href="--><?php //echo $mfo->link_offer ?><!--">Салыстыру</a>-->
<!--                </div>-->
                <div class="mfo_card_info_link">
                    <div class="line_mfo">
                        <div>
                            <span class="text_unit">Қарыз сомасы</span>
                            <span class="zaym_result">50000</span>
                            <span class="text_unit_small">тнг</span>
                        </div>
                        <div>
                            <span class="text_unit">Комиссия <b class="kom_dni">7</b> күн</span>
                            <span class="zaym_com">35</span>
                            <span class="text_unit_small">тнг</span>
                        </div>
                        <div>
                            <span class="text_unit">Төлеуге</span>
                            <span class="zaym_vipl">50035</span>
                            <span class="text_unit_small">тнг</span>
                        </div>
                    </div>
                </div>
                <div class="mfo_card_info">
                    <div class="mfo_card_info_inner">
                        <div class="mfo_card_info_rating">
                            <div class="mfo_card_info_rating_label">Рейтинг:</div>
                            <div class="mfo_card_info_rating_data">
                                <div class="rating__stars" style="width:96%"></div>
                                <div class="rating__val"><?= $mfo->rating ?></div>
                            </div>
                        </div>
                        <div class="mfo_card_info_time">
                            <div class="mfo_card_info_time_label">Мерзімге:</div>
                            <div class="mfo_card_info_time_data"><?= $mfo->srok ?></div>
                        </div>
                        <div class="mfo_card_info_sum">
                            <div class="mfo_card_info_sum_label">Сомасы (тнг):</div>
                            <div class="mfo_card_info_sum_data"><?= $mfo->sum ?></div>
                        </div>
                        <div class="mfo_card_info_rate">
                            <div class="mfo_card_info_rate_label">Мөлшерлемесі:</div>
                            <div class="mfo_card_info_rate_data"><?= $mfo->stavka ?></div>
                        </div>
                        <div class="mfo_card_info_accept">
                            <div class="mfo_card_info_accept_label">ГЭСВ:</div>
                            <div class="mfo_card_info_accept_data"><?= $mfo->gesv ?></div>
                        </div>
                        <div class="mfo_card_info_approval">
                            <div class="mfo_card_info_approval_label">Мақұлдау:</div>
                            <div class="mfo_card_info_approval_data"><?= $mfo->odobrenie ?>%</div>
                        </div>
                        <div class="mfo_card_info_accept">
                            <div class="mfo_card_info_accept_label">Қаралуы:</div>
                            <div class="mfo_card_info_accept_data"><?= $mfo->rasmotrenie ?></div>
                        </div>
                        <div class="mfo_card_info_ways">
                            <div class="mfo_card_info_ways_label">Алу:</div>
                            <div class="mfo_card_info_ways_data">
                                <img class="lazyload" src="img/2016/08/all.png" alt="all" width="93" height="20">
                            </div>
                        </div>
                    </div>
                    <a href="<?= $mfo->link_offer ?>" target="_blank">
                        <div class="mfo_card_button">Ақшаны алу</div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
            <?php if(Yii::$app->controller->route != 'site/error') : ?>
            <div class="subscribe_main">
                <div class="text_main_subscribe_container">ҚАРЫЗҒА <br>ӨТІНІМ РЕСІМДЕУ</div>
                <div class="email_sidebar_container">
                    <div class="text_item_subscribe_container">Уақыт жоғалтпайсыз!<br><br>Барлық МҚҰ бір өтінім<br><br>Ең тиімді ұсыныс алу</div>
                    <div class="subscribe-sidebar-item subscribe-sidebar-item--btn-submit">
                        <form action="https://smartzaim.kz/zayavka-na-zajm/?utm_source=kz.smartzaim.kz">
                            <input class="subscribe-sidebar-item__btn subscribe-sidebar-item__btn--btn-submit" type="submit" value="Өтінім беру">
                        </form>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php if(Yii::$app->controller->route != 'site/error') : ?>
        <div class="offers__btn">
            <a href="rating">Барлық МҚҰ көрсету</a>
        </div>
        <?php endif; ?>
    </div>
</section>

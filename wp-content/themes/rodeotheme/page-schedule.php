<?php
/*
Template Name: Schedule page of Rodeo
*/
?>
<?php
get_header(); ?>

<div id="wrapper-body">
    <section id="block-title">
        <div class="container max-width-920">
            <div id="div-bor-title">
                <h2>スケジュール</h2>
                <p id="under"></p>
            </div>
        </div>
    </section>
    <section class="bg-222 padding-tb-50">
        <div class="container max-width-920">
            <div class="row">
                <p class="line-height-28">競技者クラスはプロ・アマ競技者および指導者の承認を受けた方が参加出来ます。</p>
                <p class="line-height-28">毎週火曜・金曜19:00のクラスはリングサイドでレディースキックボクシング、マットスペースで柔術・グラップリングとなります。</p>
                <p class="line-height-28">初心者・女性の方がどのクラスに参加されても基本から丁寧に指導いたします。</p>
                <p class="margin-top-30 line-height-28">クラス以外の時間は自主トレーニングに使えます。</p>
                <div id="div-schedule-title">
                    <div class="flex-center">
                        <p class="bg bg-green"></p>
                        <p class="p-txt">格闘技</p>
                    </div>
                    <div class="flex-center margin-top-20-mobile">
                        <p class="bg bg-pink"></p>
                        <p class="p-txt">ダンスフィットネス ／ レディースキックボクシング</p>
                    </div>
                    <div class="flex-center margin-top-20-mobile">
                        <p class="bg bg-yellow"></p>
                        <p class="p-txt">キッズファイトクラブ</p>
                    </div>
                    <div class="flex-center margin-top-20-mobile">
                        <p class="bg bg-brow"></p>
                        <p class="p-txt">競技者クラス</p>
                    </div>
                </div>
                <img class="width-100 margin-top-20 mobile-hidden" src="<?php bloginfo('template_directory'); ?>/assets/images/schedules/img_3.png"/>
                <img class="width-100 margin-top-20 mobile-hidden" src="<?php bloginfo('template_directory'); ?>/assets/images/schedules/img_4.png"/>
                <img class="width-100 margin-top-20 mobile-show" src="<?php bloginfo('template_directory'); ?>/assets/images/schedules/img_1.png"/>
                <img class="width-100 margin-top-20 mobile-show" src="<?php bloginfo('template_directory'); ?>/assets/images/schedules/img_2.png"/>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>

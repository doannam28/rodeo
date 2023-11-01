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
                <p>競技者クラスはプロ・アマ競技者および指導者の承認を受けた方が参加出来ます。</p>
                <p>毎週火曜・金曜19:00のクラスはリングサイドでレディースキックボクシング、マットスペースで柔術・グラップリングとなります。</p>
                <img class="width-100 margin-top-20 mobile-hidden" src="<?php bloginfo('template_directory'); ?>/assets/images/schedules/schedule.png"/>
                <img class="width-100 margin-top-20 mobile-show" src="<?php bloginfo('template_directory'); ?>/assets/images/schedules/img.png"/>
                <img class="width-100 margin-top-20 mobile-show" src="<?php bloginfo('template_directory'); ?>/assets/images/schedules/img_1.png"/>
                <img class="width-100 margin-top-20 mobile-show" src="<?php bloginfo('template_directory'); ?>/assets/images/schedules/img_2.png"/>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>

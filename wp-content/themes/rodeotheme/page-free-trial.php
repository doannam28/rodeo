<?php
/*
Template Name: Free Trial page of Rodeo
*/
?>
<?php
get_header(); ?>

<div id="wrapper-body">
    <section id="block-title">
        <div class="container max-width-920">
            <div id="div-bor-title">
                <h2>無料体験お申込フォーム</h2>
                <p id="under"></p>
            </div>
        </div>
    </section>
    <section class="bg-222 padding-tb-50">
        <div class="container max-width-920">
            <div class="row">
               <div class="col-12 col-md-4">
                   <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/free-trial.png"/>
               </div>
                <div class="col-12 col-md-8 margin-top-20-mobile">
                    <p class="font-16 font-weight-700">この度はロデオスタイル無料体験をご検討いただきまして、誠にありがとうございます。</p>
                    <p class="font-16 font-weight-700">初回の方に限りお好きな1クラスとフィットネスジムが無料体験出来ます。</p>
                    <p class="font-16 font-weight-700">クラススケジュールを参考に、お好きなクラスが決まりましたら、メールかお電話で無料体験のご予約をしてください。</p>
                    <p class="font-16 font-weight-700 margin-top-20">・持ち物 運動出来る服装  飲料水</p>
                    <p class="font-16 font-weight-700">・フィットネスジムご利用の際はシューズが必要になります。クラスではシューズ必要ありません。</p>
                    <p class="font-16 font-weight-700 margin-top-20">無料体験キャンペーン実施中！</p>
                    <p class="font-16 font-weight-700">無料体験後一週間以内にご入会すると初回月会費１ヶ月分無料！</p>
                    <p class="font-16 font-weight-700">実質0円でご入会出来ます！</p>
                    <p class="font-16 font-weight-700">女性の方にはレディース会員7980円を毎月5980円にさせていただきます！</p>
                    <p class="font-16 font-weight-700">さらに２名様以上で入会されますと月会費500円割引！</p>
                    <p class="font-16 font-weight-700">※無料体験キャンペーンで入会された場合は原則として自動振替開始後3ヶ月間は継続して頂くようお願い致します。</p>
                    <p class="font-16 font-weight-700">※お一人退会しますと割引制度は終了いたします。</p>
                </div>
            </div>
            <div class="row margin-top-50">
                <div class="col-12">
                    <p class="font-16 font-weight-700">・お名前、メールアドレス、ご希望のクラスの日時、ご質問等を記載し送信してください。</p>
                    <p class="font-16 font-weight-700">・またフィットネスジムの無料体験の方も同様です。ご予約の状況を確認し折り返しご連絡いたします。</p>
                </div>
            </div>
            <div class="row margin-top-50">
                <div class="col-12 col-md-6 offset-md-3">
                    <p class="font-16 font-weight-700 text-center">全ての項目に入力してください。</p>
                    <div id="contact-form">
                        <?php echo apply_shortcodes( '[contact-form-7 id="06fbdb0" title="Contact form 1"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>

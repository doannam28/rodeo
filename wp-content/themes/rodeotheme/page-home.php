<?php
/*
Template Name: Home page of Rodeo
*/
?>
<?php
get_header(); ?>

<div id="wrapper-body">
    <section id="block-slide">
        <div id="slide">
            <div id="jssor_1" style="position:relative;top:0px;left:0px;width:1920px;height:960px;overflow:hidden;">
                <div data-u="slides" style="position:absolute;top:0px;left:0px;width:1920px;height:960px;overflow:hidden;">
                    <div><img data-u="image" src="<?php bloginfo('template_directory'); ?>/assets/images/sliders/01.png" /></div>
                    <div><img data-u="image" src="<?php bloginfo('template_directory'); ?>/assets/images/sliders/02.png" /></div>
                    <div><img data-u="image" src="<?php bloginfo('template_directory'); ?>/assets/images/sliders/03.png" /></div>
                    <div><img data-u="image" src="<?php bloginfo('template_directory'); ?>/assets/images/sliders/04.png" /></div>
                    <div><img data-u="image" src="<?php bloginfo('template_directory'); ?>/assets/images/sliders/05.png" /></div>
                </div>
            </div>
        </div>
        <div id="slide-mobile">
            <div id="jssor_2" style="position:relative;top:0px;left:0px;width:375px;height:480px;overflow:hidden;">
                <div data-u="slides" style="position:absolute;top:0px;left:0px;width:375px;height:480px;overflow:hidden;">
                    <div><img data-u="image" src="<?php bloginfo('template_directory'); ?>/assets/images/slider-mobiles/1.png" /></div>
                    <div><img data-u="image" src="<?php bloginfo('template_directory'); ?>/assets/images/slider-mobiles/2.png" /></div>
                    <div><img data-u="image" src="<?php bloginfo('template_directory'); ?>/assets/images/slider-mobiles/3.png" /></div>
                    <div><img data-u="image" src="<?php bloginfo('template_directory'); ?>/assets/images/slider-mobiles/4.png" /></div>
                    <div><img data-u="image" src="<?php bloginfo('template_directory'); ?>/assets/images/slider-mobiles/5.png" /></div>
                </div>
            </div>
        </div>
        <div id="logo-banner">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/RS_Logotype-1.png">
        </div>
    </section>
    <section class="padding-tb-20">
        <div class="container max-width-1032">
            <div class="padding-tb-20">
                <div class="container">
                    <img class="width-100 mobile-hidden" src="<?php bloginfo('template_directory'); ?>/assets/images/banner.png"/>
                    <img class="width-100 mobile-show" src="<?php bloginfo('template_directory'); ?>/assets/images/banner-mobile.png"/>
                </div>
            </div>
        </div>
    </section>
    <section id="block-news" class="padding-tb-20">
        <div class="container max-width-1032">
            <div class="row">
                <div class="col-12 col-md-2">
                    <div id="div-title">
                        <h2 class="title-red">NEWS</h2>
                        <a href="https://rodeostyle.weebly.com/blog" class="button"><span>&nbsp;</span> 一覧を見る</a>
                    </div>
                </div>
                <div class="col-12 col-md-10">
                    <div id="owl-carousel" class="row owl-carousel">
                        <div class="item">
                            <a href="/" class="a-new">
                                <div class="new-item">
                                    <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/news/img1.png"/>
                                    <span class="new-date">2023.8.8</span>
                                    <p class="new-title">試合結果</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="/" class="a-new">
                                <div class="new-item">
                                    <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/news/img2.png"/>
                                    <span class="new-date">2023.8.8</span>
                                    <p class="new-title">試合結果</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="/" class="a-new">
                                <div class="new-item">
                                    <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/news/img3.png"/>
                                    <span class="new-date">2023.8.8</span>
                                    <p class="new-title">試合予定</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="introduction" class="mobile-hidden">
        <div class="container max-width-1032">
            <div class="col-12">
                <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/Introduction.png"/>
            </div>
        </div>
    </section>
    <section id="introduction-mobile" class="mobile-show">
        <div class="container">
            <div class="col-12">
                <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/Introduction-mobile.png"/>
            </div>
        </div>
    </section>
    <section id="massage">
        <div class="container max-width-1032">
            <div class="row">
                <div class="col-12 col-md-4">
                    <img id="img-massage" src="<?php bloginfo('template_directory'); ?>/assets/images/massage.png" class="width-100" />
                </div>
                <div class="col-12 col-md-8">
                    <h2 class="title-massage">Message</h2>
                    <p class="p-titlt-12">ごあいさつ</p>
                    <p class="font-12 margin-top-30">ロデオスタイル代表</p>
                    <p class="font-24">加藤 泰貴</p>
                    <p class="font-16 margin-top-30">私の仕事は格闘技やフィットネスの素晴らしさを伝えること。そして特技は人を変身させることです。今まで多くのファイターやアスリートを育てて来ました。そこで培った知識や経験を活かし、あなたのココロとカラダを変えるお手伝いをする。それが私の最大の仕事です。
                        今まで運動したことがない方、何をしても結果が出なかった方、ジムに通ったが続かなかった方、是非ロデオスタイルを体験してみてください。ロデオスタイルではココロとカラダを鍛え、あなたの理想に変わるのと同時に生活習慣・食生活の改善により人生最大の財産である健康までも手に入れます。</p>
                    <a id="opener" class="button width-100 margin-top-30 hover-cursor"><span>&nbsp;</span> さらに見る</a>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-hidden">
        <div class="container max-width-1032">
            <div class="col-12">
                <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/why-rodeo-style.png"/>
            </div>
        </div>
    </section>
    <section class="mobile-show">
        <div class="container">
            <div class="col-12">
                <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/why-rodeo-style-mobile.png"/>
            </div>
        </div>
    </section>
    <section id="block-why">
        <div class="container max-width-1032">
            <h2 class="title-massage">Program</h2>
            <p class="p-titlt-12">プログラム</p>
            <div class="row margin-top-30">
                <div class="col-12 col-md-4">
                    <div class="program-item">
                        <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/programs/img.png"/>
                        <a href="/fighting-academy/">
                            <p class="font-16 font-weight-700"><span>&nbsp;</span>ファイティングアカデミー</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="program-item">
                        <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/programs/img_1.png"/>
                        <a href="/gym/">
                            <p class="font-16 font-weight-700"><span>&nbsp;</span>ワークアウトジム</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="program-item">
                        <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/programs/img_2.png"/>
                        <a href="/dance-fitness/">
                            <p class="font-16 font-weight-700"><span>&nbsp;</span>ダンスフィットネス</p>
                        </a>
                    </div>
                </div>
            </div>
            <a href="/schedule" class="button width-100 margin-top-30"><span>&nbsp;</span> さらに見る</a>
        </div>
    </section>
    <section>
        <div>
            <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/bg-floor.png"/>
        </div>
        <div class="container margin-top-30 max-width-1032">
            <h2 class="title-massage">Floor Map</h2>
            <p class="p-titlt-12">フロアマップ</p>
        </div>
        <div class="container max-width-1032">
            <div id="tabs">
                <ul>
                    <li class="li-tab li-tab-0 li-active"><a href="#4f"><span>4F</span></a></li>
                    <li class="li-tab li-tab-1"><a href="#5f"><span>5F</span></a></li>
                    <li class="li-tab li-tab-2"><a href="#6f"><span>6F</span></a></li>
                </ul>
                <div id="owl-carousel2" class="owl-carousel owl-theme">
                    <div class="item" data-hash="4f" id="fragment-1">
                        <div class="flex-center">
                            <div class="div-floor">
                                <img class="max-width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/floors/floor4.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-hash="5f" id="fragment-2" class="flex-center">
                        <div class="flex-center">
                            <div class="div-floor">
                                <img class="max-width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/floors/floor5.png"/>
                                <a class="a-cam1" href="<?php bloginfo('template_directory'); ?>/assets/images/floors/cam1.png" data-lightbox="roadtrip" data-title="リング"><img src="<?php bloginfo('template_directory'); ?>/assets/images/floors/camera.png"/> </a>
                                <a class="a-cam2" href="<?php bloginfo('template_directory'); ?>/assets/images/floors/cam2.png" data-lightbox="roadtrip" data-title="マットスペース"><img src="<?php bloginfo('template_directory'); ?>/assets/images/floors/camera.png"/> </a>
                                <a class="a-cam3" href="<?php bloginfo('template_directory'); ?>/assets/images/floors/cam3.png" data-lightbox="roadtrip" data-title="サンドバッグ / 待機スペース"><img src="<?php bloginfo('template_directory'); ?>/assets/images/floors/camera.png"/> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-hash="6f" id="fragment-3" class="flex-center">
                        <div class="flex-center">
                            <div class="div-floor">
                                <img class="max-width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/floors/floor6.png"/>
                                <a class="a-cam4" href="<?php bloginfo('template_directory'); ?>/assets/images/floors/cam4.png" data-lightbox="roadtrip1" data-title="ジムスペース"><img src="<?php bloginfo('template_directory'); ?>/assets/images/floors/camera.png"/> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-hidden margin-40 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/tabs.png"/>
            </div>
            <div class="mobile-show margin-40 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/tabs-mobile.png"/>
            </div>
        </div>
    </section>
    <section id="block-price">
        <div class="container max-width-1032">
            <div class="div-bor-title">
                <h2 class="title-massage">Price</h2>
                <p class="p-titlt-12">料金システム</p>
            </div>
            <div class="body-price margin-top-30">
                <img class="mobile-hidden width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/table-price.png"/>
                <img class="mobile-show width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/table-price-mobile.png"/>
                <img class="margin-top-30 mobile-hidden width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/content-price.png"/>
                <img class="margin-top-30 mobile-show width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/content-price-mobile.png"/>
                <a href="/fee" class="button margin-top-30"><span>&nbsp;</span> 詳しく見る</a>
            </div>
        </div>
    </section>
    <section id="block-flow" class="padding-tb-50">
        <div class="container max-width-1032">
            <div class="div-bor-title no-background">
                <h2 class="title-massage">Flow</h2>
                <p class="p-titlt-12">入会までの流れ</p>
            </div>
            <img class="width-100 margin-top-30 mobile-hidden" src="<?php bloginfo('template_directory'); ?>/assets/images/flow.png"/>
            <img class="width-100 margin-top-30 mobile-show" src="<?php bloginfo('template_directory'); ?>/assets/images/flow-mobile.png"/>
        </div>
    </section>
    <section class="padding-tb-20">
        <div class="container max-width-1032">
            <div class="padding-tb-20">
                <div class="container">
                    <img class="width-100 mobile-hidden" src="<?php bloginfo('template_directory'); ?>/assets/images/banner.png"/>
                    <img class="width-100 mobile-show" src="<?php bloginfo('template_directory'); ?>/assets/images/banner-mobile.png"/>
                </div>
            </div>
        </div>
    </section>
    <section id="block-qa" class="padding-tb-50">
        <div class="container max-width-1032">
            <div class="div-bor-title">
                <h2 class="title-massage">FAQ</h2>
                <p class="p-titlt-12">よくあるご質問</p>
            </div>
            <img class="width-100 mobile-hidden margin-top-30" src="<?php bloginfo('template_directory'); ?>/assets/images/content-qa.png"/>
            <img class="width-100 mobile-show margin-top-30" src="<?php bloginfo('template_directory'); ?>/assets/images/content-qa-mobile.png"/>
            <p class="margin-top-30">その他の質問はお問い合わせください。</p>
            <a href="/" style="width: 220px;" class="button margin-top-30"><span>&nbsp;</span> お問い合わせフォーム</a>
        </div>
    </section>
</div>

<div id="dialog" title="Message">
    <div>
        <p><b>NO STYLE LIKE RODEO STYLE</b></p>
        <p>「ロデオスタイルのようなスタイルは他にない。」</p>
        <p>これはロデオスタイルに長年、通った米兵が帰国の際に残した別れのメッセージです。</p>
        <p>今では私たちロデオスタイルメンバーには欠かせないスローガンになっています。</p>
        <p>それでは、そんなロデオスタイルの他にないコンセプトをいくつか紹介しましょう。</p>
        <p class="margin-top-20">
            <b> Concept 1 楽闘技"のススメ</b>
        </p>
        <p>ロデオスタイルが提案する「楽闘技」とはスポーツとして楽しむ格闘技のこと。</p>
        <p>横須賀という地域がら外国人のメンバーの姿が多く見受けられます。</p>
        <p>彼らにとってフィットネスは生活の一部。そして格闘技は野球やサッカーと同じスポーツなのです。武道の国、日本だからなのでしょうか格闘技と聞くと格闘技への尊敬がある反面、痛い、キツい、厳しいや中途半端に趣味でやったら失礼など、やたら敷居が高いところがあります。しかし外国人達は格闘技をスポーツのように楽しみライフスタイルの一部に取り入れ上手く自己表現をしています。ロデオスタイルでは武道精神の良いところは守りつつ欧米の明るく楽しいスポーツライクなアカデミーを目指しています。是非ロデオスタイルの「楽闘技」を体験してみてください。</p>
       <p>楽しいFIGHT LIFEがあなたを待っています！</p>
        <p class="margin-top-20">
            <b>Concept 2 多目的格闘技空間</b>
        </p>
        <p>かつて世界最強の格闘家ヒョードル選手が「60億分の1の男」と言われてたことは格闘技ファンの方ならご存知だと思います。しかし最強=60億分の1だけが格闘技ではありません。十人十色、目指すは1分の1。意外かも知れませんが、ロデオスタイルのメンバーの大半は30代40代の男女。皆、童心を忘れない遊び心のある大人です。「ウェイトトレーニングだけのつもりで入会したのですが、今では体力よりも技術や戦略が物を言う知的格闘技ブラジリアン柔術に夢中です。格闘技は観る専門でしたが、やる方が断然面白い。試合の方も体重以外にも年齢や経験に合わせてカテゴリーが分かれてるので挑戦してみたい」と話すビジネスマンの方や「ボクシングのエクササイズはシェイプアップ効果は、もちろんですがストレス発散や護身術にもイイですよ！女性も強く！カッコ良く！」と言う主婦の方まで、趣味趣向によって、いろいろな鍛え方ができるのもロデオスタイルの特長です。目的は様々ですが皆、格闘技を楽しんでるのは一緒のようです。あなたの1分の1がきっと見つかるはずです！</p>
        <p class="margin-top-20">
            <b>Concept 3 横須賀から世界へ</b>
        </p>
        <p>夜8時頃になると競技者が目立つようになります。中にはプロ選手の姿も。マットの上で打撃やタックル、関節技の練習に励む姿は圧巻。仲間同士でパンチやキックを交わす光景を、もしあなたが目撃したなら、プロの厳しさを感じて身をこわばらせるかもしれません。でもその合間に見せる彼らの姿にも注目してください。時に厳しく指摘しあい、時に和やかに冗談を交わしながら、技術を磨き合っているのです。そしてスパーリングの前後に皆が交わす握手を見たとき、他の多くのスポーツが持つ清々しさを格闘技に見出すでしょう。</p>
        <p>「よく都内のジムにも出稽古に行きますが、ロデオスタイルには独特の雰囲気がありますね。地元の人が多いせいか、選手同士の会話も多い気がします」</p>
        <p>と、2007年4月のUFC（ラスベガス）に出場したエース・小谷直之選手も愛着を持っている様子。地元・横須賀から全国区に、そして世界へ。かつてUFCに魅せられて、逗子海岸で"ビーチファイト"を始めた会長・加藤泰貴の夢が結実しようとしています。</p>
        <p>「僕は横浜高校レスリング部の出身なのですが、卒業後は飲食店で働いていまして、格闘技やスポーツから遠ざかっていたんです。でも1990年代半ばですね、UFCが流行ってきたとき『何でもあり』というのにすごく引きつけられてしまった。で、友だちと集まってね、浜辺で闘ったんです」</p>
        <p>決して喧嘩ではありません。スポーツとして相手を制する快感。それがいつしか見る者をも魅了してしまい、 "挑戦者"が登場するようになります。やがては横須賀基地のアメリカ兵までも参戦！いつしか「誰にでも気軽に格闘技を楽しんでもらおう」という思いを強くした加藤は、1998年にジムを開いたのです。ちなみにロデオスタイルという名前の由来は、マウントポジション、つまり総合格闘技において必勝の馬乗り体勢です。必死に逃れようとする相手を、暴れ馬を制するように押さえ込み極める――。</p>
        <p>そこに至る修練や戦術を楽しもうということなのですね。</p>
        <p>「誰もがプロを目指す必要はありません。ただ格闘技を楽しむうちに自分の肉体が、そして心が、太く逞しく変わっていくことだけは、誰もが感じられるはず」</p>
        <p>横須賀で生まれ育ち、いま格闘技の世界で注目を浴びるロデオスタイル。</p>
        <p>その強さを支える楽しさを、まずは覗いてみませんか。</p>
    </div>
</div>
<script>
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      resizable: false,
      height: "auto",
      width: window.screen.width <= 768 ? 'auto' : '100%',
      modal: true,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "blind",
        duration: 1000
      }
    });
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );
</script>
<div id="header-bot">
    <a href="/free-trial/">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/FreeTrial.png">
    </a>
</div>
<style>
    .ui-dialog{
        position: fixed;
        top: 0px !important;
        left: 0px !important;
        height: 100% !important;
    }
</style>
<?php get_footer(); ?>

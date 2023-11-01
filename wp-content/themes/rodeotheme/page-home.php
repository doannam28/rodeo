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
            <div id="jssor_2" style="position:relative;top:0px;left:0px;width:390px;height:500px;overflow:hidden;">
                <div data-u="slides" style="position:absolute;top:0px;left:0px;width:390px;height:500px;overflow:hidden;">
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
    <section id="introduction" class="padding-tb-20">
        <div class="container max-width-1032">
           <div id="wrap-introduction">
               <div id="div-left-intro">
                   <p class="font-12 font-weight-700 color-red">Introduction</p>
                   <p class="font-56 font-family-fc color-red text-transform-uppercase margin-top-10">No Style Like RodeoStyle</p>
                   <p class="font-22 font-weight-700 color-red margin-top-10">ロデオスタイルのようなスタイルは他にない</p>
               </div>
               <div id="div-right-intro">
                   <p class="font-18 font-weight-700">フィットネスとは —。</p>
                   <p class="font-18 font-weight-700 margin-top-20">短期間で得られるダイエットや</p>
                   <p class="font-18 font-weight-700">ただ重いウェイトを持ち上げるという意味じゃない</p>
                   <p class="font-18 font-weight-700 margin-top-20">誰もがトレーニングを習慣にすることにより</p>
                   <p class="font-18 font-weight-700">生活の質を上げることこそが真の目的</p>
                   <p class="font-18 font-weight-700 margin-top-20">これは自分自身、ココロとカラダ</p>
                   <p class="font-18 font-weight-700">そしてやり直しがきかない人生への投資</p>
                   <p class="font-18 font-weight-700 margin-top-20">No style like RodeoStyle</p>
               </div>
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
    <section>
        <div class="div-top-why mobile-hidden">
            <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/why.png"/>
            <div class="div-text">
                <div class="container max-width-1032">
                    <div class="wrap-txt">
                        <div>
                            <p class="p-txt-why">RODEO STYLE が</p>
                        </div>
                        <div>
                            <p class="p-txt-why">選ばれる</p>
                        </div>
                        <div>
                            <p class="p-txt-why">7つの理由</p>
                        </div>
                    </div>
                    <img class="img-text" src="<?php bloginfo('template_directory'); ?>/assets/images/why-text.png"/>
                </div>
            </div>
        </div>
        <div class="div-top-why mobile-show">
            <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/why-mobile.png"/>
            <div class="div-text">
                <div class="container max-width-1032">
                    <div class="wrap-txt">
                        <div>
                            <p class="p-txt-why">RODEO STYLE が</p>
                        </div>
                        <div>
                            <p class="p-txt-why">選ばれる</p>
                        </div>
                        <div>
                            <p class="p-txt-why">7つの理由</p>
                        </div>
                    </div>
                    <div class="img-text">
                        <img class="width-100" src="<?php bloginfo('template_directory'); ?>/assets/images/why-text.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="container max-width-1032">
            <div class="row margin-top-30">
                <div class="col-6 col-md-3">
                    <div class="why-item">
                        <p class="font-family-fc text-center"><span class="span-number font-48">1</span></p>
                        <p class="font-22 font-16-mobile font-weight-700 margin-top-20 text-center">いつでも全て</p>
                        <p class="font-22 font-16-mobile font-weight-700 text-center">通い放題！</p>
                        <p class="margin-top-20">月額9,980円（女性7,980円）で格闘技・ダンスフィットネスクラスからトレーニングジムまで、いつでも利用できます</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="why-item">
                        <p class="font-family-fc text-center"><span class="span-number font-48">2</span></p>
                        <p class="font-22 font-weight-700 margin-top-20 text-center font-16-mobile">驚きの</p>
                        <p class="font-22 font-weight-700 text-center font-16-mobile">毎月220クラス！</p>
                        <p class="margin-top-20">初心者、女性、キッズ、競技者全てのニーズに対応してますので、あなたにぴったりのクラスが見つかります</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 margin-top-16-mobile">
                    <div class="why-item">
                        <p class="font-family-fc text-center"><span class="span-number font-48">3</span></p>
                        <p class="font-22 font-weight-700 margin-top-20 text-center font-16-mobile">充実の</p>
                        <p class="font-22 font-weight-700 text-center font-16-mobile">インストラクター！</p>
                        <p class="margin-top-20">各分野の経験豊富な専門家が格闘技&フィットネスの素晴らしさをあなたに教えます</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 margin-top-16-mobile">
                    <div class="why-item">
                        <p class="font-family-fc text-center"><span class="span-number font-48">4</span></p>
                        <p class="font-22 font-weight-700 margin-top-20 text-center font-16-mobile">初心者にも安心の</p>
                        <p class="font-22 font-weight-700 text-center font-16-mobile">無料パーソナル</p>
                        <p class="font-22 font-weight-700 text-center font-16-mobile">トレーニング！</p>
                        <p class="margin-top-20">トレーニングジム初心者の方はパーソナルトレーニング（30分計4回）が無料で受講できます</p>
                    </div>
                </div>
            </div>
            <div class="row row2-why">
                <div class="col-6 col-md-3">
                    <div class="why-item">
                        <p class="font-family-fc text-center"><span class="span-number font-48">5</span></p>
                        <p class="font-22 font-16-mobile font-weight-700 margin-top-20 text-center">充実のマシン</p>
                        <p class="font-22 font-16-mobile font-weight-700 text-center">ラインナップ！</p>
                        <p class="margin-top-20">BULL / PRECOR / BODY MASTERS、世界最高品質のマシンをご堪能ください</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="why-item">
                        <p class="font-family-fc text-center"><span class="span-number font-48">6</span></p>
                        <p class="font-22 font-weight-700 margin-top-20 text-center font-16-mobile">グローブレンタル</p>
                        <p class="font-22 font-weight-700 text-center font-16-mobile">無料！</p>
                        <p class="margin-top-20">格闘技クラスで使用するグローブ、レッグガードがレンタル無料ですので初めての方にも安心</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 margin-top-16-mobile">
                    <div class="why-item">
                        <p class="font-family-fc text-center"><span class="span-number font-48">7</span></p>
                        <p class="font-22 font-weight-700 margin-top-20 text-center font-16-mobile">朝7:00から</p>
                        <p class="font-22 font-weight-700 text-center font-16-mobile">オープン！</p>
                        <p class="margin-top-20">トレーニングジムはもちろんクラスプログラムも朝7:00よりご用意してます</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 margin-top-16-mobile">
                    <div id="div-logo-r">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-ro.png">
                    </div>
                </div>
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
                                <a class="a-cam4" href="<?php bloginfo('template_directory'); ?>/assets/images/floors/cam4.jpg" data-lightbox="roadtrip1" data-title="ジムスペース"><img src="<?php bloginfo('template_directory'); ?>/assets/images/floors/camera.png"/> </a>
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
                <table id="tb-price" class="mobile-hidden">
                    <thead>
                    <td width="20%">会員種別</td>
                    <td width="20%">会費</td>
                    <td>内容</td>
                    </thead>
                    <tr>
                        <td width="20%" class="font-weight-700">一般会員</td>
                        <td width="20%"><span class="font-28">9,980</span> 円 / 月</td>
                        <td class="textleft">格闘技クラスからフィットネスジムまで全て学べます。</td>
                    </tr>
                    <tr>
                        <td width="20%" class="font-weight-700">レディース会員</td>
                        <td width="20%"><span class="font-28">7,980</span> 円 / 月</td>
                        <td class="textleft">レディースクラスを含む全ての格闘技クラス、ダンス系クラスからフィットネスジムまで学べます。<span class="color-yellow">無料体験後一週間以内にご入会されますとレディース会員7,980円が5,980円</span></td>
                    </tr>
                    <tr>
                        <td width="20%" class="font-weight-700">大学生・専門学生</td>
                        <td width="20%"><span class="font-28">8,980</span> 円 / 月</td>
                        <td class="textleft">格闘技クラスからフィットネスジムまで全て学べます。</td>
                    </tr>
                    <tr>
                        <td width="20%" class="font-weight-700">高校生</td>
                        <td width="20%"><span class="font-28">7,980</span> 円 / 月</td>
                        <td class="textleft">格闘技クラスからフィットネスジムまで全て学べます。</td>
                    </tr>
                    <tr>
                        <td width="20%" class="font-weight-700">中学生</td>
                        <td width="20%"><span class="font-28">5,980</span> 円 / 月</td>
                        <td class="textleft">キックボクシングまたはブラジリアン柔術がお好きな週2回学べます。</td>
                    </tr>
                    <tr>
                        <td width="20%" class="font-weight-700">キッズキック</td>
                        <td width="20%"><span class="font-28">5,980</span> 円 / 月</td>
                        <td class="textleft">キッズキックは火、木、金、土のお好きな週2回学べます。 キック、レスリング両方受講される場合は7,980円になります。</td>
                    </tr>
                    <tr>
                        <td width="20%" class="font-weight-700">キッズレスリング</td>
                        <td width="20%"><span class="font-28">3,980</span> 円 / 月</td>
                        <td class="textleft">キック、レスリング両方受講される場合は7,980円になります。</td>
                    </tr>
                    <tr>
                        <td width="20%" class="font-weight-700">フリートレーニング</td>
                        <td width="20%"><span class="font-28">5,980</span> 円 / 月</td>
                        <td class="textleft">営業時間の間6Fトレーニングジムをご利用できます。BULL/PRECOR/BODYMASTERS/世界最高品質のマシンをご堪能ください。</td>
                    </tr>
                    <tr>
                        <td width="20%" class="font-weight-700">外国人（男性）</td>
                        <td width="20%"><span class="font-28">6,980</span> 円 / 月</td>
                        <td class="textleft"><p class="font-16">外国籍の方（男性）の料金です。</p>
                            <p class="font-16">格闘技クラスからフィットネスジムまで全て学べます。</p></td>
                    </tr>
                    <tr>
                        <td width="20%" class="font-weight-700">外国人（女性）</td>
                        <td width="20%"><span class="font-28">5,980</span> 円 / 月</td>
                        <td class="textleft"><p class="font-16">外国籍の方（女性）の料金です。</p>
                            <p class="font-16">格闘技・ダンス系クラスからフィットネスジムまで全て学べます。</p></td>
                    </tr>
                </table>
                <div class="mobile-show">
                    <div class="wraper-table">
                        <p class="p-btn font-weight-700">一般会員</p>
                        <p class="margin-top-10 text-center"><span class="font-28">9,980</span> 円 / 月</p>
                        <p class="margin-top-10">格闘技クラスからフィットネスジムまで全て学べます。</p>

                        <p class="p-btn font-weight-700 margin-top-30">レディース会員</p>
                        <p class="margin-top-10 text-center"><span class="font-28">7,980</span> 円 / 月</p>
                        <p class="margin-top-10">レディースクラスを含む全ての格闘技クラス、ダンス系クラスからフィットネスジムまで学べます。<span class="color-yellow">無料体験後一週間以内にご入会されますとレディース会員7,980円が5,980円</span></p>

                        <p class="p-btn font-weight-700 margin-top-30">大学生・専門学生</p>
                        <p class="margin-top-10 text-center"><span class="font-28">8,980</span> 円 / 月</p>
                        <p class="margin-top-10">格闘技クラスからフィットネスジムまで全て学べます。</p>

                        <p class="p-btn font-weight-700 margin-top-30">高校生</p>
                        <p class="margin-top-10 text-center"><span class="font-28">7,980</span> 円 / 月</p>
                        <p class="margin-top-10">格闘技クラスからフィットネスジムまで全て学べます。</p>

                        <p class="p-btn font-weight-700 margin-top-30">中学生</p>
                        <p class="margin-top-10 text-center"><span class="font-28">5,980</span> 円 / 月</p>
                        <p class="margin-top-10">キックボクシングまたはブラジリアン柔術がお好きな週2回学べます。</p>

                        <p class="p-btn font-weight-700 margin-top-30">キッズキック</p>
                        <p class="margin-top-10 text-center"><span class="font-28">5,980</span> 円 / 月</p>
                        <p class="margin-top-10">キッズキックは火、木、金、土のお好きな週2回学べます。 キック、レスリング両方受講される場合は7,980円になります。</p>

                        <p class="p-btn font-weight-700 margin-top-30">キッズレスリング</p>
                        <p class="margin-top-10 text-center"><span class="font-28">3,980</span> 円 / 月</p>
                        <p class="margin-top-10">キック、レスリング両方受講される場合は7,980円になります。</p>

                        <p class="p-btn font-weight-700 margin-top-30">フリートレーニング</p>
                        <p class="margin-top-10 text-center"><span class="font-28">5,980</span> 円 / 月</p>
                        <p class="margin-top-10">営業時間の間6Fトレーニングジムをご利用できます。BULL/PRECOR/BODYMASTERS/世界最高品質のマシンをご堪能ください。</p>

                        <p class="p-btn font-weight-700 margin-top-30">外国人（男性）</p>
                        <p class="margin-top-10 text-center"><span class="font-28">6,980</span> 円 / 月</p>
                        <p class="margin-top-10">外国籍の方（男性）の料金です。</p>
                        <p class="font-16">格闘技クラスからフィットネスジムまで全て学べます。</p>

                        <p class="p-btn font-weight-700 margin-top-30">外国人（女性）</p>
                        <p class="margin-top-10 text-center"><span class="font-28">5,980</span> 円 / 月</p>
                        <p class="margin-top-10">外国籍の方（女性）の料金です。</p>
                        <p class="font-16">格闘技・ダンス系クラスからフィットネスジムまで全て学べます。</p>

                        <div class="margin-top-50">
                            <p class="font-weight-700">会費はすべて税込価格になります。</p>
                        </div>
                        <div class="margin-top-50">
                            <p class="font-weight-700">オプションサービス</p>
                            <p>・レンタルロッカー：1,000円/月</p>
                            <p>・レンタルバスケット：500円/月</p>
                            <p>・柔術着レンタル：1回 500円</p>
                            <p>・柔術着クリーニング：1回 300円</p>
                        </div>
                    </div>
                </div>
                <div class="price-bottom margin-top-20 mobile-hidden">
                    <div>
                        <p class="font-weight-700">オプションサービス</p>
                        <p>・レンタルロッカー：1,000円/月</p>
                        <p>・レンタルバスケット：500円/月</p>
                        <p>・柔術着レンタル：1回 500円</p>
                        <p>・柔術着クリーニング：1回 300円</p>
                    </div>
                    <div class="mobile-hidden">
                        <p class="font-weight-700">会費はすべて税込価格になります。</p>
                    </div>
                </div>
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
            <div class="row margin-top-30">
                <div class="col-12 col-md-3">
                    <div class="item-flow">
                        <div class="item-top">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/flows/img.png">
                        </div>
                        <div class="flow-text margin-top-10">
                            <p class="font-18 font-weight-700 color-09">ご見学・無料体験申込</p>
                            <p class="font-16 color-09 margin-top-10 line-height-32">メールまたはお電話でご見学・無料体験日時のご予約をしてください。</p>
                        </div>
                        <img class="img-mt" src="<?php bloginfo('template_directory'); ?>/assets/images/flows/mt-white.png">
                    </div>
                </div>
                <div class="col-12 col-md-3 margin-top-20-mobile">
                    <div class="item-flow">
                        <div class="item-top">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/flows/img_1.png">
                        </div>
                        <div class="flow-text margin-top-10">
                            <p class="font-18 font-weight-700 color-09">無料体験</p>
                            <p class="font-16 color-09 margin-top-10 line-height-32">当ジムでは安心してご入会していただく為に無料体験を実施していただきます。</p>
                        </div>
                        <img class="img-mt" src="<?php bloginfo('template_directory'); ?>/assets/images/flows/mt-white.png">
                    </div>
                </div>
                <div class="col-12 col-md-3 margin-top-20-mobile">
                    <div class="item-flow">
                        <div class="item-top">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/flows/img_2.png">
                        </div>
                        <div class="flow-text margin-top-10">
                            <p class="font-18 font-weight-700 color-09">入会登録</p>
                            <p class="font-16 color-09 margin-top-10 line-height-32">無料体験後、当ジム5F受付でクレジットカードか銀行口座を登録し完了です。</p>
                        </div>
                        <img class="img-mt" src="<?php bloginfo('template_directory'); ?>/assets/images/flows/mt-white.png">
                    </div>
                </div>
                <div class="col-12 col-md-3 margin-top-20-mobile">
                    <div class="item-flow">
                        <div class="item-top">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/flows/img_3.png">
                        </div>
                        <div class="flow-text margin-top-10">
                            <p class="font-18 font-weight-700 color-09">ご利用開始</p>
                            <p class="font-16 color-09 margin-top-10 line-height-32">入会登録後、すぐにジムをご利用いただけます。</p>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="row margin-top-20">
                <div class="col-12">
                    <div class="row-q-a row-q">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-q.png"/>
                        <p class="font-20 font-weight-700">どのような施設ですか？</p>
                    </div>
                    <div class="row-q-a row-a">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-a.png"/>
                        <p class="font-16">月額9,980円（女性7,980円）で国内最高級の格闘技施設&トレーナーのもと、ボクシング・キックボクシング・ブラジリアン柔術・総合格闘技が学べるファイティングアカデミー！さらに、肉体改造・身体能力アップにも力を入れており全てのアスリートにも満足のフィットネスジムも完備！女性には「美しく歳を重ねる」をテーマに美しく輝ける女性を目指すダンスフィットネスプログラムをご用意してます！</p>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-12">
                    <div class="row-q-a row-q">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-q.png"/>
                        <p class="font-20 font-weight-700">運動経験がほぼないですが大丈夫ですか？</p>
                    </div>
                    <div class="row-q-a row-a">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-a.png"/>
                        <p class="font-16">もちろん大丈夫です！経験豊富なトレーナーが今まで運動経験のない方にも一人ひとりに合った、無理なく成果を目指せるトレーニング・食事をご提案しますのでご安心ください。</p>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-12">
                    <div class="row-q-a row-q">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-q.png"/>
                        <p class="font-20 font-weight-700">トレーニングジムは指導してもらえるのですか？</p>
                    </div>
                    <div class="row-q-a row-a">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-a.png"/>
                        <p class="font-16">もちろん指導いたします。初心者の方にはパーソナルトレーニング（30分計4回）が無料で受講できますので安心してマシンの使い方、基本フォームを学べます。</p>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-12">
                    <div class="row-q-a row-q">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-q.png"/>
                        <p class="font-20 font-weight-700">入会前に見学することはできますか？</p>
                    </div>
                    <div class="row-q-a row-a">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-a.png"/>
                        <p class="font-16">営業時間の間いつでもご見学できます。また安心して入会していただく為に無料体験をご用意してますので無料体験後、ご入会をご検討ください。</p>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-12">
                    <div class="row-q-a row-q">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-q.png"/>
                        <p class="font-20 font-weight-700">更衣室はありますか？</p>
                    </div>
                    <div class="row-q-a row-a">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-a.png"/>
                        <p class="font-16">男性、女性それぞれの更衣室がございます。また貴重品につきましては、自己管理となりますので予めご了承ください。また格闘技ギアやシューズなどを置いていく方のために、レンタルロッカーをご用意しております。こちらは別途有料となります。 予めご了承ください。</p>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-12">
                    <div class="row-q-a row-q">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-q.png"/>
                        <p class="font-20 font-weight-700">シャワールームはありますか？</p>
                    </div>
                    <div class="row-q-a row-a">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-a.png"/>
                        <p class="font-16">男性、女性それぞれのシャワールームがございます。</p>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-12">
                    <div class="row-q-a row-q">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-q.png"/>
                        <p class="font-20 font-weight-700">ボクシンググローブはレンタルできますか？</p>
                    </div>
                    <div class="row-q-a row-a">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-a.png"/>
                        <p class="font-16">格闘技で使用するグローブやレッグガードはレンタル無料ですので初心者の方でも安心して始められます。また柔術着のレンタルは別途有料となります。予めご了承ください。</p>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-12">
                    <div class="row-q-a row-q">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-q.png"/>
                        <p class="font-20 font-weight-700">トレーニングジムは専用の内履きが必要になりますか？</p>
                    </div>
                    <div class="row-q-a row-a">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-a.png"/>
                        <p class="font-16">外履きの使用はご遠慮ください。運動に適した内履きをご使用ください。一般的に運動に適さない靴（サンダル、ゴム草履、 ヒール、ブーツなど）や裸足での施設利用は禁止とさせていただきます。</p>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-12">
                    <div class="row-q-a row-q">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-q.png"/>
                        <p class="font-20 font-weight-700">駐車場、駐輪場はありますか？</p>
                    </div>
                    <div class="row-q-a row-a">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-a.png"/>
                        <p class="font-16">駐車場はジム近くのコインパーキングをご利用ください。
                            バイク、自転車の方はビル敷地内に若干、停めれますが数に限りがあります。予めご了承ください。</p>
                    </div>
                </div>
            </div>
           <p class="margin-top-30">その他の質問はお問い合わせください。</p>
            <a href="/free-trial/" style="width: 220px;" class="button margin-top-30"><span>&nbsp;</span> お問い合わせフォーム</a>
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

  RODEOS.home();
</script>
<style>
    .ui-dialog{
        position: fixed;
        top: 0px !important;
        left: 0px !important;
        height: 100% !important;
    }
</style>
<?php get_footer(); ?>

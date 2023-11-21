<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Springs
 */

get_header();
?>
<!-- Banner -->
<section id="banner">
    <div class="container-c">
        <div class="box">
            <div class="top">
                <div class="card left">
                    <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-1.jpg" alt="Card image" data-aos="fade-in">
                    <div class="card-body">
                        <h4 class="card-title title-base">豊かな未来への源泉。</h4>
                        <p class="card-text">未来への飛躍を支える投資や
                            ビジネスのマッチングなど、
                            あなたの豊かな未来への<br>お手伝いいたします。</p>
                    </div>
                </div>
                <div class="right">
                    <h4 class="text"><span class="up">The <span class="u">W</span>ellspring to</span>
                        <span class="down">an Abundant <span class="u">F</span>uture.</span>
                    </h4>
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-2.jpg" alt="" class="img" data-aos="fade-in">
                </div>
            </div>
            <div class="bottom">
                <div class="l">
                    <span class="title">NEWS</span>
                </div>

                <div class="enable-animation">
                    <div class="marquee">
                        <div class="marquee__content">
                            <?php
                            query_posts(array(
                                'post_type' => 'news'
                            )); ?>
                            <?php
                            while (have_posts()) : the_post(); ?>
                                <span><span class="date"><?php echo get_the_date('Y.m.d'); ?></span> <span class="text"><?php the_title(); ?></span></span>
                            <?php endwhile;
                            ?>
                        </div>

                        <div class="marquee__content">
                            <?php
                            query_posts(array(
                                'post_type' => 'news'
                            )); ?>
                            <?php
                            while (have_posts()) : the_post(); ?>
                                <span><span class="date"><?php echo get_the_date('Y.m.d'); ?></span> <span class="text"><?php the_title(); ?></span></span>
                            <?php endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impress -->
<section id="impress">
    <div class="content">
        <h3 class="title title-base">あなたに寄り添い、<span>企業に寄り添い、
                人々に感動を。</span></h3>
        <div class="text">
            人と人、ビジネスとビジネス。私達は、常にお客様の立場で考え、win-winの関係を構築してまいります。ご紹介した人や企業がご満足いただけるよう、市場の動向や最先端の情報を取り入れながら、各ジャンルの専門家と共に、お客様がより大きく成功していく為のサポートをし、日々進化する、最良のビジネス外交パートナーであり続けたいと願っております。今後とも、お客様と“ともに”発展する、理念をベースに、人々を幸せにし、喜んで頂ける事業で社会貢献できるよう挑戦し続けてまいりますので、変わらぬご支援とご指導を賜りますよう、よろしくお願いいたします。
        </div>
    </div>
    <div class="list">
        <h4 class="title-box">代表　　沼田さくら</h4>

        <div class="group">
            <div class="left">
                <ul class="lt">
                    <li class="lt-item">
                        <div class="title"></div>
                        <div class="text">宮城県仙台市出身</div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2003年</div>
                        <div class="text">バレーボール宮城選抜選手</div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2005年</div>
                        <div class="text">親元を離れ名門校へ特待入学</div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2008年</div>
                        <div class="text">古川学園高校卒業</div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2008年</div>
                        <div class="text">株式会社パイオニア入社
                            パイオニアレッドウィングス所属</div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2010年</div>
                        <div class="text">オリンピック競技アジア大会日本代表</div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2013年</div>
                        <div class="text">バレーボール選手を引退</div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2013年</div>
                        <div class="text">ミスワールド 準グランプリ獲得</div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2014年</div>
                        <div class="text">エイベックス株式会社
                            エイベックススポーツ所属 文化人</div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2013-2014年</div>
                        <div class="text">バレーボール協会　
                            Vリーグ 排球大使に就任
                        </div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2018年</div>
                        <div class="text">不動産コンサルティング会社 役員に就任
                            地主様との交渉や売買営業を担当</div>
                    </li>
                    <li class="lt-item">
                        <div class="title">2021年</div>
                        <div class="text">Springs LLC 設立 代表取締役に就任</div>
                    </li>
                </ul>
            </div>
            <div class="right">
                <div class="img-box js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-3.png" alt="" class="img">
                </div>
                <div class="text">趣味
                    不動産巡り、ゴルフ、自然巡り、ワイン、グル
                    メ会、お料理教室の主宰、ご縁繋ぎ
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div class="wrapper"> -->
<!-- Image advertise -->
<div class="advertise">
    <div class="container-c js-parallax">
        <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-4.jpg" alt="">
    </div>
</div>

<!-- service -->
<section id="service">
    <div class="container-c">
        <div class="box-title">
            <h4 class="title title-base">Springsで、できること。</h4>
            <div class="desc">SERVICE</div>
        </div>

        <div class="list">
            <div class="item">
                <div class="content">
                    <h4 class="text-rotate">SERVICE 01</h4>
                    <h4 class="title">不動産運用<span class="v1">（土地・建物の売買）</span></h4>
                    <p class="desc">土地・建物の最適な運用をサポート。購入から売却まで、一貫して心を込めてアドバイス致します。

                        提携不動産会社：<a href="https://www.kencorp.co.jp/">https://www.kencorp.co.jp/</a></p>
                </div>
                <div class="box-img js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-5.jpg" alt="" class="img">
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <h4 class="text-rotate">SERVICE 02</h4>
                    <h4 class="title">事業売買</h4>
                    <p class="desc">事業のM&Aに関する豊富な知識と経験を活かし、売買の全プロセスをサポート。win-winの関係構築を目指します。</p>
                </div>
                <div class="box-img js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-6.jpg" alt="" class="img">
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <h4 class="text-rotate">SERVICE 03</h4>
                    <h4 class="title">ヘルスケア・<span>フェムテックサポート</span></h4>
                    <p class="desc">医療機関・美容クリニック・会員制メディカルクラブのご紹介
                        健康でありたい、いつまでも美しくありたい。そんな万人の願いを、私共のネットワークを通じてサポートさせていただきます。
                        Springsのお客様に対して、健康や美容に関する様々な情報をご提供します。また必要に応じて、提携先の医療機関や美容クリニック等をご紹介させていただきます。

                        提携クリニック：<a href="https://senshin-clinic.com/">https://senshin-clinic.com/</a></p>
                </div>
                <div class="box-img js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-7.jpg" alt="" class="img">
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <h4 class="text-rotate">SERVICE 04</h4>
                    <h4 class="title">アスリート支援</h4>
                    <p class="desc">アスリートのスポンサー営業担当、セカンドキャリアのご相談サポート、人脈を活かしたコンサルティングをさせていただきます。</p>
                </div>
                <div class="box-img js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-8.jpg" alt="" class="img">
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <h4 class="text-rotate">SERVICE 05</h4>
                    <h4 class="title">資産継承</h4>
                    <p class="desc">あなたの大切な資産を次世代へしっかりと継承するためのサポートを致します。未来へのブリッジとなる継承計画を一緒に考えます。</p>
                </div>
                <div class="box-img js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-9.jpg" alt="" class="img">
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <h4 class="text-rotate">SERVICE 06</h4>
                    <h4 class="title">転職支援、<span>リタイアプラン</span></h4>
                    <p class="desc">一人ひとりのキャリアや夢を尊重し、転職やリタイアに向けての最適なプランを共に考えます。</p>
                </div>
                <div class="box-img js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-10.jpg" alt="" class="img">
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <h4 class="text-rotate">SERVICE 07</h4>
                    <h4 class="title">不動産、<span>M&Aコンサルティング</span></h4>
                    <p class="desc">不動産とM&Aの両方に関する深い知識で、資産の最適な運用や事業の拡大戦略をアドバイス致します。

                        提携：<a href="https://bizhub.co.jp/">https://bizhub.co.jp/ <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/biz-hub.png" alt=""></a></p>
                </div>
                <div class="box-img js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-11.jpg" alt="" class="img">
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <h4 class="text-rotate">SERVICE 08</h4>
                    <h4 class="title">社会貢献活動</h4>
                    <p class="desc">社会への恩返しを大切にし、様々な社会貢献活動を行っています。共に社会をより良くするための活動を展開してまいります。</p>
                </div>
                <div class="box-img js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-12.jpg" alt="" class="img">
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <h4 class="text-rotate">SERVICE 09</h4>
                    <h4 class="title">美術品、ビンテージ<span>ワインのご売却</span></h4>
                    <p class="desc">美術品やワインの鑑賞を愛する心で、最適な売却先をご提案。高価買取を目指し、お手伝い致します。

                        提携：<a href="https://www.art-technologies.co.jp/">https://www.art-technologies.co.jp/</a></p>
                </div>
                <div class="box-img js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-13.jpg" alt="" class="img">
                </div>
            </div>
            <div class="item">
                <div class="content">
                    <h4 class="text-rotate">SERVICE 10</h4>
                    <h4 class="title">都市開発事業</h4>
                    <p class="desc">都市の機能を高めながら、住民の生活の質を向上させるために、住宅、商業施設、公共空間、緑地、物流拠点、物流用地などの開発に取り組んでいます。</p>
                </div>
                <div class="box-img js-parallax">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-14.jpg" alt="" class="img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company profile -->
<section id="company">
    <div class="container-c">
        <h4 class="title title-base">会社概要</h4>
        <div class="table-div">
            <div class="list">
                <div class="item">
                    <div class="title">会社名</div>
                    <div class="desc">Springs LLC</div>
                </div>
                <div class="item">
                    <div class="title">代表名</div>
                    <div class="desc">代表取締役　沼田　さくら</div>
                </div>
                <div class="item">
                    <div class="title">住所</div>
                    <div class="desc">〒104-0061　<br>東京都中央区銀座７丁目17番2号<br>アーク銀座ビルディング6F</div>
                </div>
                <div class="item">
                    <div class="title">事業</div>
                    <div class="desc-ul">
                        <ul class="ul-custom">
                            <li>不動産売買コンサルティング</li>
                            <li>都市開発事業</li>
                            <li>﻿事業売買、M&Aコンサルティング</li>
                            <li>﻿資産継承アドバイス</li>
                            <li>勇退・リタイアプランニング</li>
                            <li>美術品・ビンテージワインの売買コンサルティング</li>
                            <li>アスリート支援</li>
                            <li>﻿社会貢献活動</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact us -->
<section id="contact">
    <div class="container-c">
        <div class="box">
            <div class="box-title">
                <h4 class="title title-base">お問合わせ</h4>
                <div class="desc">弊社のホームページをご覧いただき、<br>誠にありがとうございます。
                    ご質問・ご相談・お見積りなど、<br>お気軽にご連絡ください。
                </div>
                <ul class="ul">
                    <li>必要事項にご記入いただき、「送信する」を押してください。</li>
                    <li>３営業日以内に返信させていただきます。</li>
                </ul>
            </div>

            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="ece0c60" title="contact-us"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

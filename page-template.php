<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include_once 'com_php/com_meta.php'; //css等メタ情報
  ?>
  <!-- <?php include_once 'com_php/com_analytics.php'; //アナリティクス
        ?> -->
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <?php include_once 'com_php/com_header.php'; //ヘッダー
    ?>

    <!--
* =========================
* main
* =========================
-->
    <main>
      <!--
* =========================
* mv
* =========================
-->
      <div class="mv_banner white" id="js-topContents">
        <div class="mv__contents">
          <div class="inner">
            <h2 class="mv__ttl w-black">
              <span class="ja" style="color: black;">TEMPLATE</span><!-- /.ja -->
              <!-- <span class="en">TEMPLATE</span> -->
              <!-- /.en -->
              <span class="sm" style="color:blue;">テンプレート</span>
            </h2><!-- /.mv__ttl -->
          </div><!-- /.inner -->
        </div><!-- /.mv__contents -->
        <div class="">
          <div class="" id="js-mv">
            <!-- swiper-slide  -->
            <div class="mv_banner_slide" style="height: 150px; background: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/template/topBanner.jpg) no-repeat top center/cover;" data-desc="官民連携事業（PPP事業）"></div><!-- / -->
          </div>
          <!-- data-descの内容表示用 -->
          <p id="js-desc" class="mv__desc lg">&nbsp;</p><!-- /.mv__desc -->
        </div>
      </div><!-- /mv  -->

      <!--
* =========================
* sec01
* =========================
-->

      <section class="sec0_bc">
        <div class="sec01_bc">
          <span>トップ</span> ＞ <span>Template</span>
        </div>
      </section>



      <section class="sec01">
        <div class="inner_part">
          <div class="sec01_parent">
            <!-- 1st image -->
            <div class="clm_border01">
              <div class="clm__contents content_alignment wow fadeInUp" data-wow-delay=".3s">
                <h3 class="sm1 w-black xlg lh-narrow sec01__description">施設管理運営事業</h3><!-- /.w-black xxxlg -->
                <p class="xs" style="font-weight: normal;">ミズノグループでは、PPP（Public Private Partnership）の指定管理
                  者制度やPFI（Private Finance Initiative）の積極的な活用をサポートし
                  多くの運営実績、施工実績や成功事例を残しております。</p><!-- /.md lh-wide -->
                <div class="sec01_btns" style="width: 90%; margin-bottom:10px !important;">
                  <a href="" class="btn_noline">PPP 事業について</a><!-- /.btn -->
                  <a href="" class="btn_noline sec01_btn01">直営店舗ブランドについて</a><!-- /.btn -->
                </div>
              </div><!-- /.clm__contents -->
              <div class="clm__img wow fadeInUp"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/template/sec02-image1.png" alt="これからの健康づくりと地域のにぎわいづくりのために" width="132" height="130" loading="lazy">
              </div><!-- /.clm__img -->
            </div><!-- /.clm -->
            <div class="sec01_bakground01"></div>
          </div>

          <!-- 2nd image -->
          <div class="sec01_parent02">
            <div class="clm_border">
              <div class="clm__img wow fadeInUp"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/template/sec02-image2.png" alt="これからの健康づくりと地域のにぎわいづくりのために" loading="lazy">
              </div><!-- /.clm__img -->
              <div class="clm__contents content_alignment01 wow fadeInUp" data-wow-delay=".3s">
                <h3 class="sm1 w-black xlg lh-narrow sec01__description02">施設管理運営事業</h3><!-- /.w-black xxxlg -->
                <p class="xs" style="font-weight: normal;">ミズノグループでは、PPP（Public Private Partnership）の指定管理 者制度やPFI（Private Finance Initiative）の積極的な活用をサポートし 多くの運営実績、施工実績や成功事例を残しております。</p><!-- /.md lh-wide -->
                <a href="" class="btn_noline sec01_btn  is-center" style="z-index:10;">詳しくはこちら</a><!-- /.btn -->
              </div><!-- /.clm__contents -->
            </div><!-- /.clm -->
            <div class="sec01_bakground02"></div>
          </div>
        </div><!-- /.inner -->
      </section><!-- /.sec01 -->

      <!--
* =========================
* sec02
* =========================
-->
      <section class="sec02 black slideSection">
        <div class="inner">

          <div class="sec02_title_content">
            <h3 class="w-bold xxxlg">セクションタイトル</h3><!-- /.underline -->
            <h3 class="w-black xxlg lh-narrow sec02__desc">スポーツを通じ、歓びや楽しさ、<br> 感動を生み豊かで快適な生活に貢献する。</h3><!-- /.w-black xxxlg -->
            <p class="title_content" style="letter-spacing: -1px;">ミズノスポーツサービス株式会社　代表取締役</p>
            <h3 class="w-black xlg lh-narrow sec02__desc" style="margin-top: 8px">薬師寺　洋彰</h3>
          </div><!-- /.clm__contents -->
        </div><!-- /.inner -->
        <div class="sec02_content bg-primary white update wow fadeInUp" data-wow-delay=".3s">
          <p class="xs">スポーツは人々に歓びや楽しさ、感動を与える力があります。また人と人のつながりや達成感、明日への
            活力、健康的な日々をもたらしてくれるなど、人々がより豊かで快適な生活を送るために重要な役割を担
            うものでもあります。<br>
            私どもミズノスポーツサービス株式会社はミズノ株式会社100％出資子会社で公共スポーツ施設（指定
            管理、運営受託、PFI）及び直営フットサルコート、フィットネス施設の管理運営を主な事業とし、スポー
            ツ教室・スクール、スポーツイベント・大会、健康・体力づくりイベント等の企画運営事業や施設設備の
            維持管理業務等にも取り組んでおります。<br>
            それらの活動を通じ、人々がよりよくスポーツや健康のための活動に、持続的に取り組んでいただける
            よう、『スポーツをするための場（スポーツ施設）』、『スポーツをしてみたいと思う人にきっかけ作りに
            なるような教室・スクールなどの機会』、『様々なスポーツ・健康に対する要望に応えるプログラムなど
            のサービス』をサスティナブルに提供し、皆さんの豊かで快適なスポーツライフを応援してまいります
          </p>
        </div>
      </section><!-- /.sec02 -->


      <!--
* =========================
* sec03
* =========================
-->
      <section class="sec03">
        <div class="inner">
          <div class="wrap">
            <h3 class="w-bold xxlg" style="text-align: center; margin: 3% 0">セクションタイトル</h3><!-- /.underline --><!-- /.en -->
            <ul class="update">
              <li>
                <a href="">
                  <h3 class="xs" style="font-weight:normal ;width: 50%;">社名</h3><!-- /.update__ttl w-bold -->
                  <h3 class="topic_view">ミズノスポーツサービス株式会社 薬師寺</h3>
                </a>
              </li>
              <li>
                <a href="">
                  <h3 class="xs" style="font-weight:normal ;width: 50%;">代表取締役</h3><!-- /.update__ttl w-bold -->
                  <h3 class="topic_view xs">薬師寺 洋彰</h3>
                </a>
              </li>
              <li>
                <a href="">
                  <h3 class="xs" style="font-weight:normal ;width:50%;">創業</h3><!-- /.update__ttl w-bold -->
                  <h3 class="topic_view xs">1989 年4 月1 日</h3>
                </a>
              </li>
              <li>
                <a href="">
                  <h3 class="xs" style="font-weight:normal ;width:50%;">資本金</h3><!-- /.update__ttl w-bold -->
                  <h3 class="topic_view xs">1,000 万円（資本構成：ミズノ株式会社100%）</h3>
                </a>
              </li>
              <li>
                <a href="">
                  <h3 class="xs" style="font-weight:normal ;width:50%;">売上高</h3><!-- /.update__ttl w-bold -->
                  <h3 class="topic_view xs">65 億2,321 万円(2021 年度)</h3>
                </a>
              </li>
              <li>
                <a href="">
                  <h3 class="xs" style="font-weight:normal ;width:50%;">事業内容</h3><!-- /.update__ttl w-bold -->
                  <div class="topic_view">
                    <!-- 1st point -->
                    <div class="sec09_line_point sec03_point">
                      <!-- <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                      </div> -->
                      <span class="sec09_blt_pnt xs">◇ 施設管理運営事業 <br> <span style="margin-left: 1;">〔官民連携事業（PPP 事業）・直営店舗ブランド〕</span>
                      </span>
                    </div>
                    <!-- 2nd point -->
                    <div class="sec09_line_point sec03_point">
                      <!-- <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                      </div> -->
                      <span class="sec09_blt_pnt xs">◇ スクール事業</span>
                    </div>
                    <!-- 3rd point -->
                    <div class="sec09_line_point sec03_point">
                      <!-- <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                      </div> -->
                      <span class="sec09_blt_pnt xs">◇ プログラム企画・開発・販売事業</span>
                    </div>
                    <!-- 4th point -->

                    <div class="sec09_line_point sec03_point">
                      <!-- <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                      </div> -->
                      <span class="sec09_blt_pnt xs">◇ プログラム企画・開発・販売事業</span>
                    </div>
                    <!-- 5th point -->
                    <div class="sec09_line_point sec03_point">
                      <!-- <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                      </div> -->
                      <span class="sec09_blt_pnt xs">◇ フットサル施設等土地活用事業</span>
                    </div>

                  </div>
                </a>
              </li>
              <li>
                <a href="">
                  <div style="display: flex; justify-content: space-between;">
                    <div class="map_content">
                      <h3 class="xs" style="font-weight:normal ;">所在地</h3><!-- /.update__ttl w-bold -->
                    </div>
                    <div class="map-image_block xs" style="width: 100%;">
                      <h3> 大阪本社 </h3>
                      <div class="map_img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/template/map1.jpg" alt="" width="202" height="130"></div>
                      <!-- 1st point -->
                      <div class="sec09_line_point sec03_point">
                        <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                        </div>
                        <span class="sec09_blt_pnt"> 御堂筋線「本町」で中央線に乗り換え「コスモスクエア」<br> 下車・徒歩10 分</span>
                      </div>
                      <!-- 2nd point -->
                      <div class="sec09_line_point sec03_point">
                        <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                        </div>
                        <span class="sec09_blt_pnt"> 四ツ橋線「住之江公園」でニュートラムに乗り換え「中ふ <br>
                          頭」下車・徒歩5 分</span>
                      </div>
                      <!-- 3rd point -->
                      <div class="sec09_line_point sec03_point">
                        <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                        </div>
                        <span class="sec09_blt_pnt">「コスモスクエア」・「トレードセンター前」下車・徒歩10分</span>
                      </div>
                      <!-- map 2 -->

                      <h3 class="sec03_second_title"> 東京本社</h3>
                      <div class="map_img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/template/map2.jpg" alt="" width="132" height="130"></div>

                      <!-- 1st point -->
                      <div class="sec09_line_point sec03_point">
                        <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                        </div>
                        <span class="sec09_blt_pnt"> JR 中央線・総武線「御茶ノ水」下車・徒歩6 分</span>
                      </div>
                      <!-- 2nd point -->
                      <div class="sec09_line_point sec03_point">
                        <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                        </div>
                        <span class="sec09_blt_pnt">千代田線「新御茶ノ水」下車・徒歩4 分</span>
                      </div>
                      <!-- 3rd point -->
                      <div class="sec09_line_point sec03_point">
                        <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                        </div>
                        <span class="sec09_blt_pnt">半蔵門線「神保町」下車・徒歩6 分</span>
                      </div>
                      <!-- 4th point -->
                      <div class="sec09_line_point sec03_point">
                        <div style="width: 10px; margin-top:5px; margin-right:5px; border-radius: 50%; background-color: black;height: 10px;">
                        </div>
                        <span class="sec09_blt_pnt">都営新宿線「小川町」下車・徒歩7 分</span>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul><!-- /.update -->
          </div><!-- /.wrap -->
          <section class="sec04_btns">
            <div class="inner update wow fadeInUp" data-wow-delay=".2s">
              <a href="" class="btn sec04_btn is-center">運営施設検索</a><!-- /.btn -->
              <a href="" class="btn sec04_btn ls-center">スポーツ施設事業全般に 関するお問い合わせ</a><!-- /.btn -->
            </div><!-- /.inner -->
          </section><!-- /.sec04 -->
        </div><!-- /.inner -->
      </section><!-- /.sec03 -->


      <!--
* =========================
* sec04
* =========================
-->

      <!--
* =========================
* sec05
* =========================
-->

      <section class="sec05">
        <div class="inner update wow fadeInUp" data-wow-delay=".2s">
          <a href="" class="btn sec04_btn is-center active">タブ 01 </a><!-- /.btn -->
          <a href="" class="btn sec04_btn is-center inactive">タブ02</a><!-- /.btn -->
          <a href="" class="btn sec04_btn is-center inactive">タブ03</a><!-- /.btn -->
        </div><!-- /.inner -->
        <div class="sec05_content">
          <div class="sec05_contents">

            <h4 class="sec05_title">経営理念</h4>
            <p class="sec05_content_details lg">より良いスポーツ品とスポーツの振興を通じて社会に貢献する</p>
            <h4 class="sec05_title">事業理念</h4>
            <p class="sec05_content_details lg">より楽しいスポーツライフ実現に向け『機会・場・サービス』の提供を行う</p>
          </div>
        </div>
        <div class="sec06 sec06_top">
        <div class="sec06_title">
          <h4 class="sec06_title_content center"><span class="md">ミズノグループの総合力による「機会・場・サービス」の提供</span></h4>
          <div class="sub_title">
            <h4 class="sec06_sub_title">健康づくりと地域のにぎわいづくり</h4>
          </div>
          <!-- para 1 -->
          <div class="sec06_para1">
            <h4 class="sec06_para_title">
              「つたえる」：親切で丁寧なインフォメーション活動・わかりやすい情報配信
            </h4>
            <div class="sec06_content_image">
              <div class="sec06_para">私たちは、スポーツ施設の受付や窓口、電話等での親切で丁寧なインフォメーション 活動や、施設専用ホームページやSNS などのウェブ媒体や、広報誌、施設案内や教室・イベントのパンフレットなど紙媒体、そして看板・表示物や掲示板、デジタルサイネージなどサイン・ディスプレイ表示によるわかりやすい情報配信に努め、私たちが提供する「機会・場・サービス」を的確につたえます。<br> 私たちは、スポーツ施設の受付や窓口、電話等での親切で丁寧なインフォメーション 活動や、施設専用ホームページやSNS などのウェブ媒体や、広報誌、施設案内や教室・イベントのパンフレットなど紙媒体、そして看板・表示物や掲示板、デジタルサイネージなどサイン・ディスプレイ表示によるわかりやすい情報配信に努め、私たちが提供する「機会・場・サービス」を的確につたえます。</div>
              <div class="sec06_para_image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/template/stadium.jpg" width="200px" alt=""></div>
            </div>
          </div>
          <!-- para 2 -->
          <div class="sec06_para2">
            <h4 class="sec06_para_title">
              「つたえる」：親切で丁寧なインフォメーション活動・わかりやすい情報配信
            </h4>
            <div class="sec06_content_image">
              <div class="sec06_para">私たちは、スポーツ施設の受付や窓口、電話等での親切で丁寧なインフォメーション 活動や、施設専用ホームページやSNS などのウェブ媒体や、広報誌、施設案内や教室・イベントのパンフレットなど紙媒体、そして看板・表示物や掲示板、デジタルサイネージなどサイン・ディスプレイ表示によるわかりやすい情報配信に努め、私たちが提供する「機会・場・サービス」を的確につたえます。<br> 私たちは、スポーツ施設の受付や窓口、電話等での親切で丁寧なインフォメーション 活動や、施設専用ホームページやSNS などのウェブ媒体や、広報誌、施設案内や教室・イベントのパンフレットなど紙媒体、そして看板・表示物や掲示板、デジタルサイネージなどサイン・ディスプレイ表示によるわかりやすい情報配信に努め、私たちが提供する「機会・場・サービス」を的確につたえます。</div>
              <div class="sec06_para_image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/template/stadium2.jpg" width="200px" alt=""></div>
            </div>
          </div>
        </div>
</div>
      </section><!-- /.sec04 -->

      <!--
* =========================
* sec06
* =========================
-->


      <!--
* =========================
* sec07
* =========================
-->

      <section class="sec07">
        <div class="sec07_background01">
          <div class="sec07_content01_image01">
            <div class="sec07_img01">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/template/business.png" style="object-position: 50% 50%;" alt="" width="250px">
            </div>
            <div class="sec07_content01 inner update wow fadeInUp" data-wow-delay=".3s">
              <h4>顧客満足を追求する 高品質なサービスの提供</h4>
              <p class="sec07_para">
                私たちは常に顧客満足を追求し、私たちが管理運営する施設をまた利用したいと感じていただけ <br>るような、親切丁寧で気持ちの良い接客や目配り・気配り・心配りの対応を実践します。私たちは<br>ミズノグループの一員として「ミズノホスピタリティ宣言」を掲げ、高いCS（Customer Satisfac-<br>tion）向上を推進することで高品質なサービスを提供します。
              </p>
            </div>
          </div>
        </div>
        <div class="sec07_background02">

          <div class="sec07_content02_image02">
            <div class="sec07_img02">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/template/business.png" style="object-position: 50% 50%;" alt="" width="250px">
            </div>
            <div class="sec07_content02 inner update wow fadeInUp" data-wow-delay=".3s">
              <h4>様々な施設で必要な項目・<br>
                様々な役割の人材に応じた<br>
                教育制度の確立</h4>
              <p class="sec07_para">
                私たちはスポーツ施設等の管理運営で必要な項目を体系化し、人材（階層別）の役割に応じて、<br>意識・業務スキル・運動指導等の専門知識を高める教育制度を確立しています。研修方法につい<br>ても講師による集合研修（対面・ウェブ形式）やOJT に加え、個別学習を促すE-Learning や動<br>画教材の配信等を充実させています。
              </p>
            </div>
          </div>
        </div>
      </section>

      <!--
* =========================
* sec08
* =========================
-->

      <section class="sec08">
        <div class="sec08_details inner">
          <div class="wrap">
            <ul class="sec08_list wow fadeInUp" data-wow-delay=".2s">
              <li>
                <a href="">
                  <h3 class="sec08_list_text update__ttl w-bold accent">2022.03.12<!-- /.update__ttl w-bold -->
                    <span>&nbsp&nbsp&nbsp</span><span style="color: blue;">Web サイトを公開しました</span>
                  </h3>
                </a>
              </li>
            </ul><!-- /.update -->
            <ul class="sec08_list wow fadeInUp" data-wow-delay=".2s">
              <li>
                <a href="">
                  <h3 class="sec08_list_text update__ttl w-bold accent">2022.03.12<!-- /.update__ttl w-bold -->
                    <span>&nbsp&nbsp&nbsp</span><span style="color: blue;">Web サイトを公開しました</span>
                  </h3>
                </a>
              </li>
            </ul><!-- /.update -->
            <ul class="sec08_list wow fadeInUp" data-wow-delay=".2s">
              <li>
                <a href="">
                  <h3 class="sec08_list_text update__ttl w-bold accent">2022.03.12<!-- /.update__ttl w-bold -->
                    <span>&nbsp&nbsp&nbsp</span><span style="color: blue;">Web サイトを公開しました</span>
                  </h3>
                </a>
              </li>
            </ul><!-- /.update -->
            <ul class="sec08_list wow fadeInUp" data-wow-delay=".2s">
              <li>
                <a href="">
                  <h3 class="sec08_list_text update__ttl w-bold accent">2022.03.12<!-- /.update__ttl w-bold -->
                    <span>&nbsp&nbsp&nbsp</span><span style="color: blue;">Web サイトを公開しました</span>
                  </h3>
                </a>
              </li>
            </ul><!-- /.update -->
            <ul class="sec08_list wow fadeInUp" data-wow-delay=".2s">
              <li>
                <a href="">
                  <h3 class="sec08_list_text update__ttl w-bold accent">2022.03.12
                    <span>&nbsp&nbsp&nbsp</span><span style="color: blue;">Web サイトを公開しました</span>
                  </h3>
                </a>
              </li>
            </ul><!-- /.update -->
          </div><!-- /.wrap -->
          <div class="sec08_pages">
            <span class="page active">1</span>
            <span class="page">2</span>
            <span class="page">3</span>
            <span class="page">4</span>
            <span class="page">5</span>
            <span class="page_next">Next</span>

          </div>
        </div><!-- /.inner -->
      </section><!-- /.sec03 -->

      <!--
* =========================
* sec09
* =========================
-->

      <section class="sec09">
        <div class="sec09_details">
          <div class="sec09_date">
            <p>2023/12/31</p>
          </div>
          <!--  5 title -->
          <div class="sec09_title">

            <div class="sec09_title" style="letter-spacing: -1px;">

              <p style="font-size: 36px; padding: 2% 0; font-weight: bolder;">投稿記事タイトルが入ります</p>
              <p style="font-size: 30px; padding: 1% 0; font-weight: bold;">見出しが入ります
              <p>
              <p style="font-size: 25px; padding: 1% 0; font-weight: bold;">見出しが入ります</p>
              <p style="font-size: 22px; padding: 1% 0; font-weight: bold;">見出しが入ります</p>
              <p style="font-size: 18px; padding: 1% 0; font-weight: bold;">見出しが入ります</p>
            </div>
            <!-- para -->

            <div class="sec09_para">
              <p class="sec09_content">
                テキストが入りますテキストが入ります。テキストが入りますテキストが入ります。テキストが入りますテキストが入ります。テキストが入りますテキストが入ります。テキストが入りますテキストが入ります。テキストが入りますテキストが入ります。テキストが入りますテキストが入ります。テキストが入りますテキストが入ります。テキスト
              </p>
            </div>

            <!-- bullet poin content -->

            <div class="sec09_list">
              <div class="sec09_line_point">
                <div class="line-height">
                  &#x2022;<span class="sec09_blt_pnt"> リストデザイン</span>
                </div>
                <!-- <span class="sec09_blt_pnt"> リストデザイン</span> -->
              </div>
              <div class="sec09_line_point">
                <div class="line-height">
                  &#x2022;<span class="sec09_blt_pnt"> リストデザイン</span>
                </div>s
                <!-- <span class="sec09_blt_pnt"> リストデザイン</span> -->
              </div>
              <div class="sec09_line_point">
                <div class="line-height">
                  &#x2022;<span class="sec09_blt_pnt"> リストデザイン</span>
                </div>
                <!-- <span class="sec09_blt_pnt"> リストデザイン</span> -->
              </div>
              <div class="sec09_line_point">
                <div class="line-height">
                  &#x2022;<span class="sec09_blt_pnt"> リストデザイン</span>
                </div>
                <!-- <span class="sec09_blt_pnt"> リストデザイン</span> -->
              </div>
            </div>

            <!-- number para list -->
            <div class="sec09_list">
              <p class="w-bold"><span class="sec09_listpage ">1</span>数字付きリスト</p>
              <p class="w-bold"><span class="sec09_listpage ">2</span>数字付きリスト</p>
              <p class="w-bold"><span class="sec09_listpage ">3</span>数字付きリスト</p>
              <p class="w-bold"><span class="sec09_listpage ">4</span>数字付きリスト</p>
            </div>

            <!-- table -->

            <div class="sec09_table">
              <div class="sec09_table_details">
                <table>
                  <tr>
                    <th>テーブルタイトル</th>
                    <th>テーブルタイトル</th>
                    <th>テーブルタイトル</th>
                    <th>テーブルタイトル</th>
                  </tr>
                  <tr>
                    <td class="first_row">テーブルタイトル</td>
                    <td>テーブルタイトル</td>
                    <td>テーブルタイトル</td>
                    <td>テーブルタイトル</td>
                  </tr>
                  <tr>
                    <td class="first_row">テーブルタイトル</td>
                    <td>テーブルタイトル</td>
                    <td>テーブルタイトル</td>
                    <td>テーブルタイトル</td>
                  </tr>
                  <tr>
                    <td class="first_row">テーブルタイトル</td>
                    <td>テーブルタイトル</td>
                    <td>テーブルタイトル</td>
                    <td>テーブルタイトル</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
      </section>

      <!--
* =========================
* sec10
* =========================
-->

      <section class="sec10">
        <div class="sec10_details">
          <h3 class="w-black xxlg lh-narrow sec10__desc">資料ダウンロード</h3>
          <div class="sec10_pdf_list">
            <div class="sec10_pdf01">
              <div class="pdf"><i class="fa-solid fa-file-pdf" style=" padding-right: 10px; font-size:24px ; color: #f24a4a;"></i> ファイル名.pdf</div>
              <div class="button"><a href="" class=" sec10_btn">ダウンロード</a></div>
            </div>
            <div class="sec10_pdf02">
              <div class="pdf"><i class="fa-solid fa-file-pdf" style="  padding-right: 10px; font-size:24px ; color: #f24a4a;"></i> ファイル名.pdf</div>
              <div class="button"><a href="" class=" sec10_btn">ダウンロード</a></div>
            </div>
          </div>
          <div class="sec10_button">
            <a href="" class="sec10_btn_md is_center">資料ダウンロード</a>
          </div>
        </div>
      </section>


    </main>
    <?php include_once 'com_php/com_footer.php'; //フッター
    ?>

  </div><!-- /wrapper -->
  <?php include_once 'com_php/com_footer_js.php'; //JS
  ?>
  <?php wp_footer(); ?>
</body>

</html>
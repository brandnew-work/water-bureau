<?php
get_header();

$about_list = [
  [
    'title' => '水道局指定<wbr>工事店とは？',
    'img'   => get_theme_file_uri('/assets/about-img-01.jpg'),
    'desc'  => '水道局指定工事店だから、確かな技術と安心保証。水道局から正式に指定を受けた工事店です。自治体が定める厳しい基準（技術・資格・設備・法令遵守など）をクリアした業者だけが取得できるものとなり、水道工事法に基づいた確かな施工と、適正な料金体制が保証されています。',
  ],
  [
    'title' => '工事賠償責任保険<wbr>加入店とは？',
    'img'   => get_theme_file_uri('/assets/about-img-02.jpg'),
    'desc'  => '
      工事賠償責任保険加入店で、万一の事故もお客様負担ゼロ。<br>
      工事中に万が一、床や壁を傷つけたり、作業ミス等により、階下、近隣住居に損害を与えてしまった場合でもご安心ください。第三者への損害やお客様の財物への損害を幅広く補償します。',
  ]
];

$troubles = [
  [
    'title' => 'トイレ',
    'img'   => get_theme_file_uri('/assets/trouble-img-toilet.jpg'),
    'price' => '3,000円〜',
    'list'  => [
      '便器のつまり',
      '便器と床の間からの水漏れ',
      'タンク内部品の不具合',
      '便器の修理・交換',
    ],
  ],
  [
    'title' => 'キッチン・洗面所',
    'img'   => get_theme_file_uri('/assets/trouble-img-kitchen.jpg'),
    'price' => '1,650円〜',
    'list'  => [
      'シンク・排水管のつまり',
      '蛇口や排水管からの水漏れ',
      '蛇口の修理・交換',
      '排水トラップの清掃・交換',
    ],
  ],
  [
    'title' => 'お風呂場',
    'img'   => get_theme_file_uri('/assets/trouble-img-bassroom.jpg'),
    'price' => '1,650円〜',
    'list'  => [
      '排水口や排水管のつまり',
      '蛇口・シャワーからの水漏れ',
      '蛇口・シャワーの修理・交換',
      '浴槽まわりの配管トラブル',
    ],
  ],
  [
    'title' => '排水管',
    'img'   => get_theme_file_uri('/assets/trouble-img-drain-pipe.jpg'),
    'price' => '1,650円〜',
    'list'  => [
      '屋内外の排水管つまり',
      '排水桝（マス）の詰まり・悪臭',
      '排水管の破損・ひび割れ修理',
      '高圧洗浄・定期メンテナンス',
    ],
  ],
  [
    'title' => '漏水調査',
    'img'   => get_theme_file_uri('/assets/trouble-img-leak-detection.jpg'),
    'price' => '5,500円〜',
    'list'  => [
      '天井・床下・壁裏など見えない箇所の漏水調査',
      '水道メーター異常時の原因特定',
      'サーモグラフィーや音聴機器による非破壊調査',
      '調査報告書の作成・保険対応',
    ],
  ],
  [
    'title' => '水道管修理',
    'img'   => get_theme_file_uri('/assets/trouble-img-water-pipe.jpg'),
    'price' => '5,500円〜',
    'list'  => [
      '給水管・給湯管の破裂・老朽化による交換',
      '凍結や衝撃による破損修理',
      '水圧調整・ポンプ交換',
      '耐震・耐腐食パイプへの更新工事',
    ],
  ],
];

$points = [
  [
    'title' => '水道局指定工事店<br>工事賠償責任保険加入店',
    'img_pc'   => get_theme_file_uri('/assets/point-img-01-pc.jpg'),
    'img_sp'   => get_theme_file_uri('/assets/point-img-01-sp.jpg'),
    'desc'  => '自治体の厳しい基準（技術・資格・設備・法令遵守）をクリアした正式指定店。水道工事法に基づいた確かな施工と適正料金を保証します。工事中の万一の事故や第三者への損害も補償。床や壁の破損などがあっても、お客様の負担はありません。',
  ],
  [
    'title' => 'お見積り・出張費用無料！',
    'img_pc'   => get_theme_file_uri('/assets/point-img-02-pc.jpg'),
    'img_sp'   => get_theme_file_uri('/assets/point-img-02-sp.jpg'),
    'desc'  => 'お見積り・出張費用は全て無料で行っております。<br>作業を開始するまで料金は一切かかりません。作業開始の際にも、作業のご説明をさせていただきますので、お客さまにご納得いただだいた上で作業を開始させていただきます。',
  ],
  [
    'title' => '24時間365日受付！<br>最短15分のスピード訪問！',
    'img_pc'   => get_theme_file_uri('/assets/point-img-03-pc.jpg'),
    'img_sp'   => get_theme_file_uri('/assets/point-img-03-sp.jpg'),
    'desc'  => '水道のトラブルはいつ起こるか分かりません。土日祝日や早朝深夜のトラブルでも水道に詳しいオペレーターが対応いたします。1分1秒でも早くお客さまのもとに駆け付け、トラブル解決に努めます。',
  ],
  [
    'title' => '水道のプロが確かな技術で<br>スピーディーに対応！',
    'img_pc'   => get_theme_file_uri('/assets/point-img-04-pc.jpg'),
    'img_sp'   => get_theme_file_uri('/assets/point-img-04-sp.jpg'),
    'desc'  => 'スタッフは住宅の水回り工事に特化し、定期的な技術研修を受けた専門チームです。お客様に最適な修理方法をご提案し、その場で迅速に対応します。厳選した補修部品を作業車に常備しているので、特殊なケースを除き、即日修理が可能です。',
  ],
];

$flows = [
  [
    'title' => 'お問い合わせ',
    'img'   => get_theme_file_uri('/assets/flow-img-01.jpg'),
    'desc'  => '水回りのトラブルが起きたら、まずはあわてずご連絡ください。早朝・深夜でも専門スタッフが対応。ご相談だけで解決できる場合もあります。',
  ],
  [
    'title' => 'ご訪問・お見積り',
    'img'   => get_theme_file_uri('/assets/flow-img-02.jpg'),
    'desc'  => '担当スタッフがご自宅へ駆け付け、状況を確認します。出張費は一切不要。作業前に必ずお見積りを提示し、内容・金額にご納得いただいてから修理に進みます。',
  ],
  [
    'title' => '修理作業',
    'img'   => get_theme_file_uri('/assets/flow-img-03.jpg'),
    'desc'  => '経験豊富なスタッフが丁寧かつ迅速に修理。長時間の作業が必要な場合は、開始前に目安時間をご説明します。',
  ],
  [
    'title' => 'お支払い',
    'img'   => get_theme_file_uri('/assets/flow-img-04.jpg'),
    'desc'  => '作業完了後、内容をご確認いただいた上でお支払いとなります。<br>対応決済方法： クレジットカード（VISA／Master／JCB）、<br>銀行振込',
  ],
];

$faqs = [
  [
    'q' => '作業時間はどれくらい？',
    'a'  => 'トラブルの内容によりますが、多くの場合は20分～30分程度で完了します。部品交換や大規模修理が必要な場合は、事前に目安時間をお伝えしますのでご安心ください。',
  ],
  [
    'q' => 'お問い合わせから、どれくらいで来てくれるの？',
    'a'  => '最短15分ほどでお伺い可能です。エリアや交通状況により前後しますが、巡回中のスタッフから、最速で駆け付けられるスタッフがお伺いします。',
  ],
  [
    'q' => '相談は無料？見積もりは無料？',
    'a'  => 'ご相談もお見積もりも完全無料です。内容を確認し、金額にご納得いただいてから作業を開始します。',
  ],
  [
    'q' => 'キャンセルは可能？',
    'a'  => '作業開始前であればキャンセル料は一切かかりません。安心してお問い合わせください。',
  ],
  [
    'q' => 'どこを修理してくれるの？',
    'a'  => 'トイレ・キッチン・洗面所・お風呂場・排水管・水道管など、水回り全般に対応しています。蛇口交換から漏水調査まで幅広くご相談ください。',
  ],
  [
    'q' => '作業後に予期しない高額な請求が発生することはありますか？',
    'a'  => 'ありません！事前見積りを必ず提示し、追加作業が必要な場合も必ずご説明とご承諾をいただいてから進めさせていただきます。',
  ],
  [
    'q' => 'スタッフの衛生管理やウイルス対策はしていますか？',
    'a'  => '手指の消毒・マスク着用・作業車や工具の除菌を徹底し、お客様のご自宅でも清潔な状態を保ちます。',
  ],
  [
    'q' => '支払方法は？',
    'a'  => '現金・クレジットカード（VISA／Master／JCB）・銀行振込に対応しています。',
  ],
];

$addresses = get_field('departments');

$voices = get_field('voices');

$tel = get_info('tel');
$tel_link = 'tel:' . str_replace('-', '', $tel);
$line_url = get_info('line');
$area = get_the_title();
$area_count = mb_strlen($area);
$area_bg = get_field('area_bg') ?? get_theme_file_uri('/assets/cta-p1-bg-kyoto.jpg');
$area_map = get_field('map');

?>

<div class="fv js-fade-in --area-str-<?= $area_count; ?>">
  <img class="fv__pc-helper --xl-up" src="<?= get_theme_file_uri('/assets/fv-bg-pc.jpg'); ?>">
  <picture>
    <source srcset="<?= get_theme_file_uri('/assets/fv-object-pc.png'); ?>" media="(min-width: 1367px)">
    <img src="<?= get_theme_file_uri('/assets/fv-object-sp.png'); ?>" class="fv__object">
  </picture>
  <div class="fv__inner">
    <img src="<?= get_theme_file_uri('/assets/cta-common-badge.svg'); ?>" alt="24時間365日対応" class="fv__badge --xl" width="88" height="88">
    <div class="fv__text-t">
      <img src="<?= get_theme_file_uri('/assets/cta-common-badge.svg'); ?>" alt="24時間365日対応" class="fv__badge --xl-up" width="88" height="88">
      <span class="fv__text-t__line1">トイレ・水道・お風呂などの水トラブル！</span>
      <span class="fv__text-t__line2"><span class="--emphasis">水道局指定工事店</span>が駆けつけます！</span>
      <span class="fv__text-t__badge">最短<br>15分</span>
    </div>
    <div class="fv__text-b">
      <div class="fv__text-b__text --has-map">
        <?= $area; ?>
        <img src="<?= $area_map; ?>" class="fv__text-b__map">
      </div>
      <span class="fv__text-b__text">水道局指定工事店<br>受付センター</span>
    </div>
    <div class="fv__btns">
      <a href="<?= $tel_link; ?>" class="fv__btn --tel" before="\ 今すぐ電話 /">
        <span class="fv__btn-text"><?php include 'assets/icon-tel.svg'; ?><?= $tel; ?></span>
      </a>
      <a href="<?= $line_url; ?>" class="fv__btn --line">
        <span class="fv__btn-text"><?php include 'assets/icon-line.svg'; ?>LINEで依頼する</span>
      </a>
    </div>
    <div class="fv__features">
      <img src="<?= get_theme_file_uri('/assets/fv-feature-1.png') ?>" alt="水道局指定工事店" class="fv__feature">
      <img src="<?= get_theme_file_uri('/assets/fv-feature-2.png') ?>" alt="工事賠償責任保険加入店" class="fv__feature">
      <img src="<?= get_theme_file_uri('/assets/fv-feature-3.png') ?>" alt="創業2006年 実績25,000件" class="fv__feature">
    </div>
  </div>
</div>

<main>

  <section class="about js-fade-in">
    <div class="about__inner">
      <div class="about__drop-lt">
        <img src="<?= get_theme_file_uri('/assets/drop-p1.png') ?>" class="js-fade-down" width="137" height="175">
      </div>
      <div class="about__drop-rc">
        <img src="<?= get_theme_file_uri('/assets/drop-p2.png') ?>" class="js-fade-down" width="89" height="172">
      </div>
      <div class="about__list">
        <?php foreach ($about_list as $about) get_template_part('components/about-item', '', $about); ?>
      </div>
      <div class="about__drop-lb">
        <img src="<?= get_theme_file_uri('/assets/drop-p3.png') ?>" class="js-fade-down" width="91" height="162">
      </div>
    </div>
  </section>

  <div class="cta-p1 js-fade-in" style="background-image: url(<?= $area_bg; ?>)">
    <div class="cta-p1__inner">
      <h2 class="cta-p1__title">
        <img src="<?= $area_map; ?>" class="cta-p1__title-map">
        <span class="cta-p1__title-t --str-<?= $area_count ?>">
          <span class="cta-p1__title-white"><?= $area ?>エリア</span>
          <span class="cta-p1__title-theme">の</span><br>
          <span class="cta-p1__title-gradient" data-text="急な水トラブル">急な水トラブル</span>
          <img src="<?= get_theme_file_uri('/assets/cta-common-badge.svg'); ?>" alt="24時間365日対応" class="cta-p1__badge">
        </span>
        <span class="cta-p1__title-b">
          <span class="cta-p1__title-white">即日対応可能!</span>
          <span class="cta-p1__title-label">
            <span class="--large">水道局指定工事店</span>が<br>すぐ駆けつけます！
          </span>
        </span>
      </h2>
      <div class="cta-p1__btns">
        <a href="<?= $tel_link; ?>" class="cta-p1__btn --tel">
          <span class="cta-p1__btn-text"><?php include 'assets/icon-tel.svg'; ?><?= $tel; ?></span>
        </a>
        <a href="<?= $line_url; ?>" target="_blank" class="cta-p1__btn --line">
          <span class="cta-p1__btn-text"><?php include 'assets/icon-line.svg'; ?>LINEで依頼</span>
        </a>
      </div>
    </div>
  </div>

  <section class="troubles js-fade-in">
    <h2 class="troubles__title">
      <div class="js-scale-up">
        <picture>
          <source srcset="<?= get_theme_file_uri('/assets/trouble-title-text-pc.svg'); ?>" media="(min-width: 769px)">
          <img class="troubles__title-text" src="<?= get_theme_file_uri('/assets/trouble-title-text-sp.svg'); ?>" width="242" height="93" />
        </picture>
      </div>
    </h2>
    <div class="troubles__inner">
      <div class="troubles__list">
        <?php foreach ($troubles as $trouble) get_template_part('components/trouble-item', '', $trouble); ?>
      </div>
    </div>
  </section>

  <section class="points js-fade-in">
    <h2 class="points__title">
      <div class="points__title-imgs">
        <img src="<?= get_theme_file_uri('/assets/points-title-img-1.png'); ?>" class="points__title-img --left js-scale-up" width="120" height="120">
        <img src="<?= get_theme_file_uri('/assets/points-title-img-2.png'); ?>" class="points__title-img --right js-scale-up" width="120" height="120">
      </div>
      <img src="<?= get_theme_file_uri('/assets/points-title-man.png'); ?>" class="points__title-man" width="245" height="339">
      <img src="<?= get_theme_file_uri('/assets/points-title-text.svg'); ?>" alt="私たちが選ばれる4つのポイント" class="points__title-text js-blink" data-delay="0.5" width="330" height="91">
    </h2>
    <div class="points__inner">
      <div class="points__list">
        <?php foreach ($points as $point) get_template_part('components/point-item', '', $point); ?>
      </div>
    </div>
  </section>

  <div class="cta-p2 js-fade-in">
    <div class="cta-p2__inner">
      <div class="cta-p2__contents">
        <span class="cta-p2__label">見積り・出張・相談　<span class="--has-dotted">無料<span class="--dotted">・・</span>
          </span>!</span>
        <span class="cta-p2__lines">
          <span class="cta-p2__line1">水道局指定工事店</span>
          <span class="cta-p2__line2">にお任せください！</span>
        </span>
        <div class="cta-p2__boxes">
          <span class="cta-p2__box">最短<span class="--emphasis">15</span>分で駆けつけ</span>
          <span class="cta-p2__box"><span class="--emphasis">24</span>時間<span class="--emphasis">365</span>日対応</span>
        </div>
        <div class="cta-p2__btns">
          <a href="<?= $tel_link; ?>" class="cta-p2__tel"><?php include 'assets/icon-tel.svg'; ?><span class="cta-p2__tel-text"><?= $tel; ?></span></a>
          <a href="<?= $line_url; ?>" target="_blank" class="cta-p2__btn">
            <span class="cta-p2__btn-text"><?php include 'assets/icon-line.svg'; ?>LINEで依頼</span>
          </a>
        </div>
      </div>
      <img src="<?= get_theme_file_uri('/assets/cta-p2-man.png') ?>" alt="水のトラブル" class="cta-p2__man" width="275" height="348">
      <img src="<?= get_theme_file_uri('/assets/cta-p2-title.png') ?>" alt="水のトラブル" class="cta-p2__title" width="259" height="72">
    </div>
  </div>

  <section class="voices js-fade-in">
    <div class="voices__inner">
      <h2 class="voices__title">お客様の声</h2>
      <p class="voices__lead">
        25,000件以上の施工実績を重ねており、<br>
        水回りの急なトラブルから大規模な修理まで、<br>
        確かな技術と誠実な対応で多くのお客様にご満足いただいています。
      </p>
      <div id="splide" class="voices__carousel-wrap">
        <div class="splide voices__carousel js-voices-carousel">
          <div class="splide__track">
            <ul class="splide__list">
              <?php foreach ($voices as $voice): ?>
                <li class="splide__slide">
                  <?= get_template_part('components/voice-item', '', $voice); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="voices__carousel-arrows">
          <button type="button" class="voices__carousel-arrow voices__carousel-arrow --prev js-voices-arrow-prev">
            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <circle cx="60" cy="60" r="60" fill="#ffea01" />
                <path d="M39 59.5L72.75 40.0144L72.75 78.9856L39 59.5Z" fill="#484848" />
              </g>
            </svg>
          </button>
          <button type="button" class="voices__carousel-arrow voices__carousel-arrow --next js-voices-arrow-next">
            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <circle cx="60" cy="60" r="60" fill="#ffea01" />
                <path d="M39 59.5L72.75 40.0144L72.75 78.9856L39 59.5Z" fill="#484848" />
              </g>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="flow js-fade-in">
    <h2 class="flow__title">
      <span class="flow__title-text">
        <span>ご</span><span>利</span><span>用</span><span>の</span><span>流</span><span>れ</span>
      </span>
    </h2>
    <div class="flow__list">
      <?php foreach ($flows as $flow) get_template_part('components/flow-item', '', $flow); ?>
    </div>
  </section>

  <section class="faq js-fade-in">
    <div class="faq__inner">
      <h2 class="faq__title">よくある質問</h2>
      <div class="faq__drop-lt">
        <img src="<?= get_theme_file_uri('/assets/drop-p1.png') ?>" class="js-fade-down" width="163" height="207">
      </div>
      <div class="faq__list">
        <?php foreach ($faqs as $faq) get_template_part('components/faq-item', '', $faq); ?>
      </div>
      <div class="faq__drop-rb">
        <img src="<?= get_theme_file_uri('/assets/drop-p2.png') ?>" class="js-fade-down" width="121" height="237">
      </div>
    </div>
  </section>

  <section class="maker js-fade-in">
    <div class="maker__inner">
      <h2 class="maker__title">
        <span>取り扱い</span>
        <img src="<?= get_theme_file_uri('/assets/maker-title-icon.svg'); ?>" width="26" height="26" class="maker__title-icon">
        <span>メーカー</span>
      </h2>
      <picture>
        <source srcset="<?= get_theme_file_uri('/assets/maker-list-pc.png'); ?>" media="(min-width: 769px)">
        <img class="maker__img" src="<?= get_theme_file_uri('/assets/maker-list-sp.png'); ?>" width="355" height="207" />
      </picture>
    </div>
  </section>

  <div class="cta-p3 js-fade-in">
    <div class="cta-p3__inner">
      <div class="cta-p3__text">
        <span class="cta-p3__text-icon"><?php include 'assets/icon-tel.svg'; ?></span>
        <span class="cta-p3__text-line1">24時間365日対応！<br>水道局指定工事店が<br>最短15分で駆けつけ！</span>
        <span class="cta-p3__text-line2">お急ぎの方はこちら！</span>
        <a href="<?= $tel_link; ?>" class="cta-p3__text-tel"><?= $tel; ?></a>
        <img src="<?= get_theme_file_uri('/assets/cta-p3-badge.png') ?>" alt="出張見積もり無料！" class="cta-p3__badge js-blink" width="100" height="100">
        <a href="<?= $line_url; ?>" target="_blank" class="cta-p3__btn --md-up">
          <span class="cta-p3__btn-text"><?php include 'assets/icon-line.svg'; ?>LINEで依頼する</span>
        </a>
        <img src="<?= get_theme_file_uri('/assets/cta-p3-woman.png') ?>" class="cta-p3__woman --lg-up" width="209" height="249">
      </div>
      <a href="<?= $line_url; ?>" target="_blank" class="cta-p3__btn --md">
        <span class="cta-p3__btn-text"><?php include 'assets/icon-line.svg'; ?>LINEで依頼する</span>
      </a>
      <img src="<?= get_theme_file_uri('/assets/cta-p3-woman.png') ?>" class="cta-p3__woman --lg" width="209" height="249">
    </div>
  </div>

  <section class="addresses js-fade-in">
    <div class="addresses__inner">
      <h2 class="addresses__title">各水道局所在地</h2>
      <div class="addresses__drop-lt">
        <img src="<?= get_theme_file_uri('/assets/drop-p1.png') ?>" class="js-fade-down" width="163" height="207">
      </div>
      <div class="addresses__list">
        <?php foreach ($addresses as $address) get_template_part('components/address-item', '', $address); ?>
      </div>
      <div class="addresses__drop-rb">
        <img src="<?= get_theme_file_uri('/assets/drop-p2.png') ?>" class="js-fade-down" width="121" height="237">
      </div>
      <!-- <div class="address-more"><span class="address-more__text">さらに表示<span class="plus"></span></span></div> -->
    </div>
  </section>

  <section class="company">
    <h2 class="company__title">運営会社情報</h2>
    <table class="company__table">
      <tr>
        <th>サービス名</th>
        <td>水道局指定工事店受付センター</td>
      </tr>
      <tr>
        <th>運営会社</th>
        <td>株式会社VISAS</td>
      </tr>
      <tr>
        <th>コールセンター</th>
        <td>京都府八幡市美濃山幸水<br class="--sm">26-12-1</td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>0120-212-216</td>
      </tr>
    </table>
  </section>
</main>

<?php get_footer(); ?>
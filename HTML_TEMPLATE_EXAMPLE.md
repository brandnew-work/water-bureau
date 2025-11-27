# HTMLテンプレート例

Figmaデザインに基づいたHTML構造の例です。WordPressのテンプレートやACFフィールドで使用してください。

## ヒーローセクション

```html
<section class="hero">
  <div class="hero__inner">
    <h1 class="hero__title">
      水道局指定工事店が<br>
      <span class="hero__title--accent">すぐ駆けつけます！</span>
    </h1>
    <p class="hero__subtitle">トイレ・水道・お風呂などの水トラブル！</p>
    <div class="hero__cta">
      <a href="tel:0120-212-216" class="hero__phone">0120-212-216</a>
      <a href="#" class="hero__line-btn">LINEで依頼する</a>
    </div>
    <p class="hero__info">24時間365日年中無休!!</p>
  </div>
</section>
```

## サービス紹介セクション

```html
<section class="service-intro">
  <div class="service-intro__inner">
    <h2 class="service-intro__title">私たちが選ばれる4つのポイント</h2>
    <div class="service-intro__grid">
      <div class="service-intro__item">
        <div class="service-intro__icon">1</div>
        <h3 class="service-intro__name">お見積り・出張費用無料！</h3>
        <p class="service-intro__desc">お見積り・出張費用は全て無料で行っております。作業を開始するまで料金は一切かかりません。</p>
      </div>
      <div class="service-intro__item">
        <div class="service-intro__icon">2</div>
        <h3 class="service-intro__name">24時間365日受付！<br>最短15分のスピード訪問！</h3>
        <p class="service-intro__desc">水道のトラブルはいつ起こるか分かりません。土日祝日や早朝深夜のトラブルでも水道に詳しいオペレーターが対応いたします。</p>
      </div>
      <div class="service-intro__item">
        <div class="service-intro__icon">3</div>
        <h3 class="service-intro__name">水道のプロが確かな技術で<br>スピーディーに対応！</h3>
        <p class="service-intro__desc">スタッフは住宅の水回り工事に特化し、定期的な技術研修を受けた専門チームです。</p>
      </div>
      <div class="service-intro__item">
        <div class="service-intro__icon">4</div>
        <h3 class="service-intro__name">水道局指定工事店<br>工事賠償責任保険加入店</h3>
        <p class="service-intro__desc">自治体の厳しい基準（技術・資格・設備・法令遵守）をクリアした正式指定店。</p>
      </div>
    </div>
  </div>
</section>
```

## 料金表セクション

```html
<section class="price-table">
  <div class="price-table__inner">
    <h2 class="price-table__title">作業料金</h2>
    <div class="price-table__grid">
      <div class="price-table__card">
        <h3 class="price-table__category">トイレ</h3>
        <div class="price-table__price">
          <span class="price-table__price-amount">3,000円〜</span>
          <span class="price-table__price-note">(税込)</span>
        </div>
        <ul class="price-table__services">
          <li class="price-table__service-item">便器のつまり</li>
          <li class="price-table__service-item">便器と床の間からの水漏れ</li>
          <li class="price-table__service-item">タンク内部品の不具合</li>
          <li class="price-table__service-item">便器の修理・交換</li>
        </ul>
      </div>
      <div class="price-table__card">
        <h3 class="price-table__category">キッチン・洗面所</h3>
        <div class="price-table__price">
          <span class="price-table__price-amount">1,650円〜</span>
          <span class="price-table__price-note">(税込)</span>
        </div>
        <ul class="price-table__services">
          <li class="price-table__service-item">シンク・排水管のつまり</li>
          <li class="price-table__service-item">蛇口や排水管からの水漏れ</li>
          <li class="price-table__service-item">蛇口の修理・交換</li>
          <li class="price-table__service-item">排水トラップの清掃・交換</li>
        </ul>
      </div>
      <div class="price-table__card">
        <h3 class="price-table__category">お風呂場</h3>
        <div class="price-table__price">
          <span class="price-table__price-amount">1,650円〜</span>
          <span class="price-table__price-note">(税込)</span>
        </div>
        <ul class="price-table__services">
          <li class="price-table__service-item">排水口や排水管のつまり</li>
          <li class="price-table__service-item">蛇口・シャワーからの水漏れ</li>
          <li class="price-table__service-item">蛇口・シャワーの修理・交換</li>
          <li class="price-table__service-item">浴槽まわりの配管トラブル</li>
        </ul>
      </div>
      <div class="price-table__card">
        <h3 class="price-table__category">排水管</h3>
        <div class="price-table__price">
          <span class="price-table__price-amount">5,500円〜</span>
          <span class="price-table__price-note">(税込)</span>
        </div>
        <ul class="price-table__services">
          <li class="price-table__service-item">屋内外の排水管つまり</li>
          <li class="price-table__service-item">排水桝（マス）の詰まり・悪臭</li>
          <li class="price-table__service-item">排水管の破損・ひび割れ修理</li>
          <li class="price-table__service-item">高圧洗浄・定期メンテナンス</li>
        </ul>
      </div>
      <div class="price-table__card">
        <h3 class="price-table__category">漏水調査</h3>
        <div class="price-table__price">
          <span class="price-table__price-amount">5,500円〜</span>
          <span class="price-table__price-note">(税込)</span>
        </div>
        <ul class="price-table__services">
          <li class="price-table__service-item">天井・床下・壁裏など見えない箇所の漏水調査</li>
          <li class="price-table__service-item">水道メーター異常時の原因特定</li>
          <li class="price-table__service-item">サーモグラフィーや音聴機器による非破壊調査</li>
          <li class="price-table__service-item">調査報告書の作成・保険対応</li>
        </ul>
      </div>
      <div class="price-table__card">
        <h3 class="price-table__category">水道管修理</h3>
        <div class="price-table__price">
          <span class="price-table__price-amount">5,500円〜</span>
          <span class="price-table__price-note">(税込)</span>
        </div>
        <ul class="price-table__services">
          <li class="price-table__service-item">給水管・給湯管の破裂・老朽化による交換</li>
          <li class="price-table__service-item">凍結や衝撃による破損修理</li>
          <li class="price-table__service-item">水圧調整・ポンプ交換</li>
          <li class="price-table__service-item">耐震・耐腐食パイプへの更新工事</li>
        </ul>
      </div>
    </div>
  </div>
</section>
```

## よくある質問セクション

```html
<section class="faq">
  <div class="faq__inner">
    <h2 class="faq__title">よくある質問</h2>
    <div class="faq__list">
      <div class="faq__item">
        <div class="faq__question">作業時間はどれくらい？</div>
        <div class="faq__answer">
          トラブルの内容によりますが、多くの場合は20分～30分程度で完了します。部品交換や大規模修理が必要な場合は、事前に目安時間をお伝えしますのでご安心ください。
        </div>
      </div>
      <div class="faq__item">
        <div class="faq__question">お問い合わせから、どれくらいで来てくれるの？</div>
        <div class="faq__answer">
          最短15分ほどでお伺い可能です。エリアや交通状況により前後しますが、巡回中のスタッフから、最速で駆け付けられるスタッフがお伺いします。
        </div>
      </div>
      <div class="faq__item">
        <div class="faq__question">相談は無料？見積もりは無料？</div>
        <div class="faq__answer">
          ご相談もお見積もりも完全無料です。内容を確認し、金額にご納得いただいてから作業を開始します。
        </div>
      </div>
      <!-- 他の質問も同様の構造で追加 -->
    </div>
  </div>
</section>
```

## お客様の声セクション

```html
<section class="testimonials">
  <div class="testimonials__inner">
    <h2 class="testimonials__title">お客様の声</h2>
    <p class="testimonials__subtitle">25,000件以上の施工実績を重ねており、水回りの急なトラブルから大規模な修理まで、確かな技術と誠実な対応で多くのお客様にご満足いただいています。</p>
    <div class="testimonials__grid">
      <div class="testimonials__card">
        <div class="testimonials__author">京都市-匿名様</div>
        <p class="testimonials__text">丁寧に説明と作業をしていただきました。ありがとうございました。</p>
      </div>
      <div class="testimonials__card">
        <div class="testimonials__author">京都市-松本様</div>
        <p class="testimonials__text">蛇口の水が止まらなくなり、パニックになってしまいましたが、電話で元栓の閉め方を教えていただいたので助かりました。その場で交換もしてい...</p>
      </div>
      <div class="testimonials__card">
        <div class="testimonials__author">京都市-毛利様</div>
        <p class="testimonials__text">スタッフの方がとても親切でよかったです。詳しくお話ししていただけたので分かりやすかったです。</p>
      </div>
      <!-- 他のお客様の声も同様の構造で追加 -->
    </div>
  </div>
</section>
```

## CTAセクション（お急ぎの方）

```html
<section class="cta-section">
  <div class="cta-section__inner">
    <h2 class="cta-section__title">お急ぎの方はこちら！</h2>
    <p class="cta-section__subtitle">24時間365日対応！水道局指定工事店が最短15分で駆けつけ！</p>
    <a href="tel:0120-212-216" class="cta-section__phone">0120-212-216</a>
    <p class="cta-section__note">見積もり・出張・相談 無料!</p>
  </div>
</section>
```

## 注意事項

- すべてのセクションは`front-page.php`またはACFフィールドで実装してください
- クラス名は上記の通りにしてください（JavaScriptのアコーディオン機能が動作します）
- 画像は適切なパスに配置してください
- 電話番号やLINEのリンクは実際のURLに置き換えてください


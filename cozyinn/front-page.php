<?php get_header();?>

<section>
        <h1 class="site-copy">デザイナーズホテルへようこそ</h1>
      <div class="slider">
        <div class="slider-item"><img src="<?php echo get_template_directory_uri() . '/images/img main1.png'; ?>" alt="メイン画像１"></div>
        <div class="slider-item"><img src="<?php echo get_template_directory_uri() . '/images/img main2.png'; ?>" alt="メイン画像２"></div>
        <div class="slider-item"><img src="<?php echo get_template_directory_uri() . '/images/img main3.png'; ?>" alt="メイン画像３"></div>  
      </div>
    </section>

    <section class="search">
      <ul class="search-word">
        <li><input class="input-item1" type="text" name="keyword" placeholder="キーワード・エリア・ホテル名など"></input></li>
        <li><input class="input-item2" type="text" name="stay" placeholder="日付指定なし　1泊"></input></li>
        <li><input class="input-item3" type="text" name="number" placeholder="利用人数"></input></li>
      </ul>
      
      <button>検索</button>
    </section>

    <section class="hotel-intro" id="hotel-intro">
      <h2 class="sec-title">ホテル紹介</h2>
      <ul class="card-list">
        <li class="card-list-item">
          <img class="list-img" src="<?php echo get_template_directory_uri() . '/images/Radiant Residence.png'; ?>" alt="ラディアントレジデンス">
          <h3 class="card-list-title">
            <span class="ja">ラディアントレジデンス</span>
            <span class="en">(Radiant Residence)</span>
          </h3>
          <ul class="card-list">
            <li class="card-list-item">北海道富良野市</li>
          </ul>
        </li>
        <li class="card-list-item">
          <img class="list-img" src="<?php echo get_template_directory_uri() . '/images/Modern Hive.png'; ?>" alt="モダンハイヴ">
          <h3 class="card-list-title">
            <span class="ja">モダンハイヴ</span>
            <span class="en">(Modern Hive)</span>
          </h3>
          <ul class="card-list">
            <li class="card-list-item">北海道苫小牧市</li>
          </ul>
        </li>
        <li class="card-list-item">
          <img class="list-img" src="<?php echo get_template_directory_uri() . '/images/Urbano Suite.png'; ?>" alt="ウルバノスイート">
          <h3 class="card-list-title">
            <span class="ja">ウルバノスイート</span>
            <span class="en">(Urbano Suite)</span>
          </h3>
          <ul class="card-list">
            <li class="card-list-item">北海道釧路市</li>
          </ul>
        </li>
        <li class="card-list-item">
          <img class="list-img" src="<?php echo get_template_directory_uri() . '/images/Luminous Loft Hotel.png'; ?>" alt="ルミナスロフトホテル">
          <h3 class="card-list-title">
            <span class="ja">ルミナスロフトホテル</span>
            <span class="en">(Luminous Loft Hotel)</span>
          </h3>
          <ul class="card-list">
            <li class="card-list-item">北海道虻田郡ニセコ町</li>
          </ul>
        </li>
          
      </ul>

    </section>
    <section class="recommend" id="recommend">
      <h2 class="sec-title">今月のおすすめ</h2>
      <ul class="card-list">
        <li class="card-list-item">
          <img class="list-img" src="<?php echo get_template_directory_uri() . '/images/Serenity Studio.png'; ?>" alt="セレニティスタジオ">
          <h3 class="card-list-title">
            <span class="ja">セレニティスタジオ</span>
            <span class="en">(Serenity Studio)</span>
          </h3>
          <ul class="card-list">
            <li class="card-list-item">北海道勇払郡</li>
          </ul>
        </li>
        <li class="card-list-item">
          <img class="list-img" src="<?php echo get_template_directory_uri() . '/images/Contemporary Stay.png'; ?>" alt="コンテンポラリーステイ">
          <h3 class="card-list-title">
            <span class="ja">コンテンポラリーステイ</span>
            <span class="en">(Contemporary Stay)
            </span>
          </h3>
          <ul class="card-list">
            <li class="card-list-item">北海道虻田郡</li>
          </ul>
        </li>
        <li class="card-list-item">
          <img class="list-img" src="<?php echo get_template_directory_uri() . '/images/Oasis of Style.png'; ?>" alt="オアシスオブスタイル">
          <h3 class="card-list-title">
            <span class="ja">オアシスオブスタイル</span>
            <span class="en">(Oasis of Style)
            </span>
          </h3>
          <ul class="card-list">
            <li class="card-list-item">北海道勇払郡</li>
          </ul>
        </li>
        <li class="card-list-item">
          <img class="list-img" src="<?php echo get_template_directory_uri() . '/images/Fusion Folly.png'; ?>" alt="フュージョンフォリー">
          <h3 class="card-list-title">
            <span class="ja">フュージョンフォリー</span>
            <span class="en">(Fusion Folly)</span>
          </h3>
          <ul class="card-list">
            <li class="card-list-item">沖縄県八重山郡</li>
          </ul>
        </li>
      </ul>
    </section>

    <section class="feature" id="feature">
      <h2 class="sec-title">特集</h2>
      <div class="feature-box">
        <div class="feature-list">
          <img class="feature-img" src="<?php echo get_template_directory_uri() . '/images/feature1.jpg'; ?>" alt="特集1">
          <p class="feature-list-item">ラグジュアリー・ステイ特集</p>
        </div>
        <div class="feature-list">
          <img class="feature-img" src="<?php echo get_template_directory_uri() . '/images/feature2.png'; ?>" alt="特集２">
          <p class="feature-list-item">朝食特集</p>
        </div>
        <div class="feature-list">
          <img class="feature-img" src="<?php echo get_template_directory_uri() . '/images/feature3.jpg'; ?>" alt="特集３">
          <p class="feature-list-item">家族旅行のススメ</p>
        </div>
      </div>

    </section>

    <?php get_footer();?>
  
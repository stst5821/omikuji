<?php include('header.php'); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">

                <p class="unsei_ttl my-5">あなたの昨日の運勢は・・・</p>
                <div class="unsei my-5"><?= $f_result ?></div>

                <div class="item_wrap item_line">
                    <p>昨日のラッキーアイテムは</p>
                    <p class="item my-5"><?php echo $colors[rand(0,11)] ?>色 の <?= $items[rand(0,21)] ?></p>
                    <p>でした！</p>
                </div>

                <div class="omikuji_wrap mt-5">
                    <a href="result.php">
                        <img class="omikuji_img" src="img/omikuji.png" alt="">
                        <p>もう一度引く！</p>
                    </a>
                </div>


                <p class="return_top my-5">
                    <a href="menu.php">トップへ戻る</a>
                </p>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
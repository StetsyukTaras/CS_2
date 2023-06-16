<main>
    <section class="hero_container">
        <?php
        require_once('config.php');
        $sql = "SELECT * FROM news";
        $result = mysqli_query($conn, $sql);
        ?>
        <div class="home_images">
            <div class="beta_source2">
                <img src="img/header_ctt.png">
            </div>
            <div class="beta_source2_container">
                <img class="img_logo" src="img/logo_cs2_header.svg">
                <div class="Limited_test">
                    <div class="Limited_testBG"></div>
                    <div class="Limited_testLabel">
                        Обмежене тестування
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="news_cards">
        <?php foreach ($result as $news):?>
            <div class="news_card">
                <div class="news_card_info">
                    <img src="<?=$news['image']?>" class="news_card_image" alt="<?=$news['title']?>">
                    <p class="news_card_title"><?=$news['title']?></p>
                </div>
                <div class="more">
                    <p><?= mb_substr($news['content'],0,80) . '...';?></p>
                </div>
                <div class="news_card_buttons">
                    <a href="news.php?id=<?=$news['id']?>" class="news_card_button">Читати більше</a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</main>

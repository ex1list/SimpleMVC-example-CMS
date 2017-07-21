<h2><?php echo $homepageTitle ?></h2>

    <?php 
    foreach ($homepageArticles['results'] as $key => $value):?>

        <a href="/index.php?action=article/index&id=<?php echo $homepageArticles['results'][$key]->id; ?>">
            <h4><?php echo $homepageArticles['results'][$key]->title; ?></h4>
        </a>

        <p><?php
            $categoryId = $homepageArticles['results'][$key]->categoryId;
            foreach ($homepageCategories['results'] as $k => $v) {
                if ($homepageCategories['results'][$k]->id == $categoryId) : ?>
                    <a href="/index.php?action=category/index&id=<?php echo $homepageCategories['results'][$k]->id; ?>">
                        <?php echo $homepageCategories['results'][$k]->name; ?>
                    </a>
                <?php endif;
            }
        ?></p>

        <p><?php echo $homepageArticles['results'][$key]->summary; ?></p>
        <p class="pubDate"><?php echo $homepageArticles['results'][$key]->publicationDate; ?></p>
        <img src="/images/like1.png" height="20px" width="20px" data-articleId="<?= $homepageArticles['results'][$key]->id?>">
        <span class="<?= $homepageArticles['results'][$key]->id?>">
                <?= $homepageArticles['results'][$key]->likes ?>
        </span>
        <hr><br>    
    <?php endforeach; ?>

    
    

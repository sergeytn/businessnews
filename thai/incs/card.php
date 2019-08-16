            <div style="background-image: url(./img/content/article/article-<?=$i; ?>-small.jpg)" class="categories-story_item background-small">
              <div class="categories-story_wrap">
                <div class="categories-story_info"><a href="/category.php" class="categories-story_name">เรื่องราว</a>
                <a href="/article-<?=$i; ?>.php" class="categories-story_link">
                    <h4 class="categories-story_title"><?php echo $article[$i]['title']; ?></h4>
                </a></div>
                <div class="categories-story_author">
                  <div class="author">
                    <div class="author_avatar"><img src="./img/content/author_image/<?php echo $article[$i]['author-image']; ?>"></div>
                    <div class="author_info"><a href="#" class="author_name"><?php echo $article[$i]['author']; ?></a>
                      <div class="author_row">
                        <button class="humble humble--views humble--tiny"><?php echo $article[$i]['views']; ?></button>
                        <button class="humble humble--comments humble--tiny"><?php echo $article[$i]['comments']; ?></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
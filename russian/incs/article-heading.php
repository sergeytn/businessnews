              <div class="article__header">
                <h1 class="article__title"><?=$article[$i]['title'];?></h1>
                <div class="author">
                  <div class="author_avatar"><img src="./img/content/author_image/<?=$article[$i]['author-image'];?>"></div>
                  <div class="author_info"><a href="#!" class="author_name"><?=$article[$i]['author'];?></a>
                    <div class="author_row">
                      <time class="humble humble--time"><?=$article[$i]['date'];?></time>
                      <button class="humble humble--views humble--tiny"><?=$article[$i]['views'];?></button>
                      <button class="humble humble--comments humble--tiny"><?=$article[$i]['comments'];?></button>
                    </div>
                  </div>
                </div>

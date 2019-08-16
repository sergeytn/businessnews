<?php include('/incs/header.php'); ?>

    <div class="content">
      <div class="page-container container">
        <div class="main-block">
          <div class="article">
            <div class="article__main">


              <div class="article__header">
                <h1 class="article__title">Title</h1>
                <div class="author">
                  <div class="author_avatar"><img src="./img/content/author_image/item_1.png"></div>
                  <div class="author_info"><a href="#!" class="author_name">Luke Kawa</a>
                    <div class="author_row">
                      <time class="humble humble--time">25.08, 12:00</time>
                      <button class="humble humble--views humble--tiny">29083</button>
                      <button class="humble humble--comments humble--tiny">21</button>
                    </div>
                  </div>
                </div>
                <p class="article__descr">
                    descr
                </p>
              </div>


              <div class="article__main-img-wrapper"><img src="./img/content/article/article-1-big.jpg" class="article__main-img">
                <div class="editors-mark">การเลือกของบรรณาธิการ</div>
              </div>


              <div class="article__content">
                <div class="content-container">

                Text

                  <section class="article__panel">
                    <div class="article__tags btns-spacer">
                    <a href="/" class="btn btn--hash-tag">Tag</a>
                  </section>
                </div>


                <?php include('incs/sidebar.php'); ?>


              </div>
            </div>

            <?php include('incs/related.php'); ?>


          </div>
        </div>
      </div>
    </div>

<?php include('incs/footer.php'); ?>
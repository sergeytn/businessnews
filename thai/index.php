<?php include('/incs/header.php'); ?>

    <div class="content">
      <div class="page-container container">

        <?php include('/incs/topstory.php'); ?>

        <div class="categories-story">
          <div class="title__block">
            <h2 class="title">ดีที่สุดของวัน</h2>
          </div>


          <div class="categories-story_list">

          <?php
          for ($i = 1; $i < 4; $i++) {
          ?>

    			<?php include('/incs/card.php'); ?>

          <?php
          }
          ?>


          </div>
        </div>
        <!-- /category -->


        <div class="categories-story">
          <div class="title__block">
            <h2 class="title">เป็นที่นิยมมากที่สุด</h2>
          </div>
          <div class="categories-story_list">

          <?php
          for ($i = 8; $i > 2; $i--) {
          ?>

          <?php include('/incs/card.php'); ?>

          <?php
          }
          ?>


          </div>
        </div>
        <!-- /category -->


      </div>
    </div>

<?php include('/incs/footer.php'); ?>
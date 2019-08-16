<?php include('/incs/header.php'); ?>

    <div class="content">
      <div class="page-container container">


        <div class="categories-story">
          <div class="title__block">
            <h2 class="title">บทความ</h2>
          </div>


          <div class="categories-story_list">

          <?php
          for ($i = 1; $i < 7; $i++) {
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
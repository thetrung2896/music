  <section class="gallery">
      <div class="overlay"></div>
      <div class="container content">
        <div class="title wow animated fadeInDown"><h2>MỘT SỐ ẢNH CA SĨ</h2></div>
        <div class="diamond-grid">

          <?php
          $singer1 = singer1();
          while($row_singer1 = mysql_fetch_array($singer1)){
          ?>
          <div class="diamond-wrap wow animated fadeIn" data-wow-delay="0.6s">
            <div class="shape photo" style="background: url(assets/image/<?php echo $row_singer1['image']?>);">
              <a class="fancybox" href="assets/image/<?php echo $row_singer1['image']?>" data-fancybox-group="front-gallery">
                <div class="overlay-black"></div>
                <div class="overlay">
                  <div class="text"><span><?php echo $row_singer1['namesinger']?></span></div>
                </div>
              </a>
            </div>
          </div><!-- /.diamond-wrap -->
          <?php
          }
          ?>

        </div><!-- /.diamond-grid -->

        <div class="bottom-text">
        </div>

      </div><!-- /.container -->
    </section><!-- /.gallery -->
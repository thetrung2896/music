<div class="col-md-6 col-sm-6">
          <div class="personnel wow animated fadeIn" data-wow-delay="0.2s">
            <div class="title">
              <h3>
                Tiểu Sử <br/>
                <span class="bold orange">Ca sĩ </span>
              </h3>
            </div>
            <div class="personnel-list">
              <?php
              $singer=singer();
              while ($row_singer = mysql_fetch_array($singer)) {
              ?>
              <div class="shape photo item" style="background: url(assets/image/<?php echo $row_singer['image']?>);">
                <a href="index.php?page=detailsinger&id_singer=<?= $row_singer['id_singer'] ?>" class="overlay">
                  <div class="name">
                    <?php echo $row_singer['namesinger']?>
                  </div>
                </a>
              </div><!-- /.photo -->
              <?php
              }
              ?>
              <?php
              $shortprofile = singer();
              $row_shortprofile = mysql_fetch_array($shortprofile);
              ?>
            </div><!-- /.personnel-list -->
            <div class="text">
              <p><?php if (strlen($row_shortprofile['profile'])>350){
                    $substr = substr($row_shortprofile['profile'], 0,350);
                    echo $substr;
                        }; ?>...<a href="index.php?page=detailsinger&id_singer=<?= $row_shortprofile['id_singer'] ?>">Tiểu sử <?php echo $row_shortprofile['namesinger']?></a></p>
            </div>
            
          </div><!-- /.personnel -->
        </div><!-- /.col-md-6 -->

</div><!-- /.container -->
    </section><!-- /.schedule -->
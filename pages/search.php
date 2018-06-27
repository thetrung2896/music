
<section class="album-single-wraps">
  <div class="container">
    <div class="row">
        <div class="col-md-3 left"></div>
        <div class="col-md-6 right">
          <div class="content">
            <div id="jquery_jplayer_3" class="jp-jplayer" style="width: 0px; height: 0px;"><img id="jp_poster_0" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_0" preload="metadata" src="http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg" title="Cro Magnon Man"></audio></div>
            <div id="jp_container_3" class="jp-audio" role="application" aria-label="media player">
              <div class="jp-type-playlist">
                <?php 
                if(isset($_POST['search'])){
                $key = $_POST['txtsearch'];
                $sql = mysql_query("SELECT * FROM song inner join singer
                                    on song.id_singer = singer.id_singer
                                    WHERE namesong like '%$key%' or namesinger like '%$key%'");
                $sql1 = mysql_query("SELECT * FROM song inner join singer
                                    on song.id_singer = singer.id_singer
                                    WHERE namesinger like '%$key%' or namesong like '%$key%'");

                $row_sql1 = mysql_fetch_array($sql1);
                if($sql1){


                ?>

                <div class="row">
                  <div class="col-md-3 hight">
                      <div class="post-img">
                        <a href="#"><img src="assets/image/<?= $row_sql1['image'] ?>" alt="" style="width: 131px;"></a>
                      </div>
                  </div>
                  <div class="col-md-9 low">
                    <div class="title">
                      <div class="shapes"><a href="#"><h2 style="color: #000;"><?= $row_sql1['namesinger'] ?></h2></a></div>
                      </div>
                    <div class="post-txt" style="font-family: sans-serif;">
                        <p class="pro"><?php if (strlen($row_sql1['profile'])>350){
                    $substr = substr($row_sql1['profile'], 0,350);
                    echo $substr;
                        }; ?>...<a href="index.php?page=detailsinger&id_singer=<?= $row_sql1['id_singer'] ?>">Tiểu sử <?php echo $row_sql1['namesinger']?></a></p>
                    </div>
                  </div>
                </div>

                <?php
              }
                while($row_sql = mysql_fetch_array($sql)){
                 ?>
                <div class="jp-playlist">
                  <ul style="display: block;">
                    <li class=""><div><a href="#" class="jp-playlist-item-remove" style="display: none;">×</a>  <a href="index.php?page=detailsong&id_song=<?php echo $row_sql['id_song']?>" class="jp-playlist-item" tabindex="0" style="font-family: sans-serif; font-size: 14px; color: #f7f7a3;"><?= $row_sql['namesong'] ?></a>
                      <a href="index.php?page=detailsinger&id_singer=<?php echo $row_sql['id_singer']?>" style="font-family: sans-serif; font-size: 14px; color: #c5f9c5;"> - <?= $row_sql['namesinger'] ?></a> </div></li>
                </div>
                <?php 
              }
            }
                 ?>
                <div class="jp-no-solution" style="display: none;">
                  <span>Update Required</span>
                  To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
              </div><!-- /.jp-type-playlist -->
            </div><!-- /.jp-audio -->
          </div><!-- /.content -->
          </div><!--/col-8 -->
          <div class="col-md-3"></div>
        </div>
      </div>
        </div>
    </section>
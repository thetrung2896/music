<!-- Event Single Start -->
    <section class="album-single-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-8 right">
           <div style="position: relative; width: 640px;">
             <div class="textwrap">
              <?php
                if(isset($_GET["id_song"])){
                 $row_song = $_GET["id_song"];
                  settype($row_song, "int");
                  }else{
                   $row_song =1;
                }
                $song = pages($row_song);
                $row_song = mysql_fetch_array($song);
                ?>
                  <div class="song-albumbg" data-albumbg="">
                    <div class="album-bg" id="rotate-bg">
                      <img src="assets/image/<?php echo $row_song['images']?>" alt="album-img">
                    </div>
                    <style class="zplayer-style">.song-albumbg{width:217px;float:left!important;z-index:5!important;position:absolute;margin:-3px 0 0 -3px;top:4px;left:5px;transform:scale(.85)}.album-bg{position:relative;border-radius:100%;overflow:hidden;width:160px;height:160px}.album-bg img{height:100%;left:50%;position:absolute;transform:translateX(-50%)}#rotate-bg{animation:rotate-bg 15s infinite;animation-timing-function:linear}#rotate-bg.paused{animation-play-state:paused;-webkit-animation-play-state:paused}@keyframes rotate-bg{to{transform:rotate(1turn)}}</style>
                  </div>
                      <video style="background-image: url(assets/image/banner1.jpg); background-size: content;" controls loop width="730" height="210">
                      <source src="assets/audios/<?php echo $row_song['linkmp3']?>" type="audio/mpeg": codecs="theora, vorbis"/>
                      </video>
              </div>

                        <p style="font-variant: inherit;"> <a href="index.php?page=detailsong&id_song=<?php echo $row_song['id_song']?>" style="color: #f7f7a3; font-family: sans-serif; font-size: 15px;"><?php echo $row_song['namesong']?></a> - <a href="index.php?page=detailsinger&id_singer=<?php echo $row_song['id_singer']?>" style="color: #c5f9c5; font-family: sans-serif; font-size: 15px;"><?php echo $row_song['namesinger']?><?= $row_song['singer'] ?></a></p>
                        <p style="font-family: sans-serif; font-size: 14px;"> Thể loại: <?php echo $row_song['nametype']?> </p>
            </div>
                  <div class="ntttt">
                        
                    <div class="title" style="" ><h2 style="color: #8383fc">Lời Bài Hát- <?php echo $row_song['namesong']?></h2></div>
                        <div id="ntttt" class="content" style="background-color:#ecf0f1; color: #000; padding: 20px; margin-right: 20px ">
                           
                        <p style="font-family: sans-serif; font-size: 14px;"><?php echo $row_song['lyrics']; ?></p>
                        </div><!-- /.content -->
                        <div></div>
                    </div><!--/.content -->
                  </div>  

        <div class="col-md-4 left" style="height: 1000px;">
          <div class="album-info">
            <div class="image">
              <div class="overlay">
                <div class="view-wrap">
                  <div class="view">
                   <?php
                $baihat1 = mediaplayer();
                $row_baihat1 = mysql_fetch_array($baihat1);
                ?>
                    <a class="shape fancybox" href="assets/image/<?php echo $row_baihat1['images']?>" data-fancybox-group="gallery"><i class="fa fa-search"></i></a>
                  </div>
                </div><!-- /.view-wrap -->
              </div><!-- /.overlay -->
              <??>
              <img src="assets/image/<?php echo $row_baihat1['images']?>" alt="Event image">
            </div><!-- /.image -->

            <div class="list">
              <h2 style="color: #f78383">Gợi Ý Bài Hát</h2>

              <ul>
                    <?php
                      include ("includes/config.php");
                      $song = mysql_query("SELECT * FROM song 
                        inner join singer on singer.id_singer=song.id_singer      
                        inner join type on type.id_type=song.id_type 
                        ORDER BY rand()
                        Limit 6,12");
                      if(mysql_num_rows($song) == 0) {
                       echo "Không có dữ liệu nào";
                       die;
                      }
                      ?>
                      <?php
                      while($id_song = mysql_fetch_array($song)){
                      ?>
                    <li>
                      <span class="bold" >
                        <span></span><a href="index.php?page=detailsong&id_song=<?php echo $id_song['id_song']?>" style="color: #f7f7a3;"><?php echo $id_song['namesong']?></a>- 
                      </span> <a href="index.php?page=detailsinger&id_singer=<?php echo $id_song['id_singer']?>" style="color: #c5f9c5;"><?php echo $id_song['namesinger']?><?php echo $id_song['singer']?></a>
                    </li>
                    <?php
                      }
                    ?>
              </ul>
            </div><!--/.list -->
        
          </div><!--/.album-info -->

          <div class="album-share" style="">
            <div class="content">
              <div class="socmed-wrap">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-soundcloud"></i></a>
              </div><!-- /.socmed-wrap -->
            </div>
          </div><!--/.event-share -->
        </div><!--/.left -->
      
        


        <!--/.album-detail -->
          
        </div><!--/.right -->
      </div>
      </div><!-- /.container -->
    </section>
    <!-- Event Single End-->
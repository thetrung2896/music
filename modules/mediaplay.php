 <section class="about">
      <div class="container">
	<div class="col-md-6 right">
		<h2>ĐƯỢC NGHE NHIỀU NHẤT</h2>
        <div style="position: relative; width: 640px;">
          	<div class="textwrap">
          	 	<?php
	$singer = mediaplayer();
	$row_singer =  mysql_fetch_array($singer);
	?>
		<div class="song-albumbg" data-albumbg="">
			<div class="album-bg" id="rotate-bg">
				<img src="assets/image/<?php echo $row_singer['images']?>" alt="album-img">
			</div>
				<style class="zplayer-style">.song-albumbg{width:217px;float:left!important;z-index:5!important;position:absolute;margin:-3px 0 0 -3px;top:4px;left:5px;transform:scale(.85)}.album-bg{position:relative;border-radius:100%;overflow:hidden;width:160px;height:160px}.album-bg img{height:100%;left:50%;position:absolute;transform:translateX(-50%)}#rotate-bg{animation:rotate-bg 15s infinite;animation-timing-function:linear}#rotate-bg.paused{animation-play-state:paused;-webkit-animation-play-state:paused}@keyframes rotate-bg{to{transform:rotate(1turn)}}
				</style>
		</div>
	<video style="background-image: url(assets/image/banner.jpg); background-size: content;" controls loop width="538" height="210">
		<source src="assets/audios/<?php echo $row_singer['linkmp3']?>" type="audio/mpeg": codecs="theora, vorbis"/>
	</video>
			</div>

	<p style="font-variant: inherit;"> <a href="index.php?page=detailsong&id_song=<?php echo $row_singer['id_song']?>" style="color: #f7f7a3; font-family: sans-serif; font-size: 14px;"><?php echo $row_singer['namesong']?></a> - <a href="index.php?page=detailsinger&id_singer=<?php echo $row_singer['id_singer']?>" style="color: #c5f9c5; font-family: sans-serif; font-size: 14px;"><?php echo $row_singer['namesinger']?><?= $row_singer['singer'] ?></a></p>
	<p style="font-family: sans-serif; font-size: 14px;"> Thể loại: <?php echo $row_singer['nametype']?> </p>
		</div>

          <div class="content">
            <div id="jquery_jplayer_3" class="jp-jplayer" style="width: 0px; height: 0px;"><img id="jp_poster_0" style="width: 0px; height: 0px; display: none;"></div>
            <div id="jp_container_3" class="jp-audio" role="application" aria-label="media player">
              <div class="jp-type-playlist">
                <div class="jp-playlist">
                  <ul style="display: block;">
                  			<?php
								$song = mediaplayer1();
								while($row_song =  mysql_fetch_array($song)){
							?>
                  	<li class=""><div><a href="index.php?page=detailsong$id_song=<?php $row_song['id_song']?>" class="jp-playlist-item-remove" style="display: none;">×</a><a href="index.php?page=detailsong&id_song=<?= $row_song['id_song'] ?>" class="jp-playlist-item" tabindex="0" style="font-family: sans-serif; font-size: 14px; color: #f7f7a3;"><?= $row_song['namesong'] ?></a><a href="index.php?page=detailsinger&id_singer=<?= $row_song['id_singer'] ?>" style="font-family: sans-serif; font-size: 14px; color: #c5f9c5;"> - <?= $row_song['namesinger'] ?></a> </div></li>
                  				<?php 
                  					}
                  				 ?>
                  	</ul>
                </div>
                <div class="jp-no-solution" style="display: none;">
                  <span>Update Required</span>
                  To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
              </div><!-- /.jp-type-playlist -->
            </div><!-- /.jp-audio -->
          </div><!-- /.content -->

          


    </div><!-- /.col-md-6 -->

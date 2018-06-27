 <section class="latest-album">
      <div class="container">
        <div class="col-md-3 col-sm-3 intro-wrap">
          <div class="intro wow animated fadeIn" data-wow-delay="0.3s">
            <h3>Sự kiện</h3>
            <p>Chương Trình Khuyến Mãi Lễ 30/04 - 01/05 (Giảm 40% NTT Music VIP)</p>
            <p> 1. Chương trình: Giảm 40% Gói VIP 3 Tháng NTT Music VIP.</p>
            <p> 2. Gói VIP – Mệnh Giá: Gói 3 Tháng chỉ 50k ( Giá gốc 80k ).</p>
            <p> 3. Thời gian: 16:30 ngày 26/04 – đến 09:00 ngày 03/05.</p>
            <p> 4. Kênh Thanh Toán: Internet Banking, MoMo, Payoo. </p>
            <p> Noted: Không áp dụng cho hình thức thanh toán Thẻ Cào và In App Purchase.</p>
            <a href="index.php?page=rank&id_nation=1"><div class="def-button">Xem Tất Cả</div></a>
          </div>
        </div>
            <?php
                  include ("includes/config.php");
                  $song = mysql_query("SELECT * FROM song 
                    inner join singer on singer.id_singer=song.id_singer      
                    inner join type on type.id_type=song.id_type 
                    ORDER BY id_song DESC
                    Limit 3 ,3");
                  if(mysql_num_rows($song) == 0) {
                   echo "Không có dữ liệu nào";
                   die;
                  }
                  ?>
                  <?php
                  while($id_song = mysql_fetch_array($song)){
                  ?>
        <div class="col-md-3 col-sm-3 album-card-wrap wow animated fadeIn" data-wow-delay="0.2s">
          <div class="album-card">
            <div class="image hoverdir-target">
              <img style="font-family: sans-serif;" src="assets/image/<?php echo $id_song['image']?>" alt="image" >
              <div class="overlay">
                <div class="buy-wrapper">
                  <div class="buy">
                    <a class="link" href="index.php?page=detailsong&id_song=<?= $id_song['id_song'] ?>">
                      <span><strong class="bold" style="font-family: sans-serif;"><?=$id_song['namesinger'] ?></strong></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="text" style="height: 70px;">
              <a href="index.php?page=detailsong&id_song=<?php echo $id_song['id_song']?>"><div class="title" ><h4 style="font-family: sans-serif;"><?php echo $id_song['namesong']?></h4></div></a>
              <div class="genre"><span><a href="index.php?page=detailsinger&id_singer=<?php echo $id_song['id_singer']?>" style="color: #c5f9c5;"><?php echo $id_song['namesinger']?></a></span></div>

              <div class="tracks" style="margin-top: 6px; margin-right: -13px; left: 10px;top: 40px;"><span><i class="fa fa-music"></i> <?php echo number_format($id_song['view'])?></span></div>
            </div>
          </div><!-- /.album-card -->
        </div><!-- /.col-md-3 -->
      <?php
      }
      ?>
      </div><!-- /.container -->

    </section><!-- /.latest-album -->
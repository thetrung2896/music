 <footer class="footer">
      <div class="container">        
        <div class="col-md-4 col-sm-4 footer-row">
          <div class="title"><h4>GIỚI THIỆU</h4></div>
          <div class="content">
            <div class="text">
              <p>Đơn vị chủ quản: Công ty Cổ phần NTT- Music.</p>

              <p>Địa chỉ: Tòa nhà VTC Online, 18 Tam Trinh, Minh Khai, Hoàng Mai, Hà Nội</p>

              <p>Người chịu trách nhiệm nội dung: Ông Nguyễn Thế Trung - Email: thetrung.2896@gmail.com - Tel: 0165 99 66 31</p>

              <p>Giấy phép MXH số 499/GP-BTTTT do Bộ Thông Tin và Truyền thông cấp ngày 28/09/2015.</p>
              
            </div><!-- /.content -->
          </div><!-- /.text -->

          <div class="title"><h4>CHIA SẺ</h4></div>
          <div class="content">
            <div class="socmed-wrap">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-youtube"></i></a>
              <a href="#"><i class="fa fa-soundcloud"></i></a>
            </div><!-- /.socmed-wrap -->
          </div><!-- /.content -->
        </div><!-- /.footer-row -->

        <div class="col-md-4 col-sm-4 footer-row">
          <div class="title"><h4>SỰ KIỆN SẮP TỚI</h4></div>
          <div class="content">
            <ul class="upcoming-event">
              <li>
                <div class="col-md-1 col-sm-1 col-xs-1 date"><span class="number">20</span><br/>Oct</div>
                <div class="col-md-10 col-sm-10 col-xs-10 name">New Sound Wave - Camp Nou Stadium <br/> <a href="#" class="buy">Buy Ticket</a></div>
              </li>
              <li>
                <div class="col-md-1 col-sm-1 col-xs-1 date"><span class="number">21</span><br/>Sep</div>
                <div class="col-md-10 col-sm-10 col-xs-10 name">Glory Sound - Brigif Kujang 15 <br/> <a href="#" class="buy">Buy Ticket</a></div>
              </li>
              <li>
                <div class="col-md-1 col-sm-1 col-xs-1 date"><span class="number">10</span><br/>Nov</div>
                <div class="col-md-10 col-sm-10 col-xs-10 name">Bandung Berisik - Lanud Sulaeman <br/> <a href="#" class="buy">Buy Ticket</a></div>
              </li>
              <li>
                <div class="col-md-1 col-sm-1 col-xs-1 date"><span class="number">17</span><br/>Dec</div>
                <div class="col-md-10 col-sm-10 col-xs-10 name">Hammersonic - Gasibu Stadium<br/> <a href="#" class="buy">Buy Ticket</a></div>
              </li>
            </ul><!-- /.upcoming-event -->
          </div><!-- /.content -->
        </div><!-- /.footer-row -->

        <div class="col-md-4 col-sm-4 footer-row">
          <div class="title"><h4>Facebook</h4></div>
          <div class="content">
            <div class="content footer-images">
              <?php
              $image = singer2();
              While($row_image = mysql_fetch_array($image)){
              ?>
              <a class="fancybox" href="facbook.com/trung.the.2896" data-fancybox-group="gallery">
                <div class="image"><img src="assets/image/<?php echo $row_image['image']?>" alt="footer image"></div>
              </a>
              <?php
                }
              ?>
             
            </div><!-- /.footer-images -->
          </div><!-- /.content -->

          <div class="title"><h4>THẺ LIÊN QUAN</h4></div>
          <div class="content">
            <div class="tag-wrap" style="font-family: sans-serif;">
              <a href="#" class="tag">Music</a>
              <a href="#" class="tag">Nhạc Trẻ</a>
              <a href="#" class="tag">Rock</a>
              <a href="#" class="tag">Nhạc Bolero</a>
              <a href="#" class="tag">Guitar</a>
              <a href="#" class="tag">Band</a>
              <a href="#" class="tag">Bass</a>
              <a href="#" class="tag">Nhạc Vàng</a>
              <a href="#" class="tag">Nhạc Ballad</a>
              <a href="#" class="tag">Metal</a>
              <a href="#" class="tag">Hardcore</a>
              <a href="#" class="tag">Punk</a>
              <a href="#" class="tag">Scream</a>
              <a href="#" class="tag">Shout</a>
              <a href="#" class="tag">Progressive</a>
              <a href="#" class="tag">Fast</a>
              <a href="#" class="tag">Pop</a>
            </div><!-- /.tag-wrap -->
          </div><!-- /.content -->
        </div><!-- /.foooter-row -->
      </div><!-- /.container -->

    </footer><!-- /.footer -->

        <section class="copyright">
      <div class="container">
        <p>&copy; <a class="orange" href="http://themeforest.net/item/jukebox-responsive-music-and-band-template/10169985?ref=suavedigital">NTT-Music</a> All Right Reserved</p>
      </div>
    </section>
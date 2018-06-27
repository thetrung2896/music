 <!-- Blog Wrap Begin -->
    <style>
      
    </style>
    <section class="blog-wrap">
      <div class="container">
        <div class="col-md-8 post-section">

          <div class="post-single post-content">
            <div class="post-meta">
              <div class="date">
                <span><strong class="bold">30</strong><br/>Jan</span>
              </div>
              <?php 
              if (isset($_GET['id_singer'])) {
                $id_singer = $_GET['id_singer'];
                settype($id_singer, "int"); 
              }else {
                $id_singer=1;
              }
              $singer = singer3($id_singer);
              $row_singer = mysql_fetch_array($singer);
                  
             ?>
              <div class="like">
                <a href="#"><i class="fa fa-heart"></i> <?= number_format($row_singer['follow']) ?></a>
              </div>
            </div><!-- /.post-meta -->
            
            <div class="post-inner">
              <div class="post-media">
                <a href="#"><img src="assets/image/<?php echo $row_singer['image'] ?>" alt="Blog images"></a>
              </div>
              <div class="post-head">
                <div class="title"><a href="#"><h2><?php echo $row_singer['namesinger'] ?></h2></a></div>
                <div class="subtitle">
                  <a href="#">Lipet Studio</a> / <a href="#">Events</a> / <a href="#">77 comments</a>
                </div>
              </div>
              <div class="post-text" style="font-family: sans-serif;">
                <p "><?= $row_singer['profile'] ?></p>
              </div>

              <div class="share">
                <div class="title">
                  <h2>Share Post</h2>
                </div>
                <div class="socmed-wrap">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-youtube"></i></a>
                  <a href="#"><i class="fa fa-soundcloud"></i></a>
                  <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
              <div class="comment">
                <div class="title">
                  <h2>Comments</h2>
                </div>

                <div class="comment-list indent-one">
                  <div class="comment-container">
                    <div class="avatar"><img src="assets/images/personnel1.jpg" alt="blog avatar"></div>
                    <div class="content">
                      <h4 class="name">
                        Bùi Anh Tuấn
                        <span><a href="#">Aug 11, 10:05 pm</a></span>
                      </h4><!--/.name-->
                      <div class="text">
                        Bài này hay quá anh em ủng hộ anh ấy đi (y).
                      </div><!--/.text-->
                      <div class="reply"><a href="#">Reply</a></div>
                    </div><!--/.content-->
                  </div><!--/.comment-container-->
                </div><!--/.comment-list-->

                <div class="comment-list indent-two">
                  <div class="comment-container">
                    <div class="avatar"><img src="assets/images/personnel2.jpg" alt="blog avatar"></div>
                    <div class="content">
                      <h4 class="name">
                        Đoàn Văn Nam
                        <span><a href="#">Aug 11, 10:05 pm</a></span>
                      </h4><!--/.name-->
                      <div class="text">
                        Nghe đi nghe lại vẫn không chán!!!!!!!!!!
                      </div><!--/.text-->
                      <div class="reply"><a href="#">Reply</a></div>
                    </div><!--/.content-->
                  </div><!--/.comment-container-->
                </div><!--/.comment-list-->

                <div class="comment-list indent-one">
                  <div class="comment-container">
                    <div class="avatar"><img src="assets/images/personnel3.jpg" alt="blog avatar"></div>
                    <div class="content">
                      <h4 class="name">
                        Đỗ Văn Tuấn
                        <span><a href="#">Aug 11, 10:05 pm</a></span>
                      </h4><!--/.name-->
                      <div class="text">
                        good. hay hay...... quá hay.
                      </div><!--/.text-->
                      <div class="reply"><a href="#">Reply</a></div>
                    </div><!--/.content-->
                  </div><!--/.comment-container-->
                </div><!--/.comment-list-->

                <div class="comment-list indent-one">
                  <div class="comment-container">
                    <div class="avatar"><img src="assets/images/personnel4.jpg" alt="blog avatar"></div>
                    <div class="content">
                      <h4 class="name">
                        Thúy Bờm
                        <span><a href="#">Aug 11, 10:05 pm</a></span>
                      </h4><!--/.name-->
                      <div class="text">
                        hay quá a ơi....ngoài kia bao la sóng gió,đừng quên tên anh....
                      </div><!--/.text-->
                      <div class="reply"><a href="#">Reply</a></div>
                    </div><!--/.content-->
                  </div><!--/.comment-container-->
                </div><!--/.comment-list-->

              </div><!--/.comment-->

              <div class="respond">
                <div class="title">
                  <h2>Leave a reply</h2>
                </div>
                <form action="#">
                  <div class="row">
                    <div class="col-md-4">
                      <label for="author">Name<span class="required">*</span></label>
                      <input id="author" class="form-control" name="author" type="text" required>
                    </div>
                    <div class="col-md-4">
                      <label for="email">Email<span class="required">*</span></label>
                      <input id="email" class="form-control" name="author" type="text" required>
                    </div>
                    <div class="col-md-4">
                      <label for="url">Website<span class="required">*</span></label>
                      <input id="url" class="form-control" name="url" type="text" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label for="comment">Add Your Comment</label>
                      <textarea id="comment" class="form-control" name="comment" required></textarea>
                      <input name="submit" type="submit" id="submit" class="def-button" value="Submit Comment">
                    </div>
                  </div>
                </form>
              </div><!--/.respond-->
            </div><!-- /.post-inner -->
          </div><!-- /.post-content -->

        </div><!-- /.post-section -->
        <div class="col-md-4 sidebar-section">
              <div class="post-archives">
                <div class="title">
                  <h3><span class="shape"><i class="fa fa-music"></i></span>  BÀI HÁT LIÊN QUAN</h3>
                </div>
                <div class="content">
                  <ul>
                    <?php 
                    if (isset($_GET['id_singer'])) {
                      $id_singer1 = $_GET['id_singer'];
                    }else {
                      $id_singer1= '';
                    } 
                    $singer1 = mysql_query("SELECT * FROM song inner join singer
                                            on singer.id_singer = song.id_singer
                                            where song.id_singer =".$id_singer1."
                                             
                                            "
                                            );
                    while ($row_singer1 = mysql_fetch_array($singer1)) {  
                     ?>
                      <li>
                        <a href="index.php?page=detailsong&id_song=<?= $row_singer1['id_song'] ?>" style="color: #f7f7a3;"><i class="icon-caret-right" ></i> <?php echo $row_singer1['namesong'] ?> <span style="color: #c5f9c5;"><?= $row_singer1['namesinger'] ?></span></a>
                      </li>
                    <?php 
                      }
                     ?>
                  </ul>
                </div><!--/.content-->
              </div><!--/.post-archives-->
          <div class="recent-post">
            <div class="title">
              <h3><span class="shape"><i class="fa fa-user"></i></span> MỘT SỐ CA SĨ KHÁC</h3>
            </div>
            <div class="content">
              <ul>
                <?php
                      include ("includes/config.php");
                      $casi = mysql_query("SELECT * FROM singer  
                        ORDER BY rand()
                        Limit 6,12");
                      if(mysql_num_rows($casi) == 0) {
                       echo "Không có dữ liệu nào";
                       die;
                      }
                      ?>
                      <?php
                      while($row_casi = mysql_fetch_array($casi)){
                      ?>
                <li>
                  <a href="index.php?page=detailsinger&id_singer=<?= $row_casi['id_singer'] ?>" style="color: #c5f9c5;"><?= $row_casi['namesinger'] ?></a>
                    <div class="like">
                      <a href="#"><i class="fa fa-heart"></i> <?= number_format($row_casi['follow']) ?></a>
                    </div>
                </li>
                <?php 
                  }
                 ?>
              </ul>
            </div><!--/.content-->
          </div><!--/.recent-post-->

          

          <div class="post-tags">
            <div class="title">
              <h3><span class="shape"><i class="fa fa-tag"></i></span> Popular Tags</h3>
            </div>
            <div class="content">
              <a href="#"><span class="tag-label">Concert News</span></a>
              <a href="#"><span class="tag-label">Event</span></a>
              <a href="#"><span class="tag-label">Field Report</span></a>
              <a href="#"><span class="tag-label">Tutorial</span></a>
              <a href="#"><span class="tag-label">Inside Us</span></a>
            </div><!--/.content-->
          </div><!--/.post-tags-->

          <div class="post-archives">
            <div class="title">
              <h3><span class="shape"><i class="fa fa-calendar-o"></i></span>  Archives</h3>
            </div>
            <div class="content">
              <ul>
                <li>
                  <a href="#"><i class="icon-caret-right"></i> January <span>(13)</span></a>
                </li>
                <li>
                  <a href="#"><i class="icon-caret-right"></i> February <span>(7)</span></a>
                </li>
                <li>
                  <a href="#"><i class="icon-caret-right"></i> March <span>(20)</span>
                  </a>
                </li>
                <li>
                  <a href="#"><i class="icon-caret-right"></i> April <span>(34)</span></a>
                </li>
              </ul>
            </div><!--/.content-->
          </div><!--/.post-archives-->

          <div class="post-tags">
            <div class="title">
              <h3><span class="shape"><i class="fa fa-tag"></i></span> Popular Tags</h3>
            </div>
            <div class="content">
              <a href="#"><span class="tag-label">Web Development</span></a>
              <a href="#"><span class="tag-label">Web Design</span></a>
              <a href="#"><span class="tag-label">Graphic Design</span></a>
              <a href="#"><span class="tag-label">UI/UX Design</span></a>
              <a href="#"><span class="tag-label">Photography</span></a>
            </div><!--/.content-->
          </div><!--/.post-tags-->

        </div><!-- /.sidebar-section -->
      </div><!-- /.container -->
    </section><!-- /.blog-wrap -->
    <!-- Blog Wrap End -->
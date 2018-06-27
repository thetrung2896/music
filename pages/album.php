<!-- Album list Begin -->
    <section class="gallery-list-wrap">
      <div class="container">
        <?php
                if(isset($_GET["id_nation"])){
                 $id_nation = $_GET["id_nation"];
                  settype($id_nation, "int");
                  }else{
                   $id_nation =1;
                }
                $nation = page($id_nation);
                $row_nation = mysql_fetch_array($nation);
                ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="main-title">
            <h1>
              Album
              <span class="light"> <?php echo $row_nation['namnation']?></span>
            </h1>
            <div class="text-wrap">
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-3 image-wrap">
          <div class="image hoverdir-target">
            <div class="overlay">
              <div class="view-wrap">
                <div class="view">
                  <a class="shape fancybox" href="assets/image/gallery1.jpg" data-fancybox-group="contentgallery"><i class="fa fa-search"></i></a>
                </div>
              </div><!-- /.view-wrap -->
            </div><!-- /.overlay -->
            <img src="assets/image/gallery1.jpg" alt="Event image">
          </div><!-- /.image -->
        </div><!-- /.album-card-wrap -->

        <div class="col-md-3 col-sm-3 image-wrap">
          <div class="image hoverdir-target">
            <div class="overlay">
              <div class="view-wrap">
                <div class="view">
                  <a class="shape fancybox" href="assets/image/gallery2.jpg" data-fancybox-group="contentgallery"><i class="fa fa-search"></i></a>
                </div>
              </div><!-- /.view-wrap -->
            </div><!-- /.overlay -->
            <img src="assets/image/gallery2.jpg" alt="Event image">
          </div><!-- /.image -->
        </div><!-- /.album-card-wrap -->

        <div class="col-md-3 col-sm-3 image-wrap">
          <div class="image hoverdir-target">
            <div class="overlay">
              <div class="view-wrap">
                <div class="view">
                  <a class="shape fancybox" href="assets/image/gallery3.jpg" data-fancybox-group="contentgallery"><i class="fa fa-search"></i></a>
                </div>
              </div><!-- /.view-wrap -->
            </div><!-- /.overlay -->
            <img src="assets/image/gallery3.jpg" alt="Event image">
          </div><!-- /.image -->
        </div><!-- /.album-card-wrap -->

        <div class="col-md-3 col-sm-3 image-wrap">
          <div class="image hoverdir-target">
            <div class="overlay">
              <div class="view-wrap">
                <div class="view">
                  <a class="shape fancybox" href="assets/image/gallery4.jpg" data-fancybox-group="contentgallery"><i class="fa fa-search"></i></a>
                </div>
              </div><!-- /.view-wrap -->
            </div><!-- /.overlay -->
            <img src="assets/image/gallery4.jpg" alt="Event image">
          </div><!-- /.image -->
        </div><!-- /.album-card-wrap -->

        <div class="col-md-3 col-sm-3 image-wrap">
          <div class="image hoverdir-target">
            <div class="overlay">
              <div class="view-wrap">
                <div class="view">
                  <a class="shape fancybox" href="assets/image/gallery5.jpg" data-fancybox-group="contentgallery"><i class="fa fa-search"></i></a>
                </div>
              </div><!-- /.view-wrap -->
            </div><!-- /.overlay -->
            <img src="assets/image/gallery5.jpg" alt="Event image">
          </div><!-- /.image -->
        </div><!-- /.album-card-wrap -->

        <div class="col-md-3 col-sm-3 image-wrap">
          <div class="image hoverdir-target">
            <div class="overlay">
              <div class="view-wrap">
                <div class="view">
                  <a class="shape fancybox" href="assets/image/gallery6.jpg" data-fancybox-group="contentgallery"><i class="fa fa-search"></i></a>
                </div>
              </div><!-- /.view-wrap -->
            </div><!-- /.overlay -->
            <img src="assets/image/gallery6.jpg" alt="Event image">
          </div><!-- /.image -->
        </div><!-- /.album-card-wrap -->

        <div class="col-md-3 col-sm-3 image-wrap">
          <div class="image hoverdir-target">
            <div class="overlay">
              <div class="view-wrap">
                <div class="view">
                  <a class="shape fancybox" href="assets/image/gallery7.jpg" data-fancybox-group="contentgallery"><i class="fa fa-search"></i></a>
                </div>
              </div><!-- /.view-wrap -->
            </div><!-- /.overlay -->
            <img src="assets/image/gallery7.jpg" alt="Event image">
          </div><!-- /.image -->
        </div><!-- /.album-card-wrap -->

        <div class="col-md-3 col-sm-3 image-wrap">
          <div class="image hoverdir-target">
            <div class="overlay">
              <div class="view-wrap">
                <div class="view">
                  <a class="shape fancybox" href="assets/image/gallery8.jpg" data-fancybox-group="contentgallery"><i class="fa fa-search"></i></a>
                </div>
              </div><!-- /.view-wrap -->
            </div><!-- /.overlay -->
            <img src="assets/image/gallery8.jpg" alt="Event image">
          </div><!-- /.image -->
        </div><!-- /.album-card-wrap -->

        <div class="pagination-wrap col-md-12">
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#" class="active"><span>1</span></a></li>
            <li><a href="#"><span>2</span></a></li>
            <li><a href="#"><span>3</span></a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul><!-- /.pagination -->
        </div><!-- /.pagination-wrap -->

      </div><!--/.container -->
    </section>
    <!-- Album list End -->
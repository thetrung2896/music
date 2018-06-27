
 <section class="album-list-wrap">
      <div class="container">
            <?php
                if(isset($_GET["id_nation"])){
                 $id_nation = $_GET["id_nation"];
                  settype($id_nation, "int");
                  }else{
                   $id_nation =1;
                }
                $nation1 = page($id_nation);
                $row_nation1 = mysql_fetch_array($nation1);
                ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="main-title">
            <h1>
              BXH
              <span class="light"><?php echo $row_nation1['namnation']?></span>
            </h1>
            <div class="text-wrap">
            </div>
          </div>
        </div>
        
         <?php
         $i=1;
                if(isset($_GET["id_nation"])){
                 $id_nation = $_GET["id_nation"];
                  settype($id_nation, "int");
                  }else{
                   $id_nation =1;
                }
                $nation = page($id_nation);
                while($row_nation = mysql_fetch_array($nation)){
                ?>
        <div class="col-md-4 col-sm-4 album-card-wrap">
          <div class="album-card">
            <div class="image hoverdir-target">
              <img src="assets/image/<?php echo $row_nation['images']?>" alt="image">
              <div class="overlay">
                <a class="buy-wrapper" href="index.php?page=detailsong&id_song=<?php echo $row_nation['id_song']?>">
                  
                </a>
              </div>
            </div>
            <div class="text">
              <a href="index.php?page=detailsong&id_song=<?php echo $row_nation['id_song']?>"><div class="title"><h4><?php echo $row_nation['namesong']?></h4></div></a>
              <div class="genre"><span>Top: <?php echo $i?></span></div>
              <div class="tracks"><span><i class="fa fa-music"></i> <?php echo number_format($row_nation['view'])?></span></div>
            </div>
          </div><!-- /.album-card -->
        </div><!-- /.album-card-wrap -->
          <?php
          $i++;
        }
        ?>
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
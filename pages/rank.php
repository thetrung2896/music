
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
         $i=0;
                if(isset($_GET["id_nation"])){
                 $id_nation = $_GET["id_nation"];
                  settype($id_nation, "int");
                  }else{
                   $id_nation =1;
                }
                  $so = 9;
                  if(isset($_GET['trang'])){
                    $trang = $_GET['trang'];
                    settype($trang, 'int');
                  }else{
                    $trang = 1;

                  }
                  $from = ($trang-1) * $so;
                  $i = ($trang-1) * $so;
                  $phantrang = phantrang($id_nation, $from, $so);
                  while($row_phantrang = mysql_fetch_array($phantrang)){

                ?>
        <div class="col-md-4 col-sm-4 album-card-wrap">
          <div class="album-card">
            <div class="image hoverdir-target">
              <img src="assets/image/<?php echo $row_phantrang['images']?>" alt="image">
              <div class="overlay">
                <a class="buy-wrapper" href="index.php?page=detailsong&id_song=<?php echo $row_phantrang['id_song']?>">
                  
                </a>
              </div>
            </div>
            <div class="text">
              <a href="index.php?page=detailsong&id_song=<?php echo $row_phantrang['id_song']?>"><div class="title"><h4><?php echo $row_phantrang['namesong']?></h4></div></a>
              <div class="genre"><span>Top: <?php echo $i+1?></span></div>
              <div class="tracks"><span><i class="fa fa-music"></i> <?php echo number_format($row_phantrang['view'])?></span></div>
            </div>
          </div><!-- /.album-card -->
        </div><!-- /.album-card-wrap -->
          <?php
          $i++;
        
      }
        ?>




        <div class="pagination-wrap col-md-12">
          <ul class="pagination">
            <!-- Previous -->
              <?php  
              if(!isset($_GET['trang']) || $_GET['trang']==1){

              ?>
              <li class="disabled"><a  href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>  </li>             
              <?php 
              }else{

               ?>

              <li><a href="http://localhost/music/index.php?page=rank&id_nation=<?php echo $id_nation ?>&trang=<?php echo $_GET['trang']-1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
              </li>
              <?php 
                }
               ?>
               <!-- end Previous -->

            <!-- trang -->
            <?php 
              $t = page($id_nation);
              $tongsobaihat = mysql_num_rows($t);
              $tongsotrang = ceil($tongsobaihat/$so);
              for ($i=1; $i <=$tongsotrang ; $i++) { 
                if(isset($_GET['trang'])){
                  $pg = $_GET['trang'];
                }else{
                  $pg = '';
                }
              if ($pg == $i) {
              ?>
                <li><a href="http://localhost/music/index.php?page=rank&id_nation=<?php echo $id_nation ?>&trang=<?php echo $i ?>" class="active"><span><?php echo $i ?></span></a></li>
              <?php 
              }else{
 
               ?>
               <li><a href="http://localhost/music/index.php?page=rank&id_nation=<?php echo $id_nation ?>&trang=<?php echo $i ?>" class=""><span><?php echo $i ?></span></a></li>
               <?php 
                }
                ?>
              



            
            <?php
            }
             ?>
           <!-- end trang -->

            <!-- next -->
            <?php 
            if(!isset($_GET['trang'])){
             ?>


               <li><a href="http://localhost/music/index.php?page=rank&id_nation=<?php echo $id_nation ?>&trang=<?php echo $_GET['trang']=2 ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a></li>

              <?php 

            }elseif ($_GET['trang']==$tongsotrang) {
            
            ?>

            <li  class="disabled"><a href="" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a></li>

              <?php  
            }else{
              ?>

                <li ><a href="http://localhost/music/index.php?page=rank&id_nation=<?php echo $id_nation ?>&trang=<?php echo $_GET['trang']+1 ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a></li>

              <?php 
              }
               ?>
            <!-- end next -->
            
          </ul><!-- /.pagination -->
        </div><!-- /.pagination-wrap -->

      </div><!--/.container -->
    </section>
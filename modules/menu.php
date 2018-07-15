  <!--   <?php 
    // include 'includes/access_search.php';
     ?> -->
    <nav class="navbar fixonscroll solidnavbar navbar-inverse" role="navigation" id="home-nav" >

      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="index.php?page=home"><img src="assets/images/ntt_logo.png" alt="NTT Logo" style="width:100px"></a>


        </div><!-- /.navbar-header -->

        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav">

            <li class="active" style="left: 20px"><a href="index.php?page=home">Trang chủ</a></li>

            <li class="dropdown" style="left: 20px">
              <a class="dropdown-toggle" data-toggle="dropdown" href="event-list.html">
                Sự kiện <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu animated fadeIn" role="menu">
                <li><a href="index.php?page=home">Danh sách sự kiện</a></li>
                <li><a href="index.php?page=home">Sự kiện duy nhất</a></li>                
              </ul>
            </li><!-- /.dropdown -->
                
            <li class="dropdown" style="left: 20px">
              <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?page=rank">
                BXH <i class="fa fa-angle-down"></i>
              </a>
              
              <ul class="dropdown-menu animated fadeIn" role="menu">
                <?php
                  include ("includes/config.php");
                  $nation = mysql_query("SELECT * FROM nation");
                  if(mysql_num_rows($nation) == 0) {
                   echo "Không có dữ liệu nào";
                   die;
                  }
                  ?>
                  <?php
              while($id_nation = mysql_fetch_array($nation)){
                  ?>
                <li><a href="index.php?page=rank&id_nation=<?php echo $id_nation['id_nation']?>&trang=1"><?php echo $id_nation['namnation']?></a></li>
                <?php
                }
                ?>


              </ul>
               
            </li>

            <li class="dropdown" style="left: 20px">
              <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?page=album">
                Album <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu animated fadeIn" role="menu">
                <?php
                  include ("includes/config.php");
                  $nation = mysql_query("SELECT * FROM nation");
                  if(mysql_num_rows($nation) == 0) {
                   echo "Không có dữ liệu nào";
                   die;
                  }
                  ?>
                  <?php
              while($id_nation = mysql_fetch_array($nation)){
                  ?>
                <li><a href="index.php?page=album&id_nation=<?php echo $id_nation['id_nation']?>"><?php echo $id_nation['namnation']?></a></li>
                <?php
                }
                ?>
              </ul>
            </li><!-- /.dropdown -->

            <li style="left: 20px">
              <a href="index.php?page=home" class="brand"><img src="assets/images/ntt_logo.png" alt="Jukebox Logo" style= "width:100px"></a>
            </li>

            

             <li class="dropdown" style="left: 20px">
              <a class="dropdown-toggle" data-toggle="dropdown" href="about.html">
                Khác <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu animated fadeIn" role="menu">
                <li><a href="index.php?page=home">About</a></li>
                <li><a href="index.php?page=home">404 Page</a></li>
              </ul>
            </li><!-- /.dropdown -->
            
            <li class="dropdown" style="left: 35px">
              <div id="sug" class="section-search">
                <form action="index.php?page=search" method="post" class="search">
                  <input type="text" name="txtsearch" placeholder="Search..." class="input-txt" autocomplete="off">
                  <span class="input-btn">
                      <button type="submit" class="zicon btn" name="search"><i class="fa fa-search" ></i></button>
                  </span>
                </form>
              </div>
            </li><!-- /.dropdown -->
           
            
             
<!-- /.dropdown -->
            
 
            </form>
          </ul><!-- /.nav -->
         
        </div><!--/.nav-collapse -->
      </div><!--/.container -->
    </nav><!--/.navbar -->
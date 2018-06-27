
<div class="container">
    <div class="text-xs-center">
                        <nav class="navbar navbar-light bg-faded">
                            <a class="navbar-brand" href="../index.php?page=home"><img src="http://ntt.com:8080/assets/image/ntt_logo.png" style="width:60px"></a>
                            <ul class="nav navbar-nav" style="margin-top: 15px;">
                                <li class="nav-item active">
                                    <a class="nav-link" href="./">Quản lý thành viên <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=song">Quản lý bài hát</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=singer">Quản lý ca sĩ</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=type">Quản lý thể loại</a>
                                </li>
                                
                            </ul>
                            
                        </nav>  
    </div>
    <form action="" method="post"><button name="out" class="btn btn-warning" style="float:right;">Đăng Xuất <span class="glyphicon glyphicon-log-out"></span></button></form>
        
</div>
<?php
if(isset($_POST['out'])){
    session_destroy();
    echo '<script type="text/javascript">
        window.location.href="login.php";

        
        </script>';
}
?>
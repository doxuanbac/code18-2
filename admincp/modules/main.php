<div class = "clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action'])){
            $tam = $_GET['action'];
        }else{
            $tam='';
        }
        if($tam=='quanlydanhmucsanpham'){
            include("modules/quanlydanhmucsp/them.php");
            include("modules/quanlydanhmucsp/lietke.php");
        }elseif($tam=='quanlysanpham'){
            include("modules/quanlysanpham/them.php");
            include("modules/quanlysanpham/lietke.php");
        }
        else{
            include("modules/dashboard.php");
        }
    ?>
</div>
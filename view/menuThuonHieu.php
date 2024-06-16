<?php
    include_once("controller/cThuongHieu.php");
    $p=new cThuongHieu();
    $tbl=$p->getAllTH();
    if($tbl){
       echo "<ul>";
       while($r=mysqli_fetch_assoc($tbl)){
        echo "<li><a href='#'>".$r["tenth"]."</a></li>";
       }
       echo "</ul>";
    }
?>
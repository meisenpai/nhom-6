<?php
    include_once("controller/cSanPham.php");
    $p=new cSanPham();
    $tbl=$p->getAllSP();
    if($tbl){
        $dem=0;
        echo "<div class='box-pro'>";
        echo "<table align='center'>";
        echo "<tr>";
        while($r=mysqli_fetch_assoc($tbl)){
            echo "<td>";
            echo "<img src='img/".$r["hinh"]."' width='200px'> <br>";
            echo $r["tensp"]."<br>";
            echo number_format($r["giaban"],"0",",",".")."VND <br>";
            echo "<s>".number_format($r["giagoc"],"0",",",".")."VND</s>";
            echo "</td>";
            $dem++;
            if($dem%4==0){
                echo "</tr><tr>";
            }
        }
        echo "</tr>";
        echo "</table>";
        echo "</div>";
    }
?>
<?php
    include_once("controller/cSanPham.php");
    $p=new cSanPham();
    $tbl=$p->getAllSP();
    if($tbl){
        echo "<table>";
        echo "<tr>";
        echo "<th>Mã Sản Phẩm</th>";
        echo "<th>Tên Sản Phẩm</th>";
        echo "<th>Hình Ảnh</th>";
        echo "<th>Giá gốc</th>";
        echo "<th>Giá bán</th>";
        echo "<th>Mô tả</th>";
        echo "<th>Thương Hiệu</th>";
        echo "</tr>";
        while($r=mysqli_fetch_assoc($tbl)){
            echo "<tr>";
            echo "<td>".$r["idsp"]."</td>";
            echo "<td>".$r["tensp"]."</td>";
            echo "<td>"."<img src='img/".$r["hinh"]."' width='100px'>"."</td>";
            echo "<td>".number_format($r["giagoc"],"0",",",".")."VND</td>";
            echo "<td>".number_format($r["giaban"],"0",",",".")."VND</td>";
            echo "<td>".$r["mota"]."</td>";
            echo "<td>".$r["tenth"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>
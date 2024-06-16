<?php
    include_once("ketnoi.php");
    class mThuongHieu{
        public function selectallTH(){
            $p=new clsKetNoi();
            $con =$p->moKetNoi();
            $query="select *from thuonghieu";
            $kq=mysqli_query($con,$query);
            $p->dongKetNoi($con);
            return $kq;
        }
    }
?>
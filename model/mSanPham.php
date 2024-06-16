<?php
    include_once("ketnoi.php");
    class mSanPham{
        public function selectallSP(){
            $p=new clsKetNoi();
            $con =$p->moKetNoi();
            $query="select *from sanpham s join thuonghieu th on th.idth=s.idth";
            $kq=mysqli_query($con,$query);
            $p->dongKetNoi($con);
            return $kq;
        }
    }
?>
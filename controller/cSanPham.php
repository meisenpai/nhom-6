<?php
    include_once("model/mSanPham.php");
    class cSanPham{
        public function getAllSP(){
            $p=new mSanPham();
            $kq=$p->selectallSP();
            if(mysqli_num_rows($kq)){
                return $kq;
            }else{
                return false;
            }
        }
    }
?>
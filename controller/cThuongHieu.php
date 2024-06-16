<?php
    include_once("model/mThuongHieu.php");
    class cThuongHieu{
        public function getAllTH(){
            $p=new mThuongHieu();
            $kq=$p->selectallTH();
            if(mysqli_num_rows($kq)){
                return $kq;
            }else{
                return false;
            }
        }
    }
?>
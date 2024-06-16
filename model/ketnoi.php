<?php
    class clsKetNoi{
        public function moKetNoi(){
            return mysqli_connect("localhost","tuan","123456","aobongda");
        }
        public function dongKetNoi($con){
            mysqli_close($con);
        }
    }
?>
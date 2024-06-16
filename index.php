<div class="container">
    <header>
        <h1>Banner Website</h1>
        <div class="header">
            <div class="menu">

            </div>

        </div>
    </header>
    <div class="body">
        <div class="left">
            <?php
                include("view/menuThuonHieu.php");
            ?>
        </div>
        <div class="right">
            <?php
            include("view/listSanPham.php");
            //include("view/tableSanPham.php");
            ?>
        </div>
    </div>
</div>
<style>
    .container{
        width:80%;
        border:1px solid black;
        margin: auto;
    }
    .body{
        display: flex;

    }
    .left{
        width: 20%;
        border: 1px solid black;
    }
    .right{
        width: 80%;
        border: 1px solid black;
        margin: auto;
    }
</style>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
    body
    {
        font-family:Verdana;
        font-size:9pt;
    }
    .sanpham
    {
        width:200px;
        border:thin dotted #99ccff;
        border-radius:5px;
        margin:19px;padding:5px;
        text-align:center;
        float:left;
    }
    .sanpham:hover
    {
        width:200px;
        border:thin solid darkblue;
        box-shadow:5px 5px 5px #99ccff;
    }
    .sanpham img
    {width:180px;margin:10px;border:thin solid #99ccff;}
    .sanpham .ten
    {
        color:darkblue;
        font-size:11pt;
        font-weight:bold;
    }
    .sanpham .gia
    {
        color:red;
        font-size:11pt;
        font-weight:bold;
    }
    .sanpham a
    {
        color:grey;
        font-size:9pt;
    }
    .sanpham a:hover
    {
        color:red;
    }
</style>
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', 'vertrigo');
        mysqli_select_db($link, 'dulieu');
        mysqli_set_charset($link, 'latin1');
        $results = mysqli_query($link, 'select * from sanpham');
        while($dong = mysqli_fetch_array($results)){
            echo'
                <div class="sanpham">
                    <a href="#"><img src="'.$dong['hinhanh'].'"></a><br>
                    <a href="#" class="ten">'.$dong['tensp'].'</a><br>
                    <a href="#" class="gia">'.number_format($dong['gia']).'</a><br>
                    <p><a href="#">Chi tiết</a> | <a href="#">Đặt mua</a></p>
                </div>
            ';
        }
    ?>
</body>
</html>
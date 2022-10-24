<?php
    $link = mysqli_connect('localhost', 'root', 'vertrigo');
    mysqli_select_db($link, 'dulieu_de1_ltweb');

    $ten = $_POST['txtten'];
    $gia = $_POST['txtgia'];
    $danhmuc = $_POST['txtdm'];

    //$sTruyVan = "INSERT INTO `sanpham`(`tensp`, `gia`, `danhmuc`) VALUES ('$ten',$gia,'$danhmuc')";//"ten", va "danhmuc" la chuoi nen bo trong dau nhai "gia" la so nen khoi
    $sTruyVan = "INSERT INTO `sanpham`(`tensp`, `gia`, `danhmuc`) VALUES ('hoa yasuo',$gia,'thang ngu')";
    $results = mysqli_query($link, $sTruyVan);
    
    if($results)
        echo 'Đăng nhập thành công';
    else
        echo 'Sai cái gì không biết luôn';
?>
<a href="form.php">Thêm </s>
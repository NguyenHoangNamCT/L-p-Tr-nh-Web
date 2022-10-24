<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        table 
        {
            border-collapse:collapse;
            width:600px;
            margin:auto;
        }
        th, td 
        {
            text-align: left;
            padding: 8px;
        }
            th{color: darkblue;background-color:white;
            border-top:solid darkblue 2px;
            border-bottom:solid darkblue 2px;
        }
        tr{border-bottom: solid darkblue 1px;}
        tr:nth-child(odd){background-color: #FAFAFA;}
        tr:nth-child(even){background-color: #F0F0FF;}
    </style>
</head>
<body>
    <table>
        <tr><th>Tên hàng</th><th>Giá bán</th></tr>
        <?php
        //lấy danh sách
            //kết nối
            $link = mysqli_connect('127.0.0.1', 'root', 'vertrigo');
            //chọn csdl
            mysqli_select_db($link, 'qlhanghoa');
            //chuyển bảng mã nếu cần, lưu ý nhớ để trước khi thực hiện truy vấn
            mysqli_set_charset($link, 'latin1');
            //xử lý truy vấn
            $sTruyVan = "select * from mathang";
            $kq = mysqli_query($link, $sTruyVan);
            //show dữ liệu lấy được lên table
            //$dong = mysqli_fetch_array($kq); biến một dòng của csdl thành mảng, trả về một mảng nếu tìm được hàng hợp lệ, null nếu không còn hàng nào, false khi bị lỗi
            while($dong = mysqli_fetch_array($kq)){
                //var_dump($dong);
                echo'
                    <tr>
                        <td>'.$dong['tenhang'].'</td>
                        <td>'.$dong['giaban'].'</td>
                    </tr>
                ';
            }
        ?>
    </table>
</body>
</html>
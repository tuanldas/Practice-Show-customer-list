<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .thumbnail {
            height: 60px;
            width: 100px;
            overflow: hidden;
        }

        .thumbnail img {
            width: 100%;
        }
    </style>
</head>
<body>
<form method="post" action="my.php">
    <table border="0" style="text-align: center">
        <tr>
            <h1 style="text-align: center">Danh sách khách hàng</h1>
            <input type="text" name="tim"
                   style="width: 50%; height: 48px; font-size: 30px; margin-left: 20%; border: 2px solid navajowhite">
            <input type="submit" name="submit" value="Finding"
                   style="width: 9%; height: 48px; font-size: 30px; background-color: #cccccc; color: white">

        </tr>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php
        $customerlists = [
            "1" => ["ten" => "Mai Văn Hoàn", "ngaysinh" => "1983-08-20", "diachi" => "Hà Nội", "anh" => "images/img1.jpg"],
            "2" => ["ten" => "Nguyễn Văn Nam", "ngaysinh" => "1983-08-21", "diachi" => "Bắc Giang", "anh" => "images/img2.jpg"],
            "3" => ["ten" => "Nguyễn Thái Hòa", "ngaysinh" => "1983-08-22", "diachi" => "Nam Định", "anh" => "images/img3.jpg"],
            "4" => ["ten" => "Trần Đăng Khoa", "ngaysinh" => "1983-08-17", "diachi" => "Hà Tây", "anh" => "images/img4.jpg"],
            "5" => ["ten" => "Nguyễn Đình Thi", "ngaysinh" => "1983-08-19", "diachi" => "Hà Nội", "anh" => "images/img5.jpg"]
        ];

        foreach ($customerlists as $key => $values) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $values['ten'] . "</td>";
            echo "<td>" . $values['ngaysinh'] . "</td>";
            echo "<td>" . $values['diachi'] . "</td>";
            echo "<td><div class='thumbnail'><image src = '" . $values['anh'] . "'/></div></td>";
            echo "</tr>";
        }
        ?>
    </table>
</form>
</body>
</html>
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
        width: 100px;
    }

    .thumbnails{
        height: 238px;
        width: 286px;
        overflow: hidden;
        margin-left: 17%;
        border: 3px solid red;
    }

    .thumbnails img{
        width: 100%;
    }
</style>
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
    <div style="margin-left: 450px; border: 2px solid navy; width: 450px; ">
        <?php
        /**
         * Created by PhpStorm.
         * User: Asus
         * Date: 10/09/2018
         * Time: 9:28 SA
         */
        $customerlists = [
            "1" => ["ten" => "Mai Văn Hoàn", "ngaysinh" => "1983-08-20", "diachi" => "Hà Nội", "anh" => "images/img1.jpg"],
            "2" => ["ten" => "Nguyễn Văn Nam", "ngaysinh" => "1983-08-21", "diachi" => "Bắc Giang", "anh" => "images/img2.jpg"],
            "3" => ["ten" => "Nguyễn Thái Hòa", "ngaysinh" => "1983-08-22", "diachi" => "Nam Định", "anh" => "images/img3.jpg"],
            "4" => ["ten" => "Trần Đăng Khoa", "ngaysinh" => "1983-08-17", "diachi" => "Hà Tây", "anh" => "images/img4.jpg"],
            "5" => ["ten" => "Nguyễn Đình Thi", "ngaysinh" => "1983-08-19", "diachi" => "Hà Nội", "anh" => "images/img5.jpg"]
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $post = $_POST["tim"];
            $count = -1;
            foreach ($customerlists as $customerlist) {
                $pos = strpos($customerlist['ten'], $post);
                if ($pos !== false) {

                    echo "<span style='margin-left: 25px; font-size: 40px'>Tên bạn tìm là : <hr> </span>";
                    $customerlistd = "<span style='margin-left: 30px'>Tên : </span>" . $customerlist['ten'] . "<hr>" . "<span style='margin-left: 30px'>Ngày sinh : </span>" . $customerlist['ngaysinh'] . "<hr>" . "<span style='margin-left: 30px'>Địa chỉ : </span>" . $customerlist['diachi'] ."<hr>". "<span style='margin-left: 30px'>Ảnh : </span>" . "<div class='thumbnails'><image src = '" . $customerlist['anh'] . "'/></div>" . "<hr>";
                    echo "<span style=''>$customerlistd</span>" . "<br>";
                    $count++;
                }
            }
            if ($count == -1 ){
                echo "không tìm thấy ";
            }
        }
        ?>
    </div>
</form>
</body>
</html>
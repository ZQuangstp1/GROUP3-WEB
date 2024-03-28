<script type=text/JavaScript>
    function confirmDel() {
        if (confirm('Bạn có chắc chắn muốn xóa nhân viên này?')) {
            return true;
        } else {
            return false;
        }
    }
    function Search(){
        let valueSearchInput =document.getElementById("searchInput").value;
    }

</script>

<style>
/* General Styling for Forms */
.form-container {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: auto;
}

/* Updated to arrange inputs in two columns */
.form-container form {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two columns of equal width */
    grid-gap: 20px; /* Space between fields */
    align-items: center; /* Align items vertically */
}

/* Styling for labels for better alignment */
.form-container label {
    display: block;
}

/* Input and Select Fields Styling */
.form-container input[type="text"],
.form-container input[type="date"],
.form-container input[type="email"],
.form-container select {
    width: 100%;
    padding: 10px;
    margin-top: 6px; /* Adjusted for better spacing */
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Button Styling */
.form-container input[type="submit"],
.form-container input[type="reset"] {
    width: 48%; /* Adjust width for side-by-side layout */
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.form-container .form-buttons {
    display: flex;
    justify-content: center; /* Centers the buttons horizontally */
    gap: 20px; /* Spacing between buttons */
    grid-column: 1 / -1; /* Makes sure the container spans all columns */
}

.form-container input[type="submit"]:hover,
.form-container input[type="reset"]:hover {
    background-color: #45a049;
}

/* Adjust grid layout for smaller screens */
@media screen and (max-width: 600px) {
    .form-container form {
        grid-template-columns: 1fr; /* Single column layout for mobile */
    }

    .form-container input[type="submit"],
    .form-container input[type="reset"] {
        width: 100%; /* Full width for mobile */
    }
}
</style>



<div id="content">
    <div style="height: 15% ;display:flex; margin-top: 2%;"> <!-- Khối chứa tra cứu và thêm nhân viên -->
        <p style="margin-left: 20px;">Tra cứu</p>
        <input id="searchInput" style="border-radius: 5px; margin:10px;" type="text" placeholder="Nhập thông tin" />

        <div style="width: 60%;margin-left: 20%;">
            <a href="?opt=add_NV" style="text-decoration: none; color: inherit;">
                <div
                    style="width: 20%;background-color:#DF8A8A; display: flex; border-radius: 5px; float: right; margin: 5px; margin-left: 50%; align-items: center;">
                    <img src="Picture/Vector.png" alt="ThemNV" style="height: 55%; margin-left: 5%; margin-right: 5%;">
                    <p>Thêm nhân viên</p>
                </div>
            </a>

        </div>
    </div>

    <?php
    //Tạo kết nối vào CSDL
    require_once ("db_module.php");

    function view_NV()
    {
        $link = null;
        taoKetNoi($link);
        //Kết nối và lấy dữ liệu từ CSDL
        $result = chayTruyVanTraVeDL($link, "SELECT * from employee");

        echo "<table width='100%' cellspacing='5' cellpadding='5' border='1' style='margin-bottom: 3%;margin-top: 2%' >";
        echo "<tr>";
        echo "<th>Mã nhân viên</th>";
        echo "<th>Họ tên</th>";
        echo "<th>Ngày sinh</th>";
        echo "<th>SĐT</th>";
        echo "<th>email</th>";
        echo "<th>Địa chỉ</th>";
        echo "<th>Giới tính</th>";
        echo "<th>Vị trí</th>";
        echo "<th>Ca làm việc</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["employeeID"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["dateOfBirth"] . "</td>";
            echo "<td>" . $row["phoneNum"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["position"] . "</td>";
            echo "<td>" . $row["shiftTime"] . "</td>";
            echo "<td><a href='?opt=edit_NV&employeeID=" . $row["employeeID"] . "'><img src='Picture/Group 17.png' alt='Sửa' style='width: 20px; height: 20px;'></a> | <a href='?opt=del_NV&employeeID=" . $row["employeeID"] . "' onclick='return confirmDel()'><img src='Picture/Group 18.png' alt='Xóa' style='width: 20px; height: 20px;'></a></td>";
            echo "</tr>";
        }

        echo "</table>";
        giaiPhongBoNho($link, $result);
    }

    function add_NV()
    {
        $link = null;
        taoKetNoi($link);
        ?>
        <div class="form-container">
            <form action="?opt=add_NV" method="post" enctype="multipart/form-data">
                Mã nhân viên: <input type="text" name="manv"><br>
                Họ tên: <input type="text" name="hoten"><br>
                Ngày sinh: <input type="date" name="ngaysinh"><br>
                Số điện thoại: <input type="text" name="sdt"><br>
                Email: <input type="email" name="email"><br>
                Địa chỉ: <input type="text" name="diachi"><br>
                Giới tính:
                <select name="gioitinh">
                    <option value="M">Nam</option>
                    <option value="F">Nữ</option>
                </select><br>
                Vị trí:
                <select name="vitri">
                    <option value="Sale">Sale</option>
                    <option value="Quản lý">Quản lý</option>
                    <option value="Marketing">Marketing</option>
                    <option value="HR">HR</option>
                </select><br>
                Ca làm:
                <select name="calam">
                    <option value="S01">S01</option>
                    <option value="S02">S02</option>
                    <option value="S03">S03</option>
                </select>
                <div class="form-buttons">
                <input type="submit" value="Lưu">
                <input type="reset" value="Nhập lại">
                </div>
            </form>
        </div>
        <?php
        if (!empty($_POST)) {
            // Lấy thông tin từ form và kiểm tra xem chúng có tồn tại không
            $_manv = isset($_POST["manv"]) ? $_POST["manv"] : '';
            $_hoten = isset($_POST["hoten"]) ? $_POST["hoten"] : '';
            $_birthday = isset($_POST["ngaysinh"]) ? $_POST["ngaysinh"] : '';
            $_sdt = isset($_POST["sdt"]) ? $_POST["sdt"] : '';
            $_email = isset($_POST["email"]) ? $_POST["email"] : '';
            $_address = isset($_POST["diachi"]) ? $_POST["diachi"] : '';
            $_gender = isset($_POST["gioitinh"]) ? $_POST["gioitinh"] : '';
            $_position = isset($_POST["vitri"]) ? $_POST["vitri"] : '';
            $_shift = isset($_POST["calam"]) ? $_POST["calam"] : '';


            //Tạo ra câu SQL
            $sql = "INSERT INTO employee (employeeID,name,dateOfBirth,phoneNum,email,address,gender,position,shiftTime)
        values ('$_manv', '$_hoten', '$_birthday', '$_sdt', '$_email', '$_address','$_gender','$_position','$_shift')";
            if ($_manv != "") {
                $rs = chayTruyVanKhongTraVeDL($link, $sql);
                //Kiểm tra insert
                if ($rs) {
                    echo "<script>alert('Thêm nhân viên thành công');</script>";
                    echo "<script>window.location.href='QLNV_XemNV.php?opt=view_NV';</script>";
                } else {
                    echo "<script>alert('Thêm nhân viên thất bại');</script>";
                    echo "<script>window.location.href='QLNV_XemNV.php?opt=view_NV';</script>";
                }
            }
        }
    }


    function edit_NV()
    {
        $link = null;
        taoKetNoi($link);
        if (isset($_GET["employeeID"])) {
            $_employeeid = $_GET["employeeID"];

            $sql = "SELECT * FROM employee WHERE employeeID='" . $_employeeid . "'";

            $result = chayTruyVanTraVeDL($link, $sql);
            //Lấy dữ liệu từ trong db ra
            if ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="form-container">
                    <form action="?opt=update_NV" method="post" enctype="multipart/form-data">
                        Mã nhân viên: <input type="text" name="employeeid" readonly value="<?php echo $row["employeeID"]; ?>"><br>
                        Họ tên: <input type="text" name="hoten" value="<?php echo $row["name"]; ?>"><br>
                        Ngày sinh: <input type="date" name="ngaysinh" value="<?php echo $row["dateOfBirth"]; ?>"><br>
                        Số điện thoại: <input type="text" name="sodienthoai" value="<?php echo $row["phoneNum"]; ?>"><br>
                        Email: <input type="email" name="email" value="<?php echo $row["email"]; ?>"><br>
                        Địa chỉ: <input type="text" name="diachi" value="<?php echo $row["address"]; ?>"><br>
                        Giới tính: <select name="gioitinh">
                            <option value="M" <?php echo ($row["gender"] == "M" ? "selected" : ""); ?>>Nam</option>
                            <option value="F" <?php echo ($row["gender"] == "F" ? "selected" : ""); ?>>Nữ</option>
                        </select><br>
                        Vị trí: <select name="vitri">
                            <option value="Sale" <?php echo ($row["position"] == "Sale" ? "selected" : ""); ?>>Sale</option>
                            <option value="Quản lý" <?php echo ($row["position"] == "Quản lý" ? "selected" : ""); ?>>Quản lý</option>
                            <option value="Marketing" <?php echo ($row["position"] == "Marketing" ? "selected" : ""); ?>>Marketing
                            </option>
                            <option value="HR" <?php echo ($row["position"] == "HR" ? "selected" : ""); ?>>HR</option>
                        </select><br>
                        Ca làm: <select name="calam">
                            <option value="S01" <?php echo ($row["shiftTime"] == "S01" ? "selected" : ""); ?>>S01</option>
                            <option value="S02" <?php echo ($row["shiftTime"] == "S02" ? "selected" : ""); ?>>S02</option>
                            <option value="S03" <?php echo ($row["shiftTime"] == "S03" ? "selected" : ""); ?>>S03</option>
                        </select>
                        <div class="form-buttons">
                        <input type="submit" value="Cập nhật"><input type="reset" value="Nhập lại">
                        </div>
                    </form>
                </div>
                <?php
            }
        }
    }


    function del_NV()
    {
        $link = null;
        taoKetNoi($link);

        if (isset($_GET["employeeID"])) {
            $_employeeid = $_GET["employeeID"];

            chayTruyVanKhongTraVeDL($link, "DELETE FROM staffaccount WHERE employeeID='" . $_employeeid . "'");
            $sql = "DELETE FROM employee WHERE employeeID='" . $_employeeid . "'";

            $result = chayTruyVanKhongTraVeDL($link, $sql);
            if ($result) {
                echo "<script>alert('Xóa nhân viên thành công');</script>";
                echo "<script>window.location.href='QLNV_XemNV.php?opt=view_NV';</script>";
            } else {
                echo "<script>alert('Xóa nhân viên thất bại');</script>";
                echo "<script>window.location.href='QLNV_XemNV.php?opt=view_NV';</script>";
            }
        }
    }



    function update_NV()
    {
        $link = null;
        taoKetNoi($link);


        //Kiểm tra có phương thức POST gửi lên hay không
        if (isset($_POST)) {
            $_employeeid = $_POST["employeeid"];
            $_name = $_POST["hoten"];
            $_birthday = $_POST["ngaysinh"];
            $_phonenum = $_POST["sodienthoai"];
            $_email = $_POST["email"];
            $_address = $_POST["diachi"];
            $_gender = $_POST["gioitinh"];
            $_position = $_POST["vitri"];
            $_shift = $_POST["calam"];

            $sql = "UPDATE employee SET name = '$_name', dateOfBirth = '$_birthday', phoneNum = '$_phonenum', email = '$_email',
             address = '$_address', gender = '$_gender', position = '$_position', 
             shiftTime = '$_shift' WHERE employeeID = '$_employeeid'";

            //echo $sql;
            if ($_employeeid != "") {
                $rs = chayTruyVanKhongTraVeDL($link, $sql);
                //Kiểm tra insert
                if ($rs) {
                    echo "<script>alert('Cập nhật thành công');</script>";
                    echo "<script>window.location.href='QLNV_XemNV.php?opt=view_NV';</script>";
                } else {
                    echo "<script>alert('Cập nhật thất bại');</script>";
                    echo "<script>window.location.href='QLNV_XemNV.php?opt=view_NV';</script>";
                }
            }

        }
        giaiPhongBoNho($link, $rs);
    }

    if (isset($_GET["opt"])) {
        $_opt = $_GET["opt"];
    } else {
        // If 'opt' is not set, you can set a default value or handle it as needed
        $_opt = ""; // Setting a default value to an empty string
    }

    switch ($_opt) {
        case "add_NV":
            add_NV();
            break;
        case "edit_NV":
            edit_NV();
            break;
        case "del_NV":
            del_NV();
            break;
        case "update_NV":
            update_NV();
            break;
        default:
            view_NV();
    }
    ?>
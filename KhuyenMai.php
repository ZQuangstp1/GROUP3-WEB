<head>
    <link rel="stylesheet" type="text/css" href="form.css" />
    <script>
    function confirmDel() {
        if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này này?')) {
            return true;
        } else {
            return false;
        }
    }

    function hideToolBar() {
        document.getElementById("toolbar").style.display = "none";
    }


    function Search() {
        let valueSearchInput = document.getElementById("searchInput").value;
        window.location.href = '?opt=view_SP&search=' + encodeURIComponent(valueSearchInput);
    }
</script>

<div id="search">
    <h3>Tra cứu</h3>
    <input type="text" id="searchInput" placeholder="Nhập từ khóa...">
    <button onclick="Search()">Tìm khuyến mãi</button>
    <a href="?opt=add_KM"><button>Thêm khuyến mãi</button></a>
</div>
</head>
<?php
require_once("db_module.php");

function view_KM()
{
    $link = null;
    taoKetNoi($link);

    $result = chayTruyVanTraVeDL($link, "SELECT * FROM discount LIMIT 2");

    echo "<table border='1'>";
    echo "<tr class='pink-row'><th>ID</th><th>Chương trình khuyến mãi</th><th>Giảm giá</th><th>Trạng thái</th><th>Ngày bắt đầu</th><th>Ngày kết khúc</th><th>Thao tác</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["discountID"] . "</td>";
        echo "<td>" . $row["voucherCode"] . "</td>";
        echo "<td>" . ($row["discountAmount"] * 100) . "%</td>"; // Multiply by 100 to display as percentage
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>" . date("d-m-Y", strtotime($row["startDate"])) . "</td>"; // Reformat start date as dd-mm-yyyy
        echo "<td>" . date("d-m-Y", strtotime($row["endDate"])) . "</td>"; // Reformat end date as dd-mm-yyyy
        echo "<td>
                <a href='?opt=edit_KM&discountID=" . $row["discountID"] . "'><img src='Picture/Icon Sua.png' alt='Sửa' style='width: 20px; height: 20px;'></a> 
                <a href='?opt=del_KM&discountID=" . $row["discountID"] . "' onclick='return confirmDel()'><img src='Picture/Icon Xoa.png' alt='Xóa' style='width: 20px; height: 20px;'></a>
              </td>";
        echo "</tr>";
    }
    echo "</table>";

    giaiPhongBoNho($link, $result);
}

function add_KM()
{
    $link = null;
    taoKetNoi($link);

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_discountID = $_POST["discountID"];
        $_tenkm = $_POST["tenkm"];
        $_giamgia = $_POST["giamgia"];
        $_trangthai = $_POST["trangthai"];
        $_ngaybatdau = $_POST["ngaybatdau"];
        $_ngayketthuc = $_POST["ngayketthuc"];

        // Kiểm tra các điều kiện
        if (empty($_discountID) || empty($_tenkm) || empty($_giamgia) || empty($_trangthai) || empty($_ngaybatdau) || empty($_ngayketthuc)) {
            echo "<script>alert('Vui lòng nhập đầy đủ thông tin.');</script>";
            return;
        }

        // Kiểm tra ID khuyến mãi theo định dạng DCXXX
        if (!preg_match('/^DC\d{3}$/i', $_discountID)) {
            echo "<script>alert('ID khuyến mãi không hợp lệ.');</script>";
            return;
        }

        // Kiểm tra giảm giá không được để trống
        if (empty($_giamgia)) {
            echo "<script>alert('Vui lòng nhập giảm giá.');</script>";
            return;
        }

        // Kiểm tra trạng thái không được để trống
        if (empty($_trangthai)) {
            echo "<script>alert('Vui lòng nhập trạng thái.');</script>";
            return;
        }

        // Kiểm tra ngày bắt đầu không được để trống
        if (empty($_ngaybatdau)) {
            echo "<script>alert('Vui lòng chọn ngày bắt đầu.');</script>";
            return;
        }

        // Kiểm tra ngày kết thúc không được để trống
        if (empty($_ngayketthuc)) {
            echo "<script>alert('Vui lòng chọn ngày kết thúc.');</script>";
            return;
        }

        // Tiếp tục kiểm tra các điều kiện khác...

        $sql = "INSERT INTO discount (discountID, voucherCode, discountAmount, status, startDate, endDate) 
                VALUES ('$_discountID', '$_tenkm', '$_giamgia', '$_trangthai', '$_ngaybatdau', '$_ngayketthuc')";

        $result = chayTruyVanKhongTraVeDL($link, $sql);

        if ($result) {
            echo "<script>alert('Promotion added successfully');</script>";
            echo "<script>window.location.href='?opt=view_KM';</script>";
        } else {
            echo "<script>alert('Failed to add promotion');</script>";
        }
    }

     // Display add form
     echo "<div class='form-container'>"; // Bắt đầu div form-container
     echo "<form method='post'>";
     echo "ID khuyến mãi: <input type='text' name='discountID'><br>";
     echo "Chương trình khuyến mãi: <input type='text' name='tenkm'><br>";
     echo "Giảm giá: <input type='text' name='giamgia'><br>";
     echo "Trạng thái: <input type='text' name='trangthai'><br>";
     echo "Ngày bắt đầu: <input type='date' name='ngaybatdau'><br>";
     echo "Ngày kết thúc: <input type='date' name='ngayketthuc'><br>";
     echo "<input type='submit' value='Thêm mới'>";
     echo "</form>";
     echo "</div>"; // Kết thúc div form-container

    $query = "SELECT * FROM discount";
    $result = chayTruyVanTraVeDL($link, $query);
    giaiPhongBoNho($link, $result);
}

function edit_KM()
{
    $link = null;
    taoKetNoi($link);

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["discountID"])) {
        $_discountID = $_GET["discountID"];

        $result = chayTruyVanTraVeDL($link, "SELECT * FROM discount WHERE discountID = '$_discountID'");
        $row = mysqli_fetch_assoc($result);

        // Display edit form
        echo "<div class='form-container'>"; // Bắt đầu div form-container
        echo "<form method='post'>";
        echo "ID khuyến mãi: <input type='text' name='discountID' value='" . $row["discountID"] . "' disabled><br>";
        echo "Chương trình khuyến mãi: <input type='text' name='tenkm' value='" . $row["voucherCode"] . "'><br>";
        echo "Giảm giá: <input type='text' name='giamgia' value='" . $row["discountAmount"] . "'><br>";
        echo "Trạng thái: <input type='text' name='trangthai' value='" . $row["status"] . "'><br>";
        echo "Ngày bắt đầu: <input type='date' name='ngaybatdau' value='" . $row["startDate"] . "'><br>";
        echo "Ngày kết thúc: <input type='date' name='ngayketthuc' value='" . $row["endDate"] . "'><br>";
        echo "<input type='submit' value='Cập nhật'>";
        echo "</form>";
        echo "</div>"; // Kết thúc div form-container
    }

    giaiPhongBoNho($link, $result);
}

function update_KM()
{
    $link = null;
    taoKetNoi($link);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_discountID = $_POST["discountID"];
        $_tenkm = $_POST["tenkm"];
        $_giamgia = $_POST["giamgia"];
        $_trangthai = $_POST["trangthai"];
        $_ngaybatdau = $_POST["ngaybatdau"];
        $_ngayketthuc = $_POST["ngayketthuc"];

        $sql = "UPDATE discount SET voucherCode = '$_tenkm', discountAmount = '$_giamgia', 
                status = '$_trangthai', startDate = '$_ngaybatdau', endDate = '$_ngayketthuc' 
                WHERE discountID = '$_discountID'";

        $result = chayTruyVanKhongTraVeDL($link, $sql);

        if ($result) {
            echo "<script>alert('Promotion updated successfully');</script>";
            echo "<script>window.location.href='?opt=view_KM';</script>";
        } else {
            echo "<script>alert('Failed to update promotion');</script>";
        }
    }

    giaiPhongBoNho($link, $result);
}

function del_KM()
{
    $link = null;
    taoKetNoi($link);

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["discountID"])) {
        $_discountID = $_GET["discountID"];

        $result = chayTruyVanKhongTraVeDL($link, "DELETE FROM discount WHERE discountID = '$_discountID'");

        if ($result) {
            echo "<script>alert('Promotion deleted successfully');</script>";
            echo "<script>window.location.href='?opt=view_KM';</script>";
        } else {
            echo "<script>alert('Failed to delete promotion');</script>";
        }
    }

    giaiPhongBoNho($link, $result);
}

if (isset($_GET["opt"])) {
    $_opt = $_GET["opt"];
} else {
    $_opt = "";
}

switch ($_opt) {
    case "add_KM":
        add_KM();
        break;
    case "edit_KM":
        edit_KM();
        break;
    case "del_KM":
        del_KM();
        break;
    case "update_KM":
        update_KM();
        break;
    default:
        view_KM();
}
?>

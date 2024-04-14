<head>
    <link rel="stylesheet" type="text/css" href="form.css" />
    <script>
        function confirmDel() {
            if (confirm('Bạn có chắc chắn muốn xóa khuyến mãi này?')) {
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
            window.location.href = '?opt=view_KM&search=' + encodeURIComponent(valueSearchInput);
        }
</script>
    </head>
<div id="search">
    <input type="text" id="searchInput" placeholder="Nhập từ khóa...">
    <button onclick="Search()">Tìm khuyến mãi</button>
    <a href="?opt=add_KM"><button>Thêm khuyến mãi</button></a>    
</div>

<?php
require_once("db_module.php");

function view_KM()
{
    $link = null;
    taoKetNoi($link);

    $query = "SELECT * FROM discount";
    $result = chayTruyVanTraVeDL($link, $query);

    echo "<table id='discountTable' width='100%' border='1' style='margin-bottom: 2%;'>";
    echo "<tr class='pink-row'>"; 
    echo "<th>ID</th>";
    echo "<th>Chương trình khuyến mãi</th>";
    echo "<th>Giảm giá</th>";
    echo "<th>Trạng thái</th>";
    echo "<th>Ngày bắt đầu</th>";
    echo "<th>Ngày kết thúc</th>";
    echo "<th>Thao tác</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["discountID"] . "</td>";
        echo "<td>" . $row["voucherCode"] . "</td>";
        $discountPercentage = $row["discountAmount"];
        echo "<td>" . number_format($discountPercentage) . "%</td>";        
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>" . date("d-m-Y", strtotime($row["startDate"])) . "</td>";
        echo "<td>" . date("d-m-Y", strtotime($row["endDate"])) . "</td>";
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

    ?>
    <div class="form-container" id="ThemKM">
    <form action="?opt=add_KM" method="post" enctype="multipart/form-data">
        ID: <input type="text" name="discountID">
        Chương trình khuyến mãi: <input type="text" name="voucherCode">
        Giảm giá (%): <input type="number" name="discountAmount" min="0">
        Trạng thái: 
        <select name="status">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>
        Ngày bắt đầu: <input type="date" name="startDate">
        Ngày kết thúc: <input type="date" name="endDate">
        <div class="form-buttons">
            <input type="submit" value="Lưu">
            <input type="reset" value="Nhập lại">
            <button type="button" onclick="window.location.href='QLSP_KhuyenMai.php?opt=view_KM';">Quay lại</button>
        </div>
    </form>
    <?php
    if (!empty($_POST)) {
        // Lấy và xử lý dữ liệu từ form
        $_discountID = isset($_POST["discountID"]) ? trim($_POST["discountID"]) : '';
        $_voucherCode = isset($_POST["voucherCode"]) ? trim($_POST["voucherCode"]) : '';
        $_discountAmount = isset($_POST["discountAmount"]) ? trim($_POST["discountAmount"]) : '';
        $_status = isset($_POST["status"]) ? trim($_POST["status"]) : '';
        $_startDate = isset($_POST["startDate"]) ? trim($_POST["startDate"]) : '';
        $_endDate = isset($_POST["endDate"]) ? trim($_POST["endDate"]) : '';

        // Kiểm tra xem tất cả các trường đã được nhập chưa
        if (!preg_match('/^DC\d{3}$/i', $_discountID)) {
            echo "<script>alert('ID phải có dạng DCxxx (xxx là 3 số).');</script>";
            return;
        }
        if (empty($_voucherCode) || empty($_discountAmount) || empty($_status) || empty($_startDate) || empty($_endDate)) {
            echo "<script>alert('Vui lòng nhập đầy đủ thông tin.');</script>";
            return; 
        }

        // Kiểm tra xem mã khuyến mãi đã tồn tại chưa
        $check_sql = "SELECT COUNT(*) AS count FROM discount WHERE voucherCode = '$_voucherCode'";
        $check_result = chayTruyVanTraVeDL($link, $check_sql);
        $check_row = mysqli_fetch_assoc($check_result);
        if ($check_row['count'] > 0) {
            echo "<script>alert('Mã khuyến mãi đã tồn tại.');</script>";
            return;
        }

        // Thêm chương trình khuyến mãi mới
        $sql = "INSERT INTO discount(discountID, voucherCode, discountAmount, status, startDate, endDate)
                VALUES ('$_discountID', '$_voucherCode', '$_discountAmount', '$_status', '$_startDate', '$_endDate')";

        $rs = chayTruyVanKhongTraVeDL($link, $sql);

        if ($rs) {
            echo "<script>alert('Thêm chương trình khuyến mãi thành công');</script>";
            echo "<script>window.location.href='QLSP_KhuyenMai.php?opt=add_KM';</script>";
        } else {
            echo "<script>alert('Có lỗi xảy ra, không thể thêm chương trình khuyến mãi');</script>";
            return;
        }
    }
}

function edit_KM()
{
    $link = null;
    taoKetNoi($link);

    if (isset($_GET["discountID"])) {
        $_discountID = $_GET["discountID"];

        $sql = "SELECT * FROM discount WHERE discountID='" . $_discountID . "'";

        $result = chayTruyVanTraVeDL($link, $sql);
        //Lấy dữ liệu từ trong db ra
        if ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="form-container">
    <form name="formKM" action="?opt=update_KM" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        ID: <input type="text" id="discountID" name="discountID" readonly value="<?php echo $row["discountID"]; ?>"><br>
        Chương trình khuyến mãi: <input type="text" id="voucherCode" name="voucherCode" value="<?php echo $row["voucherCode"]; ?>"><br>
        Giảm giá (%): <input type="number" id="discountAmount" name="discountAmount" min="0" value="<?php echo $row["discountAmount"]; ?>"><br>
        Trạng thái: 
        <select id="status" name="status">
            <option value="Active" <?php if($row["status"] == 'Active') echo 'selected="selected"'; ?>>Active</option>
            <option value="Inactive" <?php if($row["status"] == 'Inactive') echo 'selected="selected"'; ?>>Inactive</option>
        </select><br>
        Ngày bắt đầu: <input type="date" id="startDate" name="startDate" value="<?php echo $row["startDate"]; ?>"><br>
        Ngày kết thúc: <input type="date" id="endDate" name="endDate" value="<?php echo $row["endDate"]; ?>"><br>
        <div class="form-buttons"> 
            <input type="submit" value="Lưu">
            <input type="reset" value="Nhập lại">
            <button type="button" onclick="window.location.href='QLSP_KhuyenMai.php?opt=view_KM';">Quay lại</button>
        </div>
    </form>
</div>

<script>
    function validateForm() {
        var discountID = document.getElementById("discountID").value;
        var voucherCode = document.getElementById("voucherCode").value;
        var discountAmount = document.getElementById("discountAmount").value;
        var status = document.getElementById("status").value;
        var startDate = document.getElementById("startDate").value;
        var endDate = document.getElementById("endDate").value;

        if (discountID == "" || voucherCode == "" || discountAmount == "" || status == "" || startDate == "" || endDate == "") {
            alert("Vui lòng điền đầy đủ thông tin.");
            return false;
        }
        return true;
    }
</script>

                <?php
        }
    }
}

function update_KM()
{
    $link = null;
    taoKetNoi($link);


    //Kiểm tra có phương thức POST gửi lên hay không
    if (isset($_POST)) {
        $_discountID = $_POST["discountID"];
        $_voucherCode = $_POST["voucherCode"];
        $_discountAmount = $_POST["discountAmount"];
        $_status = $_POST["status"];
        $_startDate = $_POST["startDate"];
        $_endDate = $_POST["endDate"];

        $sql = "UPDATE discount SET voucherCode = '$_voucherCode', discountAmount = '$_discountAmount', status = '$_status',
             startDate = '$_startDate', endDate = '$_endDate' WHERE discountID = '$_discountID' ";

        //echo $sql;
        if ($_discountID != "") {
            $rs = chayTruyVanKhongTraVeDL($link, $sql);
            //Kiểm tra insert
            if ($rs) {
                echo "<script>alert('Cập nhật thành công');</script>";
                echo "<script>window.location.href='QLSP_KhuyenMai.php?opt=view_KM';</script>";
            } else {
                echo "<script>alert('Cập nhật thất bại');</script>";
                echo "<script>window.location.href='QLSP_KhuyenMai.php?opt=view_KM';</script>";
            }
        }

    }
}

function del_KM()
{
    $link = null;
    taoKetNoi($link);

    if (isset($_GET["discountID"])) {
        $_discountID = $_GET["discountID"];

        $sql = "DELETE FROM discount WHERE discountID = '$_discountID'";
        $result = chayTruyVanKhongTraVeDL($link, $sql);

        if ($result) {
            echo "<script>alert('Xóa thành công');</script>";
            echo "<script>window.location.href='QLSP_KhuyenMai.php?opt=view_KM';</script>";
        } else {
            echo "<script>alert('Xóa thất bại');</script>";
            echo "<script>window.location.href='QLSP_KhuyenMai.php?opt=view_KM';</script>";
        }
    }
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


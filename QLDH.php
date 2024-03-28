<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        #container {
            width: 100%;
            margin: auto 0px;
            background-color: azure;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        #sidebar {
            width: 13%;
            height: 100vh;
            background: #F9F2E6;
            color: #fff;
            position: fixed;
            float: left;
            border-right: 2px solid #DF8A8A;
        }

        #sidebar h2 {
            text-align: center;
            margin-top: -25px;
        }

        #sidebar h2 img {
            width: 150px;
            height: auto;

        }

        #sidebar ul {
            color: #10090d81;
            list-style: none;
            padding: 0;
            margin: 0;
            margin-top: -50px;
        }

        #sidebar ul li {
            padding: 15px;
            text-align: center;
            cursor: pointer;
            border-bottom: 2px solid #DF8A8A;
        }

        #sidebar ul li:hover {
            background-color: #DF8A8A;
            color: #fff;
        }

        #header {
            font-size: 13px;
            font-weight: bold;
            background: #F9F2E6;
            color: #935a5ac9;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 13%;
            width: 100%;
            border-bottom: 2px solid #DF8A8A;
            display: flex;

        }

        #content {
            background-color: white;
            width: 87%;
            height: auto;
            float: left;
            margin-left: 13.2%;
            margin-top: 98px;
            display: flex;
            flex-direction: column;
        }

        #footer {
            font-size: x-small;
            background: #FFE5EC;
            color: #10090d81;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 2px solid #DF8A8A;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 2%;
            /* Add some space above the table */
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
            /* Light grey bottom border for each cell */
        }

        th {
            background-color: #DF8A8A;
            /* Darker shade for header cells */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
            /* Zebra striping for rows */
        }

        input[type="checkbox"] {
            margin-left: 15px;
            /* Center checkboxes within cells */
        }

        #pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 0;
            margin: 10px;
            margin-bottom: 3%;
        }

        #pagination button {
            padding: 10px 20px;
            margin: 0 10px;
            /* Khoảng cách giữa các nút */
            border: none;
            border-radius: 5px;
            /* Làm tròn góc */
            background-color: #DF8A8A;
            /* Màu nền */
            color: white;
            /* Màu chữ */
            cursor: pointer;
            /* Hiệu ứng con trỏ */
            transition: background-color 0.3s ease;
            /* Hiệu ứng chuyển màu */
        }

        #pagination button:hover {
            background-color: #935a5a;
            /* Màu khi hover */
        }

        #pagination span {
            margin: 0 10px;
            /* Khoảng cách giữa văn bản và nút */
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        a:hover {
            color: inherit;
        }

        @media (max-width: 768px) {
            #sidebar {
                width: 100%;
                height: auto;
                position: static;
                display: flex;
                justify-content: space-around;
            }

            #header,
            #content {
                margin-left: 0;
                width: 100%;
                padding: 20px 10px;
            }

            #content {
                margin-top: 20px;
            }

            table,
            th,
            td {
                display: block;
                width: 100%;
            }

            th,
            td {
                text-align: right;
                padding-left: 50%;
            }
        }

        @media (max-width: 480px) {

            #sidebar ul li,
            #header,
            #footer,
            #pagination button,
            #pagination span {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="sidebar">
            <h2><img src="Picture/Logo.png" alt="Logo"></h2>
            <ul>
                <li><a href="Overview.php">Overview</a></li>
                <li><a href="QLSP.php">Quản lý sản phẩm</a></li>
                <a href="QLNV.php">
                    <li>Quản lý nhân viên</li>
                </a>
                <a href="QuanLyDonHang.php">
                    <li>Quản lý đơn hàng</li>
                </a>
            </ul>
        </div>

        <div id="header">
            <h2>ADMIN/QUẢN LÝ ĐƠN HÀNG</h2>
            <div style="width: 6%;height: 20px;margin-left: 1000px;float: right;">
                <img src="Picture/IconThongbao.png" alt="thongbao" style="width: 100%;">
            </div>
        </div>

        <div id="content">

            <div
                style="display: flex; align-items: center; justify-content: start; margin-top: 2%; padding: 10px; background-color: azure; border-radius: 5px;">
                <p style="margin: 0 20px 0 0; font-size: 16px; color: #333;">Điều kiện lọc:</p>
                <input type="text" placeholder="Nhập điều kiện lọc"
                    style="border-radius: 5px; margin-right: 10px; padding: 8px; border: 1px solid #ccc; flex-grow: 1;" />
                <input type="text" placeholder="Nhập thông tin"
                    style="border-radius: 5px; margin-right: 10px; padding: 8px; border: 1px solid #ccc; flex-grow: 1;" />
                <button
                    style="display: flex; align-items: center; background-color: #DF8A8A; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">
                    <img src="Picture/🦆 icon _search_.png" alt="Tìm kiếm" style="height: 20px; margin-right: 5px;">
                    Tìm kiếm
                </button>
            </div>


            <div id="Data_tb">
                <div id="Data_tb">
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Mã khách hàng</th>
                                <th>Trạng thái</th>
                                <th>Tình trạng thanh toán</th>
                                <th>Ngày tạo</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dữ liệu 1</td>
                                <td>Dữ liệu 2</td>
                                <td>Dữ liệu 3</td>
                                <td>Dữ liệu 4</td>
                                <td>Dữ liệu 5</td>
                                <td>Dữ liệu 6</td>

                            </tr>
                            <tr>
                                <td>Dữ liệu 9</td>
                                <td>Dữ liệu 10</td>
                                <td>Dữ liệu 11</td>
                                <td>Dữ liệu 12</td>
                                <td>Dữ liệu 13</td>
                                <td>Dữ liệu 14</td>

                            </tr>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            <tr>
                                <td>Dữ liệu 17</td>
                                <td>Dữ liệu 18</td>
                                <td>Dữ liệu 19</td>
                                <td>Dữ liệu 20</td>
                                <td>Dữ liệu 21</td>
                                <td>Dữ liệu 22</td>

                                </td>
                            </tr>
                            <tr>
                                <td>Dữ liệu 25</td>
                                <td>Dữ liệu 26</td>
                                <td>Dữ liệu 27</td>
                                <td>Dữ liệu 28</td>
                                <td>Dữ liệu 29</td>
                                <td>Dữ liệu 30</td>

                            </tr>
                            <tr>
                                <td>Dữ liệu 33</td>
                                <td>Dữ liệu 34</td>
                                <td>Dữ liệu 35</td>
                                <td>Dữ liệu 36</td>
                                <td>Dữ liệu 37</td>
                                <td>Dữ liệu 38</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="pagination">
                <button onclick="goToPreviousPage()">Trang Trước</button>
                <span>Trang 1 trong tổng số 200</span>
                <button onclick="goToNextPage()">Trang Sau</button>
            </div>
        </div>

        <div id="footer">
            <p>© 2024 Jewelry Store. All rights reserved.</p>
        </div>

    </div>
</body>

</html>
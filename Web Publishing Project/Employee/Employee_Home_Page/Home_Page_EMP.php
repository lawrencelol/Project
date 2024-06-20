<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTP-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Emp_Home</title>
        <link href="" rel="stylesheet">
        <link rel="stylesheet" href="Home_Page_EMP.css"> 

        <script>
            function printDashboard() {
                window.print();
            }
        </script>
    </head>

    <body>
        <div class="selection">
            <div class="Logo">
                <img src="Logo.png" />
            </div>
            <div class="bar">
                <ul>
                    <li class="active"><a href="../Employee_Home_Page/Home_Page_EMP.html">DASHBOARD</a></li>
                    <li><a href="../Manage_Staff/Manage_Staff.html">STAFF</a></li>
                    <li><a href="../Manage_USER/Manage_USER.html">USER</a></li>
                    <li><a href="../Manage_Category/Category.html">CATEGORY</a></li>
                    <li><a href="../Stock/stock.html">STOCK</a></li>
                    <li><a href="../Manage_Order/Manage_Order.html">ORDER</a></li>
                    <li><a href="../Rate_Review/Rate_Review.html">RATE REVIEW</a></li>
                    <li><a href="../../User/Landing_Page/Landing.html">Log Out</a></li>
                </ul>
            </div>
        </div>

        <div class="dashboard">
            <div class="header">
                <h1>Dashboard</h1>
        </div>
            <div class="box">
                <div>
                    <h3>Total Sales</h3>
                    <h4>RM 80576.00</h4>
                    <p><strong>+6%</strong> This month</p>
                </div>
                <div>
                    <h3>Total Orders</h3>
                    <h4>4000</h4>
                    <p><strong>+6%</strong> This month</p>
                </div>
                <div>
                    <h3>Total Rates</h3>
                    <h4>2000</h4>
                    <p><strong>+4%</strong> This month</p>
                </div>
                <div>
                    <h3>Total Comments</h3>
                    <h4>1258</h4>
                    <p><strong>+2%</strong> This month</p>
                </div>
            </div>
            <div class="chart">
                <div id="bar">
                    <img src="bar.png">
                </div>
                <div id="donut">
                    <img src="donut.png">
                </div>
            </div>
        </div>
    <button class="print" onclick="printDashboard()">Print</button>
    </body>
</html>
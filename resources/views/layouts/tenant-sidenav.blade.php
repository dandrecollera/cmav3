<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sidenav</title>

    <link rel="stylesheet" href="css/mdb.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--BOX icons CDN-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/7a249ebf7f.js" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;800&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar{
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 260px;
            background: #11101d; 
            z-index: 100;
            transition: all 0.5s ease;
        }
        .sidebar.close{
            width: 78px;
        }
        .sidebar .logo-details{
            height: 60px;
            width: 100%;
            display: flex;
            align-items: center;
        }
        img {
            width:79px; /* Adjust the width as per your desired size */
            height: auto; /* Maintain aspect ratio */
            height: 50px;
            min-width: 78px;
            text-align: center;
            line-height: 50px;
        }
        .sidebar .logo-details .logo-name{
            font-size: 22px;
            color: #ffffff;
            font-weight: 800px;
            margin-left: 20px;
            transition: 0.3s ease;
            transition-delay: 0.1s;
        }
        .sidebar.close .logo-details .logo-name{
            transition-delay: 0s;
            opacity: 0;
            pointer-events: none;
        }
        .sidebar .nav-links{
            height: 100%;
            padding: 30px 0 150px 0;
            overflow: auto;
        }
        .sidebar.close .nav-links{
            overflow: visible;
        }
        .sidebar .nav-links::-webkit-scrollbar{
            display: none;
        }
        .sidebar .nav-links li{
            position: relative;
            list-style: none;
        }
        .sidebar .nav-links li:hover{
            background: #1d1b31;
            list-style: none;
            transition: all 0.4s ease;
        }
        .sidebar .nav-links li .icon-link{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .sidebar.close .nav-links li .icon-link{
            display: block;
        }
        .sidebar .nav-links li i{
            height: 50px;
            min-width: 78px;
            text-align: center;
            line-height: 50px;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .sidebar .nav-links li.showMenu i.arrow{
            transform: rotate(-180deg);
        }
        .sidebar.close .nav-links i.arrow{
            display: none;
        }
        .sidebar .nav-links li a{
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        .sidebar .nav-links li a .link_name{
            font-size: 18px;
            font-weight: 400;
            color: #fff;
        }
        .sidebar.close .nav-links li a .link_name{
            opacity: 0;
            pointer-events: none;
        }
        .sidebar .nav-links li .sub-menu{
            padding: 6px 6px 14px 80px;
            margin-top: -10px;
            background: #1d1b31;
            display: none; 
        }
        .sidebar .nav-links li.showMenu .sub-menu{
            display: block;
        }
        .sidebar .nav-links li .sub-menu a{
            color: #fff;
            font-size: 15px;
            padding: 5px 0;
            white-space: nowrap;
            opacity: 0.6;
            transition: all 0.3s ease;
        }
        .sidebar .nav-links li .sub-menu a:hover{
            opacity: 1;
        }
        .sidebar.close .nav-links li .sub-menu{
            position: absolute;
            left: 100%;
            top: -10px;
            margin-top: 0;
            padding: 10px 20px;
            border-radius: 0 6px 5px 0;
            opacity: 0;
            display: block;
            pointer-events: none;
            transition: 0s;
        }
        .sidebar.close .nav-links li:hover .sub-menu{
            top: 0;
            opacity: 1;
            pointer-events: auto;
            transition: all 0.4s ease;
        }
        .sidebar .nav-links li .sub-menu .link_name{
            display: none;
        }
        .sidebar.close .nav-links li .sub-menu .link_name{
            display: none;
        }
        .sidebar.close .nav-links li .sub-menu .link_name{
            font-size: 18px;
            opacity: 1;
            display: block;
        }
        .sidebar .nav-links li .sub-menu .blank{
            opacity: 1;
            pointer-events: auto;
            padding: 3px 20px 6px 16px;
            opacity: 0;
            pointer-events: none;
        }
        .sidebar .nav-links li:hover .sub-menu .blank{
            top: 50px;
            transform: translateY(-50%)
        }
        .sidebar .profile-details{
            position: fixed;
            bottom: 0;
            width: 260px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #1d1b31;
            padding: 6px 0;
            transition: all 0.5s ease;
        }
        .sidebar.close .profile-details{
            background: none;
        }
        .sidebar.close .profile-details{
            width: 78px;
        }
        .sidebar .profile-details .profile-content{
            display: flex;
            align-items: center;
        }
        .sidebar .profile-details img{
            height: 52px;
            width: 52px;
            object-fit: cover;
            border-radius: 16px;
            margin: 0 14px 4 12px;
            background: #1d1b31;
            padding: 10px;
            transition: all 0.5s ease;
            
        }
        .sidebar.close .profile-details img{
            padding: 10px;
        }
        .sidebar .profile-details .profile-name{
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            white-space: nowrap;

        }
        .sidebar.close .profile-details i,
        .sidebar.close .profile-details .profile-name{
            display: none;
        }
        .home-section{
            position: relative;
            background: rgb(243, 243, 243);
            height: 7vh;
            left: 260px;
            width: calc(100% - 260px);
            transition: all 0.5s ease;
        }
        .sidebar.close ~ .home-section{
            left: 78px;
            width: calc(100% - 78px);
        }
        .home-section .home-content{
            height: 60px;
            display: flex;
            align-items: center;
        }
        .home-section .home-content .bx-menu,
        .home-section .home-content .text{
            color: #11101d;
            font-size: 35px;
        }
        .home-section .home-content .bx-menu{
            margin: 0 15px;
            cursor: pointer;
        }
        .home-section .home-content .text{
            font-size: 26px;
            font-weight: 600;
        }
        </style>
        
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <a href="index.html"><img src="/img/cma_logo.png"></a>
            <span class="logo-name">C M A</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="/tenant-dashboard">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class ="link_name"href="/tenant-dashboard">Dashboard</a></li>
                </ul>
            </li>

            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-home' ></i>
                        <span class="link_name">About</span>
                    </a>
                    <i class='bx bx-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class ="link_name"href="#">About</a></li>
                    <li><a href="/cma-staff">Staff</a></li>
                </ul>
            </li>

            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-money'></i>
                        <span class="link_name">Transaction</span>
                    </a>
                    <i class='bx bx-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class ="link_name"href="#">Transaction</a></li>
                    <li><a href="/bill-notice">Bill Notice</a></li>
                    <li><a href="/payment-history">Payment History</a></li>
                </ul>
            </li>

            <li>
                <a href="/tenant-report">
                    <i class='bx bx-food-menu'></i>
                    <span class="link_name">Report</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class ="link_name"href="/tenant-report">Report</a></li>
                </ul>
            </li>
            
            <li>
                <a href="/tenant-lostandfound">
                    <i class="fa-solid fa-person-circle-question"></i>
                    <span class="link_name">Lost and Found</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class ="link_name"href="/tenant-lostandfound">Lost and Found</a></li>
                </ul>
            </li>

            <li>
                <a href="/tenant-account-settings">
                    <i class='bx bx-user'></i>
                    <span class="link_name">Account Settings</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class ="link_name"href="/tenant-account-settings">Account Settings</a></li>
                </ul>
            </li>
        
        <li>
        <div class="profile-details">
            <div class="profile-content">
                <img src="/img/2b2 sample.png" alt="profile">
            </div>
            <div class="name">
                <div class="profile-name">Tenant</div>
            </div>
            <i class='bx bx-log-out'></i>
        </div>
        </li>
    </ul>
    </div>
<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"></span>
    </div>

</section>

    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++){
            arrow[i].addEventListener("click", (e)=>{
                let arrowParent = e.target.parentElement.parentElement;
                console.log(arrowParent);
                arrowParent.classList.toggle("showMenu");
            });
        }

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("close");
        });
    </script>

    
    </div>
</body>
</html>
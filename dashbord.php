<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="hospital-logo-and-symbols-template-icons-vector-removebg-preview.png" alt="">
            </div>
            <span class="logo_name">HMS</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashbord.php">
                    <i class="uil uil-estate"></i>
                    
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li>
                <a href = "appoi.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Appointment</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                
                <li><a href="symptom.html">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Diagnose YourSelf</span>
                </a></li>
                <li><a href="l1.php">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Lab Tests</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
            <script>
                function logout()
                 {
                    // Perform any necessary logout actions here (e.g., clearing session, redirecting, etc.)
                    alert("You have been logged out.");
                    }
            </script>
                <li><a href="login.php" onclick="logout()">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>
                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        
                        <span class="text">Total Number Of Doctors</span>
                        <span class="number">15,000</span>
                    </div>
                    <div class="box box2">
                        <span class="text">Success Rate</span>
                        <span class="number">300%</span>
                    </div>
                    <div class="box box3">
                        <span class="text">Total Numbers Of Hospitals</span>
                        <span class="number">10,127</span>
                    </div>
                    <input type="image" src="1*3cjGFOejglXcl0MJfB9B2g.png" width = "100%">
                </div>
            </div>
            
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
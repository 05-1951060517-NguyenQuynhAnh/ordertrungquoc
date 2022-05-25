<html lang="en">
<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Admin</title>
    <link rel="shortcut icon" href="">
</head>

<body id="body-pd">
    <header class="header border-bottom" id="header">
        <div class="header_toggle"> <i class="bi bi-list" id="header-toggle"></i></div>

    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_logo border-bottom">
                    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
                    <span class="fs-6">Tuấn Đần</span>
                </div>
                <div class="nav_list mt-3">
                    <div class="row g-4">
                        <div class="col-12">
                            <a href="" class="nav_link <?php active('index.php');?> active">
                                <div class="">
                                    <button class="nav_button "><i
                                            class="fas fa-tachometer-alt nav_icon"></i></button>
                                </div>
                                <div class="d-flex align-items-center nav_name">
                                    Dashboard
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="./order/cart.php" class="nav_link">
                                <div class="">
                                    <button class="nav_button"><i class="fas fa-cart-plus nav_icon"></i></button>
                                </div>
                                <div class="d-flex align-items-center nav_name">
                                    Giỏ hàng
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="./order/list.php" class="nav_link">
                                <div class="">
                                    <button class="nav_button"><i class="fas fa-list nav_icon"></i></button>
                                </div>
                                <div class="d-flex align-items-center nav_name">
                                    Ds Đơn hàng
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
    
                            <a href="./package/list.php?tab=0" class="nav_link">
                                <div class="">
                                    <button class="nav_button"><i class="fas fa-truck nav_icon"></i></button>
                                </div>
                                <div class="d-flex align-items-center  nav_name">
                                    Vận Đơn
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
    
                            <a href="./export/receipt.php" class="nav_link">
                                <div class="">
                                    <button class="nav_button"><i class="fas fa-file-invoice nav_icon"></i></i></button>
                                </div>
                                <div class="d-flex align-items-center nav_name">
                                    Phiếu xuất
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
    
                            <a href="./user/wallet.php" class="nav_link">
                                <div class="">
                                    <button class="nav_button "><i class="fas fa-money-check-alt nav_icon"></i></button>
                                </div>
                                <div class="d-flex align-items-center nav_name">
                                    Ví tiền
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="./user/profile.php" class="nav_link">
                                <div class="">
                                    <button class="nav_button"><i class="fas fa-user nav_icon "></i></button>
                                </div>
                                <div class="d-flex align-items-center nav_name">
                                    Thông tin cá nhân
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <a href="#" class="nav_link"> <i class='bi bi-box-arrow-left nav_icon'></i> <span class="nav_name">Đăng
                    xuất</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div>
    <!--Container Main end-->

    <script>
    document.addEventListener("DOMContentLoaded", function(event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
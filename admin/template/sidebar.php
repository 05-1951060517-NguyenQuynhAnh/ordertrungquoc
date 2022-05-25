
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
                            <a href="../index.php" class="nav_link <?php active('index.php');?>">
                                <div class="">
                                    <button class="nav_button "><i class="fas fa-tachometer-alt nav_icon"></i></button>
                                </div>
                                <div class="d-flex align-items-center nav_name">
                                    Dashboard
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="../order/list.php" class="nav_link <?php active('');?>">
                                <div class="">
                                    <button class="nav_button"><i class="fas fa-list nav_icon"></i></button>
                                </div>
                                <div class="d-flex align-items-center nav_name">
                                    Ds Đơn hàng
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="../package/list.php" class="<?php active('list.php');?> nav_link">
                                <div class="">
                                    <button class="nav_button"><i class="fas fa-truck nav_icon"></i></button>
                                </div>
                                <div class="d-flex align-items-center  nav_name">
                                    Vận Đơn
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
    
                            <a href="../export/receipt.php" class="nav_link <?php active('receipt.php');?>">
                                <div class="">
                                    <button class="nav_button"><i class="fas fa-file-invoice nav_icon"></i></i></button>
                                </div>
                                <div class="d-flex align-items-center nav_name">
                                    Phiếu xuất
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="../customer/users.php" class="nav_link <?php active('users.php');?>">
                                <div class="">
                                    <button class="nav_button"><i class="nav_icon fas fa-address-book"></i></button>
                                </div>
                                <div class="d-flex align-items-center nav_name">
                                    Khách hàng
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

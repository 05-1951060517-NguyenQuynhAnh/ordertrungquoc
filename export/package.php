<?php include('../template/header.php'); 
?>
<?php
function selected($currect_page){
  $url_array =  explode('=', $_SERVER['REQUEST_URI']) ;
  $url =  end($url_array);  
  if($currect_page == $url){
      echo 'selected'; //class name in css 
  } 
}
?>

<body id="body-pd">
    <header class="header border-bottom" id="header">
        <div class="header_toggle"> <i class="bi bi-list" id="header-toggle"></i></div>

    </header>
    <?php include('../template/sidebar.php'); 
    ?>
    <div class="height-100 bg-light">
        <section class="p-5">
            <div class="content">
                <div class="d-flex tab border-bottom">
                    <div class="<?php selected('0');?> col">
                        <a class="" href="./package.php?tab=0">
                            <div class=" tab_quantity mx-auto text-center">
                                Tất cả <br>
                                <span> <?php 
                                        $sql1 = "SELECT count(status) as sl_all  FROM `tb_package`";
                                        $res1 = mysqli_query($conn,$sql1);
                                            if(mysqli_num_rows($res1)>0){
                                                $row = mysqli_fetch_assoc($res1);
                                            }
                                            echo $row['sl_all']
                                    ?></span>
                            </div>
                        </a>
                    </div>
                    <div class="<?php selected('1');?> col">
                        <a class="" href="./package.php?tab=1">
                            <div style="color:red;" class="tab_quantity mx-auto text-center">
                                Về kho VN <br>
                                <span> <?php 
                                        $sql2 = "SELECT count(status) as sl_1  FROM `tb_package` where status = 1";
                                        $res2 = mysqli_query($conn,$sql2);
                                            if(mysqli_num_rows($res2)>0){
                                                $row = mysqli_fetch_assoc($res2);
                                            }
                                            echo $row['sl_1']
                                    ?></span>
                            </div>
                        </a>
                    </div>
                    <div class="col <?php selected('2');?>">
                        <a class="" href="./package.php?tab=2">
                            <div style="color: #28a745;" class="tab_quantity mx-auto text-center">
                                Hoàn thành <br>
                                <span><?php 
                                        $sql3 = "SELECT count(status) as sl_0 FROM `tb_package` where status = 0";
                                        $res3 = mysqli_query($conn,$sql3);
                                            if(mysqli_num_rows($res3)>0){
                                                $row = mysqli_fetch_assoc($res3);
                                            }
                                            echo $row['sl_0']
                                    ?></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab_table px-4 py-5">
                    <table class="mt-3 table table-striped">
                        <thead>
                            <tr style="color:#888;">
                                <th class="col-5" scope="col">TT.Vận đơn</th>
                                <th class="text-center" scope="col">Khối lượng</th>
                                <th class="text-center" scope="col">Dài/Rộng/Cao</th>
                                <th class="text-center" scope="col">Thành tiền</th>
                                <th class="text-center" scope="col">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $id =$_GET['tab'];
                            if($id == 0){
                                $sql = "SELECT *, total*weight as total_money FROM `tb_package`";
                            } 
                            elseif($id == 1){
                                $sql = "SELECT *, total*weight as total_money FROM `tb_package` where status=1";
                            }
                            else{
                                $sql = "SELECT *, total*weight as total_money FROM `tb_package` where status=0";
                            }
         
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
                            if($count>0)
                            {
                            while($row=mysqli_fetch_assoc($res))
                            {
                            ?>
                            <tr>
                                <td class="">
                                    <p style="color:#1a73e8" class="fw-bold mb-0">Mã VĐ: <?php echo $row['id']; ?></p>
                                    <br>
                                    <p class="">Ngày tạo: <?php echo $row['time']; ?></p>
                                </td>
                                <td class="text-center">
                                    <p class=""><?php echo $row['weight']; ?>kg</p>
                                </td>
                                <td class="text-center">
                                    <p class="">
                                        <?php echo $row['length']; ?>/<?php echo $row['width']; ?>/<?php echo $row['height']; ?>
                                    </p>
                                </td>
                                <td class="fw-bold link-danger text-center">
                                    <p class=""><?php echo number_format($row['total_money']); ?> VNĐ</p>
                                </td>
                                <td class="text-center">
                                    <?php if ($row['status'] == 0) : ?>
                                    <span class="tab_0"><i class="bi bi-exclamation-circle-fill "></i> Hoàn thành</span>
                                    <?php else : ?>
                                    <span class="tab_1"><i class="bi bi-exclamation-circle-fill"></i> Về kho VN</span>
                                    <?php endif; ?>
                                </td>


                            </tr>
                            <?php
                }
            }           
            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
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
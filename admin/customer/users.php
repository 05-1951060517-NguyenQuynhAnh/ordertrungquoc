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
                <p class="fs-6 p-3 mb-0">Danh sách khách hàng</p>
                <hr class="m-0">
                <div class="p-4 pb-1 d-flex justify-content-end">
                    <form class="tab_search" action="" method="post">
                        <div class="d-flex">
                            <input type="text" name="search" class="search-input" placeholder="Tìm kiếm khách hàng...">
                            <button type="submit">
                                <i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>

                <div class="tab_table px-4 pb-5">
                    <table class="table table-striped">
                        <thead>
                            <tr style="color:#888;">
                            <th class="" scope="col"></th>
                                <th class="" scope="col">Mã khách hàng</th>
                                <th class="text-center" scope="col">Họ và tên</th>
                                <th class="text-center" scope="col">E-mail</th>
                                <th class="text-center" scope="col">Số điện thoại</th>
                                <th class="text-center" scope="col">Chi tiết</th>
                                <th class="text-center" scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql = "SELECT *FROM `tb_member`";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
                            if($count>0)
                            {
                            while($row=mysqli_fetch_assoc($res))
                            {
                            ?>
                            <tr>
                            <td class="text-center">
                                    <p class=""><?php echo $row['avatar']; ?></p>
                                </td>
                                <td class="">
                                    <p style="color:#1a73e8" class="fw-bold mb-0">Mã KH: <?php echo $row['id_member']; ?></p>
                                    <br>
                                    <p class="">Ngày tạo: </p>
                                </td>
                                <td class="text-center">
                                    <p class=""><?php echo $row['name']; ?></p>
                                </td>
                                <td class="text-center">
                                    <p class="">
                                        <?php echo $row['email']; ?>
                                    </p>
                                </td>
                                <td class="text-center">
                                    <p class="">
                                        <?php echo $row['phone']; ?>
                                    </p>
                                </td>
                                <td class="text-center">
                                    <a href="./detail.php?id=<?php echo $row['id_member']; ?>">
                                    <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a
                                        href="./process_delete.php?id=">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
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
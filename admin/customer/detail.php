<?php include('../template/header.php'); 
?>
<?php 
    $id= $_GET['id'];
    $sql = "SELECT * FROM `tb_member` WHERE id_member='$id';";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
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
                <p class="fs-6 p-3 mb-0">Thông tin khách hàng</p>
                <hr class="m-0">
                <div class="add p-4">
                    <div class="row">
                        <div class="col-8">
                            <div class="col mt-2">
                                <label for="txtid">Mã khách hàng:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2 " name="txtid"
                                    value="<?php echo $row['id_member']; ?>" readonly>
                            </div>
                            <div class="col mt-2">
                                <label for="txtaccount">Tài khoản:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2 " name="txtaccount"
                                    value="<?php echo $row['account']; ?>" readonly>
                            </div>

                            <div class="col mt-2">
                                <label for="txtname">Họ tên:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2 " name="txtname"
                                    value="<?php echo $row['name']; ?>" readonly>
                            </div>
                            <div class="col mt-2">
                                <label for="txtemail">Họ tên:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2 " name="txtname"
                                    value="<?php echo $row['name']; ?>" readonly>
                            </div>
                            <div class="col mt-2">
                                <label for="txtphone">E-mail:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2 " name="txtemail"
                                    placeholder="Nhập chiều rộng" value="<?php echo $row['email']; ?>" required>
                            </div>
                        </div>
                        <div class="col text-center">
                            <img style="height:325px; width:325px" class=" img-fluid"
                                src="../../img/IMG_20201216_125411_127.jpg" alt="">
                        </div>
                    </div>

                    <p class="fs-6 ps-4 mb-0">Dach sách địa chỉ</p>
                    <hr class="m-0">
                    <div class="p-4">
    
                        <table class="border table">
                            <thead>
                                <tr>
                                    <th class="border-end" scope="col">Mã địa chỉ</th>
                                    <th scope="col">Địa chỉ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-end">5454</td>
                                    <td>34545</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
    }); <
    script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin = "anonymous" >
    </script>
</body>

</html>
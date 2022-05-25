<?php include('../template/header.php'); 
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
                <p class="fs-6 p-3 mb-0">Thêm vận đơn</p>
                <hr class="m-0">
                <div class="add p-4">
                    <form action="process_add.php" method="post">
                        <div class="row">
                            <div class="col mt-2">
                                <label for="txtid">Mã vận đơn:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2 " name="txtid"
                                    placeholder="Nhập mã vận đơn" autofocus required>
                            </div>
                            <div class="col mt-2">
                                <label for="txtTrangthai">Trạng thái:</label>
                                <select id="inputState" name="txtTrangthai" required=""
                                    class="col-md-12 ps-3 border py-2">
                                    <option value="1">Về kho VN</option>
                                    <option selected="selected" value="0">Hoàn thành</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-2">
                                <label for="txtlength">Dài:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2 " name="txtlength"
                                    placeholder="Nhập độ dài" required>
                            </div>
                            <div class="col mt-2">
                                <label for="txtwidth">Rộng:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2 " name="txtwidth"
                                    placeholder="Nhập chiều rộng" required>
                            </div>
                            <div class="col mt-2">
                                <label for="txtheight">Cao:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2" name="txtheight"
                                    placeholder="Nhập chiều cao" required>
                            </div>
                            <div class="col mt-2">
                                <label for="txtweight">Khối lượng:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2" name="txtweight"
                                    placeholder="Nhập khối lượng" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-2">
                                <label for="txttotal">Tiền cước:</label>
                                <input type="text" class="col-md-12 ps-3 border py-2" name="txttotal"
                                    placeholder="Nhập tiền cước" required>
                            </div>
                            <div class="col mt-2">
                                <label for="txtTrangthai">Khách hàng:</label>
                                <select id="inputState" name="txtTrangthai" required=""
                                    class="col-md-12 ps-3 border py-2">
                                    <?php 
          
                                        $sql2 = "SELECT * FROM tb_member";
                                        $res2 = mysqli_query($conn, $sql2);
                                        $count2 = mysqli_num_rows($res2);
                                        if($count2>0)
                                        {
                                            while($row=mysqli_fetch_assoc($res2))
                                            {
                                    ?>
                                    <option value="<?php echo $row['id_member']; ?>"><?php echo $row['id_member']; ?> -
                                        <?php echo $row['name']; ?></option>
                                    <?php
                                    }
                                }           
                                ?>
                                </select>
                            </div>
                        </div>
                        <button type="" class="button_delete btn mt-4">
                            <i class="fas fa-times"></i> Hủy</button>
                        <button type="submit" class="button_submit btn mt-4">
                            <i class="fas fa-save"></i> Cập nhật</button>
                    </form>
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
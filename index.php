<?php

require_once __DIR__ . '/partial/head.php';

?>
<div class="wrap">

    <?php

    require_once __DIR__ . '/partial/header.php';

    ?>

    <div class="content">
        <header class="contant-header"> </header>
        <header class="contant-sub-header">

            <div id="navlist" class="d-flex">
                <div>

                    <a href="#" class="open-button" onclick="openForm()">Add</a>


                    <a href="#">Add Meta</a>
                    <a href="#">Delete</a>
                    <a href="#">Duplicate</a>
                </div>
                <div class="search">
                    <form action="#">
                        <input type="text" placeholder=" Search here..." name="search">
                    </form>
                </div>
            </div>
        </header>
        <table class="table">
            <tr>
                <th>
                    QUANTITY
                </th>
                <th>
                    PACKAGE
                </th>
                <th>
                    ITEM
                </th>
                <th>
                    MRP
                </th>
                <th>
                    LANDING
                </th>
                <th>
                    TOTAL
                </th>
                <th>
                    MARGIN
                </th>
                <th>
                    STOCK QTY
                </th>
                <th>
                    PARTNUMBER
                </th>
                <th>
                    COMMENT
                </th>
            </tr>
            <tr>
                <td>hello</td>
            </tr>
            <tr>
                <td>hello</td>
            </tr>
            <tr>
                <td>hello</td>
            </tr>
        </table>
    </div><!-- .content -->

    <?php

    require_once __DIR__ . '/partial/sidebar.php';

    ?>

    <div class="clear"></div>

    <?php

    require_once __DIR__ . '/partial/footer.php';

    ?>

</div><!-- .wrap -->
<!-- The form -->
<div class="form-popup" id="myForm">
    <form action="/action_page.php" class="form-container">

        <div class="header">
            <div class="add">
                <label>Add Iteams</label>
            </div>
            <div class="">
                <a href="url" onclick="CancleDetails()">X</a>
            </div>
        </div>
        <div class="modal-body">
            <div class="container1">
                <div class="row">
                    <div class="col-10">
                        <label for="item" class="label-max-width">ITEM:</label>
                        <input type="text" id="item" name="item">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="package" class="label-max-width">PACKAGE:</label>
                        <input type="text" id="package" name="package">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="quantity" class="label-max-width">QUANTITY:</label>
                        <input type="number" id="quantity" name="quantity">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="mrp" class="label-max-width">MRP:</label>
                        <input type="number" id="mrp" name="mrp">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="landing" class="label-max-width">LANDING:</label>
                        <input type="number" id="landing" name="landing">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="total" class="label-max-width">TOTAL:</label>
                        <input type="number" id="total" name="total">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="margin" class="label-max-width">MARGIN:</label>
                        <input type="number" id="margin" name="margin">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="part_number" class="label-max-width">PARTNUMBER:</label>
                        <input type="number" id="part_number" name="part_number">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="item" class="label-max-width">COMMENT:</label>
                        <input type="text" id="comment" name="comment">
                    </div>
                </div>
            </div>
        </div>
        <div class="foter">
            <div class="add-btn">
                <input type="submit" value="Add" onclick="SaveDetails()">
            </div>
            <div class="cancle-btn">
                <input type="submit" value="Cancle" onclick="CancleDetails()">
            </div>
        </div>
    </form>
</div>
</body>
<script>
    $(document).ready(function() {

        //jquery for toggle sub menus
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
        });

        //jquery for expand and collapse the sidebar
        $('.menu-btn').click(function() {
            $('.sidebar').addClass('active');
            $('.menu-btn').css("visibility", "hidden");
        });
        //Active cancel button
        $('.close-btn').click(function() {
            $('.sidebar').removeClass('active');
            $('.menu-btn').css("visibility", "visible");
        });
    });

    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>

</html>
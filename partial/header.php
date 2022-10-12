<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Demo Layout</title>
<link type="text/css" rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/jquery-3.6.1.min.js" ></script>
</head>
<body>

<style>
        

</style>
<div class="wrap">
 
    <div id="header">
        <div>
        <img src="assets/src/logo.png" alt="Company Logo" width="140px">
        </div>
        <div>
        <a href="#">Logout</a>   
        </div>
    </div><!-- .header -->
 
    <div class="content">
    <header class="contant-header"> </header>
    <header class="contant-sub-header">
        
    <div id="navlist" class="d-flex" >
    <div>
        <a href="#">Add</a>
        <a href="#">Add Meta</a>
        <a href="#">Delete</a>
        <a href="#">Duplicate</a>
    </div>
    <div class="search">
            <form action="#">
                <input type="text"
                    placeholder=" Search here..."
                    name="search">
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
            STOCK  QTY
            </th>
            <th>
            PARTNUMBER
            </th>
        </tr>
        <tr>
            <td>hello</td>
        </tr>
        <tr>
            <td>hello</td>
        </tr><tr>
            <td>hello</td>
        </tr>
    </table>
    </div><!-- .content -->
     
    <div class="sidebar">
        <header class="card-header">Categories</header>
        <header class="sub-cat-header">Icon</header>
        <ul>
        <div class="menu">

<div class="item"><a href="#"><i class="fas fa-desktop"></i>Dashboard</a></div>

<div class="item">
  <a class="sub-btn"><i class="fas fa-table"></i>Tables<i class="fas fa-angle-right dropdown"></i></a>
  <div class="sub-menu">
     <a href="#" class="sub-item">Sub Item 01</a>
     <a href="#" class="sub-item">Sub Item 02</a>
     <a href="#" class="sub-item">Sub Item 03</a>
  </div>
</div>

<div class="item"><a href="#"><i class="fas fa-th"></i>Forms</a></div>

<div class="item">
  <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
  <div class="sub-menu">
     <a href="#" class="sub-item">Sub Item 01</a>
     <a href="#" class="sub-item">Sub Item 02</a>
  </div>
</div>

<div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>

</div>
        </ul>
    </div><!-- .sidebar -->
     
    <div class="clear"></div>
     
    <div class="footer">
        <h1>Copyright@2022</h1>
    </div><!-- .footer -->
 
</div><!-- .wrap -->
 
</body>
<script>
    $(document).ready(function(){

    //jquery for toggle sub menus
    $('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
    });

    //jquery for expand and collapse the sidebar
    $('.menu-btn').click(function(){
    $('.sidebar').addClass('active');
    $('.menu-btn').css("visibility", "hidden");
    });
    //Active cancel button
    $('.close-btn').click(function(){
    $('.sidebar').removeClass('active');
    $('.menu-btn').css("visibility", "visible");
    });
    });
</script>
</html>
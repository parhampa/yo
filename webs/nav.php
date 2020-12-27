<nav class="w3-sidebar w3-collapse w3-white w3-animate-right w3-right" style="z-index:3;width:300px;" id="mySidebar">
    <br>
    <div class="w3-container w3-row">
        <div class="w3-col s8 w3-bar" style="text-align: center;">
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
        </div>
    </div>
    <hr>
    <div class="w3-container w3-blue" style=" padding: 10px;">
        <b style="font-size: 14px;">داشبورد</b>
    </div>
    <div class="w3-bar-block  w3-right-align">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black w3-right-align"
           onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  بستن</a>
        <hr>
        <a href="websites.php?action=editform&user=<?php echo($_SESSION['user']); ?>"
           class="w3-bar-item w3-button w3-padding w3-right-align"><i
                    class="fa fa-bullseye fa-fw"></i> 
            تنظیمات</a>
        <hr>
        <a href="cat.php?action=show" class="w3-bar-item w3-button w3-padding w3-right-align"><i
                    class="fa fa-bullseye fa-fw"></i> 
            دسته بندی ها</a>
        <hr>
        <a href="menu.php?action=show" class="w3-bar-item w3-button w3-padding w3-right-align"><i
                    class="fa fa-bullseye fa-fw"></i> 
            منو</a>
        <hr>
        <a href="blog.php?action=show" class="w3-bar-item w3-button w3-padding w3-right-align"><i
                    class="fa fa-bullseye fa-fw"></i> 
            بلاگ</a>
        <hr>
        <a href="product.php?action=show" class="w3-bar-item w3-button w3-padding w3-right-align"><i
                    class="fa fa-bullseye fa-fw"></i> 
            فروشگاه</a>
        <hr>
        <a href="slider.php?action=show" class="w3-bar-item w3-button w3-padding w3-right-align"><i
                    class="fa fa-bullseye fa-fw"></i> 
            اسلایدر</a>
        <hr>


        <br><br>
        <br><br>
    </div>
</nav>
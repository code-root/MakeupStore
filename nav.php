<style>
     .bb {
  /* 
        background-color: #111827;
    border: none;
  color: #fff8f8; 
    padding: 7px 108px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
     margin: 10px;  */
}
</style>
<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>القائمة </title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="<?=URL?>"><?php echo (cookie_value == "ar_AR")?'الصفحة الرئيسية':'Home Page'; ?></a></li>

                    <?php $sql_ca = "SELECT * FROM category Orders LIMIT 3";
                $result_ca = $conn->query($sql_ca);
                if ($result_ca->num_rows == 0) { echo " 0 results " ; } else { while($row_ca = $result_ca->fetch_assoc()) { ?>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="category.php?code=<?=$row_ca['id']?>&name=<?=$row_ca['name']?>"><?php echo (cookie_value == "ar_AR")?$row_ca['name']:$row_ca['name_en']; ?></a></li>
                 <?php } } ?>
                    </ul>
                    
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="<?=URL?>">
                    <svg class="fill-current text-gray-800 mr-2 fontLOGO" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                    </svg>Mezna store</a>
                    <h6 style="font-size: 13px;border: 1px solid #000000;width: 113px;position: relative;right: -35px;"> The Luxury Closet </h6>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">

                <a class="inline-block no-underline hover:text-black" href="dashboard/login.php">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a>

            </div>
            <div class="relative">
    <input type="checkbox" id="sortbox" class="hidden absolute">
    <label for="sortbox" class="flex items-center space-x-1 cursor-pointer">
    <span class="text-lg"><?php echo (cookie_value == "ar_AR")?'AR':'EN'; ?></span>
    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </label>

        <div id="sortboxmenu" class="absolute mt-1 right-1 top-full min-w-max shadow rounded opacity-0 bg-gray-300 border border-gray-400 transition delay-75 ease-in-out z-10">
        <ul class="block text-right text-gray-900">
        <?php if(cookie_value == "en_US"){ ?>
            <li><a href="?lang=ar_AR" class="block px-3 py-2 hover:bg-gray-200">عربي</a></li>  
                    <?php } else { ?>
                    <li><a href="?lang=en_US" class="block px-3 py-2 hover:bg-gray-200">English</a></li>
                    <?php } ?>

        </ul>
    </div>
</div>
        </div>
    </nav>


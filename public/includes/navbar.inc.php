<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 md:flex-row items-center justify-between">
        <a href="<?php echo SITE_PATH ?>" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl"><?php echo SITE_NAME ?></span>
        </a>
        <button class="md:hidden block" id="navtoggler">
            <div class="menu flex justify-between h-7 w-10 flex-col mr-1">
                <div class="h-1 w-4 bg-indigo-900 rounded-full"></div>
                <div class="h-1 w-6 bg-indigo-900 rounded-full"></div>
                <div class="h-1 w-5 bg-indigo-900 rounded-full"></div>
                <div class="h-1 w-7 bg-indigo-900 rounded-full"></div>
            </div>
        </button>
        <form method="post" class="w-screen h-10 md:w-2/3 md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <input type="text" placeholder="Search Products, Categories etc.." class="h-10 w-4/5 border-b-2 p-2 border-indigo-500 outline-none">
            <button class="w-12 pl-3 h-10 bg-indigo-500" type="button" name="search_btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#fff">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </form>
        <?php
            if(isset($_SESSION['USER_LOGIN'])){
                ?>
                <a href="<?php echo SITE_PATH.$_SESSION['USER_NAME'] ?>" class="px-5 hover:text-indigo-600 md:inline-flex hidden">
                    Profile
                </a>
                <form method="post">
                    <button type="submit" name="logout_btn" class="px-5 md:inline-flex hidden  hover:text-indigo-600">Logout</button>
                </form>
                <?php
            }else{
                ?>
                <a href="<?php echo SITE_PATH ?>login" class="px-5 md:inline-flex hidden  hover:text-indigo-600">
                    Login / Register
                </a>
                <?php
            }
        ?>
    </div>
    <div class="bg-indigo-100">
        <div class="bg-indigo-100 container mx-auto flex flex-wrap flex-col md:flex-row items-center relative">
            <div class="md:flex hidden group title-font font-medium items-center py-5 px-12 text-gray-900 mb-4 md:mb-0 uppercase bg-indigo-200 h-100 rounded-tr-full rounded-br-full">
                <a class="flex items-center">
                    <div class="menu flex justify-between h-7 w-10 flex-col mr-1">
                        <div class="h-1 w-4 bg-indigo-900 rounded-full"></div>
                        <div class="h-1 w-6 bg-indigo-900 rounded-full"></div>
                        <div class="h-1 w-5 bg-indigo-900 rounded-full"></div>
                        <div class="h-1 w-7 bg-indigo-900 rounded-full"></div>
                    </div>
                    <span class="mr-1 text-indigo-900">shop by category</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <div class="grid grid-cols-4 w-full font-small absolute bg-indigo-200 top-full left-0 p-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-1 transition-all duration-500 z-10">
                    <ul class="p-2">
                        <li><a class="font-semibold hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Category name</a></li>
                        <li><a class="font-normal text-sm hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Sub Category name</a></li>
                        <li><a class="font-normal text-sm hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Sub Category name</a></li>
                        <li><a class="font-normal text-sm hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Sub Category name</a></li>
                        <li><a class="font-normal text-sm hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Sub Category name</a></li>
                    </ul>
                    <ul class="p-2">
                        <li><a class="font-semibold hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Category name</a></li>
                        <li><a class="font-normal text-sm hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Sub Category name</a></li>
                    </ul>
                    <ul class="p-2">
                        <li><a class="font-semibold hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Category name</a></li>
                        <li><a class="font-normal text-sm hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Sub Category name</a></li>
                        <li><a class="font-normal text-sm hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Sub Category name</a></li>
                        <li><a class="font-normal text-sm hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Sub Category name</a></li>
                    </ul>
                    <ul class="p-2">
                        <li><a class="font-semibold hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Category name</a></li>
                        <li><a class="font-normal text-sm hover:bg-indigo-500 hover:text-white px-2 py-1 my-1 w-full block">Sub Category name</a></li>
                    </ul>
                </div>
            </div>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" id="navlinks">
                <a href="<?php echo SITE_PATH ?>" class="<?php if(!isset($urlArr[0])){echo 'text-indigo-500 border-indigo-500 bg-indigo-200 ';} ?>p-5 md:inline-block block md:w-auto w-full border-b-4 hover:text-indigo-500 border-indigo-100 hover:border-indigo-500 hover:bg-indigo-200">
                    Home
                </a>
                <a href="<?php echo SITE_PATH ?>shop"  class="<?php if(isset($urlArr[0])&& $urlArr[0]!=''){if($urlArr[0]==='shop'){echo 'text-indigo-500 border-indigo-500 bg-indigo-200 ';}} ?>p-5 md:inline-block block md:w-auto w-full border-b-4 hover:text-indigo-500 border-indigo-100 hover:border-indigo-500 hover:bg-indigo-200">
                    Shop
                </a>
                <a href="<?php echo SITE_PATH ?>blog"  class="<?php if(isset($urlArr[0])&& $urlArr[0]!=''){if($urlArr[0]==='blog'){echo 'text-indigo-500 border-indigo-500 bg-indigo-200 ';}} ?>p-5 md:inline-block block md:w-auto w-full border-b-4 hover:text-indigo-500 border-indigo-100 hover:border-indigo-500 hover:bg-indigo-200">
                    Blog
                </a>
                <a  href="<?php echo SITE_PATH ?>contact" class="<?php if(isset($urlArr[0])&& $urlArr[0]!=''){if($urlArr[0]==='contact'){echo 'text-indigo-500 border-indigo-500 bg-indigo-200 ';}} ?>p-5 md:inline-block block md:w-auto w-full border-b-4 hover:text-indigo-500 border-indigo-100 hover:border-indigo-500 hover:bg-indigo-200">
                    Contact
                </a>
                <a href="<?php echo SITE_PATH ?>cart"  class="p-5 md:hidden block md:w-auto w-full border-b-4 hover:text-indigo-500 border-indigo-100 hover:border-indigo-500 hover:bg-indigo-200">
                    Cart
                </a>
                <a href="<?php echo SITE_PATH ?>login"  class="p-5 md:hidden block md:w-auto w-full border-b-4 hover:text-indigo-500 border-indigo-100 hover:border-indigo-500 hover:bg-indigo-200">
                    Login / Register
                </a>
            </nav>
            <a href="<?php echo SITE_PATH ?>cart" class="md:inline-flex hidden md:w-auto w-full px-5 items-center border-0 py-1 md:mx-1 text-base mt-4 md:mt-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </a>
        </div>
    </div>
</header>
<nav class="flex items-center justify-between h-14 px-5 bg-indigo-400">
    <form method="post" class="w-screen h-10 md:w-2/3 md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
        <input type="text" placeholder="Search Products, Categories etc.." class="h-10 w-4/5 border-b-2 p-2 border-indigo-500 outline-none">
        <button class="w-12 pl-3 h-10 bg-indigo-500" type="button" name="admin_search_btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#fff">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
    </form>
    <ul>
        <li class="relative">     
            <div class="profile_image bg-green-300 h-10 w-10 rounded-full"></div>   
            <div class="absolute top-full right-0 mt-3 bg-blue-600 p-2">
                <form method="post">
                    <button type="submit" name="logout_btn" class="px-5">Logout</button>
                </form>
            </div>
        </li>
    </ul>
</nav>
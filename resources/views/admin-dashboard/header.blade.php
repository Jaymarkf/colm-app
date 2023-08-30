<header class="flex items-center flex-col border-b-2 pt-2 md:flex md:flex-row md:p-4">
         <img class="xl:w-40 2xl:m-0 md:w-20 w-36"  loading="lazy" src="{{asset('images/logo.webp')}}" alt="main_logo">
         <div class="title-content my-4 flex flex-col justify-end items-center">
           <h1 class="text-gray-700 font-bold md:ml-5">ADMIN PANEL</h1>
         </div>
         <div class="container-profile md:ml-auto flex items-center">
               @include('admin-dashboard/desktop-nav')
                <div class="account mb-3 md:mb-0">
                    <i class="fa fa-user text-gray-700"></i>
                    <span class="text-gray-700 ml-2 cursor-pointer hover:text-gray-400 font-bold nav-account">Account<i class="fa fa-caret-down ml-2"></i></span>
                    <ul class="nav-account-dropdown mt-1 hidden">
                        <li class="text-gray-700 font-bold text-center">
                           <a href="/colm-admin">Logout</a>
                        </li>
                    </ul>
                </div>
         </div>
</header>
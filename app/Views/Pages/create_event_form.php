<!-- create_event_form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Event</title>
    
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<!-- Include jQuery -->



</head>
<header class="bg-white border-b border-gray-300">
    <!-- Mobile phone -->
   
    <div id="toggle" class="z-4 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-32 dark:bg-gray-700 text-center">
        <ul class="py-2 text-xs md:text-md text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButtontoggle">
            <?php
            if (session()->has('PseudoNom') && !empty(session('PseudoNom'))) {
                // if (session()->get('PseudoNom') == "admin") {
                echo '<li>
                <a href="' . base_url('/list-reclame') . '" class="block px-4 py-2">List of Reclamation</a>
              </li>';
                // }
                if (session()->get('PseudoNom') != "admin") {
                    echo '
                 <li class="menu-item  py-2 px-4 text-gray-800  "><a href="' . base_url('/reclame') . '" class="">Add Reclamation</a></li>';
                }
                echo '<li class="menu-item  py-2 px-4 text-gray-800  "><a href="' . base_url('logout') . '" class="">logout</a></li>';
            } else {
                echo '
                <li class="menu-item  py-2 px-4 text-gray-800  "><a href="' . base_url('sign-in') . '" class="">Sign In</a></li>
                <li class="menu-item  py-2 px-4 text-gray-800  "><a href="' . base_url('sign-up') . '" class="">Sign Up</a></li>';
            } ?>


        </ul>
    </div>

    <script src="
https://cdn.jsdelivr.net/npm/flowbite@2.2.0/dist/flowbite.min.js
"></script>

    <div class=" mx-auto md:mx-4 p-4 flex items-center justify-between">
        <a href="<?= base_url('/') ?>">
            <img src="<?= "img/svg/logo.svg" ?>" class=" block md:h-20 h-12  h-6 lg:mr-4 md:mr-2" alt="" />
        </a>


        <button class="sm:hidden bg-transparent  text-orange-500 font-semibold  py-2 px-4 border border-orange-500 rounded" id="dropdownDefaultButtontoggle" data-dropdown-toggle="toggle">
            &#9776;
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <?php if (session()->get('PseudoNom') != "admin") : ?>

                    <li>
                        <a href="<?= base_url('/reclame') ?>" class="block px-4 py-2 ">Add Reclamation</a>
                    </li>
                <?php endif; ?>

                <li>
                    <a href="<?= base_url('/list-reclame') ?>" class="block px-4 py-2  ">List of Reclamation</a>
                </li>
            </ul>
        </div>
        <?php
        if (session()->has('PseudoNom') && !empty(session('PseudoNom'))) {
            echo ' <ul  class="hidden sm:flex space-x-4 text-sm md:text-base">
           <button class="menu-item py-2 px-4 text-gray-800  " id="dropdownDefaultButton" data-dropdown-toggle="dropdown" type="button">Hello ' . session()->get('PseudoNom') . '</button>
            <li class="menu-item border-2 border-orange-500 hover:bg-orange-500 hover:text-white rounded-md py-2 px-4 text-gray-800  "><a href="' . base_url('logout') . '" class="">logout</a></li>
        </ul>';
        } else {

            echo ' <ul  class="hidden sm:flex space-x-4 text-sm md:text-base ">
            <li class="menu-item border-2 border-orange-500 hover:bg-orange-500 rounded-md py-2 px-4 text-gray-800 hover:text-white "><a href="' . base_url('sign-in') . '" class="">Sign In</a></li>
            <li class="menu-item border-2 border-orange-500 hover:bg-orange-500 rounded-md py-2 px-4 text-gray-800  hover:text-white"><a href="' . base_url('sign-up') . '" class="">Sign Up</a></li>
        </ul>';
        } ?>
    </div>
    </header>

<body>
<div class="flex flex-col justify-center px-6 py-12 lg:px-8 overflow-auto h-[500px]">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
    <div class="mt-10 md:mx-auto md:w-full md:max-w-2xl">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Post <span class="underline underline-offset-3 text-orange-500">an Event</span></h2>

    <form action="<?= site_url('/create_event_form'); ?>" method="post" enctype="multipart/form-data">
        <label for="event_name">Event Name:</label>
        <input type="text" name="event_name" id="event_name" required><br><br>

        <label for="event_disc">Event Description:</label><br>
        <textarea name="event_disc" id="event_disc" rows="4" cols="50" required  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6"></textarea><br><br>
        <label for="event_date">Event Date:</label>
        <input type="date" name="event_date" id="event_date" required><br><br>

        <label for="image">Image:</label>
        <input type="file" name="image" id="image" required><br><br>
        <input type="submit"  class="flex w-full justify-center rounded-md bg-orange-300 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white-600" value="Post!">
    </form>
    </div>
    </div>
</div>
</body>

<footer class="bg-white border-gray-300 shadow-lg mt-4">

    <div class=" flex flex-col md:flex-row md:justify-around items-center md:items-start md:mx-auto lg:px-32 px-16 md:pt-10 pt-2 md:pb-5 space-y-3 " id="Contact">
        <div>
            <a href="<?= base_url('/') ?>"><img src="img/svg/logo.svg" class="block md:h-30 lg:h-40 h-20 lg:mr-8 md:mr-4" alt="" /></a>
        </div>
        <div class=" flex flex-col text-center md:text-start text-sm md:text-md ">
            <div class="font-semibold  md:text-sm  lg:text-lg text-black  pb-2 ">Sport Club</div>
            <div class="pl-4 space-y-1">
                <div class="font-semibold  md:text-gray-500  hover:text-black"><a href="#Event">Upcaming Events</a></div>
                <div class="font-semibold  md:text-gray-500  hover:text-black"><a href="#Gallery">Gallery</a></div>
                <div class="font-semibold  md:text-gray-500  hover:text-black"><a href="#Us">About Us</a></div>

            </div>
        </div>
        <div class=" flex flex-col text-center md:text-start text-sm md:text-md ">
            <div class="font-semibold md:text-sm  lg:text-lg text-black  md:pb-2">Contact Us</div>
            <div class="md:pl-4 ">
                <div class="flex flex-col">
                    <div class="font-semibold md:text-sm  lg:text-lg md:text-black text-gray-500 md:pr-2">123-456-7890
                    </div>
                    <div class="font-semibold md:text-sm  lg:text-lg md:text-black text-gray-500 py-2 d:pr-2">123-456-7890
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="font-semibold md:text-sm  lg:text-lg text-lg text-black pb-2 md:block hidden">Social</div>
            <div class="pl-4 pb-2">
                <div class="flex justify-center space-x-2 ">
                    <!-- Link 1 -->
                    <a href="#">
                        <img src="<?= "img/svg/icon-facebook.svg" ?>" alt="" class="lg:h-8 md:h-6 fill-current text-black   brightness-0 " />

                    </a>
                    <!-- Link 2 -->
                    <a href="#">
                        <img src="<?= "img/svg/icon-youtube.svg" ?>" alt="" class="lg:h-8 md:h-6  rounded-full  brightness-0 " />
                    </a>
                    <!-- Link 3 -->
                    <a href="#">
                        <img src="<?= "img/svg/icon-twitter.svg" ?>" alt="" class="lg:h-8 md:h-6 filter  brightness-0 " />
                    </a>
                    <!-- Link 4 -->
                    <a href="#">
                        <img src="img/svg/icon-pinterest.svg" alt="" class=" lg:h-8 md:h-6 rounded-full brightness-0 " />
                    </a>
                    <!-- Link 5 -->
                    <a href=" #">
                        <img src="<?= "img/svg/icon-instagram.svg" ?>" alt="" class="lg:h-8 md:h-6  rounded-lg  brightness-0 " />
                    </a>
                </div>
            </div>
        </div>


    </div>

    <div class="hidden h-[2px]  bg-gray-200 lg:mx-32 md:mx-16 rounded-md md:block "></div>
    <div class="hidden  md:flex md:flex-row lg:mx-32 md:mx-16    justify-between my-1">

        <div class="font-medium text-sm lg:text-base text-black my-1 ">
            Copyright &copy; 2023, All Rights Reserved
        </div>
        <div class="flex  justify-end my-1">
            <div class="font-medium text-sm lg:text-base text-darkGrayishBlue hover:text-black lg:pr-6 md:pr-2">Politique de
                confidentialité
            </div>
            <div class="font-medium text-sm lg:text-base  text-darkGrayishBlue hover:text-black">Termes et conditions</div>

        </div>

</footer>
</html>

</html>

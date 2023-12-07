
<!DOCTYPE html>
<html>
<head>
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


<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<!-- Include jQuery -->



    <title>Events</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.deleteBtn').on('click', function() {
        var eventId = $(this).data('id');
        var $row = $(this).closest('tr'); // Reference to the row

        // Make an AJAX request to delete the event
        $.ajax({
            url: '/EventController/deleteEvent/' + eventId,
            type: 'DELETE',
            success: function(response) {
                console.log(response.message);
                
                // Remove the row from the table on success
                $row.fadeOut('slow', function() {
                    $(this).remove();
                });
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>


   
<div class="flex flex-col justify-center px-6 py-12 lg:px-8 h-[500px] text-xs md:text-sm lg:text-lg mt-14">
    <h2 class="text-center  md:text-2xl text-lg  font-bold leading-9 tracking-tight text-gray-900">List of <span class="underline underline-offset-3 text-orange-500 ">Events</span></h2>

    <div class="mt-8 text-[10px]  md:text-base lg:text-lg ">
        <div class="bg-white border-2 border-orange-500 h-16 w-full rounded-md flex items-center justify-between px-4 gap-1">
            
        <th><div class="md:w-24 w-12 text-center ">ID</div></th>
                <th><div class="grow  text-center">Event Name</div></th>
                <th><div class="md:w-56 w-26  text-center">Event Discription</div></th>
                <th><div class="grow  text-center">Event Poster</div></th>
                <th><div class="grow  text-center">Event Date</div></th>


            <?php if (session()->get('PseudoNom') == "admin") : ?>
    <form method="get" action="<?= site_url('/create_event_form'); ?>">
        <button   class="flex w-full justify-center rounded-md bg-orange-300 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white-600" type="submit" >Add events</button>
    </form>
        <?php endif; ?>

        </div>
        <div class="h-96 overflow-auto py-2 rounded-md no-scrollbar">
    <table class="w-full table-auto">
       
        <tbody>
            <?php foreach ($events as $event): ?>
               
                <tr class="bg-white border-2 border-orange-100 h-26 w-full rounded-md flex items-center justify-between px-20 gap-5">
                    <td class="md:w-24 w-12 text-center"><?= $event['id']; ?></td>
                    <td class="grow  text-center"><?= $event['event_name']; ?></td>
                    <td class="grow  md:w-56 w-26 text-center"><?= $event['event_disc']; ?></td>
                    <td class="grow  text-center">
                        <img src="<?= "img/images/".$event['image']; ?>" height="100px" width="100px" alt="Image">
                    </td>
                    <td class="grow  text-center"><?= $event['event_date']; ?></td>

                    <td class="px-4 py-2">
                        <button class="deleteBtn text-white bg-red-500 px-4 py-2 rounded-md" data-id="<?= $event['id']; ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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

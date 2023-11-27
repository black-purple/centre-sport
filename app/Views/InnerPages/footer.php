<footer class="bg-white border-gray-300 shadow-lg mt-4">

    <div class=" flex flex-col md:flex-row md:justify-around items-center md:items-start md:mx-auto lg:px-32 px-16 md:pt-10 pt-2 md:pb-5 space-y-3 " id="Contact">
        <div>
            <a href="<?= base_url('/') ?>"><img src="<?= !empty($public) ? base_url($public . '/img/svg/logo.svg') : "public/img/svg/logo.svg" ?>" class="block md:h-20 h-10 lg:mr-8 md:mr-4" alt="" /></a>
        </div>
        <div class=" flex flex-col text-center md:text-start">
            <div class="font-semibold md:text-xl lg:text-lg text-md md:text-black  pb-2">Sport Club</div>
            <div class="pl-4">
                <div class="font-semibold text-sm lg:text-md  md:text-gray-500  hover:text-black"><a href="#Nous">À propos de nous</a></div>
            </div>
        </div>
        <div class=" flex flex-col text-center md:text-start">
            <div class="font-semibold md:text-xl lg:text-lg text-black  md:pb-2">Contact Us</div>
            <div class="md:pl-4 ">
                <div class="flex flex-col">
                    <div class="font-semibold text-sm lg:text-md md:text-black text-gray-500 pr-2">123-456-7890
                    </div>
                    <div class="font-semibold text-sm lg:text-md md:text-black text-gray-500 py-2 pr-2">123-456-7890
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="font-semibold md:text-xl text-lg text-black pb-2 md:block hidden">Social</div>
            <div class="pl-4 pb-2">
                <div class="flex justify-center space-x-2 ">
                    <!-- Link 1 -->
                    <a href="#">
                        <img src="<?= !empty($public) ? base_url($public . '/img/svg/icon-facebook.svg') : "public/img/svg/icon-facebook.svg" ?>" alt="" class="lg:h-8 md:h-6 fill-current text-black   brightness-0 " />

                    </a>
                    <!-- Link 2 -->
                    <a href="#">
                        <img src="<?= !empty($public) ? base_url($public . '/img/svg/icon-youtube.svg') : "public/img/svg/icon-youtube.svg" ?>" alt="" class="lg:h-8 md:h-6  rounded-full  brightness-0 " />
                    </a>
                    <!-- Link 3 -->
                    <a href="#">
                        <img src="<?= !empty($public) ? base_url($public . '/img/svg/icon-twitter.svg') : "public/img/svg/icon-twitter.svg" ?>" alt="" class="lg:h-8 md:h-6 filter  brightness-0 " />
                    </a>
                    <!-- Link 4 -->
                    <a href="#">
                        <img src="<?= !empty($public) ? base_url($public . '/img/svg/icon-pinterest.svg') : "public/img/svg/icon-pinterest.svg" ?>" alt="" class="lg:h-8 md:h-6  rounded-full  brightness-0 " />
                    </a>
                    <!-- Link 5 -->
                    <a href="#">
                        <img src="<?= !empty($public) ? base_url($public . '/img/svg/icon-instagram.svg') : "public/img/svg/icon-instagram.svg" ?>" alt="" class="lg:h-8 md:h-6  rounded-lg  brightness-0 " />
                    </a>
                </div>
            </div>
        </div>


    </div>

    <div class="hidden h-[2px]  bg-gray-200 lg:mx-32 md:mx-16 rounded-md md:block "></div>
    <div class="hidden  md:flex md:flex-row lg:mx-32 md:mx-16    justify-between my-1">

        <div class="font-medium text-sm lg:text-md text-black my-1 ">
            Copyright &copy; 2023, All Rights Reserved
        </div>
        <div class="flex  justify-end my-1">
            <div class="font-medium text-sm lg:text-md text-darkGrayishBlue hover:text-black lg:pr-6 md:pr-2">Politique de
                confidentialité
            </div>
            <div class="font-medium text-sm lg:text-md  text-darkGrayishBlue hover:text-black">Termes et conditions</div>

        </div>

</footer>
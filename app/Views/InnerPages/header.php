<header class="bg-white border-b border-gray-300">
    <h1><?php $islanding ?></h1>
    <div class="container mx-auto p-4 flex items-center justify-between">
        <a href="<?= base_url('/') ?>">
            <img src="public/img/svg/logo.svg" class="block h-10 lg:mr-4 md:mr-2" alt="" />
        </a>

        <button onclick="toggleMenu()" class="lg:hidden text-gray-800 focus:outline-none focus:text-gray-500">
            &#9776;
        </button>

        <ul class="hidden lg:flex space-x-4">
            <li class="menu-item border-2 border-orange-500 hover:bg-orange-500 rounded-md py-2 px-4 text-gray-800  hover:text-white"><a href="<?= base_url('sign-in') ?>" class="">Connecter</a></li>
            <li class="menu-item border-2 border-orange-500 hover:bg-orange-500 rounded-md py-2 px-4 text-gray-800  hover:text-white"><a href="<?= base_url('sign-up') ?>" class="">Inscrire</a></li>
        </ul>
    </div>
</header>
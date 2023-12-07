<main>
    <div class="h-96 relative text-white ">
        <img src="img/images/1.jpg" alt="" class="object-cover h-full w-full ">
        <div class="p-6 md:p-10 text-center z-10 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-40 rounded-lg w-3/4">
            <h1 class="text-lg md:text-5xl font-bold mb-2 md:mb-4">Welcome to Sport Club</h1>
            <p class="text-sm md:text-xl">Experience the thrill of <span class="font-bold text-orange-500 underline underline-offset-2"> Sport Club</span> like never before. Join us on the journey of <span class="font-bold "> "teamwork, dedication, and victory!"</span></p>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="relative">
                    <h2 class="text-2xl font-bold mb-4 text-black underline underline-offset-1 ml-4 md:ml-14 mt-4 " id="Event">Upcoming Events</h2>
                    
    <?php
    if (session()->get('PseudoNom') == "admin") : ?>
                        <form method="GET" action="<?= site_url('display-table'); ?>">
                        <button type="submit"  class="absolute top-0 right-0 bg-gray-800 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-8 ">Add events </button>
</form>
                    <a href="<?= site_url('/'); ?>"></a>
                    </div>
                <?php endif; ?>

    <section class="md:container mx-auto md:mt-8 mt-1 px-16">

        <!-- Upcoming Events -->
        <div class="mt-2 flex flex-row">
        <div class="flex flex-wrap justify-center">
            <?php foreach ($events as $event): ?>
            <div class="m-1 mb-2 text-center">
                 <img src="<?= base_url('img/images/'.$event['image']); ?>" alt="" class="h-64 rounded-lg shadow-lg">
                 <h3 class="text-sm font-semibold mt-1">Event Name: <?= $event['event_name']; ?></h3>
                 <p class="text-xs">Date: <?= $event['event_date']; ?></p>
                 <p class="text-xs">Event Description: <?= $event['event_disc']; ?></p>
             </div>
         <?php endforeach; ?>


        </div>

        </div>
        </div>
    </section>
    <?php
    echo view('Components/gallery.php');
    ?>
    <?php
    echo view('Components/about.php');

    ?>
</main>
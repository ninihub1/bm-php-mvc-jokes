<?php
/**
 * Jokes Index View
 *
 * This file is used to display a list of jokes. Users can search for jokes or view all jokes.
 *
 * Filename:        index.view.php
 * Location:        /App/views
 * Project:         bm-php-mvc-jokes
 * Date Created:    20/10/2024
 *
 * Author:          Blony Maunela 20114950@tafe.wa.edu.au
 */

$pageTitle = "Jokes | bm-php-mvc-jokes";
loadPartial('header', ["pageTitle" => $pageTitle]);
loadPartial('navigation');
?>

<main class="container mx-auto bg-zinc-50 py-8 px-4 shadow shadow-black/25 rounded-b-lg flex flex-col flex-grow">
    <article>
        <header class="bg-red-700 text-zinc-200 -mx-4 -mt-8 p-8 mb-8 flex">
            <h1 class="grow text-2xl font-bold ">Jokes</h1>
            <p class="text-md flex-0 px-8 py-2 bg-zinc-500 hover:bg-emerald-600 text-white rounded transition ease-in-out duration-500">
                <a href="/jokes/create">Add Joke</a>
            </p>
            <form method="GET" action="/jokes/search" class="block mx-5">
                <input type="text" name="keywords" placeholder="Joke search..."
                       class="w-full md:w-auto px-4 py-2 focus:outline-none"/>
                <button class="w-full md:w-auto
                           bg-sky-500 hover:bg-sky-600
                           text-white
                           px-4 py-2
                           focus:outline-none transition ease-in-out duration-500">
                    <i class="fa fa-search"></i> Search
                </button>
            </form>
        </header>

        <section class="text-xl text-zinc-500 my-8">
            <?php if (isset($keywords) && $keywords > "") : ?>
                <p>Search Results for: <?= htmlspecialchars($keywords) ?> [<?= count($jokes ?? []) ?> joke(s) found]</p>
            <?php else : ?>
                <p>All Jokes</p>
            <?php endif; ?>

            <?= loadPartial('message') ?>
        </section>

        <section class="flex flex-col gap-8">
            <?php foreach ($jokes ?? [] as $joke): ?>
                <article class="w-full bg-white shadow rounded grid grid-cols-12">
                    <header class="col-span-4 bg-zinc-700 text-zinc-200 text-lg p-4 rounded-l flex-0">
                        <p class="align-middle font-bold">Tags: <?= $joke->tags ?></p>
                        <p class="align-middle font-bold">Category: <?= $joke->category_id ?></p>
                    </header>
                    <section class="col-span-6 flex flex-col py-4 gap-4 text-zinc-600 m-2">
                        <h4><?= $joke->joke ?></h4>
                    </section>
                    <a href="/jokes/<?= $joke->id ?>"
                       class="col-span-2 text-center text-zinc-900 font-medium
                        bg-zinc-200 hover:bg-zinc-300 block
                        py-4 rounded-r
                        transition ease-in-out duration-500">
                        View Joke Details...
                    </a>
                </article>
            <?php endforeach; ?>
        </section>

    </article>
</main>

<?php
loadPartial('footer');
?>

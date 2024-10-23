<?php
/**
 * Jokes - Detail View
 *
 * This file displays detailed information for a specific joke entry
 * in the bm-php-mvc-jokes web application. It presents the joke's content,
 * associated tags, creation date, and last update date.
 * Users can edit or delete the joke from this view, with appropriate
 * buttons for each action.
 *
 * Filename:        joke.view.php
 * Location:        /App/views
 * Project:         bm-php-mvc-jokes
 * Date Created:    20/10/2024
 *
 * Author:          Blony Maunela 20114950@tafe.wa.edu.au
 *
 */

$pageTitle = "Show | Jokes | bm-php-mvc-jokes";

loadPartial("header", ["pageTitle" => $pageTitle]);
loadPartial('navigation');
?>

<main class="container mx-auto bg-zinc-50 py-8 px-4 shadow shadow-black/25 rounded-b-lg flex flex-col flex-grow">
    <article>
        <header class="bg-zinc-700 text-zinc-200 -mx-4 -mt-8 p-8 mb-8 flex">

            <h1 class="grow text-2xl font-bold">Jokes - Detail</h1>

            <p class="text-md flex-0 px-8 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded transition ease-in-out duration-500">
                <a href="/jokes/create">Add Joke</a>
            </p>

            <form method="GET" action="/jokes/search" class="block mx-5">
                <input type="text" name="keywords" placeholder="Joke search..."
                       class="w-full md:w-auto px-4 py-2 focus:outline-none"/>
                <button class="w-full md:w-auto bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 focus:outline-none transition ease-in-out duration-500">
                    <i class="fa fa-search"></i> Search
                </button>
            </form>

        </header>

        <?= loadPartial('message') ?>

        <section class="w-1/2 mx-auto bg-white shadow rounded p-4 flex flex-col">

            <h4 class="-mx-4 bg-zinc-700 text-zinc-200 text-2xl p-4 -mt-4 mb-4 rounded-t flex-0 flex justify-between">
                <?= htmlspecialchars($joke->tags) ?>
            </h4>

            <section class="flex-grow flex flex-row">

                <section class="grow">
                    <h5 class="text-lg font-bold">
                        Content:
                    </h5>
                    <p class="grow text-lg text-zinc-600 mb-6">
                        <?= htmlspecialchars($joke->joke) ?>
                    </p>

                    <h5 class="text-lg font-bold">
                        Category:
                    </h5>
                    <p class="grow text-lg text-zinc-600 mb-4">
                        <?= htmlspecialchars($joke->category_id) ?>
                    </p>

                    <h5 class="text-lg font-bold">
                        Created At:
                    </h5>
                    <p class="grow text-lg text-zinc-600 mb-4">
                        <?= htmlspecialchars($joke->created_at) ?>
                    </p>

                    <h5 class="text-lg font-bold">
                        Last Update:
                    </h5>
                    <p class="grow text-lg text-zinc-600 mb-6">
                        <?= $joke->updated_at ? htmlspecialchars($joke->updated_at) : "n/a" ?>
                    </p>

                    <form method="POST" action="/jokes/delete/<?= $joke->id ?>" class="border-0 border-t-1 border-zinc-300 text-lg flex flex-row">
                        <a href="/jokes/edit/<?= $joke->id ?>" class="px-16 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded transition ease-in-out duration-500">
                            Edit
                        </a>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="ml-8 px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded transition ease-in-out duration-500">
                            Delete
                        </button>
                    </form>


                </section>

                <img class="object-cover" src="https://dummyimage.com/200x200/a1a1aa/fff&text=Joke+Image" alt="Joke Image">

            </section>

        </section>

    </article>
</main>

<?php
loadView('footer');
?>

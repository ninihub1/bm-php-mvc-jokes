<?php
/**
 * Joke Creation View
 *
 * Filename:        create.view.php
 * Location:        /views/jokes
 * Project:         bm-php-mvc-jokes
 * Date Created:    20/10/2024
 *
 * Author:          Blony Maunela 20114950@tafe.wa.edu.au
 *
 */

$pageTitle = "Add | Jokes | bm-php-mvc-jokes";

loadPartial("header", ["pageTitle" => $pageTitle]);
loadPartial('navigation');
?>

<main class="container mx-auto bg-zinc-50 py-8 px-4 shadow shadow-black/25 rounded-b-lg flex flex-col flex-grow">
    <article>
        <header class="bg-zinc-700 text-zinc-200 -mx-4 -mt-8 p-8 mb-8 flex">
            <h1 class="grow text-2xl font-bold ">Jokes - Add</h1>
        </header>

        <section>

            <?= loadPartial('errors', ['errors' => $errors ?? []]) ?>

            <form method="POST" action="/jokes">
                <h2 class="text-2xl font-bold mb-6 text-left text-gray-500">Joke Information</h2>

                <section class="mb-4">
                    <label for="Joke" class="mt-4 pb-1">Joke:</label>
                    <textarea id="Joke" name="joke" placeholder="Enter your joke here"
                              class="w-full px-4 py-2 border border-b-zinc-300 rounded focus:outline-none"><?= $joke['joke'] ?? '' ?></textarea>
                </section>

                <section class="mb-4">
                    <label for="Tags" class="mt-4 pb-1">Tags:</label>
                    <input type="text" id="Tags" name="tags" placeholder="Tags (comma-separated)"
                           class="w-full px-4 py-2 border border-b-zinc-300 rounded focus:outline-none"
                           value="<?= $joke['tags'] ?? '' ?>"/>
                </section>

                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                    Save
                </button>

                <a href="/jokes"
                   class="block text-center w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded focus:outline-none">
                    Cancel
                </a>
            </form>

        </section>

    </article>
</main>

<?php
loadPartial("footer");
?>

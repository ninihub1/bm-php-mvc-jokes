<?php
/**
 * Edit Joke View
 *
 * Filename:        jokes.view.php
 * Location:        /App/views
 * Project:         bm-php-mvc-jokes
 * Date Created:    20/10/2024
 *
 * Author:          Blony Maunela 20114950@tafe.wa.edu.au
 *
 */

$pageTitle = "Edit | Jokes | bm-php-mvc-jokes";

loadPartial("header", ["pageTitle" => $pageTitle]);
loadPartial('navigation');
?>

<main class="container mx-auto bg-zinc-50 py-8 px-4 shadow shadow-black/25 rounded-b-lg flex flex-col flex-grow">
    <article>
        <header class="bg-zinc-700 text-zinc-200 -mx-4 -mt-8 p-8 mb-8 flex">
            <h1 class="grow text-2xl font-bold">Jokes - Edit</h1>
            <p class="text-md flex-0 px-8 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded transition ease-in-out duration-500">
                <a href="/jokes/create">Add Joke</a>
            </p>
        </header>

        <section>
            <?= loadPartial('errors', [
                'errors' => $errors ?? []
            ]) ?>

            <form method="POST" action="/jokes/<?= $joke->id ?>">
                <input type="hidden" name="_method" value="PUT">

                <h2 class="text-2xl font-bold mb-6 text-left text-gray-500">
                    Joke Information
                </h2>

                <div class="mb-4">
                    <label for="JokeContent" class="mt-4 pb-1">Joke Content:</label>
                    <textarea id="JokeContent" name="joke" class="w-full px-4 py-2 border rounded focus:outline-none"><?= htmlspecialchars($joke->joke) ?></textarea>
                </div>

                <div class="mb-4">
                    <label for="JokeTags" class="mt-4 pb-1">Tags:</label>
                    <input type="text" placeholder="Tags" id="JokeTags" name="tags" class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= htmlspecialchars($joke->tags) ?>"/>
                </div>

                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                    Save
                </button>

                <a href="/jokes/<?= $joke->id ?>" class="block text-center w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded focus:outline-none">
                    Cancel
                </a>
            </form>
        </section>
    </article>
</main>

<?php
loadPartial("footer");
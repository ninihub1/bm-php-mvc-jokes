<?php
/**
 * Home Page View
 *
 * Filename:        home.view.php
 * Location:        /App/views
 * Project:         bm-php-mvc-jokes
 * Date Created:    23/08/2024
 *
 * Author:          Blony Maunela 20114950@tafe.wa.edu.au
 *
 */

loadPartial('header');
loadPartial('navigation');

?>

<main class="container mx-auto bg-zinc-50 py-8 px-4 shadow shadow-black/25 rounded-b-lg">
    <article>
        <header class="bg-zinc-700 text-zinc-200 -mx-4 -mt-8 p-8 text-2xl font-bold mb-8">
            <h1>Blony's Joke DB</h1>
        </header>
        <?php

        if (isset($_SESSION['user'])): ?>
            <section class="flex flex-row flex-wrap justify-center my-8 gap-8">
                <section class="w-1/4 bg-sky-800 text-white shadow rounded p-2 flex flex-row">
                    <h4 class="flex-0 w-1/2 -ml-2 mr-6 bg-sky-400 text-black text-lg p-4 -my-2 rounded-l">
                        Jokes:
                    </h4>
                    <p class="grow text-4xl ml-6">
                        <?= $jokeCount->total ?>
                    </p>
                </section>

                <section class="w-1/4 bg-amber-900 text-white shadow rounded p-2 flex flex-row">
                    <h4 class="flex-0 w-1/2 -ml-2 mr-6 bg-amber-400 text-black text-lg p-4 -my-2 rounded-l">
                        Categories:
                    </h4>
                    <p class="grow text-4xl ml-6">
                        <?= $categoryCount->total ?>
                    </p>
                </section>

                <section class="w-1/4 bg-red-700 text-white shadow rounded p-2 flex flex-row">
                    <h4 class="flex-0 w-1/2 -ml-2 mr-6 bg-red-400 text-black text-lg p-4 -my-2 rounded-l">
                        Users:
                    </h4>
                    <p class="grow text-4xl ml-6">
                        <?= $userCount->total ?>
                    </p>
                </section>
            </section>
        <?php endif; ?>


        <section class="flex justify-center mb-6">
        <button class="max-w-96 min-w-64 bg-white shadow rounded p-2 flex flex-col text-center text-xl" onclick="location.reload();">New Joke</button>
        </section>

        <section class="my-8 flex flex-wrap gap-8 justify-center">
            <section class="w-full max-w-md bg-white shadow rounded p-4">
                <?php if (!empty($jokes)): ?>
                    <?php
                        $randomJoke = $jokes[array_rand($jokes)];
                    ?>
                    <p class="text-lg text-gray-700"><?= $randomJoke->joke ?></p>
                <?php else: ?>
                    <p class="text-lg">No jokes available at the moment.</p>
                <?php endif; ?>
            </section>
        </section>

<!--        <section class="my-8 flex flex-wrap gap-8 justify-center">-->
<!---->
<!--            --><?php
//            if (!empty($jokes)):
//            foreach ($jokes as $joke):
//                ?>
<!--                <article class="max-w-96 min-w-64 bg-white shadow rounded p-2 flex flex-col">-->
<!--                    <header class="-mx-2 bg-zinc-700 text-zinc-200 text-lg p-4 -mt-2 mb-4 rounded-t flex-0">-->
<!--                        <h4>-->
<!--                            --><?php //= $joke->category_id ?>
<!--                        </h4>-->
<!--                    </header>-->
<!--                    <section class="flex-grow grid grid-cols-5">-->
<!--                        <p class="ml-4 col-span-2">-->
<!--                            <img class="w-24 h-24 " src="https://dummyimage.com/200x200/a1a1aa/fff&text=Image+Here"-->
<!--                                 alt="">-->
<!--                        </p>-->
<!--                        <p class="col-span-3 text-zinc-600">--><?php //= $joke->joke ?><!--</p>-->
<!--                    </section>-->
<!--                    <footer class="-mx-2 bg-zinc-200 text-zinc-900 text-sm px-4 py-1 mt-4 -mb-2 rounded-b flex-0">-->
<!--                        <p class="block w-full text-center px-5 py-2.5 shadow-sm rounded border-->
<!--                                  text-base font-medium text-zinc-700 bg-zinc-100 hover:bg-zinc-200">-->
<!--                            --><?php //= $joke->author_id ?>
<!--                        </p>-->
<!--                    </footer>-->
<!--                </article>-->
<!---->
<!--            --><?php
//            endforeach;
//            else:
//            ?>
<!--            <article class="max-w-96 min-w-64 bg-white shadow rounded p-2 flex flex-col text-center text-xl">-->
<!--                    <h4>-->
<!--                        Sorry, no joke this time.-->
<!--                    </h4>-->
<!--            </article>-->
<!--            --><?php
//            endif;
//            ?>
<!--        </section>-->
    </article>
</main>


<?php
loadPartial('footer');
?>

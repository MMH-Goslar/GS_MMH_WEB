<?php
/**
 * Controllers allow you to separate the logic of your templates from your markup.
 * This is especially useful for complex logic, but also in general to keep your templates clean.
 *
 * In this example, we define the `$gallery` variable which is passed to the template
 *
 * More about controllers:
 * https://getkirby.com/docs/guide/templates/controllers
 */



return function ($page, $site, $kirby) {
    $shared = $kirby->controller('site' , compact('site'));

    $gallery = $page->images()->sortBy('sort', 'filename');

    return A::merge($shared, [
        'gallery' => $gallery,
    ]);

    

};

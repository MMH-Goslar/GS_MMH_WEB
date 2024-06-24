<?php snippet('header') ?>

<article class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">
  <?php if ($cover = $page->cover()): ?>
    <div class="bg-cover bg-center text-center overflow-hidden"
      style="min-height: 500px; background-image: url('<?= $cover->crop(1200, 600)->url() ?>')"
      title="<?= $cover->alt()->esc() ?>">
    </div>
  <?php endif ?>
  <div class="max-w-3xl mx-auto">
    <div class="mt-3 bg-white dark:bg-gray-800 rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
      <div class="bg-white dark:bg-gray-800 relative top-0 -mt-32 p-5 sm:p-10">
        <h1 href="#" class="text-gray-900 dark:text-gray-50 font-bold text-3xl mb-2"><?= $page->title()->esc() ?></h1>
        <?php if ($page->subheading()->isNotEmpty()): ?>
          <p class="note-subheading"><small><?= $page->subheading()->esc() ?></small></p>
        <?php endif ?>
        <p class="text-gray-700 dark:text-gray-200 text-xs mt-2">vom:
          <time class="note-date text-xs font-thin"
            datetime="<?= $page->date()->toDate('c') ?>"> <?= $page->date()->esc() ?></time>


        </p>

        <?= $page->text()->toBlocks() ?>
        <ul class="note-tags flex-inline">
          <?php foreach ($tags as $tag): ?>
            <li>
              <a href="<?= $page->parent()->url(['params' => ['tag' => $tag]]) ?>">#<?= esc($tag) ?></a>
            </li>
          <?php endforeach ?>
        </ul>
        <div class="authors">
         <?= snippet('team_images', ['team' => $page->author()->toPages()]) ?>
        </div>
      </div>

    </div>
  </div>

  <hr class="mt-4 mb-4" />
  <?php snippet('prevnext') ?>

</article>
<?php snippet('footer') ?>
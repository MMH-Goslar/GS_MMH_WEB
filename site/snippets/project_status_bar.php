<div class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
    <div class="grid grid-cols-<?=$slots->team() !== null ? '2' : '1' ?> md:grid-cols-<?=$slots->team() !== null ? '2' : '1' ?>">
        <?php if ($project_status = $slots->project_status()): ?>
            <div class="text-center <?=$slots->team() !== null ? 'md:border-r px-8' : '' ?>">
                <div class="h-12"><?= $project_status ?></div>
                <p class="text-sm font-medium tracking-widest text-gray-800 dark:text-gray-100 uppercase lg:text-base">
                    Projektstatus
                </p>
            </div>
        <?php endif; ?>
        <?php if($team = $slots->team()): ?>
        <div class="text-center px-8">
            <div class="h-12"><?= $team ?></div>
            <p class="text-sm font-medium tracking-widest text-gray-800  dark:text-gray-100 uppercase lg:text-base">
                Beteiligte
            </p>
        </div>
        <?php endif; ?>
    </div>
</div>
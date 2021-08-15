<?php snippet('header'); ?>

<h2><?= $page->title() ?></h2>
<div><?= $page->addpositionhint()->kirbytext() ?></div>

<?php if($success): ?>

    <div class="alert success">
        <p><?= $success ?></p>
    </div>

<?php else: ?>

    <?php if (isset($alert['error'])): ?>
        <div><?= $alert['error'] ?></div>
    <?php endif ?>

    <form method="post" action="<?= $page->url() ?>">


        <div class="honeypot">
            <label for="website">Website <abbr title="required">*</abbr></label>
            <input type="url" id="website" name="website" tabindex="-1">
        </div>

        <!-- Labels will be hidden trough css but available for screenreaders -->
        <div class="field">
            <label for="title"> <?php echo t('addtitle') ?> </label>
            <textarea <?php if (isset($alert['title'])): ?> class="error"<?php endif; ?> id="title" name="title" placeholder="<?php echo t('addtitle') ?>"><?= esc($data['title'] ?? '') ?></textarea>
        </div>

        <div class="field">
            <label for="declaration"> <?php echo t('declaration') ?> </label>
            <textarea <?php if (isset($alert['declaration'])): ?> class="error"<?php endif; ?> id="declaration" name="declaration" placeholder="<?php echo t('declaration') ?>"><?= esc($data['declaration'] ?? '') ?></textarea>
            <!-- Mögliche Expliziete Error Nachricht: -->
            <!-- <?= isset($alert['declaration']) ? '<span class="alert error">' . esc($alert['declaration']) . '</span>' : '' ?> -->
        </div>

        <div class="field">
            <label for="implementation"> <?php echo t('implementation') ?> </label>
            <textarea <?php if (isset($alert['implementation'])): ?> class="error"<?php endif; ?> id="implementation" name="implementation" placeholder="<?php echo t('implementation') ?>"><?= esc($data['implementation'] ?? '') ?></textarea>
        </div>

        <div class="field">
            <label for="references"> <?php echo t('references') ?> </label>
            <textarea <?php if (isset($alert['references'])): ?> class="error"<?php endif; ?> id="references" name="references" placeholder="<?php echo t('references') ?>"><?= esc($data['references'] ?? '') ?></textarea>
        </div>

        <div class="field">
            <label for="name"> <?php echo t('name') ?> </label>
            <input <?php if (isset($alert['name'])): ?> class="error"<?php endif; ?> type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" placeholder="<?php echo t('name') ?>">
        </div>

        <div class="field">
            <label for="email"> <?php echo t('email') ?> </label>
            <input <?php if (isset($alert['email'])): ?> class="error"<?php endif; ?> type="text" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" placeholder="<?php echo t('email') ?>">
        </div>

        <div class="field">
            <label for="comment"> <?php echo t('comment') ?> </label>
            <textarea <?php if (isset($alert['comment'])): ?> class="error"<?php endif; ?> id="comment" name="comment" placeholder="<?php echo t('comment') ?>"><?= esc($data['comment'] ?? '') ?></textarea>
        </div>

        <input type="submit" name="submit" value="<?php echo t('submit') ?>">

    </form>

<?php endif ?>



<?php snippet('footer'); ?>

<?php snippet('header'); ?>

<h2><?= $page->title() ?></h2>
<div><?= $page->hint()->kirbytext() ?></div>

<form action="<?php echo $page->url() ?>" method="POST">
<!-- Labels will be hidden trough css but available for screenreaders -->
    <label><?= $site->titel()?></label>
    <textarea <?php if ($form->error('titel')): ?> class="error"<?php endif; ?> name="titel" placeholder="<?= $site->titel()?>" ><?php echo $form->old('titel') ?></textarea>

    <label><?= $site->declaration()?></label>
    <textarea <?php if ($form->error('declaration')): ?> class="error"<?php endif; ?> name="declaration" placeholder="<?= $site->declaration()?>" ><?php echo $form->old('declaration') ?></textarea>

    <label><?= $site->implementation()?></label>
    <textarea <?php if ($form->error('implementation')): ?> class="error"<?php endif; ?> name="implementation" placeholder="<?= $site->implementation()?>" ><?php echo $form->old('implementation') ?></textarea>

    <label><?= $site->references()?></label>
    <textarea <?php if ($form->error('references')): ?> class="error"<?php endif; ?> name="references" placeholder="<?= $site->references()?>" ><?php echo $form->old('references') ?></textarea>
    
    <label><?= $site->name()?></label>
    <input <?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name"  placeholder="<?= $site->name()?>" type="text" value="<?php echo $form->old('name') ?>">
    
    <label><?= $site->mail()?></label>
    <input <?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email"  placeholder="<?= $site->mail()?>" type="email" value="<?php echo $form->old('email') ?>">
    
    <label><?= $site->comment()?></label>
    <textarea <?php if ($form->error('message')): ?> class="error"<?php endif; ?> name="comment" placeholder="<?= $site->comment()?>" ><?php echo $form->old('comment') ?></textarea>

    <?php echo csrf_field() ?>

    <?php echo honeypot_field() ?>

    <input type="submit" value="<?= $site->submit()?>">

</form>

<?php if ($form->success()): ?>
    <div><?= $page->successhint()->kirbytext() ?></div>
<?php else: ?>
    <?php snippet('uniform/errors', ['form' => $form]) ?>
<?php endif; ?>





<?php snippet('footer'); ?>

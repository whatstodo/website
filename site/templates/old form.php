

<form action="<?php echo $page->url() ?>" method="POST">

<!-- Labels will be hidden trough css but available for screenreaders -->
    <label><?php echo t('title') ?></label>
    <textarea <?php if ($form->error('titel')): ?> class="error"<?php endif; ?> name="titel" placeholder="<?php echo t('title') ?>" ><?php echo $form->old('titel') ?></textarea>

    <label><?php echo t('declaration') ?></label>
    <textarea <?php if ($form->error('declaration')): ?> class="error"<?php endif; ?> name="declaration" placeholder="<?php echo t('declaration') ?>"><?php echo $form->old('declaration') ?></textarea>

    <label><?php echo t('implementation') ?></label>
    <textarea <?php if ($form->error('implementation')): ?> class="error"<?php endif; ?> name="implementation" placeholder="<?php echo t('implementation') ?>"><?php echo $form->old('implementation') ?></textarea>

    <label><?php echo t('references') ?></label>
    <textarea <?php if ($form->error('references')): ?> class="error"<?php endif; ?> name="references" placeholder="<?php echo t('references') ?>"><?php echo $form->old('references') ?></textarea>
    
    <label><?php echo t('name') ?></label>
    <input <?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name"  placeholder="<?php echo t('name') ?>" type="text" value="<?php echo $form->old('name') ?>">
    
    <label><?php echo t('mail') ?></label>
    <input <?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email"  placeholder="<?php echo t('email') ?>" type="email" value="<?php echo $form->old('email') ?>">
    
    <label><?php echo t('comment') ?></label>
    <textarea <?php if ($form->error('message')): ?> class="error"<?php endif; ?> name="comment" placeholder="<?php echo t('comment') ?>" ><?php echo $form->old('comment') ?></textarea>
        
    <?php echo csrf_field() ?>
    <?php echo honeypot_field() ?>
    <input type="submit" value="<?php echo t('submit') ?>">

</form>

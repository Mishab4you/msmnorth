<?php if(count($errors) > 0): ?>
    <div class="alert alert-dismissible alert-error">
    <?php foreach ($errors as $error): ?>
        <li><?php echo $error; ?></li>
    <?php endforeach; ?>
    </div>
<?php endif; ?>
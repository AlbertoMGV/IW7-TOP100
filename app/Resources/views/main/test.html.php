<?php $title = 'Test!!!' ?>

<?php ob_start() ?>

<h1>HOLEMINIÑO</h1>

<?php $content = ob_get_clean() ?>
<?php include 'layout.html.php' ?>
<?php $title = "Collection explorer" ?>
<?php $mobile_only = true ?>
<?php require_once '../includes/head.php' ?>
<main class="explorer">
    <?php require_once '../includes/header-and-nav-bar.php' ?>
    <div class="container">
        <?php require_once('../includes/explorer/home-page-cards.php'); ?>
        <?php require_once('../includes/explorer/popular-today.php'); ?>
        <?php require_once('../includes/explorer/featured.php'); ?>
    </div>
</main>
<?php require_once '../includes/footer.php' ?>

<?php $title = "Explore time periods" ?>
<?php $mobile_only = true ?>
<?php require_once '../../../includes/head.php' ?>
<?php require_once '../functions.php' ?>

<main class="explorer">
    <?php require_once '../../../includes/header-and-nav-bar.php' ?>
    <div class="container" id="time_periods">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="/explorer/v1">Explore</a></li>
                <li class="breadcrumb-item active" aria-current="page">Time periods</li>
            </ol>
        </nav>
        <h1>Explore time periods</h1>
        <p>Select a time period to explore</p>
        <?php render_time_period_card("medieval") ?>
        <?php render_time_period_card("early-modern") ?>
        <?php render_time_period_card("empire-and-industry") ?>
        <?php render_time_period_card("victorians") ?>
        <?php render_time_period_card("early-20th-century") ?>
        <?php render_time_period_card("interwar") ?>
        <?php render_time_period_card("second-world-war") ?>
        <?php render_time_period_card("postwar") ?>

    </div>
</main>
<?php require_once '../../../includes/footer.php' ?>

<?php $title = "Medieval" ?>
<?php $mobile_only = true ?>
<?php require_once '../../includes/head.php' ?>
<?php require_once '../functions.php' ?>

<main class="explorer">
    <?php require_once '../../includes/header-and-nav-bar.php' ?>
    <div class="container" id="time_period">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/explorer/">Explore</a></li>
                <li class="breadcrumb-item"><a href="/explorer/time-periods/index.php">Time periods</a></li>
                <li class="breadcrumb-item active" aria-current="page">Medieval</li>
            </ol>
        </nav>
        <h1>Medieval period</h1>
        <p class="mt-4"><?php echo get_time_period_description("medieval"); ?></p>
        <div class="mt-4">
            <h2 id="#topics" class="mb-2"><a href="/explorer/results.php?time_period=medieval&topic=magna-carta">Magna Carta</a></h2>
            <a href="/explorer/results.php?time_period=medieval&topic=magna-carta"><img src="https://via.placeholder.com/520x300" class="img-fluid" /></a>
            <p class="mt-2"><?php echo get_topic_description("magna-carta") ?>
        </div>
    </div>
</main>
<?php require_once '../../includes/footer.php' ?>
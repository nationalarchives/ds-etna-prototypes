<?php $title = "Medieval" ?>
<?php $mobile_only = true ?>
<?php require_once '../../../includes/head.php' ?>
<?php require_once '../functions.php' ?>

<main class="explorer">
    <?php require_once '../../../includes/header-and-nav-bar.php' ?>
    <div class="container" id="time_period">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="/explorer/v1/">Explore</a></li>
                <li class="breadcrumb-item"><a href="/explorer/v1/time-periods/index.php">Time periods</a></li>
                <li class="breadcrumb-item active" aria-current="page">Medieval</li>
            </ol>
        </nav>
        <h1>Medieval period</h1>
        <p class="mt-4"><?php echo get_time_period_description("medieval"); ?></p>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active lead" id="highlights-tab" data-toggle="tab" href="#highlights" role="tab" aria-controls="highlights" aria-selected="false"><strong>Highlights</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link lead" id="topics-tab" data-toggle="tab" href="#topics" role="tab" aria-controls="topics" aria-selected="true"><strong>Topics</strong></a>
            </li>
        </ul>
        <div class="mt-4">
            <h2 id="#topics" class="mb-2">Magna Carta</h2>
            <a href="/explorer/v1/results.php?time_period=medieval&topic=magna-carta"><img src="https://via.placeholder.com/520x300" class="img-fluid" /></a>
            <p class="mt-2"><?php echo get_topic_description("magna-carta") ?>
        </div>
    </div>
</main>
<?php require_once '../../../includes/footer.php' ?>

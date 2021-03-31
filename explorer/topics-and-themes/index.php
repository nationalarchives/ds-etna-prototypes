<?php 

$topic = $_GET["topic"] ?? "transport-and-travel";
$topic_clean_name = $_GET["topic_clean_name"] ?? "Transport and travel";
$title = $_GET["topic_clean_name"] ?? "Transport and travel";
$sub_topics = [
    "land-and-maps" => [["common-land", "Common land"], ["construction-industries", "Construction industries"], ["Conveyancing", "conveyancing"], ["crown-lands-and-estates", "Crown lands and estates"], ["housing", "Housing"], ["landed-estates", "Landed estates"], ["manors", "Manors"], ["maps-and-plans", "Maps and plans"]],
    "transport-and-travel" => [["air-transport", "Air transport"], ["canals-and-rivers", "Canals and rivers"], ["railways", "Railways"], ["road-transport", "Road transport"], ["shipping", "Shipping"]]
];



?>

<?php $title ?>
<?php $mobile_only = true ?>
<?php require_once '../../includes/head.php' ?>
<?php require_once '../functions.php' ?>

<main class="explorer">
    <?php require_once '../../includes/header-and-nav-bar.php' ?>
    <div class="container" id="topics">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/explorer/">Explore</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $topic_clean_name ?></li>
            </ol>
        </nav>
        <h1><?php echo $topic_clean_name ?></h1>
        <p>Select a sub topic to explore</p>
        <?php foreach($sub_topics[$topic] as $subtopic): ?>
        <?php render_topic_card($subtopic[0], $subtopic[1]) ?>

       <?php endforeach; ?>

    </div>
</main>
<?php require_once '../../includes/footer.php' ?>
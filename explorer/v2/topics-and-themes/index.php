<?php 

$topic = $_GET["topic"] ?? "transport-and-travel";
$topic_clean_name = $_GET["topic_clean_name"] ?? "Transport and travel";
$title = $_GET["topic_clean_name"] ?? "Transport and travel";


// The array keya are name of topic. Inner arrays are the subtopic key, and the "clean", user friendly name for that subtopic.
// When this page loads, it takes the topic from the GET parameters, and then loops through the sub arrays of that topic to display each subtopic.
$sub_topics = [
    "land-and-maps" => [["common-land", "Common land"], ["construction-industries", "Construction industries"], ["conveyancing", "Conveyancing"], ["crown-lands-and-estates", "Crown lands and estates"], ["housing", "Housing"], ["landed-estates", "Landed estates"], ["manors", "Manors"], ["maps-and-plans", "Maps and plans"]],
    "transport-and-travel" => [["air-transport", "Air transport"], ["canals-and-rivers", "Canals and rivers"], ["railways", "Railways"], ["road-transport", "Road transport"], ["shipping", "Shipping"]],
    "arts-and-culture" => [["ancient-monuments-and-historical-buildings", "Ancient monuments and historical buildings"], ["art-architecture-and-design", "Art, architecture and design"], ["communications", "Communications"], ["literature", "Literature"], ["performing-arts", "Performing arts"], ["photography-and-film", "Photography and film"], ["radio-and-television", "Radio and television"],["sports", "Sports"]]
    
];



?>

<?php $title ?>
<?php $mobile_only = true ?>
<?php require_once '../../../includes/head.php' ?>
<?php require_once '../functions.php' ?>

<main class="explorer">
    <?php require_once '../../../includes/header-and-nav-bar.php' ?>
    <div class="container" id="topics">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/explorer/v2/">Explore</a></li>
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
<?php require_once '../../../includes/footer.php' ?>
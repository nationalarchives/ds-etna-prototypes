<?php 

$parent_topic = $_GET["parent_topic"] ?? "travel-and-transport";
$parent_topic_clean = $_GET["parent_topic_clean_name"] ?? "Travel and transport";
$sub_topic = $_GET["sub_topic"] ?? "shipping";
$topic_clean_name = $_GET["topic_clean_name"] ?? "Shipping";
$title = $_GET["topic_clean_name"] ?? "Shipping";
$results = [
    "maps-and-plans" => [["tbc", "tbc", "????", "tbc"]],
    "shipping" => [["titanic", "Titanic", "1910-1920", "Description here"]]
];

$parent_topic_url_encoded = urlencode($parent_topic_clean);

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
                <li class="breadcrumb-item" aria-current="page"><a href=<?php echo "/explorer/v2/topics-and-themes/index.php?topic=$parent_topic&topic_clean_name=$parent_topic_url_encoded" ?>><?php echo $parent_topic_clean ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $topic_clean_name ?></li>

            </ol>
        </nav>
        <h1><?php echo $topic_clean_name ?></h1>
        <p>Select a result to explore</p>
        <?php foreach($results[$sub_topic] as $result): ?>
        <?php render_subtopic_result_card($result[0], $result[1], $result[2], $result[3]) ?>

       <?php endforeach; ?>

    </div>
</main>
<?php require_once '../../../includes/footer.php' ?>
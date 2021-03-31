<?php $title = "Results" ?>
<?php $mobile_only = true ?>
<?php require_once '../../includes/head.php' ?>
<?php require_once './functions.php' ?>

<?php

$result = $_GET["result"];
$clean_result = $_GET["clean_result"];

$records_amount = $_GET["records_amount"] ?? 56;

$parent_topic = $_GET["parent_topic"];
$parent_topic_clean = $_GET["parent_topic_clean"];

$sub_topic = $_GET["subtopic"];
$sub_topic_clean = $_GET["sub_topic_clean_name"];


?>

<main class="explorer">
    <?php require_once '../../includes/header-and-nav-bar.php' ?>
    <div class="container" id="results">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/explorer/v2">Explore</a></li>
                <li class="breadcrumb-item"><a href=<?php echo "/explorer/v2/topics-and-themes/index.php?topic=$parent_topic&topic_clean_name=$parent_topic_clean" ?>><?php echo $parent_topic_clean ?></a></li>
                <li class="breadcrumb-item"><a href=<?php echo "/explorer/v2/topics-and-themes/subtopic.php?sub_topic=$sub_topic&sub_topic_clean_name=$sub_topic_clean&parent_topic=$parent_topic&parent_topic_clean_name=$parent_topic_clean" ?>><?php echo $sub_topic_clean ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $clean_result ?></li>
            </ol>
        </nav>
        <h1 class="sr-only">Results</h1>

        <h2 class="sr-only">Records</h2>

        <div class="results">

            <div class="d-flex flex-row-reverse mt-4 mb-4">
                <select class="p-1">
                    <option selected>Sorted chronologically</option>

                    <option>Sorted by collection highlights</option>
                </select>
            </div>

            <div class="result special mb-4">
                <div class="result-tab">Collection highlight</div>
                <div class="p-4">
                    <h3><a href="#">Titanic Content Hub</a></h3>
                    <p>Some image?</p>
                    <p>Some Description</p>
                </div>
            </div>

            <div class="result mb-4">
                <div class="p-4">
                    <h3><a href="#">Titanic Result</a></h3>
                    <p>Some image?</p>
                    <p>Some titanic record</p>
                    <p><strong>Reference:</strong> PRO 22/11</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once '../../includes/footer.php' ?>
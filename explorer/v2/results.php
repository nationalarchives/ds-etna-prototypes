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
$pt_urlencoded = urlencode($parent_topic_clean);

$sub_topic = $_GET["subtopic"];
$sub_topic_clean = $_GET["sub_topic_clean_name"];
$st_urlencoded = urlencode($sub_topic_clean);


// Hardcoded results data for each subtopic. The result name is the last part of the user journey. (E.g. for Topics and Themes > Transport and Travel > Shipping > Titanic titanic is the result name.) 

$results_data = [
    // "result-name" => [["Title", "Image URL", "Description", "URL", "Special Label" ], [another record]]
    "titanic" => [
                ["Titanic Content Hub", null, "Some Description", "/explorer/v2/details.php", "Collection Highlight" ],
                ["Titanic Result", null, "Some Description", "/explorer/v2/details.php", null]
    ],
    "dickens" => [
        ["Illustration to show Charles Dickens (1812-1870) and characters from his novels, 1911", "/explorer/v2/images/topics-and-themes/results/dickens.jpg", "(Catalogue ref: COPY 1/563)", "/explorer/v2/details.php", "Collection Highlight"]
    ]
]


?>

<main class="explorer">
    <?php require_once '../../includes/header-and-nav-bar.php' ?>
    <div class="container" id="results">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/explorer/v2">Explore</a></li>
                <li class="breadcrumb-item"><a href=<?php echo "/explorer/v2/topics-and-themes/index.php?topic=$parent_topic&topic_clean_name=$pt_urlencoded" ?>><?php echo $parent_topic_clean ?></a></li>
                <li class="breadcrumb-item"><a href=<?php echo "/explorer/v2/topics-and-themes/subtopic.php?sub_topic=$sub_topic&sub_topic_clean_name=$st_urlencoded&parent_topic=$parent_topic&parent_topic_clean_name=$pt_urlencoded" ?>><?php echo $sub_topic_clean ?></a></li>
                <li class="breadcrumb-item active" aria-current="page">Results</li>
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


            <?php foreach($results_data[$result] as $card):

            if(!is_null($card[4])) { // Collection Highlight CSS
            echo "<div class='result special mb-4'><div class='result-tab'>$card[4]</div>";
            }
            else {
                echo '<div class="result mb-4">';
            }

            if(is_null($card[1])) {
                $card[1] = "/explorer/v2/images/topics-and-themes/results/placeholder.jpg";
            }

            echo <<<HTML
                <div class="p-4">
                    <h3 class="mt-2"><a href="$card[3]">$card[0]</a></h3>
                    <a href="$card[3]"><img src="$card[1]" class="img-fluid" alt="$card[0]"/></a>
                    <p>$card[2]</p>
                </div>
            </div>
            HTML;
                

            endforeach; ?>
        </div>
    </div>
</main>
<?php require_once '../../includes/footer.php' ?>
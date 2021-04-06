<?php

function get_time_period_dates($era)
{
    $dates = [
        "medieval" => [974, 1485],
        "early-modern" => [1485, 1750],
        "empire-and-industry" => [1750, 1850],
        "victorians" => [1850, 1901],
        "early-20th-century" => [1901, 1918],
        "interwar" => [1918, 1939],
        "second-world-war" => [1939, 1945],
        "postwar" => [1945, 2020]
    ];

    return $dates[$era];
}

function get_time_period_description($era)
{
    $descriptions = [
        "medieval" => "William the Conqueror’s <u>Domesday</u> survey aimed to put every inch of his new kingdom on paper. But Anglo-Saxon and Medieval England can also be found in the <u>Magna Carta</u> and other treaties, charters, letters and financial records that all combine to give us a picture of government and life in the Anglo-Saxon and Medieval periods."
    ];
    return $descriptions[$era];
}

function get_topic_description($topic)
{
    $topic_descriptions = [
        "magna-carta" => "Magna Carta is called the most important document in history. So important that people still call upon it 800 years later. But where did it come from and why did people die for it? Jump into the 13th century and decide for yourself why Magna Carta keeps coming back..."
    ];
    return $topic_descriptions[$topic];
}

function render_time_period_card($era)
{
    $era_dates = get_time_period_dates($era);
    $start_year = $era_dates[0];
    $end_year = $era_dates[1];
    $title = str_replace("-", " ", $era); // "empire-and-industry" becomes empire and industry
    $title = ucfirst($title);
    $url = "/explorer/v2/time-periods/$era.php";
    echo <<<HTML
    <div class="card-container">
        <div class="card">
            <a href="$url" class="content-card">
                <div class="entry-image" style="background-image: url(https://via.placeholder.com/543x200)">
                    <div class="content-type">$start_year - $end_year</div>
                </div>
            </a>
        </div>
        <h2><a href="$url" class="card-heading">$title</a></h2>
    </div>
    HTML;
}

function render_home_page_card($name, $clean_name, $col_extension = null)
{
    echo <<<HTML
                    <div class="col$col_extension">
                        <div class="card">
                            <a href="/explorer/v2/topics-and-themes/index.php?topic=$name&topic_clean_name=$clean_name"><img class="card-img-top home-card" src="/explorer/v2/images/topics-and-themes/$name.jpg" alt="Card image cap" /></a>
                            <div class="card-body">
                            <a href="/explorer/v2/topics-and-themes/index.php?topic=$name&topic_clean_name=$clean_name">$clean_name</a>
                            </div>
                        </div>
                    </div>

    HTML;
}

function render_topic_card($topic, $clean_name)
{
    $parent_topic = $_GET["topic"];
    $parent_topic_clean = $_GET["topic_clean_name"];
    $url = "/explorer/v2/topics-and-themes/subtopic.php?sub_topic=$topic&sub_topic_clean_name=$clean_name&parent_topic=$parent_topic&parent_topic_clean_name=$parent_topic_clean";

    $image_file_path = dirname(__FILE__) . "/images/topics-and-themes/subtopics/$topic.jpg"; // Make image URL relative to location of this file

    if(!file_exists($image_file_path)) {
        $image_url = "/explorer/v2/images/topics-and-themes/subtopics/placeholder.jpg";
    }
    else {
        $image_url = "/explorer/v2/images/topics-and-themes/subtopics/$topic.jpg";
    }

    echo <<<HTML
    <div class="card-container">
        <div class="card">
            <a href="$url" class="content-card">
                <div class="entry-image" style="background-image: url($image_url)">
                </div>
            </a>
        </div>
        <h2><a href="$url" class="card-heading">$clean_name</a></h2>
    </div>
    HTML;
}

function render_subtopic_result_card($result, $clean_name, $description) {
    $parent_topic = $_GET["parent_topic"];
    $parent_topic_clean = urlencode($_GET["parent_topic_clean_name"]);

    $subtopic = $_GET["sub_topic"];
    $sub_topic_clean_name = urlencode($_GET["sub_topic_clean_name"]);

    $image_file_path = dirname(__FILE__) . "/images/topics-and-themes/results/$result.jpg"; // Make image URL relative to location of this file

    if(!file_exists($image_file_path)) {
        $image_url = "/explorer/v2/images/topics-and-themes/results/placeholder.jpg";
    }
    else {
        $image_url = "/explorer/v2/images/topics-and-themes/results/$result.jpg";
    }

    $url = "/explorer/v2/results.php?result=$result&clean_result=$clean_name&subtopic=$subtopic&sub_topic_clean_name=$sub_topic_clean_name&parent_topic=$parent_topic&parent_topic_clean=$parent_topic_clean";
    echo <<<HTML
    <div class="card-container">
        <div class="card">
            <a href="$url" class="content-card">
                <div class="entry-image" style="background-image: url($image_url);
                 background-size: cover;">
                </div>
            </a>
        </div>
        <h2><a href="$url" class="card-heading">$clean_name</a></h2>
        <p>$description</p>
    </div>
    HTML;
}
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
    echo <<<HTML
    <div class="card-container">
        <div class="card">
            <a href="/explorer/time-periods/$era.php" class="content-card">
                <div class="entry-image" style="background-image: url(https://via.placeholder.com/543x200)">
                    <div class="content-type">$start_year - $end_year</div>
                </div>
            </a>
        </div>
        <h2><a href="#" class="card-heading">$title</a></h2>
    </div>
    HTML;
}

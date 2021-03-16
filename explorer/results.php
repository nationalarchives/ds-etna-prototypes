<?php $title = "Magna Carta" ?>
<?php $mobile_only = true ?>
<?php require_once '../includes/head.php' ?>
<?php require_once './functions.php' ?>

<?php

$time_period = $_GET["time_period"] ?? "Medieval";
$topic = $_GET["topic"] ?? "Magna Carta";

$time_period = str_replace("-", " ", $time_period);
$topic = str_replace("-", " ", $topic);

$time_period = ucfirst($time_period);
$topic = ucfirst($topic);

$records_amount = $_GET["records_amount"] ?? 56;


?>

<main>
    <?php require_once '../includes/header-and-nav-bar.php' ?>
    <div class="container" id="results">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="/explorer/">Explore</a></li>
                <li class="breadcrumb-item"><a href="/explorer/time-periods">Time periods</a></li>
                <li class="breadcrumb-item"><a href="/explorer/time-periods/medieval.php">Medieval</a></li>
                <li class="breadcrumb-item active" aria-current="page">Magna Carta</li>
            </ol>
        </nav>
        <h1 class="sr-only">Results</h1>

        <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active lead" id="records-tab" data-toggle="tab" href="#records" role="tab" aria-controls="records" aria-selected="true"><strong><?php echo $records_amount ?> records</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link lead" id="interpretive-tab" data-toggle="tab" href="#interpretive" role="tab" aria-controls="interpretive" aria-selected="false"><strong>Interpretive content</strong></a>
            </li>
        </ul>
        <h2 class="sr-only">Records</h2>

        <div class="results">

            <div class="d-flex flex-row-reverse mt-4 mb-4">
                <select class="p-1">
                    <option>Sorted by collection highlights</option>
                </select>
            </div>

            <div class="result special mb-4">
                <div class="result-tab">Collection highlight</div>
                <div class="p-4">
                    <h3>Magna Carta</h3>
                    <p>Duchy of Lancaster: Royal Charters. HENRY III. Magna Carta.</p>
                    <p><strong>Date:</strong> 1225</p>
                    <p><strong>Reference:</strong> DL 10/71</p>
                </div>
            </div>

            <div class="result mb-4">
                <div class="p-4">
                    <h3>Magna Carta</h3>
                    <p>Public Record Office: Reproductions of Records, etc: Photographic Copies of Extraneous Documents. Magna Carta.</p>
                    <p><strong>Date:</strong> 15 June 1215</p>
                    <p><strong>Reference:</strong> PRO 22/11</p>
                </div>
            </div>

            <div class="result mb-4">
                <div class="p-4">
                    <h3>Magna Carta. Dated at: Westminster</h3>
                    <p>Duchy of Lancaster: Royal Charters. EDWARD I. Magna Carta. Dated at: Westminster.</p>
                    <p><strong>Date:</strong> 1297</p>
                    <p><strong>Reference:</strong> DL 10/197 </p>
                </div>
            </div>

        </div>
    </div>
</main>
<?php require_once '../includes/footer.php' ?>

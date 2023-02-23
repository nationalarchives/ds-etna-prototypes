<?php $title = "Details page index" ?>
<?php $mobile_only = false ?>
<?php require_once '../../includes/head.php' ?>
<style>
    h1, h2, h3, h4, h5, h6 {
        font-weight: bold;
    }
    h1 {
        margin-bottom: 1rem;
    }
    h2 {
        font-size: 1.56em;
    }
    h3 {
        font-size: 1.4rem;
    }
    h4 {
        font-size: 1.2rem;
    }
    h5 {
        font-size: 1rem;
    }
    .concept-list-item {
        border-bottom: 1px dotted #999;
        margin-bottom: 0.75rem;
    }
    .concept-list-item:last-child {
        border-bottom: 0;
    }
    .concept-list-item h3 {
        font-size: 1.2rem;
    }
    .concept-list-item button {
        display: inline;
        padding: 0 1rem 0.5rem 0;
        border: 0;
        font-size: 0.9rem;
        color: #000;
        background: url(/details/v6_6/assets/brand/fontawesome-svgs/chevron-down.svg) right 6px no-repeat;
        background-size: 10px;
    }
    .concept-list-content {
        margin: 1rem 0 2rem;
    }
    .hide {
        display: none;
    }
    .open {
        background: url(/details/v6_6/assets/brand/fontawesome-svgs/chevron-up.svg) right 6px no-repeat !important;
        background-size: 10px !important;
    }
    .section-panel {
        margin: 2rem 0 3rem;
    }
    .section-panel h2 {
        margin: 0 0 1rem;
    }
    .label-warning {
        display: inline-block;
        font-size: 0.7rem;
        margin: 0 0.5rem;
        padding: 0.2rem 0.35rem;
        background: #d4351c;
        color: #fff;
    }
    .label-success {
        display: inline-block;
        font-size: 0.7rem;
        margin: 0 0.5rem;
        padding: 0.2rem 0.35rem;
        background: #00703c;
        color: #fff;
    }
    .helper-text {
        color: #666;
        margin: 0 0 1.5rem;
    }
    .highlighted {
        padding: 2rem;
        background: #faf6e0;
        border: 3px solid #FFCC00;
    }
</style>

<script>
    function showHideItem() {
        var $togglePanel = document.getElementById("item-concept");
        var $toggleLinkCTA = document.getElementById("notes-item");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideSeriesA() {
        var $togglePanel = document.getElementById("series-concept-a");
        var $toggleLinkCTA = document.getElementById("notes-series-a");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideSeriesB() {
        var $togglePanel = document.getElementById("series-concept-b");
        var $toggleLinkCTA = document.getElementById("notes-series-b");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideArchiveA() {
        var $togglePanel = document.getElementById("archive-concept-a");
        var $toggleLinkCTA = document.getElementById("notes-archive-a");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideArchiveB() {
        var $togglePanel = document.getElementById("archive-concept-b");
        var $toggleLinkCTA = document.getElementById("notes-archive-b");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC198022() {
        var $togglePanel = document.getElementById("C198022-concept");
        var $toggleLinkCTA = document.getElementById("notes-C198022");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }

    /* Non-digitised examples */
    function showHideC10399614Item() {
        var $togglePanel = document.getElementById("C10399614-item-concept");
        var $toggleLinkCTA = document.getElementById("notes-C10399614-item");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC10399614Piece() {
        var $togglePanel = document.getElementById("C10399614-piece-concept");
        var $toggleLinkCTA = document.getElementById("notes-C10399614-piece");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC10399614SubSeries() {
        var $togglePanel = document.getElementById("C10399614-subseries-concept");
        var $toggleLinkCTA = document.getElementById("notes-C10399614-subseries");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC10399614Series() {
        var $togglePanel = document.getElementById("C10399614-series-concept");
        var $toggleLinkCTA = document.getElementById("notes-C10399614-series");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC10399614Division() {
        var $togglePanel = document.getElementById("C10399614-division-concept");
        var $toggleLinkCTA = document.getElementById("notes-C10399614-division");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC10399614Department() {
        var $togglePanel = document.getElementById("C10399614-department-concept");
        var $toggleLinkCTA = document.getElementById("notes-C10399614-department");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC10399614Archive() {
        var $togglePanel = document.getElementById("C10399614-archive-concept");
        var $toggleLinkCTA = document.getElementById("notes-C10399614-archive");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }

    /* Digitised examples */
    function showHideC14017032Item() {
        var $togglePanel = document.getElementById("C14017032-item-concept");
        var $toggleLinkCTA = document.getElementById("notes-C14017032-item");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC14017032Piece() {
        var $togglePanel = document.getElementById("C14017032-piece-concept");
        var $toggleLinkCTA = document.getElementById("notes-C14017032-piece");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC14017032SubSubSeries() {
        var $togglePanel = document.getElementById("C14017032-subsubseries-concept");
        var $toggleLinkCTA = document.getElementById("notes-C14017032-subsubseries");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC14017032SubSeries() {
        var $togglePanel = document.getElementById("C14017032-subseries-concept");
        var $toggleLinkCTA = document.getElementById("notes-C14017032-subseries");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC14017032Series() {
        var $togglePanel = document.getElementById("C14017032-series-concept");
        var $toggleLinkCTA = document.getElementById("notes-C14017032-series");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC14017032Division() {
        var $togglePanel = document.getElementById("C14017032-division-concept");
        var $toggleLinkCTA = document.getElementById("notes-C14017032-division");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC14017032Department() {
        var $togglePanel = document.getElementById("C14017032-department-concept");
        var $toggleLinkCTA = document.getElementById("notes-C14017032-department");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideC14017032Archive() {
        var $togglePanel = document.getElementById("C14017032-archive-concept");
        var $toggleLinkCTA = document.getElementById("notes-C14017032-archive");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
</script>
<main>
    <?php require_once '../../includes/header-and-nav-bar.php' ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Details page (version 7)</h1>
                <p class="mb-1 helper-text">Date created: 13 February 2023</p>
                <p class="helper-text">Last updated: 15 February 2023</p>

                <!-- Non-Digitised example section -->
                <section class="section-panel">
                    <h2>Other archives records</h2>
                    <p class="helper-text">Created to updated the design from version 5</p>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/tna-record/archive.html">Archive level page</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC10399614Item()" id="notes-C10399614-item">Show design notes</button>
                        <div class="concept-list-content hide" id="C10399614-item-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/other-archives/item-myc.html">MYC/A2A example (Item level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC10399614Item()" id="notes-C10399614-item">Show design notes</button>
                        <div class="concept-list-ccontent hide" id="C10399614-item-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/other-pages/new-record-creators.html">Record creators example</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC10399614SubSubSeries()" id="notes-C10399614-piece">Show design notes</button>
                        <div class="concept-list-content hide" id="C10399614-piece-concept">
                            <h3>None added</h3>
                        </div>
                    </div>

                </section>


            </div>
        </div>
    </div>
</main>
<?php require_once '../../includes/footer.php' ?>

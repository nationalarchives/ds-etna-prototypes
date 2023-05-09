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
    function showHideCTAItemA() {
        var $togglePanel = document.getElementById("cta-item-concept-a");
        var $toggleLinkCTA = document.getElementById("notes-cta-item-concept-a");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideCTAItemB() {
        var $togglePanel = document.getElementById("cta-item-concept-b");
        var $toggleLinkCTA = document.getElementById("notes-cta-item-concept-b");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }
    function showHideCTAItemC() {
        var $togglePanel = document.getElementById("cta-item-concept-c");
        var $toggleLinkCTA = document.getElementById("notes-cta-item-concept-c");

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

    /* Non-digitised examples */
    function showHideOtherArchiveMYC() {
        var $togglePanel = document.getElementById("other-archive-myc");
        var $toggleLinkCTA = document.getElementById("notes-other-archive-myc");

        $togglePanel.classList.toggle("hide");
        $toggleLinkCTA.classList.toggle("open");

        if ($toggleLinkCTA.innerHTML === "Show design notes") {
            $toggleLinkCTA.innerHTML = "Hide design notes";
        } else {
            $toggleLinkCTA.innerHTML = "Show design notes";
        }
    }

    function showHideRecordCreators() {
        var $togglePanel = document.getElementById("record-creators");
        var $toggleLinkCTA = document.getElementById("notes-record-creators");

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
                <p class="helper-text">Last updated: 7 March 2023</p>

                <!-- Other archives example section -->
                <section class="section-panel">
                    <h2>Other archives records</h2>
                    <p class="helper-text">Created to updated the design from version 5</p>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/tna-record/archive.html">Archive level page</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideArchiveB()" id="notes-archive-concept-b">Show design notes</button>
                        <div class="concept-list-content hide" id="archive-concept-b">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/other-archives/item-myc.html">MYC/A2A example (Item level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideOtherArchiveMYC()" id="notes-other-archive-myc">Show design notes</button>
                        <div class="concept-list-ccontent hide" id="other-archive-myc">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/other-pages/new-record-creators.html">Record creators example</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideRecordCreators()" id="notes-record-creators">Show design notes</button>
                        <div class="concept-list-content hide" id="record-creators">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/other-archives/item-nra.html">NRA example - standard hierarchy</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideRecordCreators()" id="notes-other-archive-nra">Show design notes</button>
                        <div class="concept-list-content hide" id="other-archive-nra">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/other-archives/item-nra-no-hierarchy.html">NRA example - 2-level hierarchy</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideRecordCreators()" id="notes-other-archive-nra">Show design notes</button>
                        <div class="concept-list-content hide" id="other-archive-nra">
                            <h3>None added</h3>
                        </div>
                    </div>
                </section>

                <!-- Item/piece call to action example section -->
                <section class="section-panel">
                    <h2>Call to action amendment</h2>
                    <p class="helper-text">Created to explore both the positioning and the labelling/content for accessing the record finding out how to </p>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/tna-record/cta-panel/item-a.html">Item level page (CTA panel - concept A)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideCTAItemA()" id="notes-cta-item-concept-a">Show design notes</button>
                        <div class="concept-list-content hide" id="cta-item-concept-a">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/tna-record/cta-panel/item-b.html">Item level page (CTA panel - concept B)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideCTAItemB()" id="notes-cta-item-concept-b">Show design notes</button>
                        <div class="concept-list-ccontent hide" id="cta-item-concept-b">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v7/tna-record/cta-panel/item-c.html">Item level page (CTA panel - concept C)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideCTAItemC()" id="notes-cta-item-concept-c">Show design notes</button>
                        <div class="concept-list-content hide" id="cta-item-concept-c">
                            <h3>None added</h3>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>
</main>
<?php require_once '../../includes/footer.php' ?>

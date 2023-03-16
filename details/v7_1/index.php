<?php $title = "Details page index" ?>
<?php require_once '../includes/head.php' ?>
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
        color: #222;
        margin: 0 0 1.5rem;
        font-size: 1.1rem;
    }
    .highlighted {
        padding: 2rem;
        background: #faf6e0;
        border: 3px solid #FFCC00;
    }
    ol {
        margin-bottom: 3rem;
        font-size: 1.1rem;
        background-color: #e5e5e5;
        padding: 1rem 2rem;
        list-style-position: inside;
    }
    ol li {
        margin-bottom: 0.5rem;
        font-weight: normal;
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
                <h1>Details page (version 7.1)</h1>
                <p class="mb-1 helper-text">Date created: 10 March 2023</p>
                <p class="helper-text">Last updated: 16 March 2023</p>

                <!-- Other archives example section -->
                <section class="section-panel">
                    <h2>New access option panel concepts</h2>
                    <p class="helper-text">These pages were created to address findings from user testing conducted with expert users on <a href="../v6_6">version 6.6</a> between <b>6 - 10 February 2023</b> (AN/KB). Findings were scoped and prioritised as a team on <b>2 March 2023</b> using an impact vs effort matrix.</p>
                    <p class="helper-text">The following concepts attempt to address the following issues:</p>
                    <ol>
                        <li>The order/download button was not visible to users in its position and style at the top of the page on v6.6.</li>
                        <li>The text on the toggle hierarchy link needed reviewing and to be consistently presented.</li>
                        <li>The generic messaging to indicate that access options for records are available in Discovery needed updating (Note: Access options will be unavailable in the new service for MVP).</li>
                        <li>The existing copy reference button could be extended to include title and date to help users more easily/accurately maintain their records.</li>
                    </ol>

                    <h3>Concepts for testing</h3>
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-a/1.php">Concept A (variation 1)</a><span class="label-warning">Untested</span></h4>
                            </div>
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-a/2.php">Concept A (variation 2)</a><span class="label-warning">Untested</span></h4>
                            </div>
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-a/3.php">Concept A (variation 3)</a><span class="label-warning">Untested</span></h4>
                            </div>
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-a/4.php">Concept A (variation 4)</a><span class="label-warning">Untested</span></h4>
                            </div>
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-a/5.php">Concept A (variation 5)</a><span class="label-warning">Untested</span></h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-b/1.php">Concept B (variation 1)</a><span class="label-warning">Untested</span></h4>
                            </div>
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-b/2.php">Concept B (variation 2)</a><span class="label-warning">Untested</span></h4>
                            </div>
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-b/3.php">Concept B (variation 3)</a><span class="label-warning">Untested</span></h4>
                            </div>
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-b/4.php">Concept B (variation 4)</a><span class="label-warning">Untested</span></h4>
                            </div>
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-b/5.php">Concept B (variation 5)</a><span class="label-warning">Untested</span></h4>
                            </div>
                        </div>
                    </div>

                    <h3>Content and design ideas</h3>

                    <div class="row">
                        <div class="col-md-6">
                            <p class="helper-text">These content index pages show the different variations in one single page:</p>

                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-a/content-index.php">Content index (Concept A)</a></h4>
                            </div>
                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-b/content-index.php">Content index (Concept B)</a></h4>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <p class="helper-text">This design index page shows different styling options for the toggle button:</p>

                            <div class="concept-list-item">
                                <h4><a href="/details/v7_1/order-panel/concept-b/design-index.php">Design index (Concept B only)</a></h4>
                            </div>
                        </div>
                    </div>


                </section>


            </div>
        </div>
    </div>
</main>
<?php require_once '../../includes/footer.php' ?>

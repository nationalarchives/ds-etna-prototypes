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
                <h1>Details page (version 6.6)</h1>
                <p class="mb-1 helper-text">Date created: 2 September 2022</p>
                <p class="helper-text">Last updated: 3 February 2023</p>

                <!-- Quick access -->
                <section class="section-panel highlighted">
                    <h2>Quick access for user testing (w/c 6th Feb 2023)</h2>
                    <p>This is a non-digitised record example without an image viewer and is derived from <a href="https://discovery.nationalarchives.gov.uk/details/r/C10399614">the existing record in Discovery</a></p>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C10399614/item.html">C10399614 (Item level)</a><span class="label-warning">Untested</span></h3>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C10399614/series.html">C10399614 (Series level)</a> Concept A<span class="label-warning">Untested</span></h3>
                        <h3><a href="/details/v6_6/tna-record/C10399614/series-b.html">C10399614 (Series level)</a> Concept B<span class="label-warning">Untested</span></h3>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/archive.html">C10399614 (Archive level)</a> Concept A<span class="label-warning">Untested</span></h3>
                        <h3><a href="/details/v6_6/tna-record/archive-b.html">C10399614 (Archive level)</a> Concept B<span class="label-warning">Untested</span></h3>
                    </div>
                </section>

                <!-- Original pages section -->
                <section class="section-panel">
                    <h2>Original pages</h2>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/item.html">Item</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideItem()" id="notes-item">Show design notes</button>
                        <div class="concept-list-content hide" id="item-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/series.html">Series (concept A)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideSeriesA()" id="notes-series-a">Show design notes</button>
                        <div class="concept-list-content hide" id="series-concept-a">
                            <h4>Changes from version 6.5</h4>
                            <ul>
                                <li>Introduced a call to action button labelled 'search the series'.</li>
                                <li>Added the series level search form to a progressively disclosed panel, which is triggered by the 'search the series' toggle button.</li>
                            </ul>
                            <h4>Commentary</h4>
                            <p>The hypothesis is that the positioning of the 'utilities bar' at the top with a call to action matches the proposed experience currently being used on the item level page (used for 'Order/download a record'). The intention is that this creates a consistent (and progressive) component as you navigate between the levels. The content changes but the functionality and positioning stay the same which provides a consistent place for users to find the actions that they can perform at each level. There is, however, some wider concern that the positioning of the utilities bar might not be visible enough.</p>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/series-b.html">Series (concept B)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideSeriesB()" id="notes-series-b">Show design notes</button>
                        <div class="concept-list-content hide" id="series-concept-b">
                            <h4>Changes from Series A (above)</h4>
                            <ul>
                                <li>Series level search panel is added as static content below the record description. This is an alternative design to concept A.</li>
                            </ul>
                            <h4>Commentary</h4>
                            <p>The positioning of the static panel is below the record description in response to findings from version 5 user research which found that it might be more logical to place the series level search underneath the full description, given that users would want to search after they have read the record description. The main question is whether having the search out on the page is a better option because it is fully disclosed to the user on page load rather than being hidden by default, or whether having the panel available on demand when a user needs it is better so the initial page load only includes the basic page content and isn't overloaded with too much extra information.</p>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/archive.html">Archive (concept A)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideArchiveA()" id="notes-archive-a">Show design notes</button>
                        <div class="concept-list-content hide" id="archive-concept-a">
                            <h4>Commentary</h4>
                            <p>This concept builds on the <a href="/details/v5/tna-record/archive.html">archive level version 5 concept</a> which was user tested. The ARCHON code was removed as the user testing revealed that it was neither understood or needed. The building icon from the previous version was also removed as icons were generally unsuccessful in version 5 testing. The utilities bar at the top has been carried over to this page from other templates for consistency.</p>
                            <p>This concept is a starting point and uses existing functionality from Discovery, where long lists are contained in scrollable boxes (overflow divs). The reason this has been added is to bring over an existing template into the search application and style it appropriately to fit in with the rest of the application.</p>

                            <h5>The benefits</h5>
                            <p>We know this functionality exists in Discovery so therefore won't be creating a new way of navigating the lists for people to learn and it would allow us to migrate the archive level pages available in the application quickly to test and iterate more widely with real data.</p>

                            <h5>The disadvantages:</h5>
                            <p>There are usability concerns with the current design. Scrollable boxes are used to manage lists of potentially more than 1000 items. Viewing the list through this 'letterbox view' could be an inefficient way of navigating this list. Having tested whether focus is obscured when you tab through the list revealed that focus still remains visible and doesn't go out of view as the box begins to scroll. There could be some potential issues with 'scroll hijacking' on touch devices as users scroll down the page. These are issues that will need further internal testing to confirm as well as testing on the current Discovery platform to see if the issues also exist currently.</p>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/archive-b.html">Archive (concept B)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideArchiveB()" id="notes-archive-b">Show design notes</button>
                        <div class="concept-list-content hide" id="archive-concept-b">
                            <h4>Commentary</h4>
                            <p>This concept is an alternative view to Concept A (above). Rather than scrollable list boxes, it opts for tabs as a way to present the information.</p>
                            <p>The tabs are based on an <a href="https://design-system.service.gov.uk/components/tabs/">experimental component</a> within the GOV.UK design system (as of December 2022) so will require further review and testing if we choose a tab-based approach.</p>
                            <h5>The benefits</h5>
                            <p>This approach uses tabs as a familiar navigation tool, and uses a horizontal display to display the different categories on medium and larger screens, making use of the wider screen space. This is progressed from anchor links on smaller screens which jump down to the relevant list when selected, which means the lists respond appropriately to the screen width.
                            <h5>The disadvantages:</h5>
                            <p>The major issue here are the potentially long lists being displayed by default. This design has exposed the need to find out how these lists are used in order to find out if/how they can be navigated more effectively. There's currently no easy way to get to a specific letter within a long A-Z list, but we don't yet know how people use these lists, or whether the content on this page is something people rely on during their research process.</p>
                            <p>Some other options for presenting these could be as a traditional A-Z to browse or a faceted search if people are looking for specific collections. These could be separate or in combination to the ideas above. Before developing the above concepts further, we need to find out a little bit more about how the archive-level pages are used before we invest further time developing either of the concepts above, or a further suite to address some of these issues.</p>
                        </div>
                    </div>
                </section>

                <!-- Closer look section -->
                <section class="section-panel">
                    <h2>Closer Look example page</h2>
                    <p class="helper-text">Created as an end-point for testing of the Closer Look concepts (w/c 12th September 2022)</p>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C198022.html">C198022 (Item level example)</a><span class="label-success">Tested</span></h3>
                        <button onclick="showHideC198022()" id="notes-C198022">Show design notes</button>
                        <div class="concept-list-content hide" id="C198022-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                </section>

                <!-- Non-Digitised example section -->
                <section class="section-panel">
                    <h2>Non-digitised example pages</h2>
                    <p class="helper-text">Created to test specific examples with selected users from the User Advisory Group (w/c 6th February 2023)</p>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C10399614/item.html">C10399614 (Item level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC10399614Item()" id="notes-C10399614-item">Show design notes</button>
                        <div class="concept-list-content hide" id="C10399614-item-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C10399614/piece.html">C10399614 (Piece level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC10399614SubSubSeries()" id="notes-C10399614-piece">Show design notes</button>
                        <div class="concept-list-content hide" id="C10399614-piece-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C10399614/subseries.html">C10399614 (Sub-series level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC10399614SubSeries()" id="notes-C10399614-subseries">Show design notes</button>
                        <div class="concept-list-content hide" id="C10399614-subseries-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C10399614/series.html">C10399614 (Series level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC10399614Series()" id="notes-C10399614-series">Show design notes</button>
                        <div class="concept-list-content hide" id="C10399614-series-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C10399614/division.html">C10399614 (Division level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC10399614Division()" id="notes-C10399614-division">Show design notes</button>
                        <div class="concept-list-content hide" id="C10399614-division-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C10399614/department.html">C10399614 (Department level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC10399614Department()" id="notes-C10399614-department">Show design notes</button>
                        <div class="concept-list-content hide" id="C10399614-department-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/archive.html">C10399614 (Archive level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC10399614Archive()" id="notes-C10399614-archive">Show design notes</button>
                        <div class="concept-list-content hide" id="C10399614-archive-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                </section>

                <!-- Digitised example section -->
                <section class="section-panel">
                    <h2>Digitised example pages</h2>
                    <p class="helper-text">Created to test specific examples with selected users from the User Advisory Group (w/c 6th February 2023)</p>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C14017032/item.html">C14017032 (Item level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC14017032Item()" id="notes-C14017032-item">Show design notes</button>
                        <div class="concept-list-content hide" id="C14017032-item-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C14017032/piece.html">C14017032 (Piece level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC14017032Piece()" id="notes-C14017032-piece">Show design notes</button>
                        <div class="concept-list-content hide" id="C14017032-piece-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C14017032/subsubseries.html">C14017032 (Sub-sub-series level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC14017032SubSubSeries()" id="notes-C14017032-subsubseries">Show design notes</button>
                        <div class="concept-list-content hide" id="C14017032-subsubseries-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C14017032/subseries.html">C14017032 (Sub-series level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC14017032SubSeries()" id="notes-C14017032-subseries">Show design notes</button>
                        <div class="concept-list-content hide" id="C14017032-subseries-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C14017032/series.html">C14017032 (Series level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC14017032Series()" id="notes-C14017032-series">Show design notes</button>
                        <div class="concept-list-content hide" id="C14017032-series-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C14017032/division.html">C14017032 (Division level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC14017032Division()" id="notes-C14017032-division">Show design notes</button>
                        <div class="concept-list-content hide" id="C14017032-division-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/C14017032/department.html">C14017032 (Department level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC14017032Department()" id="notes-C14017032-department">Show design notes</button>
                        <div class="concept-list-content hide" id="C14017032-department-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                    <div class="concept-list-item">
                        <h3><a href="/details/v6_6/tna-record/archive.html">C14017032 (Archive level)</a><span class="label-warning">Untested</span></h3>
                        <button onclick="showHideC14017032Archive()" id="notes-C14017032-archive">Show design notes</button>
                        <div class="concept-list-content hide" id="C14017032-archive-concept">
                            <h3>None added</h3>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<?php require_once '../../includes/footer.php' ?>

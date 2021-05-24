<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../../includes/header-and-nav-bar.php' ?>
<?php require_once '../access-formatting.php' ?>
<div class="container">
    <h1>Academic subscription</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>This record is available to view in one of our reading rooms</h4>
        <p>Ask a member of staff if you need help finding this record.</p>

    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>This record is available at {WebsiteUrl}</h4>
        <p>This record may also be available on other websites.</p>
        <button>{WebsiteUrl}</button>
    </div>

    <div class="variation">
        <h3>Subscription</h3>

        <h4>This record is available at {WebsiteUrl}</h4>
        <p>This record may also be available on other websites.</p>

        <button>Order a copy</button>
    </div>

    <div class="variation">
        <h3>Offsite</h3>

        <h4>How to view this record:</h4>
        <p>Request a quote for a copy to be sent to you via email or post (£)</p>
        <button>Order a copy</button>
        <p class="info">More ways to view this record</p>
        <p>Available to download through academic subscriptions to {WebsiteUrl}</p>
        <ul>
            <li><i>CURRENTLY COMMENTED OUT IN THE XML</i><a href="#" target="_blank" data-webtrends-call="onsiteInfo">Available to view free at The National Archives</a></li>
        </ul>
    </div>
</div>

</main>
<?php require_once '../../../../includes/footer.php' ?>

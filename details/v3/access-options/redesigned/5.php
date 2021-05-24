<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../../includes/header-and-nav-bar.php' ?>
<?php require_once '../access-formatting.php' ?>
<div class="container">
    <h1>Digitised available but not downloadable at piece level</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>This record has been digitised as part of multiple records</h4>
        <p>You can browse for these records.</p>
        <button>Go to browse</button>
        <p class="info">More ways to view this record</p>
        <p>Also available from:</p>
        <ul>
            <li>{WebsiteUrls}</li>
        </ul>
        <ul>
            <li><a href="#" data-webtrends-call="onsiteInfo">Available to view free at The National Archives</a></li>
        </ul>
    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>This record has been digitised as part of multiple records</h4>
        <p>You can browse for these records.</p>
        <button>Go to browse</button>
        <p class="info">More ways to view this record</p>
        <p>Also available from:</p>
        <ul>
            <li>{WebsiteUrls}</li>
        </ul>
    </div>

    <div class="variation">
        <h3>Subscription</h3>

        <h4>This record has been digitised as part of multiple records</h4>
        <p>You can browse for these records.</p>
        <button>Go to browse</button>
        <p class="info">More ways to view this record</p>
        <p>Also available from:</p>
        <ul>
            <li>{WebsiteUrls}</li>
        </ul>
        <ul>
            <li><i>This is currently commented out in the XML</i> <a href="#" data-webtrends-call="onsiteInfo">Available to view free at The National Archives</a></li>
        </ul>
    </div>

    <div class="variation">
        <h3>Offsite</h3>

        <h4>This record has been digitised as part of multiple records</h4>
        <p>You can browse for these records.</p>
        <button>Go to browse</button>
        <p class="info">More ways to view this record</p>
        <p>Also available from:</p>
        <ul>
            <li>{WebsiteUrls}</li>
        </ul>
        <ul>
            <li><i>This is currently commented out in the XML</i> <a href="#" data-webtrends-call="onsiteInfo">Available to view free at The National Archives</a></li>
        </ul>
    </div>
</div>

</main>
<?php require_once '../../../../includes/footer.php' ?>

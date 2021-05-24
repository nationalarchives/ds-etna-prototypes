<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../includes/header-and-nav-bar.php' ?>
<?php require_once 'access-formatting.php' ?>
<div class="container">
    <h1>Surrogate</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>This record is available to view in one of our reading rooms</h4>
        <p> Ask a member of staff if you need help finding this record. </p>

    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>This record is available to view in one of our reading rooms</h4>
        <p>Ask a member of staff if you need help finding this record. <br />
            You need to have a <a href="#"><strong> reader's ticket </strong></a> to access some of our reading rooms.
        </p>
    </div>

    <div class="variation">
        <h3>Subscription</h3>

        <h4>Ordering and viewing options</h4>
        <p>
            This record has not been digitised and <strong>cannot be downloaded.</strong><br />
            Request a quotation for a copy to be digitised and sent to you. </p>

        <button>Order a copy</button>
        <p class="info">More ways to view this record</p>
        <p>
            You can view this record in one of our reading rooms.
            To gain access to the reading rooms you will need a <a href="#"><strong>reader's ticket</strong></a>.
        </p>
        <ul>
            <li><a href="#" data-webtrends-call="onsiteInfo">See our opening times</a></li>
            <li><a href="#" data-webtrends-call="onsiteInfo">Get a reader's ticket</a></li>
        </ul>
    </div>

    <div class="variation">
        <h3>Offsite</h3>

        <h4>Ordering and viewing options</h4>
        <p>
            This record has not been digitised and <strong>cannot be downloaded.</strong><br />
            Request a quotation for a copy to be digitised and sent to you. </p>

        <button>Order a copy</button>
        <p class="info">More ways to view this record</p>
        <p>
            You can view this record in one of our reading rooms.
            To gain access to the reading rooms you will need a <a href="#"><strong>reader's ticket</strong></a>.
        </p>
        <ul>
            <li><a href="#" data-webtrends-call="onsiteInfo">See our opening times</a></li>
            <li><a href="#" data-webtrends-call="onsiteInfo">Get a reader's ticket</a></li>
        </ul>
    </div>
</div>

</main>
<?php require_once '../../../includes/footer.php' ?>

<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../includes/header-and-nav-bar.php' ?>
<?php require_once 'access-formatting.php' ?>
<div class="container">
    <h1>Invigilation safe room</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>You can view this record under supervision in our Invigilation Room</h4>
        <p>Your order will take approximately 45 minutes to be prepared.</p>
        <button>Order now</button>
    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>You can view this record under supervision in our Invigilation Room</h4>
        <p>Your order will take approximately 45 minutes to be prepared. <br />
            You must have a <a href="#" data-webtrends-call="onsiteInfo"><strong> reader's ticket</strong></a> to order this record.
        </p>
        <button>Order now</button>
    </div>

    <div class="variation">
        <h3>Subscription</h3>

        <h4>This record can only be seen under supervision at The National Archives</h4>
        <p>
            Request a quotation for a copy to be digitised or printed and sent to you.
        </p>

        <button>Copy this record</button>
        <p class="info">More ways to view this record</p>
        <p><strong>You must have a reader's ticket to view this record</strong></p>
        <p>If you already have a <a href="#" data-webtrends-call="onsiteInfo"> <strong>reader's ticket</strong> </a>
            you can order the record to be ready for you when you visit us. </p>
        <a href="#" data-webtrends-call="advancedOrder">Book a visit</a>
        <p>Or, you can order the record when you arrive.</p>
        <ul>
            <li><a href="#" data-webtrends-call="onsiteInfo">Get a reader's ticket</a></li>
            <li><a href="#" data-webtrends-call="advancedOrder">Order records in advance</a></li>
            <li><a href="#" data-webtrends-call="onsiteInfo">See our opening times</a></li>
        </ul>

    </div>

    <div class="variation">
        <h3>Offsite</h3>

        <h4>This record can only be seen under supervision at The National Archives</h4>
        <p>
            Request a quotation for a copy to be digitised or printed and sent to you.
        </p>
        <button>Copy this record</button>
        <p class="info">More ways to view this record</p>
        <p><strong>You must have a reader's ticket to view this record</strong></p>
        <p>If you already have a <a href="#" data-webtrends-call="onsiteInfo"> <strong> reader's ticket </strong> </a>
            you can order the record to be ready for you when you visit us. </p>
        <a href="#" data-webtrends-call="advancedOrder">Book a visit</a>
        <p>Or, you can order the record when you arrive.</p>
        <ul>
            <li><a href="#" data-webtrends-call="onsiteInfo">Get a reader's ticket</a></li>
            <li><a href="#" data-webtrends-call="advancedOrder">Order records in advance</a></li>
            <li><a href="#" data-webtrends-call="onsiteInfo">See our opening times</a></li>
        </ul>

    </div>
</div>

</main>
<?php require_once '../../../includes/footer.php' ?>

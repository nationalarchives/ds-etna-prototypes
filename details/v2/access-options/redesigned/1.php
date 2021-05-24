<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../../includes/header-and-nav-bar.php' ?>
<?php require_once '../access-formatting.php' ?>
<div class="container">
    <h1>Order original</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>This record is available to order and view</h4>
        <p>Your order will take approximately 45 minutes to be prepared.</p>
        <button>Order now</button>
    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>This record is available to order and view</h4>
        <p>Your order will take approximately 45 minutes to be prepared.<br>
            You must have a <a href="" data-webtrends-call="orderNow">reader's ticket</a> to order this record.</p>
        <button>Order now</button>
    </div>

    <div class="variation">
        <h3>Subscription</h3>

        <h4>Ordering and viewing options</h4>
        <p> This record has not been digitised and <strong>cannot be downloaded.</strong> <br/> <br/>
            You can <a href="" data-webtrends-call="advancedOrder">order records in advance</a> to be ready for you when you <a href="#">visit Kew</a>.
            You will need a <a href="">reader's ticket</a> to do this.
            Or, you can request a quotation for a copy to be sent to you.</p>

        <button>Book a visit</button>
        <button>Request a copy</button>
    </div>

    <div class="variation">
        <h3>Offsite</h3>

        <h4>Ordering and viewing options</h4>
        <p>This record has not been digitised and <strong>cannot be downloaded.</strong> <br/> <br/>
        You can <a href="#" data-webtrends-call="advancedOrder">order records in advance</a> to be ready for you when you <a href="#">visit Kew</a>.
        You will need a <a href="#">reader's ticket</a> to do this.
            Or, you can request a quotation for a copy to be sent to you.</p>
        <button>Book a visit</button>
        <button>Request a copy</button>
    </div>
</div>

</main>
<?php require_once '../../../../includes/footer.php' ?>

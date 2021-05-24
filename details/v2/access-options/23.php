<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../includes/header-and-nav-bar.php' ?>
<?php require_once 'access-formatting.php' ?>
<div class="container">
    <h1>On loan</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>This record is on loan to another organisation</h4>
        <p><a href="#" title="Contact us" data-webtrends-call="onsiteInfo">Contact us</a> to find out if you can view a copy at The National Archives.</p>
        <button>Contact us</button>
    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>This record is on loan to another organisation</h4>
        <p>Ask a member of staff if you can view a copy of this record.</p>
    </div>

    <div class="variation">
        <h3>Subscription</h3>

        <h4>This record is on loan to another organisation</h4>
        <p><a href="#" target="_blank" data-webtrends-call="onsiteInfo">Contact us</a> to find out if you can view a copy at The National Archives.</p>
        <button>Contact us</button>
    </div>

    <div class="variation">
        <h3>Offsite</h3>

        <h4>This record is on loan to another organisation</h4>
        <p><a href="#" title="Contact us" data-webtrends-call="onsiteInfo">Contact us</a> to find out if you can view a copy at The National Archives.</p>
        <button>Contact us</button>
    </div>
</div>

</main>
<?php require_once '../../../includes/footer.php' ?>

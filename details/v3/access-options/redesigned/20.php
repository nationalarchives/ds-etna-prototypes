<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../includes/header-and-nav-bar.php' ?>
<?php require_once 'access-formatting.php' ?>
<div class="container">
    <h1>Offsite</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>This record is held off site</h4>
        <p>You may place an advanced order request to see this record at The National Archives. It will take three working days to bring this record to The National Archives.</p>
        <button>Order now</button>
    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>This record is held off site</h4>
        <p>You may place an advance order request to see this record at The National Archives. It will take three working days to bring this record to The National Archives.</p>
        <button>Book a visit</button>
    </div>

    <div class="variation">
        <h3>Subscription</h3>

        <h4>Ordering and viewing options</h4>
        <p>This record has not been digitised and <strong>cannot be downloaded.</strong> </p>
        <p>This record is stored off site and will take three working days to be delivered to The National Archives.</p>

        <p>You can <a href="#" target="_blank" data-webtrends-call="advancedOrder">order records in advance</a> to be ready for you when you <a href="#">visit Kew</a>.
            You will need a <a href="#">reader's ticket</a> to do this.
            Or, you can request a quotation for a copy to be sent to you. <br/> <br/>
            COMMENTED OUT IN THE CODE (start) Please order before 11:00 three working days in advance of your visit. (end)</p>

        <button>Book a visit</button>
        <button>Order a copy</button>
    </div>

    <div class="variation">
        <h3>Offsite</h3>

        <h4>Ordering and viewing options</h4>
        <p>This record has not been digitised and <strong>cannot be downloaded.</strong> </p>
        <p>This record is stored off site and will take three working days to be delivered to The National Archives.</p>

        <p>You can <a href="#" target="_blank" data-webtrends-call="advancedOrder">order records in advance</a> to be ready for you when you <a href="#">visit Kew</a>.
            You will need a <a href="#">reader's ticket</a> to do this.
            Or, you can request a quotation for a copy to be sent to you. <br/> <br/>
            COMMENTED OUT IN THE CODE (start) Please order before 11:00 three working days in advance of your visit. (end)</p>

        <button>Book a visit</button>
        <button>Order a copy</button>
    </div>
</div>

</main>
<?php require_once '../../../includes/footer.php' ?>

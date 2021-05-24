<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../includes/header-and-nav-bar.php' ?>
<?php require_once 'access-formatting.php' ?>
<div class="container">
    <h1>Closed retained department known</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>This record is closed and retained by <a href="#"> {DeptName}</a></h4>
        <p> <strong>{AccessConditionText}</strong><br /> {OpenDateDesc} {RecordOpeningDate} </p>
        <button>Visit the department website</button>
    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>This record is closed and retained by <a href="#"> {DeptName}</a></h4>
        <p> <strong>{AccessConditionText}</strong><br /> {OpenDateDesc} {RecordOpeningDate} </p>
        <button>Visit the department website</button>
    </div>

    <div class="variation">
        <h3>Subscription</h3>


        <h4>This record is closed and retained by <a href="#"> {DeptName}</a></h4>
        <p> <strong>{AccessConditionText}</strong><br /> {OpenDateDesc} {RecordOpeningDate} </p>
        <button>Visit the department website</button>
    </div>

    <div class="variation">
        <h3>Offsite</h3>


        <h4>This record is closed and retained by <a href="#"> {DeptName}</a></h4>
        <p> <strong>{AccessConditionText}</strong><br /> {OpenDateDesc} {RecordOpeningDate} </p>
        <button>Visit the department website</button>
    </div>
</div>

</main>
<?php require_once '../../../includes/footer.php' ?>

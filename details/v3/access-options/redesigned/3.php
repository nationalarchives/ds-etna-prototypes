<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../../includes/header-and-nav-bar.php' ?>
<?php require_once '../access-formatting.php' ?>
<div class="container">
    <h1>Paid search</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>This record is closed</h4>
        <p>Opening date: {RecordOpeningDate}</p>
        <p>
            Closed digital records are becoming available regularly, following monthly reviews.
            An automated monthly record opening service is now in operation. As a result, a
            record due to become open during a month will become available online at the beginning
            of the following month, and until then will still have a closed status although
            the record opening date may have passed.
        </p>
        <p>
            To <strong>request a search of closed records</strong> you are required
            to upload documents as proof that the person is no longer living. However, for security
            reasons, the computer terminals in our reading rooms do not allow documents to be
            uploaded. To request a search of closed records please access our website
            from outside The National Archives.
        </p>

    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>This record is closed</h4>
        <p>Opening date: {RecordOpeningDate}<br>
            You must have a <a href="#" data-webtrends-call="orderNow">reader's ticket</a> to order this record.</p>
        <p>
            Closed digital records are becoming available regularly, following monthly reviews.
            An automated monthly record opening service is now in operation. As a result, a
            record due to become open during a month will become available online at the beginning
            of the following month, and until then will still have a closed status although
            the record opening date may have passed.
        </p>
        <p>
            To <strong>request a search of closed records</strong> you are required
            to upload documents as proof that the person is no longer living. However, for security
            reasons, the computer terminals in our reading rooms do not allow documents to be
            uploaded. To request a search of closed records please access our website
            from outside The National Archives.
        </p>
    </div>

    <div class="variation">
        <h3>Subscription</h3>

        <h4>This record is closed</h4>
        <p>Opening date: {RecordOpeningDate}</p>
        <p>
            Closed digital records are becoming available regularly, following monthly reviews.
            An automated monthly record opening service is now in operation. As a result, a
            record due to become open during a month will become available online at the beginning
            of the following month, and until then will still have a closed status although
            the record opening date may have passed.
        </p>
        <p>
            To <strong>request a search of closed records</strong> you are required
            to upload documents as proof that the person is no longer living. However, for security
            reasons, the computer terminals in our reading rooms do not allow documents to be
            uploaded. To request a search of closed records please access our website
            from outside The National Archives.
        </p>

    </div>

    <div class="variation">
        <h3>Offsite</h3>

        <h4>This record is closed</h4>
        <p>Opening date: {RecordOpeningDate}</p>

        <span id="recordAddedToBasket" class="emphasisBlock">{AddedToBasketText}</span>

        <button>Request a search of closed records</button>

        <p class="info">More information</p>
        <p>
            This record is closed and cannot be viewed or reproduced as a digital or printed copy.
        </p>
        <p>
            Closed digital records are becoming available regularly, following monthly reviews.
            An automated monthly record opening service is now in operation. As a result, a
            record due to become open during a month will become available online at the beginning
            of the following month, and until then will still have a closed status although
            the record opening date may have passed.
        </p>
        <p>
            You can <a href="#" data-webtrends-call="paidSearch">Request a search of closed records</a>
            for this {RecordInformationType} if you can provide us with an official death
            certificate or published obituary, as evidence that the person in the record is
            no longer living. If the record can be opened, we will make it available and send
            you a copy.
        </p>

        <p>
            There is a fee of <strong>{Price}</strong> for the search. This fee covers the time
            taken to conduct the search and provide you with a copy.
        </p>
        <p>
            If the record is <strong>about you</strong>, you can make a request under the Data
            Protection Act. Find out <a href="#" title="further information">
                further information</a> and advice to do this.
        </p>


    </div>
</div>

</main>
<?php require_once '../../../../includes/footer.php' ?>

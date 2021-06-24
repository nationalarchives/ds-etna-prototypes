<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../includes/header-and-nav-bar.php' ?>
<?php require_once 'access-formatting.php' ?>
<div class="container">
    <h1>Digitised partially opened</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>Download this record</h4>
        <p>Some images within this record are not available because they contain medically sensitive information.</p>
        <p>Download size approximately {ItemNumOfFilesAndSizeInMB}. Download format {DownloadFormat} </p>
        <button>{DownloadText}</button>

        <p class="info">More information</p>
        <p>Some pages within this record are closed until 2045 because they contain medically sensitive information provided in confidence.
            This information cannot be viewed or reproduced as a digital or printed copy.</p>

        <p>You can submit a <a href="#" title="Submit FoI request" data-webtrends-call="foi">Freedom of Information (FOI) </a>
            request to The National Archives to review the reasons why it is closed and to request that it is opened.</p>

        <p>If the record can be opened, it will be made available for public access and for copies to be made.
            It is possible that only parts of the record can be opened. Once your FOI request has been received it
            will be processed and you will receive a response within 20 working days.
            Please note that in certain circumstances the review process will take slightly longer.</p>
    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>Download this record</h4>
        <p>Some images within this record are not available because they contain medically sensitive information.</p>
        <p>Download size approximately {ItemNumOfFilesAndSizeInMB}. Download format {DownloadFormat}  </p>
        <button>{DownloadText}</button>

        <p class="info">More information</p>
        <p>
            Some pages within this record are closed until 2045 because they contain medically sensitive information provided in confidence.
            This information cannot be viewed or reproduced as a digital or printed copy.
        </p>

        <p>
            You can submit a <a href="#" title="Submit FoI request" data-webtrends-call="foi">Freedom of Information (FOI)</a>
            request to The National Archives to review the reasons why it is closed and to request that it is opened.
        </p>

        <p>
            If the record can be opened, it will be made available for public access and for copies to be made.
            It is possible that only parts of the record can be opened. Once your FOI request has been received it
            will be processed and you will receive a response within 20 working days.
            Please note that in certain circumstances the review process will take slightly longer.
        </p>
    </div>

    <div class="variation">
        <h3>Download this record</h3>

        <h4>Ordering and viewing options</h4>
        <p>Some images within this record are not available because they contain medically sensitive information.</p>
        <p>Download size approximately {ItemNumOfFilesAndSizeInMB}. Download format {DownloadFormat}  </p>

        <button>{DownloadText}</button>

        <p class="info">More information</p>
        <p>
            Some pages within this record are closed until 2045 because they contain medically sensitive information provided in confidence.
            This information cannot be viewed or reproduced as a digital or printed copy.
        </p>

        <p>
            You can submit a <a href="#" title="Submit FoI request" data-webtrends-call="foi">Freedom of Information (FOI) </a>
            request to The National Archives to review the reasons why it is closed and to request that it is opened.
        </p>

        <p>
            If the record can be opened, it will be made available for public access and for copies to be made.
            It is possible that only parts of the record can be opened. Once your FOI request has been received it
            will be processed and you will receive a response within 20 working days.
            Please note that in certain circumstances the review process will take slightly longer.
        </p>


    </div>

    <div class="variation">
        <h3>Offsite</h3>

        <h4>Ordering and viewing options</h4>
        <p>Some images within this record are not available because they contain medically sensitive information.</p>
        <ul id="orderInformation">
            <li id="price"><h3>{Price}</h3></li>
            <li id="format">Download format {DownloadFormat}</li>
            <li id="format">Approximate size {ItemNumOfFilesAndSizeInMB}</li>
        </ul>

        <span id="recordAddedToBasket" class="emphasisBlock">{AddedToBasketText}</span>
        <button>{BasketType}</button>
        <p class="basketLimitExplanation"><strong>Order up to {MaxItems} items per basket, and up to 100 in a 30 day period. {YourOrderLink}</strong></p>

        <p class="info">More information</p>
        <p>
            Some pages within this record are closed until 2045 because they contain medically sensitive information provided in confidence.
            This information cannot be viewed or reproduced as a digital or printed copy.
        </p>

        <p>
            You can submit a <a href="#" title="Submit FoI request" data-webtrends-call="foi">Freedom of Information (FOI) </a>
            request to The National Archives to review the reasons why it is closed and to request that it is opened.
        </p>

        <p>
            If the record can be opened, it will be made available for public access and for copies to be made.
            It is possible that only parts of the record can be opened. Once your FOI request has been received it
            will be processed and you will receive a response within 20 working days.
            Please note that in certain circumstances the review process will take slightly longer.
        </p>
    </div>
</div>

</main>
<?php require_once '../../../includes/footer.php' ?>

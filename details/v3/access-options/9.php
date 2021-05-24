<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../includes/header-and-nav-bar.php' ?>
<?php require_once 'access-formatting.php' ?>
<div class="container">
    <h1>Digitized discovery</h1>
    <div class="variation">
        <h3>Staff</h3>

        <h4>Download this record</h4>
        <p>Download size approximately {ItemNumOfFilesAndSizeInMB}. Download format {DownloadFormat} </p>
        <button>{DownloadText}</button>
        <p class="info">More ways to view this record</p>
        <p>Also available from:</p>
        <ul>
            <li>{WebsiteUrls}</li>
        </ul>
    </div>

    <div class="variation">
        <h3>On site public</h3>

        <h4>Download this record</h4>
        <p>Download size approximately {ItemNumOfFilesAndSizeInMB}. Download format {DownloadFormat} </p><button>Order now</button>
        <button>{DownloadText}</button>
        <p class="info">More ways to view this record</p>
        <p>Also available from:</p>
        <ul>
            <li>{WebsiteUrls}</li>
        </ul>
    </div>

    <div class="variation">
        <h3>Subscription</h3>

        <h4>Download this record</h4>
        <p>Download size approximately {ItemNumOfFilesAndSizeInMB}. Download format {DownloadFormat}  </p>

        <button>{DownloadText}</button>
        <p class="info">More ways to view this record</p>
        <p>Also available from:</p>
        <ul>
            <li>{WebsiteUrls}</li>
        </ul>

    </div>

    <div class="variation">
        <h3>Offsite</h3>

        <h4>Ordering and viewing options</h4>
        <ul id="orderInformation">
            <li id="price"><h3>{Price}</h3></li>
            <li id="format">Download format {DownloadFormat}</li>
            <li id="format">Approximate size {ItemNumOfFilesAndSizeInMB}</li>
        </ul>


        <span id="recordAddedToBasket" class="emphasisBlock">{AddedToBasketText}</span>
        <button>{BasketType}</button>
        <p class="basketLimitExplanation"><strong>Order up to {MaxItems} items per basket, and up to 100 in a 30 day period. {YourOrderLink}</strong></p>
        <p class="info">More ways to view this record</p>
        <p>Also available from:</p>
        <ul>
            {WebsiteUrls}
        </ul>
        <ul>
            <li><i>This is currently commented out in the XML</i><a href="#" data-webtrends-call="onsiteInfo">Available to view free at The National Archives</a></li>
        </ul>
    </div>
</div>

</main>
<?php require_once '../../../includes/footer.php' ?>

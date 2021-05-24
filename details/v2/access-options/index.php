<?php $title = "Details page" ?>
<?php $mobile_only = false ?>
<?php require_once '../../../includes/head.php' ?>
<main class="details-v2">
<?php require_once '../../../includes/header-and-nav-bar.php' ?>
<style>
    h2 {
        margin-top: 2em;
    }
    p {
        margin: 1.5em 0 1em;
        font-size: 1.2em;
    }
    ol {
        margin: 0 !important;
        padding: 1.2em !important;

    }
    ol li {
        list-style-position: outside;
        padding: 0.5em 0;
        color: #999;
    }
    ol li a {
        text-decoration: none;
        color: #0d6efd !important;
        margin-left: 0.7em;
    }
    ol li a:hover {
        text-decoration: underline;
    }
</style>
<div class="container">

    <h1>Record access options</h1>
    <p>These are the current record access options available. Within each access option there are 4 variations based on user type.</p>

    <div class="row">
        <div class="col-md-6">
            <h2>Original</h2>
            <ol>
                <li><a href="1.php">Order original</a></li>
                <li><a href="2.php">Digitised partially opened</a></li>
                <li><a href="3.php">Paid search</a></li>
                <li><a href="4.php">Digitized available but not downloadable at item level</a></li>
                <li><a href="5.php">Digitized available but not downloadable at piece level</a></li>
                <li><a href="6.php">Digitised LIA</a></li>
                <li><a href="7.php">Digitised other</a></li>
                <li><a href="8.php">Academic subscription</a></li>
                <li><a href="9.php">Digitised discovery</a></li>
                <li><a href="10.php">AV media</a></li>
                <li><a href="11.php">Local archive</a></li>
                <li><a href="12.php">Closed FOI review</a></li>
                <li><a href="13.php">Access under review</a></li>
                <li><a href="14.php">Closed retained department unknown</a></li>
                <li><a href="15.php">Closed retained department known</a></li>
                <li><a href="16.php">Government web archive</a></li>
                <li><a href="17.php">Unfit</a></li>
                <li><a href="18.php">Mould treatment</a></li>
                <li><a href="19.php">Collection care</a></li>
                <li><a href="20.php">Offsite</a></li>
                <li><a href="21.php">Display at museum</a></li>
                <li><a href="22.php">Missing lost</a></li>
                <li><a href="23.php">On loan</a></li>
                <li><a href="24.php">File authority</a></li>
                <li><a href="25.php">Surrogate</a></li>
                <li><a href="26.php">In use</a></li>
                <li><a href="27.php">Invigilation safe room</a></li>
                <li><a href="28.php">Too large to copy original</a></li>
                <li><a href="29.php">Too large to copy offsite</a></li>
                <li><a href="30.php">Too large to copy surrogate</a></li>
                <li><a href="31.php">Unavailable</a></li>
                <li><a href="32.php">Order exception</a></li>
            </ol>
        </div>
        <div class="col-md-6">
            <h2>Re-designed</h2>
            <ol>
                <li><a href="redesigned/1.php">Order original</a></li>
                <li><a href="redesigned/2.php">Digitised partially opened</a></li>
                <li><a href="redesigned/3.php">Paid search</a></li>
                <li><a href="redesigned/4.php">Digitized available but not downloadable at item level</a></li>
                <li><a href="redesigned/5.php">Digitized available but not downloadable at piece level</a></li>
                <li><a href="redesigned/6.php">Digitised LIA</a></li>
                <li><a href="redesigned/7.php">Digitised other</a></li>
                <li><a href="redesigned/8.php">Academic subscription</a></li>
                <li><a href="redesigned/9.php">Digitised discovery</a></li>
                <li><a href="redesigned/10.php">AV media</a></li>
                <li><a href="redesigned/11.php">Local archive</a></li>
                <li><a href="redesigned/12.php">Closed FOI review</a></li>
                <li><a href="redesigned/13.php">Access under review</a></li>
                <li><a href="redesigned/14.php">Closed retained department unknown</a></li>
                <li><a href="redesigned/15.php">Closed retained department known</a></li>
                <li><a href="redesigned/16.php">Government web archive</a></li>
                <li><a href="redesigned/17.php">Unfit</a></li>
                <li><a href="redesigned/18.php">Mould treatment</a></li>
                <li><a href="redesigned/19.php">Collection care</a></li>
                <li><a href="redesigned/20.php">Offsite</a></li>
                <li><a href="redesigned/21.php">Display at museum</a></li>
                <li><a href="redesigned/22.php">Missing lost</a></li>
                <li><a href="redesigned/23.php">On loan</a></li>
                <li><a href="redesigned/24.php">File authority</a></li>
                <li><a href="redesigned/25.php">Surrogate</a></li>
                <li><a href="redesigned/26.php">In use</a></li>
                <li><a href="redesigned/27.php">Invigilation safe room</a></li>
                <li><a href="redesigned/28.php">Too large to copy original</a></li>
                <li><a href="redesigned/29.php">Too large to copy offsite</a></li>
                <li><a href="redesigned/30.php">Too large to copy surrogate</a></li>
                <li><a href="redesigned/31.php">Unavailable</a></li>
                <li><a href="redesigned/32.php">Order exception</a></li>
            </ol>
        </div>
    </div>

</div>

</main>
<?php require_once '../../../includes/footer.php' ?>

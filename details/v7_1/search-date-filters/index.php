<!DOCTYPE html>

<html class="no-js" lang="en">
<head>

    <meta charset="utf-8"/>

    <title>Search the collection - The National Archives</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="../static/css/etna.css">
    <link rel="stylesheet" type="text/css" href="../static/css/etna-extensions.css">
    <link rel="stylesheet" type="text/css" href="static-extensions/css/search-date-filters.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Roboto+Mono&display=swap" rel="stylesheet">
    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + ' js ';</script>
    <link rel="preconnect" href="https://use.typekit.net">
    <link rel="stylesheet" href="https://use.typekit.net/hkj3kuz.css">
    <link rel="shortcut icon" type="image/x-icon" href="/static/images/favicon.9d4ee883c8b9.png">
    <link rel="icon" type="image/x-icon" href="/static/images/favicon.9d4ee883c8b9.png">
</head>

<body class="">
<?php require_once 'includes/svg-fragments.html' ?>
<?php require_once 'includes/header.html' ?>
<main id="maincontent">


    <form action="https://beta.nationalarchives.gov.uk/search/featured" method="GET" id="analytics-search-landing-hero">
        <div class="search-landing-hero">
            <div class="search-landing-hero__container">
                <h1 class="search-landing-hero__heading">Search</h1>
                <div class="search-landing-hero__form">
                    <label for="id_q" class="search-landing-hero__label">
                        <span class="sr-only">Enter search term.</span> For example, naturalisation or medal cards
                    </label>

                    <input type="text" name="q" class="search-results-hero__form-search-box" id="id_q">
                    <div class="search-landing-hero__date-container">
                        <div class="search-landing-hero__date-col">
                            <label class="search-landing-hero__date-label" for="start-date">Between</label>
                            <input class="search-landing-hero__date-field" aria-describedby="between" id="start-date" name="_sd" placeholder="YYYY" size="10" type="text" value="">
                            <span class="sr-only"  id="between">Enter a year in the <abbr>YYYY</abbr> format.</span>
                        </div>
                        <div class="search-landing-hero__date-col">
                            <label class="search-landing-hero__date-label" for="end-date">and</label>
                            <input class="search-landing-hero__date-field" aria-describedby="and" class="" id="end-date" name="_ed" placeholder="YYYY" size="10" type="text" value="">
                            <span class="sr-only" id="and">Enter a year in the <abbr>YYYY</abbr> format.</span>
                        </div>
                        <input type="submit" value="Search" class="search-landing-hero__form-submit">
                    </div>

                </div>
            </div>
        </div>
    </form>

    <div class="search-landing-buckets">
        <!--
        <h2 class="search-landing-buckets__heading">
            Recently added
        </h2>
        [Curated list of buckets here]
        -->
        <h2 class="search-landing-buckets__heading">
            See all records from the catalogue
        </h2>
        <nav class="search-landing-buckets__container" aria-label="Record categories">
            <div class="search-landing-buckets">
                <ul class="search-landing-buckets__list" data-id="search-buckets-list">

                    <li class="search-landing-buckets__list-item">
                        <a href="/search/catalogue/?group=tna" class="search-landing-buckets__link">
                            Records at The National Archives (24,521,433)
                        </a>
                    </li>

                    <li class="search-landing-buckets__list-item">
                        <a href="/search/catalogue/?group=digitised" class="search-landing-buckets__link">
                            Online records at The National Archives (9,041,961)
                        </a>
                    </li>

                    <li class="search-landing-buckets__list-item">
                        <a href="/search/catalogue/?group=nonTna" class="search-landing-buckets__link">
                            Records at other UK archives (10,758,426)
                        </a>
                    </li>

                    <li class="search-landing-buckets__list-item">
                        <a href="/search/catalogue/?group=creator" class="search-landing-buckets__link">
                            Record creators (270,146)
                        </a>
                    </li>

                    <li class="search-landing-buckets__list-item">
                        <a href="/search/catalogue/?group=archive" class="search-landing-buckets__link">
                            Find an archive (3,477)
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <!--
        <h2 class="search-landing-buckets__heading">
            Browse content about our collections
        </h2>  
        [Highlights, Insights, Blogs, Research Guides buckets here]
        -->
    </div>

</main>


<?php require_once 'includes/footer.html' ?>


<script src="/static/scripts/global_search.4104a714c6f9.js"></script>
<script src="/static/scripts/hamburger_menu.2c93a1a1b75e.js"></script>

<script src="/static/scripts/cookie_consent.072b61d97c47.js"></script>


</body>
</html>

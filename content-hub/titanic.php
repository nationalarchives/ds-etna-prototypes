<?php $title = "Titanic: from construction to disaster and discovery" ?>
<?php $mobile_only = true ?>
<?php require_once '../includes/head.php' ?>
<?php require_once './functions.php' ?>

<main class="content-hub">
    <?php require_once '../includes/header-and-nav-bar.php' ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="/content-hub/">Content Hubs</a></li>
                <li class="breadcrumb-item active" aria-current="page">Titanic</li>

            </ol>
        </nav>
        <div class="intro" class="mt-4 mb-4">
            <p>Topic Hub</p>
            <h1>Titanic: from construction to disaster and discovery</h1>
            <p>See the blueprints, search passenger lists and read eyewitness stories of the 1912 disaster of the “unsinkable” Titanic. </p>
        </div>
        <?php render_image_card("COPY_1_566.jpg", "#", "RMS Titanic lifeboat No6 approaches rescue ship Carpathia (COPY 1/566) - <a href='#'>view in image library</a>"); ?>

        <p>Titanic set sail from Southampton on her maiden voyage on Wednesday 10 April 1912, calling at Cherbourg in France and Queenstown in southern Ireland before setting course for New York. </p>

        <p>
            Just before midnight on Sunday 14 April, Titanic struck an iceberg and was holed below the waterline. Less than three hours later she sank in the freezing water of the North Atlantic. Only 705 people were rescued from over 2,200 on board.</p>

        <p>
            The National Archives holds many unique and rare documents relating to the ship and her last hours:
        <ul>
            <li><a href="#">Blueprints of Titanic showing how she was built</a></li>
            <li><a href="#">Lists of crew and passengers on Titanic</a></li>
            <li><a href="#">Stories of witnesses, victims and survivors</a></li>
            <li><a href="#">Telegrams and photographs from the rescue</a></li>
            <li><a href="#">Documents from the inquiries into the sinking</a></li>
            <li><a href="#">Timeline of Titanic’s history</a></li>

        </ul>
        </p>
        <div id="construction-of-titanic" class="mt-4 mb-4">
            <h2 class="mt-4 mb-4">The construction of Titanic</h2>
            <?php render_image_card("COPY1-566-56506-RMS-Titanic-at-Southampton-1912.jpg", "#", "RMS Titanic at Southampton, 1912 (COPY1/566 (56506)) - <a href='#'>view in image library</a>"); ?>

            <blockquote class="tna-blockquote">
                <p>"She was a beautiful ship,
                    that’s how people should remember her."</p>
                <cite>Eva Hart <br />
                    Survivor of the sinking of Titanic</cite>
            </blockquote>

            <p>Titanic was built in Belfast for the White Star shipping line, at a cost of around £1.5 million. At over 46,000 tons, she was the largest passenger steamer of her day, and the most up to date. </p>
            <p>Special watertight compartments made her “practically unsinkable”, claimed the owners. They also advertised the luxurious First Class accommodation, with large state-rooms, a Parisian café, a swimming pool, Turkish bath and restaurant.</p>

            <!-- This needs design thinking from the FE team. It most likely won't be a "carousel" -->
            <div class="media-group text-center">
                <h3 class="smaller-h3">The Olympic Class liners: "Belles of Belfast"</h3>
                <?php render_media_card("item-podcast.png", "#", "bi bi-play-circle-fill", "<span class='caption-title'><a href='#'>Podcast: “The Belles of Belfast”</a> (47 minutes)</span> <span class='caption-description'>A whistle-stop chronology of the Olympic Class, from 
conception and construction to disaster and discovery.</span>") ?>
                <?php render_media_card("lower-deck.png", "#", "bi bi-image-fill", "<span class='caption-title'>Lower deck, 1911</span> <span class='caption-description'>Blueprints of deck plans for Olympic and Titanic
MT 15/504 pt 1 (8) - <a href='#'>view in image library</a></span>") ?>
                <?php render_media_card("shelter-deck.png", "#", "bi bi-image-fill", "<span class='caption-title'>Shelter deck, 1911</span> <span class='caption-description'>Blueprints of deck plans for Olympic and Titanic
MT 15/504 pt 1 (1) <a href='#'>view in image library</a></span>") ?>
            </div>
        </div>
        <div id="crew-and-passengers" class="mt-4 mb-4">
            <h2 class="mt-4 mb-4">The crew and passengers of Titanic</h2>
            <?php render_image_card("captain-smith-from-an-image-published-in-the-sphere-27th-april-1912.jpg", "#", "Captain Smith from an image published in The Sphere, 27 April 1912") ?>
            <blockquote class="tna-blockquote">
                <p>We see Titanic as a luxury liner. Yet, technically, she was an ‘Emigrant Ship’.</p>
                <cite class="sr-only">Captain Smith</cite>
            </blockquote>
            <p>It certainly was, for some, a glamorous time. Great wealth, which some passengers in the First Class accommodation on the liner did indeed possess, could buy leisure and luxury in new and different ways, of which trans-Atlantic travel was just one.</p>
            <p>Not all the people of Europe, nor all the passengers on the Titanic, shared in this luxury. The fact that 11 million people were prepared to uproot themselves for an uncertain new life in America between 1901 and 1910 suggests that all was not well for many. They went to escape poverty, lack of political rights, religious persecution, nationalist bigotry, class prejudice.</p>
            <p>The years up to the First World War were years of unrest and political ferment, as well as great wealth for a few. The immense contrast of life-styles on the Titanic reveals this.</p>


            <div class="media-group text-center">
                <h3 class="smaller-h3">The gulf between first class and third class</h3>
                <?php render_media_card("first-class-suite.png", "#", "bi bi-image-fill", "<span class='caption-title'><a href='#'>First class suite bedroom ‘B58’ on Titanic</a></span> <span class='caption-description'>Ulster Folk and Transport Museum</span>") ?>
                <?php render_media_card("third-class-suite.png", "#", "bi bi-image-fill", "<span class='caption-title'><a href='#'>Third class berth on Titanic</a></span> <span class='caption-description'>Ulster Folk and Transport Museum</span>") ?>
                <?php render_media_card("podcast-titanic-emigrant-ship.png", "#", "bi-play-circle-fill", "<span class='caption-title'><a href='#'>Podcast: “Titanic: emigrant ship”</a> (25 minutes)</span> <span class='caption-description'>This talk focuses on those travelling below decks in Third 
Class, heading for a new life in the United States.</span>") ?>
            </div>

            <div class="search-container">
                <h3>Search Titanic passenger and crew lists</h3>
                <form action="#" method="POST" role="search" aria-label="A guided search of the records">
                    <label>Search by name, occupation or place</label>
                    <input type="search" class="w-100" />
                    <div class="d-flex flex-row-reverse">
                        <input type="submit" class="btn btn-dark m-1" value="Search">
                    </div>
                </form>
                <div class="text-center">
                    <?php render_media_card("IIIF.png", "#", "bi bi-search", "<span class='caption-title'><a href='#'>IIIF viewer: Titanic passenger and crew lists</a></span>") ?>
                </div>
            </div>
            <div id="eyewitnesses-victims-survivors">
                <h3 class="smaller-h3 mt-4 mb-4">Eyewitnesses, victims and survivors</h3>
                <?php render_image_card("jack-phillips.png", "#", "Jack Philips, Marconi wireless operator on RMS Titanic, 1912. Catalogue reference: COPY 1/565", "pt-2") ?>
                <blockquote class="tna-blockquote">
                    <p>“Phillips slipped down, and though we
                        held his head up, he never recovered.”</p>
                    <cite>Charles Lightoller<br />
                        Second officer on the Titanic</cite>
                </blockquote>
                <div class="media-group pb-2">
                    <div class="text-center">
                        <h4>Crew, passengers and rescuers' stories</h4>
                        <?php render_media_card("thomas-andrews.png", "/content-hub/thomas-andrews.php", "bi bi-file-earmark-richtext-fill", "<span class='caption-title'><a href='/content-hub/thomas-andrews.php'>Thomas Andrews</a></span> <span class='caption-description'>First class passenger and designer of Titanic</span>") ?>
                        <?php render_media_card("robert-hitchins.png", "#", "bi bi-file-earmark-richtext-fill", "<span class='caption-title'><a href='#'>Robert Hitchins</a></span> <span class='caption-description'>Quartermaster, Titanaic crew</span>") ?>
                        <?php render_media_card("the-dean-family.png", "#", "bi bi-file-earmark-richtext-fill", "<span class='caption-title'><a href='#'>The Dean family</a></span> <span class='caption-description'>Third class passengers</span>") ?>
                    </div>
                    <div class="px-4">
                        <h5 class="mb-2">Titanic stories from our podcasts</h5>

                        <p><i class="bi bi-play-circle-fill"></i>&nbsp;<span class="caption-title"><a href="#">“The last night of a small town”</a> (42 minutes)</span><span class="caption-description podcast-list">12 stories of people on Titanic's first and last voyage</span></p>

                        <p><i class="bi bi-play-circle-fill"></i>&nbsp;<span class="caption-title"><a href="#">“Women and children first!”</a> (45 minutes)</span><span class="caption-description podcast-list">Was Titanic’s evacuation hampered by social norms?</span></p>

                        <p><i class="bi bi-play-circle-fill"></i>&nbsp;<span class="caption-title"><a href="#">The life of a crewman on Titanic</a> (38 minutes)</span><span class="caption-description podcast-list">What was life like for families after the disaster?</span></p>

                    </div>


                </div>
            </div>

            <div id="aftermath" class="mt-4 mb-4">
                <h2 class="mt-4 mb-4">The aftermath of Titanic’s sinking</h2>
                <?php render_image_card("aftermath-titanic.png", "#", "Ismay, Imrie and Co refer to report on RMS Titanic MT 9/920B (122) - <a href='#'>view in image library</a>") ?>
                <p>The sinking of the Titanic caused an uproar on both sides of the Atlantic. Newspapers blamed the owners for inadequate safety arrangements. Others blamed the captain for going too fast and too carelessly in waters known to be iceberg-infested.</p>
                <p>An enquiry in the US Senate fixed on the fact that there were not enough lifeboats for the number of passengers, although the owners certainly provided more than they were required to by law at the time. It was also pointed out that not all the lifeboats that were on board could be launched in the time it took to sink. Many passengers anyway refused to get into the lifeboats, some of which left the ship half full.</p>
                <p>Safety regulations had not caught up with these new massive liners and were rapidly changed. A new regulation of 1913 required all vessels to carry enough lifeboats for every passenger. An iceberg patrol was set up by the US Coastguard.</p>

                <div class="media-group text-center">
                    <?php render_media_card("death-certificates-1.png", "#", "bi bi-search", "<span class='caption-title'><a href='#'>IIIF viewer: List of first class passenger deaths</a></span><span class='caption-description'>Catalogue reference: <a href='#'>BT 100/260</a></span>") ?>
                    <?php render_media_card("death-certificates-2.png", "#", "bi bi-search", "<span class='caption-title'><a href='#'>IIIF viewer: List of third class passenger deaths</a></span><span class='caption-description'>Catalogue reference: <a href='#'>BT 100/260</a></span>") ?>

                </div>

                <div class="media-group text-center pb-2">
                    <h3>Titanic timeline</h3>
                    <?php render_media_card("timeline-1.png", "#", "bi bi-image-fill", "<span class='caption-title'>Carpathia picks up survivors from the lifeboats</span><span class='caption-description'>MS Titanic collapsible lifeboat D approaches rescue 
ship Carpathia, COPY 1/566 - <a href='#'>view in image library</a></span>") ?>
                    <?php render_media_card("timeline-2.png", "#", "bi bi-image-fill", "<span class='caption-title'>Carpathia arrives in New York with 705 survivors</span><span class='caption-description'>RMS Carpathia c1912<br/>
COPY 1/566 - <a href='#'>view in image library</a></span>") ?>
                    <?php render_media_card("timeline-3.png", "#", "bi bi-image-fill", "<span class='caption-title'>US enquiry into the disaster</span><span class='caption-description'>Official enquiry by the US Senate<br/>
 <a href='#'>Library of Congress / Science Photo Library</a></span>") ?>
                    <hr />
                    <p>04.10, 15 April 1912</p>
                </div>

                <div class="text-center mt-4 mb-4">
                    <h2 class="mt-4 mb-4">Share this page</h2>
                    <div class="follow-us">
                        <a href="https://twitter.com/@UKNatArchives" title="Follow us on Twitter - Opens a new window" target="_blank" rel="noopener noreferrer">
                            <img src="https://nationalarchives.gov.uk/wp-content/themes/tna-base/img/social/twitter.png" alt="Twitter logo">
                            <span class="sr-only">Opens a new window</span>
                        </a>
                        <a href="https://www.facebook.com/TheNationalArchives" title="Follow us on Facebook - Opens a new window" target="_blank" rel="noopener noreferrer">
                            <img src="https://nationalarchives.gov.uk/wp-content/themes/tna-base/img/social/facebook.png" alt="Facebook logo">
                            <span class="sr-only">Opens a new window</span>
                        </a>
                        <a href="https://www.instagram.com/nationalarchivesuk/" title="Follow us on Instagram - Opens a new window" target="_blank" rel="noopener noreferrer">
                            <img src="https://nationalarchives.gov.uk/wp-content/themes/tna-base/img/social/instagram.png" alt="Instagram logo">
                            <span class="sr-only">Opens a new window</span>
                        </a>
                    </div>
                </div>

                <div class="text-center mt-4 mb-4">
                    <h2 class="mt-4 mb-4 sr-only">Metadata</h2>
                    <p>Categories: <a href="#">Category 1</a>, <a href="#">Category 2</a></p>
                    <p>Tags: <a href="#">Tag 1</a>, <a href="#">Tag 2</a></p>
                </div>

                <div class="mt-4 mb-4 related-content">
                    <h2 class="mt-4 mb-4 pt-4 text-center sr-only">Related Content</h2>
                    <div class="related-card">
                        <div class="text-center">
                            <h3 class="smaller-h3"><a href="#">Try our online lesson on Titanic</a></h3>

                            <a href="#"><img src="/content-hub/images/related-content-1.png" class="img-fluid" /></a>
                        </div>
                        <div class="related-card-text p-2">
                            <p class="text-left"><span class="fw-bold">Life aboard the Titanic</span><br />
                                Who travelled on the fateful maiden voyage?<br />
                            </p>
                        </div>
                    </div>

                    <div class="related-card">
                        <div class="text-center">
                            <h3 class="smaller-h3"><a href="#">Search teaching resources and lesson plans</a></h3>

                        </div>
                    </div>


                    <div class="related-card">
                        <div class="text-center">
                            <h3 class="smaller-h3"><a href="#">Read our recommended book on Titanic</a></h3>

                            <a href="#"><img src="/content-hub/images/titanic-lives.png" class="img-fluid" /></a>
                        </div>
                        <div class="related-card-text p-2">
                            <p><span class="fw-bold">Titanic Lives</span><br />
                                A fresh investigation of the lives of those on board.<br />
                            </p>
                        </div>


                    </div>


                    <div class="related-card">
                        <div class="text-center">
                            <h3 class="smaller-h3"><a href="#">Search for more books on Titanic</a></h3>

                        </div>
                    </div>

                    <div class="related-card">
                        <div class="text-center">
                            <h3 class="smaller-h3"><a href="#">Explore the archive for records on Titanic</a></h3>

                            <a href="#"><img src="/content-hub/images/collection-explorer-related-content.png" class="img-fluid" /></a>
                        </div>
                        <div class="related-card-text p-2">
                            <p class="text-left"><span class="fw-bold">Collection Explorer</span><br />
                                A tool to help you find records in the catalogue.<br />
                            </p>
                        </div>
                    </div>

                    <div class="related-card">
                        <div class="text-center">
                            <h3 class="smaller-h3"><a href="#">Search our research guides</a></h3>

                        </div>
                    </div>
                </div>
            </div>

        </div>
</main>
<?php require_once '../includes/footer.php' ?>
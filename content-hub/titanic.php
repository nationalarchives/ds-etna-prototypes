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
        <div class="intro">
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
        <div id="construction-of-titanic">
            <h2>The construction of Titanic</h2>
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
                <h3>The Olympic Class liners: "Belles of Belfast"</h3>
                <?php render_media_card("item-podcast.png", "#", "bi bi-play-circle-fill", "<span class='caption-title'>Podcast: “The Belles of Belfast” (47 minutes)</span> <span class='caption-description'>A whistle-stop chronology of the Olympic Class, from 
conception and construction to disaster and discovery.</span>") ?>
                <?php render_media_card("lower-deck.png", "#", "bi bi-image-fill", "<span class='caption-title'>Lower deck, 1911</span> <span class='caption-description'>Blueprints of deck plans for Olympic and Titanic
MT 15/504 pt 1 (8) - <a href='#'>view in image library</a></span>") ?>
                <?php render_media_card("shelter-deck.png", "#", "bi bi-image-fill", "<span class='caption-title'>Shelter deck, 1911</span> <span class='caption-description'>Blueprints of deck plans for Olympic and Titanic
MT 15/504 pt 1 (1) <a href='#'>view in image library</a></span>") ?>
            </div>
        </div>
        <div id="crew-and-passengers">
            <h2>The crew and passengers of Titanic</h2>
            <?php render_image_card("captain-smith-from-an-image-published-in-the-sphere-27th-april-1912.jpg", "#", "Captain Smith from an image published in The Sphere, 27 April 1912") ?>
            <blockquote class="tna-blockquote">
                <p>We see Titanic as a luxury liner. Yet, technically, she was an ‘Emigrant Ship’.</p>
                <cite class="sr-only">Captain Smith</cite>
            </blockquote>
            <p>It certainly was, for some, a glamorous time. Great wealth, which some passengers in the First Class accommodation on the liner did indeed possess, could buy leisure and luxury in new and different ways, of which trans-Atlantic travel was just one.</p>
            <p>Not all the people of Europe, nor all the passengers on the Titanic, shared in this luxury. The fact that 11 million people were prepared to uproot themselves for an uncertain new life in America between 1901 and 1910 suggests that all was not well for many. They went to escape poverty, lack of political rights, religious persecution, nationalist bigotry, class prejudice.</p>
            <p>The years up to the First World War were years of unrest and political ferment, as well as great wealth for a few. The immense contrast of life-styles on the Titanic reveals this.</p>


            <div class="media-group text-center">
                <h3>The gulf between first class and third class</h3>
                <?php render_media_card("first-class-suite.png", "#", "bi bi-image-fill", "<span class='caption-title'>First class suite bedroom ‘B58’ on Titanic</span> <span class='caption-description'>Ulster Folk and Transport Museum</span>") ?>
                <?php render_media_card("third-class-suite.png", "#", "bi bi-image-fill", "<span class='caption-title'>Third class berth on Titanic</span> <span class='caption-description'>Ulster Folk and Transport Museum</span>") ?>
                <?php render_media_card("podcast-titanic-emigrant-ship.png", "#", "bi-play-circle-fill", "<span class='caption-title'>Podcast: “Titanic: emigrant ship” (25 minutes)</span> <span class='caption-description'>This talk focuses on those travelling below decks in Third 
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
                    <?php render_media_card("IIIF.png", "#", "bi bi-search", "<span class='caption-title'>IIIF viewer: Titanic passenger and crew lists</span>") ?>
                </div>
            </div>

            <h3 class="smaller-h3">Eyewitnesses, victims and survivors</h3>
            <?php render_image_card("jack-phillips.png", "#", "Jack Philips, Marconi wireless operator on RMS Titanic, 1912. Catalogue reference: COPY 1/565") ?>
            <blockquote class="tna-blockquote">
                <p>“Phillips slipped down, and though we
                    held his head up, he never recovered.”</p>
                <cite>Charles Lightoller<br />
                    Second officer on the Titanic</cite>
            </blockquote>
            <div class="media-group pb-2">
                <div class="text-center">
                    <h4>Crew, passengers and rescuers' stories</h4>
                    <?php render_media_card("thomas-andrews.png", "#", "bi bi-image-fill", "<span class='caption-title'>Thomas Andrews</span> <span class='caption-description'>First class passenger and designer of Titanic</span>") ?>
                    <?php render_media_card("robert-hitchins.png", "#", "bi bi-image-fill", "<span class='caption-title'>Robert Hitchins</span> <span class='caption-description'>Quartermaster, Titanaic crew</span>") ?>
                    <?php render_media_card("the-dean-family.png", "#", "bi-image-fill", "<span class='caption-title'>The Dean family</span> <span class='caption-description'>Third class passengers</span>") ?>
                </div>
                <div class="px-4">
                    <h5 class="mb-2">Titanic stories from our podcasts</h5>

                    <p><i class="bi bi-play-circle-fill"></i>&nbsp;<span class="caption-title"><a href="#">“The last night of a small town”</a> (42 minutes)</span><span class="caption-description podcast-list">12 stories of people on Titanic's first and last voyage</span></p>

                    <p><i class="bi bi-play-circle-fill"></i>&nbsp;<span class="caption-title"><a href="#">“Women and children first!”</a> (45 minutes)</span><span class="caption-description podcast-list">Was Titanic’s evacuation hampered by social norms?</span></p>

                    <p><i class="bi bi-play-circle-fill"></i>&nbsp;<span class="caption-title"><a href="#">The life of a crewman on Titanic</a> (38 minutes)</span><span class="caption-description podcast-list">What was life like for families after the disaster?</span></p>

                </div>


            </div>

        </div>

    </div>
</main>
<?php require_once '../includes/footer.php' ?>
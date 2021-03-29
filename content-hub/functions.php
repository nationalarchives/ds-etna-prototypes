<?php

function render_image_card($img, $url, $caption, $padding = null)
{
    echo <<<HTML
        <figure class="black $padding">
            <div class="text-center">
            <a href="$url">
                <img src="/content-hub/images/$img" alt="" class="img-fluid">
            </a>
            </div>
            <figcaption>$caption</figcaption>
        </figure>
    HTML;
}

// For the sections with similar card content
function render_media_card($img, $url, $bootstrap_icon_class, $caption)
{
    echo <<<HTML
        <figure class="grey">
            <a href="$url"><img src="/content-hub/images/$img" alt="" class="img-fluid"></a>
            <figcaption><i class="$bootstrap_icon_class"></i> $caption</figcaption>
        </figure>
    HTML;
}

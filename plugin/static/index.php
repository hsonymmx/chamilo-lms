<?php

$plugin = StaticPlugin::create();
$content = $plugin->get_content();
$title = $plugin->get_block_title();
$title = $title ? "<h4>$title</h4>" : '';

$css = api_get_css('plugins/static/static.css');

if (empty($content)) {
    echo '';
}

echo <<<EOT
<div class="well sidebar-nav static">
    $css
    <div class="menusection">
        $title
        <div class="content">
            $content
        </div>
    </div>
</div>
EOT;

<?php

// Load autoloader to load OOUI
require_once __DIR__."/vendor/autoload.php";

// Set theme for our webpage
OOUI\Theme::setSingleton( new OOUI\WikimediaUITheme() );

// Load css file from cdnjs
echo "<title>OOUI PHP tutorial By Jay</title>";
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/oojs-ui/0.30.0/oojs-ui-core-wikimediaui.css' />";
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/oojs-ui/0.30.0/oojs-ui-images-wikimediaui.css' />";

// Progressive Button with Icon
echo new OOUI\ButtonWidget( [
    'label' => 'Simple Button With Icon',
    'icon' => 'journal',
    'href' => 'https://mediawiki.org',
    'flags' => [ 'progressive' ]
] );

echo "<br/><br/>";

// Group of Button
echo new OOUI\ButtonGroupWidget( [
    'items' => [
        new OOUI\ButtonWidget( [
            'icon' => 'tag',
            'label' => 'One'
        ] ),
        new OOUI\ButtonWidget( [
            'indicator' => 'clear',
            'label' => 'Two',
            'flags' => [ 'destructive' ]
        ] )
    ]
] );

// TextInputWidget with Placeholder, icon and required
echo new OOUI\FieldLayout(
    new OOUI\TextInputWidget( [
        'required' => true,
        'placeholder' => 'Placeholder',
        'icon' => 'globe'
    ] ),
    [
        'label' => "TextInputWidget (required, icon, placeholder)\u{200E}",
        'align' => 'top'
    ]
);

?>
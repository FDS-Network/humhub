<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2021-08-04 13:47:38
 */
return [
    'app' => [
        'class' => 'humhub\\components\\assets\\WebStaticAssetBundle',
        'defer' => false,
        'defaultDepends' => false,
        'basePath' => '@webroot-static',
        'baseUrl' => '@web-static',
        'jsPosition' => 1,
        'js' => [
            'js/humhub-app.js',
        ],
        'css' => [
            'css/humhub-app.css',
        ],
        'preload' => [
            'js/humhub-app.js',
            'css/humhub-app.css',
        ],
        'depends' => [],
        'sourcePath' => null,
    ],
    'defer' => [
        'class' => 'humhub\\components\\assets\\WebStaticAssetBundle',
        'defer' => true,
        'jsPosition' => 1,
        'defaultDepends' => false,
        'basePath' => '@webroot-static',
        'baseUrl' => '@web-static',
        'js' => [
            'js/humhub-bundle.js',
        ],
        'css' => [],
        'preload' => [
            'js/core-bundle.js',
            'css/core-bundle.css',
        ],
        'depends' => [],
        'sourcePath' => null,
    ],
    'yii\\web\\JqueryAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'yii\\jui\\JuiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'app',
        ],
    ],
    'humhub\\assets\\JuiBootstrapBridgeAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\jui\\JuiAsset',
            'app',
        ],
    ],
    'yii\\web\\YiiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'app',
        ],
    ],
    'yii\\widgets\\ActiveFormAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'app',
        ],
    ],
    'yii\\validators\\ValidationAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'app',
        ],
    ],
    'yii\\bootstrap\\BootstrapAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'yii\\bootstrap\\BootstrapPluginAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'humhub\\assets\\JuiBootstrapBridgeAsset',
            'app',
        ],
    ],
    'humhub\\assets\\BluebirdAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\FontAwesomeAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\AnimateCssAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\OpenSansAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\PjaxAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\JqueryTimeAgoAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\HighlightJsStyleAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\NProgressStyleAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\Select2StyleAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\BlueimpGalleryStyleAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\FlatelementsStyleAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\IntersectionObserverPolyfillAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\CoreApiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\modules\\content\\assets\\ContentAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\modules\\file\\assets\\FileAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app',
        ],
    ],
    'humhub\\assets\\AppAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'humhub\\assets\\JuiBootstrapBridgeAsset',
            'yii\\jui\\JuiAsset',
            'yii\\web\\YiiAsset',
            'yii\\widgets\\ActiveFormAsset',
            'yii\\validators\\ValidationAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'yii\\bootstrap\\BootstrapPluginAsset',
            'humhub\\assets\\BluebirdAsset',
            'humhub\\assets\\FontAwesomeAsset',
            'humhub\\assets\\AnimateCssAsset',
            'humhub\\assets\\OpenSansAsset',
            'humhub\\assets\\PjaxAsset',
            'humhub\\assets\\JqueryTimeAgoAsset',
            'humhub\\assets\\HighlightJsStyleAsset',
            'humhub\\assets\\NProgressStyleAsset',
            'humhub\\assets\\Select2StyleAsset',
            'humhub\\assets\\BlueimpGalleryStyleAsset',
            'humhub\\assets\\FlatelementsStyleAsset',
            'humhub\\assets\\IntersectionObserverPolyfillAsset',
            'humhub\\assets\\CoreApiAsset',
            'humhub\\modules\\content\\assets\\ContentAsset',
            'humhub\\modules\\file\\assets\\FileAsset',
            'defer',
        ],
    ],
    'humhub\\assets\\JqueryHighlightAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\assets\\JqueryAutosizeAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\assets\\Select2Asset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\Select2StyleAsset',
            'defer',
        ],
    ],
    'humhub\\assets\\JqueryWidgetAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\assets\\NProgressAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\NProgressStyleAsset',
            'defer',
        ],
    ],
    'humhub\\assets\\JqueryNiceScrollAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\assets\\BlueimpFileUploadAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\JqueryWidgetAsset',
            'defer',
        ],
    ],
    'humhub\\assets\\BlueimpGalleryAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\JqueryWidgetAsset',
            'humhub\\assets\\BlueimpGalleryStyleAsset',
            'defer',
        ],
    ],
    'humhub\\assets\\ClipboardJsAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\assets\\ImagesLoadedAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\assets\\HighlightJsAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\HighlightJsStyleAsset',
            'defer',
        ],
    ],
    'humhub\\assets\\SwipedEventsAssets' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\assets\\CoreExtensionAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\assets\\ProsemirrorEditorAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\modules\\content\\assets\\ProseMirrorRichTextAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\ProsemirrorEditorAsset',
            'defer',
        ],
    ],
    'humhub\\modules\\user\\assets\\UserAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\modules\\live\\assets\\LiveAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\modules\\notification\\assets\\NotificationAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\modules\\content\\assets\\ContentContainerAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\modules\\user\\assets\\UserPickerAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\assets\\Select2Asset',
            'defer',
        ],
    ],
    'humhub\\modules\\post\\assets\\PostAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\modules\\space\\assets\\SpaceAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\modules\\topic\\assets\\TopicAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\modules\\ui\\filter\\assets\\FilterAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\modules\\topic\\assets\\TopicAsset',
            'defer',
        ],
    ],
    'humhub\\modules\\comment\\assets\\CommentAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\modules\\like\\assets\\LikeAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'defer',
        ],
    ],
    'humhub\\modules\\stream\\assets\\StreamAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\modules\\content\\assets\\ContentAsset',
            'humhub\\modules\\content\\assets\\ContentContainerAsset',
            'humhub\\modules\\ui\\filter\\assets\\FilterAsset',
            'humhub\\modules\\user\\assets\\UserAsset',
            'humhub\\assets\\CoreExtensionAsset',
            'defer',
        ],
    ],
    'humhub\\modules\\activity\\assets\\ActivityAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\modules\\stream\\assets\\StreamAsset',
            'defer',
        ],
    ],
    'humhub\\modules\\space\\assets\\SpaceChooserAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'humhub\\modules\\space\\assets\\SpaceAsset',
            'humhub\\modules\\user\\assets\\UserAsset',
            'defer',
        ],
    ],
];
<?php

use humhub\modules\content\widgets\richtext\RichText;
use humhub\modules\content\widgets\stream\WallStreamEntryOptions;
use humhub\modules\post\models\Post;

/* @var $post Post */
/* @var $isNews bool */
/* @var $renderOptions WallStreamEntryOptions */

$isDetailView = $renderOptions->isViewContext(WallStreamEntryOptions::VIEW_CONTEXT_DETAIL);

?>
<div data-ui-widget="post.Post" <?php if (!$isDetailView) : ?>data-state="collapsed"<?php endif; ?> data-ui-init
     id="post-content-<?= $post->id ?>">
    <div data-ui-markdown <?php if (!$isDetailView) : ?>data-ui-show-more<?php endif; ?>>
        <?php if ($isNews && ($https === "https://" || $http === "http://")) : ?>
            <div style="display: none">
                <?= RichText::output($post->message, [
                    'record' => $post,
                    'pluginOptions' => [
                        'isNews' => $isNews
                    ]
                ]) ?>
            </div>
        <?php else : ?>
            <?= RichText::output($post->message, [
                'record' => $post,
                'pluginOptions' => [
                    'isNews' => $isNews
                ]
            ]) ?>
        <?php endif; ?>
    </div>
</div>

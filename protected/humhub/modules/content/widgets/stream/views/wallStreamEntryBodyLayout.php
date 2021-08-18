<?php

use humhub\modules\content\components\ContentActiveRecord;
use humhub\modules\content\widgets\WallEntryLabels;
use humhub\modules\topic\models\Topic;
use humhub\modules\topic\widgets\TopicLabel;
use humhub\modules\ui\view\components\View;

/* @var $this View */
/* @var $model ContentActiveRecord */
/* @var $header string */
/* @var $content string */
/* @var $footer string */

?>

<div class="panel panel-default wall_<?= $model->getUniqueId() ?>">
    <div class="panel-body">
        <?php if (!$renderOptions->isAddonsDisabled()) : ?>
            <div class="media wall-entry-header">
                <?= $header ?>
            </div>
        <?php endif; ?>

        <div class="wall-entry-body">
            <div class="wall-entry-topics">
                <?php foreach (Topic::findByContent($model->content)->all() as $topic) : ?>
                    <?= TopicLabel::forTopic($topic) ?>
                <?php endforeach; ?>
            </div>

            <div class="wall-entry-content content" id="wall_content_<?= $model->getUniqueId() ?>">
                <?= $content ?>
            </div>

            <div class="wall-entry-footer">
                <?= $footer ?>
            </div>
        </div>
    </div>
</div>

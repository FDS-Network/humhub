<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2021 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

use humhub\libs\Html;
use humhub\modules\user\models\User;
use humhub\modules\user\widgets\PeopleActionButtons;
use humhub\modules\user\widgets\Image;
use humhub\modules\user\widgets\PeopleBacksideDetails;
use humhub\modules\user\widgets\PeopleIcons;
use yii\web\View;

/* @var $this View */
/* @var $user User */
?>

<div class="card-back">
    <div class="card-header">
        <?= Image::widget([
            'user' => $user,
            'linkOptions' => ['data-contentcontainer-id' => $user->contentcontainer_id, 'class' => 'pull-right'],
            'width' => 100,
        ]); ?>
        <h4><?= Html::containerLink($user); ?></h4>
        <h5><?= Html::encode($user->profile->title); ?></h5>
        <div class="clearfix"></div>
    </div>
    <div class="card-body">
        <div class="card-info">
            <?= PeopleBacksideDetails::widget(['user' => $user, 'separator' => '<br>']); ?>
        </div>
        <div class="card-buttons">
            <?= PeopleActionButtons::widget(['user' => $user]); ?>
        </div>
    </div>
    <div class="card-footer">
        <?= PeopleIcons::widget(['user' => $user]); ?>
    </div>
</div>
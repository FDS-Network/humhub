<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\dashboard\components\actions;

use humhub\modules\content\widgets\stream\StreamEntryOptions;
use humhub\modules\dashboard\Module;
use humhub\modules\dashboard\stream\DashboardStreamQuery;
use humhub\modules\activity\actions\ActivityStreamAction;
use humhub\modules\space\models\Space;
use humhub\modules\ui\view\helpers\ThemeHelper;
use humhub\modules\user\models\Profile;
use humhub\modules\user\models\User;
use Yii;
use yii\helpers\VarDumper;

/**
 * DashboardNewAction
 *
 * Note: This stream action is also used for activity e-mail content.
 *
 * @since 0.11
 * @author luke
 */
class DashboardNewAction extends ActivityStreamAction
{
    /**
     * @inheritDoc
     */
    public $activity = false;

    /**
     * @inheritDoc
     */
    public $streamQueryClass = DashboardStreamQuery::class;

    /**
     * @inheritDoc
     */
    public function initStreamEntryOptions()
    {
        return parent::initStreamEntryOptions()->viewContext(StreamEntryOptions::VIEW_CONTEXT_DASHBOARD);
    }

    public function  querySpace()
    {
        $profile = Profile::findOne(['user_id' => Yii::$app->user->getId()]);
        $city = $profile['city'] ?? 0;
        $userFF = 12;
        $user = User::findOne($userFF);
        $this->conditionLoadNews($user,$city);
    }
    public function conditionLoadNews($user,$city){
        if ($user && $city == 0) {
            $spaceId = 13;
            $this->user = $user;
            $this->getStreamQuery()->filterSpace($spaceId);
        }
        else
        {
            $spaceId = 16;
            $this->user = $user;
            $this->getStreamQuery()->filterSpace($spaceId);
        }
    }

    public function beforeApplyFilters()
    {
        $this->querySpace();
        parent::beforeApplyFilters();
    }
}

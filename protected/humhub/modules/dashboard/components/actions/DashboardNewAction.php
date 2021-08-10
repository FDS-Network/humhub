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

    public function beforeApplyFilters()
    {
        $user =  User::findOne(12);
        if($user)
        {
            $this->user = $user;
            $this->getStreamQuery()->filterSpace(13);
        }
        parent::beforeApplyFilters();
    }
}

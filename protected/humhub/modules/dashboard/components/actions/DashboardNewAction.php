<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\dashboard\components\actions;

use humhub\modules\content\widgets\stream\StreamEntryOptions;
use humhub\modules\dashboard\stream\DashboardStreamQuery;
use humhub\modules\activity\actions\ActivityStreamAction;
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
        $andreas = User::findOne(1);
        $this->user = $andreas;
        parent::beforeApplyFilters();
    }
}

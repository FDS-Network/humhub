<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\dashboard\components\actions;

use humhub\modules\content\widgets\stream\StreamEntryOptions;
use humhub\modules\content\widgets\stream\WallStreamEntryOptions;
use humhub\modules\dashboard\stream\DashboardStreamQuery;
use humhub\modules\activity\actions\ActivityStreamAction;
use humhub\modules\user\models\Profile;
use humhub\modules\user\models\User;
use Yii;

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
    const USER_FRANK_FURT = 12;
    const FRANK_FURT_SPACEID = 13;
    const FUSS_BALL_SPACEID = 16;
    const CITY_FRANK_FURT = 1;

    /**
     * @inheritDoc
     */

    public function initStreamEntryOptions()
    {
        $wallStreamEntry = new WallStreamEntryOptions();
        $wallStreamEntry->disableAddons();
        $wallStreamEntry->viewContext(StreamEntryOptions::VIEW_CONTEXT_DASHBOARD);
        $wallStreamEntry->enableNewsOption();
        return $wallStreamEntry;
    }

//    public function initStreamEntryOptions()
//    {
//        return parent::initStreamEntryOptions()
//            ->viewContext(StreamEntryOptions::VIEW_CONTEXT_DASHBOARD)
//            ->disableAddons()
//            ->enableNewsOption();
//    }

    public function querySpace()
    {
        $profile = Profile::findOne(['user_id' => Yii::$app->user->getId()]);
        $city = $profile['city'] ?? 0;
        $user = User::findOne(self::USER_FRANK_FURT);
        $this->conditionLoadNews($user, $city);
    }

    public function conditionLoadNews($user, $city)
    {
        if ($user && $city == self::CITY_FRANK_FURT) {
            // Eintracht Frankfurt Fans
            $spaceId = self::FRANK_FURT_SPACEID;
            $this->user = $user;
            $this->getStreamQuery()->filterSpace($spaceId);
        } else {
            // fussball-news
            $spaceId = self::FUSS_BALL_SPACEID;
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

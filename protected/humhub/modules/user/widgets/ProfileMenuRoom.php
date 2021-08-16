<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\user\widgets;

use humhub\modules\user\Module;
use Yii;
use humhub\modules\ui\menu\widgets\LeftNavigation;
use humhub\modules\user\models\User;
use humhub\modules\ui\menu\MenuImage;
use yii\base\BaseObject;
use yii\helpers\VarDumper;

/**
 * ProfileMenuWidget shows the (usually left) navigation on user profiles.
 *
 * Only a controller which uses the 'application.modules_core.user.ProfileControllerBehavior'
 * can use this widget.
 *
 * The current user can be gathered via:
 *  $user = Yii::$app->getController()->getUser();
 *
 * @since 0.5
 * @author Luke
 */
class ProfileMenuRoom extends LeftNavigation
{

    /**
     * @var User
     */
    public $user;


    /**
     * @inheritdoc
     */
    public function init()
    {

        $this->panelTitle = Yii::t('UserModule.profile', '<strong>Menu</strong> room');

        /** @var Module $module */
        $newImage = new MenuImage([]);
        $newImage->setUser($this->user);
        $this->addEntry($newImage);

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if (Yii::$app->user->isGuest && $this->user->visibility != User::VISIBILITY_ALL) {
            return '';
        }

        return parent::run();
    }

}

?>

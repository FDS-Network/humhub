<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\ui\menu;

use humhub\modules\ui\icon\widgets\Icon;
use humhub\modules\ui\menu\widgets\Menu;
use humhub\modules\user\behaviors\ProfileController;
use humhub\modules\user\models\Profile;
use humhub\modules\user\models\User;
use humhub\widgets\Button;
use Yii;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\helpers\VarDumper;

/**
 * Class DropdownDivider
 *
 * Used for rendering divider within a DropdownMenu.
 *
 * Usage:
 *
 * ```php
 * $dropdown->addEntry(new DropdownDivider(['sortOrder' => 100]);
 * ```
 *
 * @since 1.4
 * @see Menu
 */
class MenuImage extends MenuEntry
{


    /**
     * Returns the MenuEntry as array structure
     *
     * @return array the menu entry array representation
     * @deprecated since 1.4
     */

    public $user;

    public function setUser($user) {
        $this->user = $user;
    }

    public function renderEntry($extraHtmlOptions = [])
    {
        $imgUrl = Url::base(true) . '/uploads/logo_public/logoimagelink.png';
        $img = Html::img($imgUrl, $this->getHtmlOptions($extraHtmlOptions));
        $user = User::findOne(['id' => $this->user->getId()]);
        if(Yii::$app->user->getIdentity() != null)
        {
            $emailEnCoded = base64_encode( $user['email']);
            $idUserEnCoded = base64_encode($user['id']);
            $namelEnCoded = base64_encode($user['username']);
            $url = Url::toRoute(['/p/1', 'name' => $namelEnCoded , 'email' => $emailEnCoded, 'iduser' => $idUserEnCoded]);
            return Html::a($img, $url);
        }
        return $img;
    }

}

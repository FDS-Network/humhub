<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\post\widgets;

use humhub\modules\content\widgets\stream\WallStreamEntryWidget;
use yii\helpers\VarDumper;

/**
 * @inheritdoc
 */
class WallEntry extends WallStreamEntryWidget
{

    /**
     * @inheritdoc
     */
    public $editRoute = '/post/post/edit';

    /**
     * @inheritdoc
     */
    protected function renderContent()
    {
        $https = substr($this->model->message,1,8);
        $http = substr($this->model->message,1, 7);
        return $this->render('wallEntry', [
            'post' => $this->model,
            'justEdited' => $this->renderOptions->isJustEdited(), // compatibility for themed legacy views
            'isNews' => $this->renderOptions->getNewsOption(),
            'renderOptions' => $this->renderOptions,
            'https' =>  $https,
            'http' => $http
        ]);
    }
}

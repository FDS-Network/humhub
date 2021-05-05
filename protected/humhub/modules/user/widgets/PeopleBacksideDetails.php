<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2021 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\user\widgets;

use humhub\components\Widget;
use humhub\modules\user\models\ProfileField;
use humhub\modules\user\models\User;

/**
 * PeopleBacksideDetails shows details for back side of the people card
 * 
 * @since 1.9
 * @author Luke
 */
class PeopleBacksideDetails extends Widget
{

    /**
     * @var User
     */
    public $user;

    /**
     * @var string Separator between lines
     */
    public $separator = '<br>';

    /**
     * @inheritdoc
     */
    public function run()
    {
        $lines = [];

        for ($i = 1; $i <= 3; $i++) {
            if ($profileField = $this->getProfileFieldValue(PeopleCard::config('backsideLine' . $i))) {
                $lines[] = $profileField;
            }
        }

        return implode($this->separator, $lines);
    }

    /**
     * Get user profile field value by internal name
     *
     * @param string $internalName
     * @return false|string
     */
    private function getProfileFieldValue(string $internalName)
    {
        if (empty($internalName)) {
            return false;
        }

        $profileField = ProfileField::find()
            ->where(['visible' => 1])
            ->andWhere(['internal_name' => $internalName])
            ->one();

        if (!$profileField) {
            return false;
        }

        return $profileField->getUserValue($this->user, false);
    }

}

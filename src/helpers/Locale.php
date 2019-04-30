<?php

namespace codexten\yii\modules\locale\helpers;

class Locale
{
    /**
     * @return \codexten\yii\modules\locale\models\Locale[]
     */
    public static function enabledLocales()
    {
        return self::model()::find()->all();
    }

    /**
     * @return \codexten\yii\modules\locale\models\Locale
     */
    public static function model()
    {
        return \codexten\yii\modules\locale\models\Locale::instance();
    }
}
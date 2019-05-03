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

    public static function enabledLocaleNames()
    {
        $items = [];
        foreach (self::enabledLocales() as $model) {
            $items[$model->code] = $model->name;
        }

        if (isset($items[self::defaultLocale()])) {
            $temp[self::defaultLocale()] = $items[self::defaultLocale()];
            unset($items[self::defaultLocale()]);
            foreach ($items as $code => $label) {
                $temp[$code] = $label;
            }
            $items = $temp;

        }
        return $items;
    }

    /**
     * @return \codexten\yii\modules\locale\models\Locale
     */
    public static function model()
    {
        return \codexten\yii\modules\locale\models\Locale::instance();
    }

    public static function defaultLocale()
    {
        return 'en';
    }
}
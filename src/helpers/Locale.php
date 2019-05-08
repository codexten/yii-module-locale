<?php

namespace codexten\yii\modules\locale\helpers;

class Locale
{
    /**
     * @return \codexten\yii\modules\locale\models\Locale[]
     */
    public static function enabledLocales()
    {
        $models = self::model()::find()->indexBy('code')->all();
        if (isset($items[self::defaultLocale()])) {
            $temp[self::defaultLocale()] = $models[self::defaultLocale()];
            unset($models[self::defaultLocale()]);
            foreach ($models as $code => $model) {
                $temp[$code] = $model;
            }
            $models = $temp;
        }

        return $models;
    }

    /**
     * @return  array
     * @deprecated
     */
    public static function enabledLocaleNames()
    {
        return self::enabledLocaleNamesByCode();
    }

    /**
     * @return array
     */
    public static function enabledLocaleNamesByCode()
    {
        $items = [];
        foreach (self::enabledLocales() as $model) {
            $items[$model->code] = $model->name;
        }

        return $items;
    }

    public static function enabledLocaleNamesById()
    {
        $items = [];
        foreach (self::enabledLocales() as $model) {
            $items[$model->id] = $model->name;
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
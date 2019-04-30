<?php

namespace codexten\yii\modules\locale\models\query;

use codexten\yii\modules\locale\models\Locale;
use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[\codexten\yii\modules\locale\models\Locale]].
 *
 * @see \codexten\yii\modules\locale\models\Locale
 */
class LocaleQuery extends ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return Locale[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Locale|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

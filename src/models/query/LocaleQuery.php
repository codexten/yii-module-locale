<?php

namespace codexten\yii\modules\locale\models\query;

/**
 * This is the ActiveQuery class for [[\codexten\yii\modules\locale\models\Locale]].
 *
 * @see \codexten\yii\modules\locale\models\Locale
 */
class LocaleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \codexten\yii\modules\locale\models\Locale[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \codexten\yii\modules\locale\models\Locale|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

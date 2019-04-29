<?php

namespace codexten\yii\modules\locale\models;

use Symfony\Component\Intl\Locales;
use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "{{%locale}}".
 *
 * Database fields:
 *
 * @property int $id
 * @property string $code
 * @property int $created_at
 * @property int $updated_at
 */
class Locale extends \codexten\yii\db\ActiveRecord
{
    //const STATUS_ACTIVE = 1;
    //const STATUS_INACTIVE = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%locale}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['code'], 'string', 'max' => 50],
            [['code'], 'required'],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('codexten:module:locale', 'ID'),
            'code' => Yii::t('codexten:module:locale', 'Name'),
            'created_at' => Yii::t('codexten:module:locale', 'Created At'),
            'updated_at' => Yii::t('codexten:module:locale', 'Updated At'),
        ];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return Locales::getName($this->code);
    }

    /**
     *{@inheritdoc}
     */
    public function canUpdate()
    {
        //if (!Yii::$app->user->can('partner.update')) {
        //    return false;
        //}

        return parent::canUpdate();
    }

    /**
     *{@inheritdoc}
     */
    public function canView()
    {
        //if (!Yii::$app->user->can('partner.view')) {
        //    return false;
        //}

        return parent::canView();
    }

    /**
     *{@inheritdoc}
     */
    public function canDelete()
    {
        //if (!Yii::$app->user->can('partner.delete')) {
        //    return false;
        //}

        return parent::canView();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta()
    {
        $meta = parent::getMeta();

        //if ($this->canView()) {
        //    $meta['viewUrl'] = Url::to(['@partner/view', 'id' => $this->id]);
        //}
        //if ($this->canUpdate()) {
        //    $meta['updateUrl'] = Url::to(['@partner/update', 'id' => $this->id]);
        //}

        return $meta;
    }

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
        $fields = parent::fields();

        return $fields;
    }

    /**
     * {@inheritdoc}
     */
    public function extraFields()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     * @return \codexten\yii\modules\locale\models\query\LocaleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \codexten\yii\modules\locale\models\query\LocaleQuery(get_called_class());
    }

    ///**
    //* statuses
    //* @return array
    //*/
    //public static function statuses()
    //{
    //    return [
    //        self::STATUS_ACTIVE => Yii::t('codexten:module:locale', 'Active'),
    //        self::STATUS_INACTIVE => Yii::t('codexten:module:locale', 'Inactive'),
    //    ];
    //}
}

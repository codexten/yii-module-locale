<?php

namespace codexten\yii\modules\locale\controllers;

use Yii;
use codexten\yii\modules\locale\models\Locale;
use codexten\yii\web\CrudController;

/**
 * LocaleController implements the CRUD actions for Locale model.
 */
class LocaleController extends CrudController
{
    public $modelClass = Locale::class;

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $actions = parent::actions();

        return $actions;
    }

}

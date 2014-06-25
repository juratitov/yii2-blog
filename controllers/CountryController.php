<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

/**
 * Description of CountryController
 *
 * @author Jura
 */
class CountryController extends Controller
{

    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
                ->limit($pagination->limit)
                ->offset($pagination->offset)
                ->all();

        return $this->render('index', [
                    'countries' => $countries,
                    'pagination' => $pagination,
        ]);
    }

}

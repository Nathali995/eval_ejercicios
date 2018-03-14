<?php

namespace exocet\BootstrapMD\widgets\grid;

use yii\helpers\Html;

/**
 * ActionColumn is a column for the [[GridView|GridView]] widget that displays buttons for viewing and manipulating the items.
 *
 * To add an ActionColumn to the grid view, add it to the `$columns` (inherited from [yii\grid\GridView](http://www.yiiframework.com/doc-2.0/yii-grid-gridview.html#$columns-detail)) 
 * configuration as follows:
 *
 * ```php
 * 'columns' => [
 *     // ...
 *     [
 *         'class' => ActionColumn::className(),
 *         // you may configure additional properties here
 *     ],
 * ]
 * ```
 * 
 * @author DSR! <xchwarze@gmail.com>
 * @package widgets
 * @subpackage grid
 */
class ActionColumn extends \yii\grid\ActionColumn
{
    public $headerOptions = ['class' => 'action-column-header'];
    public $contentOptions = ['class' => 'action-column pull-right'];

    /**
     * Initializes the default button rendering callbacks.
     */
    protected function initDefaultButtons()
    {
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => \Yii::t('yii', 'View'),
                    'aria-label' => \Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                
                return Html::a('<i class="mdi mdi-2x mdi-pageview"></i>', $url, $options);
            };
        }

        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => \Yii::t('yii', 'Update'),
                    'aria-label' => \Yii::t('yii', 'Update'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);

                return Html::a('<i class="mdi mdi-2x mdi-mode-edit"></i>', $url, $options);
            };
        }

        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => \Yii::t('yii', 'Delete'),
                    'aria-label' => \Yii::t('yii', 'Delete'),
                    'data-confirm' => \Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ], $this->buttonOptions);

                return Html::a('<i class="mdi mdi-2x mdi-delete"></i>', $url, $options);
            };
        }
    }
}

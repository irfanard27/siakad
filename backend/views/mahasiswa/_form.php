<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
 * @var yii\web\View $this
 * @var app\models\Mahasiswa $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin([
            'id' => 'Mahasiswa',
            'layout' => 'horizontal',
            'enableClientValidation' => true,
            'errorSummaryCssClass' => 'error-summary alert alert-error',
            'options' => ['enctype' => 'multipart/form-data'],
        ]
    );
    ?>

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Form</h3>
        </div>

        <div class="box-body">
            <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'nimrn')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'tanggal_lahir')->widget(kartik\date\DatePicker::className()) ?>
            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'tahun_masuk')->textInput(['maxlength' => true]) ?>
            <?= // generated by schmunk42\giiant\generators\crud\providers\RelationProvider::activeField
            $form->field($model, 'status')->dropDownList(
                ArrayHelper::map(\app\models\StatusMahasiswa::find()->all(),'status','status'),
                ['prompt'=>'Status Mahasiswa']
            ); ?>
            <?= // generated by schmunk42\giiant\generators\crud\providers\RelationProvider::activeField
            $form->field($model, 'fakultas')->dropDownList(
                \yii\helpers\ArrayHelper::map(app\models\Fakultas::find()->all(), 'id', 'nama_fakultas'),
                ['prompt' => 'Pilih Fakultas']
            ); ?>
            <?= // generated by schmunk42\giiant\generators\crud\providers\RelationProvider::activeField
            $form->field($model, 'jurusan')->dropDownList(
                \yii\helpers\ArrayHelper::map(app\models\Jurusan::find()->all(), 'id', 'nama_jurusan'),
                ['prompt' => 'Pilih Jurusan']
            ); ?>


            <?= $form->field($model, 'foto')->widget(kartik\file\FileInput::className()) ?>

            <div class="col-sm-3"></div>
            <div class="col-md-6">
                <?php
                if(!$model->isNewRecord){
                    echo Html::img("../uploads/mahasiswa/foto/".$model->foto,['class'=>'img img-bordered','width'=>'150','height'=>'auto']);
                }
                ?>
            </div>
            <br clear="all">

        </div>

        <div class="box-footer">
            <?php echo $form->errorSummary($model); ?>

            <?= Html::submitButton(
                '<span class="fa fa-check"></span> ' .
                ($model->isNewRecord ? 'Create' : 'Save'),
                [
                    'id' => 'save-' . $model->formName(),
                    'class' => 'btn btn-success'
                ]
            );
            ?>
        </div>

    </div>
    <?php ActiveForm::end(); ?>

</div>


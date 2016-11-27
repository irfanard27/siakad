<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "mata_kuliah".
 *
 * @property integer $id
 * @property integer $id_jurusan
 * @property string $mata_kuliah
 *
 * @property \app\models\Jurusan $idJurusan
 * @property string $aliasModel
 */
abstract class MataKuliah extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mata_kuliah';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jurusan', 'mata_kuliah'], 'required'],
            [['id_jurusan'], 'integer'],
            [['mata_kuliah','semester'], 'string', 'max' => 100],
            [['id_jurusan'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['id_jurusan' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_jurusan' => 'Jurusan',
            'mata_kuliah' => 'Mata Kuliah',
            'semester'=>'Semester',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJurusan()
    {
        return $this->hasOne(\app\models\Jurusan::className(), ['id' => 'id_jurusan']);
    }




}
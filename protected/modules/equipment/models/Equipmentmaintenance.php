<?php

/**
 * This is the model class for table "equipmentmaintenance".
 *
 * The followings are the available columns in table 'equipmentmaintenance':
 * @property integer $ID
 * @property integer $user_id
 * @property string $equipmentID
 * @property string $date
 * @property integer $type
 * @property integer $isdone
 * @property string $maintenancedata
 */
class Equipmentmaintenance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'equipmentmaintenance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, equipmentID, date, type, isdone', 'required'),
			array('user_id, type, isdone', 'numerical', 'integerOnly'=>true),
			array('equipmentID', 'length', 'max'=>200),
			array('maintenancedata', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, user_id, equipmentID, date, type, isdone, maintenancedata', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'user_id' => 'User',
			'equipmentID' => 'Equipment',
			'date' => 'Date',
			'type' => 'Type',
			'isdone' => 'Isdone',
			'maintenancedata' => 'Maintenancedata',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('equipmentID',$this->equipmentID,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('isdone',$this->isdone);
		$criteria->compare('maintenancedata',$this->maintenancedata,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->equipmentDb;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Equipmentmaintenance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

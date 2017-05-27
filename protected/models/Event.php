<?php

/**
 * This is the model class for table "event".
 *
 * The followings are the available columns in table 'event':
 * @property string $id
 * @property string $username
 * @property string $entry
 * @property string $time
 * @property string $date
 * @property string $re
 *
 * The followings are the available model relations:
 * @property Users $username0
 */
class Event extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entry, time ,date', 'required'),
			array('username, time', 'length', 'max'=>45),
			array('entry', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, entry, time', 'safe', 'on'=>'search'),
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
			'username0' => array(self::BELONGS_TO, 'Users', 'username'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'entry' => 'Entry',
			'time' => 'Time',
			'date' => 'Date',

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

		//$criteria->compare('id',$this->id,true);
		//$criteria->compare('username',$this->username,true);
		$criteria->compare('entry',$this->entry,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}




	// USER DEPENDENT DATA



	//This appends a condition to every query of this model
    // ie WHERE username = "$loggedInUserPrimaryKey"
    //This ensures that the logged in user can assess only his/her own files
    public function defaultScope()
    {
        return array(
            //'condition'=>'username ='.Yii::app()->user->id,
            'condition'=>'username ="'.Yii::app()->user->id.'"',
        );
    }











    /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

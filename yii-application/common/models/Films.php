<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $name
 * @property int $director_id
 * @property string $country
 * @property string $date
 *
 * @property FilmHasGenre[] $filmHasGenres
 * @property Genres[] $genres
 */
class Films extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'director_id', 'country'], 'required'],
            [['director_id'], 'integer'],
            [['date'], 'safe'],
            [['name', 'country'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'director_id' => 'Director ID',
            'country' => 'Country',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmHasGenres()
    {
        return $this->hasMany(FilmHasGenre::className(), ['film_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasMany(Genres::className(), ['id' => 'genre_id'])->viaTable('film_has_genre', ['film_id' => 'id']);
    }
}

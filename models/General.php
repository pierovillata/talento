<?php

namespace app\models;

use Yii;
use app\models\GeneralPercentil;

/**
 * This is the model class for table "general".
 *
 * @property integer $id_general
 * @property integer $cedula_atleta
 * @property integer $year
 * @property string $tipo_prueba
 * @property double $velocidad
 * @property double $lanzamiento_balon
 * @property double $carrera_distancia
 * @property double $salto_vertical
 * @property double $salto_horizontal
 * @property double $agilidad
 * @property double $flexibilidad
 * @property string $observaciones_generales
 *
 * @property Atleta $cedulaAtleta
 * @property GeneralPercentil[] $generalPercentils
 */
class General extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'general';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_atleta', 'velocidad', 'lanzamiento_balon', 'carrera_distancia', 'salto_vertical', 'salto_horizontal', 'agilidad', 'flexibilidad', 'observaciones_generales'], 'required'],
            [['cedula_atleta', 'year'], 'integer'],
            [['velocidad', 'lanzamiento_balon', 'carrera_distancia', 'salto_vertical', 'salto_horizontal', 'agilidad', 'flexibilidad'], 'number'],
            [['tipo_prueba', 'observaciones_generales'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_general' => Yii::t('app', 'Id General'),
            'cedula_atleta' => Yii::t('app', 'Cedula Atleta'),
            'year' => Yii::t('app', 'Year'),
            'tipo_prueba' => Yii::t('app', 'Tipo Prueba'),
            'velocidad' => Yii::t('app', 'Velocidad'),
            'lanzamiento_balon' => Yii::t('app', 'Lanzamiento Balon'),
            'carrera_distancia' => Yii::t('app', 'Carrera Distancia'),
            'salto_vertical' => Yii::t('app', 'Salto Vertical'),
            'salto_horizontal' => Yii::t('app', 'Salto Horizontal'),
            'agilidad' => Yii::t('app', 'Agilidad'),
            'flexibilidad' => Yii::t('app', 'Flexibilidad'),
            'observaciones_generales' => Yii::t('app', 'Observaciones Generales'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedulaAtleta()
    {
        return $this->hasOne(Atleta::className(), ['cedula_atleta' => 'cedula_atleta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneralPercentils()
    {
        return $this->hasMany(GeneralPercentil::className(), ['id_prueba_general' => 'id_general']);
    }
    
    
      public function calcularPercentil($campo,$valor,$tabla,$year,$tipo)
        {
            
        $general= new General();
                
                 
         $generaltotal=$general->find()->from($tabla)->filterWhere(['year'=>$year,'tipo_prueba'=>$tipo])->asArray()->count();
         
         
         
        // $totalmenores=$antropometrica->find()->from($tabla)->where(['<',$campo,$valor])->filterWhere(['year'=>$year,'tipo_prueba'=>$tipo])->orderBy([$campo=>SORT_DESC])->asArray()->count();
         
        
        
           $totalmenores=(new \yii\db\Query()) //cantidad total menores que peso atleta 
                   ->from($tabla)
                   ->where(['year'=>$year,'tipo_prueba'=>$tipo])
                   ->andWhere(['<',$campo,$valor])
                   ->count($campo);
            
                   
       
                    if($generaltotal==1)
               {
                   $percentil=100;
                   return $percentil;
               }else
               {
                    if($totalmenores==0)
                    {
                        $percentil=0.0;
                        return $percentil;
                     }
              
                    else
                    {  
                    $percentil=($totalmenores/$generaltotal)*100;
                    return $percentil; 
                         
                    }
                 
               }
        
         
               
           
        
        }
    
 // fin fu
    
}

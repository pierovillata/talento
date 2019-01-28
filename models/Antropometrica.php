<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "antropometrica".
 *
 * @property integer $id_antropometrica
 * @property integer $cedula_atleta
 * @property string $tipo_prueba
 * @property integer $year
 * @property double $peso
 * @property double $altura_pie
 * @property double $altura_sentado
 * @property double $indice_cormico
 * @property double $diametro_cintura
 * @property double $porcentaje_grasa
 * @property double $peso_magro
 * @property double $circunferencias_cadera
 * @property double $circunferencia_brazo
 * @property double $circunferencia_pectoral
 * @property double $abertura
 * @property double $longitud_pie
 * @property double $longitud_mano
 * @property string $somatotipo
 * @property string $observaciones_antropometricas
 *
 * @property Atleta $cedulaAtleta
 * @property AntropometricaPercentil[] $antropometricaPercentils
 */
class Antropometrica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'antropometrica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_atleta', 'peso', 'altura_pie', 'altura_sentado', 'indice_cormico', 'diametro_cintura', 'porcentaje_grasa', 'peso_magro', 'circunferencias_cadera', 'circunferencia_brazo', 'circunferencia_pectoral', 'abertura', 'longitud_pie', 'longitud_mano', 'observaciones_antropometricas'], 'required'],
            [['cedula_atleta', 'year'], 'integer'],
            [['peso', 'altura_pie', 'altura_sentado', 'indice_cormico', 'diametro_cintura', 'porcentaje_grasa', 'peso_magro', 'circunferencias_cadera', 'circunferencia_brazo', 'circunferencia_pectoral', 'abertura', 'longitud_pie', 'longitud_mano'], 'number'],
            [['tipo_prueba', 'somatotipo', 'observaciones_antropometricas'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_antropometrica' => Yii::t('app', 'Id Antropometrica'),
            'cedula_atleta' => Yii::t('app', 'Cedula Atleta'),
            'tipo_prueba' => Yii::t('app', 'Tipo Prueba'),
            'year' => Yii::t('app', 'Year'),
            'peso' => Yii::t('app', 'Peso'),
            'altura_pie' => Yii::t('app', 'Altura Pie'),
            'altura_sentado' => Yii::t('app', 'Altura Sentado'),
            'indice_cormico' => Yii::t('app', 'Indice Cormico'),
            'diametro_cintura' => Yii::t('app', 'Diametro Cintura'),
            'porcentaje_grasa' => Yii::t('app', 'Porcentaje Grasa'),
            'peso_magro' => Yii::t('app', 'Peso Magro'),
            'circunferencias_cadera' => Yii::t('app', 'Circunferencias Cadera'),
            'circunferencia_brazo' => Yii::t('app', 'Circunferencia Brazo'),
            'circunferencia_pectoral' => Yii::t('app', 'Circunferencia Pectoral'),
            'abertura' => Yii::t('app', 'Abertura'),
            'longitud_pie' => Yii::t('app', 'Longitud Pie'),
            'longitud_mano' => Yii::t('app', 'Longitud Mano'),
            'somatotipo' => Yii::t('app', 'Somatotipo'),
            'observaciones_antropometricas' => Yii::t('app', 'Observaciones Antropometricas'),
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
    public function getAntropometricaPercentils()
    {
        return $this->hasMany(AntropometricaPercentil::className(), ['id_prueba_antropometrica' => 'id_antropometrica']);
    }
    
    
    public function calcularPercentil($campo,$valor,$tabla,$year,$tipo)
        {
            
        $antropometrica= new Antropometrica();
                
        
         $antrototal=$antropometrica->find()->from($tabla)->filterWhere(['year'=>$year,'tipo_prueba'=>$tipo])->asArray()->count();
         
         $totalmenores=(new \yii\db\Query()) //cantidad total menores que peso atleta 
                   ->from($tabla)
                   ->where(['year'=>$year,'tipo_prueba'=>$tipo])
                   ->andWhere(['<',$campo,$valor])
                   ->count($campo);
            
                  
       
                    if($antrototal==1)
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
                    $percentil=($totalmenores/$antrototal)*100;
                    return $percentil; 
                         
                    }
                 
               }
                 
           
        
        }
    
}

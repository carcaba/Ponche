<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oportunidades".
 *
 * @property integer $op_id
 * @property string $fy
 * @property string $kam
 * @property string $group
 * @property string $branch
 * @property string $sales_channel
 * @property string $customer
 * @property string $short_desc
 * @property string $status
 * @property string $total_lic_revenue
 * @property string $total_readers_revenue
 * @property string $total_serv_revenue
 * @property string $total_opp_revenue
 * @property string $opp_date
 * @property string $exp_close_date
 * @property string $close_date
 */
class Oportunidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oportunidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fy', 'kam', 'group', 'branch', 'sales_channel', 'customer', 'short_desc', 'status', 'total_lic_revenue', 'total_readers_revenue', 'total_serv_revenue', 'total_opp_revenue', 'opp_date'], 'required'],
            [['fy'], 'string', 'max' => 10],
            [['kam', 'group', 'branch', 'sales_channel', 'customer', 'short_desc', 'status', 'total_lic_revenue', 'total_readers_revenue', 'total_serv_revenue', 'total_opp_revenue', 'opp_date', 'exp_close_date', 'close_date'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'op_id' => 'Op ID',
            'fy' => 'FY',
            'kam' => 'KAM',
            'group' => 'Grupo',
            'branch' => 'Delegación',
            'sales_channel' => 'Canal',
            'customer' => 'Cliente',
            'short_desc' => 'Descripción',
            'status' => 'Estado',
            'total_lic_revenue' => 'Licencias (€)',
            'total_readers_revenue' => 'Lectores/Stickers (€)',
            'total_serv_revenue' => 'Servicios(€)',
            'total_opp_revenue' => 'Total (€)',
            'opp_date' => 'Fecha',
            'exp_close_date' => 'Cierre Previsto',
            'close_date' => 'Fecha Cierre',
        ];
    }
}

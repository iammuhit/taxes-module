<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Anomaly\TaxesModule\Tax\TaxModel;

/**
 * Class AnomalyModuleTaxesCreateTaxesFields
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleTaxesCreateTaxesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'        => 'anomaly.field_type.text',
        'country'     => 'anomaly.field_type.country',
        'state'       => 'anomaly.field_type.state',
        'postal_code' => 'anomaly.field_type.text',
        'rate'        => [
            'type'   => 'anomaly.field_type.decimal',
            'config' => [
                'decimals' => 3,
            ]
        ],
        'description' => 'anomaly.field_type.textarea',
        'inclusive'   => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'mode'  => 'checkbox',
                'label' => 'anomaly.module.taxes::field.inclusive.option',
            ]
        ],
        'compound'    => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'mode'  => 'checkbox',
                'label' => 'anomaly.module.taxes::field.compound.option',
            ]
        ],
        'tax'         => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => TaxModel::class,
            ]
        ],
    ];

}
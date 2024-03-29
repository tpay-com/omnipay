<?php

namespace Omnipay\Tpay\Dictionaries\Payments;

use Omnipay\Tpay\Dictionaries\FieldsConfigDictionary;

class BlikFieldsDictionary
{
    /** List of fields available in response for blik payment */
    const ALIAS_RESPONSE_FIELDS = [
        'id' => [
            FieldsConfigDictionary::REQUIRED => true,
            FieldsConfigDictionary::TYPE => FieldsConfigDictionary::INT,
            FieldsConfigDictionary::VALIDATION => [FieldsConfigDictionary::INT],
        ],
        'event' => [
            FieldsConfigDictionary::REQUIRED => true,
            FieldsConfigDictionary::TYPE => FieldsConfigDictionary::STRING,
            FieldsConfigDictionary::VALIDATION => [FieldsConfigDictionary::STRING],
        ],
        'msg_value' => [
            FieldsConfigDictionary::REQUIRED => true,
            FieldsConfigDictionary::TYPE => FieldsConfigDictionary::ARR,
            FieldsConfigDictionary::VALIDATION => [FieldsConfigDictionary::ARR],
        ],
        'md5sum' => [
            FieldsConfigDictionary::REQUIRED => true,
            FieldsConfigDictionary::TYPE => FieldsConfigDictionary::STRING,
            FieldsConfigDictionary::VALIDATION => [FieldsConfigDictionary::STRING],
        ],
    ];

    /** List of supported request fields for blik payment */
    const REQUEST_FIELDS = [
        'code' => [
            FieldsConfigDictionary::REQUIRED => true,
            FieldsConfigDictionary::VALIDATION => [FieldsConfigDictionary::FLOAT, 'maxlength_6', 'minlength_6'],
            FieldsConfigDictionary::FILTER => FieldsConfigDictionary::NUMBERS,
        ],
        'title' => [
            FieldsConfigDictionary::REQUIRED => true,
            FieldsConfigDictionary::VALIDATION => [FieldsConfigDictionary::STRING],
            FieldsConfigDictionary::FILTER => FieldsConfigDictionary::TEXT,
        ],
        'alias' => [
            FieldsConfigDictionary::REQUIRED => true,
            FieldsConfigDictionary::VALIDATION => [FieldsConfigDictionary::ARR],
        ],
    ];
}

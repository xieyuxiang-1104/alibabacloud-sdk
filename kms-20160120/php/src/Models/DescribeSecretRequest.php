<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DescribeSecretRequest extends Model
{
    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;

    /**
     * @description FetchTags
     *
     * @var string
     */
    public $fetchTags;
    protected $_name = [
        'secretName' => 'SecretName',
        'fetchTags'  => 'FetchTags',
    ];

    public function validate()
    {
        Model::validateRequired('secretName', $this->secretName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->fetchTags) {
            $res['FetchTags'] = $this->fetchTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['FetchTags'])) {
            $model->fetchTags = $map['FetchTags'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionResponse\keyVersion;
use AlibabaCloud\Tea\Model;

class CreateKeyVersionResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description KeyVersion
     *
     * @var keyVersion
     */
    public $keyVersion;
    protected $_name = [
        'requestId'  => 'RequestId',
        'keyVersion' => 'KeyVersion',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('keyVersion', $this->keyVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->keyVersion) {
            $res['KeyVersion'] = null !== $this->keyVersion ? $this->keyVersion->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeyVersionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['KeyVersion'])) {
            $model->keyVersion = keyVersion::fromMap($map['KeyVersion']);
        }

        return $model;
    }
}

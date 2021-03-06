<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers\environmentVars\valueFrom;
use AlibabaCloud\Tea\Model;

class environmentVars extends Model
{
    /**
     * @description key
     *
     * @var string
     */
    public $key;

    /**
     * @description value
     *
     * @var string
     */
    public $value;

    /**
     * @description valueFrom
     *
     * @var valueFrom
     */
    public $valueFrom;
    protected $_name = [
        'key'       => 'Key',
        'value'     => 'Value',
        'valueFrom' => 'ValueFrom',
    ];

    public function validate()
    {
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('valueFrom', $this->valueFrom, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueFrom) {
            $res['ValueFrom'] = null !== $this->valueFrom ? $this->valueFrom->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return environmentVars
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueFrom'])) {
            $model->valueFrom = valueFrom::fromMap($map['ValueFrom']);
        }

        return $model;
    }
}

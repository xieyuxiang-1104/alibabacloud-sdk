<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClustersQuery extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description clusterType
     *
     * @var string
     */
    public $clusterType;
    protected $_name = [
        'name'        => 'name',
        'clusterType' => 'clusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClustersQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }

        return $model;
    }
}

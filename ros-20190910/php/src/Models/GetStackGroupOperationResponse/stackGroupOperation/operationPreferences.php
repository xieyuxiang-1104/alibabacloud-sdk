<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponse\stackGroupOperation;

use AlibabaCloud\Tea\Model;

class operationPreferences extends Model
{
    /**
     * @var int
     */
    public $failureToleranceCount;

    /**
     * @var int
     */
    public $failureTolerancePercentage;

    /**
     * @var int
     */
    public $maxConcurrentCount;

    /**
     * @var int
     */
    public $maxConcurrentPercentage;

    /**
     * @var array
     */
    public $regionIdsOrder;
    protected $_name = [
        'failureToleranceCount'      => 'FailureToleranceCount',
        'failureTolerancePercentage' => 'FailureTolerancePercentage',
        'maxConcurrentCount'         => 'MaxConcurrentCount',
        'maxConcurrentPercentage'    => 'MaxConcurrentPercentage',
        'regionIdsOrder'             => 'RegionIdsOrder',
    ];

    public function validate()
    {
        Model::validateRequired('failureToleranceCount', $this->failureToleranceCount, true);
        Model::validateRequired('failureTolerancePercentage', $this->failureTolerancePercentage, true);
        Model::validateRequired('maxConcurrentCount', $this->maxConcurrentCount, true);
        Model::validateRequired('maxConcurrentPercentage', $this->maxConcurrentPercentage, true);
        Model::validateRequired('regionIdsOrder', $this->regionIdsOrder, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureToleranceCount) {
            $res['FailureToleranceCount'] = $this->failureToleranceCount;
        }
        if (null !== $this->failureTolerancePercentage) {
            $res['FailureTolerancePercentage'] = $this->failureTolerancePercentage;
        }
        if (null !== $this->maxConcurrentCount) {
            $res['MaxConcurrentCount'] = $this->maxConcurrentCount;
        }
        if (null !== $this->maxConcurrentPercentage) {
            $res['MaxConcurrentPercentage'] = $this->maxConcurrentPercentage;
        }
        if (null !== $this->regionIdsOrder) {
            $res['RegionIdsOrder'] = $this->regionIdsOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationPreferences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailureToleranceCount'])) {
            $model->failureToleranceCount = $map['FailureToleranceCount'];
        }
        if (isset($map['FailureTolerancePercentage'])) {
            $model->failureTolerancePercentage = $map['FailureTolerancePercentage'];
        }
        if (isset($map['MaxConcurrentCount'])) {
            $model->maxConcurrentCount = $map['MaxConcurrentCount'];
        }
        if (isset($map['MaxConcurrentPercentage'])) {
            $model->maxConcurrentPercentage = $map['MaxConcurrentPercentage'];
        }
        if (isset($map['RegionIdsOrder'])) {
            if (!empty($map['RegionIdsOrder'])) {
                $model->regionIdsOrder = $map['RegionIdsOrder'];
            }
        }

        return $model;
    }
}

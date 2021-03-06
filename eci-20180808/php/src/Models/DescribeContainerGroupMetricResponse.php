<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse\records;
use AlibabaCloud\Tea\Model;

class DescribeContainerGroupMetricResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.containerGroupId
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description data.podStats
     *
     * @var array
     */
    public $records;
    protected $_name = [
        'requestId'        => 'RequestId',
        'containerGroupId' => 'ContainerGroupId',
        'records'          => 'Records',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
        Model::validateRequired('records', $this->records, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->records) {
            $res['Records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerGroupMetricResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

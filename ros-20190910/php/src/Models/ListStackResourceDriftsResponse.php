<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponse\resourceDrifts;
use AlibabaCloud\Tea\Model;

class ListStackResourceDriftsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var array
     */
    public $resourceDrifts;
    protected $_name = [
        'requestId'      => 'RequestId',
        'nextToken'      => 'NextToken',
        'resourceDrifts' => 'ResourceDrifts',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('resourceDrifts', $this->resourceDrifts, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceDrifts) {
            $res['ResourceDrifts'] = [];
            if (null !== $this->resourceDrifts && \is_array($this->resourceDrifts)) {
                $n = 0;
                foreach ($this->resourceDrifts as $item) {
                    $res['ResourceDrifts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackResourceDriftsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceDrifts'])) {
            if (!empty($map['ResourceDrifts'])) {
                $model->resourceDrifts = [];
                $n                     = 0;
                foreach ($map['ResourceDrifts'] as $item) {
                    $model->resourceDrifts[$n++] = null !== $item ? resourceDrifts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

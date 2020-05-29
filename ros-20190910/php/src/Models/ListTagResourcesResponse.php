<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListTagResourcesResponse\tagResources;
use AlibabaCloud\Tea\Model;

class ListTagResourcesResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description NextToken
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description TagResources
     *
     * @var array
     */
    public $tagResources;
    protected $_name = [
        'requestId'    => 'RequestId',
        'nextToken'    => 'NextToken',
        'tagResources' => 'TagResources',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('tagResources', $this->tagResources, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['RequestId']    = $this->requestId;
        $res['NextToken']    = $this->nextToken;
        $res['TagResources'] = [];
        if (null !== $this->tagResources && \is_array($this->tagResources)) {
            $n = 0;
            foreach ($this->tagResources as $item) {
                $res['TagResources'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesResponse
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
        if (isset($map['TagResources'])) {
            if (!empty($map['TagResources'])) {
                $model->tagResources = [];
                $n                   = 0;
                foreach ($map['TagResources'] as $item) {
                    $model->tagResources[$n++] = null !== $item ? tagResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
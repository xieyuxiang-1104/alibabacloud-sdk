<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeBgpGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $bgpGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'routerId'   => 'RouterId',
        'bgpGroupId' => 'BgpGroupId',
        'regionId'   => 'RegionId',
        'isDefault'  => 'IsDefault',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBgpGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesResponse\ipv6EgressOnlyRules;
use AlibabaCloud\Tea\Model;

class DescribeIpv6EgressOnlyRulesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var ipv6EgressOnlyRules
     */
    public $ipv6EgressOnlyRules;
    protected $_name = [
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'ipv6EgressOnlyRules' => 'Ipv6EgressOnlyRules',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('ipv6EgressOnlyRules', $this->ipv6EgressOnlyRules, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ipv6EgressOnlyRules) {
            $res['Ipv6EgressOnlyRules'] = null !== $this->ipv6EgressOnlyRules ? $this->ipv6EgressOnlyRules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpv6EgressOnlyRulesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Ipv6EgressOnlyRules'])) {
            $model->ipv6EgressOnlyRules = ipv6EgressOnlyRules::fromMap($map['Ipv6EgressOnlyRules']);
        }

        return $model;
    }
}

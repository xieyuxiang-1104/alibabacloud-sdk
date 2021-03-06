<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerSpec;

use AlibabaCloud\Tea\Model;

class containerMemory extends Model
{
    /**
     * @description limit
     *
     * @var int
     */
    public $limit;

    /**
     * @description reservation
     *
     * @var int
     */
    public $reservation;

    /**
     * @description swapLimit
     *
     * @var int
     */
    public $swapLimit;
    protected $_name = [
        'limit'       => 'Limit',
        'reservation' => 'Reservation',
        'swapLimit'   => 'SwapLimit',
    ];

    public function validate()
    {
        Model::validateRequired('limit', $this->limit, true);
        Model::validateRequired('reservation', $this->reservation, true);
        Model::validateRequired('swapLimit', $this->swapLimit, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->reservation) {
            $res['Reservation'] = $this->reservation;
        }
        if (null !== $this->swapLimit) {
            $res['SwapLimit'] = $this->swapLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerMemory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Reservation'])) {
            $model->reservation = $map['Reservation'];
        }
        if (isset($map['SwapLimit'])) {
            $model->swapLimit = $map['SwapLimit'];
        }

        return $model;
    }
}

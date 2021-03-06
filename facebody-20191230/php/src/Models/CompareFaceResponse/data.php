<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var array
     */
    public $thresholds;

    /**
     * @var array
     */
    public $rectAList;

    /**
     * @var array
     */
    public $rectBList;
    protected $_name = [
        'confidence' => 'Confidence',
        'thresholds' => 'Thresholds',
        'rectAList'  => 'RectAList',
        'rectBList'  => 'RectBList',
    ];

    public function validate()
    {
        Model::validateRequired('confidence', $this->confidence, true);
        Model::validateRequired('thresholds', $this->thresholds, true);
        Model::validateRequired('rectAList', $this->rectAList, true);
        Model::validateRequired('rectBList', $this->rectBList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->thresholds) {
            $res['Thresholds'] = $this->thresholds;
        }
        if (null !== $this->rectAList) {
            $res['RectAList'] = $this->rectAList;
        }
        if (null !== $this->rectBList) {
            $res['RectBList'] = $this->rectBList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Thresholds'])) {
            if (!empty($map['Thresholds'])) {
                $model->thresholds = $map['Thresholds'];
            }
        }
        if (isset($map['RectAList'])) {
            if (!empty($map['RectAList'])) {
                $model->rectAList = $map['RectAList'];
            }
        }
        if (isset($map['RectBList'])) {
            if (!empty($map['RectBList'])) {
                $model->rectBList = $map['RectBList'];
            }
        }

        return $model;
    }
}

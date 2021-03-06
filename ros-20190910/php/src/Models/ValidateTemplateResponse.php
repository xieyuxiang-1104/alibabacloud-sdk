<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ValidateTemplateResponse extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var array
     */
    public $parameters;
    protected $_name = [
        'description' => 'Description',
        'requestId'   => 'RequestId',
        'parameters'  => 'Parameters',
    ];

    public function validate()
    {
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('parameters', $this->parameters, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateTemplateResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = $map['Parameters'];
            }
        }

        return $model;
    }
}

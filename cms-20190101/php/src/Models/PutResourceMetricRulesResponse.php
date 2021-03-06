<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponse\failedListResult;
use AlibabaCloud\Tea\Model;

class PutResourceMetricRulesResponse extends Model
{
    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description msg
     *
     * @var string
     */
    public $message;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description datapoints
     *
     * @var failedListResult
     */
    public $failedListResult;
    protected $_name = [
        'success'          => 'Success',
        'code'             => 'Code',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'failedListResult' => 'FailedListResult',
    ];

    public function validate()
    {
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('failedListResult', $this->failedListResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->failedListResult) {
            $res['FailedListResult'] = null !== $this->failedListResult ? $this->failedListResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutResourceMetricRulesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FailedListResult'])) {
            $model->failedListResult = failedListResult::fromMap($map['FailedListResult']);
        }

        return $model;
    }
}

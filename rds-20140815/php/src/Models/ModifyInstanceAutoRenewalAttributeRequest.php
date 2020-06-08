<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceAutoRenewalAttributeRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'clientToken' => 'ClientToken',
        'ownerAccount' => 'OwnerAccount',
        'DBInstanceId' => 'DBInstanceId',
        'duration' => 'Duration',
        'autoRenew' => 'AutoRenew',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['ClientToken'] = $this->clientToken;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['Duration'] = $this->duration;
        $res['AutoRenew'] = $this->autoRenew;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyInstanceAutoRenewalAttributeRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['AutoRenew'])){
            $model->autoRenew = $map['AutoRenew'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description token
     * @var string
     */
    public $clientToken;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description duration
     * @var string
     */
    public $duration;

    /**
     * @description autoRenew
     * @var string
     */
    public $autoRenew;

}
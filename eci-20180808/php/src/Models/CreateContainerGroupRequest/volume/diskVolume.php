<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

class diskVolume extends Model
{
    /**
     * @description diskVolumeDiskId
     *
     * @var string
     */
    public $diskId;

    /**
     * @description diskVolumeFsType
     *
     * @var string
     */
    public $fsType;

    /**
     * @description diskVolumeDiskSize
     *
     * @var int
     */
    public $diskSize;
    protected $_name = [
        'diskId'   => 'DiskId',
        'fsType'   => 'FsType',
        'diskSize' => 'DiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->fsType) {
            $res['FsType'] = $this->fsType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['FsType'])) {
            $model->fsType = $map['FsType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        return $model;
    }
}

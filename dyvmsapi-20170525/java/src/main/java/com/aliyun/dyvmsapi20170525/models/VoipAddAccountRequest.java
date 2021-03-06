// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.dyvmsapi20170525.models;

import com.aliyun.tea.*;

public class VoipAddAccountRequest extends TeaModel {
    @NameInMap("AccessKeyId")
    public String accessKeyId;

    @NameInMap("OwnerId")
    public Long ownerId;

    @NameInMap("ResourceOwnerAccount")
    public String resourceOwnerAccount;

    @NameInMap("ResourceOwnerId")
    public Long resourceOwnerId;

    @NameInMap("DeviceId")
    @Validation(required = true)
    public String deviceId;

    public static VoipAddAccountRequest build(java.util.Map<String, ?> map) throws Exception {
        VoipAddAccountRequest self = new VoipAddAccountRequest();
        return TeaModel.build(map, self);
    }

}

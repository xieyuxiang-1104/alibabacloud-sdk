// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.vpc20160428.models;

import com.aliyun.tea.*;

public class CopyNetworkAclEntriesResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static CopyNetworkAclEntriesResponse build(java.util.Map<String, ?> map) throws Exception {
        CopyNetworkAclEntriesResponse self = new CopyNetworkAclEntriesResponse();
        return TeaModel.build(map, self);
    }

}

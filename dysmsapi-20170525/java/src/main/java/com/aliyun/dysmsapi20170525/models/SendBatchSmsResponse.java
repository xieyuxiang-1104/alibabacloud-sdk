// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.dysmsapi20170525.models;

import com.aliyun.tea.*;

public class SendBatchSmsResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("BizId")
    @Validation(required = true)
    public String bizId;

    @NameInMap("Code")
    @Validation(required = true)
    public String code;

    @NameInMap("Message")
    @Validation(required = true)
    public String message;

    public static SendBatchSmsResponse build(java.util.Map<String, ?> map) throws Exception {
        SendBatchSmsResponse self = new SendBatchSmsResponse();
        return TeaModel.build(map, self);
    }

}

// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DeleteClusterResponse extends TeaModel {
    @NameInMap("headers")
    @Validation(required = true)
    public java.util.Map<String, String> headers;

    @NameInMap("body")
    @Validation(required = true)
    public DeleteClusterResponseBody body;

    public static DeleteClusterResponse build(java.util.Map<String, ?> map) throws Exception {
        DeleteClusterResponse self = new DeleteClusterResponse();
        return TeaModel.build(map, self);
    }

}

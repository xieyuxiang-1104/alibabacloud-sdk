// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ros20190910.models;

import com.aliyun.tea.*;

public class GetResourceTypeRequest extends TeaModel {
    @NameInMap("ResourceType")
    @Validation(required = true)
    public String resourceType;

    public static GetResourceTypeRequest build(java.util.Map<String, ?> map) throws Exception {
        GetResourceTypeRequest self = new GetResourceTypeRequest();
        return TeaModel.build(map, self);
    }

}

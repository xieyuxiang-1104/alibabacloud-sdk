// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imageseg.models;

import com.aliyun.tea.*;

public class SegmentBodyAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    public static SegmentBodyAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        SegmentBodyAdvanceRequest self = new SegmentBodyAdvanceRequest();
        return TeaModel.build(map, self);
    }

}

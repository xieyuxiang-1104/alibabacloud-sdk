// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class AddDomainGroupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public string GroupId { get; set; }

        [NameInMap("GroupName")]
        [Validation(Required=true)]
        public string GroupName { get; set; }

    }

}

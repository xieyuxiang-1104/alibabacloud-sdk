// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CancelAutoSnapshotPolicyRequest : TeaModel {
        [NameInMap("regionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("diskIds")]
        [Validation(Required=true)]
        public string DiskIds { get; set; }

    }

}

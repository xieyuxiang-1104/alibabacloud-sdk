// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class ModifyReadonlyInstanceDelayReplicationTimeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("ReadSQLReplicationTime")]
        [Validation(Required=true)]
        public string ReadSQLReplicationTime { get; set; }

        [NameInMap("TaskId")]
        [Validation(Required=true)]
        public string TaskId { get; set; }

    }

}

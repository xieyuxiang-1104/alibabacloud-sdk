// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeSnapshotPackageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("SnapshotPackages")]
        [Validation(Required=true)]
        public DescribeSnapshotPackageResponseSnapshotPackages SnapshotPackages { get; set; }
        public class DescribeSnapshotPackageResponseSnapshotPackages : TeaModel {
            [NameInMap("SnapshotPackage")]
            [Validation(Required=true)]
            public List<DescribeSnapshotPackageResponseSnapshotPackagesSnapshotPackage> SnapshotPackage { get; set; }
            public class DescribeSnapshotPackageResponseSnapshotPackagesSnapshotPackage : TeaModel {
                    public string StartTime { get; set; }
                    public string EndTime { get; set; }
                    public long InitCapacity { get; set; }
                    public string DisplayName { get; set; }
            }
        };

    }

}

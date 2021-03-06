// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstancesForCloneResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeDBInstancesForCloneResponseItems Items { get; set; }
        public class DescribeDBInstancesForCloneResponseItems : TeaModel {
            [NameInMap("DBInstance")]
            [Validation(Required=true)]
            public List<DescribeDBInstancesForCloneResponseItemsDBInstance> DBInstance { get; set; }
            public class DescribeDBInstancesForCloneResponseItemsDBInstance : TeaModel {
                    public int? InsId { get; set; }
                    public string DBInstanceId { get; set; }
                    public string DBInstanceDescription { get; set; }
                    public string PayType { get; set; }
                    public string DBInstanceType { get; set; }
                    public string RegionId { get; set; }
                    public string ExpireTime { get; set; }
                    public string DestroyTime { get; set; }
                    public string DBInstanceStatus { get; set; }
                    public string Engine { get; set; }
                    public string DBInstanceNetType { get; set; }
                    public string ConnectionMode { get; set; }
                    public string LockMode { get; set; }
                    public string Category { get; set; }
                    public string DBInstanceStorageType { get; set; }
                    public string DBInstanceClass { get; set; }
                    public string InstanceNetworkType { get; set; }
                    public string VpcCloudInstanceId { get; set; }
                    public string LockReason { get; set; }
                    public string ZoneId { get; set; }
                    public bool? MutriORsignle { get; set; }
                    public string CreateTime { get; set; }
                    public string EngineVersion { get; set; }
                    public string GuardDBInstanceId { get; set; }
                    public string TempDBInstanceId { get; set; }
                    public string MasterInstanceId { get; set; }
                    public string VpcId { get; set; }
                    public string VSwitchId { get; set; }
                    public string ReplicateId { get; set; }
                    public string ResourceGroupId { get; set; }
                    public DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIds ReadOnlyDBInstanceIds { get; set; }
                    public class DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIds : TeaModel {
                        [NameInMap("ReadOnlyDBInstanceId")]
                        [Validation(Required=true)]
                        public List<DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId> ReadOnlyDBInstanceId { get; set; }
                        public class DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId : TeaModel {
                            [NameInMap("DBInstanceId")]
                            [Validation(Required=true)]
                            public string DBInstanceId { get; set; }

                        }

                    }
            }
        };

    }

}

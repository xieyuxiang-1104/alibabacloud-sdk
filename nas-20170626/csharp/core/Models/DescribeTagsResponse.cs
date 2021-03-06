// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeTagsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("Tags")]
        [Validation(Required=true)]
        public DescribeTagsResponseTags Tags { get; set; }
        public class DescribeTagsResponseTags : TeaModel {
            [NameInMap("Tag")]
            [Validation(Required=true)]
            public List<DescribeTagsResponseTagsTag> Tag { get; set; }
            public class DescribeTagsResponseTagsTag : TeaModel {
                    public string Key { get; set; }
                    public string Value { get; set; }
                    public DescribeTagsResponseTagsTagFileSystemIds FileSystemIds { get; set; }
                    public class DescribeTagsResponseTagsTagFileSystemIds : TeaModel {
                        [NameInMap("FileSystemId")]
                        [Validation(Required=true)]
                        public List<string> FileSystemId { get; set; }

                    }
            }
        };

    }

}

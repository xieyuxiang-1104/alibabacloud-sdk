// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class AsymmetricSignResponse : TeaModel {
        [NameInMap("Value")]
        [Validation(Required=true)]
        public string Value { get; set; }

        [NameInMap("KeyId")]
        [Validation(Required=true)]
        public string KeyId { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("KeyVersionId")]
        [Validation(Required=true)]
        public string KeyVersionId { get; set; }

    }

}

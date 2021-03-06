// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Goodstech20191230.Models
{
    public class RecognizeFurnitureSpuRequest : TeaModel {
        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

        [NameInMap("XLength")]
        [Validation(Required=true)]
        public float? XLength { get; set; }

        [NameInMap("YLength")]
        [Validation(Required=true)]
        public float? YLength { get; set; }

        [NameInMap("ZLength")]
        [Validation(Required=true)]
        public float? ZLength { get; set; }

    }

}

// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class GetMultipleTraceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MultiCallChainInfos")]
        [Validation(Required=true)]
        public List<GetMultipleTraceResponseMultiCallChainInfos> MultiCallChainInfos { get; set; }
        public class GetMultipleTraceResponseMultiCallChainInfos : TeaModel {
            [NameInMap("TraceID")]
            [Validation(Required=true)]
            public string TraceID { get; set; }

            [NameInMap("Spans")]
            [Validation(Required=true)]
            public List<GetMultipleTraceResponseMultiCallChainInfosSpans> Spans { get; set; }
            public class GetMultipleTraceResponseMultiCallChainInfosSpans : TeaModel {
                [NameInMap("TraceID")]
                [Validation(Required=true)]
                public string TraceID { get; set; }

                [NameInMap("OperationName")]
                [Validation(Required=true)]
                public string OperationName { get; set; }

                [NameInMap("Duration")]
                [Validation(Required=true)]
                public long Duration { get; set; }

                [NameInMap("ServiceName")]
                [Validation(Required=true)]
                public string ServiceName { get; set; }

                [NameInMap("ServiceIp")]
                [Validation(Required=true)]
                public string ServiceIp { get; set; }

                [NameInMap("Timestamp")]
                [Validation(Required=true)]
                public long Timestamp { get; set; }

                [NameInMap("RpcId")]
                [Validation(Required=true)]
                public string RpcId { get; set; }

                [NameInMap("ResultCode")]
                [Validation(Required=true)]
                public string ResultCode { get; set; }

                [NameInMap("HaveStack")]
                [Validation(Required=true)]
                public bool? HaveStack { get; set; }

                [NameInMap("RpcType")]
                [Validation(Required=true)]
                public int? RpcType { get; set; }

                [NameInMap("TagEntryList")]
                [Validation(Required=true)]
                public List<GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList> TagEntryList { get; set; }
                public class GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList : TeaModel {
                    [NameInMap("Key")]
                    [Validation(Required=true)]
                    public string Key { get; set; }

                    [NameInMap("Value")]
                    [Validation(Required=true)]
                    public string Value { get; set; }

                }

                [NameInMap("LogEventList")]
                [Validation(Required=true)]
                public List<GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList> LogEventList { get; set; }
                public class GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList : TeaModel {
                    [NameInMap("Timestamp")]
                    [Validation(Required=true)]
                    public long Timestamp { get; set; }

                    [NameInMap("TagEntryList")]
                    [Validation(Required=true)]
                    public List<GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList> TagEntryList { get; set; }
                    public class GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList : TeaModel {
                        [NameInMap("Key")]
                        [Validation(Required=true)]
                        public string Key { get; set; }

                        [NameInMap("Value")]
                        [Validation(Required=true)]
                        public string Value { get; set; }

                    }

                }

            }

        }

    }

}

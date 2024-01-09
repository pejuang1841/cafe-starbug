<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      body{
        background-image: url('https://cdn.discordapp.com/attachments/756362680138203237/1194310621076918332/coffe_shop.jpg?ex=65afe371&is=659d6e71&hm=f86343974b273dc1cbb6796a910a47765bcee94a5b56e13e73d1753cba1cd803&');
        background-size: cover;
      }
    </style>
    <title>HoMe</title>
  </head>
  <body>
  <div class="d-flex flex-row">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark d-inline-block" style="width: 280px; height: 100vh;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">StarBug-cafe</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Home
          </a>
        </li>
        <li>
          <a href="/form-pesanan" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Form Pesanan
          </a>
        </li>
        <li>
          <a href="/form-pegawai" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Form Pegawai
          </a>
        </li>
        <li>
          <a href="/form-pelanggan" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
            Form Pelanggan
          </a>
        </li>
        <li>
          <a href="/form-menu" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Form Menu
          </a>
        </li>
        <br>
        <br>
        <li>
          <a href="/show-menu" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Show Menu
          </a>
        </li>
        <li>
          <a href="/show-pesanan" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            show pesanan
          </a>
        </li>
        <li>
          <a href="/show-pelanggan" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Show Pelanggan
          </a>
        </li>
        <li>
          <a href="/show-pegawai" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Show Pegawai
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="container headline d-flex justify-content-center">
        <h1 class="text-white mt-5">Starbug Cafe</h1>
      </div>
      <div class="isi">
        <!-- isi disini untuk isi dari dashboardnya -->
      </div>
    </div>
  </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>


<!-- 
Response status code does not indicate success: RequestTimeout (408); Substatus: 0; ActivityId: 7e12b562-8652-4c44-abfb-da0127cc159c; Reason: (Message: Request timed out. More info: https://aka.ms/cosmosdb-tsg-request-timeout
ActivityId: 7e12b562-8652-4c44-abfb-da0127cc159c, Request URI: /apps/f9da4d09-1100-4c10-90a1-6fc21fe78005/services/54321fb7-c46a-4e37-996f-ecab4a839820/partitions/8dc6a7a0-a367-4d30-8c0e-75dd4f6adb37/replicas/133417433591298516p,
RequestStats: Microsoft.Azure.Cosmos.Tracing.TraceData.ClientSideRequestStatisticsTraceDatum, SDK: Windows/10.0.14393 cosmos-netstandard-sdk/3.29.4);; Diagnostics:{"Summary":{"DirectCalls":{"(408, 0)":1}},"name":"CreateItemAsync",
"id":"fd231d27-c568-4466-b22a-d755d0a935e4","start time":"11:16:45:886","duration in milliseconds":10972.944,"data":{"Client Configuration":{"Client Created Time Utc":"2023-12-31T22:38:02.3983286Z","MachineId":"hashedMachineName:a7dc32cb-9ce2-b7fe-9dbf-b2eeef249272",
"NumberOfClientsCreated":2,"NumberOfActiveClients":2,"ConnectionMode":"Direct","User Agent":"cosmos-netstandard-sdk/3.31.2|1|X86|Microsoft Windows 10.0.14393|.NET 6.0.24|N|","ConnectionConfig":{"gw":"(cps:50, urto:10, p:False, httpf: False)",
"rntbd":"(cto: 5, icto: -1, mrpc: 30, mcpe: 65535, erd: True, pr: ReuseUnicastPort)","other":"(ed:False, be:False)"},"ConsistencyConfig":"(consistency: NotSet, prgns:[], apprgn: )","ProcessorCount":2}},
"children":[{"name":"ItemSerialize","id":"01924028-6967-4baf-b42c-0520eb2787ed","start time":"11:16:45:886","duration in milliseconds":0.0501},{"name":"Get PkValue From Stream","id":"785bab9b-8fbe-43a6-94bb-49f9836357a3","start time":"11:16:45:886",
"duration in milliseconds":0.0692,"children":[{"name":"Get Collection Cache","id":"5cdde81f-3ddb-4f86-afa4-3b3768a2e30d","start time":"11:16:45:886","duration in milliseconds":0.0012}]},
{"name":"Microsoft.Azure.Cosmos.Handlers.RequestInvokerHandler","id":"bc74d55f-0701-4193-9bfd-4dbd35f766e0","start time":"11:16:45:886","duration in milliseconds":10972.5309,"children":[{"name":"Microsoft.Azure.Cosmos.Handlers.DiagnosticsHandler","id":"1d24f981-f91c-472f-a548-0dbd113d3f4d","start time":"11:16:45:886","duration in milliseconds":10972.511,"data":{"System Info":{"systemHistory":[{"dateUtc":"2024-01-02T23:15:57.7583863Z","cpu":4.922,"memory":4820292.000,"threadInfo":{"isThreadStarving":"False","threadWaitIntervalInMs":0.0587,"availableThreads":1022,"minThreads":12,"maxThreads":1023},"numberOfOpenTcpConnection":25},{"dateUtc":"2024-01-02T23:16:07.7598461Z","cpu":5.460,"memory":4784520.000,"threadInfo":{"isThreadStarving":"False","threadWaitIntervalInMs":0.0847,"availableThreads":1022,"minThreads":12,"maxThreads":1023},"numberOfOpenTcpConnection":25},{"dateUtc":"2024-01-02T23:16:17.7755577Z","cpu":2.964,"memory":4791856.000,"threadInfo":{"isThreadStarving":"False","threadWaitIntervalInMs":0.1121,"availableThreads":1022,"minThreads":12,"maxThreads":1023},"numberOfOpenTcpConnection":25},{"dateUtc":"2024-01-02T23:16:27.7892326Z","cpu":0.859,"memory":4791972.000,"threadInfo":{"isThreadStarving":"False","threadWaitIntervalInMs":0.0893,"availableThreads":1022,"minThreads":12,"maxThreads":1023},"numberOfOpenTcpConnection":25},{"dateUtc":"2024-01-02T23:16:37.8036668Z","cpu":2.808,"memory":4791676.000,"threadInfo":{"isThreadStarving":"False","threadWaitIntervalInMs":0.0831,"availableThreads":1022,"minThreads":12,"maxThreads":1023},"numberOfOpenTcpConnection":25},{"dateUtc":"2024-01-02T23:16:47.8051305Z","cpu":2.656,"memory":4794512.000,"threadInfo":{"isThreadStarving":"False","threadWaitIntervalInMs":0.0165,"availableThreads":1022,"minThreads":12,"maxThreads":1023},"numberOfOpenTcpConnection":25}]}},"children":[{"name":"Microsoft.Azure.Cosmos.Handlers.RetryHandler","id":"1adcfca0-3f70-4bff-ad0d-5e28b36db984","start time":"11:16:45:886","duration in milliseconds":10972.503,"children":[{"name":"Microsoft.Azure.Cosmos.Handlers.RouterHandler","id":"94ba3c5a-565a-4933-aab0-053d599054a9","start time":"11:16:45:886","duration in milliseconds":10972.4791,"children":[{"name":"Microsoft.Azure.Cosmos.Handlers.TransportHandler","id":"ed9260ef-b744-46de-afcb-546d315ce9d4","start time":"11:16:45:886","duration in milliseconds":10972.4765,"children":[{"name":"Microsoft.Azure.Documents.ServerStoreModel Transport Request","id":"deccf975-0321-45e5-876b-357f28db8d14","start time":"11:16:45:886","duration in milliseconds":10970.7335,"data":{"Client Side Request Stats":{"Id":"AggregatedClientSideRequestStatistics","ContactedReplicas":[{"Count":1,"Uri":"rntbd://cdb-ms-prod-southeastasia1-be31.documents.azure.com:14356/apps/f9da4d09-1100-4c10-90a1-6fc21fe78005/services/54321fb7-c46a-4e37-996f-ecab4a839820/partitions/8dc6a7a0-a367-4d30-8c0e-75dd4f6adb37/replicas/133417433591298516p"},{"Count":1,"Uri":"rntbd://cdb-ms-prod-southeastasia1-be31.documents.azure.com:14037/apps/f9da4d09-1100-4c10-90a1-6fc21fe78005/services/54321fb7-c46a-4e37-996f-ecab4a839820/partitions/8dc6a7a0-a367-4d30-8c0e-75dd4f6adb37/replicas/133417259460081230s"},{"Count":1,"Uri":"rntbd://cdb-ms-prod-southeastasia1-be31.documents.azure.com:14054/apps/f9da4d09-1100-4c10-90a1-6fc21fe78005/services/54321fb7-c46a-4e37-996f-ecab4a839820/partitions/8dc6a7a0-a367-4d30-8c0e-75dd4f6adb37/replicas/133402364946353919s"},{"Count":1,"Uri":"rntbd://cdb-ms-prod-southeastasia1-be31.documents.azure.com:14332/apps/f9da4d09-1100-4c10-90a1-6fc21fe78005/services/54321fb7-c46a-4e37-996f-ecab4a839820/partitions/8dc6a7a0-a367-4d30-8c0e-75dd4f6adb37/replicas/133423362982618111s"}],"RegionsContacted":[],"FailedReplicas":[],"AddressResolutionStatistics":[],"StoreResponseStatistics":[{"ResponseTimeUTC":"2024-01-02T23:16:56.8570792Z","ResourceType":"Document","OperationType":"Create","LocationEndpoint":"https://cosmos-bm7-prod-southeastasia.documents.azure.com/","StoreResult":{"ActivityId":"7e12b562-8652-4c44-abfb-da0127cc159c","StatusCode":"RequestTimeout","SubStatusCode":"Unknown","LSN":-1,"PartitionKeyRangeId":null,"GlobalCommittedLSN":-1,"ItemLSN":-1,"UsingLocalLSN":false,"QuorumAckedLSN":-1,"SessionToken":null,"CurrentWriteQuorum":-1,"CurrentReplicaSetSize":-1,"NumberOfReadRegions":-1,"IsValid":false,"StorePhysicalAddress":"rntbd://cdb-ms-prod-southeastasia1-be31.documents.azure.com:14356/apps/f9da4d09-1100-4c10-90a1-6fc21fe78005/services/54321fb7-c46a-4e37-996f-ecab4a839820/partitions/8dc6a7a0-a367-4d30-8c0e-75dd4f6adb37/replicas/133417433591298516p","RequestCharge":0,"RetryAfterInMs":null,"BELatencyInMs":null,"transportRequestTimeline":{"requestTimeline":[{"event": "Created", "startTimeUtc": "2024-01-02T23:16:45.8868320Z", "durationInMs": 0.0026},{"event": "ChannelAcquisitionStarted", "startTimeUtc": "2024-01-02T23:16:45.8868346Z", "durationInMs": 0.0441},{"event": "Pipelined", "startTimeUtc": "2024-01-02T23:16:45.8868787Z", "durationInMs": 10969.401},{"event": "Failed", "startTimeUtc": "2024-01-02T23:16:56.8562797Z", "durationInMs": 0}],"serviceEndpointStats":{"inflightRequests":1,"openConnections":2},"connectionStats":{"waitforConnectionInit":"False","callsPendingReceive":0,"lastSendAttempt":"2024-01-01T16:59:07.4168798Z","lastSend":"2024-01-01T16:59:07.4169753Z","lastReceive":"2024-01-01T16:59:07.4343338Z"},"requestSizeInBytes":1561,"requestBodySizeInBytes":1078},"TransportException":"A client transport error occurred: Acquiring the send stream lock timed out. (Time: 2024-01-02T23:16:56.8561904Z, activity ID: 7e12b562-8652-4c44-abfb-da0127cc159c, error code: SendLockTimeout [0x000D], base error: HRESULT 0x80131500, URI: rntbd://cdb-ms-prod-southeastasia1-be31.documents.azure.com:14356/apps/f9da4d09-1100-4c10-90a1-6fc21fe78005/services/54321fb7-c46a-4e37-996f-ecab4a839820/partitions/8dc6a7a0-a367-4d30-8c0e-75dd4f6adb37/replicas/133417433591298516p, connection: 172.20.32.24:51775 -> 4.194.225.2:14356, payload sent: True)"}}]},"Point Operation Statistics":{"Id":"PointOperationStatistics","ActivityId":"7e12b562-8652-4c44-abfb-da0127cc159c","ResponseTimeUtc":"2024-01-02T23:16:56.8586798Z","StatusCode":408,"SubStatusCode":0,"RequestCharge":0,"RequestUri":"dbs/Assessment2/colls/AssessmentTimeLog","ErrorMessage":"Microsoft.Azure.Documents.RequestTimeoutException: Message: Request timed out. More info: https://aka.ms/cosmosdb-tsg-request-timeout\r\nActivityId: 7e12b562-8652-4c44-abfb-da0127cc159c, Request URI: /apps/f9da4d09-1100-4c10-90a1-6fc21fe78005/services/54321fb7-c46a-4e37-996f-ecab4a839820/partitions/8dc6a7a0-a367-4d30-8c0e-75dd4f6adb37/replicas/133417433591298516p, RequestStats: Microsoft.Azure.Cosmos.Tracing.TraceData.ClientSideRequestStatisticsTraceDatum, SDK: Windows/10.0.14393 cosmos-netstandard-sdk/3.29.4\r\n Microsoft.Azure.Documents.TransportException: A client transport error occurred: Acquiring the send stream lock timed out. (Time: 2024-01-02T23:16:56.8561904Z, activity ID: 7e12b562-8652-4c44-abfb-da0127cc159c, error code: SendLockTimeout [0x000D], base error: HRESULT 0x80131500, URI: rntbd://cdb-ms-prod-southeastasia1-be31.documents.azure.com:14356/apps/f9da4d09-1100-4c10-90a1-6fc21fe78005/services/54321fb7-c46a-4e37-996f-ecab4a839820/partitions/8dc6a7a0-a367-4d30-8c0e-75dd4f6adb37/replicas/133417433591298516p, connection: 172.20.32.24:51775 -> 4.194.225.2:14356, payload sent: True)\r\n at Microsoft.Azure.Documents.Rntbd.Channel.RequestAsync(DocumentServiceRequest request, TransportAddressUri physicalAddress, ResourceOperation resourceOperation, Guid activityId, TransportRequestStats transportRequestStats)\r\n at Microsoft.Azure.Documents.Rntbd.LoadBalancingPartition.RequestAsync(DocumentServiceRequest request, TransportAddressUri physicalAddress, ResourceOperation resourceOperation, Guid activityId, TransportRequestStats transportRequestStats)\r\n at Microsoft.Azure.Documents.Rntbd.TransportClient.InvokeStoreAsync(TransportAddressUri physicalAddress, ResourceOperation resourceOperation, DocumentServiceRequest request)\r\n --- End of inner exception stack trace ---\r\n at Microsoft.Azure.Documents.Rntbd.TransportClient.InvokeStoreAsync(TransportAddressUri physicalAddress, ResourceOperation resourceOperation, DocumentServiceRequest request)\r\n at Microsoft.Azure.Documents.ConsistencyWriter.WritePrivateAsync(DocumentServiceRequest request, TimeoutHelper timeout, Boolean forceRefresh)\r\n at Microsoft.Azure.Documents.StoreResult.VerifyCanContinueOnException(DocumentClientException ex)\r\n at Microsoft.Azure.Documents.ConsistencyWriter.WritePrivateAsync(DocumentServiceRequest request, TimeoutHelper timeout, Boolean forceRefresh)\r\n at Microsoft.Azure.Documents.BackoffRetryUtility`1.ExecuteRetryAsync[TParam,TPolicy](Func`1 callbackMethod, Func`3 callbackMethodWithParam, Func`2 callbackMethodWithPolicy, TParam param, IRetryPolicy retryPolicy, IRetryPolicy`1 retryPolicyWithArg, Func`1 inBackoffAlternateCallbackMethod, Func`2 inBackoffAlternateCallbackMethodWithPolicy, TimeSpan minBackoffForInBackoffCallback, CancellationToken cancellationToken, Action`1 preRetryCallback)\r\n at Microsoft.Azure.Documents.ShouldRetryResult.ThrowIfDoneTrying(ExceptionDispatchInfo capturedException)\r\n at Microsoft.Azure.Documents.BackoffRetryUtility`1.ExecuteRetryAsync[TParam,TPolicy](Func`1 callbackMethod, Func`3 callbackMethodWithParam, Func`2 callbackMethodWithPolicy, TParam param, IRetryPolicy retryPolicy, IRetryPolicy`1 retryPolicyWithArg, Func`1 inBackoffAlternateCallbackMethod, Func`2 inBackoffAlternateCallbackMethodWithPolicy, TimeSpan minBackoffForInBackoffCallback, CancellationToken cancellationToken, Action`1 preRetryCallback)\r\n at Microsoft.Azure.Documents.ConsistencyWriter.WriteAsync(DocumentServiceRequest entity, TimeoutHelper timeout, Boolean forceRefresh, CancellationToken cancellationToken)\r\n at Microsoft.Azure.Documents.ReplicatedResourceClient.<>c__DisplayClass31_0.<<InvokeAsync>b__0>d.MoveNext()\r\n--- End of stack trace from previous location ---\r\n at Microsoft.Azure.Documents.RequestRetryUtility.ProcessRequestAsync[TRequest,IRetriableResponse](Func`1 executeAsync, Func`1 prepareRequest, IRequestRetryPolicy`2 policy, CancellationToken cancellationToken, Func`1 inBackoffAlternateCallbackMethod, Nullable`1 minBackoffForInBackoffCallback)\r\n at Microsoft.Azure.Documents.ShouldRetryResult.ThrowIfDoneTrying(ExceptionDispatchInfo capturedException)\r\n at Microsoft.Azure.Documents.RequestRetryUtility.ProcessRequestAsync[TRequest,IRetriableResponse](Func`1 executeAsync, Func`1 prepareRequest, IRequestRetryPolicy`2 policy, CancellationToken cancellationToken, Func`1 inBackoffAlternateCallbackMethod, Nullable`1 minBackoffForInBackoffCallback)\r\n at Microsoft.Azure.Documents.StoreClient.ProcessMessageAsync(DocumentServiceRequest request, CancellationToken cancellationToken, IRetryPolicy retryPolicy, Func`2 prepareRequestAsyncDelegate)\r\n at Microsoft.Azure.Cosmos.Handlers.TransportHandler.ProcessMessageAsync(RequestMessage request, CancellationToken cancellationToken)\r\n at Microsoft.Azure.Cosmos.Handlers.TransportHandler.SendAsync(RequestMessage request, CancellationToken cancellationToken)","RequestSessionToken":null,"ResponseSessionToken":null,"BELatencyInMs":null}}}]}]}]}]}]},{"name":"Get Collection Cache","id":"f4551c6f-3491-4653-af9b-7d5f9538edd1","start time":"11:16:56:859","duration in milliseconds":0.002}]} -->

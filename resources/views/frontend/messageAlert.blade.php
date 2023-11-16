@if (session('message'))
    @php
        $message = session('message');
    @endphp
    <div id="alertMessage" class="alert alert-{{ $message['type'] }} alert-dismissible fade show" role="alert">
        <strong>Thông báo! </strong>{{ $message['msg'] }}        
        <span><i style="float: right; font-size: 25px" id="closeButton" class="fa-solid fa-xmark fa-beat"></i></span>
    </div>
    <script>
        document.getElementById("closeButton").addEventListener("click", function() {
            document.getElementById("alertMessage").style.display = "none";
        });
    </script>
@else
    
@endif
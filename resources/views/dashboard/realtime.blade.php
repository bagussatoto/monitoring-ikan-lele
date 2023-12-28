    {{-- Panggil file jquery untuk proses reatime --}}
    <script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>
    
    {{-- ajax untuk realtime --}}
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#suhu").load("{{ url('bacasuhu') }}");
                $("#kekeruhan").load("{{ url('bacakekeruhan') }}");
                $("#ph").load("{{ url('bacaph') }}");
                $("#jarak").load("{{ url('bacajarak') }}");
                $("#pompa_masuk").load("{{ url('bacapompamasuk') }}");
                $("#pompa_keluar").load("{{ url('bacapompakeluar') }}");
            }, 1000);
        });
    </script>
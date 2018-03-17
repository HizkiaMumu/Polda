@if(session('OK'))
  <script>
    $(document).ready(function(){
      swal("Done!", "{{ session('OK') }}", "success");
    });
  </script>
@elseif(session('ERR'))
<script>
  $(document).ready(function(){
    swal("Gagal!", "{{ session('ERR') }}", "error");
  });
</script>
@endif

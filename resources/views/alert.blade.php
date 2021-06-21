@if(session('succes'))
    <script>
              swal({
      title: "Success!",
      text: "{{session('succes')}}",
      icon: "success",
    });
    </script>

@elseif(session('deleted'))
            <script>
              swal({
      title: "Deleted!",
      text: "{{session('deleted')}}",
      icon: "success",
    });
            </script>
@endif

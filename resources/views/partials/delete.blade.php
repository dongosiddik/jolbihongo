
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script> --}}
    <script src="{{ asset('styles/sweetalert.min.js') }} "></script>


    <script type="text/javascript">
     
         $('.show_confirm').click(function(event) {
              var form =  $(this).closest("form");
              var name = $(this).data("name");
              event.preventDefault();
              swal({
                  title: `Voulez-vous vraiment supprimer cet enregistrement ?`,
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  cancelButtonText: 'Annuler',
              })
              .then((willDelete) => {
                if (willDelete) {
                  form.submit();
                }
              });
          });
      
    </script>
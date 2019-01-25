<script type="text/javascript">
    window.addEventListener("load", (event) => {
        // Success Message
        @if (Session::has('success'))
        if(typeof Swal !== typeof undefined) {
            Swal.fire({
                icon: 'success',
                title: 'Done',
                text: '{{ Session::get("success") }}',
                confirmButtonColor: "#3a57e8"
            })
        }
        @endif

        // Errors Message
        @if (Session::has('error'))
        if(typeof Swal !== typeof undefined) {
            Swal.fire({
                icon: 'error',
                title: 'Opps!!!',
                text: '{{Session::get("error")}}',
                confirmButtonColor: "#3a57e8"
            })
        }
        @endif

        // Multiple Errors Message
        @if(Session::has('errors') || ( isset($errors) && is_array($errors) && $errors->any()))
        if(typeof Swal !== typeof undefined) {
            Swal.fire({
                icon: 'error',
                title: 'Opps!!!',
                text: '{{Session::get("errors")->first() }}',
                confirmButtonColor: "#3a57e8"
            })
        }
        @endif
    })

</script>

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

@push('scripts')

    <script src="{{ asset('assets/js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        //Warning Message
        $('#{{$deleteBtn}}').click(function() {
            Swal.fire({
                title: "Est-ce que vous êtes sûr ?",
                text: "vous ne pouvez pas annuler la suppression de ce client!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "Oui, supprimer le!"
            }).then(function(result) {
                if (result.value) {
                    setTimeout(function() {
                        document.getElementById('{{$deleteForm}}')
                            .submit();
                    }, 1000);
                    Swal.fire("Supprimé!",
                        "Le client est supprimé avec succès ",
                        "success");
                }
            });
        });
    </script>

@endpush

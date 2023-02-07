@push('css')
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endpush
@once
    @push('scripts')
        <script src="{{ asset('assets/js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

        <script>
            //Warning Message
            $('#{{ $deleteBtn }}').click(function() {
                Swal.fire({
                    title: "Confirmer la suppression",
                    text: "Êtes-vous sûr de vouloir supprimer cet élément ?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#ee2d41",
                    cancelButtonColor: "#e4e6ef",
                    confirmButtonText: "Oui, supprimer !",
                    cancelButtonText: "Non, annuler !"
                }).then(function(result) {
                    if (result.value) {
                        setTimeout(function() {
                            document.getElementById('{{ $deleteForm }}')
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
@endonce

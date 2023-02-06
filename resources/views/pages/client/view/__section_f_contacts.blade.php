@php
    $condition = $client->contacts()->exists() && $client->contacts->count() == 3;
@endphp
<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">Contacts (3)</h3>

        <button {{ !$condition ? '' : 'disabled' }} type="submit" class="btn btn-alt-primary" data-bs-toggle="modal"
            data-bs-target="#add_contact">
            <i class="far fa-1x fa-plus opacity-50 me-1"></i> Ajouter un contact
        </button>

    </div>
    <div class="block-content">
        <div class="row items-push">
            @foreach ($client->contacts as $contact)
                <div class="col-md-4">
                    <a class="block block-rounded block-bordered block-link-shadow h-100 mb-0"
                        href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <div>
                                <div class="fw-semibold mb-1">{{ $contact->full_name }}</div>
                                <div class="fs-sm text-muted">4 Orders</div>
                            </div>
                            <div class="ms-3">
                                <img class="img-avatar" src="{{ asset('assets/media/avatars/avatar3.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

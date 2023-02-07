@php
    $condition = $client->contacts()->exists() && $client->contacts->count() == 3;
@endphp

<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">Contacts ({{ $client->contacts->count() }})</h3>
        <button {{ !$condition ? '' : 'disabled' }} type="submit" class="btn btn-alt-primary" data-bs-toggle="modal"
            data-bs-target="#add_contact">
            <i class="far fa-1x fa-plus opacity-50 me-1"></i> Ajouter un contact
        </button>
    </div>
    <div class="block-content">
        <div class="table-responsive">
            <table class="table table-borderless table-striped table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center">Nom</th>
                        <th class="d-none d-sm-table-cell text-center">Prénom</th>
                        <th class="d-none d-md-table-cell">Téléphone</th>
                        <th class="d-none d-sm-table-cell text-center">Email</th>
                        <th class="d-none d-md-table-cell">Status</th>
                        <th class="d-none d-sm-table-cell text-end">Date de création</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client->contacts as $contact)
                        <tr>
                            <td class="text-center fs-sm">
                                <a class="fw-semibold" href="be_pages_ecom_product_edit.html">
                                    {{ $contact->nom }} </a>
                            </td>
                            <td class="d-none d-sm-table-cell text-center fs-sm">{{ $contact->prenom }}</td>
                            <td class="d-none d-md-table-cell fs-sm">
                                <a class="fw-semibold"
                                    href="be_pages_ecom_product_edit.html">{{ $contact->telephone }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell text-center fs-sm">{{ $contact->email }}</td>
                            <td>
                                <span
                                    class="badge bg-{{ $contact->is_default ? 'success' : 'info' }}">{{ $contact->is_default }}</span>
                            </td>
                            <td class="text-end d-none d-sm-table-cell fs-sm">
                                <strong>{{ $contact->created_at->format('d-m-Y -H:i') }}</strong>
                            </td>
                            <td class="text-center fs-sm">
                                <a class="btn btn-sm btn-alt-secondary" href="#"
                                    onclick="document.getElementById('delete_contact_{{ $contact->uuid }}').submit();">
                                    <i class="fa fa-fw fa-times text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        <form action="{{ route('app:clients.deletecontact', $client->uuid) }}" method="post"
                            id="delete_contact_{{ $contact->uuid }}">

                            @csrf
                            @honeypot
                            @method('DELETE')
                            <input type="hidden" name="clientId" value="{{ $client->uuid }}">
                            <input type="hidden" name="contactId" value="{{ $contact->uuid }}">
                        </form>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

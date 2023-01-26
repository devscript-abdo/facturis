<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Actions Disponible</h4>
                <p class="card-title-desc"></p>
                <div class="button-items ">
                    <a href="{{ route('finance:sells:providers.create') }}" type="button" class="btn btn-info btn-label">
                        <i class="bx bxs-add-to-queue label-icon"></i>
                        Nouveau fournisseur
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @include('layouts._parts.__messages')

                <div class="table-responsive">
                    <table class="table table-bordered border-danger table-hover align-middle table-nowrap table-check">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;" class="align-middle">
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="checkAllCTLS">
                                        <label class="form-check-label" for="checkAllCTLS"></label>
                                    </div>
                                </th>
                                <th class="align-middle">Référence</th>
                                <th class="align-middle">Raison Sociale</th>
                                <th class="align-middle">Nom du contact</th>
                                <th class="align-middle">Téléphone du contact</th>
                                <th class="align-middle">Créé le</th>
                                <th class="align-middle">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($providers as $provider)
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox"
                                                id="provider-{{ $provider->id }}">
                                            <label class="form-check-label" for="provider-{{ $provider->id }}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{-- $provider->url --}}" class="text-body fw-bold">
                                            {{ $provider->code }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $provider->entreprise }}
                                    </td>
                                    <td>
                                        {{ $provider->contact }}
                                    </td>
                                    <td>
                                        {{ $provider->telephone }}
                                    </td>
                                    <td>
                                        {{ $provider->created_at->format('d/m/Y') }}
                                    </td>

                                    <td>

                                        <div class="button-items">

                                            <a href="{{ route('finance:sells:providers.edit', $provider->uuid) }}"
                                                class="btn btn-primary btn-sm waves-light btn-label">
                                                <i class="bx bx-edit-alt label-icon"></i>
                                                Edit
                                            </a>
                                            <a href="{{ route('finance:sells:providers.edit', $provider->uuid) }}"
                                                class="btn btn-info btn-sm waves-light btn-label">
                                                <i class="bx bxs-show label-icon"></i>
                                                Afficher
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
                {{ $providers->links() }}
            </div>

        </div>

    </div>

</div>

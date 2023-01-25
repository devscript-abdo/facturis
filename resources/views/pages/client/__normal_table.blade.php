<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Actions Disponible</h4>
                <p class="card-title-desc"></p>
                <div class="button-items ">
                    <a href="{{ route('finance:sells:clients.create') }}" type="button" class="btn btn-info btn-label">
                        <i class="bx bxs-add-to-queue label-icon"></i>
                        Nouveau client
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
                                @if (auth()->user()->hasAnyRole('Admin', 'SuperAdmin'))
                                    <th style="width: 20px;" class="align-middle">
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                @endif
                                <th class="align-middle">Logo</th>
                                <th class="align-middle">Nom complet</th>
                                <th class="align-middle">E-mail</th>
                                <th class="align-middle">Tél</th>
                                <th class="align-middle">Type</th>
                                <th class="align-middle">Etat</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox"
                                                id="client-{{ $client->id }}">
                                            <label class="form-check-label" for="client-{{ $client->id }}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        @if (!is_null($client->logo))
                                            <div>
                                                <img class="img-fluid rounded" alt=""
                                                    src="{{ asset('storage/' . $client->logo) }}" width="50">
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{-- $client->url --}}" class="text-body fw-bold">
                                            {{ $client->full_name }}
                                        </a>
                                        @if ($client->type === 'particulier')
                                            <br>
                                            {{ $client->cnie }}
                                        @endif
                                    </td>
                                    <td>
                                        {{ $client->email }}
                                    </td>
                                    <td>
                                        {{ $client->telephone }}
                                    </td>
                                    <td>
                                        {{ $client->type }}
                                        <p class="text-muted mb-0"></p>
                                    </td>
                                    <td>

                                        <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                                            <input data-client="{{ $client->uuid }}" class="form-check-input activeUser"
                                                type="checkbox" id="SwitchCheckSizelg"
                                                {{ $client->active == true ? 'checked' : '' }}>

                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-3">
                                            <a href="{{ route('finance:sells:clients.edit', $client->uuid) }}"
                                                class="text-success">
                                                <i class="mdi mdi-pencil font-size-18"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

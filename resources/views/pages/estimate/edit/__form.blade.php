<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-10">
                    <div class="col-lg-6">
                        <h5 class="card-title">Ajouter un client</h5>
                        <p class="card-title-desc"></p>
                    </div>
                    <div class="col-lg-6">

                        <div class="d-flex justify-content-end gap-2">

                            <a href="{{ route('finance:sells:clients') }}"
                                class="btn btn-secondary waves-effect waves-light">
                                <i class="mdi mdi-arrow-left me-1"></i> Return </a>
                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-label"
                                onclick="document.getElementById('clientForm').submit();">
                                <i class="bx bx-save label-icon"></i>
                                Update
                            </button>
                            <button type="button" class="btn btn-danger waves-effect waves-light btn-label"
                                onclick="document.getElementById('delete-client').submit();">
                                <i class="bx bx-trash label-icon"></i>
                                Supprimer
                            </button>
                            <form id="delete-client" method="post"
                                action="{{ route('finance:sells:clients.delete', $client->uuid) }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="clientId" value="{{ $client->uuid }}">
                            </form>
                        </div>
                    </div>
                </div>


                <form autocomplete="off" id="clientForm"
                    action="{{ route('finance:sells:clients.update', $client->uuid) }}" method="post">
                    @csrf
                    <div class="row" id="phones_list">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="entreprise">Entreprise *</label>
                                <input id="entreprise" name="entreprise" type="text"
                                    class="form-control @error('entreprise') is-invalid @enderror"
                                    value="{{ $client->entreprise }}" required>
                                @error('entreprise')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="contact">Contact *</label>
                                <input id="contact" name="contact" type="text"
                                    class="form-control @error('contact') is-invalid @enderror"
                                    value="{{ $client->contact }}" required>
                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="telephone">Telephone *</label>
                                <input id="telephone" name="telephone" type="text"
                                    class="form-control @error('telephone') is-invalid @enderror"
                                    value="{{ $client->telephone }}" required>
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target=".addPhones">
                                Ajouter des telephones
                            </button> --}}

                            <hr>
                            <div class="mb-3">
                                <label for="email">Email *</label>
                                <input id="email" name="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ $client->email }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target=".addEmails">
                                Ajouter des Emails
                            </button> --}}
                            <hr>

                            <div class="mb-3">
                                <label for="addresse">Siège social *</label>
                                <input id="addresse" name="addresse" type="text"
                                    class="form-control @error('addresse') is-invalid @enderror"
                                    value="{{ $client->addresse }}">
                                @error('addresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="rc">RC</label>
                                <input id="rc" name="rc" type="number"
                                    class="form-control @error('rc') is-invalid @enderror" value="{{ $client->rc }}"
                                    required>
                                @error('rc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ice">ICE *</label>
                                <input id="ice" name="ice" type="number"
                                    class="form-control @error('ice') is-invalid @enderror" value="{{ $client->ice }}"
                                    required>
                                @error('ice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description">Remarques</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="5"
                                    name="description">{{ $client->description }}</textarea>


                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

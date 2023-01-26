<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-10">
                    <div class="col-lg-6">
                        <h5 class="card-title">Editer un fournisseur</h5>
                        <p class="card-title-desc"></p>
                    </div>
                    <div class="col-lg-6">

                        <div class="d-flex justify-content-end gap-2">

                            <a href="{{ route('finance:sells:providers') }}"
                                class="btn btn-secondary waves-effect waves-light">
                                <i class="mdi mdi-arrow-left me-1"></i> Return </a>
                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-label"
                                onclick="document.getElementById('providerForm').submit();">
                                <i class="bx bx-save label-icon"></i>
                                Update
                            </button>
                            <button type="button" class="btn btn-danger waves-effect waves-light btn-label"
                                onclick="document.getElementById('delete-provider').submit();">
                                <i class="bx bx-trash label-icon"></i>
                                Supprimer
                            </button>
                            <form id="delete-provider" method="post"
                                action="{{ route('finance:sells:providers.delete', $provider->uuid) }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="providerId" value="{{ $provider->uuid }}">
                            </form>
                        </div>
                    </div>
                </div>


                <form autocomplete="off" id="providerForm"
                    action="{{ route('finance:sells:providers.update', $provider->uuid) }}" method="post">
                    @csrf
                    <div class="row" id="phones_list">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="entreprise">Entreprise *</label>
                                <input id="entreprise" name="entreprise" type="text"
                                    class="form-control @error('entreprise') is-invalid @enderror"
                                    value="{{ $provider->entreprise }}" required>
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
                                    value="{{ $provider->contact }}" required>
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
                                    value="{{ $provider->telephone }}" required>
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
                                    value="{{ $provider->email }}">
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
                                    value="{{ $provider->addresse }}">
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
                                    class="form-control @error('rc') is-invalid @enderror" value="{{ $provider->rc }}"
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
                                    class="form-control @error('ice') is-invalid @enderror"
                                    value="{{ $provider->ice }}" required>
                                @error('ice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description">Remarques</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="5"
                                    name="description">{{ $provider->description }}</textarea>


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

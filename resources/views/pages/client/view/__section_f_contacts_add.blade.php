<div class="modal fade" id="add_contact" tabindex="-1" role="dialog" aria-labelledby="modal-default-fadein"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un contact</h5>
                <button type="submit" class="btn btn-alt-primary">
                    <i class="far fa-1x fa-floppy-disk opacity-50 me-1"></i> Enregistrer
                </button>
            </div>
            <div class="modal-body pb-1">
                <form action="{{ route('app:clients.update', $client->uuid) }}" method="post">

                    @csrf
                    @honeypot
                    <div class="block-content">

                        <div class="row justify-content-center push">
                            <div class="col-md-12">
                                <div class="row justify-content-center push">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="mb-4 col-6">
                                                <label class="form-label" for="nom">Nom <span
                                                        class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa  fa-circle-info"></i>
                                                    </span>
                                                    <input type="text"
                                                        class="form-control @error('nom') is-invalid @enderror"
                                                        id="nom" name="nom" value="{{ old('nom') }}">
                                                    @error('nom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-4 col-6">
                                                <label class="form-label" for="prenom">Prénom <span
                                                        class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa  fa-circle-info"></i>
                                                    </span>
                                                    <input type="text"
                                                        class="form-control @error('prenom') is-invalid @enderror"
                                                        id="prenom" name="prenom" value="{{ old('prenom') }}">
                                                    @error('prenom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 col-12">
                                            <label class="form-label" for="email">E-mail</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="far fa-at"></i>
                                                </span>
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="email" name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 col-12">
                                            <label class="form-label" for="telephone">Téléphone <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                                <input type="text"
                                                    class="form-control @error('telephone') is-invalid @enderror"
                                                    id="telephone" name="telephone" value="{{ old('telephone') }}"
                                                    required>
                                                @error('telephone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 col-12">

                                            <div class="form-check form-switch form-check-inline">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="example-switch-inline1" name="example-switch-inline1">
                                                <label class="form-check-label" for="example-switch-inline1">CONTACT
                                                    PRINCIPAL </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

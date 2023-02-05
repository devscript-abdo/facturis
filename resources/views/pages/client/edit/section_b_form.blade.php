<form action="{{ route('app:clients.update', $client->uuid) }}" method="post">

    <div class="block">
        <div class="sticky block-options block-header block-header-default">
            <div class="dropdown">
                <a class="btn btn-alt-secondary" href="{{ route('app:clients') }}">
                    <i class="fa fa-arrow-left me-1"></i> Retour
                </a>
                <button type="submit" class="btn btn-alt-primary">
                    <i class="far fa-1x fa-floppy-disk opacity-50 me-1"></i> Enregistrer
                </button>
            </div>
        </div>
        @csrf
        @honeypot
        <div class="block-content">

            <div class="row justify-content-center push">
                <div class="col-md-10">
                    <div class="row justify-content-center push">
                        <div class="col-md-5">
                            <div class="mb-4 col-12">
                                <label class="form-label" for="entreprise">Raison sociale <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('entreprise') is-invalid @enderror"
                                    id="entreprise" name="entreprise" value="{{ $client->entreprise }}" required>
                                @error('entreprise')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="entreprise">R.C</label>
                                <input type="text" class="form-control @error('rc') is-invalid @enderror"
                                    id="rc" name="rc" value="{{ $client->rc }}">
                                @error('rc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="ice">I.C.E <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('ice') is-invalid @enderror"
                                    id="ice" name="ice" value="{{ $client->ice }}" required>
                                @error('ice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="devis">Devise <span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('devis') is-invalid @enderror" id="devis"
                                    name="devis">
                                    @foreach ($devis as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach

                                </select>
                                @error('devis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="details">Remarques</label>
                                <textarea class="form-control @error('details') is-invalid  @enderror" id="details" name="details" rows="3">{{ $client->details }}</textarea>
                                <div class="form-text">Visible on blog post list as a small description of the post.
                                </div>
                                @error('details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-5">

                            <div class="mb-4 col-12">
                                <label class="form-label" for="email">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="far fa-at"></i>
                                    </span>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ $client->email }}">
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
                                    <input type="text" class="form-control @error('telephone') is-invalid @enderror"
                                        id="telephone" name="telephone" value="{{ $client->telephone }}" required>
                                    @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="fax">Fax</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa fa-fax"></i>
                                    </span>
                                    <input type="text" class="form-control @error('fax') is-invalid @enderror"
                                        id="fax" name="fax" value="{{ $client->fax }}">
                                    @error('fax')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="fax">Site Web</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa fa-globe"></i>
                                    </span>
                                    <input type="text" class="form-control @error('website') is-invalid @enderror"
                                        id="website" name="website" value="{{ $client->website }}">
                                    @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row justify-content-center push">

                        <div class="col-md-5">
                            <h2 class="content-heading">Adresse de facturation</h2>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="facturation_address">Adresse</label>
                                <textarea class="form-control @error('facturation_address') is-invalid @enderror" id="facturation_address"
                                    name="facturation_address" rows="2">{{ $client->invoiceAddress?->address }}</textarea>
                                @error('facturation_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="facturation_postal">Code postal</label>
                                <input type="text"
                                    class="form-control @error('facturation_postal') is-invalid @enderror"
                                    id="facturation_postal" name="facturation_postal"
                                    value="{{ $client->invoiceAddress?->postal }}">
                                @error('facturation_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="facturation_city">Ville</label>
                                <input type="text"
                                    class="form-control @error('facturation_city') is-invalid @enderror"
                                    id="facturation_city" name="facturation_city"
                                    value="{{ $client->invoiceAddress?->city }}">
                                @error('facturation_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="facturation_country">Pays</label>
                                <select class="form-select @error('facturation_country') is-invalid @enderror"
                                    id="facturation_country" name="facturation_country">
                                    <option value="maroc">maroc</option>
                                </select>
                                @error('facturation_country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h2 class="content-heading">Adresse de livraison</h2>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="livraison_address">Adresse</label>
                                <textarea class="form-control @error('livraison_address') is-invalid @enderror" id="livraison_address"
                                    name="livraison_address" rows="2">{{ $client->deliveryAddress?->address }}</textarea>
                                @error('livraison_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="livraison_postal">Code postal</label>
                                <input type="text" class="form-control @error('livraison_postal') @enderror"
                                    id="livraison_postal" name="livraison_postal"
                                    value="{{ $client->deliveryAddress?->postal }}">
                                @error('livraison_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="livraison_city">Ville</label>
                                <input type="text" class="form-control @error('livraison_city') @enderror"
                                    id="livraison_city" name="livraison_city" value="{{ $client->deliveryAddress?->city }}">
                                @error('livraison_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="livraison_country">Pays</label>
                                <select class="form-select @error('livraison_country') @enderror"
                                    id="livraison_country" name="livraison_country">
                                    <option value="maroc">maroc</option>
                                </select>
                                @error('livraison_country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

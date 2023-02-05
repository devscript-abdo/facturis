<form action="be_pages_blog_post_add.html" method="post" enctype="multipart/form-data" onsubmit="return false;">

    <div class="block">
        <div class="block-options block-header block-header-default">
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
                                <label class="form-label" for="entreprise">Raison sociale</label>
                                <input type="text" class="form-control" id="entreprise" name="entreprise">
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="entreprise">R.C</label>
                                <input type="text" class="form-control" id="rc" name="rc">
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="ice">I.C.E</label>
                                <input type="text" class="form-control" id="ice" name="ice">
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="example-select">Devise</label>
                                <select class="form-select" id="example-select" name="example-select">
                                    @foreach ($devis as $item)
                                        <option>{{ $item->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="dm-post-add-excerpt">Remarques</label>
                                <textarea class="form-control" id="dm-post-add-excerpt" name="dm-post-add-excerpt" rows="3"></textarea>
                                <div class="form-text">Visible on blog post list as a small description of the post.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">

                            <div class="mb-4 col-12">
                                <label class="form-label" for="email">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="far fa-at"></i>
                                    </span>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="telephone">Téléphone</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <input type="text" class="form-control" id="telephone" name="telephone">
                                </div>
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="fax">Fax</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa fa-fax"></i>
                                    </span>
                                    <input type="text" class="form-control" id="fax" name="fax">
                                </div>
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="fax">Site Web</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa fa-globe"></i>
                                    </span>
                                    <input type="text" class="form-control" id="website" name="website">
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
                                <textarea class="form-control" id="facturation_address" name="facturation_address" rows="2"></textarea>

                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="facturation_postal">Code postal</label>
                                <input type="text" class="form-control" id="facturation_postal"
                                    name="facturation_postal">
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="facturation_city">Ville</label>
                                <input type="text" class="form-control" id="facturation_city"
                                    name="facturation_city">
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="facturation_country">Pays</label>
                                <select class="form-select" id="facturation_country" name="facturation_country">
                                    <option value="maroc">maroc</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h2 class="content-heading">Adresse de livraison</h2>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="livraison_address">Adresse</label>
                                <textarea class="form-control" id="livraison_address" name="livraison_address" rows="2"></textarea>

                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="livraison_postal">Code postal</label>
                                <input type="text" class="form-control" id="livraison_postal"
                                    name="livraison_postal">
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="livraison_city">Ville</label>
                                <input type="text" class="form-control" id="livraison_city"
                                    name="livraison_city">
                            </div>
                            <div class="mb-4 col-12">
                                <label class="form-label" for="livraison_country">Pays</label>
                                <select class="form-select" id="livraison_country" name="livraison_country">
                                    <option value="maroc">maroc</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

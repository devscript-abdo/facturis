<div class="modal fade" id="add_estimate_modal" tabindex="-1" role="dialog" aria-labelledby="modal-default-fadein"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter nouveau devis</h5>
            </div>
            <div class="modal-body pb-1">
                <form action="{{ route('app:estimates.store') }}" method="post" id="add_estimate_form">

                    @csrf
                    @honeypot
                    <div class="block-content">

                        <div class="row justify-content-center push">
                            <div class="col-md-12">
                                <div class="row justify-content-center push">
                                    <div class="col-md-12">
                                        <div class="mb-4 col-12">
                                            <label class="form-label" for="reference">Référence <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fa  fa-circle-info"></i>
                                                </span>
                                                <input type="text"
                                                    class="form-control @error('reference') is-invalid @enderror"
                                                    id="reference" name="reference" value="{{ old('reference') }}">
                                                @error('reference')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-4 col-12">
                                        <label class="form-label" for="document_date">Date<span
                                                class="text-danger">*</span></label></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa  fa-calendar-days"></i>
                                            </span>
                                            <input type="text"
                                                class="js-flatpickr form-control @error('document_date') is-invalid @enderror"
                                                id="document_date" name="document_date" placeholder="d/m/Y"
                                                autocomplete="off" data-date-format="d/m/Y" required>

                                            @error('document_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-4 col-12">
                                        <label class="form-label" for="client">Client <span
                                                class="text-danger">*</span></label>
                                        <select style="width: 100%;"
                                            class="js-select2 form-select @error('client') is-invalid @enderror"
                                            id="clientSelectBox" name="client" 
                                            data-container="#add_estimate_modal"   required>
                                            
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}" @selected(old('client') == $client->id)>
                                                    {{ $client->entreprise }}</option>
                                            @endforeach

                                        </select>
                                        @error('client')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2 mt-4 col-12">
                                        <button type="submit" class="btn btn-alt-primary">

                                            <i class="far fa-1x fa-floppy-disk opacity-50 me-1"></i> Enregistrer
                                        </button>
                                        <button type="button" class="btn btn-alt-danger"
                                            data-bs-dismiss="modal">Annuler</button>

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

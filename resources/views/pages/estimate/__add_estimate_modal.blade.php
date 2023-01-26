<div class="modal fade addEstimateModal" tabindex="-1" role="dialog" aria-labelledby="orderdetailsModalLabel"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id=orderdetailsModalLabel">
                    Ajouter nouveau devis
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('finance:sells:estimates.store') }}">
                    @csrf

                    <div class="row mb-4">

                        <label class="form-label col-lg-2">Client *</label>
                        <div class="col-lg-10">
                            <select name="client" class="form-control select2 @error('client') is-invalid @enderror" required>
                                <option value="">Choisir le client</option>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->entreprise }}</option>
                                @endforeach
                            </select>
                            @error('client')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="row mb-4">

                        <label class="form-label col-lg-2">Date *</label>
                        <div class="col-lg-10">
                            <div class="input-group" id="datepicker1">
                                <input type="text" name="document_date" id="filterDate"
                                    class="form-control @error('document_date') is-invalid @enderror" value="{{now()->format('Y-m-d')}}"
                                    data-date-format="yyyy-mm-dd" data-date-container='#datepicker1'
                                    data-provide="datepicker" placeholder="Date" required>

                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                @error('document_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label col-lg-2"></label>
                        <div class="col-lg-5">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

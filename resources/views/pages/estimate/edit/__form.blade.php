<div class="row">
    <div class="row">
        <div class="col-xl-12 sticky-top zIndexer">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-10">
                        <div class="col-lg-6">
                            <h5 class="card-title">DEVIS Numero : {{ $estimate->full_number }}</h5>
                            <p class="card-title-desc"></p>
                        </div>
                        <div class="col-lg-6">

                            <div class="d-flex justify-content-end gap-2">

                                <a href="{{ route('finance:sells:estimates') }}"
                                    class="btn btn-secondary waves-effect waves-light">
                                    <i class="mdi mdi-arrow-left me-1"></i> Return </a>
                                <button type="submit" class="btn btn-primary waves-effect waves-light btn-label"
                                    onclick="document.getElementById('clientForm').submit();">
                                    <i class="bx bx-save label-icon"></i>
                                    Update
                                </button>
                                <button type="button" class="btn btn-danger waves-effect waves-light btn-label"
                                    onclick="document.getElementById('delete-estimate').submit();">
                                    <i class="bx bx-trash label-icon"></i>
                                    Supprimer
                                </button>
                                <form id="delete-estimate" method="post"
                                    action="{{ route('finance:sells:estimates.delete', $estimate->uuid) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="estimateId" value="{{ $estimate->uuid }}">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form class="repeater" action="{{ route('finance:sells:estimates.update', $estimate->uuid) }}" method="post">
            @csrf
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="row">

                                <div class="col-lg-12" wire:ignore>
                                    <div class="mb-4">
                                        <label class="form-label">Client *</label>

                                        <select name="client" id="selectclient"
                                            class="form-select @error('client') is-invalid @enderror" required disabled>


                                            <option selected value="{{ $estimate->client?->id }}">
                                                {{ $estimate->client?->entreprise }}
                                            </option>


                                        </select>

                                        @error('client')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>Date de devis</label>
                                        <div class="input-group" id="datepicker1">
                                            <input type="text" name="invoice_date"
                                                class="form-control @error('invoice_date') is-invalid @enderror"
                                                data-date-format="yyyy-mm-dd" value="{{ now()->format('Y-m-d') }}"
                                                data-date-container='#datepicker1' data-provide="datepicker">

                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            @error('invoice_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label> {{ __('invoice.form.date_due') }}</label>
                                        <div class="input-group" id="datepicker2">
                                            <input type="text"
                                                class="form-control @error('due_date') is-invalid @enderror"
                                                name="due_date" value="{{ now()->addDays(10)->format('Y-m-d') }}"
                                                data-date-format="yyyy-mm-dd" data-date-container='#datepicker2'
                                                data-provide="datepicker" data-date-autoclose="true">
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            @error('due_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="templating-select mb-4">
                                <label class="form-label">{{ __('invoice.form.payment_method') }}</label>
                                <select name="payment_mode"
                                    class="form-control select2-templating @error('payment_mode') is-invalid @enderror">

                                    @foreach ($payments as $payment)
                                        <option value="{{ $payment->id }}">{{ $payment->name }}</option>
                                    @endforeach

                                </select>
                                @error('payment_mode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class=" mb-4">
                                <label>{{ __('invoice.form.admin_note') }}</label>
                                <textarea name="admin_notes" id="textarea" class="form-control @error('admin_notes') is-invalid @enderror"
                                    maxlength="225" rows="5"></textarea>

                                @error('admin_notes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title-desc">{{ __('invoice.form.title') }}</p>
                    <div class="row">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-4">

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-4">

                            @if ($estimate->articles->count() > 0)
                                @include('pages.document.edit_articles', ['document' => $estimate])
                            @endif
                            <hr>
                            <p class="card-title-desc">Ajouter des nouveaux articles</p>
                            @include('pages.document.add_articles')
                        </div>
                        <div class="col-lg-6">
                            <div class="justify-content-end">
                                <div class="card border border-primary">
                                    <div class="card-header bg-transparent border-primary">
                                        <h5 class="my-0 text-primary">
                                            <i class="mdi mdi-alarm-panel-outline me-3"></i>
                                            {{ __('invoice.form.total_ht') }} :
                                        </h5>
                                        <hr>
                                        <h5 class="my-0 text-danger">
                                            <i class="mdi mdi-alarm-panel-outline me-3"></i>
                                            {{ __('invoice.form.total_ttc') }} :
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title-desc">{{ __('invoice.form.title') }}</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="condition_general">{{ __('invoice.form.condition_general') }}</label>
                            <textarea name="condition_general" id="condition_general" rows="5"
                                class="form-control @error('condition_general') is-invalid @enderror"></textarea>
                            @error('condition_general')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap gap-2 justify-content-end mb-4">
                <div class="">
                    <button type="submit" class="btn btn-primary waves-effect waves-light" {{-- onclick='document.getElementById("overlayy").style.display = "block"' --}}>
                        {{ __('buttons.store') }}

                    </button>
                    <button type="submit" class="btn btn-secondary waves-effect waves-light">
                        {{ __('buttons.store_draft') }}
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

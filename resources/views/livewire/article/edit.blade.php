<div>

    <div class="row">
        <input type="hidden" name="articleuuid" value="{{ $article->uuid }}">
        <div class="mb-3 col-lg-3">
            <label for="designation">Désignation</label>
            <textarea wire:model="designation" name="designation" id="designation" rows="5"
                class="form-control @error('articles.*.designation') is-invalid @enderror">{{ str_replace('<br />', '', $article->designation) }}</textarea>

            @error('articles.*.designation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3 col-lg-2">
            <label for="description">Description</label>
            <textarea wire:model="description" name="description" id="description" rows="5"
                class="form-control @error('articles.*.description') is-invalid @enderror">{{ str_replace('<br />', '', $article->description) }}</textarea>

            @error('articles.*.description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3 col-lg-1">
            <label for="price_uni">P.U HT</label>
            <input type="text" wire:model="price_uni" name="price_uni" id="price_uni"
                value="{{ $article->price_uni }}"
                class="form-control @error('articles.*.price_uni') is-invalid @enderror" />

            @error('price_uni')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3 col-lg-1">
            <label for="quantity">QTÉ.</label>
            <input type="text" wire:model="quantity" name="quantity" id="quantity" value="{{ $article->quantity }}"
                min="1" class="form-control @error('articles.*.quantity') is-invalid @enderror" />
            @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3 col-lg-1">
            <label for="taux_tax">{{ __('TVA') }} *</label>
            <select wire:model="taux_tax" name="taux_tax"
                class="form-control select2-templating @error('taux_tax') is-invalid @enderror">

                @foreach ($taxes as $taxe)
                    <option {{ $article->taux_tax == $taxe->taux_percent ? 'selected' : '' }}
                        value="{{ $taxe->taux_percent }}">{{ $taxe->taux_percent }}</option>
                @endforeach

            </select>
            @error('taux_tax')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3 col-lg-1">
            <label for="remise">{{ __('RÉDUC.HT %') }} </label>
            <input wire:model="remise" type="number" min="0" name="remise" id="remise"
                value="{{ $article->remise }}" class="form-control @error('articles.*.remise') is-invalid @enderror" />
            @error('remise')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3 col-lg-1">
            <label for="price_total">TOTAL HT</label>
            <input type="text" name="price_total" id="price_total" value="{{ $article->price_total }}"
                class="form-control @error('articles.*.price_total') is-invalid @enderror" readonly />
            @error('price_total')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3 col-lg-1">

            <button title="editer l'article" wire:click="updateArticle()" type="button"
                class="mt-4 btn btn-info waves-effect waves-light">

                <i class="fas fa-edit font-size-16"></i>
            </button>
            <button type="button" class="deleteRecord mt-4 btn btn-danger waves-effect waves-light"
                data-article="{{ $article->uuid }}" data-invoice="{{ $document->uuid }}">
                <i class="fas fa-trash-alt font-size-16"></i>
            </button>
        </div>

    </div>

</div>

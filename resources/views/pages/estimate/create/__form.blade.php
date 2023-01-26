<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
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
                                Enregistrer
                            </button>
                        </div>
                    </div>
                </div>

                <form id="clientForm" action="{{ route('finance:sells:clients.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="entreprise">Raison sociale *</label>
                                <input id="entreprise" name="entreprise" type="text"
                                    class="form-control @error('entreprise') is-invalid @enderror"
                                    value="{{ old('entreprise') }}" required>
                                @error('entreprise')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="contact">Contact (représenté par qui) *</label>
                                <input id="contact" name="contact" type="text"
                                    class="form-control @error('contact') is-invalid @enderror"
                                    value="{{ old('contact') }}" required>
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
                                    value="{{ old('telephone') }}" required>
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <hr>

                            {{-- @include('theme.pages.Client.__create.__add_phones') --}}


                            <div class="mb-3">
                                <label for="email">Email *</label>
                                <input id="email" name="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="addresse">Siège social *</label>
                                <input id="addresse" name="addresse" type="text"
                                    class="form-control @error('addresse') is-invalid @enderror"
                                    value="{{ old('addresse') }}" required>
                                @error('addresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="rc">R.C</label>
                                <input id="rc" name="rc" type="number"
                                    class="form-control @error('rc') is-invalid @enderror" value="{{ old('rc') }}">
                                @error('rc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ice">I.C.E *</label>
                                <input id="ice" name="ice" type="number"
                                    class="form-control @error('ice') is-invalid @enderror" value="{{ old('ice') }}"
                                    required>
                                @error('ice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="mb-3">

                            <label class="control-label">Category</label>

                            <select name="category" class="form-control @error('category') is-invalid @enderror">

                                <option value="">Select</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </select>

                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div> --}}

                            <div class="mb-3">
                                <label for="description">Remarques</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="5"
                                    name="description">{{ old('description') }}</textarea>

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

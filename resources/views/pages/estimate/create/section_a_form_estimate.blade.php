<form action="{{ route('app:estimates.update', $estimate->uuid) }}" method="post">

    <div class="block">
        <div class="block-options block-header block-header-default">
            <h3 class="block-title">
                <i class="nav-main-link-icon far fa-1x fa-rectangle-list"></i>
                Modifier le devis : {{ $estimate->full_number }}
            </h3>
            <div class="dropdown">
                <a href="{{ route('app:estimates') }}" class="btn btn-alt-secondary data-bs-toggle="modal"
                    data-bs-target="#add_estimate_modal">
                    <i class="fa fa-arrow-left  opacity-50 me-1"></i>Retour
                </a>
                <button type="button" class="btn btn-alt-info" data-bs-toggle="modal"
                    data-bs-target="#add_estimate_modal">
                    <i class="far fa-1x fa-eye opacity-50 me-1"></i>Consulter
                </button>
                <button type="button" class="btn btn-alt-danger" data-bs-toggle="modal"
                    data-bs-target="#add_estimate_modal">
                    <i class="fa fa-1x fa-file-pdf opacity-50 me-1"></i>PDF
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#add_estimate_modal">
                    <i class="far fa-1x fa-floppy-disk opacity-50 me-1"></i>Enregistrer
                </button>
                <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal"
                    data-bs-target="#add_estimate_modal">
                    <i class="fa fa-1x fa-check opacity-50 me-1"></i>Valider
                </button>
            </div>
        </div>
        @csrf
        @honeypot
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-center push">
                        <div class="col-6">
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label" for="ref">
                                    Référence
                                    <span class="text-danger">*</span>

                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('ref') is-invalid @enderror"
                                        id="ref" name="ref" value="{{ $estimate->full_number }}">
                                    @error('ref')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label" for="ref">
                                    Date d'émission
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fa  fa-calendar-days"></i>
                                        </span>
                                        <input type="text"
                                            class="js-flatpickr form-control @error('document_date') is-invalid @enderror"
                                            id="document_date" name="document_date" placeholder="d/m/Y"
                                            autocomplete="off" data-date-format="d/m/Y"
                                            value="{{ $estimate->document_date->format('d/m/Y') }}" required>

                                        @error('document_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label" for="validity">
                                    Durée de validité
                                    <span class="text-danger">*</span>

                                </label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control @error('validity') is-invalid @enderror"
                                        id="validity" name="validity" min="1" value="15">
                                    @error('validity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label" for="due_date">
                                    Date d échéance
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fa  fa-calendar-days"></i>
                                        </span>
                                        <input type="text"
                                            class="js-flatpickr form-control @error('due_date') is-invalid @enderror"
                                            id="due_date" name="due_date" placeholder="d/m/Y" autocomplete="off"
                                            data-date-format="d/m/Y" value="{{ $estimate->due_date?->format('d/m/Y') }}"
                                            required>

                                        @error('due_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label" for="client">
                                    Client
                                    <span class="text-danger">*</span>

                                </label>
                                <div class="col-sm-8">

                                    <select class="form-select @error('client') @enderror" id="client"
                                        name="client" disabled>
                                        <option value="{{ $estimate->client?->id }}">
                                            {{ $estimate->client?->entreprise }}</option>
                                    </select>
                                    @error('client')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label" for="currency">
                                    Devise
                                    <span class="text-danger">*</span>

                                </label>
                                <div class="col-sm-8">

                                    <select class="form-select @error('currency') @enderror" id="currency"
                                        name="currency">
                                        @foreach ($devis as $devi)
                                            <option value="{{ $devi->id }}">
                                                {{ $devi->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('currency')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-4 col-form-label" for="payment">
                                    Mode de paiement
                                    <span class="text-danger">*</span>

                                </label>
                                <div class="col-sm-8">

                                    <select class="form-select @error('payment') @enderror" id="payment"
                                        name="payment">
                                        @foreach ($payments as $payment)
                                            <option value="{{ $payment->id }}">
                                                {{ $payment->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('payment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center push">
                        <table class="table table-striped box-shadow-none mt-4" id="billTbl">
                            <thead>
                                <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                    <th scope="col">#</th>
                                    <th scope="col" class="required">Product</th>
                                    <th scope="col" class="required">Qty</th>
                                    <th scope="col" class="required">Unit Price</th>
                                    <th scope="col">Tax</th>
                                    <th scope="col" class="required">Amount</th>
                                    <th scope="col" class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody class="invoice-item-container">
                                <tr class="tax-tr">
                                    <td class="text-center item-number align-center">1</td>
                                    <td class="table__item-desc w-25">
                                        <select class="form-select product io-select2 select2-hidden-accessible"
                                            required="" data-control="select2" name="product_id[]" tabindex="-1"
                                            aria-hidden="true" data-select2-id="select2-data-1234-h47i">
                                            <option selected="selected" value=""
                                                data-select2-id="select2-data-1236-bedo">Select
                                                Product or Enter free text</option>
                                            <option value="24" data-select2-id="select2-data-2182-7hfs">10 hrs per
                                                day</option>
                                            <option value="112" data-select2-id="select2-data-2183-ei0v">123
                                            </option>
                                            <option value="39" data-select2-id="select2-data-2184-qxfu">360 Sanal
                                                Tur</option>
                                            <option value="25" data-select2-id="select2-data-2185-58hq">8Hrs. NC
                                                Plus Package</option>
                                        </select>
                                    </td>
                                    <td class="table__qty">
                                        <input class="form-control qty " required="" type="number"
                                            min="0" step=".01"
                                            oninput="validity.valid||(value=value.replace(/[e\+\-]/gi,''))"
                                            name="quantity[]">
                                    </td>
                                    <td>
                                        <input class="form-control price-input price "
                                            oninput="validity.valid||(value=value.replace(/[e\+\-]/gi,''))"
                                            min="0" step=".01" pattern="^\d*(\.\d{0,2})?$" required=""
                                            onkeypress="if(this.value.length==8) return false;" name="price[]"
                                            type="number">
                                    </td>
                                    <td data-select2-id="select2-data-1705-4ej1">
                                        <select name="tax[]"
                                            class="form-select io-select2 fw-bold tax select2-hidden-accessible"
                                            data-control="select2" multiple="" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-1273-efee">
                                            <option value="5" data-id="1"
                                                data-select2-id="select2-data-1707-l9if">VAT 5%
                                            </option>
                                            <option value="2.5" data-id="2"
                                                data-select2-id="select2-data-1708-z03k">SGST 2.5
                                            </option>
                                            <option value="9" data-id="4"
                                                data-select2-id="select2-data-1709-xjyc">IGST</option>
                                            <option value="20" data-id="6"
                                                data-select2-id="select2-data-1710-xcld">MwsT</option>
                                            <option value="18" data-id="7"
                                                data-select2-id="select2-data-1711-qr6y">CGST AND SGST
                                            </option>
                                            <option value="8.25" data-id="10"
                                                data-select2-id="select2-data-1712-a1ec">Test</option>
                                            <option value="975" data-id="11"
                                                data-select2-id="select2-data-1713-rwab">TVQ</option>
                                            <option value="9" data-id="12"
                                                data-select2-id="select2-data-1714-p1yw">CGST</option>
                                            <option value="18" data-id="13"
                                                data-select2-id="select2-data-1715-b4zl">VAT TWO
                                            </option>
                                            <option value="21" data-id="15"
                                                data-select2-id="select2-data-1716-fi11">BTW 21
                                            </option>
                                            <option value="30" data-id="16"
                                                data-select2-id="select2-data-1717-jvsd">New VAT
                                            </option>
                                            <option value="8" data-id="18"
                                                data-select2-id="select2-data-1718-b748">gst-8</option>
                                            <option value="50" data-id="21"
                                                data-select2-id="select2-data-1719-a61c">aq</option>
                                            <option value="5" data-id="22"
                                                data-select2-id="select2-data-1720-mti3">Rogan Becker
                                            </option>
                                            <option value="21" data-id="24"
                                                data-select2-id="select2-data-1721-03ak">MwST Inklusive
                                            </option>
                                            <option value="7" data-id="25"
                                                data-select2-id="select2-data-1722-os9o">vataa</option>
                                            <option value="15" data-id="26"
                                                data-select2-id="select2-data-1723-vw0z">Retención
                                            </option>
                                            <option value="0" data-id="29"
                                                data-select2-id="select2-data-1724-pf31">لا توجد
                                            </option>
                                            <option value="21" data-id="31"
                                                data-select2-id="select2-data-1725-jbvh">IVA</option>
                                            <option value="12" data-id="32"
                                                data-select2-id="select2-data-1726-owqw">VATAX</option>
                                            <option value="18" data-id="33"
                                                data-select2-id="select2-data-1727-hchb">GST</option>
                                            <option value="123" data-id="36"
                                                data-select2-id="select2-data-1728-jh4n">sss</option>
                                            <option value="0" data-id="37"
                                                data-select2-id="select2-data-1729-0zaz">IMPUESTOS
                                            </option>
                                            <option value="92" data-id="38"
                                                data-select2-id="select2-data-1730-2hcv">Allah Ditta
                                            </option>
                                            <option value="15" data-id="39"
                                                data-select2-id="select2-data-1731-bggb">القيمة المضافة
                                            </option>
                                            <option value="9" data-id="41"
                                                data-select2-id="select2-data-1732-lfww">VAT 9%
                                            </option>
                                            <option value="19" data-id="42"
                                                data-select2-id="select2-data-1733-4gcl">VAT 19%
                                            </option>
                                            <option value="5" data-id="44"
                                                data-select2-id="select2-data-1734-4xwa">VAT</option>
                                            <option value="21" data-id="46"
                                                data-select2-id="select2-data-1735-ak8v">BE</option>
                                            <option value="18" data-id="47"
                                                data-select2-id="select2-data-1736-q2df">IGV</option>
                                            <option value="7" data-id="48"
                                                data-select2-id="select2-data-1737-0d3q">7 Prozent
                                            </option>
                                            <option value="1" data-id="49"
                                                data-select2-id="select2-data-1738-bowd">Revenue Tax
                                            </option>
                                            <option value="18" data-id="50"
                                                data-select2-id="select2-data-1739-lx5v">GST 18%
                                            </option>
                                            <option value="20" data-id="51"
                                                data-select2-id="select2-data-1740-yj9u">TVA</option>
                                            <option value="23" data-id="52"
                                                data-select2-id="select2-data-1741-9mqf">VAT 23%
                                            </option>
                                            <option value="15" data-id="53"
                                                data-select2-id="select2-data-1742-78f0">abc</option>
                                        </select><span
                                            class="select2 select2-container select2-container--bootstrap-5 select2-container--below"
                                            dir="ltr" data-select2-id="select2-data-1274-zxjc"
                                            style="width: 161.219px;"><span class="selection"><span
                                                    class="select2-selection select2-selection--multiple"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered"
                                                        id="select2-tax-qt-container"></ul><span
                                                        class="select2-search select2-search--inline">
                                                        <textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
                                                            spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
                                                            aria-describedby="select2-tax-qt-container" placeholder="Select TAX" style="width: 100%;"></textarea>
                                                    </span>
                                                </span></span><span class="dropdown-wrapper"
                                                aria-hidden="true"></span></span>
                                    </td>
                                    <td class="text-end item-total pt-8 text-nowrap">4,800.00</td>
                                    <td class="text-end">
                                        <button type="button" title="Delete"
                                            class="btn btn-icon fs-3 text-danger btn-active-color-danger delete-invoice-item">
                                            <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="trash" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                                </path>
                                            </svg>
                                            <!-- <i class="fa-solid fa-trash"></i> Font Awesome fontawesome.com -->
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            <i class="nav-main-link-icon far fa-1x fa-rectangle-list"></i>
            Liste des devis
        </h3>

        <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#add_estimate_modal">
            <i class="far fa-1x fa-plus opacity-50 me-1"></i>Nouveau devis
        </button>
    </div>
    <div class="block-content block-content-full">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive {{--js-dataTable-buttons--}}">
            <thead>
                <tr>
                    <th> RÉFÉRENCE</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Client</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Date de devis</th>
                    <th style="width: 15%;">Montant HT</th>
                    <th style="width: 15%;">Montant TVA</th>
                    <th style="width: 15%;">Montant TOTAL</th>
                    <th style="width: 15%;">Date d'échéance</th>
                    <th style="width: 15%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($estimates as $estimate)
                    <tr>
                        <td class="fw-semibold">
                            <a href="be_pages_generic_blank.html">{{ $estimate->full_number }}</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{ $estimate->client?->entreprise }}<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{ $estimate->document_date?->format('d-m-Y') }}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{ $estimate->formated_price_ht }}500
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{ $estimate->formated_total_tax }}500
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{ $estimate->formated_price_total }}540
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{ $estimate->due_date?->format('d-m-Y') }} nh
                        </td>
                        <td class="d-none d-sm-table-cell">
                           ggrr
                        </td>
                    </tr>
                @empty
                    <p>No Data</p>
                @endforelse

            </tbody>
        </table>
    </div>
</div>

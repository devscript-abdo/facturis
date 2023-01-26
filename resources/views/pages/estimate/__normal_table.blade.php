<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Actions Disponible</h4>
                <p class="card-title-desc"></p>
                <div class="button-items ">

                    <button class="btn btn-primary btn-label  mr-3 mb-2" type="button" data-bs-toggle="modal"
                        data-bs-target=".addEstimateModal">
                        <i class="bx bxs-add-to-queue label-icon"></i>
                        Nouveau DEVIS
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @include('layouts._parts.__messages')

                <div class="table-responsive">
                    <table class="table table-bordered border-danger table-hover align-middle table-nowrap table-check">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;" class="align-middle">
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="checkAllCTLS">
                                        <label class="form-check-label" for="checkAllCTLS"></label>
                                    </div>
                                </th>
                                <th>RÉFÉRENCE</th>
                                <th>Client</th>
                                <th>Date d'émission</th>
                                <th>Montant H.T</th>
                                <th>Montant TVA</th>
                                <th>Montant TOTAL</th>
                                <th>Date d'échéance</th>
                                <th>STATUT</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estimates as $estimate)
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox"
                                                id="orderidcheck-{{ $estimate->id }}">
                                            <label class="form-check-label"
                                                for="orderidcheck-{{ $estimate->id }}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-body fw-bold">
                                            {{ $estimate->full_number }}
                                        </a>

                                    </td>
                                    <td> {{ $estimate->client?->entreprise }}</td>
                                    <td>
                                        {{ $estimate->document_date->format('d-m-Y') }}
                                    </td>
                                    <td>
                                        {{ $estimate->formated_price_ht }} DH
                                    </td>
                                    <td>
                                        {{ $estimate->formated_total_tva }} DH
                                    </td>
                                    <td>
                                        {{ $estimate->formated_price_total }} DH
                                    </td>
                                    <td>
                                        {{ $estimate->due_date?->format('d-m-Y') }}
                                    </td>
                                    <td>
                                        status
                                    </td>

                                    <td>
                                        <div class="d-flex gap-3">

                                            <a href="#" target="__blank" class="text-success"
                                                data-bs-toggle="modal"
                                                data-bs-target=".printEstimate-{{ $estimate->uuid }}">
                                                <i class="mdi mdi-file-pdf-outline font-size-18"></i>
                                            </a>

                                            <a href="{{ route('finance:sells:estimates.edit', $estimate->uuid) }}"
                                                class="text-success">
                                                <i class="mdi mdi-pencil font-size-18"></i>
                                            </a>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
                {{ $estimates->links() }}
            </div>

        </div>

    </div>

</div>

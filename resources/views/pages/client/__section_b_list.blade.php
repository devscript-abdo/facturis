<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            <i class="nav-main-link-icon far fa-1x fa-rectangle-list"></i>
            Liste des clients
        </h3>
        <div class="block-options">
            <div class="dropdown">
                <a href="{{route('app:clients.create')}}" class="btn btn-alt-primary">
                    <i class="fa fa-fw fa-plus me-1"></i>
                    Nouveau client
                </a>
                <button type="button" class="btn btn-alt-secondary" id="dropdown-ecom-filters" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Filters
                    <i class="fa fa-angle-down ms-1"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-ecom-filters">
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        Pending..
                        <span class="badge bg-primary rounded-pill">78</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        Processing
                        <span class="badge bg-black-50 rounded-pill">12</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        For Delivery
                        <span class="badge bg-black-50 rounded-pill">20</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        Canceled
                        <span class="badge bg-black-50 rounded-pill">5</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        Delivered
                        <span class="badge bg-black-50 rounded-pill">280</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        All
                        <span class="badge bg-black-50 rounded-pill">19k</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="block-content bg-body-dark">

        <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
            <div class="mb-4">
                <input type="text" class="form-control form-control-alt" id="dm-ecom-orders-search"
                    name="dm-ecom-orders-search" placeholder="Chercher">
            </div>
        </form>

    </div>
    <div class="block-content">

        <div class="table-responsive">
            <table class="table table-borderless table-striped table-vcenter fs-sm">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;">Code client</th>
                        <th class="d-none d-sm-table-cell text-center">Raison Sociale</th>
                        <th class="d-none d-sm-table-cell text-center">Nom du contact</th>
                        <th class="d-none d-xl-table-cell">Téléphone du contact</th>
                        <th class="d-none d-xl-table-cell text-center">Créé le</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr {{$client->uuid}}>
                            <td class="text-center">
                                <a class="fw-semibold" href="be_pages_ecom_order.html">
                                    <strong>{{$client->code}}</strong>
                                </a>
                            </td>
                            <td class="d-none d-sm-table-cell text-center">{{$client->entreprise}}</td>
                            <td class="d-none d-sm-table-cell text-center">
                               {{$client->contact}}
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <a class="fw-semibold" href="#">{{$client->telephone}}</a>
                            </td>
                            <td class="d-none d-xl-table-cell text-center">
                                {{$client->created_at->format('d-m-Y - H:i')}}
                            </td>
                            <td class="text-center fs-base">
                                <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                    <i class="fa fa-fw fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-alt-secondary" href="{{route('app:clients.edit',$client->uuid)}}">
                                    <i class="far  fa-pen-to-square"></i>
                                </a>
                                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-times text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END All Orders Table -->

        <!-- Pagination -->
        @include('pages.client.__pagination')
        <!-- END Pagination -->
    </div>
</div>

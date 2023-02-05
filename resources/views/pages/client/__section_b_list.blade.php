<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            <i class="nav-main-link-icon far fa-1x fa-rectangle-list"></i>
            Liste des clients
        </h3>
        <div class="block-options">
            <div class="dropdown">
                <button type="button" class="btn btn-alt-primary">Nouveau client</button>
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
        <!-- Search Form -->
        <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
            <div class="mb-4">
                <input type="text" class="form-control form-control-alt" id="dm-ecom-orders-search"
                    name="dm-ecom-orders-search" placeholder="Chercher">
            </div>
        </form>
        <!-- END Search Form -->
    </div>
    <div class="block-content">
        <!-- All Orders Table -->
        <div class="table-responsive">
            <table class="table table-borderless table-striped table-vcenter fs-sm">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;">ID</th>
                        <th class="d-none d-sm-table-cell text-center">Submitted</th>
                        <th>Status</th>
                        <th class="d-none d-xl-table-cell">Customer</th>
                        <th class="d-none d-xl-table-cell text-center">Products</th>
                        <th class="d-none d-sm-table-cell text-end">Value</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019265</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">28/10/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-warning">Processing</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Danielle Jones</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">3</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1580,26</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019264</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">24/01/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-warning">Processing</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Ryan Flores</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">6</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1203,63</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019263</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">23/06/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-danger">Canceled</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Jose Parker</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">7</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$2447,33</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019262</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">01/09/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-success">Delivered</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Amber Harvey</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">7</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$2287,34</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019261</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">04/07/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-danger">Canceled</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Henry Harrison</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">4</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$427,24</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019260</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">20/01/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-info">For delivery</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Brian Cruz</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">5</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1092,92</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019259</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">26/09/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-warning">Processing</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Judy Ford</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">5</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$2038,87</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019258</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">14/03/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-success">Delivered</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Betty Kelley</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">9</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$683,89</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019257</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">09/11/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-success">Delivered</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Carol White</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">2</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$408,39</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019256</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">22/02/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-warning">Processing</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Adam McCoy</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">5</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1320,92</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019255</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">12/07/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-success">Delivered</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Justin Hunt</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">8</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1973,46</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019254</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">07/01/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-success">Delivered</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Sara Fields</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">9</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1086,36</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019253</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">08/02/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-info">For delivery</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Henry Harrison</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">6</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1158,19</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019252</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">10/11/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-danger">Canceled</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Jeffrey Shaw</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">6</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$491,23</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019251</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">19/10/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-warning">Processing</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Lori Grant</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">8</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1421,62</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019250</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">18/10/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-info">For delivery</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Jose Wagner</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">8</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1795,42</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019249</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">22/06/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-warning">Processing</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Henry Harrison</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">9</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1322,62</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019248</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">25/05/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-info">For delivery</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Betty Kelley</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">9</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$273,16</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                <strong>ORD.019247</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">11/07/2020</td>
                        <td class="fs-base">
                            <span class="badge rounded-pill bg-success">Delivered</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <a class="fw-semibold" href="be_pages_ecom_customer.html">Amber Harvey</a>
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            <a class="fw-semibold" href="be_pages_ecom_order.html">4</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                            <strong>$1850,33</strong>
                        </td>
                        <td class="text-center fs-base">
                            <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html">
                                <i class="fa fa-fw fa-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END All Orders Table -->

        <!-- Pagination -->
        @include('pages.client.__pagination')
        <!-- END Pagination -->
    </div>
</div>

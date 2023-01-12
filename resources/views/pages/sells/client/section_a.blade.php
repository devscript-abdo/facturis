<div class="card">
    <div class="card-header border-0 pt-6">
        <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                            transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <input type="text" data-facturis-customer-table-filter="search"
                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
            </div>
        </div>

        <div class="card-toolbar">
            <div class="d-flex justify-content-end" data-facturis-customer-table-toolbar="base">
                <button type="button" class="btn btn-light-primary me-3" data-facturis-menu-trigger="click"
                    data-facturis-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    Filter
                </button>
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-facturis-menu="true"
                    id="kt-toolbar-filter">

                    <div class="px-7 py-5">
                        <div class="fs-4 text-dark fw-bold">Filter Options</div>
                    </div>

                    <div class="separator border-gray-200"></div>

                    <div class="px-7 py-5">
                        <div class="mb-10">
                            <label class="form-label fs-5 fw-semibold mb-3">Month:</label>

                            <select class="form-select form-select-solid fw-bold" data-facturis-select2="true"
                                data-placeholder="Select option" data-allow-clear="true"
                                data-facturis-customer-table-filter="month" data-dropdown-parent="#kt-toolbar-filter">
                                <option></option>
                                <option value="aug">August</option>
                                <option value="sep">September</option>
                                <option value="oct">October</option>
                                <option value="nov">November</option>
                                <option value="dec">December</option>
                            </select>
                        </div>

                        <div class="mb-10">
                            <label class="form-label fs-5 fw-semibold mb-3">Payment Type:</label>

                            <div class="d-flex flex-column flex-wrap fw-semibold"
                                data-facturis-customer-table-filter="payment_type">

                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                    <input class="form-check-input" type="radio" name="payment_type" value="all"
                                        checked="checked" />
                                    <span class="form-check-label text-gray-600">All</span>
                                </label>

                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                    <input class="form-check-input" type="radio" name="payment_type" value="visa" />
                                    <span class="form-check-label text-gray-600">Visa</span>
                                </label>

                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                    <input class="form-check-input" type="radio" name="payment_type"
                                        value="mastercard" />
                                    <span class="form-check-label text-gray-600">Mastercard</span>
                                </label>

                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="radio" name="payment_type"
                                        value="american_express" />
                                    <span class="form-check-label text-gray-600">American Express</span>
                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2"
                                data-facturis-menu-dismiss="true"
                                data-facturis-customer-table-filter="reset">Reset</button>
                            <button type="submit" class="btn btn-primary" data-facturis-menu-dismiss="true"
                                data-facturis-customer-table-filter="filter">Apply</button>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                    data-bs-target="#facturis_id_customers_export_modal">
                    <!--facturisStart::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2"
                                rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
                            <path
                                d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                fill="currentColor" />
                            <path opacity="0.3"
                                d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    Export
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#facturis_id_modal_add_customer">Add Customer</button>
            </div>

            <div class="d-flex justify-content-end align-items-center d-none"
                data-facturis-customer-table-toolbar="selected">
                <div class="fw-bold me-5">
                    <span class="me-2" data-facturis-customer-table-select="selected_count"></span>Selected
                </div>
                <button type="button" class="btn btn-danger"
                    data-facturis-customer-table-select="delete_selected">Delete Selected</button>
            </div>
        </div>
    </div>

    <div class="card-body pt-0">

        <table class="table align-middle table-row-dashed fs-6 gy-5" id="facturis_id_customers_table">

            <thead>
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-facturis-check="true"
                                data-facturis-check-target="#facturis_id_customers_table .form-check-input"
                                value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px">Code client</th>
                    <th class="min-w-125px">Entreprise</th>
                    <th class="min-w-125px">Telephone</th>
                    <th class="min-w-125px">Email</th>
                    <th class="min-w-125px">Created Date</th>
                    <th class="text-end min-w-70px">Actions</th>
                </tr>

            </thead>

            <tbody class="fw-semibold text-gray-600">


                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>

                    <td>
                        <a href="../../demo1/dist/apps/customers/view.html"
                            class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                    </td>

                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
                    </td>

                    <td>-</td>

                    <td data-filter="mastercard">
                        <img src="{{ asset('assets/media/svg/card-logos/mastercard.svg') }}" class="w-35px me-3"
                            alt="" />**** 1329
                    </td>

                    <td>14 Dec 2020, 8:43 pm</td>

                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                            data-facturis-menu-trigger="click" data-facturis-menu-placement="bottom-end">Actions
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                            data-facturis-menu="true">
                            <div class="menu-item px-3">
                                <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                            </div>

                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"
                                    data-facturis-customer-table-filter="delete_row">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

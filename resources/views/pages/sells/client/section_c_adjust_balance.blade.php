<div class="modal fade" id="facturis_id_customers_export_modal" tabindex="-1" aria-hidden="true">
    <!--facturisStart::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--facturisStart::Modal content-->
        <div class="modal-content">
            <!--facturisStart::Modal header-->
            <div class="modal-header">
                <!--facturisStart::Modal title-->
                <h2 class="fw-bold">Export Customers</h2>
                <!--facturisEnd::Modal title-->
                <!--facturisStart::Close-->
                <div id="facturis_id_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                    <!--facturisStart::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--facturisEnd::Svg Icon-->
                </div>
                <!--facturisEnd::Close-->
            </div>
            <!--facturisEnd::Modal header-->
            <!--facturisStart::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--facturisStart::Form-->
                <form id="facturis_id_customers_export_form" class="form" action="#">
                    <!--facturisStart::Input group-->
                    <div class="fv-row mb-10">
                        <!--facturisStart::Label-->
                        <label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
                        <!--facturisEnd::Label-->
                        <!--facturisStart::Input-->
                        <select data-control="select2" data-placeholder="Select a format" data-hide-search="true"
                            name="format" class="form-select form-select-solid">
                            <option value="excell">Excel</option>
                            <option value="pdf">PDF</option>
                            <option value="cvs">CVS</option>
                            <option value="zip">ZIP</option>
                        </select>
                        <!--facturisEnd::Input-->
                    </div>
                    <!--facturisEnd::Input group-->
                    <!--facturisStart::Input group-->
                    <div class="fv-row mb-10">
                        <!--facturisStart::Label-->
                        <label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
                        <!--facturisEnd::Label-->
                        <!--facturisStart::Input-->
                        <input class="form-control form-control-solid" placeholder="Pick a date" name="date" />
                        <!--facturisEnd::Input-->
                    </div>
                    <!--facturisEnd::Input group-->
                    <!--facturisStart::Row-->
                    <div class="row fv-row mb-15">
                        <!--facturisStart::Label-->
                        <label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
                        <!--facturisEnd::Label-->
                        <!--facturisStart::Radio group-->
                        <div class="d-flex flex-column">
                            <!--facturisStart::Radio button-->
                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="1" checked="checked"
                                    name="payment_type" />
                                <span class="form-check-label text-gray-600 fw-semibold">All</span>
                            </label>
                            <!--facturisEnd::Radio button-->
                            <!--facturisStart::Radio button-->
                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked"
                                    name="payment_type" />
                                <span class="form-check-label text-gray-600 fw-semibold">Visa</span>
                            </label>
                            <!--facturisEnd::Radio button-->
                            <!--facturisStart::Radio button-->
                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="3" name="payment_type" />
                                <span class="form-check-label text-gray-600 fw-semibold">Mastercard</span>
                            </label>
                            <!--facturisEnd::Radio button-->
                            <!--facturisStart::Radio button-->
                            <label class="form-check form-check-custom form-check-sm form-check-solid">
                                <input class="form-check-input" type="checkbox" value="4" name="payment_type" />
                                <span class="form-check-label text-gray-600 fw-semibold">American Express</span>
                            </label>
                            <!--facturisEnd::Radio button-->
                        </div>
                        <!--facturisEnd::Input group-->
                    </div>
                    <!--facturisEnd::Row-->
                    <!--facturisStart::Actions-->
                    <div class="text-center">
                        <button type="reset" id="facturis_id_customers_export_cancel"
                            class="btn btn-light me-3">Discard</button>
                        <button type="submit" id="facturis_id_customers_export_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--facturisEnd::Actions-->
                </form>
                <!--facturisEnd::Form-->
            </div>
            <!--facturisEnd::Modal body-->
        </div>
        <!--facturisEnd::Modal content-->
    </div>
    <!--facturisEnd::Modal dialog-->
</div>

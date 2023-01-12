<div id="facturis_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--facturisStart::Toolbar container-->
    <div id="facturis_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <!--facturisStart::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--facturisStart::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Customer List
            </h1>
            <!--facturisEnd::Title-->
            <!--facturisStart::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--facturisStart::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                </li>
                <!--facturisEnd::Item-->
                <!--facturisStart::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--facturisEnd::Item-->
                <!--facturisStart::Item-->
                <li class="breadcrumb-item text-muted">Customers</li>
                <!--facturisEnd::Item-->
            </ul>
            <!--facturisEnd::Breadcrumb-->
        </div>
        <!--facturisEnd::Page title-->
        <!--facturisStart::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--facturisStart::Filter menu-->
            <div class="m-0">
                <!--facturisStart::Menu toggle-->
                <a href="#"
                    class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                    data-facturis-menu-trigger="click" data-facturis-menu-placement="bottom-end">
                    <!--facturisStart::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--facturisEnd::Svg Icon-->Filter
                </a>
                <!--facturisEnd::Menu toggle-->
                <!--facturisStart::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-facturis-menu="true"
                    id="facturis_id_menu_633e6e362611f">
                    <!--facturisStart::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                    </div>
                    <!--facturisEnd::Header-->
                    <!--facturisStart::Menu separator-->
                    <div class="separator border-gray-200"></div>
                    <!--facturisEnd::Menu separator-->
                    <!--facturisStart::Form-->
                    <div class="px-7 py-5">
                        <!--facturisStart::Input group-->
                        <div class="mb-10">
                            <!--facturisStart::Label-->
                            <label class="form-label fw-semibold">Status:</label>
                            <!--facturisEnd::Label-->
                            <!--facturisStart::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-facturis-select2="true"
                                    data-placeholder="Select option"
                                    data-dropdown-parent="#facturis_id_menu_633e6e362611f" data-allow-clear="true">
                                    <option></option>
                                    <option value="1">Approved</option>
                                    <option value="2">Pending</option>
                                    <option value="2">In Process</option>
                                    <option value="2">Rejected</option>
                                </select>
                            </div>
                            <!--facturisEnd::Input-->
                        </div>
                        <!--facturisEnd::Input group-->
                        <!--facturisStart::Input group-->
                        <div class="mb-10">
                            <!--facturisStart::Label-->
                            <label class="form-label fw-semibold">Member Type:</label>
                            <!--facturisEnd::Label-->
                            <!--facturisStart::Options-->
                            <div class="d-flex">
                                <!--facturisStart::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                    <span class="form-check-label">Author</span>
                                </label>
                                <!--facturisEnd::Options-->
                                <!--facturisStart::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                    <span class="form-check-label">Customer</span>
                                </label>
                                <!--facturisEnd::Options-->
                            </div>
                            <!--facturisEnd::Options-->
                        </div>
                        <!--facturisEnd::Input group-->
                        <!--facturisStart::Input group-->
                        <div class="mb-10">
                            <!--facturisStart::Label-->
                            <label class="form-label fw-semibold">Notifications:</label>
                            <!--facturisEnd::Label-->
                            <!--facturisStart::Switch-->
                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" name="notifications"
                                    checked="checked" />
                                <label class="form-check-label">Enabled</label>
                            </div>
                            <!--facturisEnd::Switch-->
                        </div>
                        <!--facturisEnd::Input group-->
                        <!--facturisStart::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                data-facturis-menu-dismiss="true">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary"
                                data-facturis-menu-dismiss="true">Apply</button>
                        </div>
                        <!--facturisEnd::Actions-->
                    </div>
                    <!--facturisEnd::Form-->
                </div>
                <!--facturisEnd::Menu 1-->
            </div>
            <!--facturisEnd::Filter menu-->
            <!--facturisStart::Secondary button-->
            <!--facturisEnd::Secondary button-->
            <!--facturisStart::Primary button-->
            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                data-bs-target="#facturis_id_modal_create_app">Create</a>
            <!--facturisEnd::Primary button-->
        </div>
        <!--facturisEnd::Actions-->
    </div>
    <!--facturisEnd::Toolbar container-->
</div>

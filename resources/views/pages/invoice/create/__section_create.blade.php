<section class="invoice-add-wrapper">
    <div class="row invoice-add">
        <!-- Invoice Add Left starts -->
        <div class="col-xl-9 col-md-8 col-12">
            <div class="card invoice-preview-card">
                <!-- Header starts -->
                <div class="card-body invoice-padding pb-0">
                    <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                        <div>
                            <div class="logo-wrapper">
                                <x-facturis.logo.logo />
                                <h3 class="text-primary invoice-logo">FACTURIS</h3>
                            </div>
                            <p class="card-text mb-25">Office 149, 450 South Brand Brooklyn</p>
                            <p class="card-text mb-25">San Diego County, CA 91905, USA</p>
                            <p class="card-text mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                        </div>
                        <div class="invoice-number-date mt-md-0 mt-2">
                            <div class="d-flex align-items-center justify-content-md-end mb-1">
                                <h4 class="invoice-title">Invoice</h4>
                                <div class="input-group input-group-merge invoice-edit-input-group">
                                    <div class="input-group-text">
                                        <i data-feather="hash"></i>
                                    </div>
                                    <input type="text" class="form-control invoice-edit-input" placeholder="53634" />
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <span class="title">Date:</span>
                                <input type="text" class="form-control invoice-edit-input date-picker" />
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="title">Due Date:</span>
                                <input type="text" class="form-control invoice-edit-input due-date-picker" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header ends -->

                <hr class="invoice-spacing" />

                <!-- Address and Contact starts -->
                <div class="card-body invoice-padding pt-0">
                    <div class="row row-bill-to invoice-spacing">
                        <div class="col-xl-8 mb-lg-1 col-bill-to ps-0">
                            <h6 class="invoice-to-title">Invoice To:</h6>
                            <div class="invoice-customer">
                                <select class="invoiceto form-select">
                                    <option></option>
                                    <option value="shelby">Shelby Company Limited</option>
                                    <option value="hunters">Hunters Corp</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 p-0 ps-xl-2 mt-xl-0 mt-2">
                            <h6 class="mb-2">Payment Details:</h6>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pe-1">Total Due:</td>
                                        <td><strong>$12,110.55</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Bank name:</td>
                                        <td>American Bank</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Country:</td>
                                        <td>United States</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">IBAN:</td>
                                        <td>ETD95476213874685</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">SWIFT code:</td>
                                        <td>BR91905</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Address and Contact ends -->

                <!-- Product Details starts -->
                <div class="card-body invoice-padding invoice-product-details">
                    <form class="source-item">
                        <div data-repeater-list="group-a">
                            <div class="repeater-wrapper" data-repeater-item>
                                <div class="row">
                                    <div class="col-12 d-flex product-details-border position-relative pe-0">
                                        <div class="row w-100 pe-lg-0 pe-1 py-2">
                                            <div class="col-lg-5 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                                                <p class="card-text col-title mb-md-50 mb-0">Item</p>
                                                <select class="form-select item-details">
                                                    <option value="App Design">App Design</option>
                                                    <option value="App Customization" selected>App Customization</option>
                                                    <option value="ABC Template">ABC Template</option>
                                                    <option value="App Development">App Development</option>
                                                </select>
                                                <textarea class="form-control mt-2" rows="1">Customization & Bug Fixes</textarea>
                                            </div>
                                            <div class="col-lg-3 col-12 my-lg-0 my-2">
                                                <p class="card-text col-title mb-md-2 mb-0">Cost</p>
                                                <input type="text" class="form-control" value="24" placeholder="24" />
                                                <div class="mt-2">
                                                    <span>Discount:</span>
                                                    <span class="discount">0%</span>
                                                    <span class="tax-1 ms-50" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">0%</span>
                                                    <span class="tax-2 ms-50" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">0%</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-12 my-lg-0 my-2">
                                                <p class="card-text col-title mb-md-2 mb-0">Qty</p>
                                                <input type="number" class="form-control" value="1" placeholder="1" />
                                            </div>
                                            <div class="col-lg-2 col-12 mt-lg-0 mt-2">
                                                <p class="card-text col-title mb-md-50 mb-0">Price</p>
                                                <p class="card-text mb-0">$24.00</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-center justify-content-between border-start
                                                invoice-product-actions py-50 px-25 ">
        
                                            <i data-feather="x" class="cursor-pointer font-medium-3" data-repeater-delete></i>
                                            <div class="dropdown">
                                                <i class="cursor-pointer more-options-dropdown me-0" data-feather="settings" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </i>
                                                <div class="dropdown-menu dropdown-menu-end item-options-menu p-50" aria-labelledby="dropdownMenuButton">
                                                    <div class="mb-1">
                                                        <label for="discount-input" class="form-label">Discount(%)</label>
                                                        <input type="number" class="form-control" id="discount-input" />
                                                    </div>
                                                    <div class="form-row mt-50">
                                                        <div class="mb-1 col-md-6">
                                                            <label for="tax-1-input" class="form-label">Tax 1</label>
                                                            <select name="tax-1-input" id="tax-1-input" class="form-select tax-select">
                                                                <option value="0%" selected>0%</option>
                                                                <option value="1%">1%</option>
                                                                <option value="10%">10%</option>
                                                                <option value="18%">18%</option>
                                                                <option value="40%">40%</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-1 col-md-6">
                                                            <label for="tax-2-input" class="form-label">Tax 2</label>
                                                            <select name="tax-2-input" id="tax-2-input" class="form-select tax-select">
                                                                <option value="0%" selected>0%</option>
                                                                <option value="1%">1%</option>
                                                                <option value="10%">10%</option>
                                                                <option value="18%">18%</option>
                                                                <option value="40%">40%</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-divider my-1"></div>
                                                    <div class="d-flex justify-content-between">
                                                        <button type="button" class="btn btn-outline-primary btn-apply-changes">Apply</button>
                                                        <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 px-0">
                                <button type="button" class="btn btn-primary btn-sm btn-add-new" data-repeater-create>
                                    <i data-feather="plus" class="me-25"></i>
                                    <span class="align-middle">Add Item</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Product Details ends -->

                <!-- Invoice Total starts -->
                <div class="card-body invoice-padding">
                    <div class="row invoice-sales-total-wrapper">
                        <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                            <div class="d-flex align-items-center mb-1">
                                <label for="salesperson" class="form-label">Salesperson:</label>
                                <input type="text" class="form-control ms-50" id="salesperson" placeholder="Edward Crowley" />
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                            <div class="invoice-total-wrapper">
                                <div class="invoice-total-item">
                                    <p class="invoice-total-title">Subtotal:</p>
                                    <p class="invoice-total-amount">$1800</p>
                                </div>
                                <div class="invoice-total-item">
                                    <p class="invoice-total-title">Discount:</p>
                                    <p class="invoice-total-amount">$28</p>
                                </div>
                                <div class="invoice-total-item">
                                    <p class="invoice-total-title">Tax:</p>
                                    <p class="invoice-total-amount">21%</p>
                                </div>
                                <hr class="my-50" />
                                <div class="invoice-total-item">
                                    <p class="invoice-total-title">Total:</p>
                                    <p class="invoice-total-amount">$1690</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Invoice Total ends -->

                <hr class="invoice-spacing mt-0" />

                <div class="card-body invoice-padding py-0">
                    <!-- Invoice Note starts -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-2">
                                <label for="note" class="form-label fw-bold">Note:</label>
                                <textarea class="form-control" rows="2" id="note">
It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Note ends -->
                </div>
            </div>
        </div>
        <!-- Invoice Add Left ends -->

        <!-- Invoice Add Right starts -->
        <div class="col-xl-3 col-md-4 col-12">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary w-100 mb-75" disabled>Send Invoice</button>
                    <a href="./app-invoice-preview.html" class="btn btn-outline-primary w-100 mb-75">Preview</a>
                    <button type="button" class="btn btn-outline-primary w-100">Save</button>
                </div>
            </div>
            <div class="mt-2">
                <p class="mb-50">Accept payments via</p>
                <select class="form-select">
                    <option value="Bank Account">Bank Account</option>
                    <option value="Paypal">Paypal</option>
                    <option value="UPI Transfer">UPI Transfer</option>
                </select>
                <div class="invoice-terms mt-1">
                    <div class="d-flex justify-content-between">
                        <label class="invoice-terms-title mb-0" for="paymentTerms">Payment Terms</label>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" checked id="paymentTerms" />
                            <label class="form-check-label" for="paymentTerms"></label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between py-1">
                        <label class="invoice-terms-title mb-0" for="clientNotes">Client Notes</label>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" checked id="clientNotes" />
                            <label class="form-check-label" for="clientNotes"></label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label class="invoice-terms-title mb-0" for="paymentStub">Payment Stub</label>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="paymentStub" />
                            <label class="form-check-label" for="paymentStub"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Invoice Add Right ends -->
    </div>

    <!-- Add New Client Sidebar facturis-->
     @include('pages.invoice.create.__add_client')
    <!-- /Add New Client Sidebar facturis-->
</section>
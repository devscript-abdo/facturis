<div class="modal modal-slide-in fade" id="add-new-customer-sidebar" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">
                    <span class="align-middle">Add Customer</span>
                </h5>
            </div>
            <div class="modal-body flex-grow-1">
                <form>
                    <div class="mb-1">
                        <label for="customer-name" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customer-name" placeholder="John Doe" />
                    </div>
                    <div class="mb-1">
                        <label for="customer-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="customer-email" placeholder="example@domain.com" />
                    </div>
                    <div class="mb-1">
                        <label for="customer-address" class="form-label">Customer Address</label>
                        <textarea class="form-control" id="customer-address" cols="2" rows="2" placeholder="1307 Lady Bug Drive New York"></textarea>
                    </div>
                    <div class="mb-1 position-relative">
                        <label for="customer-country" class="form-label">Country</label>
                        <select class="form-select" id="customer-country" name="customer-country">
                            <option label="select country"></option>
                            <option value="Australia">Australia</option>
                            <option value="Canada">Canada</option>
                            <option value="Russia">Russia</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United States of America">United States of America</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label for="customer-contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" id="customer-contact" placeholder="763-242-9206" />
                    </div>
                    <div class="mb-1 d-flex flex-wrap mt-2">
                        <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Add</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">Addresses (2)</h3>
    </div>
    <div class="block-content">
        <div class="row">
            <div class="col-lg-6">
                <!-- Billing Address -->
                <div class="block block-rounded block-bordered">
                    <div class="block-header border-bottom">
                        <h3 class="block-title">Adresse de facturation</h3>
                    </div>
                    <div class="block-content">
                        <div class="fs-4 mb-1">John Parker</div>
                        <address class="fs-sm">
                         {{$client->invoiceAddress?->address}}<br>
                            <i class="fa fa-phone"></i> {{$client->telephone}}<br>
                            <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">{{$client->email}}</a>
                        </address>
                    </div>
                </div>
                <!-- END Billing Address -->
            </div>
            <div class="col-lg-6">
                <!-- Shipping Address -->
                <div class="block block-rounded block-bordered">
                    <div class="block-header border-bottom">
                        <h3 class="block-title">Adresse de livraison</h3>
                    </div>
                    <div class="block-content">
                        <div class="fs-4 mb-1">John Parker</div>
                        <address class="fs-sm">
                            {{$client->deliveryAddress?->address}}<br>
                               <i class="fa fa-phone"></i> {{$client->telephone}}<br>
                               <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">{{$client->email}}</a>
                           </address>
                    </div>
                </div>
                <!-- END Shipping Address -->
            </div>
        </div>
    </div>
</div>

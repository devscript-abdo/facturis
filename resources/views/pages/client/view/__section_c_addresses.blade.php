<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">Addresses</h3>
        <a class="btn btn-alt-secondary" href="{{ route('app:clients.edit', $client->uuid) }}#address_section">
            <i class="fa fa-pencil-alt me-1"></i> Modifier
        </a>
    </div>
    <div class="block-content">
        <div class="row">
            <div class="col-lg-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header border-bottom">
                        <h3 class="block-title">Adresse de facturation</h3>
                    </div>
                    <div class="block-content">
                        <div class="fs-4 mb-1">{{ $client->invoiceAddress?->city }}</div>
                        <address class="fs-sm">
                            {{ $client->invoiceAddress?->address }}<br>
                            <i class="fa fa-phone"></i> {{ $client->telephone }}<br>
                            <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">{{ $client->email }}</a>
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header border-bottom">
                        <h3 class="block-title">Adresse de livraison</h3>
                    </div>
                    <div class="block-content">
                        <div class="fs-4 mb-1">{{ $client->deliveryAddress?->city }}</div>
                        <address class="fs-sm">
                            {{ $client->deliveryAddress?->address }}<br>
                            <i class="fa fa-phone"></i> {{ $client->telephone }}<br>
                            <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">{{ $client->email }}</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

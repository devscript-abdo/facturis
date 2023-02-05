@if (session('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <div class="flex-shrink-0">
            <i class="fa fa-fw fa-check"></i>
        </div>
        <div class="flex-grow-1 ms-3">
            <p class="mb-0">{{ session('success') }}</p>
        </div>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <div class="flex-shrink-0">
            <i class="fa fa-fw fa-info-circle"></i>
        </div>
        <div class="flex-grow-1 ms-3">
            <p class="mb-0">{{ session('error') }}</p>
        </div>
    </div>
@endif

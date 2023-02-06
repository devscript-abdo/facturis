<div class="row items-push">
    <div class="col-6">
        <a class="block block-rounded block-link-shadow text-center h-100 mb-0"
            href="{{ route('app:clients.edit', $client->uuid) }}">
            <div class="block-content py-5">
                <div class="fs-3 fw-semibold mb-1">
                    <i class="fa fa-pencil-alt"></i>
                </div>
                <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
                    Modifier le client
                </p>
            </div>
        </a>
    </div>
    <div class="col-6">
        <a class="block block-rounded block-link-shadow text-center h-100 mb-0" 
        onclick="document.getElementById('deleteThisClent').submit();"
        href="javascript:void(0)">
            <div class="block-content py-5">
                <div class="fs-3 fw-semibold text-danger mb-1">
                    <i class="fa fa-times"></i>
                </div>
                <p class="fw-semibold fs-sm text-danger text-uppercase mb-0">
                    Supprimer le client
                </p>
            </div>
            <form id="deleteThisClent" method="post" action="{{ route('app:clients.delete') }}">
                @csrf
                @honeypot
                @method('DELETE')
                <input type="hidden" id="clientId" name="clientId" value="{{ $client->uuid }}">

            </form>
        </a>
    </div>
</div>

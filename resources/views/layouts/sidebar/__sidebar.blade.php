<nav id="sidebar" aria-label="Main Navigation">

    <div class="bg-header-dark">
        <div class="content-header bg-white-5">

            <a class="fw-semibold text-white tracking-wide" href="{{ route('admin:home') }}">
                <span class="smini-visible">
                    F<span class="opacity-75">F</span>
                </span>
                <span class="smini-hidden">
                    Facturis<span class="opacity-75"> app</span>
                </span>
            </a>

            <div>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                    onclick="Facturis.layout('sidebar_style_toggle');Facturis.layout('header_style_toggle');">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </button>

                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#dark-mode-toggler" data-class="far fa" onclick="Facturis.layout('dark_mode_toggle');">
                    <i class="far fa-moon" id="dark-mode-toggler"></i>
                </button>

                <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times-circle"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="js-sidebar-scroll">

        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{request()->routeIs('admin:home') ?'active':''}}" href="{{ route('admin:home') }}">
                        <i class="nav-main-link-icon far fa-2x fa-square"></i>
                        <span class="nav-main-link-name">Tableau de bord</span>
                        <span class="nav-main-link-badge badge rounded-pill bg-primary">8</span>
                    </a>
                </li>
                <li class="nav-main-heading">VENTES</li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{request()->routeIs('app:clients') ?'active':''}}" href="{{ route('app:clients') }}">
                        <i class="nav-main-link-icon far fa-2x fa-address-book"></i>
                        <span class="nav-main-link-name">Clients</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{request()->routeIs('app:estimates') ?'active':''}}" href="{{ route('app:estimates') }}">
                        <i class="nav-main-link-icon far fa-2x fa-rectangle-list"></i>
                        <span class="nav-main-link-name">Devis</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

</nav>

<nav class="navigation">
    <div class="container">
        <a class="navigation__logo" href="/dashboard">
            <x-application-logo-navbar />
        </a>

        <ul class="navigation__navlinks hidden">
            <li class="navigation__navlinks__elt"></li>
        </ul>

        <i class="navigation__dropdown-icon fas fa-angle-down"></i>
    </div>
</nav>

<nav class="dropdown-menu">
    <ul class="dropdown-menu__navlinks">
        <li class="dropdown-menu__navlinks__elt">
            <a class="dropdown-menu__navlinks__elt__link" href="/invoices">
                invoices
            </a>
        </li>

        <li class="dropdown-menu__navlinks__elt">
            <a class="dropdown-menu__navlinks__elt__link" href="/companies">
                companies
            </a>
        </li>

        <li class="dropdown-menu__navlinks__elt">
            <a class="dropdown-menu__navlinks__elt__link" href="/people">
                sales reps
            </a>
        </li>

        <li class="dropdown-menu__navlinks__elt">
            <a class="dropdown-menu__navlinks__elt__link" href="/register">
                add a user
            </a>
        </li>

        <li class="dropdown-menu__navlinks__elt">
            <a class="dropdown-menu__navlinks__elt__link" href="/register">
                logout
            </a>
        </li>
    </ul>
</nav>

<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <ul class="nav navbar-nav align-items-center ms-auto">

            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-link-style">
                    <i class="ficon" data-feather="moon"></i>
                </a>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if ($user->id_role == 1)
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder">{{ $user->admin->name }}</span>
                            <span class="user-status">Admin</span>
                        </div>
                        <span class="avatar bg-light-primary">
                            <span class="avatar-content">{{ substr($user->admin->name, 0, 1) }}</span>
                            <span class="avatar-status-online">
                            </span>
                        </span>
                    @endif
                    @if ($user->id_role == 2)
                        <div class="user-nav d-sm-flex d-none">
                            <span
                                class="user-name fw-bolder">{{ $user->member->name != null ? $user->member->name : 'Anonim' }}</span>
                            <span class="user-status">User</span>
                        </div>
                        <span class="avatar bg-light-primary">
                            <span
                                class="avatar-content">{{ substr($user->member->name != null ? $user->member->name : 'Anonim', 0, 1) }}</span>
                            <span class="avatar-status-online">
                            </span>
                        </span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    @if ($user->id_role == 1)
                        <a class="dropdown-item" href="#">
                            <i class="me-50" data-feather="user"> </i>
                            Profil
                        </a>
                    @endif
                    @if ($user->id_role == 2)
                        <a class="dropdown-item" href="#">
                            <i class="me-50" data-feather="user"> </i>
                            Profil
                        </a>
                    @endif
                    <a class="dropdown-item" href="{{ route('end') }}">
                        <i class="me-50" data-feather="power"></i>
                        Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

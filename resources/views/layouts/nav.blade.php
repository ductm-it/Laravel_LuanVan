<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="{{ route('dashboard') }}">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=" {{ route('category') }}" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=" {{ route('compare') }}" aria-controls="submenu-7"><i class="fas fa-balance-scale"></i>Compare</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

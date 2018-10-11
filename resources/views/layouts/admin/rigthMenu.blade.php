
        <!-- Main -->
        {{--  exempos de Menu em navbar_fixed_both.html  --}}
        {{--  <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>  --}}
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('blog/admin') ? 'active' : '' }}">
                <i class="icon-home4"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-item-submenu {{ request()->is('blog/admin/*') ? 'nav-item-expanded nav-item-open' : '' }}">
            <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Blog</span></a>

            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                <li class="nav-item">
                    <a href="{{ route('allPosts') }}" 
                        class="nav-link {{ request()->is('blog/admin/post') ? 'active' : '' }}">
                        <i class="fa fa-eye"></i><span> {{ __('Ver todos os Posts') }} </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('postCreate') }}" 
                        class="nav-link {{ request()->is('blog/admin/create') ? 'active' : '' }}">
                        <i class="fa fa-pencil"></i> {{ __('Criar Posts') }} 
                    </a>
                </li>
                {{--  <li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link"><i class="fa fa-eye"></i><span> {{ __('Editar Post') }} </span></a></li>  --}}
                {{--  <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">2 sidebars</a>
                    <ul class="nav nav-group-sub">
                        <li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
                        <li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
                    </ul>
                </li>  --}}
                {{--  <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">3 sidebars</a>
                    <ul class="nav nav-group-sub">
                        <li class="nav-item"><a href="../seed/sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
                        <li class="nav-item"><a href="../seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">Content sidebars</a>
                    <ul class="nav nav-group-sub">
                        <li class="nav-item"><a href="../seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
                        <li class="nav-item"><a href="../seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
                <li class="nav-item-divider"></li>
                <li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
                <li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
                <li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link active">Both navbars fixed</a></li>
                <li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>  --}}
            </ul>
        </li>
        <li class="nav-item">
            <a href="../full/changelog.html" class="nav-link">
                <i class="icon-list-unordered"></i>
                <span>Changelog</span>
                <span class="badge bg-blue-400 align-self-center ml-auto">2.0</span>
            </a>
        </li>
        <!-- /main -->

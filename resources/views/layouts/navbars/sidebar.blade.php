<div class="sidebar">
    <div class="sidebar-wrapper" style="background-color: rgb(17, 22, 48);">
        <div class="logo">
            <a href="{{ route('index')}}" class="simple-text logo-normal"><img src="https://static.lenovo.com/fea/images/lenovo-logo-pcs.png" alt=""></a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'items') class="active " @endif>
                <a href="{{ route('showitem')}}">
                    <i class="tim-icons icon-key-25"></i>
                    <p>{{ __('Items') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('showproduct') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Product') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="users/admin">
                    <i class="tim-icons icon-badge"></i>
                    <p>{{ __('Admin') }}</p>
                </a>
            </li>
            
            {{-- <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('User Setting') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            
        </ul>
    </div>
</div>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo" style="background-color:transparent; text-align:left; padding: 20px"><a
                        href="{{ url('') }}">
                        <img src="{{ asset('admin-assets/images/avijit/logo.png') }}"
                            style="width: 30px;height: 30px; filter:invert(100%);" />
                        {{-- style="width: 100%;color:#343957; background-color: #343957" /> --}}
                        <span style="color: white">Shop</span>
                    </a></div>
                <li class="label">Main</li>
                <li><a href="{{ url('/') }}"><i class="ti-home"></i> Dashboard </a></li>

                <li class="label">Apps</li>

                <li><a href="{{ url('shops') }}"><i class="ti-user"></i> Shops </a></li>
                <li><a href="{{ url('orders') }}"><i class="ti-user"></i> Orders </a></li>
                <li><a href="{{ url('#') }}"><i class="ti-close"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>

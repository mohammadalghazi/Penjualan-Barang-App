<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/">
            <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Soft UI Dashboard</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse h-auto w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- ionicons -->
            <x-side-nav-item active="{{ Request::is('dashboard') }}" href="/dashboard" icon="storefront-outline">Dashboard</x-side-nav-item>
            <x-side-nav-item active="{{ Request::is('dashboard/mails') }}" href="/dashboard/mails" icon="mail-outline">Messages</x-side-nav-item>

            {{-- Products --}}
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Products</h6>
            </li>
            <x-side-nav-item active="{{ Request::is('dashboard/products') }}" href="/dashboard/products" icon="cube-outline">Products</x-side-nav-item>
            <x-side-nav-item active="{{ Request::is('dashboard/discounts') }}" href="/dashboard/discounts" icon="pricetag-outline">Discounts</x-side-nav-item>
            <x-side-nav-item active="{{ Request::is('dashboard/categories') }}" href="/dashboard/categories" icon="menu-outline">Category</x-side-nav-item>
            <x-side-nav-item active="{{ Request::is('dashboard/sub-categories') }}" href="/dashboard/sub-categories" icon="list-outline">Sub-Category</x-side-nav-item>
            <x-side-nav-item active="{{ Request::is('dashboard/brands') }}" href="/dashboard/brands" icon="business-outline">Brand</x-side-nav-item>
            {{-- <x-side-nav-item active="{{ Request::is('dashboard/billing') }}" href="/dashboard/billing" icon="card">Billing</x-side-nav-item> --}}

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Sales</h6>
            </li>
            <x-side-nav-item active="{{ Request::is('dashboard/sales') }}" href="/dashboard/sales" icon="cart-outline">Sales</x-side-nav-item>
            <x-side-nav-item active="{{ Request::is('dashboard/orders') }}" href="/dashboard/orders" icon="document-text-outline">Orders</x-side-nav-item>
            <x-side-nav-item active="{{ Request::is('dashboard/shipments') }}" href="/dashboard/shipments" icon="document-text-outline">Shipments</x-side-nav-item>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manage</h6>
            </li>
            <x-side-nav-item active="{{ Request::is('dashboard/users') }}" href="/dashboard/users" icon="person-outline">User</x-side-nav-item>
            <x-side-nav-item active="{{ Request::is('dashboard/payments') }}" href="/dashboard/payments" icon="wallet-outline">Payemnt Gate</x-side-nav-item>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-side-nav-item active="{{ Request::is('dashboard/payments') }}" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" icon="log-out-outline">
                    {{ __('Log Out') }}
                </x-side-nav-item>
            </form>
            <x-side-nav-item active="{{ Request::is('dashboard/settings') }}" href="/dashboard/settings" icon="profile-outline">{{ Auth()->user()->name }}</x-side-nav-item>
        </ul>
    </div>
</aside>
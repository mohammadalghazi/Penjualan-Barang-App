<li class="nav-item">
    <a class="nav-link {{ $active ? 'active' : '' }}" href="{{ $href }}">
        <ion-icon class="icon icon-xs p-2 shadow border border-radius-md bg-white text-center me-2 d-flex" name="{{ $icon }}"></ion-icon>
        <span class="nav-link-text ms-1">{{ $slot }}</span>
    </a>
</li>
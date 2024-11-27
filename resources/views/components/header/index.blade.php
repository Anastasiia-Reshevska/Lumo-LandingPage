<header class="header">
    <div class="header__container">
        <div class="header__logo">
            <a href="#"><img src="{{ Vite::asset('resources/images/logo_header.svg') }}" alt="Logo Lumo"></a>
        </div>
        <button class="burger" id="burger-menu" aria-label="Open the menu">
            <div class="burger__lines" aria-hidden="true">
                <span></span>
            </div>
        </button>
        <div class="header__navigation">
            <ul class="header__nav">
                <li class="header__nav-item">
                    <a href="/" class="header__nav-link">THE WINTER FEST</a>
                </li>
                <li class="header__nav-item">
                    <a href="/" class="header__nav-link">UPCOMING FLEET</a>
                </li>
                <li class="header__nav-item">
                    <a href="/" class="header__nav-link">THE VENUE</a>
                </li>
                <li class="header__nav-item">
                    <a href="/" class="header__nav-link">LUMO SHOP</a>
                </li>
            </ul>
            <div class="header__nav-item_button">
                <button class="btn-primary header__btn-book header__btn-main">
                    <p>BOOK YOUR SEAT</p>
                    <div class="header__arrow" aria-hidden="true">
                        <div class="header__arrow_direction"></div>
                    </div>
                </button>
            </div>
        </div>
        <button class="btn-primary header__btn-book header__btn-additional">BOOK YOUR SEAT
            <div class="header__arrow" aria-hidden="true">
                <div class="header__arrow_direction"></div>
            </div>
        </button>
    </div>
</header>
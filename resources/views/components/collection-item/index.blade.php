 <li class="collection-item">
  <div class="collection-item__wrapper {{ $class ?? '' }}">
    <div class="collection-item__content">
      <picture>
        <source srcset="{{ Vite::asset('resources/images/collection-preview/hanger-tab.svg') }}" media="(min-width: 767px)" />
        <img src= "{{ Vite::asset('resources/images/collection-preview/hanger-mob.svg') }}" width="49" height="49" alt="" loading="lazy"/>
      </picture>
      <p class="collection-item__subtitle">WINTER FEST LINE</p>
      <p class="collection-item__title">{{ $title ?? '' }}</p>
      <a href="{{ $link ?? '#' }}" class="collection-item__button btn-circle" aria-label="Find out more details">
        <div class="arrow arrow--small" aria-hidden="true">
          <div class="arrow__direction arrow__direction--grey-color arrow__direction--grey-medium"></div>
        </div>
      </a>
    </div>
    <picture>
      <source srcset="{{ Vite::asset($image_desktop ?? '') }}" media="(min-width: 1200px)" />
      <source srcset="{{ Vite::asset($image_tablet ?? '') }}" media="(min-width: 767px)" />
      <img class="collection-item__image" src="{{ Vite::asset($image_mobile ?? '') }}" width="191" height="183" alt="" loading="lazy" />
    </picture>
  </div>
  <div class="collection-item__photo">
    <picture>
      <source srcset="{{ Vite::asset($photo_left_desk ?? '') }}" media="(min-width: 1200px)" />
      <img src="{{ Vite::asset($photo_left ?? '') }}" width="371" height="298" alt="" loading="lazy" />
    </picture>
    <picture>
      <source srcset="{{ Vite::asset($photo_right_desk ?? '') }}" media="(min-width: 1200px)" />
      <img src="{{ Vite::asset($photo_right ?? '') }}" width="371" height="298" alt="" loading="lazy" />
    </picture>
  </div>
</li>


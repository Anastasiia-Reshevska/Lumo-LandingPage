<li class="card">
  <div class="card__image">
    <img src="{{ $src ?? '' }}" class="{{ $img_class ?? '' }}" width="83" height="83" alt="" loading="lazy"/>
  </div>
  <div class="card__content">
    <p class="card__title">{{ $title ?? '' }}</p>
    <p class="card__subtitle">{{ $subtitle ?? '' }}</p>
    <p class="card__text">{{ $text ?? '' }}</p>
  </div>
  <a href="" class="card__button btn-circle" aria-label="Find out more details">
    <div class="arrow arrow__size-l" aria-hidden="true">
      <div class="arrow__direction arrow__direction--grey-color arrow__direction--grey-medium"></div>
    </div>
  </a>
</li>

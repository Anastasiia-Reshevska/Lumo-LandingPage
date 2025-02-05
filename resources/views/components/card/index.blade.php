<section class="card">
  <div class="card__image">
    <img src="{{ $src ?? '' }}" class="{{ $img_class ?? '' }}" alt="" loading="lazy"/>
  </div>
  <div class="card__content">
    <p class="card__title">{{ $title ?? '' }}</p>
    <p class="card__subtitle">{{ $subtitle ?? '' }}</p>
    <p class="card__text">{{ $text ?? '' }}</p>
  </div>
  <a href="" class="card__button" aria-label="Find out more details">
    <div class="arrow arrow arrow_size-l" aria-hidden="true">
      <div class="arrow__direction arrow_grey-m"></div>
    </div>
  </a>
</section>
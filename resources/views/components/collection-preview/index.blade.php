@php
  $items = [
    [
      'title' => 'Ice Duchess',
      'link' => '#',
      'image_desktop' => 'resources/images/collection-preview/model-first-desk.webp',
      'image_tablet' => 'resources/images/collection-preview/model-first-tab.webp',
      'image_mobile' => 'resources/images/collection-preview/model-first.webp',
      'photo_left' => 'resources/images/collection-preview/model-second.webp',
      'photo_left_desk' => 'resources/images/collection-preview/model-second-desk.webp',
      'photo_right' => 'resources/images/collection-preview/model-third.webp',
      'photo_right_desk' => 'resources/images/collection-preview/model-third-desk.webp',
    ],
    [
      'class' => 'collection-item__wrapper--left',
      'title' => 'Arctic Puff',
      'link' => '#',
      'image_desktop' => 'resources/images/collection-preview/model-fourth-desk.webp',
      'image_tablet' => 'resources/images/collection-preview/model-fourth-tab.webp',
      'image_mobile' => 'resources/images/collection-preview/model-fourth.webp',
      'photo_left' => 'resources/images/collection-preview/model-fifth.webp',
      'photo_left_desk' => 'resources/images/collection-preview/model-fifth-desk.webp',
      'photo_right' => 'resources/images/collection-preview/model-sixth.webp',
      'photo_right_desk' => 'resources/images/collection-preview/model-sixth-desk.webp',
    ],
    [
      'title' => 'Chic Frost',
      'link' => '#',
      'image_desktop' => 'resources/images/collection-preview/model-seventh-desk.webp',
      'image_tablet' => 'resources/images/collection-preview/model-seventh-tab.webp',
      'image_mobile' => 'resources/images/collection-preview/model-seventh.webp',
      'photo_left' => 'resources/images/collection-preview/model-eighth.webp',
      'photo_left_desk' => 'resources/images/collection-preview/model-eighth-desk.webp',
      'photo_right' => 'resources/images/collection-preview/model-ninth.webp',
      'photo_right_desk' => 'resources/images/collection-preview/model-ninth-desk.webp',
    ],
  ];
@endphp

<section class="collection-preview container">
  <p class="collection-preview__title">UPCOMING FLEET</p>
  <ul class="collection-preview__list">
    @foreach ($items as $item)
      @include('components.collection-item.index', $item)
    @endforeach
  </ul>
</section>


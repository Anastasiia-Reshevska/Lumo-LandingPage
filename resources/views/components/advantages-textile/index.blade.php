@php
  $cards = [
    [
      'img_class' => 'card__img-leather',
      'src' => Vite::asset('resources/images/leather.svg'),
      'title' => 'Innovative Fabrics',
      'subtitle' => 'OUR BEST TECHNOLOGY YET',
      'text' => 'Lumo’s Winterfest collection uses cutting-edge, weather-resistant fabrics that adapt to your environment. Stay warm without overheating, and enjoy water-repellent, windproof materials that ensure comfort in every condition.',
    ],
    [
      'img_class' => 'card__img-ball-of-wool',
      'src' => Vite::asset('resources/images/ball-of-wool.svg'),
      'title' => 'Sustainable Craft',
      'subtitle' => 'ECO-FRIENDLY AND ETHICAL',
      'text' => 'Every garment in the 2024/2025 line is crafted with sustainability in mind. We prioritize eco-friendly materials and responsible production practices, ensuring that you can stay stylish while supporting the planet.',
    ],
    [
      'img_class' => 'card__img-needle',
      'src' => Vite::asset('resources/images/needle.svg'),
      'title' => 'Tailored Fit',
      'subtitle' => 'DESIGNED FOR EVERY BODY',
      'text' => 'Our Winterfest clothing line features inclusive sizing and tailored fits, making it easy to find pieces that flatter and move with you. Comfort and confidence come standard with every item.',
    ],
    [
      'img_class' => 'card__img-hanger',
      'src' => Vite::asset('resources/images/hanger.svg'),
      'title' => 'Versatile Style',
      'subtitle' => 'SEAMLESS TRANSITION',
      'text' => 'Whether you’re heading to the office or exploring the outdoors, Lumo’s Winterfest collection blends functionality with sleek design. Layer effortlessly for any occasion, making every outfit a statement in warmth and style.',
    ],
  ];
@endphp

<section class="advantages-textile container">
  <div class="advantages-textile__wrapper">
    @foreach ($cards as $card)
      @include('components.card.index', $card)
    @endforeach
  </div>
</section>
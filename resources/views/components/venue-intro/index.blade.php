<section class="venue-intro container">
  <picture>
    <source srcset="{{ Vite::asset('resources/images/venue-intro/background-desk.webp') }}" media="(min-width: 1200px)" />
    <source srcset="{{ Vite::asset('resources/images/venue-intro/background-tab.webp') }}" media="(min-width: 767px)" />
    <img src= "{{ Vite::asset('resources/images/venue-intro/background-mob.webp') }}" width="388" height="561" alt="" loading="lazy"/>
 </picture>
  <div class="venue-intro__wrapper">
    <button class="discount__btn-additional btn-primary btn-blue-center" aria-label="You can see the location here">THIS YEAR’S VENUE
      <div class="arrow arrow--small arrow--discount" aria-hidden="true">
        <div class="arrow__direction arrow__direction--white arrow__direction--discount"></div>
      </div>
    </button>
    <div class="venue-intro__content">
      <p class="venue-intro__subtitle">LUMO’S WINTERFEST VENUE</p>
      <h2>DENVER, COLORADO</h2>
      <p>Lumo's Winterfest show is launching in Colorado for its perfect blend of urban sophistication and breathtaking winter landscapes.
        Denver, with its thriving cultural scene, offers the ideal backdrop for showcasing our 2024/2025 collection, while the nearby Rocky Mountains
        evoke the heart of winter. Colorado's unique connection to both modern fashion and the great outdoors reflects the spirit of Lumo’s designs—functional,
        stylish, and crafted for all winter adventures. It's the perfect location to unveil a collection that celebrates the beauty and versatility of the season.
      </p>
    </div>
  </div>
</section>

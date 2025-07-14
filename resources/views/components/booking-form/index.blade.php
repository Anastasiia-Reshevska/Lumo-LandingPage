<section class="booking-form container">
  <div class="booking-form__wrapper">
    <div class="booking-form__title">
      <div class="booking-form__content">
        <p>JOIN THIS YEAR’S WINTER FEST SHOW</p>
        <h2>BOOK A SPOT</h2>
      </div>
      <img src= "{{ Vite::asset('resources/images/booking-form/stripes.svg') }}" width="276" height="100" alt="" loading="lazy"/>
    </div>
   <form>
    <div class="booking-form__container">
      <div class="booking-form__item booking-form__item--name">
        <label>FULL NAME</label>
        <input type="text" name="task" placeholder="Eg. Jane Doe">
      </div>
      <div class="booking-form__item booking-form__item--email">
        <label>EMAIL ADDRESS</label>
        <input type="text" name="task" placeholder="Eg. janedoe@gmail.com">
      </div>
    </div>
    <div class="booking-form__item">
      <label>WHERE DID YOU HEAR ABOUT THE LUMO WINTER FEST?</label>
      <input type="text" name="task" placeholder="Eg. Youtube">
    </div>
    <div class="booking-form__item">
      <label>IF YOU’RE AN INFLUENCER, PLEASE SHARE YOUR YOUTUBE OR TIKTOK URL</label>
      <input type="text" name="task" placeholder="Eg. https://www.youtube.com/dressigngwithhannah">
    </div>
    <div class="booking-form__item">
      <label>WHAT DO YOU LIKE TO SEE IN THE WINTER FEST?</label>
      <input type="text" name="task" placeholder="Eg. Coats">
    </div>
    <button class="discount__btn-additional btn-primary btn-blue-center book__btn-additional" aria-label="You can see the location here">OPT-IN
      <div class="arrow arrow--small arrow--book" aria-hidden="true">
        <div class="arrow__direction arrow__direction--white arrow__direction--discount"></div>
      </div>
    </button>
   </form>
  </div>
</section>

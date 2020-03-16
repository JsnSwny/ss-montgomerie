<header style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url($Hero.URL);" class="hero">
    <h1 class="hero__title">$Restaurant</h1>
    <p class="hero__subtitle">$Subtext</p>
    <a href="$CTALink"><button class="hero__button">$CTAName</button></a>
</header>
<section class="featured">
    <div class="featured__container featured-1">
        <img src="$Featured_1_Image.URL" class="featured__image" data-aos="fade-left" />
        <div class="featured__text" data-aos="fade-right">
            <h1>$Featured_1_Title</h1>
            <p>$Featured_1_Description</p>
            <a><button class="featured__button">Book Now</button></a>
        </div>
    </div>
    <div class="featured__container featured-2">
        <img src="$Featured_2_Image.URL" class="featured__image" data-aos="fade-right" />
        <div class="featured__text" data-aos="fade-left">
            <h1>$Featured_2_Title</h1>
            <p>$Featured_2_Description</p>
            <a><button class="featured__button">Book Now</button></a>
        </div>
    </div>

</section>
  <script>
        AOS.init({
            offset: 400,
            duration: 1000
        });
  </script>
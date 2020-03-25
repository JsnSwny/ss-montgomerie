<header style="background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), url($Hero.URL);" class="hero">
    <h1 class="hero__title">$Restaurant</h1>
    <p class="hero__subtitle">$Subtext</p>
    <a href="$CTALink"><button class="hero__button">$CTAName</button></a>
</header>
<section class="featured">
    <% loop $Featured %>
        <div class="featured__container">
            <img src="$Image.URL" class="featured__image" />
            <div class="featured__text">
                <h1>$Title</h1>
                <p>$Description</p>
                <a><button class="featured__button">Book Now</button></a>
            </div>
        </div>
    <% end_loop %>
</section>
  <script>
        AOS.init({
            offset: -20,
            duration: 1000
        });
  </script>
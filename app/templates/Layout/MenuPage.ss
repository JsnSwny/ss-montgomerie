<div class="menu-container">
    <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('$Photo.URL');" class="menu">
        <h2 class="menu__title">$HeaderTitle</h2>
        <p class="menu__subtext">$Subtitle</p>
    </div>
    <% loop $Menus %>

        <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('$Photo.URL');" class="menu" data-aos="fade-down">
            <h2 class="menu__title">$Title</h2>
            <p class="menu__subtext">$Subtext</p>
            <a href="$MenuPDF.URL"><button class="menu__button">View Menu</button></a>
        </div>
    <% end_loop %>
</div>

  <script>
        AOS.init({
            offset: 200,
            duration: 1000,
            animatedClassName: 'aos-animate',
        });
  </script>
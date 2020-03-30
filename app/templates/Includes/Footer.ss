<footer class="footer">
    <h3 class="footer__header">Opening Times</h3>
    <div class="openingtimes">
        <% loop $OpeningTimes %>
            <p class="openingtimes__item">$Day: $OpenTime.Short - $CloseTime.Short</p>
        <% end_loop %>
    </div>
    <div class="footer__bottom">
        <p class="footer__copyright">Copyright © $Year.Now.Year The Montgomerie Restaurant</p>
        <p class="footer__copyright">Website Design & Development by Jason Sweeney</p>
    </div>
</footer>

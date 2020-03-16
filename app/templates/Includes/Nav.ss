
<nav class="navbar">
    <div class="navbar__container">
        <ul class="navbar__list">
            <% loop $Menu(1) %>
                <li>
                    <a class="navbar__item $LinkingMode" href="$Link">$MenuTitle</a>
                </li>
            <% end_loop %>
        </ul>
    </div>

</nav>
<!-- END MAIN MENU -->
<section class="album">
    <h1 class="album__text">Select an Album
    <div class="gallery__container">
        <% loop $GalleryAlbum %>
            <a href="$Link"><div class="album__item">
                <p class="album__title">$AlbumTitle</p>
                <img class="gallery__image" src="$FirstPicture.URL" width="$FirstPicture.ScaleWidth(300).Width" height="300" />
            </div></a>
            
        <% end_loop %>
    </div>
</section>
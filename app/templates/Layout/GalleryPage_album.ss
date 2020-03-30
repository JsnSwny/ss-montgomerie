<section class="gallery">
    <% with $GalleryAlbum %>
        <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('images/photos.jpeg');"class="gallery__header">
            <h1>$AlbumTitle</h1>
            <a href="$goBack"><button class="gallery__button">Go Back to Gallery</button></a>
        </div>
        
        <div class="gallery__container">
            <% loop $GalleryItem %>
                <div class="gallery__item">
                    <p class="gallery__title">$Title</p>
                    <img class="gallery__image" src="$Image.ScaleHeight(300).URL" width="$Image.ScaleWidth(300).Width" height="300" />
                    
                </div>
                
            <% end_loop %>
        </div>
    <% end_with %>
</section>
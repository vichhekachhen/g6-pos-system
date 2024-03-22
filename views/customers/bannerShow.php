 <!-- slide show -->
 <div class="carousel-inner relative w-full overflow-hidden h-[400px]">
     <div class="carousel-item active relative float-left w-full ">
         <div class="slideshow-container">

             <?php
                $banners =
                    [
                        'amul.jpg',
                        'coffee.jpg',
                        'drink.jpg',
                        'love.jpg',
                        'veget.png'
                    ];
                foreach ($banners as $banner) {
                ?>
                 <div class="bannerShow fade">
                     <img src="assets/banners/<?= $banner ?>" class="absolute bg-center left-0 w-full z-1">
                 </div>
             <?php
                }
                ?>
                
         </div>
     </div>
 </div>
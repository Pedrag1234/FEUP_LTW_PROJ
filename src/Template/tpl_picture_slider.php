<?php 

    include_once('../Database/Queries/house_queries.php');

    function pic_slider($id){
        $pics = getHousePics($id);
        $n_pics = count($pics);
        if (empty($pics)) { ?>

            <div class="slideshow">
                <div class="House Slides">
                    <div class="numbertext">1 / 1</div>
                    <img src="../images/no-photo-available.jpg" style="width:100%">
                </div>
            </div>
        <?php }

        else{ 
            $i = 1; ?>
            
            <div class="slideshow">
                <?php foreach($pics as $pic) {?>
                    <div class="slide fade">
                        <div class="currentSlide"> <?php echo "$i / $n_pics" ?> </div>
                        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $pic['photo'] ).'" style="width:100%"/>';?>
                    </div>
                    
                <?php if($i <= $n_pics - 1){
                    $i++;
                }
                } ?>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>
            <div>
                <?php for($j = 1; $j <= $i ;$j++) { 
                    echo ' <span class="dot" onclick="currentSlide('.$j.')"></span> ';
                } ?>        
            </div>
            <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    // Next/previous controls
                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    // Thumbnail image controls
                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("slide");
                    var dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
}
                </script>
        <?php }
    }


?>
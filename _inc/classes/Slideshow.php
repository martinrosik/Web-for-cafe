<?php
    class Slideshow {
        private $images = [];
        private $currentIndex = 0;

        public function __construct($imagePaths) {
            $this->images = $imagePaths;
        }

        public function renderSlideshow() {
            echo '<section class="slideshow">';
            echo '<h1>Prezrite si naše priestory:</h1>';
            echo '<div class="slideshow-container fade">';
            
            foreach ($this->images as $index => $image) {
                echo '<div class="Containers">';
                echo '<img src="' . $image . '" width="900" height="600" alt="kaviareň priestor">';
                echo '</div>';
            }
            
            echo '<a class="Back" onclick="plusSlides(-1)">&#10094;</a>';
            echo '<a class="forward" onclick="plusSlides(1)">&#10095;</a>';
            echo '</div>';
            echo '<br>';
            
            echo '<div style="text-align:center">';
            for ($i = 0; $i < count($this->images); $i++) {
                echo '<span class="dots" onclick="currentSlide(' . ($i + 1) . ')"></span>';
            }
            echo '</div>';  

            echo '</section>';
        }

        public function next() {
            $this->currentIndex = ($this->currentIndex + 1) % count($this->images);
        }

        public function previous() {
            $this->currentIndex = ($this->currentIndex - 1 + count($this->images)) % count($this->images);
        }

        public function getCurrentImage() {
            return $this->images[$this->currentIndex];
        }
    }

    $imagePaths = [
        "assets/img/kaviaren-galeria1.jpg",
        "assets/img/kaviaren-galeria2.jpg",
        "assets/img/kaviaren-galeria3.jpg"
    ];

    $slideshow = new Slideshow($imagePaths);
    $slideshow->renderSlideshow();
?>

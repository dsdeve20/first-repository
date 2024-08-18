@include('layout.header')
<link rel="stylesheet" href="assets/style/mobileheader.css">
<!-- https://codepen.io/ryandelos/pen/qBxxLVz -->

<div class="move"></div>
<div class="header-container">
    
    <header>
        <div class="header-mobile-menu">
            <div class="header-mobile-child">
                <div class="logo">
                    <a href="#">Logo</a>
                </div>
                <a href="javascript:void(0);" class="hamburger-icon">&#8801;</a>
                <div class="header-right-content">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Service</a>
                    <a href="#">News</a>
                    <a href="#">Portfilio</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="hero-section">
            <div class="hero-content">
                <h1 id="coordinates"></h1>
                <h1 class="hero-iam">I AM <br> Deepak.</h1>
                <p class="hero-agency">Welcome to my agency</p>
                <a href="#" class="hero-projects">See all projects</a>
            </div>
        </div>
    </section>
</div>
<script>
 document.addEventListener('DOMContentLoaded', function() {
        let hamburger = document.querySelector('.hamburger-icon')
    
        let rightContent = document.querySelector('.header-right-content')

        hamburger.addEventListener('click',()=>{
           
            rightContent.classList.toggle("toggled-right-menu");
        })
   }); 
   let move = document.querySelector('.move')
   document.addEventListener('mousemove', function(event) {
            // Get the mouse coordinates
            const x = event.clientX;
            const y = event.clientY;

            // Display the coordinates in the #coordinates element
            //const coordinatesElement = document.getElementById('coordinates');
           //coordinatesElement.textContent = `X: ${x}, Y: ${y}`;
      
           // move.style.top = `${y}px`; // Set the vertical position
           // move.style.left = `${x}px`; // Set the horizontal position
            
        });
    
</script>
@include('layout.footer')

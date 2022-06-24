  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
.testim{
    margin-top: 200px;
    margin-bottom: -140px;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
}
.testim .wrap{
    position: relative;
    width: 100%;
    max-width: 1020px;
    padding: 40px 20px;
    margin: auto;
}
.testim .arrow{
    display: block;
    position: absolute;
    color:#04dbc0;
    cursor: pointer;
    font-size: 2em;
    top: 50%;
    transform: translateY(-50%);
    transition: all .3s ease-in-out;
    padding: 5px;
    z-index: 22222222;
}
.testim .arrow:before{
    cursor: pointer;
}
.testim .arrow.left{
    left: 10px;
}
.testim .arrow.right{
    right: 10px;
}
.testim .arrow:hover{
    color:#9b51e0;
}
.testim .dots{
    text-align: center;
    position: absolute;
    width: 100%;
    bottom: 60px;
    left: 0;
    display: block;
    z-index: 3333;
    height: 12px;
}
.testim .dots .dot{
    list-style-type: none;
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 1px solid #04dbc0 ;
    margin: 0 10px;
    cursor: pointer;
    transition: all .5s ease-in-out;
    position: relative;
}
.testim .dots .dot.active,
.testim .dots .dot:hover{
background: #04dbc0;
border-color:#04dbc0;
}

.testim .dots .dot.active{
    animation: testim-scale .5s ease-in-out forwards;
}
.testim .cont{
    position: relative;
    overflow: hidden;
}
.testim .cont > div{
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
    padding: 0 0 70px 0;
    opacity: 0;
}
.testim .cont > div.inactive{
    opacity: 1;
}
.testim .cont > div.active{
    
    position: relative;
    opacity: 1;
    
}
.testim .cont div .img img{
    display: block;
    width: 100px;
    height: 100px;
    margin: auto;
    border-radius: 50%;
}
.testim .cont div h2{
    color:#000000;
    font-size: 1.5em;
    margin: 15px 0;
}
.testim .cont div p{
    font-size: 1.15em;
    color: #333;
    width: 80%;
    margin: auto;
}

.testim .cont div.active .img img{
    animation: testim-show .5s ease-in-out forwards;
}
.testim .cont div.active h2{
    animation: testim-content-in .4s ease-in-out forwards;
}
.testim .cont div.active p {
    animation: testim-content-in .5s ease-in-out forwards;
}
.testim .cont div.inactive .img img{
    animation: testim-hide .5s ease-in-out forwards;
}
.testim .cont div.inactive h2{
    animation: testim-content-out .4s ease-in-out forwards;
}
.testim .cont div.inactive p {
    animation: testim-content-out .5s ease-in-out forwards;
}

@keyframes testim-scale {
    0% {
        box-shadow: 0px 0px 0px 0px #eee;
    }
    35% {
        box-shadow: 0px 0px 10px 5px #eee;
    }
    70% {
        box-shadow: 0px 0px 10px 5px #ea830e;
    }
    100% {
        box-shadow: 0px 0px 0px 0px #ea830e;
    }
}

@keyframes testim-content-in {
    from {
        opacity: 0;
        transform: translateY(100%);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
@keyframes testim-content-out {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    to {
        opacity: 0;
        transform: translateY(-100%);
    }
}
@keyframes testim-show {
    from {
        opacity: 0;
        transform: scale(0);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}
@keyframes testim-hide {
    from {
        opacity: 1;
        transform: scale(1);
    }
    to {
        opacity: 0;
        transform: scale(0);
    }
}


/* Responsive */

@media all and (max-width: 300px) {
    body {
        font-size: 14px;
    }
}
@media all and (max-width: 500px) {
    .testim .arrow{
        font-size: 1.5rem;
    }
    .testim .cont div p{
        line-height: 25px;
    }
}
</style>

    <section class="testim" id="testim">
        <div class="wrap">

            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
            <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>

            <ul class="dots" id="testim-dots">
                <li class="dot active"></li>
                <li class="dot"></li>
                <li class="dot"></li>
                <li class="dot"></li>
                <li class="dot"></li>
            </ul>

            <div class="cont" id="testim-content">

                <div class="active">
                    <div class="img"><img src="assets/images/p1.jpg"></div>
                    <h2>Kiran</h2>
                    <p>A great car rental experience
A great experience from booking the rental online to receiving email confirmation and step by step instructions on how to receive and return the vehicle - and it all happened exactly like Maki said it would. The mobile app is particularly helpful. A great rental experience all round, thank you Quickars.</p>
                </div>
                
                <div>
                    <div class="img"><img src="assets/images/p2.jpg"></div>
                    <h2>Sara</h2>
                    <p>No problems at all
No problems at all. The car was in top condition. Gladly again.</p>
                </div>
                
                <div>
                    <div class="img"><img src="assets/images/p3.jpg"></div>
                    <h2>Harsha</h2>
                    <p>Excellent service provided
Excellent service provided. Smooth transition for delivery our car to the airport and return at the same place. New car provided. Very much recommended. Next time in Mauritius use the same company. Thanks Maki Car Rentals.</p>
                </div>
                
                <div>
                    <div class="img"><img src="assets/images/p4.jpg"></div>
                    <h2>Supraja</h2>
                    <p>Excellent service
Excellent service, Fantastic service and lovely car, cheap prices, best service</p>
                </div>
                
                <div>
                    <div class="img"><img src="assets/images/p5.jpg"></div>
                    <h2>Prudhvi</h2>
                    <p>Highly recommendable
Our experience was great. The people giving you the car and taking it back are really nice. Way cheaper and faster than the well known companies. They wait for you at the airport door with your name and in 10 minutes you are moving!</p>
                </div>
            </div>

        </div>
    </section>
   <script>


'use strict'
var testim = document.getElementById("testim"),
    testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimleftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer
    ;

window.onload = function () {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }
        if (slide < 0) {
            slide = currentSlide = testimContent.length - 1;
        }
        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }
        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;

        clearTimeout(testimTimer);
        testimTimer = setTimeout(function () {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimleftArrow.addEventListener("click", function () {
        playSlide(currentSlide -= 1);
    })
    testimRightArrow.addEventListener("click", function () {
        playSlide(currentSlide += 1);
    })

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function () {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }
    playSlide(currentSlide);

}

</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
   
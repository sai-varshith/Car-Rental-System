<style type="text/css">
    .slider-box {
    width     : 100%;
    max-height: 90vh;
    position  : relative;
    overflow  : hidden;
    margin    : 30px auto;
}

#slider {
    width     : 100%;
    display   : inline-flex;
    transition: 0.7s;
}

#slider img {
    width: 100%;
}

.indicators {
    position : absolute;
    left     : 50%;
    bottom   : 20px;
    transform: translateX(-50%);
}

.indicators span {
    display      : inline-block;
    width        : 15px;
    height       : 15px;
    border-radius: 50%;
    background   : rgba(255, 255, 255, 0.5);
    cursor       : pointer;
}

.active {
    background: #ffff !important;
}
</style>
<img src="assets/images/slide1.jpg">
    <div class="slider-box">
        <div id="slider">
            <img src="images/slide1.jpg" alt="">
            <img src="images/slide2.jpg" alt="">
            <img src="images/slide3.jpg" alt="">
            <img src="images/slide4.jpg" alt="">
        </div>
        <div class="indicators">
            <span id="btn1" class="active"></span>
            <span id="btn2"></span>
            <span id="btn3"></span>
            <span id="btn4"></span>
        </div>
    </div>

   
    <script>

        var slide = document.getElementById("slider");
        var btn1 = document.getElementById('btn1');
        var btn2 = document.getElementById('btn2');
        var btn3 = document.getElementById('btn3');
        var btn4 = document.getElementById('btn4');

        btn1.onclick = function () {
            slide.style.transform = "translateX(0px)";
            btn1.classList.add('active');
            btn2.classList.remove('active');
            btn3.classList.remove('active');
            btn4.classList.remive('active');
        };
        btn2.onclick = function () {
            slide.style.transform = "translateX(-100%)";
            btn1.classList.remove('active');
            btn2.classList.add('active');
            btn3.classList.remove('active');
            btn4.classList.remove('active');
        };
        btn3.onclick = function () {
            slide.style.transform = "translateX(-200%)";
            btn1.classList.remove('active');
            btn2.classList.remove('active');
            btn3.classList.add('active');
            btn4.classList.remove('active');
        };
        btn4.onclick = function () {
            slide.style.transform = "translateX(-300%)";
            btn1.classList.remove('active');
            btn2.classList.remove('active');
            btn3.classList.remove('active');
            btn4.classList.add('active');
        };

    </script>

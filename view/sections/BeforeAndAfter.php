<!--<div class="aboveHero above-pics">-->
<!--    <div class="fill-space-white"></div>-->
<!--    <img src="assets/img/newBot.svg" class="heroArrows firstHeroArrow">-->
<!--</div>-->
<div id="before-after-section" class="before-after-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 before-after-title">
                <h2>Before And After foto's</h2>
                <p>Een paar foto's van voor en nadat wij ons werk gedaan hebben</p>
            </div>
        </div>
        <div class="before-after-images">
            <div>
                <div class="row images">
                    <div class="imageRow  p-3 mb-5 bg-white rounded">
                        <img src="assets/img/img003.jpg">
                        <img src="assets/img/img004.jpg">
                    </div>
                </div>
            </div>
            <div>
                <div class="row images">
                    <div class="imageRow  p-3 mb-5 bg-white rounded">
                        <img src="assets/img/img001.jpg">
                        <img src="assets/img/img002.jpg">
                    </div>
                </div>
            </div>
            <div>
                <div class="row images">
                    <div class="imageRow  p-3 mb-5 bg-white rounded">
                        <img src="assets/img/img007.jpg">
                        <img src="assets/img/img006.jpg">
                    </div>
                </div>
            </div>
            <div>
                <div class="row images">
                    <div class="imageRow  p-3 mb-5 bg-white rounded">
                        <img src="assets/img/img008.jpg">
                        <img src="assets/img/img009.jpg">
                    </div>
                </div>
            </div>
            <div>
                <div class="row images">
                    <div class="imageRow  p-3 mb-5 bg-white rounded">
                        <img src="assets/img/img11.jpg">
                        <img src="assets/img/img10.jpg">
                    </div>
                </div>
            </div>
            <div>
                <div class="row images">
                    <div class="imageRow  p-3 mb-5 bg-white rounded">
                        <img src="assets/img/img13.jpg">
                        <img src="assets/img/img12.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function () {
        $('.before-after-images').slick({
            pauseOnHover: true,
            autoplay: true,
            autoplaySpeed: 2000,
            focusOnSelect: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="slick-prev fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="slick-next fas fa-chevron-right"></i></button>',
        });
    });
</script>

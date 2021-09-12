<?php
require_once 'controllers/PostController.php';

$post_controller = new PostController();
$posts = $post_controller->get_posts();
?>
<!DOCTYPE html>
<html>
    <head>

        <!-- SEO -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cakes from Dianne - Custom Cakes for Farmington, Michigan</title>

        <!-- Styles -->
        <link rel="stylesheet" href="styles/lightbox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="styles/screen.css?version=1.0.4" type="text/css" media="screen" />

        <!-- Scripts -->
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.1.custom.min.js"></script>
        <script type="text/javascript" src="js/prototype.js"></script>
        <script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
        <script type="text/javascript" src="js/lightbox.js"></script>

    </head>

    <body style="background:#F5ACCC; margin:0; padding:0">


    <div class="notice">
        <div class="notice-inner">
            <div class="notice-inner-left">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" width="24" height="24">
                    <style type="text/css">
                        .st0{fill:url(#SVGID_1_);}
                        .st1{fill:url(#SVGID_2_);}
                        .st2{fill:#654C9F;}
                    </style>
                    <g id="Edges"></g><g id="Symbol"><g><radialGradient cx="56.3501" cy="19.2179" gradientTransform="matrix(0.9986 -5.233596e-02 4.448556e-02 0.8488 -36.9742 443.8014)" gradientUnits="userSpaceOnUse" id="SVGID_1_" r="711.335"><stop offset="0" style="stop-color:#FED576"></stop><stop offset="0.2634" style="stop-color:#F47133"></stop><stop offset="0.6091" style="stop-color:#BC3081"></stop><stop offset="1" style="stop-color:#4C63D2"></stop></radialGradient><path class="st0" d="M96.1,23.2c-16.2,6.3-29.9,14.7-43.6,28.4C38.8,65.2,30.4,79,24.1,95.1c-6.1,15.6-10.2,33.5-11.4,59.7    c-1.2,26.2-1.5,34.6-1.5,101.4s0.3,75.2,1.5,101.4c1.2,26.2,5.4,44.1,11.4,59.7c6.3,16.2,14.7,29.9,28.4,43.6    c13.7,13.7,27.4,22.1,43.6,28.4c15.6,6.1,33.5,10.2,59.7,11.4c26.2,1.2,34.6,1.5,101.4,1.5c66.8,0,75.2-0.3,101.4-1.5    c26.2-1.2,44.1-5.4,59.7-11.4c16.2-6.3,29.9-14.7,43.6-28.4c13.7-13.7,22.1-27.4,28.4-43.6c6.1-15.6,10.2-33.5,11.4-59.7    c1.2-26.2,1.5-34.6,1.5-101.4s-0.3-75.2-1.5-101.4c-1.2-26.2-5.4-44.1-11.4-59.7C484,79,475.6,65.2,462,51.6    c-13.7-13.7-27.4-22.1-43.6-28.4c-15.6-6.1-33.5-10.2-59.7-11.4c-26.2-1.2-34.6-1.5-101.4-1.5s-75.2,0.3-101.4,1.5    C129.6,12.9,111.7,17.1,96.1,23.2z M356.6,56c24,1.1,37,5.1,45.7,8.5c11.5,4.5,19.7,9.8,28.3,18.4c8.6,8.6,13.9,16.8,18.4,28.3    c3.4,8.7,7.4,21.7,8.5,45.7c1.2,25.9,1.4,33.7,1.4,99.4s-0.3,73.5-1.4,99.4c-1.1,24-5.1,37-8.5,45.7c-4.5,11.5-9.8,19.7-18.4,28.3    c-8.6,8.6-16.8,13.9-28.3,18.4c-8.7,3.4-21.7,7.4-45.7,8.5c-25.9,1.2-33.7,1.4-99.4,1.4s-73.5-0.3-99.4-1.4    c-24-1.1-37-5.1-45.7-8.5c-11.5-4.5-19.7-9.8-28.3-18.4c-8.6-8.6-13.9-16.8-18.4-28.3c-3.4-8.7-7.4-21.7-8.5-45.7    c-1.2-25.9-1.4-33.7-1.4-99.4s0.3-73.5,1.4-99.4c1.1-24,5.1-37,8.5-45.7c4.5-11.5,9.8-19.7,18.4-28.3c8.6-8.6,16.8-13.9,28.3-18.4    c8.7-3.4,21.7-7.4,45.7-8.5c25.9-1.2,33.7-1.4,99.4-1.4S330.7,54.8,356.6,56z"></path><radialGradient cx="154.0732" cy="134.5501" gradientTransform="matrix(0.9986 -5.233596e-02 4.448556e-02 0.8488 -24.3617 253.2946)" gradientUnits="userSpaceOnUse" id="SVGID_2_" r="365.2801"><stop offset="0" style="stop-color:#FED576"></stop><stop offset="0.2634" style="stop-color:#F47133"></stop><stop offset="0.6091" style="stop-color:#BC3081"></stop><stop offset="1" style="stop-color:#4C63D2"></stop></radialGradient><path class="st1" d="M130.9,256.3c0,69.8,56.6,126.3,126.3,126.3s126.3-56.6,126.3-126.3S327,130,257.2,130    S130.9,186.5,130.9,256.3z M339.2,256.3c0,45.3-36.7,82-82,82s-82-36.7-82-82c0-45.3,36.7-82,82-82S339.2,211,339.2,256.3z"></path><circle class="st2" cx="388.6" cy="125" r="29.5"></circle></g></g>
                </svg>
            </div>
            <div class="notice-inner-right">
                Cakes from Dianne is moving to Instagram! Follow me at
                <a href="https://www.instagram.com/sweets2thesoul/">@sweets2thesoul</a>.
            </div>
        </div>
    </div>


    <div style="height:336px; width:984px; margin:auto; background:url('splash.jpg') no-repeat; overflow:hidden">
        <div style="width:675px; margin:auto; position:relative">
            <img src="logo.png" alt="Cakes from Dianne" style="position:absolute; top:5px; left:-30px" />
            <div style="text-align: right; padding-top: 40px">
                <img src="slogan_alt.png" alt="Whatever you do, whether you eat or drink, do it all for God's glory." />
            </div>

            <?php include 'templates/image-carousel.php'; ?>

        </div>

    </div>

    <div style="width:675px; margin:auto; padding-top:20px; font-size:28px">

        <div>
            <p>Every cake is handcrafted to order.</p>
            <p>To get started, email <a class="email-link" href="mailto:dmdk530@aol.com">dmdk530@aol.com</a></p>
        </div>

        <div class="callouts">
            <a href="http://www.worldvision.org" target="_blank" class="callout">
                <img src="images/world-vision-logo.jpg" alt="World Vision" style="float:left; margin-right:20px" />
                <div>
                    <h2>For a good cause</h2>
                    <p>Cakes From Dianne donates a portion of all income to World Vision. Learn how World Vision is helping kids all over the world.</p>
                </div>
                <div style="clear:both"></div>
            </a>

            <a href="http://icingsmiles.org" target="_blank" class="callout">
                <img src="images/icing-smiles-logo.jpg" alt="Icing Smiles" style="float:left; margin-right:20px" />
                <div>
                    <h2>Baking a difference</h2>
                    <p>We're proud to work with Icing Smiles, a nonprofit organization that provides custom cakes to families impacted by the critical illness of a child.</p>
                </div>
                <div style="clear:both"></div>
            </a>
        </div>

    </div>

    <script type="text/javascript">

    (function ($) {


        $('#scrollbar').draggable({axis: "x", containment: ".container-inner"});



        $(window).load(function () {
            Scroller.init();
            ScrollerNavigation.init();
        });



        var Scroller = (function () {

            var _$scrollbar = $('#scrollbar');

            var _scrollbarWidth = _$scrollbar.width();

            var _scrollbarTrackWidth = $('#container').width();

            var _maxScrollbarLeft = _scrollbarTrackWidth - _scrollbarWidth;

            var _scrollerIntervalId = -1;

            var _isDragging = false;

            var _scrollSlideshow = function () {
                _scrollerIntervalId = setInterval(_updateScrollPosition, 17);
            };

            var _updateScrollPosition = function () {

                if (_isDragging){
                    var scrollbarLeft = parseInt(_$scrollbar.css('left'));
                    var percentAcross = scrollbarLeft / _maxScrollbarLeft;
                    var scrollWindowLeft = this.maxScroll * percentAcross * -1;

                    $('#slide-container .js-scroll-window').css('left', scrollWindowLeft + 'px');

                } else {
                    clearInterval(_scrollerIntervalId);
                }
            };

            return {

                maxScroll: null,

                $categories: null,

                init: function () {
                    this.maxScroll = $('.js-scroll-window').width() - _scrollbarTrackWidth;
                    this.$categories = $('.js-scroll-category');

                    this.bindScope();
                    this.bindEvents();
                },

                bindEvents: function () {
                    $(window).bind('mouseup', function () {
                        if (_isDragging) {
                            _isDragging = false;
                        }
                    });


                    $('#scrollbar').bind('mousedown', function () {
                        _scrollSlideshow();
                        _isDragging = true;
                    });
                },

                bindScope: function () {
                    _updateScrollPosition = _updateScrollPosition.bind(this);
                },

                getCategoryScrollbarLeftPosition: function (category) {
                    var $category = this.$categories.filter('.' + category);
                    var categoryLeft = $category.position().left;
                    var percentAcross = categoryLeft / this.maxScroll;
                    var left = percentAcross * _maxScrollbarLeft;
                    if (left > _maxScrollbarLeft) {
                        left = _maxScrollbarLeft;
                    } else if (left < 0) {
                        left = 0;
                    }
                    return left;
                },

                goTo: function (category) {
                    var left = this.getCategoryScrollbarLeftPosition(category);
                    _isDragging = true;
                    _scrollSlideshow();
                    _$scrollbar.stop().animate({ left: left }, 700, function(){
                        _isDragging = false;
                    });
                }

            };

        }());



        var ScrollerNavigation = (function () {

            var DATA_ATTRIBUTE = 'scroll-to-category';

            return {

                init: function () {
                    this.$element = $('.slider-navigation');
                    this.$navItems = this.$element.find('[data-' + DATA_ATTRIBUTE + ']');
                    this.$navItems.each(function () {
                        var $this = $(this);
                        var scrollToCategory = $this.attr('data-' + DATA_ATTRIBUTE);
                        $this.bind('click', function () {
                            Scroller.goTo(scrollToCategory);
                        });
                    });
                }

            };

        }());
    }(jQuery));
    </script>
</body>
</html>

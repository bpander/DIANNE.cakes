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
        <link rel="stylesheet" href="styles/screen.css?version=1.0.3" type="text/css" media="screen" />

        <!-- Scripts -->
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.1.custom.min.js"></script>
        <script type="text/javascript" src="js/prototype.js"></script>
        <script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
        <script type="text/javascript" src="js/lightbox.js"></script>

    </head>

    <body style="background:#F5ACCC; margin:0; padding:0">



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
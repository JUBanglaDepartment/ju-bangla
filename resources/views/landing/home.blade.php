@extends('landing.layout')


@section('header')
    <div id="header">
        <div id="header_content">
            <div id="header_logo"></div>
            <div id="header_text">
                <div id="header_text2"><span>“ মনুষ্যত্বের শিক্ষাটাই চরম শিক্ষা আর সমস্তই তার অধীন ”</span></div>
                <div id="header_text3"><span>-রবীন্দ্রনাথ ঠাকুর</span></div>
            </div>
        </div>
    </div>
@endsection

@section('menu')
    <div id="menu">
        <div id='cssmenu'>
            <ul>
                <li><a href='#'><span>বাংলা বিভাগ</span></a></li>
                <li class='active has-sub'><a href='#'><span>প্রোগ্রাম সমূহ</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>বাংলায় অনার্স</span></a>
                            <ul>
                                <li><a href='#'><span>XXX</span></a></li>
                                <li class='last'><a href='#'><span>XXX</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>বাংলায় এম,এ</span></a>
                            <ul>
                                <li><a href='#'><span>XXX</span></a></li>
                                <li class='last'><a href='#'><span>XXX</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>বাংলায় এম,ফিল</span></a></li>
                        <li class='has-sub'><a href='#'><span>বাংলায় পি,এইচ,ডি</span></a></li>
                    </ul>
                </li>
                <li><a href='#'><span>শিক্ষকবৃন্দ</span></a></li>
                <li><a href='#'><span>যোগাযোগ</span></a></li>
                <li class='last'><a href='#'><span>লগ ইন</span></a></li>
            </ul>
        </div>
    </div>
@endsection

@section('banner')
    <div id="banner">
        <script type="text/javascript" src="js/jssor.slider.min.js"></script>
        <script>
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
                {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, auto);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
        </script>
        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1280px; height: 499px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1280px; height: 499px; overflow: hidden;">
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="images/banner.png" />
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="images/banner2.png" />
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="images/banner3.png" />
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="images/banner4.png" />
                </div>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
        </div>
        <script>
        jssor_1_slider_init();
        </script>
    </div>
@endsection


@section('content_left')
    <div id="content_left">
        <span><p>ঐতিহাসিক চিত্রের সূচনা লিখিবার জন্য সম্পাদক-দত্ত অধিকার পাইয়াছি, আর কোনো প্রকারের অধিকারের দাবি রাখি না। কিন্তু আমাদের দেশের সম্পাদক ও পাঠকবর্গ লেখকগণকে যেরূপ প্রচুর পরিমাণে প্রশ্রয় দিয়া থাকেন তাহাতে অনধিকার প্রবেশকে আর অপরাধ বলিয়া জ্ঞান হয় না।

            এই ঐতিহাসিক পত্রে আমি যদি কিছু লিখিতে সাহস করি তবে তাহা সংক্ষিপ্ত সূচনাটুকু। কোনো শুভ অনুষ্ঠানের উৎসব-উপলক্ষে ঢাকীকে মন্ত্রও পড়িতে হয় না, পরিবেশনও করিতে হয় না– সিংহদ্বারের বাহিরে দাঁড়াইয়া সে কেবল আনন্দধ্বনি ঘোষণা করিতে থাকে। সে যদিচ কর্তাব্যক্তিদের মধ্যে কেহই নহে, কিন্তু সর্বাগ্রে উচ্চকলরবে কার্যারম্ভের সূচনা তাহারই হস্তে।

            যাঁহারা কর্মকর্তা, গীতা তাঁহাদিগকে উপদেশ দিয়াছেন যে: কর্মণ্যেবাধিকারস্তে মা ফলেষু কদাচন। অর্থাৎ, কর্মেই তোমার অধিকার আছে, ফলে কদাচ নাই। আমরা কর্মকর্তা নহি। আমাদের একটা সুবিধা এই যে, কর্মে আমাদের অধিকার নাই, কিন্তু ফলে আছে! সম্পাদক-মহাশয় যে অনুষ্ঠান ও যেরূপ আয়োজন করিয়াছেন তাহার ফল বাংলার, এবং আশা করি অন্য দেশের, পাঠকমণ্ডলী চিরকাল ভোগ করিতে পারিবেন।

            অদ্য “ঐতিহাসিক চিত্রে’র শুভ জন্মদিনে আমরা যে আনন্দ করিতে উদ্যত হইয়াছি তাহা কেবলমাত্র সাহিত্যের উন্নতিসাধনের আশ্বাসে নহে। তাহার আর-এ</p></span>
        </div>
    @endsection

    @section('content_right')
        <div id="content_right">
            <div id="content_right_header">
                <div id="content_right_head_pin"></div>
                <div id="content_right_notice">Notice Board</div>
            </div>
            <div id="content_right_content">
                <div class="textSlide">
                    <p>বিষয়ঃ বেসরকারী বিশ্ববিদ্যালয় আইন অনুযায়ী প্রয়োজনীয় ব্যবস্থা গ্রহণ প্রসঙ্গে। <br/>
                        <br/>জরুরী প্রজ্ঞাপন : ১লা আগষ্ট ২০১৬ যথাযথ মর্যাদার সাথে গুলশান ও শোলাকিয়ায় হত্যাকান্ডে ...<br />
                        <br/>বিষয়ঃ বেসরকারী বিশ্ববিদ্যালয় আইন অনুযায়ী প্রয়োজনীয় ব্যবস্থা গ্রহণ প্রসঙ্গে। <br/>
                        <br/>জরুরী প্রজ্ঞাপন : ১লা আগষ্ট ২০১৬ যথাযথ মর্যাদার সাথে গুলশান ও শোলাকিয়ায় হত্যাকান্ডে ...<br />
                        <br/>বিষয়ঃ বেসরকারী বিশ্ববিদ্যালয় আইন অনুযায়ী প্রয়োজনীয় ব্যবস্থা গ্রহণ প্রসঙ্গে। <br/>
                        <br/>জরুরী প্রজ্ঞাপন : ১লা আগষ্ট ২০১৬ যথাযথ মর্যাদার সাথে গুলশান ও শোলাকিয়ায় হত্যাকান্ডে ...<br />
                        <br/>বিষয়ঃ বেসরকারী বিশ্ববিদ্যালয় আইন অনুযায়ী প্রয়োজনীয় ব্যবস্থা গ্রহণ প্রসঙ্গে। <br/>
                        <br/>জরুরী প্রজ্ঞাপন : ১লা আগষ্ট ২০১৬ যথাযথ মর্যাদার সাথে গুলশান ও শোলাকিয়ায় হত্যাকান্ডে ...</p>
                    </div>
                </div>
            </div>
        @endsection

        @section('footer')
            <div id="footer">
                <div id="footer_content">
                    <div id="footer_text_left"><span>Jahangirnagar University, Savar, Dhaka-1342, Bangladesh.<br />Telephone: PABX: 880-2-7791045-51, 			Fax: 880-2-7791052</span></div>
                    <div id="footer_text_right"><span>&copy; 2016 Jahangirnagar University</span></div>
                </div>
            </div>
        @endsection

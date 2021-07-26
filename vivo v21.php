<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myBlog</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css.css">
    <script src="js/jquery-1.11.0.min.js"></script>
</head>
<body>
    <div class="topbar">
        <div class="set1">
            <img id="logo" src="img/logo.png" alt="myLogo" />
            <div class="menu forums">Forums</div>
            <div class="menu devices">Devices</div>
            <div class="menu topics">Topics</div>
            <div class="menu best_posts">Best Posts</div>
        </div>
        <div class="set2">
            <input type="text" id="search" autocomplete="off" placeholder="Search..." />
        </div>
        <div class="searchSuggestion"></div>
        <div class="topicsSuggestion"></div>
        <div class="devicesSuggestion"></div>
        <div class="forumsSuggestion"></div>
        <div class="best_postsSuggestion"></div>
    </div>
    <script>
        $(document).ready(function(){
            // it's use to provide menu list dynamically
            // for topicsSuggestion
            $.ajax({
                url: "menuList1.php",
                success: function(data){
                    $(".topicsSuggestion").html(data);
                }
            });
        });
        $(document).ready(function(){
            // for devicesSuggestion
            $.ajax({
                url: "menuList2.php",
                success: function(data){
                    $(".devicesSuggestion").html(data);
                }
            });

            // it's use for providing link to the menu bar lists
            $(".tlist, .dlist").on("click", function(){
                $param = $(this).data("value");
                $.ajax({
                    url: "menuURL.php",
                    type: "POST",
                    data: {param : $param},
                    success: function(data){
                        location.href=data.link;
                    }
                });
            });

        });
    </script>
    
    <div class="blog-body">
        <div class="tab"> -->
<?php
    $output = '
            <div class="head">
                <div class="heading" data-value="3"><h>Vivo V21 Hands-on: Can the 44MP OIS selfie camera compete with the iPhone 12?</h></div>
                <div class="heading2">
                    <div class="time">06:50 PM &nbsp; - &nbsp;</div>
                    <div class="date">27&nbsp;APR &nbsp;2021</div>
                    <div class="source">By <div class="name">Alex Xander</div></div>
                </div>
            </div>
            <div class="body">
                <p>&nbsp;&nbsp;&nbsp;<!-- for paragraph on 1st line -->
                    Vivo’s prolific selfie-centric V series is back with an update just six months after the last release. In the new Vivo V21, Vivo has added an optical image stabilization module to the front-facing 44MP camera as well as two forward-facing flash lights….and not much else. Is this enough to justify an upgrade? Is the selfie experience that much superior to, say, the iPhone 12’s?
                </p>
                <img src="img/DSC04722-768x512.jpg" alt=""/>
                <h2>Vivo V21 5G design and hardware</h2>
                <p>&nbsp;&nbsp;&nbsp;
                    The Vivo V21 5G uncharacteristically keeps almost the exact same design as last fall’s Vivo V20 series (previous V devices had changed their design wholesale with each generation). This is mostly a good thing, as I thought the V20 series looked quite good.
                </p>
                <p>
                    The new Vivo V21 5G is light (179g) and thin (7.29mm), and its flat 6.4-inch panel should please most people, as it’s neither too large nor curved. My unit features a gradient glass back (it also comes in a deep blue color) that looks great and doesn’t attract fingerprints due to the matte coating.
                </p>
                <div class="grid2">
                    <div class="one">
                        <img src="img/DSC04724-768x512.jpg" alt="" srcset="">
                    </div>
                    <div class="two">
                        <img src="img/DSC04725.jpg" alt="" srcset="">
                    </div>
                </div>
                
                <p>&nbsp;&nbsp;&nbsp;
                    In fact, the only visual change I can tell between the Vivo V21 5G and the V20 is that the aluminum chassis that wraps around the top, bottom, left, and right has been made slightly thicker, making it almost resemble a bumper. It’s a look I like — it sort of resembles the iPhone 12’s flat sides.
                </p>
                <img src="img/DSC04727-768x512.jpg" alt="" srcset="">
                <p>&nbsp;&nbsp;&nbsp;
                    However, some of the disappointing hardware features of the V20 are still here. The Vivo V21 5G still sports a notch to house its selfie camera instead of the more modern hole-punch design, and the phone only has a single bottom-firing speaker that doesn’t get very loud.
                </p>
                <p>
                    The main camera system also features a mostly pointless 2MP depth sensor and the 8MP ultra-wide is weak, but at least the 64MP main camera is solid. The 4,000 mAh battery and MediaTek Dimensity 800U SoC are just decent offerings in 2021 even when compared against other devices in its mid-tier, sub-$400 price range.
                </p>
                <p>
                    But the whole point of the Vivo V21 is its selfie camera anyway, which features eye-popping hardware: a 44MP sensor with OIS and two flashes, and software tricks such as eye auto-focus (like the ones used by Sony mirrorless cameras). So for this piece, we’re mostly focusing on the V21’s selfie camera performance.
                </p>
                <h2>Vivo V21 5G selfie camera</h2>
                <p>
                    When I tested the Vivo V20 Pro last fall, I concluded that its 44MP selfie camera was indeed better than the front-facing cameras of other phones I owned. Even compared to the much more expensive flagships like the iPhone 11 Pro, the V20 Pro’s selfies were consistently sharper with noticeably better dynamic range if I’m shooting against harsh backlight, plus it performed better in low light conditions, too.
                </p>
                <p>
                    The Vivo V21 5G has basically the same 44MP sensor but with the addition of OIS, so it should result in another easy win, right? Not exactly. That’s mainly because Apple has improved its camera software significantly between the iPhone 11 and the iPhone 12, particularly in low light or harsh backlight shots. In the below samples, I captured my face against very harsh sunlight to see how the two cameras handle dynamic range.
                </p>
                <div class="grid2">
                    <div class="one">
                        <img src="img/IMG_20210424_150100-768x1024.jpg" alt="" srcset="">
                        <div class="caption">Vivo V21 5G</div>
                    </div>
                    <div class="two">
                        <img src="img/IMG_1159-768x1024.jpg" alt="" srcset="">
                        <div class="caption">iPhone 12</div>
                    </div>
                </div>
                <p>
                    Sure, there are more shadows to be found all over the iPhone’s image — on my face, under the tunnel bridge, and even in the clouds — so Vivo’s image is “brighter,” but brighter isn’t always better. Shadows often add contrast and mood, and they have their rightful place in photos. So really, to determine which photo is better depends on your taste. Vivo’s shot is perfectly balanced to the point it looks superficial, whereas the iPhone’s shot maintains some semblance of realism — that is my face should be drenched in shadows under such harsh lighting. A lesser selfie camera (say, the iPhone 11) would have either completely blown out the sky to highlight my face, or my face would be covered in darkness. In other words, both of these shots are good — they just cater to different tastes.
                </p>
                <p>
                    Moving onto portrait selfies, again both the Vivo V21 5G and the iPhone 12 produce excellent shots with somewhat realistic bokeh. As is usual with these comparisons, the Chinese phone does a bit more processing with my skin tone while Apple keeps the shot more realistic, hence why you can see more wrinkles and skin imperfections in the iPhone 12 shot. Vivo appeared to have cleaned up my skin tone a bit to make colors look consistent, whereas my forehead looks a bit red in the iPhone 12 shot (probably because it was a very hot day).
                </p>
                <div class="grid2">
                    <div class="one">
                        <img src="img/IMG_20210424_163127-768x1024.jpg" alt="" srcset="">
                        <div class="caption">Vivo V21 5G portrait selfie</div>
                    </div>
                    <div class="two">
                        <img src="img/IMG_1167-768x1024.jpg" alt="" srcset="">
                        <div class="caption">iPhone 12 portrait selfie</div>
                    </div>
                </div>
                
                <p>&nbsp;&nbsp;&nbsp;
                    Moving to moderate low night selfies, we can see that the Vivo V21 5G’s front-facing camera pulls in significantly more light than the iPhone 12’s — my face in Vivo’s shot is well illuminated while it’s slightly dark in the iPhone 12’s — but at the expense of blowing out the city lights behind me. Because this is just a moderately low light shot, neither phone’s night mode kicked in.
                </p>
                <div class="grid2">
                    <div class="one">
                        <img src="img/IMG_20210426_190824-1024x768.jpg" alt="" srcset="">
                        <div class="caption">Vivo V21 5G night selfie sample.</div>
                    </div>
                    <div class="two">
                        <img src="img/IMG_1195-1024x768.jpg" alt="" srcset="">
                        <div class="caption">iPhone 12 night selfie sample</div>
                    </div>
                </div>
                <p>
                    In extreme low light shooting conditions, the Vivo V21 5G offers multiple ways to add light. There’s simply using night mode, which requires holding the phone still for several seconds. There’s the aforementioned double flash light, which I find far too harsh. Finally, the third option, “Aura,” uses the display’s light to serve as a fill light.
                </p>
                <div class="grid2">
                    <div class="one">
                        <img src="img/DSC04735-1024x683.jpg" alt="" srcset="">
                        <div class="caption">Vivo V21 “Aura” fill light.</div>
                    </div>
                    <div class="two">
                        <img src="img/DSC04736-1024x683.jpg" alt="" srcset="">
                        <div class="caption">Vivo V21 dual flash.</div>
                    </div>
                </div>
                <p>
                    The iPhone 12 offers just two options to take low-light selfies: night mode or with a single flash. I’m just going to say upfront that I find myself looking very bad in all shots with flash, whether it’s Vivo’s double flash or fill light. Maybe it’s because I have bad skin (acne scars, blemishes, dark eye circles from decades of being a night owl), and a more youthful, better-looking person may benefit from the flash. But for me, I look terrible in all these shots.
                </p>
                <div class="grid3">
                    <div class="one">
                        <img src="img/IMG_20210424_184803-768x1024.jpg" alt="" srcset="">
                        <div class="caption">Vivo V21’s double flash.</div>
                    </div>
                    <div class="two">
                        <img src="img/IMG_20210424_184735-768x1024.jpg" alt="" srcset="">
                        <div class="caption">Vivo V21’s fill light.</div>
                    </div>
                    <div class="three">
                        <img src="img/IMG_1178-768x1024.jpg" alt="" srcset="">
                        <div class="caption">iPhone 12’s flash.</div>
                    </div>
                </div>
                <p>
                    If I turn on night mode, the iPhone’s shot improves drastically, but Vivo’s night mode just over-processed my face to the point I look like a ghost.
                </p>
                <div class="grid2">
                    <div class="one">
                        <img src="img/IMG_20210424_185032-768x1024.jpg" alt="" srcset="">
                        <div class="caption">Vivo V21 night mode selfie.</div>
                    </div>
                    <div class="two">
                        <img src="img/IMG_1179-768x1024.jpg" alt="" srcset="">
                        <div class="caption">iPhone 12 night mode selfie.</div>
                    </div>
                </div>
                <p>
                    At least from my testing, the iPhone 12’s selfie camera fares better in extremely low light conditions.
                </p>
                <p>
                    But of course, the big selling point of the Vivo V21 5G this year is the addition of OIS to the front-facing camera, and this will mostly be of use during video recording. From my testing, the Vivo V21 5G’s OIS does work to produce a more stable video when I’m moving, but the iPhone 12’s EIS is also excellent (perhaps best in class), and the differences in stability aren’t that far off. In fact, you can only really notice the slightly more stable footage as I walked up and down a couple of steps at the 0:04 and 0:08 mark of the video below. Whether it’s day or night, Vivo’s video keeps my face better lit but blows out the city lights behind me. The iPhone 12 finds a better balance of keeping exposure.
                </p>
                <h2>Vivo V21 5G early thoughts</h2>
                <p>
                    The Vivo V21 5G’s price will depend on region, and so far Vivo has only announced pricing in Malaysia, which came out to around $390. We can expect the device to be priced similarly in India (being announced on April 29) and other parts of Southeast Asia. However, for Europe, I have a feeling the price will jump a bit. At this price range I’m not sure the Vivo V21 5G is a worthy purchase for most people. You can find superior SoCs, displays and main camera array at the same price range if you buy something from Redmi or Realme. However, for selfie fans who really need to film themselves walking and talking (aspiring TikTokers, maybe?), the Vivo V21 5G’s selfie cam with OIS does bring a slight advantage.
                </p>
                <img src="img/DSC04730-768x512.jpg" />
                <p>
                    But the V series has always been a niche series catering to a specific group, and this continues the trend.
                </p>                
            </div>
        </div>';
?>
        <!-- <div class="tab2">
            <div class="latest">
                <div class="head">Latest Update <div class="hr"></div></div>
                <!-- Get all Data dynamically --!
                <div class="getLatest"></div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $("#logo").on("click", function(){
                    location.href = "index.html";
                });
                
                $except = $(".tab > .head > .heading").data("value");
                $.ajax({
                    url: "getUpdate.php",
                    type: "POST",
                    data: {except : $except},
                    success: function(data){
                        $(".tab2 > .latest > .getLatest").html(data);
                        update();
                    }
                });

                // Live Search
                $("#search").on("keyup", function(){
                    $value = $(this).val();
                    if($value != ""){
                        $(".searchSuggestion").show();
                        $.ajax({
                            url: "search.php",
                            type: "POST",
                            data: {search : $value},
                            success: function(data){
                                $(".searchSuggestion").html(data);
                                update();
                            }
                        });
                    }else{
                        $(".searchSuggestion").hide();
                    }
                });

                // Provide links dynamically
                function update(){
                    $(".update_list").on("click", function(){
                        var value = $(this).data("value");
                        $.ajax({
                            url: "getURL.php",
                            type: "POST",
                            dataType: "JSON",
                            data: {blog_no: value},
                            success: function(data){
                                window.location.href = data.link;
                            }
                        })
                    });
                }

                // Topics Suggestion
                $(".topics").on("click", function(){
                    $(this).css("background-color", "#60de41c7");
                    if($(".topicsSuggestion").css("visibility") == "hidden"){
                        $(".topicsSuggestion").css("visibility", "visible");
                    }
                    else{
                        $(".topicsSuggestion").css("visibility", "hidden");
                        $(this).css("background-color", "#eee");
                    }
                });
                // Devices Suggestion
                $(".devices").on("click", function(){
                    $(this).css("background-color", "#60de41c7");
                    if($(".devicesSuggestion").css("visibility") == "hidden"){
                        $(".devicesSuggestion").css("visibility", "visible");
                    }
                    else{
                        $(".devicesSuggestion").css("visibility", "hidden");
                        $(this).css("background-color", "#eee");
                    }
                });
            })
        </script>
    </div>
</body>
</html> -->
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
                <div class="heading" data-value="2"><h>Here’s everything we know about the Samsung Galaxy S21 series, launching in January </h></div>
                <div class="heading2">
                    <div class="time">06:00 PM &nbsp; - &nbsp;</div>
                    <div class="date">07&nbsp;JAN &nbsp;2021</div>
                    <div class="source">By <div class="name">Alex Xander</div></div>
                </div>
            </div>
            <div class="body">
                <p>&nbsp;&nbsp;&nbsp;<!-- for paragraph on 1st line -->
                    Samsung’s flagship smartphones for 2020 were some of the best Android smartphones this year, and we have high hopes for the company’s upcoming Galaxy S21 series. As per recent reports, the company will unveil the Galaxy S21 series in January next year, a few weeks before its usual Galaxy S series launch schedule. Ahead of the official reveal, we’ve seen several leaks and rumors about the upcoming devices, giving us a good look at their design and specifications. In case you’ve not been keeping up with our coverage of the devices, here’s everything we know about the Samsung Galaxy S21, Galaxy S21 Plus, and Galaxy S21 Ultra so far.
                </p>
                <h2>Samsung Galaxy S21 series: Release Date and Announcement Date</h2>
                <p>Samsung has inadvertently confirmed that the Galaxy S21 series will be unveiled on January 14th and that the devices are expected to go on sale in India on January 29th. Global retail availability is expected around January 22, 2021.</p>
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Your experiences are about to get even more epic on January 14, 2021.<br>Watch <a href="https://twitter.com/hashtag/SamsungUnpacked?src=hash&amp;ref_src=twsrc%5Etfw">#SamsungUnpacked</a> live on <a href="https://t.co/D6nxws2O4T">https://t.co/D6nxws2O4T</a> <a href="https://t.co/IVKmxn3Epv">pic.twitter.com/IVKmxn3Epv</a></p>&mdash; Samsung Mobile (@SamsungMobile) <a href="https://twitter.com/SamsungMobile/status/1345867696647229440?ref_src=twsrc%5Etfw">January 3, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <p>&nbsp;&nbsp;&nbsp;
                    Samsung has opened pre-order reservations for the Galaxy S21 series in the U.S. weeks ahead of the official announcement. If you want to be one of the first people in the region to get your hands on the Galaxy S21, S21 Plus, or S21 Ultra, you can now register for a pre-order notification in the Samsung Shop app. You also get $50 in accessory credit when you reserve your pre-order. The ‘reserve’ wording may be a little confusing, but you don’t need to put any money down to make the reservation, nor are you even required to pre-order a Galaxy S21 when pre-orders do go live.
                </p>
                <p>Once you’ve registered, Samsung will notify you as soon as the devices are available for pre-order. All users who pre-order a Galaxy S21 series device via the app will receive $60 in instant credits towards accessories for their new device.</p>
                <h2>Samsung Galaxy S21 series: Ultra, Plus, and Regular variants</h2>
                <p>Much like the previous generation, the Galaxy S20, the Galaxy S21 series will also have three devices in it at launch. There will be the regular Galaxy S21, followed by the Galaxy S21 Plus, and topping off with the premium flagship Galaxy S21 Ultra.</p>
                <p>If you want an updated flagship from Samsung, the regular variant is the choice for you, as it will feature an updated SoC with a relatively modest package. It’s going to be the most accessible way to get a new Galaxy 2021 flagship in the first half of the year without abusing your wallet.</p>
                <p>The Galaxy S21 Plus will be the middle-child in the lineup, and the option that would make sense for most people. It will pack in most of the needed features at a relatively-not-obscene price tag, giving users the sweet medium.</p>
                <p>The Galaxy S21 Ultra will obviously be the overkill option. It would make sense for users who want the absolute best within conventional smartphone realms, and do not intend to flinch from spending top dollar for it. It will be the most premium and feature-packed device from the South Korean company (outside of foldables and luxury special editions), so it’s the phone to get for those looking to make a statement while still holding something recognizable as a smartphone.</p>
                <h2>Design</h2>
                <p>Over the last few weeks, we’ve seen plenty of leaked CAD renders, live images, and even promotional videos of the Galaxy S21 series. These leaks gave us a good look at the device’s design.</p>
                <h2>Galaxy S21 (Regular)</h2>
                <p>For the regular Galaxy S21, the design is almost the same as the Galaxy S20. The only major differences between the two devices are the new camera island, which flows over the device’s left edge and blends seamlessly with the frame, and the flat display. This new camera module design is consistent across the Galaxy S21 lineup, and it comes in a couple of different finishes, which depends on the base colorway of the device.</p>
                <img src="img/S21-776x1024.jpg" alt="S21-776x1024" srcset="">
                <p>Speaking of colors, leaked official press renders of the Galaxy S21 suggest that Samsung will be offering the device in four color variants — Phantom Violet Phantom Gray, Phantom White, and Phantom Pink. Out of these, the Phantom Violet and Phantom Pink colorways will feature a copper-colored frame and camera module, the Phantom Black colorway will feature a black frame and camera module, and the Phantom White colorway will have a silver frame and camera module. All variants of the Galaxy S21 will have a plastic back, much like the Galaxy Note 20 from earlier this year.</p>
                <h2>Galaxy S21 Plus</h2>
                <p>&nbsp;&nbsp;&nbsp;
                    In terms of design, the Galaxy S21 Plus won’t differ much from the base variant. It will feature the same design elements, including the new camera module, but it will have a slightly larger footprint. However, the device will differ from the regular Galaxy S21 in terms of material choice.
                </p>
                <img src="img/S21-Plus-979x1024.jpg" alt="S21-Plus-979x1024" srcset="">
                <p>&nbsp;&nbsp;&nbsp;
                    Samsung will offer a glass back on the Galaxy S21 Plus, unlike the glasstic back on the base variant. Additionally, Samsung won’t offer as many color variants for the Galaxy S21 Plus, and it will only be available in Phantom Silver, Phantom Black, and Phantom Violet at launch.
                </p>
                <h2>Galaxy S21 Ultra</h2>
                <p>&nbsp;&nbsp;&nbsp;
                    The top-of-the-line Galaxy S21 Ultra will also feature a similar camera island design, but it will be much larger than the camera island on the other two variants. This is due to the fact that it will include a total of 4 camera sensors. Unlike the Galaxy S21 and Galaxy S21 Plus, the Galaxy S21 Ultra will feature a curved display. The display is also a QHD+ display as against the FHD+ display on the other two phones. And for the first time ever, a Samsung flagship will be able to run on QHD+ resolution at the maximum 120Hz refresh rate, finally catching up with the rest of the Android flagships that already did the same in 2020.
                </p>
                <img src="img/S21-Ultra-1024x725.jpg" alt="S21-Ultra-1024x725" srcset="">
                <p>As with the Galaxy S21 Plus, the Galaxy S21 Ultra will feature a premium glass back. But the device will only come in two color variants —Phantom Black and Phantom Silver.</p>
                <h2>Samsung Galaxy S21 series: Specifications</h2>
                <p>These are the expected specifications for the Samsung Galaxy S21 series. Note that these are not final specifications, and are based on leaks and reasonable guesstimates. We’ll keep them updated, but know that these may change by the time the phones are actually released.</p>
                <!-- Specifications -->
                <table class="specs">
                    <tr class="sh">
                        <th class="h1">Specification</th>
                        <th class="h2">Samsung Galaxy S21</th>
                        <th class="h2">Samsung Galaxy S21 Plus</th>
                        <th class="h2">Samsung Galaxy S21 Ultra</th>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Build</td>
                        <td class="row2">
                            <ul>
                                <li>Aluminum mid-frame</li>
                                <li>Plastic back</li>
                                <li>Gorilla Glass Victus front</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>Aluminum mid-frame</li>
                                <li>Gorilla Glass back</li>
                                <li>Gorilla Glass Victus front</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>Aluminum mid-frame</li>
                                <li>Gorilla Glass back</li>
                                <li>Gorilla Glass Victus front</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Dimensions & Weight</td>
                        <td class="row2">
                            <ul>
                                <li>151.7 x 71.2 x 7.9mm</li>
                                <li>171 grams</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>161.4 x 75.6 x 7.8mm</li>
                                <li>202 grams</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>165.1 x 75.6 x 8.9 mm</li>
                                <li>228 grams</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Display</td>
                        <td class="row2">
                            <ul>
                                <li>6.2″ FHD+ Dynamic AMOLED 2X display</li>
                                <li>2400 x 1080 pixels</li>
                                <li>421 PPI</li>
                                <li>120Hz variable refresh rate</li>
                                <li>20:9 aspect ratio</li>
                                <li>HDR10+</li>
                                <li>1300nits peak brightness+</li>
                                <li>Always-On display+</li>
                                <li>Infinity-O display+</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>6.7″ FHD+ Dynamic AMOLED 2X display</li>
                                <li>2400 x 1080 pixels</li>
                                <li>394 PPI</li>
                                <li>120Hz variable refresh rate</li>
                                <li>20:9 aspect ratio</li>
                                <li>HDR10+</li>
                                <li>1300nits peak brightness+</li>
                                <li>Always-On display+</li>
                                <li>Infinity-O display+</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>6.8″ QHD+ Dynamic AMOLED 2X curved display</li>
                                <li>120Hz at QHD+ supported</li>
                                <li>120Hz variable refresh rate</li>
                                <li>20:9 aspect ratio</li>
                                <li>HDR10+</li>
                                <li>1600nits peak brightness+</li>
                                <li>Always-On display+</li>
                                <li>Infinity-O display+</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">SoC</td>
                        <td class="row2">
                            <ul>
                                <li>Exynos 2100</li>
                                <li>1x Core @ 2.9GHz +</li>
                                <li>3x Cores @ 2.8GHz +</li>
                                <li>4x Cores @ 2.4GHz</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>Exynos 2100</li>
                                <li>1x Core @ 2.9GHz +</li>
                                <li>3x Cores @ 2.8GHz +</li>
                                <li>4x Cores @ 2.4GHz</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>Exynos 2100</li>
                                <li>1x Core @ 2.9GHz +</li>
                                <li>3x Cores @ 2.8GHz +</li>
                                <li>4x Cores @ 2.4GHz</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">RAM & Storage</td>
                        <td class="row2">
                            <ul>
                                <li>8GB + 128GB</li>
                                <li>8GB + 256GB</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>8GB + 128GB</li>
                                <li>8GB + 256GB</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>12GB + 128GB</li>
                                <li>12GB + 256GB</li>
                                <li>12GB + 512GB</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Battery & Charging</td>
                        <td class="row2">
                            <ul>
                                <li>4,000mAh</li>
                                <li>25W USB Power Delivery 3.0 fast charging</li>
                                <li>15W wireless charging</li>
                                <li>4.5 reverse wireless charging</li>
                                <li>No charger in box in most regions</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>4,800mAh</li>
                                <li>25W USB Power Delivery 3.0 fast charging</li>
                                <li>15W wireless charging</li>
                                <li>4.5 reverse wireless charging</li>
                                <li>No charger in box in most regions</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>5,000mAh</li>
                                <li>25W USB Power Delivery 3.0 fast charging</li>
                                <li>15W wireless charging</li>
                                <li>4.5 reverse wireless charging</li>
                                <li>No charger in box in most regions</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Security</td>
                        <td class="row2">
                            <ul>
                                <li>Ultrasonic In-Display Fingerprint Scanner</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>Ultrasonic In-Display Fingerprint Scanner</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>Ultrasonic In-Display Fingerprint Scanner</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Rear Camera(s)</td>
                        <td class="row2">
                            <ul>
                                <li><b>Primary:</b> 12MP, wide-angle lens, f/1.8, 1/1.76″, 1.8µm, OIS, Dual Pixel PDAF</li>
                                <li><b>Secondary:</b> 12MP, ultra-wide-angle lens, f/2.2, 1/2.55″, 1.4µm</li>
                                <li><b>Tertiary:</b> 64MP, telephoto lens, f/2.0, 1/1.76″, 0.8µm, PDAF, OIS</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li><b>Primary:</b> 12MP, wide-angle lens, f/1.8, 1/1.76″, 1.8µm, OIS, Dual Pixel PDAF</li>
                                <li><b>Secondary:</b> 12MP, ultra-wide-angle lens, f/2.2, 1/2.55″, 1.4µm</li>
                                <li><b>Tertiary:</b> 64MP, telephoto lens, f/2.0, 1/1.76″, 0.8µm, PDAF, OIS</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li><b>Primary:</b> 108 MP, wide-angle lens, f/1.8, 79°, 24mm, 1/1.33″, 0.8 µm, OIS, PDAF, Laser AF</li>
                                <li><b>Secondary:</b> 12 MP, ultra-wide-angle lens, f/2.2, 120°, 13mm, 1/2.55″, 1.4 µm, AF</li>
                                <li><b>Tertiary:</b> 10 MP, telephoto lens, f/2.4, 35°, 72mm, 1/3.24″, 1.22µm, OIS, 3x optical zoom</li>
                                <li><b>Quarternary:</b> 10 MP, telephoto lens, f/4.9, 10°, 240mm, 1/3.24″, 1.22µm, OIS, 10x optical zoom</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Front Camera(s)</td>
                        <td class="row2">10MP, f/2.2, 1.22µm, Dual Pixel PDAF</td>
                        <td class="row2">10MP, f/2.2, 1.22µm, Dual Pixel PDAF</td>
                        <td class="row2">40MP, f/2.2, 0.7µm, Dual Pixel PDAF</td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Port(s)</td>
                        <td class="row2">USB 3.2 Type-C</td>
                        <td class="row2">USB 3.2 Type-C</td>
                        <td class="row2">USB 3.2 Type-C</td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Audio</td>
                        <td class="row2">Stereo speakers</td>
                        <td class="row2">Stereo speakers</td>
                        <td class="row2">Stereo speakers</td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Connectivity</td>
                        <td class="row2">
                            <ul>
                                <li>Bluetooth 5.1</li>
                                <li>NFC</li>
                                <li>Wi-Fi 6</li>
                                <li>5G</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>Bluetooth 5.1</li>
                                <li>NFC</li>
                                <li>Wi-Fi 6</li>
                                <li>5G</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>Bluetooth 5.1</li>
                                <li>NFC</li>
                                <li>Wi-Fi 6</li>
                                <li>5G</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Software</td>
                        <td class="row2">Samsung One UI 3.1 based on Android 11</td>
                        <td class="row2">Samsung One UI 3.1 based on Android 11</td>
                        <td class="row2">Samsung One UI 3.1 based on Android 11</td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Software</td>
                        <td class="row2">
                            <ul>
                                <li>IP68 water resistance</li>
                                <li>ANT+</li>
                                <li>DeX</li>
                                <li>Knox</li>
                                <li>UWB</li>
                                <li>Bixby Voice Assistant</li>
                                <li>Google Discover pane</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>IP68 water resistance</li>
                                <li>ANT+</li>
                                <li>DeX</li>
                                <li>Knox</li>
                                <li>UWB</li>
                                <li>Bixby Voice Assistant</li>
                                <li>Google Discover pane</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>IP68 water resistance</li>
                                <li>ANT+</li>
                                <li>DeX</li>
                                <li>Knox</li>
                                <li>UWB</li>
                                <li>Bixby Voice Assistant</li>
                                <li>Google Discover pane</li>
                                <li>S Pen support (sold separately and stored externally)</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="sd">
                        <td class="row1">Colors</td>
                        <td class="row2">
                            <ul>
                                <li>Phantom Violet</li>
                                <li>Phantom Gray</li>
                                <li>Phantom White</li>
                                <li>Phantom Pink</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>Phantom Violet</li>
                                <li>Phantom Gray</li>
                                <li>Phantom White</li>
                            </ul>
                        </td>
                        <td class="row2">
                            <ul>
                                <li>Phantom Gray</li>
                                <li>Phantom White</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <p>The baseline for performance is set, with all three of the flagships in this series coming in with the top-end Qualcomm Snapdragon 888 in the USA and select other regions, and with the Exynos 2100 internationally. There should be plenty of RAM and storage onboard, though microSD card expansion is not yet known. The rear and front camera setup remains the same on the regular and Plus variant, while the Ultra gets a complete overhaul. Between the regular and Plus variant, the differentiating factor would be the slightly larger size and the difference in plastic back and glass back.</p>
                <img src="img/Samsung-Galaxy-S21-Ultra-camera-module-leaked-82415.jpg" alt="Samsung-Galaxy-S21-Ultra-camera-module-leaked-82415" />
                <p>The camera setup on the Galaxy S21 Ultra is expected to be significantly better, with a second-gen 108MP primary camera, the same 12MP wide-angle camera as the other two variants, a 3x telephoto sensor, and a 10x optical “super” telephoto sensor. The new telephoto sensors will feature 130% larger pixels and dual-pixel autofocus, and with the 10x telephoto sensor, Samsung will be reviving its 100x Space Zoom feature. As per the latest leak, all three devices in the Galaxy S21 lineup will offer 8K video capture capability at 30 frames per second, and 4K video capture at 50 frames per second. The devices will be able to capture Full HD video at 240 frames per second.</p>
                <p>The leaks further reveals that all three devices will feature stereo speakers, NFC, Bluetooth 5.1, Wi-Fi 6, and IP68 dust and water-resistance. However, only the top of the line model will offer extras like S Pen support.</p>
                <h2>Samsung Galaxy S21 series: Price</h2>
                <p>As for pricing, reports suggest the following:</p>
                <p>Samsung Galaxy S21:<br>&nbsp;&nbsp;&nbsp;128GB: €849<br>&nbsp;&nbsp;&nbsp;256GB: €899</p>
                <p>Samsung Galaxy S21 Plus:<br>&nbsp;&nbsp;&nbsp;128GB: €1,049<br>&nbsp;&nbsp;&nbsp;256GB: €1,099</p>
                <p>Samsung Galaxy S21 Ultra:<br>&nbsp;&nbsp;&nbsp;128GB: €1,349<br>&nbsp;&nbsp;&nbsp;256GB: €1,399<br>&nbsp;&nbsp;&nbsp;512GB: €1,529</p>
                <p>The pricing for the base model is lower than what the Galaxy S20 launched within Europe, but the higher-end model is more expensive than the Galaxy S20 Ultra possibly because of the improved camera hardware and S Pen support. In all, there’s a wider price bracket to cover with the coming flagship series.</p>
                <h2>S Pen support on the Galaxy S series and the end of the Galaxy Note?</h2>
                <p>Historically, the S Pen had been the defining feature of the Samsung Galaxy Note series, clearly differentiating the product lineup towards productivity-focused pro-consumers. Some of Samsung’s tablets have come with support for S Pen, but by and large, the S Pen has been part of the Note identity.</p>
                <img src="img/Samsung-Galaxy-S-Pen-1024x683.jpg" alt="Samsung-Galaxy-S-Pen-1024x683" />
                <p>But with the rise of foldables as the new forte for productivity-focused pro-consumers, and with the S-series also closing the gap in terms of other features, there’s little left for the Note and its own identity. Many rumors suggested that the Note lineup is dead. But Samsung had to come clean and reaffirm the existence of the Note series for another year, with the rider that some signature Note features will make their way on to other devices. This is the signal needed to reaffirm all rumors of the S Pen support coming over to the S series with the Galaxy S21 Ultra.</p>
                <p>With the Galaxy S21 Ultra, the S Pen will reportedly be sold separately and stored separately. There’s no housing cavity within the device to store the stylus. Instead, Samsung will offer a couple of case options that will make it easier to store the stylus when not in use and charge it up as well.</p>
                <img src="img/Samsung-Galaxy-S21-Ultra-Clear-View-Cover-Leak-1024x640.jpg" alt="Samsung-Galaxy-S21-Ultra-Clear-View-Cover-Leak-1024x640" />
                <p>The rest of the three phones, the Galaxy S21 and Galaxy S21 Plus, have not been rumored to come with S Pen support, indicating that Samsung will lock the feature to the top of the line model only. Note that this is not a software-lock, but a limitation on hardware as the needed digitizer components will not be present on the other two phones.</p>
                
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
<script type="text/javascript" src="alert/js/jquery.fake-notification.min.js"></script>
<script>
    $(document).ready(function() {
  $('#notification-1').Notification({
    // Notification varibles
    Varible1: ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver", "Andres"],
    Varible2: ["USA","UAE","ITALY", "FLORIDA",  "MEXICO",  "INDIA",  "CHINA",  "CAMBODIA",  "UNITED KINGDOM",  "GERMANY", "AUSTRALIA",  "BANGLADESH", "SWEDEN", "PAKISTAN", "MALDIVES", "SEYCHELLES", 
    "BOLIVIA",
     "SOUTH AFRICA", "ZAMBIA", "ZIMBABWE", "LEBANESE", "SAUDI ARABIA", "CHILE", "PEUTO RICO", "PHILIPPINES"],
    
    Amount: [9000, 2500,5000,6669,4440,7989,7052],          
    Content: '[Varible1] from [Varible2] has just Withdrew <b>$[Amount]</b>',
    // Timer
    Show: ['stable', 5, 10],
    Close: 5,
    Time: [0, 23],
    // Notification style 
    LocationTop: [true, '50%'],
    LocationBottom:[false, '10%'],
    LocationRight: [false, '10%'],            
    LocationLeft:[true, '10px'],
    Background: 'rgba(0,0,0,0.0)',
    BorderRadius: 5,
    BorderWidth: 1,
    BorderColor: 'rgba(0,0,0,0.0)',
    TextColor: 'white',
    IconColor: '#ffffff',
    // Notification Animated   
    AnimationEffectOpen: 'slideInUp',
    AnimationEffectClose: 'slideOutDown',
    // Number of notifications
    Number: 40,
    // Notification link
    Link: [false, 'index.html', '_blank']
    
  });     
});
</script>

<footer class="footer" id="footer">
    <div style="background-color:#14181a; color:#c6c6c6" class="top-bar visible-lg">
        <div class="container">
            <div class="wrap">
                <div class="top-bar-socials page_speed_2044161438">
                    <div class="social-holder">
                        <span>Connect with us:</span>
                        <a title="Facebook" class="social" target="_blank"
                            href="/cdn-cgi/l/email-protection#3e4d4b4e4e514c4a7e5952515c5f525857505b4d4d5b4a4c5f5a5b105d5153">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span class="show-for-sr"> </span>
                        </a>
                    </div>
                </div>

                <div style="background-color:#14181a; color:#c6c6c6" class="online-chat text-center">
                    <a title="Live Chat" onclick="openLiveChat(event)" href="#"
                        class="chat-window-open-bm chat-window-open">
                        <i class="fa fa-2x fa-commenting" aria-hidden="true"></i>
                        <span>Live Chat</span>
                    </a>
                </div>
                <div class="top-bar-badges"></div>
            </div>
        </div>
    </div>

    <div style="background-color:#14181a; color:#c6c6c6" class="top-bar-mobile hidden-lg">
        <div class="container">
            <div class="wrap">
                <div class="top-bar-socials">
                    <div class="online-chat">
                        <a title="Live Chat" onclick="openLiveChat(event)" href="#" class="chat-window-open">
                            <i class="fa fa-2x fa-commenting" aria-hidden="true"></i>
                            <span>Live Chat</span>
                        </a>
                    </div>
                    <div class="social-holder">
                        <span>Connect with us:</span>
                        <a title="Facebook" class="social" target="_blank"
                            href="/cdn-cgi/l/email-protection#51222421213e232511363d3e33303d37383f3422223425233035347f323e3c">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span class="show-for-sr"> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color:#000; color:#c6c6c6" class="pt-4 pb-4">
        <div class="container">
            <div class="text-left mb-3">
                <a class="d-inline-block" title="main page" href="/">
                    <img class="img-responsive"
                        src="{{ asset('storage/app/public/photos/XE8e6dOBv3LxXouRNLOzAUlhuiYW0nAb5ufbz2vH.png') }}"
                        alt="Logo" width=172>
                </a>
            </div>

            <div class="" id="footerItems">
                <div class="row">
                    <div class="col-lg-9 menu">
                        <div class="row">
                            <div class="col-md-3">
                                <ul>
                                    <li><a title="all markets" href="{{ route('about') }}">Company</a></li>
                                    <li><a title="Shares" href="{{ route('contacts') }}">Contact</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <ul>
                                    <li><a title="Login" href="{{ route('login') }}">Login</a></li>
                                    <li><a title="Login" href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <ul>
                                    <li><a title="Platform Overview" href="{{ route('regulation') }}">Legal /
                                            Regulation</a></li>
                                    <li><a title="Automate" href="{{ route('trade') }}">System</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <ul>
                                    <li><a href="{{ route('about') }}">About us</a></li>
                                    <li><a href="{{ route('for-traders') }}">Education</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 menu">
                        <div class="badges">
                            <div class="d-flex mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="badges-mobile">
                            <div class="wraped">
                                <div class="d-flex space-between mb-3"></div>
                            </div>
                        </div>

                        <div class="text-center">
                            <p class="m-0 available">
                                <i class="fa fa-desktop"></i>
                                <i class="fa fa-apple"></i>
                                <i class="fa fa-android"></i>
                                <i class="fa fa-windows"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background-color:#000; color:#c6c6c6" class="mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-2">
                            <span class="fw-600">Please Note:</span>&nbsp; You need to get verified by submitting your
                            documents before being able to
                        <footer class="footer" id="footer">
                            <div style="background-color:#14181a; color:#c6c6c6" class="top-bar visible-lg">
                                <div class="container">
                                    <div class="wrap">
                                        <div class="top-bar-socials page_speed_2044161438">
                                            <div class="social-holder"><span>Connect with us:</span>


                                                <a title="Facebook" class="social" target="_blank"
                                                    href="/cdn-cgi/l/email-protection#6f1c1a1f1f001d1b2f0803000d0e030906010a1c1c0a1b1d0e0b0a410c0002"><i
                                                        class="fa fa-envelope" aria-hidden="true"></i><span
                                                        class="show-for-sr"> </span></a>










                                            </div>
                                        </div>







                                        <div style="background-color:#14181a; color:#c6c6c6"
                                            class="online-chat text-center"><a title="Live Chat"
                                                onclick="openLiveChat(event)" href="#"
                                                class="chat-window-open-bm chat-window-open"><i
                                                    class="fa fa-2x fa-commenting" aria-hidden="true"></i><span>Live
                                                    Chat</span></a></div>
                                        <div class="top-bar-badges"></div>
                                    </div>
                                </div>
                            </div>





                            <div style="background-color:#14181a; color:#c6c6c6" class="top-bar-mobile hidden-lg">
                                <div class="container">
                                    <div class="wrap">
                                        <div class="top-bar-socials">
                                            <div class="online-chat"><a title="Live Chat" onclick="openLiveChat(event)"
                                                    href="#" class="chat-window-open"><i class="fa fa-2x fa-commenting"
                                                        aria-hidden="true"></i><span>Live Chat</span></a></div>
                                            <div class="social-holder"><span>Connect with us:</span>




                                                <a title="Facebook" class="social" target="_blank"
                                                    href="/cdn-cgi/l/email-protection#4d3e383d3d223f390d2a21222f2c212b2423283e3e28393f2c2928632e2220"><i
                                                        class="fa fa-envelope" aria-hidden="true"></i><span
                                                        class="show-for-sr"> </span></a>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>











                            <!-- FOOTERMENU -->


                            <div style="background-color:#000; color:#c6c6c6" class="pt-4 pb-4">
                                <div class="container">
                                    <div class="text-left mb-3"><a class="d-inline-block" title="main page"
                                            href="/"><img class="img-responsive"
                                                src="https://globalfinessetrade.com/storage/app/public/photos/XE8e6dOBv3LxXouRNLOzAUlhuiYW0nAb5ufbz2vH.png"
                                                alt="Logo" width=172></a></div>





                                    <div class="" id="footerItems">
                                        <div class="row">
                                            <div class="col-lg-9 menu">
                                                <div class="row">
                                                    <div class="col-md-3">

                                                        <ul>
                                                            <li><a title="all markets" href="about">Company</a></li>



                                                            <li><a title="Shares" href="contact">Contact</a></li>





                                                        </ul>
                                                    </div>





                                                    <div class="col-md-3">
                                                        <ul>
                                                            <li><a title="Login" href="login">Login</a> </li>

                                                            <li><a title="Login" href="register">Register</a></li>




                                                        </ul>
                                                    </div>






                                                    <div class="col-md-3">
                                                        <ul>
                                                            <li><a title="Platform Overview" href="regulation">Legal /
                                                                    Regulation</a></li>




                                                            <li><a title="Automate" href="trade">System </a></li>


                                                        </ul>
                                                    </div>





                                                    <div class="col-md-3">
                                                        <ul>
                                                            <li><a href="about">About us</a></li>
                                                            <li><a href="for-traders">Education</a></li>

                                                        </ul>



                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-lg-3 menu">
                                                <div class="badges">
                                                    <div class="d-flex mt-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden-lg">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="badges-mobile">
                                                    <div class="wraped">
                                                        <div class="d-flex space-between mb-3"></div>
                                                    </div>
                                                </div>





                                                <div class="text-center">
                                                    <p class="m-0 available"> <i class="fa fa-desktop"></i><i
                                                            class="fa fa-apple"></i><i class="fa fa-android"></i><i
                                                            class="fa fa-windows"></i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>










                                    <div style="background-color:#000; color:#c6c6c6" class="mt-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="mb-2"><span class="fw-600">Please Note:</span>&nbsp; You need
                                                    to get verified by
                                                    submitting your documents before being able to trade. Please read
                                                    our full: <a title="terms and conditions" class="pdf-links"
                                                        href="terms" target="_blank">Terms
                                                        &amp; Conditions</a>&nbsp;
                                                    <a title="privacy policy" class="pdf-links" href="privacy"
                                                        target="_blank">Privacy
                                                        Policy</a>&nbsp; <a title="regulation" class="pdf-links"
                                                        href="regulation" target="_blank">Legal Documents</a>.
                                                </p>

                                                RISK WARNING: The Financial Products offered by the company include
                                                Contracts for Difference
                                                ('CFDs') and other complex financial products. Trading CFDs carries a
                                                high level of risk
                                                since leverage can work both to your advantage and disadvantage. As a
                                                result, CFDs may not be suitable for all investors because it is
                                                possible to lose all of
                                                your invested capital. You should never invest money that you cannot
                                                afford to lose. Before
                                                trading in the complex financial products
                                                offered, please ensure to understand the risks involved.



                                                <hr>
                                                <p class="mb-1"></p>
                                                <p class="mb-0">©
                                                    <script data-cfasync="false"
                                                        src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
                                                    </script>
                                                    <script type="text/javascript">
                                                        var year = new Date();
                                            document.write(year.getFullYear());
                                                    </script>
                                                    Global Finesse Trade. All Rights Reserved.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>





                        <div class="mgm" style="display: none;">
                            <div class="txt" style="color:#fff;">Someone from <b></b> just earned <a
                                    href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
                        </div>

                        <style>
                            .txt {
                                color: #000 !important;
                            }

                            .mgm {
                                border-radius: 7px;
                                position: fixed;
                                z-index: 90;
                                bottom: 20px;
                                right: 50px;
                                background: #fff;
                                color: #000;
                                padding: 20px 27px;
                                box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
                            }

                            .mgm a {
                                font-weight: 700;
                                display: block;
                                color: #ff6600;
                            }

                            .mgm a,
                            .mgm a:active {
                                transition: all .2s ease;
                                color: #ff6600;
                            }
                        </style>
                        <script type="text/javascript">
                            var listCountries = ['Argentina', 'USA', 'Germany', 'France', 'Italy', 'South Korea', 'Australia', 'Norway', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'Spain', 'Austria', 'Venezuela', 'South Africa', 'Sweden', 'South Korea', 'China', 'Italy', 'Germany', 'United Kingdom', 'Bahrain', 'Greece', 'Cuba', 'Bulgaria', 'Portugal', 'Austria', 'Cyprus', 'Panama', 'Asia', 'Norway', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus', 'Spain', 'Norway'];
        var listPlans = ['$2000', '$1000', '$50000', '$15000', '$10000', '$100000', '$20000', '$1500', '$30000', '$40000', '$1200', '$60000', '$3400', '$7000', '$25000', '$25000', '$35000', '$5000', '$7000', '$45000', '$3500', '$5000', '$12500', '$9500'];
        var listActions = ['earned', 'traded', 'withdrew'];
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var run = setInterval(request, interval);

        function request() {
            clearInterval(run);
            interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
            var country = listCountries[Math.floor(Math.random() * listCountries.length)];
            var plan = listPlans[Math.floor(Math.random() * listPlans.length)];

            var actions = listActions[Math.floor(Math.random() * listActions.length)];
            var msg = 'Someone from <b>' + country + '</b> just ' + actions + ' <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
            $(".mgm .txt").html(msg);
            $(".mgm").stop(true).fadeIn(300);
            window.setTimeout(function() {
                $(".mgm").stop(true).fadeOut(300);
            }, 1000);
            run = setInterval(request, interval);
        }
                        </script>





                        <style>
                            .last-widget {
                                position: sticky;
                                z-index: 10;
                                bottom: 0;
                            }
                        </style>


                        <div class="last-widget">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>

                                <script type="text/javascript"
                                    src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
                                    async>
                                    {
                    "symbols": [{
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR/USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "BTC/USD"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "ETH/USD"
                        }
                    ],
                    "colorTheme": "dark",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
                                </script>
                            </div>



                            <script type="text/javascript">
                                (function() {
                var options = {
                    whatsapp: "+1 (810) 323-5143", // WhatsApp number
                    call_to_action: "Message us", // Call to action
                    button_color: "#FF6550", // Color of button
                    position: "left", // Position may be 'right' or 'left'
                };
                var proto = 'https:',
                    host = "getbutton.io",
                    url = proto + '//static.' + host;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url + '/widget-send-button/js/init.js';
                s.onload = function() {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            })();
                            </script>


                            <!--End of Tawk.to Script-->






                            <script type=text/javascript>
                                $(function() {
                function openLiveChat(e) {
                    e.preventDefault();
                    if (typeof Blinger !== 'undefined' && !Blinger.launcherWidget.isOpen) {
                        Blinger.launcherWidget.onLaunchButtonClick();
                    }
                }
                $(function() {
                    $('#chat-window-open').on('click', function(e) {
                        e.preventDefault();
                        if (typeof Blinger !== 'undefined' && !Blinger.launcherWidget.isOpen) {
                            Blinger.launcherWidget.onLaunchButtonClick();
                        }
                        return false;
                    });
                });
                $(document).on('show.bs.modal', () => {
                    previousScrollY = window.scrollY;
                    $('html').addClass('modal-open');
                }).on('hidden.bs.modal', () => {
                    $('html').removeClass('modal-open');
                    $('html').removeAttr('style class');
                });

                function bindGAEvents(eventCategory, callback, iter) {
                    if (typeof iter === "undefined") {
                        iter = 1;
                    }
                    if (window.dataLayer) {
                        if (typeof callback === "function") {
                            callback();
                        }
                    } else if (iter > 2 && typeof callback === "function") {
                        callback();
                    } else {
                        setTimeout(function() {
                            bindGAEvents(eventCategory, callback, iter + 1);
                        }, 500);
                    }
                }
                $(document).ready(function() {
                    if ('' == '1') {
                        bindGAEvents('ex_new_user');
                    }
                    $(document).on('click', '.start-trading, .open-live-account, .open-demo-account', function(event) {
                        var redirectLink = $(this).attr('href');
                        bindGAEvents('ex_button', function() {
                            window.location.href = redirectLink;
                        });
                        event.preventDefault();
                    });
                });
            })
                            </script>
                            <script src=temp/custom/id-ct.fondex.com/build/js/sso.min62ea.html defer></script>
                            <script type=text/javascript data-cookie="analytics">
                                (function(c, a) {
                if (!a.__SV) {
                    var b = window;
                    try {
                        var d, m, j, k = b.location,
                            f = k.hash;
                        d = function(a, b) {
                            return (m = a.match(RegExp(b + "=([^&]*)"))) ? m[1] : null
                        };
                        f && d(f, "state") && (j = JSON.parse(decodeURIComponent(d(f, "state"))), "mpeditor" === j.action && (b.sessionStorage.setItem("_mpcehash", f), history.replaceState(j.desiredHash || "", c.title, k.pathname + k.search)))
                    } catch (n) {}
                    var l, h;
                    window.mixpanel = a;
                    a._i = [];
                    a.init = function(b, d, g) {
                        function c(b, i) {
                            var a = i.split(".");
                            2 == a.length && (b = b[a[0]], i = a[1]);
                            b[i] = function() {
                                b.push([i].concat(Array.prototype.slice.call(arguments, 0)))
                            }
                        }
                        var e = a;
                        "undefined" !== typeof g ? e = a[g] = [] : g = "mixpanel";
                        e.people = e.people || [];
                        e.toString = function(b) {
                            var a = "mixpanel";
                            "mixpanel" !== g && (a += "." + g);
                            b || (a += " (stub)");
                            return a
                        };
                        e.people.toString = function() {
                            return e.toString(1) + ".people (stub)"
                        };
                        l = "disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
                        for (h = 0; h < l.length; h++) c(e, l[h]);
                        var f = "set set_once union unset remove delete".split(" ");
                        e.get_group = function() {
                            function a(c) {
                                b[c] = function() {
                                    call2_args = arguments;
                                    call2 = [c].concat(Array.prototype.slice.call(call2_args, 0));
                                    e.push([d, call2])
                                }
                            }
                            for (var b = {}, d = ["get_group"].concat(Array.prototype.slice.call(arguments, 0)), c = 0; c < f.length; c++) a(f[c]);
                            return b
                        };
                        a._i.push([b, d, g])
                    };
                    a.__SV = 1.2;
                    b = c.createElement("script");
                    b.type = "text/javascript";
                    b.async = !0;
                    b.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === c.location.protocol && "//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";
                    d = c.getElementsByTagName("script")[0];
                    d.parentNode.insertBefore(b, d)
                }
            })(document, window.mixpanel || []);
            mixpanel.init("9ef90ef3fe4d6c8d4541239aae8c4eb2");
                            </script>
                            <script type=text/javascript data-cookie="functional">
                                (function(b, r, a, n, c, h, _, s, d, k) {
                if (!b[n] || !b[n]._q) {
                    for (; s < _.length;) c(h, _[s++]);
                    d = r.createElement(a);
                    d.async = 1;
                    d.src = "https://cdn.branch.io/branch-latest.min.html";
                    k = r.getElementsByTagName(a)[0];
                    k.parentNode.insertBefore(d, k);
                    b[n] = h
                }
            })(window, document, "script", "branch", function(b, r) {
                b[r] = function() {
                    b._q.push([r, arguments])
                }
            }, {
                _q: [],
                _v: 1
            }, "addListener applyCode autoAppIndex banner closeBanner closeJourney creditHistory credits data deepview deepviewCta first getCode init link logout redeem referrals removeListener sendSMS setBranchViewData setIdentity track validateCode trackCommerceEvent logEvent disableTracking".split(" "), 0);
            branch.init('key_live_ccuZyD7tu5svQQjCqDNJcianExpmDkDW', function(err, data) {
                if (err) {
                    console.log(err);
                }
            });
                            </script>




                            <script>
                                setTimeout(function() {
                $('.loader_bg').fadeToggle();
            }, 1500);
                            </script>
                            <script>
                                (function() {
                function c() {
                    var b = a.contentDocument || a.contentWindow.document;
                    if (b) {
                        var d = b.createElement('script');
                        d.innerHTML = "window.__CF$cv$params={r:'94349183f9929f99',t:'MTc0NzgzNTY5NS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                        b.getElementsByTagName('head')[0].appendChild(d)
                    }
                }
                if (document.body) {
                    var a = document.createElement('iframe');
                    a.height = 1;
                    a.width = 1;
                    a.style.position = 'absolute';
                    a.style.top = 0;
                    a.style.left = 0;
                    a.style.border = 'none';
                    a.style.visibility = 'hidden';
                    document.body.appendChild(a);
                    if ('loading' !== document.readyState) c();
                    else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                    else {
                        var e = document.onreadystatechange || function() {};
                        document.onreadystatechange = function(b) {
                            e(b);
                            'loading' !== document.readyState && (document.onreadystatechange = e, c())
                        }
                    }
                }
            })();
                            </script>
                            </body>

                            </html>
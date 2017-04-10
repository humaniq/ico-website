<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-language" content="en-US">

    <title>Humaniq</title>

    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-theme.min.css">

    <link href="/assets/animate.css/animate.min.css" rel="stylesheet"/>

    <link href="/assets/hq.css" rel="stylesheet"/>

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <script src="/assets/js-cookie/src/js.cookie.js"></script>
    <script>
        var beenBefore = Cookies.get('beenBefore');
        var clang = Cookies.get('mylang');
        if (!clang) {
            Cookies.set('beenBefore', "true");
            var navLangStr = navigator.languages ? navigator.languages[0] : (navigator.language || navigator.userLanguage);
            clang = (navLangStr.indexOf('zh') == -1) ? 'en' : 'zh';
        }

        if (clang == 'zh') window.location = "/cn/";


        var domain = window.location.hostname;
        var ga_id = (domain.indexOf('humaniq.co') == -1) ? "UA-96195965-1" : 'UA-91023234-1';
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">(function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter41508869 = new Ya.Metrika({
                        id: 41508869,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true,
                        trackHash: true
                    });
                } catch (e) {
                }
            });
            var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
                n.parentNode.insertBefore(s, n);
            };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");</script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/41508869" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->


    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', ga_id, 'auto');
        ga('send', 'pageview');

    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq)return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '239287609810959'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=239287609810959&ev=PageView&noscript=1"
        /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->


    <!-- Twitter universal website tag code -->
    <script>
        !function (e, t, n, s, u, a) {
            e.twq || (s = e.twq = function () {
                s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
            }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src = '//static.ads-twitter.com/uwt.js',
                a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
        }(window, document, 'script');
        // Insert Twitter Pixel ID and Standard Event data below
        twq('init', 'nwe42');
        twq('track', 'PageView');
    </script>
    <!-- End Twitter universal website tag code -->

</head>
<body id="skrollr-body" class="happened">


<?php
$baseUrl = 'https://my.humaniq.co/';
$hasRoiStat = array_key_exists('roistat_visit', $_COOKIE);
$queryString = ($hasRoiStat) ? "?roistat_visit=" . intval($_COOKIE['roistat_visit']) : "";
$dashboardUrl = $baseUrl . $queryString;
?>

<section id="home-screen" class="home-screen" data-0="opacity:1;" data-500="opacity:0.7;" data-1000="opacity:0;">
    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <div class="circle c3"></div>
    <div class="circle c4"></div>
    <div class="circle c5"></div>
    <div class="container-fluid">
        <div class="row top">
            <div class="col-sm-6">
                <div class="img logo"><img src="/assets/images/logo.png"
                                           alt="Join our mission to connect two billion unbanked people"></div>
            </div>
            <div class="col-sm-6 reserve-wrapper">
                <div class="lang">
                    <div class="item active">English</div>
                    <!--                    <div class="item">Deutsch</div>-->
                    <a href="/cn/" class="item" onclick="Cookies.set('mylang','zh')">繁體中文</a>
                </div>
                <a href="#whitepapers" class="whitepaper-link round yga" data-ga="1"
                   data-ya-target="home-screen-whitepapers">
                    Whitepapers
                </a>


            </div>
        </div>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="main">
                    <!--                    <h1>Join our mission to connect<br>2 billion unbanked people</h1>
                                        <h1>We build simple/secure/mobile/blockchain/AI bank to involve 2 billion unbanked to global economy</h1>-->
                    <h1 class="ss1 active">Humaniq is <b class="rotation-wrapper">
                            <span class="active s1">Blockchain</span>
                            <span class="s2">Neural Net</span>
                            <span class="s3">Biometric ID</span>
                            <span class="s4">Big Data</span>
                        </b>
                    </h1>
                    <div class="offer post post-ico text-center">ICO is live. Current bonus ends in:</div>
                    <div class="countdown text-center">
                        <div class="figures">
                            <div class="days"></div>
                            <div class="units day">day
                                <div class="days-s">s</div>
                            </div>
                        </div>
                        <div class="sep">:</div>
                        <div class="figures">
                            <div class="hours"></div>
                            <div class="units hour">hour
                                <div class="hours-s">s</div>
                            </div>
                        </div>
                        <div class="sep">:</div>
                        <div class="figures">
                            <div class="minutes"></div>
                            <div class="units minute">minute
                                <div class="minutes-s">s</div>
                            </div>
                        </div>
                        <div class="sep">:</div>
                        <div class="figures">
                            <div class="seconds"></div>
                            <div class="units second">second
                                <div class="seconds-s">s</div>
                            </div>
                        </div>
                    </div>
                    <div class="offer pre-ico">Join our mission. Sign up now to get notified about the ICO start.</div>
                    <div class="sub-form" id="sub-form-1" data-ga="1" data-ya-target="SUBMAIL1">
                        <form class="formBody pre-ico" data-toggle="validator" role="form" method="post"
                              action="//humaniq.us15.list-manage.com/subscribe/post?u=32d439954c6b56c5268f0c899&amp;id=29bcb70758"
                              onsubmit="roistat.event.send('notify_me')">
                            <div class="form-group has-feedback">
                                <input type="hidden" name="b_32d439954c6b56c5268f0c899_29bcb70758" tabindex="-1"
                                       value="">
                                <div class="notify">
                                    <input type="email" class="form-control email" name="EMAIL" id="email"
                                           placeholder="your@email.com" required data-error="Email address is invalid"
                                           data-required-error="Email address is required">
                                    <input type="submit" class="btn btn-primary submit" value="Notify Me">
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                        </form>
                        <a href="<?php echo $dashboardUrl ?>" onclick="roistat.event.send('redirect_to_dashboard')"
                           target="_blank" class="btn-post-block">Join the ICO</a>

                    </div>

                    <div class="lower-buttons post text-left">
                        <div class="left" data-toggle="modal" data-target="#ico-modal">
                            <div class="round"><i class="glyphicon glyphicon-play"></i></div><br class="visible-xs">
                            What is an ICO?
                        </div>
                        <div class="center">
                            <div class="bonus-fadein round curr-bonus-figure">25%</div><br class="visible-xs">
                            Current Bonus

                            <div class="bonuses">
                                <h3>Bonuses</h3>
                                <h5>ICO duration: 21 days.</h5>
                                <div class="left">+49.9%</div>
                                <div class="right">2 days</div>
                                <div class="sep"></div>
                                <div class="left">+25%</div>
                                <div class="right">7 days</div>
                                <div class="sep"></div>
                                <div class="left">+12.5%</div>
                                <div class="right">7 days</div>
                                <div class="sep"></div>
                                <div class="left">+0%</div>
                                <div class="right">5 days</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="ends">ICO ends<br><b>27 April 00<span class="blink">:</span>00 CET</b></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section id="whatis" class="whatis">
    <div class="container main">
        <div class="row">
            <div class="col-xs-12">
                <div class="video-img embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/xat68GFQ8Ak?rel=0&amp;controls=0&amp;showinfo=0"
                            frameborder="0" allowfullscreen></iframe>
                </div>

                <!--                <img class="video-img" src="assets/images/whatis-main.jpg">
                                <div class="button" data-toggle="modal" data-target="#video-modal"><i class="fa fa-play"></i></div>-->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Banking 4.0 at your fingertips</h1>
            </div>
        </div>

        <div class="row stats">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4>What is Humaniq?</h4>
                        <div class="text">
                            Humaniq is a simple and secure 4th generation mobile bank. We are developing a completely
                            new banking experience by dissolving all the barriers of archaic banks such as the need to
                            come to a branch, doing endless paperwork, dealing with hard-to-use, buggy mobile apps, and
                            protecting data with hard-to-remember, complex passwords.
                            <p>We have created a safe, strong financial tool, specifically designed to be used by people
                                who are undereducated or who don’t possess identification. Most of them live in emerging
                                economies on less than two dollars a day. We believe we can change that. Learn more
                                about Humaniq…

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-0">
                        <h4>2017 Statistics</h4>
                        <div class="graphs">
                            <div class="g-row">
                                <div class="c">US</div>
                                <div class="p">68%</div>
                                <div class="g">
                                    <div class="bl c85"></div>
                                    <div class="gr c70"></div>
                                </div>
                            </div>

                            <div class="g-row">
                                <div class="c">UK</div>
                                <div class="p">78%</div>
                                <div class="g">
                                    <div class="bl c100"></div>
                                    <br>
                                    <div class="gr c70"></div>
                                </div>
                            </div>

                            <div class="g-row">
                                <div class="c">TH</div>
                                <div class="p">34%</div>
                                <div class="g">
                                    <div class="bl c44"></div><br>
                                    <div class="gr c70"></div>
                                </div>
                            </div>

                            <div class="g-row">
                                <div class="c">AF</div>
                                <div class="p">18%</div>
                                <div class="g">
                                    <div class="bl c25"></div><br>
                                    <div class="gr c70"></div>
                                </div>
                            </div>

                            <div class="g-row text-center2" style="margin-top: 20px">
                                <div class="g gg">
                                    <div class="bl c25"></div>
                                </div>
                                <div class="p">Banks</div>

                                <div class="g gg">
                                    <div class="gr c25"></div>
                                </div>

                                <div class="p">Population</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row circles">
            <div class="col-xs-12 text-center sub-wrapper">
                <div class="item left">
                    <div class="text">2 billion<br>people</div>
                    <div class="text-2"> This staggering sum<br> represents the "unbanked”; people around the world
                        without access to bank accounts. That lack of access is especially a problem for the poor, for
                        women, and for people in rural areas.
                    </div>
                </div>
                <div class="item center">
                    <div class="text">Blockchain<br>+ Bio ID</div>
                    <div class="text-2">Blockchain technologies<br> are revolutionizing our world, but along with the
                        adoption of digital assets come new usability challenges and a need for both identity and
                        security options. Biometric authentication is the key.
                    </div>
                </div>
                <div class="item right">
                    <div class="text">Startup<br>Swarm</div>
                    <div class="text-2">We will open source our protocol to third party developers to creatie new solutions for our end users. That will also create utility for our currency, the HMQ, by providing a token that has true fungible value.
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>


<section id="whitepapers" class="whitepapers">
    <div class="container">
        <div class="row">
            <a target="_blank" href="/assets/downloads/humaniq_wp_english.pdf"
               class="item col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 col-md-offset-0 yga" data-ga="1"
               data-ya-target="whitepapers-whitepaper">
                <div class="img"></div>
                <div class="body">
                    <h4>White Paper</h4>
                    <span>PDF</span> <!--<a href="">Download PDF</a>-->
                </div>
            </a>

            <a target="_blank" href="/assets/downloads/humaniq_wp_chinese.pdf"
               class="item col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 col-md-offset-0 yga" data-ga="1"
               data-ya-target="whitepapers-whitepaper-china">
                <div class="img"></div>
                <div class="body">
                    <h4>Chinese White Paper</h4>
                    <span>PDF</span> <!--<a href="">Download PDF</a>-->
                </div>
            </a>

            <a target="_blank" href="/whitebook/"
               class="item col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 col-md-offset-0 yga" data-ga="1"
               data-ya-target="whitepapers-whitebook">
                <div class="img"></div>
                <div class="body">
                    <h4>White book</h4>
                    <span>Google Docs</span>
                </div>
            </a>
        </div>

        <div class="row">
            <a target="_blank" href="/assets/downloads/humaniq_wp_german.pdf"
               class="item col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 col-md-offset-0 yga" data-ga="1"
               data-ya-target="whitepapers-whitepaper">
                <div class="img"></div>
                <div class="body">
                    <h4>German White Paper</h4>
                    <span>PDF</span>
                </div>
            </a>

            <a target="_blank" href="/assets/downloads/humaniq_wp_spanish.pdf"
               class="item col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 col-md-offset-0 yga" data-ga="1"
               data-ya-target="whitepapers-whitepaper-china">
                <div class="img"></div>
                <div class="body">
                    <h4>Spanish White Paper</h4>
                    <span>PDF</span> <!--<a href="">Download PDF</a>-->
                </div>
            </a>

            <a target="_blank" href="/assets/downloads/humaniq_wp_french.pdf"
               class="item col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 col-md-offset-0 yga" data-ga="1"
               data-ya-target="whitepapers-whitebook">
                <div class="img"></div>
                <div class="body">
                    <h4>French White Paper</h4>
                    <span>PDF</span>
                </div>
            </a>
        </div>

    </div>
</section>

<section id="sbs" class="sbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Join our mission</h1>
                <div class="items">
                    <a target="_blank" href="http://facebook.humaniq.co" data-ya-target="sb1-facebook" class="yga"><i
                            class="fb"></i>Facebook</a>
                    <a target="_blank" href="http://twitter.humaniq.co" data-ya-target="sb1-twitter" class="yga"><i
                            class="tw"></i>Twitter</a>
                    <a target="_blank" href="http://github.humaniq.co" data-ya-target="sb1-github" class="yga"><i
                            class="gh"></i>GitHub</a>
                    <a target="_blank" href="http://slack.humaniq.co" data-ya-target="sb1-slack" class="yga"><i
                            class="sl"></i>Slack</a>
                    <a target="_blank" href="https://blog.humaniq.co" data-ya-target="sb1-medium" class="yga"><i
                            class="md"></i>Medium</a>
                    <a target="_blank" href="https://bitcointalk.org/index.php?topic=1711764.0"
                       data-ya-target="sb1-bitcointalk" class="yga"><i class="bt"></i>Bitcointalk</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="press" class="partners press">
    <div class="container">
        <div class="row head">
            <div class="col-sm-12">
                <h1>As Seen In</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="list row">


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-1.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="https://cointelegraph.com/news/ethereum-based-humaniq-to-deliver-banking-40-to-2-bln-unbanked">Ethereum-Based
                            Humaniq To Deliver Banking 4.0 to 2 Bln Unbanked</a>
                        <a href="https://cointelegraph.com" class="yga" target="_blank" data-ya-target="press-gemsww">cointelegraph.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-2.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="https://themerkle.com/humaniq-aims-to-connect-millions-of-unbanked/">Humaniq Aims To
                            Connect Millions of Unbanked Using The Ethereum Blockchain</a>
                        <a href="https://themerkle.com" class="yga" target="_blank" data-ya-target="press-gemsww">themerkle.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-3.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="http://www.financemagnates.com/cryptocurrency/innovation/blockchain-banking-app-humaniq-set-initial-coin-offering-april/">Blockchain
                            Banking App Humaniq Set for Initial Coin Offering in April</a>
                        <a href="http://www.financemagnates.com" class="yga" target="_blank"
                           data-ya-target="press-gemsww">www.financemagnates.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-4.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="http://thedashtimes.com/2017/03/04/humaniqs-cryptopension-pancea-africas-pension-worries/">Humaniq’s
                            CryptoPension a Pancea to Africa’s Pension Worries</a>
                        <a href="http://thedashtimes.com/" class="yga" target="_blank" data-ya-target="press-gemsww">thedashtimes.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-5.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="https://www.smithandcrown.com/humaniq-banking-platform-undocumented-unbanked/">Humaniq:
                            crypto-finance for the undocumented and unbanked</a>
                        <a href="https://www.smithandcrown.com/" class="yga" target="_blank"
                           data-ya-target="press-gemsww">smithandcrown.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-6.png">
                        </div>
                        <a class="h4" target="_blank" href="http://icorating.com/project/30/Humaniq">A next generation
                            financial service for unbanked people based on Blockchain</a>
                        <a href="http://icorating.com/" class="yga" target="_blank" data-ya-target="press-gemsww">icorating.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-7.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="http://www.nasdaq.com/article/humaniq-aims-to-tackle-barriers-to-economic-inclusion-with-blockchain-app-cm764760#ixzz4d7aPqGvD">Humaniq
                            Aims to Tackle Barriers to Economic Inclusion With Blockchain App</a>
                        <a href="http://www.nasdaq.com/" class="yga" target="_blank" data-ya-target="press-gemsww">www.nasdaq.com</a>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>




<section id="rev" class="rev">
    <div class="container">
        <div class="row slogan">
            <div class="col-xs-12 text-center">
                <h1>Unrivaled Potential</h1>
                <h2>Get involved and service 2 billion new people as they enter the global economy.</h2>
            </div>
        </div>
        <div class="row slogan">
            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                <div class="jumbo">1.5</div>
                <div class="text">1.5 billion people possess<br>no identification documents</div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                <div class="jumbo">2.5</div>
                <div class="text">Over 2 billion<br>people unbanked</div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                <div class="jumbo">4.2</div>
                <div class="text">Potential for $4.2 trillion<br>in new deposits</div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 faces">
                <div class="map-marker mm-1"></div>
                <div class="map-marker mm-2"></div>
                <div class="map-marker mm-3"></div>
                <div class="map-marker mm-4"></div>
                <div class="map-marker mm-5"></div>
                <div class="map-marker mm-6"></div>
                <div class="map-marker mm-7"></div>
                <div class="map-marker mm-8"></div>
                <div class="map-marker mm-9"></div>
                <div class="map-marker mm-10"></div>
                <div class="map-marker mm-11"></div>
            </div>
        </div>

    </div>
</section>

<section id="revs" class="revs">
    <div class="container">
        <div class="row list">
            <div class="col-xs-12 col-sm-6 text-center">
                <h1>Revolution<br class="hidden-xs"> for Users</h1>
                <div class="text">We are using biometrics to replace passports and signatures, and an ICO and
                    distributed digital assets via our cryptocurrency instead of shareholders. Users will have a simple
                    UX and UI to tap into the mobile application and will also have access to the global library we call
                    the Internet. They can work, borrow, lend, save and pay and it will all be protected by their
                    biometric ID which no one can take from them.
                </div>

                <div class="visible-xs scheme container-fluid">
                    <div class="row">
                        <div class="col-xs-12 head">Before</div>

                        <div class="col-xs-4 text-center item">
                            <div class="dot pass"></div>
                            <p>Email<br>and password
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot id"></div>
                            <p>Paper Passport<br>&nbsp;
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot bank"></div>
                            <p>Bank Branch<br>&nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center sep-hor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 head">After</div>

                        <div class="col-xs-4 text-center item">
                            <div class="dot face"></div>
                            <p>Face login
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot voice"></div>
                            <p>Voice Captcha
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot phone"></div>
                            <p>Mobile App
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 text-center">
                <h1>Revolution<br class="hidden-xs"> for Partners</h1>
                <div class="text">Our open source stack and APIs will be available for startups and other businesses to
                    build services on our core technologies to stimulate the ecosystem and circular economy even
                    further. The Ethereum Blockchain APIS ad makes it easy for any business to easily adapt their
                    service and plug it into Humaniq’s network to reach a huge, untapped audience. We will also be
                    starting a fund to help grow and accelerate some of our young startup partners. So… seize this
                    opportunity to show the world what you can do for it!
                </div>

                <div class="visible-xs scheme container-fluid">
                    <div class="row">
                        <div class="col-xs-12 head">Before</div>
                        <div class="col-xs-3 text-center item">
                            <div class="dot startup"></div>
                            <p>Fintech Startup
                        </div>

                        <div class="col-xs-1 text-center sep-vert"><img src="assets/images/arrow-right-2.svg"></div>

                        <div class="col-xs-3 text-center item">
                            <div class="dot competitor"></div>
                            <p>Competitors<br>and payment systems
                        </div>

                        <div class="col-xs-1 text-center sep-vert"><img src="assets/images/arrow-right-2.svg"></div>

                        <div class="col-xs-3 text-center item">
                            <div class="dot customer"></div>
                            <p>Customer
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center sep-hor"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 head">After</div>
                        <div class="col-xs-3 text-center item">
                            <div class="dot startup"></div>
                            <p>Fintech Startup
                        </div>
                        <div class="col-xs-5 text-center sep-vert-l"><img src="assets/images/arrow-right-l.svg">
                            <img src="assets/images/logo-blue.png" style="width: 70%; margin: 0"></div>
                        <div class="col-xs-3 text-center item">
                            <div class="dot customer"></div>
                            <p>Customer
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <div class="row list last">
            <div class="hidden-xs col-xs-12 col-sm-6 text-center">

                <div class="scheme container-fluid">
                    <div class="row">
                        <div class="col-xs-12 head">Before</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 text-center item">
                            <div class="dot pass"></div>
                            <p>Email<br>and password
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot id"></div>
                            <p>Paper Passport<br>&nbsp;
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot bank"></div>
                            <p>Bank Branch<br>&nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center sep-hor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 head">After</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 text-center item">
                            <div class="dot face"></div>
                            <p>Face login
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot voice"></div>
                            <p>Voice Captcha
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot phone"></div>
                            <p>Mobile App
                        </div>
                    </div>
                </div>

            </div>
            <div class="hidden-xs col-xs-12 col-sm-6 text-center">
                <div class="scheme container-fluid">
                    <div class="row">
                        <div class="col-xs-12 head">Before</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 text-center item">
                            <div class="dot startup"></div>
                            <p>Fintech Startup
                        </div>

                        <div class="col-xs-1 text-center sep-vert"><img src="assets/images/arrow-right-2.svg"></div>

                        <div class="col-xs-3 text-center item">
                            <div class="dot competitor"></div>
                            <p>Competitors<br>and payment systems
                        </div>

                        <div class="col-xs-1 text-center sep-vert"><img src="assets/images/arrow-right-2.svg"></div>

                        <div class="col-xs-3 text-center item">
                            <div class="dot customer"></div>
                            <p>Customer
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center sep-hor"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 head">After</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 text-center item">
                            <div class="dot startup"></div>
                            <p>Fintech Startup
                        </div>
                        <div class="col-xs-5 text-center sep-vert-l"><img src="assets/images/arrow-right-l.svg">
                            <img src="assets/images/logo-blue.png" style="width: 70%; margin: 0"></div>

                        <div class="col-xs-3 text-center item">
                            <div class="dot customer"></div>
                            <p>Customers
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row list2">
            <div class="col-xs-12 col-sm-4 text-center">
                <h4>Facebook</h4>
                <h1>1.5 billion clients</h1>
                <div class="text">$400 billion</div>
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <h4>Apple</h4>
                <h1>800 million clients</h1>
                <div class="text">$600 billion</div>
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <h4>Humaniq</h4>
                <h1 class="jumbo">?</h1>
            </div>
        </div>


    </div>
</section>


<section id="chart" class="chart">
    <div class="container">
        <div class="row list">
            <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-0">
                <h1>We have created Humaniq to implement two big ideas: to open access to modern financial services for
                    2 billion unbanked people, and to allow vetted partners to participate in building ‘win-win’
                    products and services for the Humaniq community that can provide revenue and services for all the
                    stakeholders.</h1>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-0">
                <img src="/assets/images/chart.svg">
                <div class="text smaller">According to Metcalfe’s law, the value of a network is proportional to the
                    square of the number of connected users.
                </div>
                <div class="text">
                    Humaniq is about ‘Profit with a Purpose’, also known as humanitarian capitalism.
                    We create win-wins for all stakeholders in the spectrum. This is an opportunity
                    not only to improve the quality of life in emerging economies for some of the world’s poorest people,
                    but it’s also an opportunity for entrepreneurs who want to build -non or profitable services such as
                    a direct donation platform, or perhaps a P2P lending addon that might help you achieve not only a ROI
                    on your investment, but also help empower and improve the lives of others who have never had opportunities
                    with traditional financial services before and who currently pay exorbitant interest rates of between
                    35 and 80 percent to loan sharks as traditional banks won’t help them. You’ll feel good about your investment
                    knowing that both parties are profiting from the exchange.
                </div>
            </div>
        </div>
    </div>
</section>


<section id="video-2" class="video-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="video-img embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/PY_efnojVcE?rel=0&amp;controls=0&amp;showinfo=0"
                            frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="howitworks" class="howitworks">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1>How it works?</h1>
                <h2>We are delivering financial independence to humanity using mobile, blockchain and AI technologies.
                    You only need a simple smartphone and access to internet. Just install the app and smile :)
                    <br class="hidden-xs"></h2>
            </div>
        </div>

        <div class="row list">
            <div class="column col-sm-3">
                <h3>Facial ID</h3>
                <div class="text">The simplest option which is available for any phone with a front-facing camera.</div>

                <h3>Voice ID</h3>
                <div class="text">More sophisticated version of CAPTCHA.<br>&nbsp;</div>

                <h3>Device ID</h3>
                <div class="text">Matches an account to a physical device. Excellent secondary verification.</div>

            </div>
            <div class="col-sm-1 hidden-xs sep">
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
            </div>
            <div class="item col-sm-4 text-center">
                <div class="screen-gallery-wrapper">
                    <div id="screen-gallery" class="screen-gallery">
                        <img class="bkg" src="/assets/images/screens/0.png">
                        <img class="item active i1" src="/assets/images/screens/1.png">
                        <img class="item i2" src="/assets/images/screens/2.png">
                        <img class="item i3" src="/assets/images/screens/3.png">
                        <img class="item i4" src="/assets/images/screens/4.png">
                        <img class="item i5" src="/assets/images/screens/5.png">
                        <img class="item i6" src="/assets/images/screens/6.png">
                    </div>
                </div>
            </div>
            <div class="col-sm-1 hidden-xs sep">
                <div class="el"></div>
                <div class="el"></div>
                <div class="el"></div>
            </div>
            <div class="column col-sm-3">
                <h3>Loans</h3>
                <div class="text">You decide what currency and amount to give and on what terms.</div>

                <h3>Insurance</h3>
                <div class="text">Insure and get insurance. Instant on your phone.</div>

                <h3>Work</h3>
                <div class="text">Hire freelancers or find work without middlemen and fees.</div>
            </div>

            <div class="col-xs-12 text-center">
                <div class="badge"><a href="https://play.google.com/store/apps/details?id=co.humaniq" target="_blank">
                        <img src="/assets/images/google-play-badge-2.png"> </a></div>
                <div class="badge"><a href="https://itunes.apple.com/us/app/humaniq/id1212362871?l=ru&ls=1&mt=8"
                                      target="_blank"><img src="/assets/images/app-store-badge.svg"></a></div>
                <br>
                <div class="trademarks" style="display:inline-block; margin-top: 4rem;text-align: left">
                    - Google Play and the Google Play logo are trademarks of Google Inc.<br>
                    - App Store is a service mark
                    of Apple Inc., registered in the U.S. and other countries.<br>
                    - The application is currently in Beta and can be used for information purpose only.
                </div>
            </div>
        </div>
    </div>
</section>


<section class="inline-form">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center post-ico">
                <h1>The World is changing rapidly. <br class="hidden-xs">Be a step ahead.</h1>
                <a href="<?php echo $dashboardUrl ?>" onclick="roistat.event.send('redirect_to_dashboard')"
                   target="_blank" class="btn-post-onethird">Join the ICO</a>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-0 pre-ico">
                <h1>The World is <br class="hidden-xs">changing rapidly. <br class="hidden-xs">Be a step ahead.</h1>
            </div>
            <div class="col-xs-12 col-sm-6 sub-form pre-ico" id="sub-form-2" data-ga="1" data-ya-target="SUBMAIL2">
                <div class="text">Don’t miss bonuses for early birds</div>
                <form class="formBody" data-toggle="validator" role="form" method="post"
                      action="//humaniq.us15.list-manage.com/subscribe/post?u=32d439954c6b56c5268f0c899&amp;id=29bcb70758"
                      onsubmit="roistat.event.send('request_demo')">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="b_32d439954c6b56c5268f0c899_29bcb70758" tabindex="-1" value="">
                        <div class="notify">
                            <input type="email" class="form-control email" name="EMAIL" id="email3"
                                   placeholder="your@email.com" required data-error="Email address is invalid"
                                   data-required-error="Email address is required">
                            <input type="submit" class="btn btn-primary submit" value="Request Demo">
                        </div>
                        <div class="help-block with-errors"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</section>


<section id="board" class="supporters">
    <div class="container">
        <div class="row head">
            <div class="col-sm-12">
                <h1>Board and Senior Management team</h1>
            </div>
        </div>

        <div class="backdrop"></div>

        <div class="row list">


            <div class="item e col-xs-6 col-sm-4 col-md-3" data-pp="5">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/Dinis_Guarda.png">
                </div>
                <!--                <h5>UK</h5>-->
                <h4>Dinis Guarda</h4>
                CEO and Chief Strategy Officer, Board of Directors
            </div>

            <div id="pp-5" class="popup">
                <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                <img src="/assets/images/avatars/Dinis_Guarda.png">
                <h4>Dinis Guarda</h4>
                <div class="text">
                    Founder of ZTUDIUM, that he created and manages intelligenthq.com, openbusinesscouncil.org,
                    tradersdna.com and hedgethink.com. He is the author of the following books: The Next Tsunami:
                    Blockchain plus AI and IOT, Intelligenthq Editions, Amazon, 2017. How To Map Who You are, Amazon,
                    2016. He is also co-founder of the project BlockchainAge. Since December 2016 is leading the digital
                    strategy and marketing for the financial empowerment app and platform invstr.com Between 2014 and
                    2015 he was involved in creating a digital bank between Asia and Africa. With a Master in New Media,
                    Dinis has been ranked in the top 10 and top 100 most influential person in fintech, blockchain,
                    social media, social enterprise and philanthropy. He was the founder of tradingfloor.com for Saxo
                    Bank, socialmediacouncil.org with Jamie Burke.

                </div>
            </div>




            <div class="item e col-xs-6 col-sm-4 col-md-3" data-pp="1">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/1.png">
                </div>
                <!--<h5>Luxembourg</h5>-->
                <h4>Alex Fork</h4>
                Founder, Board of Directors
            </div>

            <div id="pp-1" class="popup">
                <div class="close"><i class="glyphicon glyphicon-remove"></i></div>
                <img src="/assets/images/avatars/1.png">
                <h4>Alex Fork</h4>
                <div class="text">
                    Alex Fork is the Founder of the Humaniq project, a Banking 4.0 project designed to help lift the
                    unbanked out of poverty in emerging economies. Alex is a member of the board at
                    Blockchain.community, author of the book “Bitcoin. More than money” and the founder of the Future
                    Fintech accelerator. Fork organised an Ethereum conference with Vlad Martynov (Ethereum advisory
                    board) and Vitalik Buterin (Ethereum founder), which was attended by over 500 banking professionals.
                </div>
            </div>


            <div class="item e col-xs-6 col-sm-4 col-md-3" data-pp="6">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/Dmitry_Kaminsky.png">
                </div>
                <!--<h5>UK</h5>-->
                <h4>Dmitry Kaminskiy</h4>
                Executive Chairman and co-Founder, Board of Directors
            </div>

            <div id="pp-6" class="popup">
                <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                <img src="/assets/images/avatars/Dmitry_Kaminsky.png">
                <h4>Dmitry Kaminskiy</h4>
                <div class="text">
                    The managing partner of Deep Knowledge Ventures (DKV), a Hong Kong-based fund that invests in
                    disruptive biotechnology, fintech, and artificial intelligence companies. Mr.Kaminskiy is a trustee
                    of the Biogerontology Research Foundation in Oxford and holds a BSc in computer science from the
                    National University of Electronic Technology. Prior to Deep Knowledge Ventures, he served as an
                    executive in the telecom and financial services industries. Dmitry is interested in the potential
                    for social benefit offered by blockchain technology. Dmitry also directly supports scientists,
                    conferences, hackathons, and think-tanks at Oxford and Cambridge, such as the Exponential
                    Technologies Institute and Biogerontology Research Foundation (BGRF).
                </div>
            </div>


        </div>
    </div>

</section>


<section id="advisoryboard" class="supporters supporters2">
    <div class="container">
        <div class="row head">
            <div class="col-sm-12">
                <h1>Advisory Board</h1>
            </div>
        </div>

        <div class="row list">

            <!--            <div class="item col-xs-6 col-sm-4 col-md-3">
                            <img src="/assets/images/avatars/Paolo_Tasca.jpeg">
                            <h5></h5>
                            <h4>Paolo Tasca</h4>
                            Technology Advisor / P2P economy, technology and Blockchain

                        </div>
            -->
            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/David_Applefield.png">
                <h5></h5>
                <h4>David Applefield</h4>
                Public Affairs and Global Policy advisor / Communications and PR Advisor
            </div>

            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Hoods.png">
                <h5></h5>
                <h4>Karl Hoods</h4>
                Policy and Legal Advisor / Save Children UK
            </div>
            <!--
                        <div class="item col-xs-6 col-sm-4 col-md-3">
                            <img src="/assets/images/avatars/Iggy_Bassi.jpg">
                            <h5></h5>
                            <h4>Iggy Bassi </h4>
                            Policy and Legal advisor/ Social Impact and AI, data expert
                        </div>

            -->
            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Ron_Morris.png">
                <h5></h5>
                <h4>Ron Morris</h4>
                Scientific Advisor / Education / Universities Advisor
            </div>

            <!--
                        <div class="item col-xs-6 col-sm-4 col-md-3">
                            <img src="/assets/images/avatars/Paul_Mears.jpg">
                            <h5></h5>
                            <h4>Paul Mears</h4>
                            Policy and Legal advisor / Financial and risk management advisor
                        </div>


                        <div class="item col-xs-6 col-sm-4 col-md-3">
                            <img src="/assets/images/avatars/0.png">
                            <h5></h5>
                            <h4>Vishai Mishra</h4>
                            Technology advisor/ Big data and security
                        </div>

            -->
            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Pavel_Kravchenko.png">
                <h5></h5>
                <h4>Pavel Kravchenko</h4>
                Technology Advisor/ BlockChain technology advisor
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Matt_McKibbin.png">
                <h5></h5>
                <h4>Matt McKibbin</h4>
                Technology Advisor/ Blockchain, crypto economy
            </div>

            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Matthias_Klees.png">
                <h5></h5>
                <h4>Matthias Klees</h4>
                Technology Advisor/ ‎Founder, Bitcoinsulting, Staisybit, Szenekonzept
            </div>

            <!--
<div class="item col-xs-6 col-sm-4 col-md-3">
    <img src="/assets/images/avatars/Alex_Bausch.jpg">
    <h5></h5>
    <h4>Alex Bausch</h4>
    Technology Advisor/ Co-Chairman of the Blockchain Ecosystem Network
</div>
-->

            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Michael_Terpin.png">
                <h5></h5>
                <h4>Michael Terpin</h4>
                Technology Advisor / TransformPR group
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Chami.png">
                <h5></h5>
                <h4>Chami Akmeemana</h4>
                Scientific Advisor/ Director regulatory solutions, ConsenSys
            </div>

        </div>
    </div>

</section>


<section id="team" class="supporters">
    <div class="container">
        <div class="row head">
            <div class="col-sm-12">
                <h1>Team</h1>
                <h2>Join our <a target="_blank" href="http://slack.humaniq.co" data-ya-target="team-slack"
                                class="yga team-h1-link">Slack</a> to communicate <br class="hidden-xs">with our team
                </h2>
            </div>
        </div>

        <div class="row list">

            <div class="item e col-xs-6 col-sm-4 col-md-3" data-pp="3">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/2.png">
                </div>
                <!--             <h5>Netherlands</h5>-->
                <h4>Richard Kastelein</h4>
                CMO
            </div>

            <div id="pp-3" class="popup">
                <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                <img src="/assets/images/avatars/2.png">
                <h4>Richard Kastelein</h4>
                <div class="text">
                    Regarded as a major publisher and voice for Blockchain among the Blockchain community, Canadian
                    entrepreneur Richard Kastelein is the publisher of Blockchain News, director at Blockchain Partners,
                    founder of the London Cryptofinancing Conference and sits on the steering committee of the
                    Blockchain Ecosystem Network. He works primarily as a startup advisor, publisher, marketing expert,
                    event designer and speaker. He's currently the Interim Chief Marketing Officer for Humaniq.
                </div>
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Jochen_Heussner.png">
                <!--                <h5></h5>-->
                <h4>Jochen Heussner</h4>
                Chief Financial Officer
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Al_Perkins.png">
                <!--                <h5></h5>-->
                <h4>Alexander Perkins</h4>
                Chief Legal Officer
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Khata.png">
                <!--                <h5></h5>-->
                <h4>Yevgeniy Khata</h4>
                Business Development Officer/ investment relations
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/George_Al_Madawar.png">
                <!--                <h5></h5>-->
                <h4>Georges Al Medawar</h4>
                Business Development Officer / investment relations
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Shane_McQuillan.png">
                <h4>Shane McQuillan</h4>
                Chief Digital Officer
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Subhendu_Das.png">
                <!--                <h5></h5>-->
                <h4>Subhendu Das</h4>
                Chief Technical Officer
            </div>



            <!--
                        <div class="item col-xs-6 col-sm-4 col-md-3">
                            <img src="/assets/images/avatars/0.png">
                            <h4>Serafima Semkina</h4>
                            Chief Administrative Officer
                        </div>



                        <div class="item col-xs-6 col-sm-4 col-md-3">
                            <img src="/assets/images/avatars/0.png">
                            <h4>Mary Sam</h4>
                            Project Manager
                        </div>

            -->



            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Dickson.png">
                <!--                <h5>Nigeria</h5>-->
                <h4>Dickson Nsofor</h4>

            </div>


            <div class="item e col-xs-6 col-sm-4 col-md-3" data-pp="2">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/3.png">
                </div>
                <!--<h5>Botswana</h5>-->
                <h4>Alakanani Itireleng</h4>
                Lead Ambassador
            </div>

            <div id="pp-2" class="popup">
                <div class="close"><i class="glyphicon glyphicon-remove"></i></div>
                <img src="/assets/images/avatars/3.png">
                <h4>Alakanani Itireleng</h4>
                <div class="text">
                    Alakanani Itireleng runs SatoshiCentre, a blockchain hub in Gaborone where she works with developers
                    and will be launching a developer program for children. Her journey with bitcoin started near the
                    end of 2012 and she’s been educating people about bitcoin ever since. Alakanani is also an
                    international bitcoin influencer, having spoken at conferences in Amsterdam, South Africa, and Cote
                    D'ivore, as was a virtual speaker at a Ghanaian conference. Alakanani organised the first blockchain
                    summit in Gaborone last year, which was graced by people from all over the world. With her team she
                    is piloting two blockchain apps in Gaborone.
                </div>
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Dwight_Spoull.png">
                <!--                <h5>Nigeria</h5>-->
                <h4>Dwight Spoull</h4>
                Content and Communications Manager
            </div>


        </div>
    </div>

</section>


<section id="technical-core" class="partners technical-core">
    <div class="container">
        <div class="row head">
            <div class="col-sm-12">
                <h1>The Technical core</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="list row">
                    <div class="item col-xs-12 col-sm-4 col-md-3" data-pp="11">
                        <div href="http://etherionlab.com/" class="yga wrapper" data-ya-target="partners-Etherion">
                            <div class="zoom"><i class="fa fa-search"></i></div>
                            <img src="/assets/images/partners/icon-partner-4.jpg">
                        </div>
                        <h4>Etherion Lab</h4>
                        <b>Smart-contracts Development</b><br>
                        <a href="http://etherionlab.com/" target="_blank" class="yga"
                           data-ya-target="partners-Etherion">http://etherionlab.com/</a>
                    </div>


                    <div id="pp-11" class="popup">
                        <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                        <img src="/assets/images/partners/icon-partner-4.jpg">
                        <h4>Etherion Lab</h4>
                        <div class="text">
                            <b>Smart-contracts Development</b><br>
                            Pioneers of the market of decentralized applications.
                            Company has started to develop Dapps since 2014. In March of 2015 they have made first
                            success story for their client. Starting from there Etherion lab are providing consulting
                            and development services for clients around the world.
                            <br><a href="http://etherionlab.com/" target="_blank" class="yga"
                                   data-ya-target="partners-Etherion">http://etherionlab.com/</a>
                        </div>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-3" data-pp="12">
                        <div class="wrapper">
                            <div class="zoom"><i class="fa fa-search"></i></div>
                            <img src="/assets/images/partners/icon-partner-8.jpg">
                        </div>
                        <h4>VisionLabs</h4>
                        <b>Bio Identification Development</b><br>
                        <a href="http://www.visionlabs.ru" target="_blank" class="yga"
                           data-ya-target="partners-visionlabs">http://www.visionlabs.ru</a>
                    </div>


                    <div id="pp-12" class="popup">
                        <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                        <img src="/assets/images/partners/icon-partner-8.jpg">
                        <h4>VisionLabs</h4>
                        <div class="text">
                            <b>Bio Identification Development</b><br>
                            VisionLabs is a world-leading visual recognition company. Company develops software and
                            solutions for finance, retail, video surveillance and security sectors.
                            VisionLabs was founded in 2012 and nowadays is a success in projects with big corporations
                            and governmental institutions worldwide.
                            <br><a href="http://www.visionlabs.ru" target="_blank" class="yga"
                                   data-ya-target="partners-visionlabs">http://www.visionlabs.ru</a>
                        </div>
                    </div>


                    <!--
                                        <div class="item col-xs-12 col-sm-4 col-md-3" data-pp="13">
                                            <div class="wrapper">
                                                <div class="zoom"><i class="fa fa-search"></i></div>
                                                <img src="/assets/images/partners/icon-partner-9.jpg">
                                            </div>
                                            <h4>The Invaders</h4>
                                            <b>Mobile and Backend Development</b><br>
                                            <a href="http://theinvaders.ru/" target="_blank" class="yga" data-ya-target="partners-Invaders">http://theinvaders.ru/</a>
                                        </div>

                                        <div id="pp-13" class="popup">
                                            <div class="close"  data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                                            <img src="/assets/images/partners/icon-partner-9.jpg">
                                            <h4>The Invaders</h4>
                                            <div class="text">
                                                <b>Mobile and Backend Development</b><br>
                                                The Invaders is widely known in Russia web and mobile development company. Company has started their story since 2011. Became winner of Microsoft competition between IT-projects, winner of Skolkovo Startup tour and many other.
                                                <br><a href="http://theinvaders.ru/" target="_blank" class="yga" data-ya-target="partners-Invaders">http://theinvaders.ru/</a>
                                            </div>
                                        </div>
                    -->

                    <div class="item col-xs-12 col-sm-4 col-md-3" data-pp="14">
                        <div class="wrapper">
                            <div class="zoom"><i class="fa fa-search"></i></div>
                            <img src="/assets/images/partners/icon-partner-10.jpg">
                        </div>
                        <h4>Distributed Lab</h4>
                        <b>Backend Advisors</b>
                        <a href="https://distributedlab.com/" target="_blank" class="yga"
                           data-ya-target="partners-Distributed-Lab">https://distributedlab.com/</a>
                    </div>

                    <div id="pp-14" class="popup">
                        <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                        <img src="/assets/images/partners/icon-partner-10.jpg">
                        <h4>Distributed Lab</h4>
                        <div class="text">
                            <b>Backend Advisors</b><br>
                            Distributed Lab is a crypto & decentralized technology expertise center. Founded in 2014,
                            the team consists of 30 experts — researchers, developers, analysts. Main activities are
                            custom blockchain development, creation of innovative products and architectures, education
                            and conferences. The goal of Distributed Lab is to create financial web that uses open,
                            uniform protocol that facilitates trade and value transfer.

                            <br><a href="https://distributedlab.com/" target="_blank" class="yga"
                                   data-ya-target="partners-Distributed-Lab">https://distributedlab.com/</a>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>


<section id="advisors" class="supporters supporters2">
    <div class="container">
        <div class="row head">
            <div class="col-sm-12">
                <h1>Ambassadors</h1>
            </div>
        </div>

        <div class="row list">

            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/5.png">
                <h5>Zimbabwe</h5>
                <h4>Tawanda<br>Kembo</h4>
                BitFinance
                <p><a href="https://www.facebook.com/tkembo" target="_blank">facebook.com / tkembo</a>
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/6.png">
                <h5>Sierra Leone</h5>
                <h4>Chernoh Saeed Sow</h4>
                Bitcoin Network-SLBNet
                <p><a href="https://www.facebook.com/cheroslbnet" target="_blank">facebook.com / cheroslbnet</a>
            </div>

            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/7.png">
                <h5>Ghana</h5>
                <h4>Philip Agyei Asare</h4>
                Dream Bitcoin Foundation
                <p><a href="https://www.facebook.com/pkagyei" target="_blank">facebook.com / pkagyei</a>
            </div>

            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/8.png">
                <h5>Lesotho</h5>
                <h4>Itumeleng Isaac Lejone</h4>
                Bitcoin Community
                <p><a href="https://www.facebook.com/itumelengisaac.lejone" target="_blank">facebook.com / itumelengisaac.lejone</a>
            </div>

            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/9.png">
                <h5>South Africa</h5>
                <h4>Mogopodi<br>Phiri</h4>
                Africrypto
                <p><a href="https://www.facebook.com/mogopodi.phiri.1" target="_blank">facebook.com / mogopodi.phiri.1</a>

            </div>


            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/4.png">
                <h5>Australia</h5>
                <h4>Ross Lloyd</h4>
                Past veteran of many Australian Government Ministerial briefings, annual reports, speeches.
            </div>

            <div class="item col-xs-6 col-sm-4 col-md-2" data-pp="4">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/10.png">
                </div>
                <h5>India</h5>
                <h4>Parth Bhatt<br>Upendra Kumar</h4>
                Indian Partner
            </div>

            <div id="pp-4" class="popup">
                <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                <img src="/assets/images/avatars/10.png">
                <h4>Parth Bhatt Upendra Kumar</h4>
                <div class="text">
                    Parth Bhatt is from India. He is an ideological partner of the Humaniq project. Alex Fork
                    together with Parth Bhatt Upendra Kumar arranged a business game to receive reaction from
                    disadvantaged people from India on how they might react to Humaniq. Thanks to acquired feedback
                    Humaniq becomes better.
                    <br><a href="https://www.facebook.com/parth.bhatt" target="_blank">https://www.facebook.com/parth.bhatt</a>
                </div>
            </div>

            <!--
                        <div class="item col-xs-6 col-sm-4 col-md-2">
                            <img src="/assets/images/avatars/0.png">
                            <h5>Botswana</h5>
                            <h4>Koketso Pelo</h4>

                        </div>

                        <div class="item col-xs-6 col-sm-4 col-md-2">
                            <img src="/assets/images/avatars/0.png">
                            <h5>Guinea Conakry</h5>
                            <h4>Thierno Madiou Bah</h4>

                        </div>

                        <div class="item col-xs-6 col-sm-4 col-md-2">
                            <img src="/assets/images/avatars/0.png">
                            <h5>Ghana</h5>
                            <h4>David Lawson</h4>

                        </div>

                        <div class="item col-xs-6 col-sm-4 col-md-2">
                            <img src="/assets/images/avatars/0.png">
                            <h5>Uganda</h5>
                            <h4>Ronald Nsubango</h4>

                        </div>
                        -->

            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/Adewele_Bankole.png">
                <h5>Nigeria</h5>
                <h4>Adewale<br>Bankolo</h4>
                <p><a href="https://www.facebook.com/adewale.bankole" target="_blank">facebook.com / adewale.bankole</a>
            </div>


            <!--
                        <div class="item col-xs-6 col-sm-4 col-md-2">
                            <img src="/assets/images/avatars/0.png">
                            <h5>Nigeria</h5>
                            <h4>Oladimeji Shekoni</h4>

                        </div>

                        <div class="item col-xs-6 col-sm-4 col-md-2">
                            <img src="/assets/images/avatars/0.png">
                            <h5>Nigeria</h5>
                            <h4>Olabayode Okubanjo</h4>

                        </div>
-->


            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/Mohammed_Ibrahim.png">
                <h5>Nigeria</h5>
                <h4>Muhammed<br>bukar Ibrahim</h4>
                <p><a href="https://www.facebook.com/mohammedbukar.ibrahim" target="_blank">facebook.com / mohammedbukar.ibrahim</a>
            </div>


            <!--
                                    <div class="item col-xs-6 col-sm-4 col-md-2">
                                        <img src="/assets/images/avatars/0.png">
                                        <h5>Nigeria</h5>
                                        <h4>Babarendi Kayonde</h4>

                                    </div>

                                    <div class="item col-xs-6 col-sm-4 col-md-2">
                                        <img src="/assets/images/avatars/0.png">
                                        <h5>Tunisia</h5>
                                        <h4>Mohamed Safouan Besrour</h4>

                                    </div>

                                    <div class="item col-xs-6 col-sm-4 col-md-2">
                                        <img src="/assets/images/avatars/0.png">
                                        <h5>Malasyia</h5>
                                        <h4>Tenku Azman</h4>

                                    </div>

                                    <div class="item col-xs-6 col-sm-4 col-md-2">
                                        <img src="/assets/images/avatars/0.png">
                                        <h5>Tanzania</h5>
                                        <h4>Peter Samson</h4>

                                    </div>

                                    <div class="item col-xs-6 col-sm-4 col-md-2">
                                        <img src="/assets/images/avatars/0.png">
                                        <h5>Ethiopia</h5>
                                        <h4>Binian Yayehyirad</h4>

                                    </div>

                                    <div class="item col-xs-6 col-sm-4 col-md-2">
                                        <img src="/assets/images/avatars/0.png">
                                        <h5>Mexico</h5>
                                        <h4>Miguel Aguilar Tavera</h4>

                                    </div>

                                    <div class="item col-xs-6 col-sm-4 col-md-2">
                                        <img src="/assets/images/avatars/0.png">
                                        <h5>Nigeria</h5>
                                        <h4>Bashir Aminu</h4>

                                    </div>

                        -->

        </div>
    </div>

</section>


<section id="partners" class="partners">
    <div class="container">
        <div class="row head">
            <div class="col-sm-12">
                <h1>Partners</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="list row">
                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/icon-partner-6.jpg">
                        </div>
                        <h4>Bitaps<br></h4>
                        Bitcoin processing operator
                        <a href="http://bitaps.com/" class="yga" data-ya-target="partners-Bitaps">http://bitaps.com/</a>
                    </div>

                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/qugla.svg">
                        </div>
                        <h4>Qugla Agency</h4>
                        Crowdfunding marketing agency
                        <a href="https://qugla.com/" class="yga" data-ya-target="partners-Qugla">https://qugla.com/</a>
                    </div>

                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/icon-partner-2.jpg">
                        </div>
                        <h4>Future Fintech</h4>
                        Future Fintech - Fintech cluster: community, coworking, financial partners, hackathons and
                        conferences for fintech startups.
                        <a href="http://www.futurefintech.org" class="yga" data-ya-target="partners-Future-Fintech">http://www.futurefintech.org</a>
                    </div>

                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/icon-partner-1.jpg">
                        </div>
                        <h4>Blockchain community</h4>
                        Blockchain community - Non profit association of enthusiasts, professionals, entrepreneurs and
                        services interested in learning, development and applications of blockchain.
                        <a href="http://blockchain.community" class="yga"
                           data-ya-target="partners-blockchain-community">http://blockchain.community</a>
                    </div>

                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/icon-partner-5.jpg">
                        </div>
                        <h4>Gems</h4>
                        Branding agency
                        <a href="http://gemsww.com" class="yga" data-ya-target="partners-gemsww">http://gemsww.com</a>
                    </div>

                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/icon-partner-7.jpg">
                        </div>
                        <h4>Cointelegraph</h4>
                        Fintech, Blockchain and Bitcoin news and analyses on the future of money.
                        <a href="https://cointelegraph.com" class="yga" data-ya-target="partners-gemsww">https://cointelegraph.com</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="hidden-xs">
    <img src="/assets/images/timeline.svg" style="width: 100%">
</section>

<section class="visible-xs">
    <img src="/assets/images/timeline_m.svg" style="width: 100%">
</section>



<section class="inline-form">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center post-ico">
                <h1>The World is changing rapidly. <br class="hidden-xs">Be a step ahead.</h1>
                <a href="<?php echo $dashboardUrl ?>" onclick="roistat.event.send('redirect_to_dashboard')"
                   target="_blank" class="btn-post-onethird">Join the ICO</a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-0 pre-ico">
                <h1>Are you ready to join the future of banking?</h1>
            </div>
            <div class="col-xs-12 col-sm-6 sub-form pre-ico" id="sub-form-3" data-ga="1" data-ya-target="SUBMAIL3">
                <div class="text">We will keep you in touch</div>
                <form class="formBody" data-toggle="validator" role="form" method="post"
                      action="//humaniq.us15.list-manage.com/subscribe/post?u=32d439954c6b56c5268f0c899&amp;id=29bcb70758"
                      onsubmit="roistat.event.send('request_demo')">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="b_32d439954c6b56c5268f0c899_29bcb70758" tabindex="-1" value="">
                        <div class="notify">
                            <input type="email" class="form-control email" name="EMAIL" id="email2"
                                   placeholder="your@email.com" required data-error="Email address is invalid"
                                   data-required-error="Email address is required">
                            <input type="submit" class="btn btn-primary submit" value="Request Demo">
                        </div>
                        <div class="help-block with-errors"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</section>


<section id="sbs2" class="sbs sbs2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Learn more and stay tuned! <br class="hidden-xs">It‘s a really exciting journey!</h1>
                <div class="items">
                    <a target="_blank" href="http://facebook.humaniq.co" data-ya-target="sb2-facebook" class="yga"><i
                            class="fb"></i>Facebook</a>
                    <a target="_blank" href="http://twitter.humaniq.co" data-ya-target="sb2-twitter" class="yga"><i
                            class="tw"></i>Twitter</a>
                    <a target="_blank" href="http://github.humaniq.co" data-ya-target="sb2-github" class="yga"><i
                            class="gh"></i>GitHub</a>
                    <a target="_blank" href="http://slack.humaniq.co" data-ya-target="sb2-slack" class="yga"><i
                            class="sl"></i>Slack</a>
                    <a target="_blank" href="https://blog.humaniq.co" data-ya-target="sb2-medium" class="yga"><i
                            class="md"></i>Medium</a>
                    <a target="_blank" href="https://bitcointalk.org/index.php?topic=1711764.0"
                       data-ya-target="sb2-bitcointalk" class="yga"><i class="bt"></i>Bitcointalk</a>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row text-center copyright">
            © Humaniq 2017. All Rights Reserved.<br>
            <a class="link yga" data-ya-target="footer-email" href="mailto://info@humaniq.co">info@humaniq.co</a>
        </div>
    </div>
</footer>

<div class="modal fade video-modal" id="video-modal" tabindex="-1" role="dialog">
    <div data-toggle="modal" data-target="#video-modal" class="close">
        <div class="l"></div>
        <div class="r"></div>
    </div>
    <div class="container">
        <div class="row cl">
            <div class="col-xs-12 col-xs-offset-0 it">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/prEPErb82Mg?rel=0&amp;controls=0&amp;showinfo=0"
                            frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade video-modal" id="ico-modal" tabindex="-1" role="dialog">
    <div data-toggle="modal" data-target="#ico-modal" class="close">
        <div class="l"></div>
        <div class="r"></div>
    </div>
    <div class="container">
        <div class="row cl2">
            <div class="col-xs-12 col-xs-offset-0 it2" data-toggle="modal" data-target="#ico-modal" style="background: #fff;padding: 7rem;">
                <h1>What is an ICO?</h1>
                <div>An ICO is a recently emerged concept of crowdfunding projects in the cryptocurrency and Blockchain
                    industries.
                    <p>ICO stands for Initial Coin Offering. It’s an event, sometimes referred to as ‘crowdsale’, when a
                        company releases its own cryptocurrency with a purpose of funding. It usually releases a certain
                        number of crypto-tokens and then sells those tokens to its intended audience, most commonly in
                        exchange for Bitcoins, but it can be fiat money as well.
                    <p>As a result, the company gets the capital to fund the product development and the audience
                        members get their crypto tokens’ shares. Plus, they have complete ownership of these shares.
                    <h2>What’s in ICO for me?</h2>
                    <p>There are many possible benefits to taking part in an ICO. The obvious one is: you are helping
                        the company launch its product. There is also an opportunity to make a profit selling ICO tokens
                        after you’ve purchased them.
                    <div>Just like with Kickstarter, the key goal for every ICO participant is to help fund a project
                        that they personally consider interesting and appealing. However, there is an additional
                        opportunity to make a profit in the process.
                    </div>
                </div>
                <div class="gray">* - HMQ is not an investment instrument or security.
                    There is no guarantee – indeed there is no reason to believe – that the HMQ you purchase will increase in value.
                    HMQ MAY, AND LIKELY WILL,  DECREASE IN VALUE. Those who do not actually use their HMQ honestly and fairly will lose their HMQ to those who do.</div>
            </div>
        </div>
    </div>
</div>


<script src="/assets/jquery/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/7c31d32b97.js"></script>

<script src="/assets/bootstrap-validator/dist/validator.min.js"></script>
<script src="/assets/moment.js/min/moment.min.js"></script>

<!--<script src="/assets/skrollr/dist/skrollr.min.js"></script>-->

<script src="/assets/hq.js"></script>


<script>
    window.intercomSettings = {
        app_id: "es3ah3qb"
    };
</script>
<script>(function () {
        var w = window;
        var ic = w.Intercom;
        if (typeof ic === "function") {
            ic('reattach_activator');
            ic('update', intercomSettings);
        } else {
            var d = document;
            var i = function () {
                i.c(arguments)
            };
            i.q = [];
            i.c = function (args) {
                i.q.push(args)
            };
            w.Intercom = i;
            function l() {
                var s = d.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = 'https://widget.intercom.io/widget/es3ah3qb';
                var x = d.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }

            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })()</script>

<!-- RoiStat -->
<script>(function (w, d, s, h, id) {
        w.roistatProjectId = id;
        w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/" + id + "/init";
        var js = d.createElement(s);
        js.async = 1;
        js.src = p + h + u;
        var js2 = d.getElementsByTagName(s)[0];
        js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', '0ce85e833d548d5d3cfec011979a235e');</script>
<!-- End RoiStat -->


</body>
</html>

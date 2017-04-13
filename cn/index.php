<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-language" content="zh-CN">

    <title>Humaniq</title>

    <!--	<link href="https://fonts.googleapis.com/css?family=Pridi:200,300,400,500|Roboto:100,300,400,500,700" rel="stylesheet">-->

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

        if (clang == 'en') window.location = "/en/";
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


<!--    <script>-->
<!--        (function (i, s, o, g, r, a, m) {-->
<!--            i['GoogleAnalyticsObject'] = r;-->
<!--            i[r] = i[r] || function () {-->
<!--                    (i[r].q = i[r].q || []).push(arguments)-->
<!--                }, i[r].l = 1 * new Date();-->
<!--            a = s.createElement(o),-->
<!--                m = s.getElementsByTagName(o)[0];-->
<!--            a.async = 1;-->
<!--            a.src = g;-->
<!--            m.parentNode.insertBefore(a, m)-->
<!--        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');-->
<!---->
<!--        ga('create', ga_id, 'auto');-->
<!--        ga('send', 'pageview');-->
<!---->
<!--    </script>-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-91023234-1', 'auto', {'name': 'humaniq'}, {'allowLinker':true});
        ga('require', 'linker');
        ga('linker:autoLink',['humaniq.io', 'humaniq.co', 'blog.humaniq.co', 'my.humaniq.co']);
        ga('humaniq.require', 'linker');
        ga('humaniq.linker:autoLink',['humaniq.io', 'humaniq.co', 'blog.humaniq.co', 'my.humaniq.co']);

        ga(function() {
            var gaTracker = ga.getByName('humaniq');
            var clientId = gaTracker.get('clientId');
            ga('humaniq.set', 'dimension1', clientId);
        });

        ga('humaniq.send', 'pageview');

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
        fbq('init', '1079647418847686'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1079647418847686&ev=PageView&noscript=1"
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
<body id="home" data-spy="scroll" data-offset="90" data-target="#navbar" class="happened">

<?php
$baseUrl = 'https://my.humaniq.co/';
$hasRoiStat = array_key_exists('roistat_visit', $_COOKIE);
$queryString = ($hasRoiStat) ? "?roistat_visit=" . intval($_COOKIE['roistat_visit']) : "";
$dashboardUrl = $baseUrl . $queryString;
?>


<nav id="navbar" data-spy="affix" data-offset-top="300" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid nav-wrapper">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <img class="cross" src="assets/images/close-nav.svg">
            </button>


            <a class="navbar-brand page-scroll" href="#home">
                <img src="/assets/images/logo.png" class="white" alt="Join our mission to connect two billion unbanked people">
                <img src="/assets/images/logo-blue.png" class="blue" alt="Join our mission to connect two billion unbanked people">
            </a>
        </div><div class="navbar-collapse collapse" id="bs-navbar">

            <ul class="nav navbar-nav centered text-center">
                <li><a href="#whatis" class="page-scroll yga" data-ga="1" data-ya-target="menu-about">About</a>
                <li><a href="#advisoryboard" class="page-scroll yga" data-ga="1" data-ya-target="menu-advisory-board">Advisory Board</a>
                <li><a href="#team" class="page-scroll yga" data-ga="1" data-ya-target="menu-team">Team</a>
                <li><a href="#sbs" class="page-scroll yga" data-ga="1" data-ya-target="menu-join-us">Join Us</a>
                <li><a href="#join-the-ico" class="page-scroll yga" data-ga="1" data-ya-target="menu-ico">ICO</a>

            </ul>

            <ul class="nav navbar-nav navbar-right reserve-wrapper">
                <li>
                    <a href="/" class="item" onclick="Cookies.set('mylang','en')">English</a>
                </li>
                <li>
                    <a href="#whitepapers" class="whitepaper-link round yga" data-ga="1"
                       data-ya-target="home-screen-whitepapers">
                        Whitepapers
                    </a>

                </li>
            </ul>

        </div>

    </div>

</nav>



<section id="home-screen" class="home-screen" data-0="opacity:1;" data-500="opacity:0.7;" data-1000="opacity:0;">
    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <div class="circle c3"></div>
    <div class="circle c4"></div>
    <div class="circle c5"></div>
    <!--
    <div class="container-fluid">
        <div class="row top">
            <div class="col-sm-6">
                <div class="img logo"><img src="/assets/images/logo.png"
                                           alt="Join our mission to connect two billion unbanked people"></div>
            </div>
            <div class="col-sm-6 reserve-wrapper">
                <div class="lang">
                    <a href="/" class="item" onclick="Cookies.set('mylang','en')">English</a>
                    <div class="item active">繁體中文</div>
                </div>
                <a href="#whitepapers" class="whitepaper-link round yga" data-ga="1"
                   data-ya-target="home-screen-whitepapers">
                    Whitepapers
                </a>


            </div>
        </div>
    </div>
-->

    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="main">
                    <h1 class="ss1 active">Humaniq 是 <b class="rotation-wrapper">
                            <span class="active s1">区块链</span>
                            <span class="s2">神经网络</span>
                            <span class="s3">生物识别认证</span>
                            <span class="s4">大数据</span>
                        </b>
                    </h1>
                    <div class="offer post text-center">ICO正在进行</div>
                    <div class="countdown text-center">
                        <div class="figures">
                            <div class="days"></div>
                            <div class="units day">天</div>
                        </div>
                        <div class="sep">:</div>
                        <div class="figures">
                            <div class="hours"></div>
                            <div class="units hour">个小时</div>
                        </div>
                        <div class="sep">:</div>
                        <div class="figures">
                            <div class="minutes"></div>
                            <div class="units minute">分钟</div>
                        </div>
                        <div class="sep">:</div>
                        <div class="figures">
                            <div class="seconds"></div>
                            <div class="units second">秒</div>
                        </div>
                    </div>
                    <div class="sub-form" id="sub-form-1">
                        <a href="<?php echo $dashboardUrl ?>" onclick="roistat.event.send('redirect_to_dashboard')"
                           target="_blank" class="btn-post-block yga" data-ga="1" data-ya-target="big-blue-button-home">加入ICO</a>
                    </div>



                    <div class="ico-ends text-center"><div class="ends">ICO于 <b>CET时间4月27日00<span class="blink">:</span>00时结束</b></div></div>


                    <div class="lower-buttons text-left">


                        <div class="even" data-toggle="modal" data-target="#ico-modal">
                            <div class="round gly" style="padding: 10px 11px 9px 13px;"><i class="glyphicon glyphicon-play"></i></div>
                            <div class="txt">
                                Watch video<br>
                                <b>什么是ICO？</b>
                            </div>
                        </div>

                        <div class="even">
                            <div class="round" style="padding: 7px 13px 5px 13px;">$</div>
                            <div class="txt">
                                Total Value<br>
                                <b class="current-total">3.000.000</b>
                            </div>
                        </div>

                        <div class="even">
                            <div class="round gly" style="padding: 10px 12px 9px 12px;"><i class="glyphicon glyphicon-ok"></i></div>
                            <div class="txt">
                                Participants<br>
                                <b class="current-participants">4000</b>
                            </div>
                        </div>

                        <div class="even">
                            <div class="bonus-fadein round">%</div>
                            <div class="txt">现有奖励<br>
                                <b class=" curr-bonus-figure"></b>
                            </div>

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

                    </div>




<!--




                    <div class="lower-buttons post text-left">
                        <div class="left text-left" data-toggle="modal" data-target="#ico-modal">
                            <div class="round"><i class="glyphicon glyphicon-play"></i></div><br class="visible-xs">
                            什么是ICO？
                        </div>
                        <div class="center text-center">
                            <div class="bonus-fadein  curr-bonus-figure round">49.9%</div><br class="visible-xs">
                            现有奖励

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
                        <div class="right text-right">
                            <div class="ends">ICO于<br> <b>CET时间4月27日00.00时结束</b></div>
                        </div>
                    </div>
-->

                </div>
            </div>
        </div>
    </div>
</section>


<section id="whatis" class="whatis" data-offset="150">
    <div class="container main">
        <div class="row">
            <div class="col-xs-12">
                <div class="video-img embed-responsive embed-responsive-16by9">
                    <!--                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/prEPErb82Mg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>-->
                    <iframe class="embed-responsive-item" src='https://player.youku.com/embed/XMjY4MDIzNDI4OA=='
                            frameborder=0
                    'allowfullscreen'></iframe>
                </div>

                <!--                <img class="video-img" src="assets/images/whatis-main.jpg">
                                <div class="button" data-toggle="modal" data-target="#video-modal"><i class="fa fa-play"></i></div>-->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>您指尖上的银行4.0</h1>
            </div>
        </div>

        <div class="row stats">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4>什么是Humaniq？</h4>
                        <div class="text">
                            Humaniq是一种简单安全的第4代手机银行。我们正在通过消除传统银行的所有障碍（比如：需要到分行完成无休止的文书工作、处理不易使用且错误多的手机应用程序、使用不易记住且复杂的密码保护数据）的方式开发一种全新的银行体验。
                            <p>
                                我们已创建一种专门供未受良好教育或无身份证明的人群使用的安全强大的金融工具。这些人大部分生活在新兴经济体中，每天生活费用不足两美元。我们相信我们可以改变此种状况。请了解更多有关Humaniq的信息……

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-0">
                        <h4>2017年统计数据</h4>
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
                                    <div class="gr c70"></div>
                                </div>
                            </div>

                            <div class="g-row">
                                <div class="c">TH</div>
                                <div class="p">34%</div>
                                <div class="g">
                                    <div class="bl c44"></div>
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
                                <div class="p">银行</div>

                                <div class="g gg">
                                    <div class="gr c25"></div>
                                </div>

                                <div class="p">人口</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row circles">
            <div class="col-xs-12 text-center sub-wrapper">
                <div class="item left">
                    <div class="text">20亿人</div>
                    <div class="text-2">这一令人震惊的数据代表那些“没有银行账户者”，即全世界那些没有开通银行账户的人。此类银行账户缺失的情况在穷人、妇女和农村地区的人中间尤其是个问题。</div>
                </div>
                <div class="item center">
                    <div class="text">区块链 + 生物识别ID</div>
                    <div class="text-2">区块链技术正在我们的世界中引起革命，但伴随它以及采用数字财产而来的是新适用性带来的挑战，以及对身份和安全选择的双重需求。生物识别验证是关键所在。</div>
                </div>
                <div class="item right">
                    <div class="text">初创企业潮</div>
                    <div class="text-2">Humaniq将会把我们的分析报告资源向第三方开放，从而为我们的终端使用者们创造新的解决方案，也为我们的货币HMQ创造更多的用途。</div>
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
                    <h4>白皮书</h4>
                    <span>PDF</span> <!--<a href="">Download PDF</a>-->
                </div>
            </a>

            <a target="_blank" href="/assets/downloads/humaniq_wp_chinese.pdf"
               class="item col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 col-md-offset-0 yga" data-ga="1"
               data-ya-target="whitepapers-whitepaper-china">
                <div class="img"></div>
                <div class="body">
                    <h4>汉语版白皮书</h4>
                    <span>PDF</span> <!--<a href="">Download PDF</a>-->
                </div>
            </a>

            <a target="_blank" href="/whitebook/"
               class="item col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 col-md-offset-0 yga" data-ga="1"
               data-ya-target="whitepapers-whitebook">
                <div class="img"></div>
                <div class="body">
                    <h4>白皮书</h4>
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
                    <h4>德语版白皮书</h4>
                    <span>PDF</span>
                </div>
            </a>

            <a target="_blank" href="/assets/downloads/humaniq_wp_spanish.pdf"
               class="item col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 col-md-offset-0 yga" data-ga="1"
               data-ya-target="whitepapers-whitepaper-china">
                <div class="img"></div>
                <div class="body">
                    <h4>西班牙语版白皮书</h4>
                    <span>PDF</span> <!--<a href="">Download PDF</a>-->
                </div>
            </a>

            <a target="_blank" href="/assets/downloads/humaniq_wp_french.pdf"
               class="item col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 col-md-offset-0 yga" data-ga="1"
               data-ya-target="whitepapers-whitebook">
                <div class="img"></div>
                <div class="body">
                    <h4>法语版白皮书</h4>
                    <span>PDF</span>
                </div>
            </a>
        </div>

    </div>
</section>


<section id="sbs" class="sbs" data-offset="89">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>加入我们</h1>
                <div class="items">
                    <a target="_blank" href="http://facebook.humaniq.co" data-ya-target="sb1-facebook" class="yga"><i
                            class="fb"></i>Facebook</a>
                    <a target="_blank" href="http://twitter.humaniq.co" data-ya-target="sb1-twitter" class="yga"><i
                            class="tw"></i>Twitter</a>
                    <a target="_blank" href="http://github.humaniq.co" data-ya-target="sb1-github" class="yga"><i
                            class="gh"></i>GitHub</a>
                    <a target="_blank" href="https://humaniq-slack.herokuapp.com" data-ya-target="sb1-slack" class="yga"><i
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
                <h1>如下所示</h1>
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
                           href="https://cointelegraph.com/news/ethereum-based-humaniq-to-deliver-banking-40-to-2-bln-unbanked">基于以太坊的Humaniq向20亿无银行账户的人群提供银行4.0</a>
                        <a href="https://cointelegraph.com" class="yga" target="_blank" data-ya-target="press-gemsww">cointelegraph.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-2.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="https://themerkle.com/humaniq-aims-to-connect-millions-of-unbanked/">旨在通过使用以太坊区块链连接数百万的无银行账户人群</a>
                        <a href="https://themerkle.com" class="yga" target="_blank" data-ya-target="press-gemsww">themerkle.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-3.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="http://www.financemagnates.com/cryptocurrency/innovation/blockchain-banking-app-humaniq-set-initial-coin-offering-april/">区块链银行应用程序Humaniq定于4月份进行首次公开发行</a>
                        <a href="http://www.financemagnates.com" class="yga" target="_blank"
                           data-ya-target="press-gemsww">www.financemagnates.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-4.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="http://thedashtimes.com/2017/03/04/humaniqs-cryptopension-pancea-africas-pension-worries/">Humaniq的加密养老金能够解决困扰非洲的养老金问题</a>
                        <a href="http://thedashtimes.com/" class="yga" target="_blank" data-ya-target="press-gemsww">thedashtimes.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-5.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="https://www.smithandcrown.com/humaniq-banking-platform-undocumented-unbanked/">Humaniq:适用于无证人群和无银行账户人权的加密金融</a>
                        <a href="https://www.smithandcrown.com/" class="yga" target="_blank"
                           data-ya-target="press-gemsww">smithandcrown.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-6.png">
                        </div>
                        <a class="h4" target="_blank" href="http://icorating.com/project/30/Humaniq">适用于无银行账户人群的基于区块链的下一代金融服务</a>
                        <a href="http://icorating.com/" class="yga" target="_blank" data-ya-target="press-gemsww">icorating.com</a>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/press/icon-press-7.png">
                        </div>
                        <a class="h4" target="_blank"
                           href="http://www.nasdaq.com/article/humaniq-aims-to-tackle-barriers-to-economic-inclusion-with-blockchain-app-cm764760#ixzz4d7aPqGvD">Humaniq
                            旨在利用区块链应用程序解决经济融合遇到的障碍</a>
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
                <h1>无与伦比的潜力</h1>
                <h2>参与进来，服务20亿新人，把他们带入全球经济中。</h2>
            </div>
        </div>
        <div class="row slogan">
            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                <div class="jumbo">1.5</div>
                <div class="text">15亿人没有身份认证文件</div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                <div class="jumbo">2.5</div>
                <div class="text">超过20亿人没有银行账户</div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                <div class="jumbo">4.2</div>
                <div class="text">潜在的新存款达4万2000亿美元</div>
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
                <h1>以用户为本的革命</h1>
                <div class="text">
                    我们正在使用生物验证技术取代通行证和签名，并通过我们的加密货币而非股东取代分布式数字资产。用户将拥有一个简单的UX和UI以接入手机应用程序，同时还可访问通过互联网连接的全球图书馆。他们可以实现赚钱、借入、借出和支付，而这些都将受到其生物识别ID的保护，任何人均无法得知该生物识别ID。
                </div>

                <div class="visible-xs scheme container-fluid">
                    <div class="row">
                        <div class="col-xs-12 head">之前</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 text-center item">
                            <div class="dot pass"></div>
                            <p>电子邮件和密码
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot id"></div>
                            <p>纸质护照<br>&nbsp;
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot bank"></div>
                            <p>银行分行<br>&nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center sep-hor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 head">之后</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 text-center item">
                            <div class="dot face"></div>
                            <p>识脸登录
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot voice"></div>
                            <p>人声验证码
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot phone"></div>
                            <p>移动应用程序
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 text-center">
                <h1>以合作伙伴为本的革命</h1>
                <div class="text">
                    我们的开源堆栈和API将可用于初创企业和其它企业，以建立基于我们核心技术的服务，进一步刺激生态系统和循环经济。以太坊区块链APIS广告使任何企业均能轻易地调整其服务，并将其服务接入Humaniq的网络，以便到达广大未被开发的群众。因此……请抓住这个机会，让全世界知道您可以做什么。
                </div>

                <div class="visible-xs scheme container-fluid">
                    <div class="row">
                        <div class="col-xs-12 head">之前</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 text-center item">
                            <div class="dot startup"></div>
                            <p>初创公司
                        </div>

                        <div class="col-xs-1 text-center sep-vert"><img src="/assets/images/arrow-right-2.svg"></div>

                        <div class="col-xs-3 text-center item">
                            <div class="dot competitor"></div>
                            <p>支付系统、市场和竞争者
                        </div>

                        <div class="col-xs-1 text-center sep-vert"><img src="/assets/images/arrow-right-2.svg"></div>

                        <div class="col-xs-3 text-center item">
                            <div class="dot customer"></div>
                            <p>客户
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center sep-hor"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 head">之后</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 text-center item">
                            <div class="dot startup"></div>
                            <p>初创公司
                        </div>
                        <div class="col-xs-5 text-center sep-vert-l"><img src="/assets/images/arrow-right-l.svg">
                            <img src="/assets/images/logo-blue.png" style="width: 70%; margin: 0">
                        </div>
                        <div class="col-xs-3 text-center item">
                            <div class="dot customer"></div>
                            <p>客户
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <div class="row list last">
            <div class="hidden-xs col-xs-12 col-sm-6 text-center">

                <div class="scheme container-fluid">
                    <div class="row">
                        <div class="col-xs-12 head">之前</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 text-center item">
                            <div class="dot pass"></div>
                            <p>电子邮件和密码
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot id"></div>
                            <p>纸质护照<br>&nbsp;
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot bank"></div>
                            <p>银行分行<br>&nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center sep-hor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 head">之后</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 text-center item">
                            <div class="dot face"></div>
                            <p>识脸登录
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot voice"></div>
                            <p>人声验证码
                        </div>
                        <div class="col-xs-4 text-center item">
                            <div class="dot phone"></div>
                            <p>移动应用程序
                        </div>
                    </div>
                </div>

            </div>
            <div class="hidden-xs col-xs-12 col-sm-6 text-center">
                <div class="scheme container-fluid">
                    <div class="row">
                        <div class="col-xs-12 head">之前</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 text-center item">
                            <div class="dot startup"></div>
                            <p>初创公司
                        </div>

                        <div class="col-xs-1 text-center sep-vert"><img src="/assets/images/arrow-right-2.svg"></div>

                        <div class="col-xs-3 text-center item">
                            <div class="dot competitor"></div>
                            <p>支付系统、市场和竞争者
                        </div>

                        <div class="col-xs-1 text-center sep-vert"><img src="/assets/images/arrow-right-2.svg"></div>

                        <div class="col-xs-3 text-center item">
                            <div class="dot customer"></div>
                            <p>客户
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center sep-hor"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 head">之后</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 text-center item">
                            <div class="dot startup"></div>
                            <p>初创公司
                        </div>
                        <div class="col-xs-5 text-center sep-vert-l"><img src="/assets/images/arrow-right-l.svg">
                            <img src="/assets/images/logo-blue.png" style="width: 70%; margin: 0">
                        </div>
                        <div class="col-xs-3 text-center item">
                            <div class="dot customer"></div>
                            <p>客户
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row list2">
            <div class="col-xs-12 col-sm-4 text-center">
                <h4>脸书</h4>
                <h1>15亿用户</h1>
                <div class="text">4000亿美元</div>
            </div>
            <div class="col-xs-12 col-sm-4 text-center">
                <h4>苹果</h4>
                <h1>3亿用户</h1>
                <div class="text">6000亿美元</div>
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
                <h1>
                    我们创建Humaniq是为了实现两个伟大的想法：为20亿无银行账户的人群提供现代金融服务，和允许已审查的合作伙伴参与到Humaniq社区中，该社区可向所有利益相关者提供收入和服务，从而提供“双赢”的产品和服务。</h1>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-0">
                <img src="/assets/images/chart.svg">
                <div class="text smaller">根据梅特卡夫定律，网络的价值随着网络用户数量的不断增加而不断扩大。</div>
                <div class="text">

                    Humaniq旨在实现“有的放矢的利润”，它也被称为人道的资本主义。我们为范围内的所有利益相关者创造双赢。对于全球最穷人群中的一些人来说，这是一个提高新兴经济体中生活质量的机会；对于想要提供非盈利性或盈利性服务（比如：直接捐款平台或P2P借贷插件，这将不仅有助于您实现投资回报率，而且有助于提高和改善之前从未通过传统金融服务获得机会且目前因传统银行无法提供帮助而向放高利贷者支付利率高达35%至80%的过高利息的其它人的生活）的企业家来说，这也是一个机会。当确知双方均从交易中获利，您将非常满意您的投资选择。


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
                    <!--                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PY_efnojVcE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>-->
                    <iframe class="embed-responsive-item" src='https://player.youku.com/embed/XMjY4MDIzNDI4OA=='
                            frameborder=0
                    'allowfullscreen'></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="howitworks" class="howitworks">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1>这一切如何运作？</h1>
                <h2>我们正通过手机、区块链和AI技术向生活在数字经济之外、处于穷困条件下的人们提供财务独立。他们仅需要一部简单的智能手机和互联网。只需安装应用程序，一切轻松解决：）
                    <br class="hidden-xs"></h2>
            </div>
        </div>

        <div class="row list">
            <div class="column col-sm-3">
                <h3>脸部识别ID</h3>
                <div class="text">任何有前置摄像头的手机均可实现的最简单之选。</div>

                <h3>人声识别码</h3>
                <div class="text">验证码的更复杂版本<br>&nbsp;</div>

                <h3>设备识别ID</h3>
                <div class="text">将一个帐号对应一台实际的设备。是极好的二次验证。</div>

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
                <h3>贷款</h3>
                <div class="text">通过使用该平台，您决定提供什么货币和多少金额以及提供贷款的条款。</div>

                <h3>保险</h3>
                <div class="text">出售保险和购买保险。用您的手机即可轻松解决。</div>

                <h3>工作</h3>
                <div class="text">聘用自由职业者或寻找工作，无需中间人和费用。</div>
            </div>


            <div class="col-xs-12 text-center">
                <div class="badge"><a href="https://play.google.com/store/apps/details?id=co.humaniq" target="_blank">
                        <img src="/assets/images/google-play-badge-2.png"> </a></div>
                <div class="badge"><a href="https://itunes.apple.com/us/app/humaniq/id1212362871?l=ru&ls=1&mt=8"
                                      target="_blank"><img src="/assets/images/app-store-badge.svg"></a></div>
                <br>
                <div class="trademarks" style="display:inline-block; margin-top: 4rem;text-align: left">
                    - Google Play和Google Play标志是Google Inc的商标。<br>
                    - App Store是在美国和其它国家注册的Apple Inc., 的服务标志。<br>
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
                <h1>世界正在快速改变，请抢先一步！</h1>
                <a href="<?php echo $dashboardUrl ?>" onclick="roistat.event.send('redirect_to_dashboard')"
                   target="_blank" class="btn-post-onethird yga" data-ga="1" data-ya-target="big-blue-button-2">加入ICO</a>
            </div>


<!--            <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-0 pre-ico">
                <h1>世界正在快速改变，请抢先一步！</h1>
            </div>
            <div class="col-xs-12 col-sm-6 sub-form pre-ico" id="sub-form-2" data-ga="1" data-ya-target="SUBMAIL2">
                <div class="text">早起的鸟儿有虫吃，不要错过！</div>
                <form class="formBody" data-toggle="validator" role="form" method="post"
                      action="//humaniq.us15.list-manage.com/subscribe/post?u=32d439954c6b56c5268f0c899&amp;id=29bcb70758"
                      onsubmit="roistat.event.send('request_demo')">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="b_32d439954c6b56c5268f0c899_29bcb70758" tabindex="-1" value="">
                        <div class="notify">
                            <input type="email" class="form-control email" name="EMAIL" id="email3"
                                   placeholder="your@email.com" required data-error="电子邮件地址无效"
                                   data-required-error="需要电子邮件地址">
                            <input type="submit" class="btn btn-primary submit" value="申请演示">
                        </div>
                        <div class="help-block with-errors"></div>
                    </div>
                </form>
            </div>
-->
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

            <div class="item col-xs-6 col-sm-4 col-md-3" data-pp="5">
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


            <div class="item col-xs-6 col-sm-4 col-md-3" data-pp="1">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/1.png">
                </div>
                <!--                <h5>卢森堡</h5>-->
                <h4>阿莱克斯•福柯（Alex Fork）</h4>
                Founder, Board of Directors
            </div>

            <div id="pp-1" class="popup">
                <div class="close"><i class="glyphicon glyphicon-remove"></i></div>
                <img src="/assets/images/avatars/1.png">
                <h4>阿莱克斯•福柯（Alex Fork）</h4>
                <div class="text">
                    阿莱克斯•福柯是Humaniq项目的首席执行官。Humaniq项目是一个用来帮助新兴经济体中没有银行账户的人摆脱贫困的银行4.0项目。阿莱克斯是区块链社区董事会成员，《比特币：不止是钱》（Bitcoin:
                    More than money）一书的作者，还是未来金融科技加速器（Future Fintech accelerator）的创立者。福柯与弗拉德•马尔图诺夫（Vlad
                    Martynov）（以太坊顾问委员会成员）和维塔利克•布特林（Vitalik Buterin）（以太坊创立者）一道，组织了一场有超过500名银行界专家参与的以太坊会议。
                </div>
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3" data-pp="6">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/Dmitry_Kaminsky.png">
                </div>
                <!--                <h5>UK</h5>-->
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

            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Paolo_Tasca.png">
                <h5></h5>
                <h4>Paolo Tasca</h4>
                Technology Advisor / P2P economy, technology and Blockchain

            </div>

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

            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Iggy_Bassy.png">
                <h5></h5>
                <h4>Iggy Bassi </h4>
                Policy and Legal advisor/ Social Impact and AI, data expert
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/tim_campbell.png">
                <h5></h5>
                <h4>Tim Campbell</h4>
                Public Affairs and Global Policy Advisor
            </div>



            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Ron_Morris.png">
                <h5></h5>
                <h4>Ron Morris</h4>
                Scientific Advisor / Education / Universities Advisor
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Paul_Mears.png">
                <h5></h5>
                <h4>Paul Mears</h4>
                Policy and Legal advisor / Financial and risk management advisor
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Khata.png">
                <h5></h5>
                <h4>Yevgeniy Khata</h4>
                Investment relations
            </div>




            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Vishal_Mishra.png">
                <h5></h5>
                <h4>Vishai Mishra</h4>
                Technology advisor/ Big data and security
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Pavel_Kravchenko.png">
                <h5></h5>
                <h4>Pavel Kravchenko</h4>
                Technology Advisor/ BlockChain technology advisor
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Derin_Cag.png">
                <h5></h5>
                <h4>Derin Cag</h4>
                Technology Advisory Board/Richtopia
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

            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Nick_Ayton.png">
                <h5></h5>
                <h4>Nick Ayton</h4>
                Technology Advisory Board/ 21 Million Project
            </div>



            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Alex_Bausch.png">
                <h5></h5>
                <h4>Alex Bausch</h4>
                Technology Advisor/ Co-Chairman of the Blockchain Ecosystem Network
            </div>


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
                <h2>加上我们的 <a target="_blank" href="http://slack.humaniq.co" data-ya-target="team-slack"
                             class="yga team-h1-link">斯莱克（Slack）</a> 帐号，和我们的团队交流吧。</h2>
            </div>
        </div>

        <div class="row list">


            <div class="item col-xs-6 col-sm-4 col-md-3" data-pp="3">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/2.png">
                </div>
                <!--                <h5>荷兰</h5>-->
                <h4>理查德•卡斯特莱茵（Richard Kastelein）</h4>
                首席营销官
            </div>

            <div id="pp-3" class="popup">
                <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                <img src="/assets/images/avatars/2.png">
                <h4>理查德•卡斯特莱茵（Richard Kastelein）</h4>
                <div class="text">
                    加拿大企业家理查德•卡斯特莱茵被看作是区块链社区内区块链的一个主要发布者和发声人，他是区块链新闻的发布者，区块链合作伙伴的董事，伦敦加密金融会议的创立者，还在区块链生态系统网络筹划指导委员会中任职。他主要是作为新兴企业的顾问、发布人、营销专家，甚至是设计者和发言人而工作的。目前他暂任Humaniq的首席营销官。
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
                <img src="/assets/images/avatars/George_Al_Madawar.png">
                <!--                <h5></h5>-->
                <h4>Georges Al Medawar</h4>
                Business Development Officer / investment relations
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-3">
                <img src="/assets/images/avatars/Shane_McQuillan.png">
                <!--                <h5></h5>-->
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


            <div class="item col-xs-6 col-sm-4 col-md-3" data-pp="2">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/3.png">
                </div>
                <!--                <h5>博茨瓦纳</h5>-->
                <h4>阿拉卡纳尼•伊特莱楞（Alakanani Itireleng）</h4>
                首席派驻代表
            </div>

            <div id="pp-2" class="popup">
                <div class="close"><i class="glyphicon glyphicon-remove"></i></div>
                <img src="/assets/images/avatars/3.png">
                <h4>阿拉卡纳尼•伊特莱楞（Alakanani Itireleng）</h4>
                <div class="text">
                    阿拉卡纳尼•伊特莱楞经营着哈博罗内的一家区块链中心萨托西中心（Satoshi
                    Centre），她在那里和开发者们一起工作，将会为孩子们发起一个开发项目。她的比特币之旅始于2012年年末，从那以后，她一直在向人们普及比特币。阿拉卡纳尼在国际上宣传比特币也颇具影响力，她在阿姆斯特丹、南非和科特迪瓦的会议上发过言，虽未列席加纳会议，但也通过虚拟技术在该会上发声了。阿拉卡纳尼去年在哈博罗内组织了首次区块链峰会，全世界的人都引以为荣。她和她的团队一道在哈博罗内试水两款区块链应用程序。
                </div>
            </div>


            <!--

                            <div class="item col-xs-6 col-sm-4 col-md-3">
                                <img src="/assets/images/avatars/Dwight_Spoull.png">
                                <h4>Peter Bel </h4>
                                Content and Communications Manager
                            </div>

            -->


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
                <h1>技术核心</h1>
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
                        <h4>微以太实验室</h4>
                        <b>智能契约开发</b><br>
                        <a href="http://etherionlab.com/" target="_blank" class="yga"
                           data-ya-target="partners-Etherion">http://etherionlab.com/</a>
                    </div>


                    <div id="pp-11" class="popup">
                        <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                        <img src="/assets/images/partners/icon-partner-4.jpg">
                        <h4>微以太实验室</h4>
                        <div class="text">
                            <b>智能契约开发</b><br>
                            分散化应用市场的先锋。自2014年以来，该公司开始研发分布式应用程序（Dapps）。2015年3月，他们成功地为客户创造出首个实例。自那以后，微以太实验室一直在向全球客户提供咨询与开发服务。
                            <br><a href="http://etherionlab.com/" target="_blank" class="yga"
                                   data-ya-target="partners-Etherion">http://etherionlab.com/</a>
                        </div>
                    </div>


                    <div class="item col-xs-12 col-sm-4 col-md-3" data-pp="12">
                        <div class="wrapper">
                            <div class="zoom"><i class="fa fa-search"></i></div>
                            <img src="/assets/images/partners/icon-partner-8.jpg">
                        </div>
                        <h4>视觉实验室</h4>
                        <b>生物识别验证开发</b><br>
                        <a href="http://www.visionlabs.ru" target="_blank" class="yga"
                           data-ya-target="partners-visionlabs">http://www.visionlabs.ru</a>
                    </div>


                    <div id="pp-12" class="popup">
                        <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                        <img src="/assets/images/partners/icon-partner-8.jpg">
                        <h4>视觉实验室</h4>
                        <div class="text">
                            <b>生物识别验证开发</b><br>
                            视觉实验室（VisionLabs）是一家全球领先的视觉识别公司。该公司为金融业、零售业、视屏监控和安全部门开发软件和解决方案。视觉实验室创立于2012年，如今在与全球的大公司和政府机构合作的项目中属佼佼者。
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
                                            <h4>侵入者（Invaders）</h4>
                                            <b>移动与后台开发</b><br>
                                            <a href="http://theinvaders.ru/" target="_blank" class="yga" data-ya-target="partners-Invaders">http://theinvaders.ru/</a>
                                        </div>

                                        <div id="pp-13" class="popup">
                                            <div class="close"  data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                                            <img src="/assets/images/partners/icon-partner-9.jpg">
                                            <h4>侵入者（Invaders）</h4>
                                            <div class="text">
                                                <b>移动与后台开发</b><br>
                                                侵入者（Invaders）在俄罗斯广为人知，它是一家网络与移动开发公司。公司始创于2011年，在和微软公司竞争IT项目中获胜，赢得了斯科尔科沃创业之旅（Skolkovo Startup tour ）比赛和其他许多商业竞争。
                                                <br><a href="http://theinvaders.ru/" target="_blank" class="yga" data-ya-target="partners-Invaders">http://theinvaders.ru/</a>
                                            </div>
                                        </div>

                    -->
                    <div class="item col-xs-12 col-sm-4 col-md-3" data-pp="14">
                        <div class="wrapper">
                            <div class="zoom"><i class="fa fa-search"></i></div>
                            <img src="/assets/images/partners/icon-partner-10.jpg">
                        </div>
                        <h4>分布式实验室</h4>
                        <b>后台顾问</b>
                        <a href="https://distributedlab.com/" target="_blank" class="yga"
                           data-ya-target="partners-Distributed-Lab">https://distributedlab.com/</a>
                    </div>

                    <div id="pp-14" class="popup">
                        <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                        <img src="/assets/images/partners/icon-partner-10.jpg">
                        <h4>分布式实验室</h4>
                        <div class="text">
                            <b>后台顾问</b><br>
                            分布式实验室（Distributed
                            Lab）是一个加密及分散化技术专业中心。这家公司成立于2014年，其团队包括30名专家——研究者、开发者和分析者。其主要活动是客户区块链开发，打造创新产品，建筑、教育和会议。分布式实验室的目标是创造使用开放而统一的协议来促进贸易与价值交换的金融网站。

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
                <h1>驻外代表</h1>
            </div>
        </div>
        <div class="row list">
            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/5.png">
                <h5>津巴布韦</h5>
                <h4>塔旺达•坎伯（Tawanda Kembo）</h4>
                比特财务
                <p><a href="https://www.facebook.com/tkembo" target="_blank">facebook.com / tkembo</a>
            </div>

            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/6.png">
                <h5>塞拉利昂</h5>
                <h4>切尔诺•萨伊德•叟（Chernoh Saeed Sow）</h4>
                比特币网络—SLB网
                <p><a href="https://www.facebook.com/cheroslbnet" target="_blank">facebook.com / cheroslbnet</a>
            </div>

            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/7.png">
                <h5>加纳</h5>
                <h4>菲利普•阿格耶•阿萨尔（Philip Agyei Asare）</h4>
                梦想比特币基金会
                <p><a href="https://www.facebook.com/pkagyei" target="_blank">facebook.com / pkagyei</a>
            </div>

            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/8.png">
                <h5>莱索托</h5>
                <h4>伊图姆楞•伊萨克•勒荣（Itumeleng Isaac Lejone）</h4>
                比特币社区
                <p><a href="https://www.facebook.com/itumelengisaac.lejone" target="_blank">facebook.com /
                        itumelengisaac.lejone</a>
            </div>

            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/9.png">
                <h5>南非</h5>
                <h4>莫哥博迪•菲利（Mogopodi Phiri）</h4>
                非洲加密
                <p><a href="https://www.facebook.com/mogopodi.phiri.1" target="_blank">facebook.com /
                        mogopodi.phiri.1</a>
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/4.png">
                <h5>澳大利亚</h5>
                <h4>罗斯•劳埃德（Ross Lloyd）</h4>
                曾经为澳大利亚许多政府部门做过新闻发布会、年报、演讲的资深人士。
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/Adewele_Bankole.png">
                <h5>Nigeria</h5>
                <h4>Adewale<br>Bankolo</h4>
                <p><a href="https://www.facebook.com/adewale.bankole" target="_blank">facebook.com / adewale.bankole</a>

            </div>


            <div class="item col-xs-6 col-sm-4 col-md-2" data-pp="4">
                <div class="img">
                    <div class="zoom"><i class="fa fa-search"></i></div>
                    <img src="/assets/images/avatars/10.png">
                </div>
                <h5>印度</h5>
                <h4>帕尔斯•巴特•乌潘德拉•库马尔（Parth Bhatt Upendra Kumar）</h4>
                印度合作伙伴
            </div>

            <div id="pp-4" class="popup">
                <div class="close" data-pp="3"><i class="glyphicon glyphicon-remove"></i></div>
                <img src="/assets/images/avatars/10.png">
                <h4>帕尔斯•巴特•乌潘德拉•库马尔（Parth Bhatt Upendra Kumar）</h4>
                <div class="text">
                    帕尔斯•巴特是来自印度的婆罗门。他是Humaniq项目意识形态方面的一个合作伙伴。阿莱克斯•福柯和帕尔斯•巴特•乌潘德拉•库马尔一起安排了一场商业活动，旨在从印度那些地位低下的人那里获得他们对Humaniq的反应。幸亏收到了这些反馈，Humaniq变得更好了。
                    <p><a href="https://www.facebook.com/parth.bhatt" target="_blank">https://www.facebook.com/parth.bhatt</a>

                </div>
            </div>


            <div class="item col-xs-6 col-sm-4 col-md-2">
                <img src="/assets/images/avatars/Mohammed_Ibrahim.png">
                <h5>Nigeria</h5>
                <h4>Muhammed<br>bukar Ibrahim</h4>
                <p><a href="https://www.facebook.com/mohammedbukar.ibrahim" target="_blank">facebook.com /
                        mohammedbukar.ibrahim</a>
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
                <h1>合作伙伴</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="list row">
                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/icon-partner-6.jpg">
                        </div>
                        <h4>比特应用程序<br></h4>
                        比特币处理操作者
                        <a href="http://bitaps.com/" class="yga" data-ya-target="partners-Bitaps">http://bitaps.com/</a>
                    </div>

                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/qugla.svg">
                        </div>
                        <h4>古格拉代理</h4>
                        众筹营销代理
                        <a href="https://qugla.com/" class="yga" data-ya-target="partners-Qugla">https://qugla.com/</a>
                    </div>

                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/icon-partner-2.jpg">
                        </div>
                        <h4>未来金融技术</h4>
                        未来金融技术——金融技术的汇聚：社区、共同工作、金融伙伴、黑客松、以及为金融技术初创企业打造的会议。
                        <a href="http://www.futurefintech.org" class="yga" data-ya-target="partners-Future-Fintech">http://www.futurefintech.org</a>
                    </div>

                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/icon-partner-1.jpg">
                        </div>
                        <h4>区块链社区</h4>
                        区块链社区——热衷人士、专业人士和企业家们组成的非盈利性协会，服务于那些对区块链的学习、开发和应用感兴趣的人。
                        <a href="http://blockchain.community" class="yga"
                           data-ya-target="partners-blockchain-community">http://blockchain.community</a>
                    </div>

                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/icon-partner-5.jpg">
                        </div>
                        <h4>盖姆斯</h4>
                        品牌代理
                        <a href="http://gemsww.com" class="yga" data-ya-target="partners-gemsww">http://gemsww.com</a>
                    </div>

                    <div class="item col-xs-6 col-sm-4 col-md-4">
                        <div class="wrapper">
                            <img src="/assets/images/partners/icon-partner-7.jpg">
                        </div>
                        <h4>钱币电讯</h4>
                        金融技术、区块链和比特币新闻，以及对钱币未来的分析。
                        <a href="https://cointelegraph.com" class="yga" data-ya-target="partners-gemsww">https://cointelegraph.com</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="hidden-xs">
    <img src="/assets/images/timeline-cn.svg" style="width: 100%">
</section>

<section class="visible-xs">
    <img src="/assets/images/timeline_m-cn.svg" style="width: 100%">
</section>

<section class="inline-form" id="join-the-ico" data-offset="85">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>您准备加入银行业的未来吗？</h1>
                <a href="<?php echo $dashboardUrl ?>" onclick="roistat.event.send('redirect_to_dashboard')"
                   target="_blank" class="btn-post-onethird yga"  data-ga="1" data-ya-target="big-blue-button-3">加入ICO</a>
            </div>

<!--
            <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-0 pre-ico">
                <h1>您准备加入银行业的未来吗？</h1>
            </div>
            <div class="col-xs-12 col-sm-6 sub-form pre-ico" id="sub-form-3" data-ga="1" data-ya-target="SUBMAIL3">
                <div class="text">我们会和您保持联系</div>
                <form class="formBody" data-toggle="validator" role="form" method="post"
                      action="//humaniq.us15.list-manage.com/subscribe/post?u=32d439954c6b56c5268f0c899&amp;id=29bcb70758"
                      onsubmit="roistat.event.send('request_demo')">
                    <div class="form-group has-feedback">
                        <input type="hidden" name="b_32d439954c6b56c5268f0c899_29bcb70758" tabindex="-1" value="">
                        <div class="notify">
                            <input type="email" class="form-control email" name="EMAIL" id="email2"
                                   placeholder="your@email.com" required data-error="电子邮件地址无效"
                                   data-required-error="需要电子邮件地址">
                            <input type="submit" class="btn btn-primary submit" value="申请演示">
                        </div>
                        <div class="help-block with-errors"></div>
                    </div>
                </form>
            </div>
-->
        </div>
    </div>

</section>


<section id="sbs2" class="sbs sbs2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>了解更多，未完待续！<br class="hidden-xs">这可真是趟激动人心的旅程！</h1>
                <div class="items">
                    <a target="_blank" href="http://facebook.humaniq.co" data-ya-target="sb2-facebook" class="yga"><i
                            class="fb"></i>Facebook</a>
                    <a target="_blank" href="http://twitter.humaniq.co" data-ya-target="sb2-twitter" class="yga"><i
                            class="tw"></i>Twitter</a>
                    <a target="_blank" href="http://github.humaniq.co" data-ya-target="sb2-github" class="yga"><i
                            class="gh"></i>GitHub</a>
                    <a target="_blank" href="https://humaniq-slack.herokuapp.com" data-ya-target="sb2-slack" class="yga"><i
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
            © Humaniq 2017。版权所有。<br>
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
                    <iframe class="embed-responsive-item" src='https://player.youku.com/embed/XMjY4MDIzNDI4OA=='
                            frameborder=0
                    'allowfullscreen'></iframe>
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
            <div class="col-xs-12 col-xs-offset-0 it2" data-toggle="modal" data-target="#ico-modal"
                 style="background: #fff;padding: 7rem;">
                <h1 class="text-center">什么是ICO？</h1>
                <div>ICO是最近出现在加密货币和区块链产业中一个关于众筹项目的概念。
                    <p>ICO代表首次公开发行（Initial Coin
                        Offering），有时也会被用来指一种叫“众销”（crowdsale）的现象。当一个公司为了募集资金而发行自己的加密货币时就会发生ICO现象。此时该公司往往发行一定数量的加密代币，将其出售给公司的预期受众，大多数情况下公司出售这种代币用来交换比特币，但也可以法定货币。

                    <h2>参与ICO对我有什么用？</h2>
                    <p>参与ICO可以有很多好处。最明显的就是：您在帮助公司发布其产品。您购入ICO代币后，您也有机会通过出售它们而获利。
                    <div>正如脚踏启动器一样，每个ICO参与者的主要目标是资助一个在他们个人看来既有趣又吸引人的项目。然而，在此过程中还有另一个获利机会。
                    </div>
                    <div class="gray">* - HMQ is not an investment instrument or security.
                        There is no guarantee – indeed there is no reason to believe – that the HMQ you purchase will increase in value.
                        HMQ MAY, AND LIKELY WILL,  DECREASE IN VALUE. Those who do not actually use their HMQ honestly and fairly will lose their HMQ to those who do.</div>
                </div>
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
<script src="/assets/skrollr/dist/skrollr.min.js"></script>

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

<?php
if(isset($_POST['submit'])):
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
//your site secret key
$secret = '6LcbHhITAAAAAFNWP4QrRRfqIqwOFqPzUBkmQliG';
//get verify response data
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);

$name = !empty($_POST['name'])?$_POST['name']:'';
$email = !empty($_POST['email'])?$_POST['email']:'';
$subject = !empty($_POST['subject'])?$_POST['subject']:'';
$message = !empty($_POST['message'])?$_POST['message']:'';
$msg = 'Hello '.$name."\n\n".'I just received your message. I will reply you soon!.'."\n\n\n".'thanks & regards'."\n".'pirate'."\n\n".'**This is a system generated mail.';
if($responseData->success):
//contact form submission code
$to = 'pirate@way2tcs.com';
$htmlContent = "
<h3>Contact request</h3>
<p><b>Name: </b>".$name."</p>
<p><b>Email: </b>".$email."</p>
<p><b>Subject: </b>".$subject."</p>
<p><b>Message: </b>".$message."</p>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
//send email
@mail($to,$subject,$htmlContent,$headers);
@mail($email, $name, $msg, 'From: <pirate@way2tcs.com>');

$succMsg = 'Your message has submitted successfully.';
$name = '';
$email = '';
$message = '';
else:
$errMsg = 'Robot verification failed, please try again.';
endif;
else:
$errMsg = 'Oppss you missed the reCAPTCHA box.';
endif;
else:
$errMsg = '';
$succMsg = '';
$name = '';
$email = '';
$message = '';
endif;
?>
<!DOCTYPE html>
<html xmlns:og=http://ogp.me/ns# xmlns:fb=http://www.facebook.com/2008/fbml lang=en>

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="The PIRATE; author of way2tcs.com.">
    <meta name=keywords content="An interactive road map to join TATA Consultancy Services,TCS,TATA Consultancy Services,ILP,ASPIRE,JAVA,Tech-lounge,ILP experience,Pre-ILP,Next Step,nextstep.tcs,Getting into TCS">
    <meta name=author content=Pirate>
    <meta name=robots content="index, follow">
    <meta property=og:title content="The PIRATE; author of way2tcs.com.">
    <meta property=og:type content=article>
    <meta property=og:url content=http://way2tcs.com/about-me>
    <meta property=og:image content=http://way2tcs.com/images/pirate.jpg>
    <meta property=og:site_name content=way2tcs.com>
    <meta property=fb:app_id content=1017077498313505>
    <meta property=fb:page_id content=913891912019393>
    <meta property=og:description content="Hello there, wana know more about PIRATE? Click on link!!!">
    <title>About Me | way2TCS</title>
    <link href="http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800" rel=stylesheet>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel=stylesheet>
    <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css>
    <link rel=stylesheet href=css/preloader.css media="screen, print">
    <link rel=stylesheet href=css/owl.carousel.css>
    <link rel=stylesheet href=css/owl.theme.default.css>
    <link rel=stylesheet href=css/animate.css>
    <link href=css/bootstrap.min.css rel=stylesheet>
    <link href=css/style.css rel=stylesheet>
    <link rel="shortcut icon" href=images/icon.png>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-70604654-2', 'auto');
    ga('send', 'pageview');
    </script>
    <!--[if lt IE 9]><script src=js/lte-ie7.js></script><script src=https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js></script><script src=https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js></script><![endif]-->
    <script src=https://www.google.com/recaptcha/api.js async defer></script>

    <body>
        <div id=preloader>
            <div id=status>&nbsp;</div>
        </div>
        <div id=fb-root></div>
        <script>
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=1017077498313505";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <header id=HOME style="background-position:50% -125px">
        <div class=section_overlay>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class=container>
                    <div class=navbar-header>
                        <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#bs-example-navbar-collapse-1> <span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button> <a class=navbar-brand href=index.html><i class="fa fa-user-secret fa-2x"></i></a></div>
                        <div class="collapse navbar-collapse" id=bs-example-navbar-collapse-1>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href=index.html>Home</a>
                                    <li><a href=index.html>About</a>
                                        <li class=dropdown><a href=process.html class=dropdown-toggle data-toggle=dropdown>Process<span class=caret></span></a>
                                            <div class=dropdown-menu>
                                                <ul>
                                                    <li><a href=process.html>Complete Process</a>
                                                        <li><a href=registration.html>Registration</a>
                                                            <li><a href=selection.html>Selection</a>
                                                                <li><a href=pre-ilp.html>Pre-ILP</a>
                                                                    <li><a href=ilp.html>ILP</a></ul>
                                                                    </div>
                                                                    <li><a href=download.html>Download</a>
                                                                        <li class=dropdown><a href="" class=dropdown-toggle data-toggle=dropdown>Special<span class=caret></span></a>
                                                                            <div class=dropdown-menu>
                                                                                <ul>
                                                                                    <li><a href=nsr.html>NSR</a>
                                                                                        <li><a href=ilp-domain.html>ILP-Domain</a>
                                                                                            <li><a href=ilp-center.html>ILP-Center</a>
                                                                                                <li><a href=documentation.html>Documentation</a>
                                                                                                    <li><a href=facilities.html>Salary &amp; Benefits</a>
                                                                                                        <li><a href=404.html>DO's &amp; Don'ts in ILP</a>
                                                                                                            <li><a href=404.html>Experience in ILP</a></ul>
                                                                                                            </div>
                                                                                                            <li><a href=about-me.php>About Me</a></ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </nav>
                                                                                                </div>
                                                                                            </header>
                                                                                            <br>
                                                                                            <br>
                                                                                            <br>
                                                                                            <div class=text-center>
                                                                                                <h1>Hello folks, <strong>pirate</strong> here...</h1><img src=images/shape.png alt=Underline>
                                                                                                <br>
                                                                                                <br>
                                                                                                <p>Hello guys n girls...How you doing?
                                                                                                    <br>I hope you liked this site and thank you very much for visiting this useless page on this useful site. I appreciate that!!!
                                                                                                    <br>Just for your curiosity sake, except my Girlfriend name I will answer anything you ask. Actually I just don't have one &#128521;.</div>
                                                                                                    <br>
                                                                                                    <div class=container>
                                                                                                        <div class="col-md-6 text-justify">
                                                                                                            <p>Well, I was just joking.
                                                                                                                <br>My name is <strong>pirate</strong>. Yup, beyond this I can't tell anything.
                                                                                                                <br>I believe in Privacy on Internet n I'm a big fan of <strong>DARK NET</strong> (Please stay out of it, if you don't know what's it, please!!!). I'm Electronics Engineer by profession n Web Developer by choice, photographer n traveler too!!!
                                                                                                                <br>
                                                                                                                <br><em>Bachpan se hi, coding ka shauk tha (I mean, 1st yr of Engg.), but, you know college life!!!</em>. I know I can't change the direction of wind, somehow I adjusted my sails to reach my destination by doing what I love. &#x1f60a;!
                                                                                                                <br>
                                                                                                                <br>After a long break, I started learning and very soon I became a freelancer. I love Electronics and Web-designing too (n someone too &#x1f609;)!!!
                                                                                                                <br><strong>Internet</strong> is the ocean of Knowledge, <em>jitna lootna hai utna loot lo!</em> Ya it's true, when you learn something by yourself, by your own choice; you become master in that. But it takes good amount of time and little guidance is must! I really thank GOD for his offerings to me.</div>
                                                                                                                <div class=col-md-6><img class="img-responsive center-block img-thumbnail" src=images/about-me/img.jpg alt=programmer></div>
                                                                                                            </div>
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <div class=container>
                                                                                                                <div class="col-md-6 text-justify">
                                                                                                                    <p>
                                                                                                                        <br>Now, I'm a full time job holder somewhere (you can guess where). But I still keep learning new things!!!
                                                                                                                        <br>
                                                                                                                        <br>For those who are interested in Web-Designing, I would like to tell, how this site is designed.
                                                                                                                        <br>This whole site is designed by using <strong>Bootstrap CSS Framework n JQuery Java script</strong>. I designed whole site from scratch, which is too damn hectic job (Soon I'll tell you the reason, keep reading!). All the images (almost) on site are edited by me, using vector files which are downloaded from <strong>www.freepik.com</strong>, quite good n free site for all types of vectors n icon images.
                                                                                                                        <br><strong>It took around 80+ hrs to design this site completely from scratch!!!</strong>
                                                                                                                        <h4>I thank someone very special to me, for helping me in editing contents, from miles away :-)!!!</h4></div>
                                                                                                                        <div class=col-md-6><img class="img-responsive center-block img-thumbnail" src=images/about-me/img1.jpg alt=programmer></div>
                                                                                                                    </div>
                                                                                                                    <br>
                                                                                                                    <br>
                                                                                                                    <div class=container>
                                                                                                                        <div class="col-md-6 text-justify">
                                                                                                                            <p>That was all about this site. Let me tell you, this would be my last site designed using <strong>Bootstrap JS (JQuery)</strong>. It's very simple to use for small site but really hectic job to design a big site like this, having more than 10 pages. Now, we have great tool <strong>Angular JS</strong>, a Google owned Java script. It's really fu**ing awesome. It is based on Asynchronous Java Script. I mean you just need to design first page of your site and then you can replace contents of the page by different contents, which will be done asynchronously, your page will never reload, which will save time as well data. <em>Let's stop discussing all web technologies here itself, sar ke uppar se jayega!!!</em>
                                                                                                                                <br>But, while designing this site I have learned many things like Google's Re-Captcha, Facebook comment plugin and many more.
                                                                                                                                <br>
                                                                                                                                <br>But before signing off, I would like to introduce you to <strong>The Evolution of Web</strong> in interactive way!!!
                                                                                                                                <br>
                                                                                                                                <br>Before that, we should thank <strong>the Inventors of INTERNET, Robert E. Kahn &amp; Vint Cerf for such great invention and Tim Berners-Lee (the Inventor of World Wide Web) as well for keeping www free to use for all of us!!!</strong>
                                                                                                                                <h5>I'm just reproducing what I learned and read!!!</h5></div>
                                                                                                                                <div class=col-md-6><img class="img-responsive center-block img-thumbnail" src=images/about-me/bg.jpg alt="hello Web"></div>
                                                                                                                            </div>
                                                                                                                            <br>
                                                                                                                            <br>
                                                                                                                            <div class=container>
                                                                                                                                <div class="col-md-6 text-justify">
                                                                                                                                    <h2><strong>The dark ages of web design (1989)</strong></h2>
                                                                                                                                    <p>The very beginning of web design was pretty dark, as screens were literally black and only few monochrome pixels only.</div>
                                                                                                                                        <div class=col-md-6><img class="img-responsive center-block" src=images/about-me/img1.gif alt="dark ages of web"></div>
                                                                                                                                    </div>
                                                                                                                                    <br>
                                                                                                                                    <div class=container>
                                                                                                                                        <div class="col-md-6 text-justify">
                                                                                                                                            <h2><strong>Tables – The beginning (1995)</strong></h2>
                                                                                                                                            <p>The birth of browsers that could display images was the first step into web design as we know it. The closest option available to structure information was the concept of tables already existing in HTML. So, Designers would make a fancy layout, but it was up to developers to break it into small pieces and figure out the best way to make that design work. On the other hand, tables had some awesome features like the ability to align things vertically, be defined in pixels or in percentages.</div>
                                                                                                                                                <div class=col-md-6><img class="img-responsive center-block" src=images/about-me/img2.gif alt="the beginning"></div>
                                                                                                                                            </div>
                                                                                                                                            <br>
                                                                                                                                            <div class=container>
                                                                                                                                                <div class="col-md-6 text-justify">
                                                                                                                                                    <h2><strong>JavaScript comes to the rescue (1995)</strong></h2>
                                                                                                                                                    <p>JavaScript was the answer to the limitations of HTML. For instance, need a popup window, want to dynamically modify the order of something? The answer was JavaScript.Nowadays we prefer to avoid JavaScript if the same feature can be delivered using CSS. Yet JavaScript itself stays strong as in front-end (jQuery) as on the back-end (Node.js).</div>
                                                                                                                                                        <div class=col-md-6><img class="img-responsive center-block" src=images/about-me/img3.gif alt=JavaScript></div>
                                                                                                                                                    </div>
                                                                                                                                                    <br>
                                                                                                                                                    <div class=container>
                                                                                                                                                        <div class="col-md-6 text-justify">
                                                                                                                                                            <h2><strong>The golden era of freedom – Flash (1996)</strong></h2>
                                                                                                                                                            <p>To break the limitations of existing web design, a technology was born that promised a freedom never seen before. The designer could design any shapes, layouts, animations, interactions, use any font and all this in one tool – Flash. This was the golden era for splash pages, intro animations, all kinds of interactive effects.</div>
                                                                                                                                                                <div class=col-md-6><img class="img-responsive center-block" src=images/about-me/img4.gif alt=flash></div>
                                                                                                                                                            </div>
                                                                                                                                                            <br>
                                                                                                                                                            <div class=container>
                                                                                                                                                                <div class="col-md-6 text-justify">
                                                                                                                                                                    <h2><strong>CSS (1998)</strong></h2>
                                                                                                                                                                    <p>Around the same time as Flash, a better approach to structuring design from a technical standpoint was born – Cascading Style Sheets (CSS). The basic concept here is to separate content from the presentation. So the look and formatting are defined in CSS, but the content in HTML. To be clear, CSS isn’t a coding language, it is rather a declarative language.</div>
                                                                                                                                                                        <div class=col-md-6><img class="img-responsive center-block" src=images/about-me/img5.gif alt=CSS></div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <br>
                                                                                                                                                                    <div class=container>
                                                                                                                                                                        <div class="col-md-6 text-justify">
                                                                                                                                                                            <h2><strong>Mobile uprising – Grids and frameworks (2007)</strong></h2>
                                                                                                                                                                            <p>Browsing the web on mobile phones was a whole challenge in itself. Besides all the different layouts for devices, it introduced content-parity problems – should the design be the same on the tiny screen or should it be stripped down? Where to put all the nice, blinking ads on that tiny screen? Speed was also an issue, as loading a lot of content burns your INTERNET money pretty fast. The first step to improvement was an idea of column grids. After a few iterations, the 960 grid system won, and the 12-column division became something designers were using every day.</div>
                                                                                                                                                                                <div class=col-md-6><img class="img-responsive center-block" src=images/about-me/img6.gif alt="Grids &amp; frameworks"></div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <br>
                                                                                                                                                                            <div class=container>
                                                                                                                                                                                <div class="col-md-6 text-justify">
                                                                                                                                                                                    <h2><strong>Responsive web design (2010)</strong></h2>
                                                                                                                                                                                    <p>A brilliant guy named Ethan Marcotte decided to challenge the existing approach by proposing to use the same content, but different layouts for the design, and coined the term Responsive web design. Technically we still use HTML and CSS, so it is rather a conceptual advancement. The main benefit here is the content parity, meaning that it's the same website that works everywhere like this site.</div>
                                                                                                                                                                                        <div class=col-md-6><img class="img-responsive center-block" src=images/about-me/img7.gif alt="Responsive web design"></div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <br>
                                                                                                                                                                                    <div class=container>
                                                                                                                                                                                        <div class="col-md-6 text-justify">
                                                                                                                                                                                            <h2><strong>The times of the flat (2010)</strong></h2>
                                                                                                                                                                                            <p>Designing more layouts takes more time, so luckily we decided to streamline the process by ditching fancy shadow effects and getting back to the roots of design by prioritizing the content. Fine photography, typography, sharp illustrations and thoughtful layouts is how we design now. Simplifying visual elements or so called Flat design is also part of the process. The main benefit here is that much more thought is being put into copy, into hierarchy of the message and content in general.</div>
                                                                                                                                                                                                <div class=col-md-6><img class="img-responsive center-block" src=images/about-me/img8.gif alt="Flat design"></div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <br>
                                                                                                                                                                                            <div class=container>
                                                                                                                                                                                                <div class="col-md-6 text-justify">
                                                                                                                                                                                                    <h2><strong>The bright future (2015)</strong></h2>
                                                                                                                                                                                                    <p>The holy grail of web design has been to actually make it visual and bring it into the browser. Imagine that designers simply move things around the screen and a clean code comes out! And I don't mean changing the order of things, but having full flexibility and control! Imagine that developers don't have to worry about browser compatibility and can focus on actual problem solving!
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <br>And recent advancement: Mozilla just launched an OS purely based on Web Technology ( <font size=5><a href="https://www.mozilla.org/en-US/firefox/os/2.5/" target=_blank>Firefox OS</a></font> ). If you know HTML and CSS, you are ready to design an APP for Web OS!
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <h5>Note: Years in brackets indicate the beginning. It all evolved with a different pace over time. Therefore 1998-2007 aren't empty at all, it is where the evolution took place.</h5></div>
                                                                                                                                                                                                        <div class=col-md-6><img class="img-responsive center-block" src=images/about-me/img9.gif alt="The Bright Future"></div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <br>
                                                                                                                                                                                                    <div class="container text-center">
                                                                                                                                                                                                        <h1>What are your thoughts on the future of the web?</h1>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                        <br>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class=container>
                                                                                                                                                                                                        <div class=col-md-3></div>
                                                                                                                                                                                                        <div class="col-md-6 text-center">
                                                                                                                                                                                                            <div class=fb-like data-href=http://way2tcs.com/about-me data-layout=button_count data-action=like data-show-faces=true data-share=true></div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <br>
                                                                                                                                                                                                    <!--Contact form-->
                                                                                                                                                                                                    <section class="contact">
                                                                                                                                                                                                        <div class="container block-center">
                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                <div class="col-md-2"></div>
                                                                                                                                                                                                                <div class="col-md-8 wow fadeInRight animated ">
                                                                                                                                                                                                                    <form class="contact-form" action="" method="POST">
                                                                                                                                                                                                                        <?php if(!empty($succMsg)): ?>
                                                                                                                                                                                                                        <div class="succMsg">
                                                                                                                                                                                                                            <?php echo $succMsg; ?>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    <?php endif; ?>
                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                                                                            <input type="text" required="required" class="form-control" name="name" placeholder="Name">
                                                                                                                                                                                                                            <input type="email" class="form-control" required="required" name="email" placeholder="Email">
                                                                                                                                                                                                                            <input type="text" class="form-control" name="subject" required="required" placeholder="Subject">
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                                                                            <textarea class="form-control" name="message" rows="70" cols="80" placeholder="  Message Texts..."></textarea>

                                                                                                                                                                                                                            <?php if(!empty($errMsg)): ?>
                                                                                                                                                                                                                            <div class="errMsg">
                                                                                                                                                                                                                                <?php echo $errMsg; ?>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        <?php endif; ?>

                                                                                                                                                                                                                        <div class="g-recaptcha" data-sitekey="6LcbHhITAAAAAE71A5IVEmvt6ykqcle0nP4CEnn7" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                                                                                                                                                                                                                        <input type="submit" name="submit" value="SUBMIT">

                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>

                                                                                                                                                                                                            </form>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="col-md-2"></div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="container">
                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                        <div class="col-md-12 text-center">
                                                                                                                                                                                                            <div class="work-with   wow fadeInUp animated">
                                                                                                                                                                                                                <h3>Looking forward to hearing from you!</h3>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </section>

                                                                                                                                                                                            <div class="container text-center">
                                                                                                                                                                                                <h2><strong>Don't ever stop trying, learning, fighting, experimenting, doing, until MIRACLE happens!!!</strong></h2>
                                                                                                                                                                                                <h3>Here <font size=6>pirate</font> is singing off... Take care n keep Learning!!!</h3></div>
                                                                                                                                                                                                <footer>
                                                                                                                                                                                                    <div class=container>
                                                                                                                                                                                                        <div class=container>
                                                                                                                                                                                                            <div class=row>
                                                                                                                                                                                                                <div class="col-md-12 text-center">
                                                                                                                                                                                                                    <div class="footer_logo wow fadeInUp animated"><a href=about-me.php><i class="fa fa-user-secret fa-5x" style=color:#990000></i></a>
                                                                                                                                                                                                                        <br>© 2016 <strong>pirate</strong>
                                                                                                                                                                                                                        <br>
                                                                                                                                                                                                                        <div class="copyright_text wow fadeInUp animated">Handcrafted with <i class="fa fa-heart fa-2x" style=color:red></i> and <i class="fa fa-beer fa-2x" style=color:#FBB117></i> in India for all Enthusiastic Engineers!!</div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </footer>
                                                                                                                                                                                                <div class=section_overlay>
                                                                                                                                                                                                    <nav class="navbar navbar-default" style=margin:0>
                                                                                                                                                                                                        <div class=container>
                                                                                                                                                                                                            <div class=navbar-header>
                                                                                                                                                                                                                <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#bs-example-navbar-collapse-1> <span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            <div class="collapse navbar-collapse" id=bs-example-navbar-collapse-1>
                                                                                                                                                                                                                <ul class="nav navbar-nav navbar-right">
                                                                                                                                                                                                                    <li><a href=index.html>Home</a>
                                                                                                                                                                                                                        <li><a href=index.html>About</a>
                                                                                                                                                                                                                            <li class=dropdown>
                                                                                                                                                                                                                                <li><a href=process.html>Complete Process</a>
                                                                                                                                                                                                                                    <li><a href=registration.html>Registration</a>
                                                                                                                                                                                                                                        <li><a href=selection.html>Selection</a>
                                                                                                                                                                                                                                            <li><a href=pre-ilp.html>Pre-ILP</a>
                                                                                                                                                                                                                                                <li><a href=ilp.html>ILP</a>
                                                                                                                                                                                                                                                    <li><a href=download.html>Download</a>
                                                                                                                                                                                                                                                        <li><a href=nsr.html>NSR</a>
                                                                                                                                                                                                                                                            <li><a href=ilp-domain.html>ILP-Domain</a>
                                                                                                                                                                                                                                                                <li><a href=ilp-center.html>ILP-Center</a>
                                                                                                                                                                                                                                                                    <li><a href=documentation.html>Documentation</a>
                                                                                                                                                                                                                                                                        <li><a href=facilities.html>Salary &amp; Benefits</a>
                                                                                                                                                                                                                                                                            <li><a href=404.html>DO's &amp; Don'ts in ILP</a>
                                                                                                                                                                                                                                                                                <li><a href=404.html>Experience in ILP</a>
                                                                                                                                                                                                                                                                                    <li><a href=about-me.php>About Me</a></ul>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </nav>
                                                                                                                                                                                                                                                                            <script src=js/jquery.min.js></script>
                                                                                                                                                                                                                                                                            <script src=js/bootstrap.min.js></script>
                                                                                                                                                                                                                                                                            <script src=js/jquery.nicescroll.js></script>
                                                                                                                                                                                                                                                                            <script src=js/owl.carousel.js></script>
                                                                                                                                                                                                                                                                            <script src=js/wow.js></script>
                                                                                                                                                                                                                                                                            <script src=js/script.js></script>
                                                                                                                                                                                                                                                                        </div>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>IW Group: Multicultural Agency</title>
     <meta name="title" content="IW Group | Total Market Thought Leaders" />
    <meta name="description" content="IW Group is a multicultural marketing agency with a total market approach. IW is a leader in strategy, advertising, PR, digital and events.">
    <meta name="keywords" content="IW,advertising,Asian,PR">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="author" content="Sun Dai">
    <meta property="og:site_name" content="IW Group">
    <meta property="og:title" content="IW Group | Total Market Thought Leaders">
    <meta property="og:description" content="IW Group is a multicultural marketing agency with a total market approach. IW is a leader in strategy, advertising, PR, digital and events.">

    <link rel="stylesheet" href="stylesheets/app.css" />
    <!--with backslash in the begining, you are making files relative to root folder-->
    <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/5c5a5723-82d0-4ca5-b695-f38dcb91eca3.css"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/vendor/animate.css">
     <link rel="icon" type="image/png" href="../images/fav.png">
    <script src="bower_components/modernizr/modernizr.js"></script>
</head>

<body>
 <!--======Wrap all content in #loader and .loader-wrapper, this ends in end of footer======-->
  <div id="loader" class="loader-wrapper">
   <header>
    <div class="loader-header">
     <h1 class="loader-logo"> <!--======Logo======-->
         <?php include("images/iw-loader.svg"); ?>
     </h1><!--loader-logo-->
     <div class="loader-circle"> <!--======loading circle======-->
         <svg class="loader-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="loader-circle-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="loader-circle-circle" class="loader-circle-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
         </svg>
     </div><!--loader-circle-->
    </div><!--loader-header-->
<!--      main content     -->
      <nav class="top-bar" data-topbar role="navigation">
          <ul class="title-area">
            <a href="index.php"><li class="name"></li></a>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
         <li <?php if($active == 'work') {echo 'class="active"';} ?>><a href="work.php">Work</a></li>
         <li <?php if($active == 'clients') {echo 'class="active"';} ?>><a href="clients.php">Clients</a></li>
         <li <?php if($active == 'imprint') {echo 'class="active"';} ?>><a href="imprint.php">Imprint</a></li>
    </ul>
    <ul class="right">
              <li class="ask"><a href="#" data-reveal-id="askquestion" onclick="ga('send', 'event', 'Ask', 'AskQuestion-Click');"><span>Ask us a question</span></a></li>
    </ul>
  </section>   
        </nav>
        <!--ask question starts-->
        <div id="askquestion" class="reveal-modal" data-reveal >
            <!-- Alan changed form to form action -->
            <form action="askquestion.php" method="post">
            <!-- end -->
                <div class="row">
<!--                   <div class="large-4 columns">Question Category</div>-->
                    <div class="large-12 columns">
                            <select name="category">
                                <option value="default">Question Category</option>
                                <option value="Are you hiring?">Are you hiring?</option>
                                <option value="Would like to work together">Would you like to work together?</option>
                                <option value="I'm curious about">I'm curious about...</option>
                            </select>
                    </div>             
                </div>
                <div class="row">
                    <div class="small-12 large-4 columns">
                        <input type="text" name="Name" placeholder="Name" />
                    </div>
                    <div class="small-12 large-8 columns">
                        <input type="text" name="Email" placeholder="Email" />
                    </div>
                    <div class="large-12 columns">
                        <textarea rows="4" name="Question" placeholder="Question"></textarea>
                    </div>
                    <button type="submit" value="Send">Submit</button></a>
                </div>
            </form>
            <a class="close-reveal-modal"><i class="fa fa-times-circle-o"></i></a>
        </div>
        <!--ask question-->
        <div class="loader-main">  <!--======Wrap all content below loading screen under .loader-main ======-->

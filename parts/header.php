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
    <link rel="stylesheet" href="/stylesheets/app.css" />
    <!--with backslash in the begining, you are making files relative to root folder-->
    <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/5c5a5723-82d0-4ca5-b695-f38dcb91eca3.css"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/stylesheets/vendor/animate.css">
     <link rel="icon" type="image/png" href="/images/fav.png">
    <script src="/bower_components/modernizr/modernizr.js"></script>
</head>

<body>
  
   <header>
<!--      main content     -->
      <nav class="top-bar" data-topbar role="navigation">
          <ul class="title-area">
            <a href="/../index.php"><li class="name"></li></a>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
         <li <?php if($active == 'work') {echo 'class="active"';} ?>><a href="/../work.php">Work</a></li>
         <li <?php if($active == 'clients') {echo 'class="active"';} ?>><a href="/../clients.php">Clients</a></li>
         <li <?php if($active == 'imprint') {echo 'class="active"';} ?>><a href="/../imprint.php">Imprint</a></li>
    </ul>
    <ul class="right">
              <li class="ask"><a href="#" data-reveal-id="askquestion"><span>Ask us a question</span></a></li>
    </ul>
  </section>   
        </nav>
        <!--ask question starts-->
        <div id="askquestion" class="reveal-modal" data-reveal >
            <form>
                <div class="row">
<!--                   <div class="large-4 columns">Question Category</div>-->
                    <div class="large-12 columns">
                            <select>
                                <option value="">Question Category</option>
                                <option value="hiring">Hiring</option>
                                <option value="lorem">Lorem</option>
                                <option value="ipsum">Ipsum</option>
                                <option value="dolor">Dolor</option>
                            </select>
                    </div>             
                </div>
                <div class="row">
                    <div class="small-12 large-4 columns">
                        <input type="text" placeholder="Name" />
                    </div>
                    <div class="small-12 large-8 columns">
                        <input type="text" placeholder="Email" />
                    </div>
                    <div class="large-12 columns">
                        <textarea rows="4" placeholder="Question"></textarea>
                    </div>
                    <a href="#"><button>Submit</button></a>
                </div>
            </form>
            <a class="close-reveal-modal"><i class="fa fa-times-circle-o"></i></a>
        </div>
        <!--ask question-->
  </section>
        </nav>

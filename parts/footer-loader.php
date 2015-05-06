    <footer>
        <div class="footer-btm" id="footer">
            <div class="row">
                <div class="small-12 columns">
                    <ul>
 <li><a href="https://twitter.com/iwgroup" target="_blank" class="twitter"><i class="fa fa-twitter-square"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/IWGroup" target="_blank" class="facebook"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/iw-group-inc" target="_blank" class="linkedin"><i class="fa fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="https://instagram.com/iwgroup/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <p>2015 IW Group, Inc. All rights reserved.</p>
                <div class="small-3 columns small-centered">
                    <img src="images/parent.png">
                </div>
            </div>
        </div>
    </footer>
    </div><!--loader-main-->
</div><!--loader-wrapper-->


    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script>
    $(document).foundation('reveal',{
        animation:'fade',
        animation_speed:300,
        close_on_background_click: true
    });
    </script>
    <script src="js/classie.js"></script>
    <script src="js/pathLoader.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/app.js"></script>
<!--    <script src="/js/typed.js"></script>-->
<!--
    <script>
  $(function(){
      $(".typed").typed({
        strings: ["^1500 Get Work Done Now."],
        typeSpeed: 60,
        showCursor:false
      });
  });
</script>
-->
<script src="js/wow.js"></script>
    <script>
        var wow = new WOW(
            {
                offset:200
            });
        wow.init();
    </script>
<script>
    //smooth scrolling
    $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 800);
    return false;
});
    //sticky footer
         $(window).bind("load", function () {
        var footer = $("#footer");
        var pos = footer.position();
        var height = $(window).height();
        height = height - pos.top;
        height = height - footer.height();
        if (height > 0) {
            footer.css({
                'margin-top': height + 'px'
            });
        }
    });
</script>

<!-- Google Analytics Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43561003-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Analytics Code End -->


</body>

</html>

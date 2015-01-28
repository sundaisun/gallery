    <footer>
        <div class="footer-btm" id="footer">
            <div class="row">
                <div class="small-12 columns">
                    <ul>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter-square"></i></a>
                        </li>
                        <li><a href="#" class="facebook"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <p>2015 IW Group, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>


    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/foundation/js/foundation.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/wow.js"></script>
    <script>
        var wow = new WOW(
            {
                offset:200
            });
        wow.init();
    </script>
   
<script>
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
</body>

</html>

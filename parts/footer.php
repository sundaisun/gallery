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
    $(document).foundation('reveal',{
        animation:'fade',
        animation_speed:300,
        close_on_background_click: true
    });
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
<script src="/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
<script>
$(document).ready(function() {
  $.simpleWeather({
    location: 'Los Angeles, CA',
    woeid: '',
    unit: 'f',
    success: function(weather) {
      html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
  
      $("#weather-la").html(html);
    },
    error: function(error) {
      $("#weather-la").html('<p>'+error+'</p>');
    }
  });

  $.simpleWeather({
    location: 'San Francisco, CA',
    woeid: '',
    unit: 'f',
    success: function(weather) {
      html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
  
      $("#weather-sf").html(html);
    },
    error: function(error) {
      $("#weather-sf").html('<p>'+error+'</p>');
    }
  });

  $.simpleWeather({
    location: 'New York, NY',
    woeid: '',
    unit: 'f',
    success: function(weather) {
      html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
  
      $("#weather-ny").html(html);
    },
    error: function(error) {
      $("#weather-ny").html('<p>'+error+'</p>');
    }
  });
    
});
</script>

</body>

</html>

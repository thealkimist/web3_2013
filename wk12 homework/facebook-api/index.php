<!DOCTYPE>
<html>
  <head>
      <title>Facebook! The Web Site!</title>
  </head>

  <body>

      <div id="fb-root"></div>

          <script>
          window.fbAsyncInit = function() {
            // init the FB JS SDK
            FB.init({
              appId      : '440888549349592',                        // App ID from the app dashboard
              channelUrl : '//kimbab.local/facebook-api/channel.html', // Channel file for x-domain comms
              status     : true,                                 // Check Facebook Login status
              xfbml      : true                                  // Look for social plugins on the page
            });

            // Additional initialization code such as adding Event Listeners goes here
          };

          // Load the SDK asynchronously
          (function(){
             // If we've already installed the SDK, we're done
             if (document.getElementById('facebook-jssdk')) {
              return;
            }

             // Get the first script element, which we'll use to find the parent node
             var firstScriptElement = document.getElementsByTagName('script')[0];

             // Create a new script element and set its id
             var facebookJS = document.createElement('script'); 
             facebookJS.id = 'facebook-jssdk';

             // Set the new script's source to the source of the Facebook JS SDK
             facebookJS.src = '//connect.facebook.net/en_US/all.js';

             // Insert the Facebook JS SDK into the DOM
             firstScriptElement.parentNode.insertBefore(facebookJS, firstScriptElement);
           }());
          </script>

          <h1>HELLLOOOOOO</h1>

        <div id = "login">
          <a href ="#">Login to the Data Collector</a>
        </div>

        <div id = "logged-in" class = "hide">
            <h1>Username Will Go Here</h1>
            <div class = "profile-photo">
              <img src = "http://graph.facebook.com/iamalbert/picture" />
        </div>

        <div id = "status"></div>

        </div>



      </body>

      <script type = "text/javascript" src = "js/main.js"></script>

</html>
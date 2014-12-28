<html>
<head>
<!-- Latest compiled and minified bootstrap/3.2.0/css/bootstrap.min.css CSS -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="extra_style.css">
</head>
<body>
<div id="menu">

</div>

<h1>My Beer Find Me Project</h1>
Beer Find Me is my project to make beers find me. Data is provided by untapped. An API call and parse and match and API call and I get a tweet telling me where the beer I am looking for is. The beer finds me via untapped data and twitter. <br><br>
This is of course limited to the data that untapped users provide. The check ins must have a venue for example.
<br>
<br>
Current build is beta testers only. <a href="user_login_session.php">login</a>
<br>
Some beta testers have already been selected as have cities.
<br>
<br>
After all that I might make this page pretty.<br><br>
Below are the tweets that go out to update testers.
<br><br>
<a class="twitter-timeline" href="https://twitter.com/beerfind" data-widget-id="504869339829252096">Tweets by @beerfind</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<br><br>
<h2>Current State:</h2>
Untapped API call is made on the half hour. Should there be a match for a specific beer name associated with a specific user, said user will get a tweet. Below are some goals I would like to hit.<br>
<br>
<div id="hourcall">Untapped API call is made on the hour.</div>
<div id="halfhourcall">Untapped API call is made on the hour.</div>
<div id="sign">Sign in, Log in, and setting pages: In progress</div>
<div id="multi_beer">Multiple beer search: Not yet</div>
<div id="multi_city">Multiple cities: In Progress</div>
<div id="brewery_search">Search for a brewery: In progress</div>
<div id="multi_results">Multiple results page creation: Not yet</div>
<div id="tweet_handle">Better handling for tweet that are over 140 char: woking on that</div>
<div id="public">Open to public: No</div>
<div id="pettypretty">Make home page pretty: someday</div>
<br><br>
Current kinks:
<div id="store_time">Store time of update</div>
<div id="call_time">Set API call to certain times and or accounts to specific hours</div>


<br><br>
<hr>
Thank you Untapped and the users that provide the data.
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>
		Streams
	</title>
	<script type="text/javascript">
	$(document).ready(function()     
  	{
  		var tweets;
  		$.ajax({
       url: '/Get_Tweet',
       type: 'get',
       dataType: 'json',
	   success: function(data, text) {
	        tweets = data['tweets'];
	        tweets = tweets['statuses'];
	        console.log(tweets);
	   },
       error: function (XMLHttpRequest, textStatus, errorThrown) 
       {
         alert("error");
       }});
  	})
		
	</script>
</head>
<body>
	<center><h1>Tweets</h1></center>


</body>
</html>
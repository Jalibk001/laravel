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
  		$('#div_id').click(function(){
       	a=document.getElementById("dt");
       	console.log(a);
       })		
  	   $.ajax({
       url: '/Get_Tweet',
       type: 'get',
       dataType: 'json',
	   success: function(data, text) {
	   	var tweets;
  		var user;
  		var img_url;
  		var tweet;	        		        	
        tweets = data['tweets'];
        tweets = tweets['statuses'];
        for(var i=0;i<tweets.length;i++)
        {
        	user = tweets[i].user;

        	tweet = tweets[i].text;
        	img_url = user['profile_image_url'];
        	user = user['name'];
        	var div = document.createElement("div");
			div.innerHTML="<img src = "+img_url+" width='80px' height = '80px'> <b>"+user +"</b> <br/><b>"+tweet+" </b><br/>";
			document.getElementById("div_id").appendChild(div);	
        }
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
	<form id="dt">
		<input type="text" name="search"/>
		<button id="sr">Search</button>
		</form>
<p id="div_id"></p>

</body>
</html>
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
	<style type="text/css">
		.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>

</head>
<body>
	<center><h1>Tweets</h1></center>
<div class="topnav">
  <div class="search-container">
    <form >
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
<p id="div_id"></p>

</body>
</html>
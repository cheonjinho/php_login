<!DOCTYPE html>
<html>
<head>
	<title>Php Project</title>
	<link rel="stylesheet" href="/assets/stylesheet/application.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
	<div class="head-area">
		header 입니다.
		<button style="float:right; z-index: 10;" id="head-call-login">login</button>
	</div>

	<div class="head-login-area">
		<div id="head-login-form"></div>
	</div>
</body>


<script>

	$('#head-call-login').on('click', function(){
		$.ajax({
			url: '/users/login',
			dataType: "html",
			success : function(data) {
				$('.head-login-area').show();
				$('#head-login-form').html(data);
			}
		});
	})
	
</script>

</html>
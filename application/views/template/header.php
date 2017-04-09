<!DOCTYPE html>
<html>
<head>
	<title>Php Project</title>
	<link rel="stylesheet" href="/assets/stylesheet/application.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
	<div class="head-area">
		<div class="head-action-login">
			<div id="head-call-guide">이용방법</div>
			
			<? if(isset($_SESSION['loggedin'])){ ?>
				<div id="head-call-login">안녕하세요 <?php echo $user['username']; ?></div>
			<? } else { ?>
				<div id="head-call-login"><a href="<?php echo base_url(); ?>users/login">로그인</a></div>
				<div id="head-call-registration"><a href="<?php echo base_url(); ?>users/registration">회원가입</a></div>
			<? } ?>
		</div>		
	</div>

	<div class="head-login-area">
		<div id="head-login-form"></div>
	</div>
</body>


<script>

	// $('#head-call-login').on('click', function(){
	// 	$.ajax({
	// 		url: '/users/login',
	// 		dataType: "html",
	// 		success : function(data) {
	// 			$('.head-login-area').show();
	// 			$('#head-login-form').html(data);
	// 		}
	// 	});
	// });

	// $(document).on('click', function(){
	// 	console.log($(this).prop('className'));
	// });
	
</script>

</html>
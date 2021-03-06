<div class="container">
	<div class="row">
		<div class="col-md-6 col-lg-6 loginForm">
			<label>LOGIN</label>
			<form action="<?php echo base_url('Login/checkLogin'); ?>" method="POST" id="loginForm">
                <span>E-Mail</span>
				<input type="text" name="email" placeholder="Email" id="checkEmail" maxlength="50" required />
                <span>Password</span>
				<input type="text" name="password" placeholder="Password" maxlength="50" required />
				<button type="submit" id="loginFormButton">Submit</button>
			</form>
			<span id="wrongEmailOrPassword"></span>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
        $("#loginForm").on('submit', function (e)
        {
            var postData = $(this).serializeArray();
            var formURL = $(this).attr("action");
            $.ajax(
                    {
                        url: formURL,
                        type: "POST",
                        data: postData,
                        success: function (data, textStatus, jqXHR)
                        {
							if(data == 'Yes') {
                                var url = '<?php echo base_url('Admin') ?>';
                                $(location).attr('href',url);
                                /*
                                setInterval(function(){ 
                                    var url = '<?php echo base_url('Admin') ?>';
                                    $(location).attr('href',url);
							    }, 100);
                                */
                            } else {
                                $('#wrongEmailOrPassword').html(data)
                                /*
                                setInterval(function(){ 
                                    $('#wrongEmailOrPassword').html(data)
							    }, 5000); 
                                */ 
                            }
								
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            $('#wrongEmailOrPassword').html('Error..')
                        }
                    });
            e.preventDefault(); //STOP default action
        });
    });
</script>

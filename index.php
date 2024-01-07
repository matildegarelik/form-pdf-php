<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta id="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<style>
	body {
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 800px;
		margin: 0 auto;
		padding: 30px 0;
	}

	.signup-form h1{
		color: #3FB5FF;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
	.signup-form p{		
		text-align: left;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  

	button * {
    pointer-events: none;
    }
    .loading {
    opacity: .5;
    } 
    #loading-mask {
        position: fixed;
        z-index: 1051;
        width: 100%;
        height: 100%;
        top: 0px;
        left: 0px;
        background-color: rgba(200,200,200,0.8);
		display:none;
    }
</style>
</head>
<body>
<div class="signup-form">
    <form action="send_mail.php" method="POST" id="form">
		<div class="container-fluid">
			<div>
				
			</div>
			<div class="alert alert-primary" role="alert" style="display:false" id="dvMessage">
                <span id="lblMessage" style="color:#a4345d;font-weight:bold;font-size:20px;" ></span>
            </div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="first_name">First Name</label>
						<input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" required>
					</div>
					<div class="col-md-6">
						<label for="last_name">Last Name</label>
						<input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">					
					<div class="form-group">
						<label class="checkbox-inline">
							<input type="checkbox" id="chkAka" >Do they use another name in the paperwork? If yes, what is that name?
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">						
						<label for="first_name">Customer AKA - First Name</label>
						<input type="text" class="form-control" id="first_name_aka" name="first_name_aka" placeholder="First Name AKA" >
					</div>
					<div class="col-md-6">
						<label for="last_name">Customer AKA - Last Name</label>
						<input type="text" class="form-control" id="last_name_aka" name="last_name_aka" placeholder="Last Name AKA" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="email">Email Id</label>
						<input type="email" required class="form-control" id="email" placeholder="Email" 
							pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$/" name="email" required/>
					</div>
					<div class="col-md-6">
						<label for="phone">Phone Number</label>
						<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="street_address">What is your Street Address</label>
        		<input type="text" class="form-control" id="street_address" name="street_address" placeholder="Street Address" >
			</div>
			<div class="form-group">
				<label for="city_address">What is your City Address</label>
				<input type="text" class="form-control" id="city_address" name="city_address" placeholder="City Address" >
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="zip_code">What is your state address</label>
						<input type="text" class="form-control" id="state_address" name="state_address" placeholder="State Address" >
					</div>				
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="zip_code">What is your Zip Code</label>
						<input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code" >
					</div>				
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="county">What county is the case in</label>
						<input type="text" class="form-control" id="county" name="county" placeholder="County" >
					</div>
				</div>
			</div>
			<hr style="color:dimgrey"/>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="court_name">What is the court name</label>
						<input type="text" class="form-control" id="court_name" name="court_name" placeholder="Court Name" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="court_street_address">What is the court’s street address</label>
						<input type="text" class="form-control" id="court_street_address" name="court_street_address" placeholder="court’s street address" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="court_city_address">What is the court’s city address</label>
						<input type="text" class="form-control" id="court_city_address" name="court_city_address" placeholder="court’s city address" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="court_zip_code">What is the court’s zip code</label>
						<input type="text" class="form-control" id="court_zip_code" name="court_zip_code" placeholder="court’s zip code" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="case_number">What is the case number</label>
						<input type="text" class="form-control" id="case_number" name="case_number" placeholder="case number" >
					</div>
					<div class="col-md-6">
						<label for="plaintiff_name">What is the name of the Plaintiff</label>
						<input type="text" class="form-control" id="plaintiff_name" name="plaintiff_name" placeholder="Plaintiff Name" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="Plaintiff_law_firm_name">What is the name if the Plaintiff’s law firm</label>
						<input type="text" class="form-control" id="Plaintiff_law_firm_name" name="plaintiff_law_firm_name" placeholder="Plaintiff’s law firm name" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="law_firm_street_address">What is the law firm’s street addresss</label>
						<input type="text" class="form-control" id="law_firm_street_address" name="law_firm_street_address" placeholder="law firm’s street address" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="law_firm_city_address">What is the law firm’s city address</label>
						<input type="text" class="form-control" id="law_firm_city_address" name="law_firm_city_address" placeholder="law firm’s city address" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="law_firm_state_address">What is the law firm’s state address</label>
						<input type="text" class="form-control" id="law_firm_state_address" name="law_firm_state_address" placeholder="law firm’s state address" >
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="law_firm_zip_code">What is the law firm’s zip code</label>
						<input type="text" class="form-control" id="law_firm_zip_code" name="law_firm_zip_cod" placeholder="law firm’s zip code" >
					</div>
				</div>
			</div>			
			<div class="form-group">
				<!-- <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button> -->
				<input id="btnSave" type="submit" class="w-50 btn btn-warning btn-lg align-center" onclick="RegisterCase();" value="SUBMIT" />
				<input type="hidden" name="submit-btn" >
                <input id="Button1" type="button" class="btn btn-warning btn-lg align-center" value="CANCEL" />
			</div>
	</form>

	<div>
        <div id="loading-mask" class="container-fluid"><div class="row" style="height:100%;"><div id="spinner" class="col d-flex align-items-center justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;display:block;" width="60px" height="60px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" alt="spinner loading icon" class="img-fluid my-auto"><g transform="translate(78,50)"><g transform="rotate(0)"><circle cx="0" cy="0" r="6" fill="#522994" fill-opacity="1"><animateTransform attributeName="transform" type="scale" begin="-1.75s" values="1.6600000000000001 1.6600000000000001;1 1" keyTimes="0;1" dur="2s" repeatCount="indefinite"></animateTransform><animate attributeName="fill-opacity" keyTimes="0;1" dur="2s" repeatCount="indefinite" values="1;0" begin="-1.75s"></animate></circle></g></g><g transform="translate(69.79898987322333,69.79898987322332)"><g transform="rotate(45)"><circle cx="0" cy="0" r="6" fill="#522994" fill-opacity="0.875"><animateTransform attributeName="transform" type="scale" begin="-1.5s" values="1.6600000000000001 1.6600000000000001;1 1" keyTimes="0;1" dur="2s" repeatCount="indefinite"></animateTransform><animate attributeName="fill-opacity" keyTimes="0;1" dur="2s" repeatCount="indefinite" values="1;0" begin="-1.5s"></animate></circle></g></g><g transform="translate(50,78)"><g transform="rotate(90)"><circle cx="0" cy="0" r="6" fill="#522994" fill-opacity="0.75"><animateTransform attributeName="transform" type="scale" begin="-1.25s" values="1.6600000000000001 1.6600000000000001;1 1" keyTimes="0;1" dur="2s" repeatCount="indefinite"></animateTransform><animate attributeName="fill-opacity" keyTimes="0;1" dur="2s" repeatCount="indefinite" values="1;0" begin="-1.25s"></animate></circle></g></g><g transform="translate(30.201010126776673,69.79898987322333)"><g transform="rotate(135)"><circle cx="0" cy="0" r="6" fill="#522994" fill-opacity="0.625"><animateTransform attributeName="transform" type="scale" begin="-1s" values="1.6600000000000001 1.6600000000000001;1 1" keyTimes="0;1" dur="2s" repeatCount="indefinite"></animateTransform><animate attributeName="fill-opacity" keyTimes="0;1" dur="2s" repeatCount="indefinite" values="1;0" begin="-1s"></animate></circle></g></g><g transform="translate(22,50)"><g transform="rotate(180)"><circle cx="0" cy="0" r="6" fill="#522994" fill-opacity="0.5"><animateTransform attributeName="transform" type="scale" begin="-0.75s" values="1.6600000000000001 1.6600000000000001;1 1" keyTimes="0;1" dur="2s" repeatCount="indefinite"></animateTransform><animate attributeName="fill-opacity" keyTimes="0;1" dur="2s" repeatCount="indefinite" values="1;0" begin="-0.75s"></animate></circle></g></g><g transform="translate(30.201010126776666,30.201010126776673)"><g transform="rotate(225)"><circle cx="0" cy="0" r="6" fill="#522994" fill-opacity="0.375"><animateTransform attributeName="transform" type="scale" begin="-0.5s" values="1.6600000000000001 1.6600000000000001;1 1" keyTimes="0;1" dur="2s" repeatCount="indefinite"></animateTransform><animate attributeName="fill-opacity" keyTimes="0;1" dur="2s" repeatCount="indefinite" values="1;0" begin="-0.5s"></animate></circle></g></g><g transform="translate(49.99999999999999,22)"><g transform="rotate(270)"><circle cx="0" cy="0" r="6" fill="#522994" fill-opacity="0.25"><animateTransform attributeName="transform" type="scale" begin="-0.25s" values="1.6600000000000001 1.6600000000000001;1 1" keyTimes="0;1" dur="2s" repeatCount="indefinite"></animateTransform><animate attributeName="fill-opacity" keyTimes="0;1" dur="2s" repeatCount="indefinite" values="1;0" begin="-0.25s"></animate></circle></g></g><g transform="translate(69.79898987322332,30.201010126776666)"><g transform="rotate(315)"><circle cx="0" cy="0" r="6" fill="#522994" fill-opacity="0.125"><animateTransform attributeName="transform" type="scale" begin="0s" values="1.6600000000000001 1.6600000000000001;1 1" keyTimes="0;1" dur="2s" repeatCount="indefinite"></animateTransform><animate attributeName="fill-opacity" keyTimes="0;1" dur="2s" repeatCount="indefinite" values="1;0" begin="0s"></animate></circle></g></g></svg></div></div></div>
    </div>
	</div>
	<script type="text/javascript">
		$('#form').submit(function (e) {
			e.preventDefault(); 
			$('#loading-mask').css("display","block")
			//console.log($(this).serialize())
			$.ajax({
				url: 'send_mail.php',
				method: 'POST',
				data: $(this).serialize(),
				success: function (response) {
					alert(response)
					$("#form :input").val("");
					$('#loading-mask').css("display","none")
				},
				error: function (error) {
					console.log(error)
				}
			});
		});
	</script>
</body>

</html>
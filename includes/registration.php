<!DOCTYPE html>
<html>
<head>
    <?php include_once('includes/head.html'); ?>

</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Registration Form</div>
				<div class="panel-body">
					<form role="form" id="issue_form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Student No" name="email" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Firstname" name="email" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Middlename" name="email" type="text" autofocus="">
							</div>
								<div class="form-group">
								<input class="form-control" placeholder="Lastname" name="email" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<button class="btn btn-primary" id="btnsubmit" >Register</button>
                        </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
<script>
        $('#btnsubmit').click(function(){
			alert("hello");


            // var job_order = $('#job-order').val();
            // var requested_by = $('#requested-by').val();
            // var office = $('#office').val();
            // var date_started = $('#date-started').val();  
            // var issue_cat = $('#issues').val();    
            // var main_issue = $('#issue-1').val();
            // var other_issue = $('#issue-2').val();
            // var client = $('#client').val();
            // var school = $('#school').val();


            // var formValues = $("#issue_form").serialize();
            // console.log(formValues);
            // var jsonString = JSON.stringify(yourArray);
            // console.log(jsonString)
            // $.ajax({
                // url: "https://johnrayopulento.000webhostapp.com/deped/insert.php?issues="+yourArray,
                // method: "POST",
                // data:{job_order: job_order, requested_by: requested_by, office:  office, issue_cat: issue_cat, main_issue: main_issue, other_issue: other_issue , client: client, school: school
                 // },
                // success: function(result){
                    // alert(result);
                    // //location.reload();
                    // location.reload();
                // },
                // error: function(xhr){
                    // alert("errror" +xhr.responseText);
                   // location.reload();
                    // // alert("THERE IS SOME ERROR");
                // }
         
            // })
         
        });
</script>
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

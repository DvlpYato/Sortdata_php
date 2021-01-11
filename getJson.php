<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$("#btn1").click(function(){
			$.ajax({ 
				url: "resultMySQL.php" ,
				type: "POST",
				data: 'keyword=' +$("#txtCountryCode").val()
			})
			.success(function(result) { 

					$("#div1").empty();

				var obj = jQuery.parseJSON(result);
				  $.each(obj, function(key, val) {

					   $("#div1").append('<hr />');
					   $("#div1").append('[' + key + '] ' + 'CustomerID=' + val["CustomerID"] +'<br />');
					   $("#div1").append('[' + key + '] ' + 'Name=' + val["Name"] +'<br />');
					   $("#div1").append('[' + key + '] ' + 'Email=' + val["Email"] +'<br />');
					   $("#div1").append('[' + key + '] ' + 'CountryCode=' + val["CountryCode"] +'<br />');
					   $("#div1").append('[' + key + '] ' + 'Budget=' + val["Budget"] +'<br />');
					   $("#div1").append('[' + key + '] ' + 'Used=' + val["Used"] +'<br />');

				  });

			});

		});
	});
</script>
</head>
<body>
Search Customer (CountryCode)
<input type="text" id="txtCountryCode">
<input type="button" id="btn1" value="Search">
<div id="div1"></div>

</body>
</html>
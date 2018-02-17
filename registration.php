<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/scrollbar.css">
<link rel="stylesheet" href="css/social_links.css">
<link rel="stylesheet" href="css/footer.css">
<title>Untitled Document</title>

<style>
	table {
		/*border:1px solid black;	
		border-collapse:collapse;*/
		position:relative;
		top:30px;
		max-width:500px;
		margin:0 auto;
	}
	
	tr {
		/*border:1px solid black;	*/display:block;
	}
	
	td {
		padding:5px 10px;	
		position:relative;
	}
	
	td.col1 {
		/*border:1px solid black;	*/
		width:150px;
		text-align:left;
	}
	
	.col1 strong {
		/*margin-right:10px;	*/
		color:#145A32;
	}
	
	/*.col2 input {
		margin-left:10px;
	}*/
	
	td.col2 {
		/*border:1px solid black;	*/
		width:350px;
	}
	
	.bcRow,.nidRow {
		display:none;	
	}
	
	.navbar {
		position:fixed;
		width:100%;
	}
	
	form {
		padding:70px 0px;	
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>


  <!------------START: SOCIAL LINKS------------->
  <?php include_once("social_links.php"); ?>
  <!------------END: SOCIAL LINKS------------->

	<!-----------START: NAVBAR------->
    <?php include_once("navbar.php"); ?>
    <!-----------END: NAVBAR------->
    
    
    
    <form class="regForm">
    	
        <h2 class="text-center" style="color:#145A32;"><strong>Participant Registration</strong></h2>
        <h4 class="text-center" style="color:#145A32;">(Type)</h4>
        
        <table>
        	
            
            <tr>
            	<td class="col1"><strong>Name:</strong></td>
                <td class="col2"><input type="text" name="name" class="form-control" id="nameId"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>NID/Birth Certificate:</strong></td>
                <td class="col2">
                	<label class="radio-inline text-success"><input type="radio" name="optradio" onChange="showNid()">NID</label>
					<label class="radio-inline text-success"><input type="radio" name="optradio" onChange="showBc()">Birth Certificate</label>
                </td>
            </tr>
            
            
            <!---------START: Show NID/BC---------->
            <script>
            	function showNid() {
					document.getElementById("bcRowId").style.display = 'none';
					$("#nidRowId").slideDown('slow');
				}
				
				function showBc() {
					document.getElementById("nidRowId").style.display = 'none';
					$("#bcRowId").slideDown('slow');
				}
            </script>
            <!---------END: Show NID/BC---------->
            
            <tr class="nidRow" id="nidRowId">
            	<td class="col1"><strong>NID:</strong></td>
                <td class="col2"><input type="text" name="nid" class="form-control" id="nidId"></td>
            </tr>
            
            <tr class="bcRow" id="bcRowId">
            	<td class="col1"><strong>Birth Certificate:</strong></td>
                <td class="col2"><input type="text" name="bc" class="form-control" id="bcId"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>Email:</strong></td>
                <td class="col2"><input type="eamil" name="email" class="form-control" id="emailId"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>Blood Group:</strong></td>
                <td class="col2"><input type="text" name="bg" class="form-control" id="bgId"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>Transaction ID:</strong></td>
                <td class="col2"><input type="text" name="t_id" class="form-control" id="t_idId"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>University:</strong></td>
                <td class="col2"><input type="text" name="uni" class="form-control" id="uniId"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>Department:</strong></td>
                <td class="col2"><input type="text" name="dept" class="form-control" id="deptId"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>Semester/Year:</strong></td>
                <td class="col2"><input type="number" name="sy" class="form-control" id="syId" min="1"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>University Roll:</strong></td>
                <td class="col2"><input type="text" name="uni_roll" class="form-control" id="uniRollId"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>Team Name:</strong></td>
                <td class="col2"><input type="text" name="tn" class="form-control" id="tnId"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong>Contact No:</strong></td>
                <td class="col2"><input type="text" name="cn" class="form-control" id="cnId"></td>
            </tr>
            
            <tr>
            	<td class="col1"><strong style="position:absolute;top:10px;left:10px;">T-shirt Size:</strong></td>
                <td class="col2">
                    <div class="radio">
                    	<label><input type="radio" name="optradio">Small</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">Medium</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">Large</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">Extra Large</label>
                    </div>
                </td>
            </tr>
            
            <tr>
            	<td class="col1"><strong style="position:absolute;top:10px;left:10px;">Type:</strong></td>
                <td class="col2">
                    <div class="radio">
                    	<label><input type="radio" name="optradio">রঙ মেশালি</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">কুইজ প্রতিযোগিতা</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">PhotoTale Competition</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">তৈল চিত্র প্রতিযোগিতা</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">গল্প পূরণ</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">বাংলা সাহিত্য অলিম্পিয়াড</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">স্বল্প দৈর্ঘ্য চলচ্চিত্র প্রতিযোগিতা</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">Cultural Case Competition</label>
                    </div>
                    <div class="radio">
                    	<label><input type="radio" name="optradio">কথোপকথন</label>
                    </div>
                </td>
            </tr>
            
            <tr>
            	<td class="col1"></td>
            	<td class="col2">
                	<button type="button" class="btn btn-primary btn-lg">Submit</button>
                </td>
            </tr>
            
            
        </table>
        
    </form>
    
    <?php include_once("footer.php"); ?>

</body>
</html>
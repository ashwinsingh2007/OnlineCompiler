<?php
/*session_start();
if(!isset($_SESSION['username']))
{header('Location:../index.php');}*/
?>
<html>
	<head>
		<title>Online Compiler</title>
			
			<link rel="shortcut icon" href="../styles/favicon.ico" />
			<link rel="stylesheet" type="text/css" href="../styles/style.css" />		
		
			<script type="text/javascript" src="../js/jquery.js"></script>
			<script type="text/javascript" src="../js/compile.js"></script>
			<script type="text/javascript" src="../js/tab.js"></script>
			<script type="text/javascript" src="../js/jquery.form.js"></script>
			<script type="text/javascript">
				$(document).ready(function() { 
					$('#form2').ajaxForm(function(msg) { 
						$('#output2').html(msg); 
					}); 
                                        
				});
			</script>
	</head>

	<body>
	<div id="whole">
		<div id="header">
			
			
		</div>
		<div id="content">
			
			<table class="code">
				<td class="code">	
				<form action="compile.php" method="post" id="form">
					Select Language :
						<select name="language" id="language">
							<option value="c">C</option>
							<option value="cpp">C++</option>
							<option value="java">Java</option>
							<option value="python2.7">Php</option>
							<option value="python3.2">Python</option>
						</select>
					<br />
					<strong>Enter Your code here:<br/></strong>
					<textarea name="code" rows=15 cols=100 onkeydown= insertTab(this,event) id="code"></textarea><br/>
					<span id="errorCode" class="error"></span><br/><br/>
					<strong>Sample Input please:<br/></strong>
					<textarea name="input" rows=7 cols=100 id="input"></textarea><br/><br/>
					<input type="submit" value="Submit" id="submit">
					<input type="reset" value="Reset"><br/>
				</form>
				</td>
				<td class="code">
				<p>
				Upload source code file - </p>
				<form action="compile.php" method="post" enctype="multipart/form-data" id="form2">
					
					<label for="file">Filename:</label>
					<input type="file" name="file" id="file" /> 
					<br />
					<input type="submit" name="submit" value="Submit" />
					<input type="reset" value="Reset"><br/>
				</form>
			</td>
			<tr>
			<td class="code"><strong>Output:</strong>
			<span id="output"></span><br/></td>
			<td class="code"><strong>Output:</strong>
			<span id="output2"></span><br/></td>
			</tr>
		</div>
		<table>
		<div id="bottom">
			
		</div>
		</table>
	</div>
	
	</body>
</html>

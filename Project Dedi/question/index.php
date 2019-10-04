<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>
</head>
<body>

	<div class="header">
		<img src="img/head.png">
		
	</div>
	
<!-- section 1-->
	<div class="container">
	<h1>UTMS-Module Evaluation</h1>
	
	<table border="1" class="table-hover tbl-style">
		<thead>
			<tr>
				<td class="col1 sec">Section 1: General</td>
			</tr>
			<tr>
				<td class="col1 sub">1.1 General questions concerning the module</td>
			</tr>
			<tr>
				<td class="colgr" colspan="11">On a scale between 1 (strongly dissatisfied) to 10  (strongly satisfied) how would you rate these subjects below? </td>
			</tr>
			<tr>
				<td class="col1" rowspan="2"></td>
				<td class="col2">Strongly dissatisfied </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly satisfied </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>	
		</thead>
		<tbody>
			<tr>
			<td class="col1">1. Overall module</td>
				<form action="add-process.php" method="POST" >
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>


					<input type="submit" value="submit">
				</form>

				
			
				
			</tr>
			<tr>
				<td>2. Module organization</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>3. Module Coordinator</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
	
		</tbody>
		
		
	</table>
	<br>
	4. Please provide us with any additional (constructive) feedback on the general questions above<br>
		<textarea  name="comment">Enter text here...</textarea>
	<br>
	<br>
	<!-- section 2.1.1-->
	<table border="1" class="table-hover">
		<thead>
			<tr>
				<td class="col1 sec">Section 2: Academic - Educational activities</td>
			</tr>
			<tr class="col1 sub">
				<td>2.1 Lectures/workshops/masterclasses </td>
			</tr>
			<tr>
				<td class="colgr" colspan="11">On a scale between 1 (strongly disagree) to 10 (strongly agree) how would you rate these subjects below? </td>
			</tr>
			<tr>
				<td class="col1" rowspan="2">1. The lecture/workshop/masterclass is clear </td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>

			</tr>	
		</thead>
		<tbody>
			<tr>
				<td>Title lecture/workshop/masterclass</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Title lecture/workshop/masterclass</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Title lecture/workshop/masterclass</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
			
				</form>
			</tr>
		</tbody>
	</table>
	<!--section 2.1.2-->
	<table border="1" class="table-hover">
		<br>
		<thead>
			<tr>
				<td class="col1" rowspan="2">2. The lecture/workshop/masterclass is relevant</td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Title lecture/workshop/masterclass</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Title lecture/workshop/masterclass</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Title lecture/workshop/masterclass</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
		</tbody>

	</table>
<!--section 2.1.3-->
	<table border="1" class="table-hover">
		<br>
		<thead>
			<tr>
				<td class="col1" rowspan="2">3. The facilitator delivers the material efficiently </td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td >Title lecture/workshop/masterclass + name facilitator</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Title lecture/workshop/masterclass + name facilitator</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
			  	</form>
				
			</tr>
			<tr>
				<td>Title lecture/workshop/masterclass + name facilitator</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
		</tbody>
	</table>
	<br>
	<br>
	<!-- section 2.2.1-->
	<table border="1" class="table-hover">		
		<thead>
			<tr>
				<td class="col1 sub">2.2 PBL/CBL/EMBL </td>
			</tr>
			<tr>
				<td class="colgr" colspan="11">On a scale between 1 (strongly disagree) to 10 (strongly agree) how would you rate these subjects below?  </td>
			</tr>
			<tr>
				<td rowspan="2"></td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>				
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="col1" >1. The problems/cases are relevant to the industry </td>
				<form>

					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
				
		</tbody>
	</table>
	
	<!--section 2.2.2-->
	
	<table border="1" class="table-hover">
		<br>
		<thead>
			<tr>
				<td rowspan="2"></td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tboy>
			<tr>
				<form>
					<td class="col1">2. The problems/cases  are related to the module theme </td>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
			</tr>		
		</tboy>
	</table>

<!--section 2.2.3-->
	
	<table border="1" class="table-hover">
		<br>
		<thead>
			
			<tr>
				<td class="col1" rowspan="2">3. The facilitator supports the overall learning process </td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<td>Name facilitator</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Name facilitator</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Name facilitator</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
		</tbody>
	</table>

	<!--section 2.2.4-->
	<table border="1" class="table-hover">
		<br>
		<thead>
			<tr>
				<td class="col1" rowspan="2">4. The facilitiator provides constructive feedback</td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Name facilitator - PBL Group/CBL Group/EMBL Group</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Name facilitator - PBL Group/CBL Group/EMBL Group</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Name facilitator - PBL Group/CBL Group/EMBL Group</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
			
				</form>
			</tr>
		</tbody>
	</table>

	<!--section 2.3.1-->
	<table border="1" class="table-hover">
		<br>
		<thead>
			<tr>
				<td class="col1 sub">2.3 Coaching/ consultation</td>
			</tr>
			<tr>
				<td class="colgr" colspan="11">On a scale between 1 (strongly disagree) to 10 (strongly agree) how would you rate these subjects below?  </td>
			</tr>
			<tr>
				<td class="col1" rowspan="2">1. The coach/tutor supports the overall learning process</td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Name coach/ tutor</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Name coach/ tutor</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Name coach/ tutor</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
			</tr>
		</tbody>
	</table>
	<!--section 2.4.1-->
	<table border="1" class="table-hover">
		<br>
		<thead>
			<tr>
				<td class="col1 sub">2.4 Fieldtrip</td>
			</tr>
			<tr>
				<td class="colgr" colspan="11">On a scale between 1 (strongly disagree) to 10 (strongly agree) how would you rate these subjects below?  </td>
			</tr>
			<tr>
				<td class="col1" rowspan="2">1. The fieldtrip(s) support(s) the overall learning process</td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Name fieldtrip</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Name fieldtrip</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>	
			<tr>
				<td>Name fieldtrip</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
			</tr>
		</tbody>
	</table>

		<!--section 2.4.2-->
	
	<table border="1" class="table-hover">
		<br>
		<thead>
			<tr>

				<td class="col1" rowspan="2">2. The fieldtrip(s) was/were well organized </td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Name fieldtrip</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
			</form>
				
			</tr>
			<tr>
				<td>Name fieldtrip</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
			<tr>
				<td>Name fieldtrip</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
			</tr>
		</tbody>
	</table>

	<br>
	3. Please provide additional (constructive) feedback on educational activities (Lecture, Workshop, Materclass, PBL, EMBL, CBL, Coaching & Fieldtrips)<br>
	<textarea rows="4" cols="50" name="comment">Enter text here...</textarea>
	<br>
	<br>
<!--section 2.4.1-->
	<table border="1" class="table-hover">
		<thead>
			
			<tr >
				<td class="col1">Section 2.4 Academic Support</td>
			</tr>
			<tr>
				<td class="colgr" colspan="11">On a scale between 1 (strongly disagree) to 10 (strongly agree) how would you rate these subjects below?  </td>
			</tr>
			<tr>
				<td rowspan="2"></td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
		
			<tr>
				<td class="col1">1. The module book is informative</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
		</tbody>
			
	</table>

<!--section 2.4.2-->
	<table border="1" class="table-hover">
		<br>
		<thead>
			<tr>
				<td rowspan="2"></td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="col1">2. Blackboard is effectively used</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
		</tbody>
	</table>
<!--section 2.4.3-->
	<table border="1" class="table-hover">
		<br>
		<thead>
		
			<tr>
				<td rowspan="2"></td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
				
			<tr>
				<td class="col1">3. The schedule is well-balanced</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
		</tbody>

	</table>
<!--section 2.4.4-->
	<table border="1" class="table-hover">
		<br>
		<thead>
			<tr>
				<td rowspan="2"></td>
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="col1">4. Schedule updates are communicated effciently</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
		</tbody>
			
	</table>

<!--section 2.4.5-->
	<table border="1" class="table-hover">
		<br>
		<thead>
			<tr>
				<td rowspan="2"></td>			
				<td class="col2">Strongly disagree </td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2"></td>
				<td class="col2">Strongly agree </td>
			</tr>
			<tr>
				<td class="col2">1</td>
				<td class="col2">2</td>
				<td class="col2">3</td>
				<td class="col2">4</td>
				<td class="col2">5</td>
				<td class="col2">6</td>
				<td class="col2">7</td>
				<td class="col2">8</td>
				<td class="col2">9</td>
				<td class="col2">10</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="col1">5. The literature (book collection at the library & online database) supports the learning process</td>
				<form>
					<td class="col2"><input type="radio" name="per" value="1"></td>
					<td class="col2"><input type="radio" name="per" value="2"></td>
					<td class="col2"><input type="radio" name="per" value="3"></td>
					<td class="col2"><input type="radio" name="per" value="4"></td>
					<td class="col2"><input type="radio" name="per" value="5"></td>
					<td class="col2"><input type="radio" name="per" value="6"></td>
					<td class="col2"><input type="radio" name="per" value="7"></td>
					<td class="col2"><input type="radio" name="per" value="8"></td>
					<td class="col2"><input type="radio" name="per" value="9"></td>
					<td class="col2"><input type="radio" name="per" value="10"></td>
				</form>
				
			</tr>
		</tbody>

	</table>

	<br>
	6. Please provide us with any additional (constructive) feedback about the academic support questions above<br>
	<textarea rows="4" cols="50" name="comment">Enter text here...</textarea>
	<br>
	<br>
<!-- section 3.1.1-->
	<table border="1">
		<tr>
			<td class="col1 sec">Section 3: Closure</td>
		</tr>
		<tr>
			<td class="col1 sub">Section 3.1 Feedback</td>
		</tr>
	</table>
	1. Kindly use this comment section to provide us with any additional (constructive) feedback concerning this module period<br>
	<textarea name="comment">Enter text here...</textarea>
	<br>
	<br>
	<button style="width: 100px;float: right;" type="button" class="btn btn-outline-primary">Submit</button>
</div>


</body>
<!-- Footer -->
<footer class="page-footer font-small" style="background-color: #e3f2fd ">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</html>
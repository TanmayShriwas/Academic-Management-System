<!DOCTYPE html>

<html lang="">

<head>
<title>Sem-III Time Table</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
 <link rel="stylesheet" href="css/style.css">
<style>
    #body{
        height: 110vh;
        display: block;
        margin: auto;
		width:100%;
		margin-top:50px;
        
    }
    table{
        width: auto;
        height: auto;
        margin-top: 50px;
        margin-bottom: auto;
        margin-left: 90px;
        margin-right: auto;
        border: 1px solid black;
        background-color: rgba(100,100,100,0.7);
    }
    th{
        height: 2em;
        color: aliceblue;
        font-size: 1.5em;
        font-weight: 700;
        
    }
    td{
        
        height: 3em;
        color: black;
        font-size: 1.2em;
        font-weight: 300;
        text-align: center;
    }
    tr:nth-child(even) {
    background-color: #dddddd;
    }
    tr:hover{
        background: lightgreen;
    }

</style>
<script>
          function updateLink(a){ 
              var str1 = 'books.php?id="';
              var str2 = a.valueOf();
              var str3 = '"';
              var newurl = str1.concat(str2,str3);
              window.location=newurl;
              return newurl;
              }
          function selectForm(a){ 
              var str1 = 'form.php?id=';
              var str2 = a.valueOf();
              var newurl = str1.concat(str2);
              window.location=newurl;
              return newurl;
              }
</script>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <p>Here logout button will come</p>
      </div>
      <div class="fl_right">
        <p></p>      
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="https://www.puibm.in/">IBM-ICE</a></h1>
        
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" href="#">Books</a>
            <ul>
              <li><a class="drop" href="#">Semester I</a>
                <ul>
                  <li><a id="Mathematics-I" name="s1s1" href="#" onclick="updateLink(this.id);">Mathematics-I</a></li>
                  <li><a id="Open Source" name="s1s2" href="#" onclick="updateLink(this.id);">Open Source</a></li>
                  <li><a id="Engineering Chemistry" name="s1s3" href="#" onclick="updateLink(this.id);">Engineering Chemistry</a></li>
                  <li><a id="Engineering Drawing" name="s1s4" href="#" onclick="updateLink(this.id);">Engineering Drawing</a></li>
                  <li><a id="BCE" name="s1s5" href="#" onclick="updateLink(this.id);">BCE</a></li>
                </ul>
              </li>
              <li><a class="drop" href="#">Semester II</a>
                <ul>
                  <li><a id="EEES" name="s2s1" href="#" onclick="updateLink(this.id);">EEES</a></li>    
                  <li><a id="Data Structure With C" name="s2s2" href="#" onclick="updateLink(this.id);">Data Structure With C</a></li>      
                  <li><a id="Engineering Physics" name="s2s3" href="#" onclick="updateLink(this.id);">Engineering Physics</a></li>   
                  <li><a id="Communication Skills" name="s2s4" href="#" onclick="updateLink(this.id);">Communication Skills</a></li>    
                  <li><a id="Web Programming" name="s2s5" href="#" onclick="updateLink(this.id);">Web Programming</a></li>      
                </ul>
              </li>
              <li><a class="drop" href="#">Semester III</a>
                <ul>
                  <li><a id="Mathematics-II" name="s3s1" href="#" onclick="updateLink(this.id);">Mathematics-II</a></li>
                  <li><a id="Digital Electronics" name="s3s2" href="#" onclick="updateLink(this.id);">Digital Electronics</a></li>
                  <li><a id="OOT" name="s3s3" href="#" onclick="updateLink(this.id);">OOT</a></li>
                  <li><a id="DBMS" name="s3s4" href="#" onclick="updateLink(this.id);">DBMS</a></li>
                  <li><a id="IT Infrastructure" name="s3s5" href="#" onclick="updateLink(this.id);">IT Infrastructure</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="drop" href="#">Schedule</a>
            <ul>
              <li><a href="tts1.php">Semester I</a></li>
              <li><a href="tts2.php">Semester II</a></li>
              <li><a href="tts3.php">Semester III</a></li>
            </ul>
          </li>
          <li><a href="faculties.php">Faculties</a></li>
          <li class="active"><a href="#">New Feeds</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
<div id="body">
      <!-- <h1>You can put your all content here</h1><BR> -->
	  <table>
	  <col width="100">
	  <col width="120">
	   <col width="120">
	    <col width="120">
		<col width="100">
		<col width="120">
		<col width="120">
	  
		<thead>
			<tr>
			
				<th>DAY</th>
				<th>9.30-10.30</th>
				<th>10.30-11.30</th>
				<th>11.30-12.30</th>
				<th>12.30-1.30</th>
				<th>1.30-2.30</th>
				<th>2.30-3.30</th>
				<th>3.30-4.30</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="font-weight:700">MONDAY</td>
				<td>DBMS</td>
				<td>DIGITAL ELEC.</td>
				<td>MATHS</td>
				<td><center>L</center></td>
				<td>OOT</td>
				<td>IT INFSTR</td>
				<td>PD</td>
			</tr>
			<tr>
				<td style="font-weight:700">TUESDAY</td>
				<td>DBMS</td>
				<td>DIGITAL ELEC.</td>
				<td>MATHS</td>
                <td><center>U</center></td>
		    	<td>OOT</td>
				<td>IT INFSTR</td>
				<td>PD</td>
			</tr>
			<tr>
				<td style="font-weight:700">WEDNESDAY</td>
				<td>DBMS</td>
				<td>DIGITAL ELEC.</td>
				<td>MATHS</td>
                <td><center>N</center></td>
		    	<td>OOT</td>
				<td>IT INFSTR</td>
				<td>PD</td>			</tr>
			<tr>
				<td style="font-weight:700">THURSDAY</td>
				<td>IT INFSTR</td>
				<td>OOT</td>
				<td>MATHS</td>
                <td><center>C</center></td>
		    	<td>DIGITAL ELEC.</td>
				<td>IT INFSTR</td>
				<td>PD</td>
			</tr>
			<tr>
				<td style="font-weight:700">FRIDAY</td>
				<td>DBMS</td>
				<td>DIGITAL ELEC.</td>
				<td>MATHS</td>
                <td><center>H</center></td>
		    	<td>OOT</td>
				<td>IT INFSTR</td>
				<td>PD</td>
			</tr>
			<tr>
				<td style="font-weight:700">SATURDAY</td>
				<td>MATHS</td>
				<td>DIGITAL ELEC.</td>
				<td>DBMS</td>
                <td><center>!!!</center></td>
		    	<td>--</td>
				<td>--</td>
				<td>--</td>
			</tr>
		</tbody>
	</table>
	  
	 
	  
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
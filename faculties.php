<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Faculties</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
    #body{
        height:  100vh;
        display: block;
        margin: auto;
    }
    table{
        margin-top: 100px;
        margin-bottom: auto;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid black;
        background-color: rgba(100,100,100,0.7);
        padding: 50px;
    }
    th{
        color: aliceblue;
        font-size: 1.5em;
        font-weight: 700;
        
    }
    td{
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
</script>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="https://www.puibm.in/" target="_blank">IBM-ICE</a></h1>
        
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
      <table style="width:50%">
            <tr>
              <th>Name</th>
              <th>Contact No.</th>
            </tr>
            <tr>
              <td>Alisha Hashmi</td>
              <td>8839515642</td>
            </tr>
            <tr>
              <td>Anjul Rai</td>
              <td>9329125802</td>
            </tr>
            <tr>
              <td>Ankit Diwedi</td>
              <td>9098156111</td>
            </tr>
            <tr>
              <td>Ayushi Chawla</td>
              <td>7415530600</td>
            </tr>
            <tr>
              <td>G. Sowjanya</td>
              <td>8109061169</td>
            </tr>
            <tr>
              <td>Prakhar Tiwari</td>
              <td>9713670670</td>
            </tr>
            <tr>
              <td>Sameer-ul-hasan</td>
              <td>7509917419</td>
            </tr>
          </table>

</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
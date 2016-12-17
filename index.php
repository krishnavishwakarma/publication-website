<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="images/images.jpg" rel= "icon" type="image/x-icon">
<title>Project SIRT</title>
<style type="text/css"> 
<!-- 
body  {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}
.twoColFixLtHdr #container { 
	width: 780px;  /* using 20px less than a full 800px width allows for browser chrome and avoids a horizontal scroll bar */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
} 
.twoColFixLtHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px 0 20px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.twoColFixLtHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}
.twoColFixLtHdr #sidebar1 {
	float: left; /* since this element is floated, a width must be given */
	width: 200px; /* the actual width of this div, in standards-compliant browsers, or standards mode in Internet Explorer will include the padding and border in addition to the width */
	background: #EBEBEB; /* the background color will be displayed for the length of the content in the column, but no further */
	padding: 15px 10px 15px 20px;
}
.twoColFixLtHdr #mainContent { 
	margin: 0 0 0 250px; /* the left margin on this div element creates the column down the left side of the page - no matter how much content the sidebar1 div contains, the column space will remain. You can remove this margin if you want the #mainContent div's text to fill the #sidebar1 space when the content in #sidebar1 ends. */
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
} 
.twoColFixLtHdr #footer { 
	padding: 0 10px 0 20px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#DDDDDD; 
} 
.twoColFixLtHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}
.fltrt { /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class should be placed on a div or break element and should be the final element before the close of a container that should fully contain a float */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
.style1 {	font-size: 36px;
	font-weight: bold;
}
.style3 {font-size: 16px; font-weight: bold; }
--> 
</style>
<style>
.button {
  display: inline-block;
 border-top-left-radius: 20px;
 border-bottom-right-radius:20px;
  background-color:  #663300;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  font-family: bold;
  padding: 7px;
  width: 130px;
  height:30px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button1 {  display: inline-block;
 border-top-left-radius: 20px;
 border-bottom-right-radius:20px;
  background-color:  #663300;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  font-family: bold;
  padding: 7px;
  width: 130px;
  height:30px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.style55 {color: #000000}
.style56 {color: #003333}
.button2 {  display: inline-block;
 border-top-left-radius: 20px;
 border-bottom-right-radius:20px;
  background-color:  #663300;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  font-family: bold;
  padding: 7px;
  width: 130px;
  height:30px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
</style>

<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.twoColFixLtHdr #sidebar1 { width: 230px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColFixLtHdr #sidebar1 { padding-top: 30px; }
.twoColFixLtHdr #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]--></head>

<body class="twoColFixLtHdr">

<div id="container">
  <div id="header">
    <h1 align="center"><span class="style1">Online E-Journal Publication</span><img src="images/20130604180645-LOGOS2.png" alt="sosial midia " width="140" height="41" border="0" usemap="#Map" />
<map name="Map" id="Map"><area shape="rect" coords="12,8,33,37" href="https://www.facebook.com/Krishnakkvv" target="_blank" />
<area shape="rect" coords="46,8,68,34" href="https://plus.google.com/u/0/112297209450038730085" target="_blank" />
</map></h1>
    <p align="left">
       <a href="index.php"><button class="button" style="vertical-align:middle"><span>Home</span></button></a><a href="About Us.php"><button class="button" style="vertical-align:middle"><span>About Us</span></button> 
      
    </a>    
    <a href="E-Books.php"><button class="button" style="vertical-align:middle"><span>E-Books</span></button>   </a>  
     <a href="Contect Us.php"> <button class="button" style="vertical-align:middle"><span>Contect Us</span></button></a>
     <a href="http://localhost/project/upload/index.php"> <button class="button" style="vertical-align:middle"><span>Upload Publication</span></button></a>
        <a href="http://localhost/project/upload/view.php"> <button class="button" style="vertical-align:middle"><span>view Publication</span></button></a>
      <!-- end #header -->
    </p>
  </div>
  <div id="sidebar1">
    <table height="455" border="0" cellpadding="2" cellspacing="0" style="border: #000000 1px solid; background-color: #815654;COLOR: #FFFFFF; FONT: 13px arial, sans-serif; font-weight: bold;">
      <tr>
        <td width="202" align="center"> Latest News<br />        </td>
      </tr>
      <tr>
        <td><iframe id="NewsWindow" src="news_win.htm" width="200" height="700" marginwidth="0" marginheight="0" frameborder="0" scrolling="No" style="border: #000000 1px solid;"></iframe></td>
      </tr>
    </table>
    <h3><!-- end #sidebar1 -->
    </h3>
    </div>
  <div id="mainContent">
    <h1><span class="style3">E-Journal Publication</span></h1>
    <table width="469" height="424" border="0">
      <tr>
        <td width="256"><div align="center">
          <p><a href="pdf/C++tutorial.pdf"><img src="images/c++.jpg" alt="c" width="133" height="130" /></a></p>
          <p><span class="style3"><a href="pdf/cprogramming_tutorial.pdf">C language</a></span> <a href="pdf/cprogramming_tutorial.pdf"><span class="style3">Publication</span></a><span class="style3"></span></p>
        </div></td>
        <td width="203"><div align="center">
          <p><a href="pdf/php_tutorial.pdf"><img src="images/download.jpg" alt="php" width="119" height="133" /></a></p>
          <p><span class="style3"><a href="pdf/php_tutorial.pdf">php language</a></span> <a href="pdf/php_tutorial.pdf"><span class="style3">Publication</span></a><span class="style3"></span></p>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">
          <p><a href="pdf/java_tutorial.pdf"><img src="images/java.jpg" alt="java" width="135" height="148" /></a></p>
          <p><span class="style3"><a href="pdf/java_tutorial.pdf">Java language</a></span> <a href="pdf/java_tutorial.pdf"><span class="style3">Publication</span></a><span class="style3"></span></p>
        </div></td>
        <td><div align="center">
          <p><a href="pdf/C++tutorial.pdf"><img src="images/the-cpp-programming-language.jpg" alt="c++" width="136" height="147" /></a></p>
          <p><span class="style3"><a href="pdf/C++tutorial.pdf">C++ language</a></span> <a href="pdf/C++tutorial.pdf"><span class="style3">Publication</span></a></p>
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  <!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
    <p><strong>Powered by - Krishna k Vishwakarma© 2016, Design by-Krishna |Updated  </strong><img src="http://cmchbhopal.com/super/arrow-2.gif" alt="sd" width="40" height="24" align="absmiddle" title="CMCH Site visit" /><br />
    </p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>

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
    <h1 align="left"><span class="style1">Online E-Journal Publication </span><img src="images/20130604180645-LOGOS2.png" alt="sosial midia " width="140" height="41" border="0" usemap="#Map" />
<map name="Map" id="Map"><area shape="rect" coords="12,8,33,37" href="https://www.facebook.com/Krishnakkvv" target="_blank" />
<area shape="rect" coords="46,8,68,34" href="https://plus.google.com/u/0/112297209450038730085" target="_blank" />
</map></h1>
    <p align="left">
      <a href="index.php"><button class="button" style="vertical-align:middle"><span>Home</span></button></a>
      <a href="About Us.php">
      <button class="button" style="vertical-align:middle"><span>About Us</span></button> 
      
    </a>    <a href="E-Books.php"><button class="button" style="vertical-align:middle"><span>E-Books</span></button>   </a>   <a href="Contect Us.php"> <button class="button" style="vertical-align:middle"><span>Contect Us</span></button>
    <!-- end #header --></p>
  </div>
  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  <table width="781" height="159" border="1">
    <tr>
      <td valign="top"><div align="center">
        <p><strong>E-Books</strong></p>
        <ul>
          <li>
            <div align="left"><strong>Aeschylus </strong>– Prometheus Bound
              <ul>
                <li><a href="http://itunes.apple.com/us/book/aeschylus-prometheus-bound/id511021433?mt=11" sl-processed="1">iPad/iPhone</a> – <a href="http://www.gutenberg.org/ebooks/27458" rel="nofollow" sl-processed="1">Kindle + Other Formats</a> – <a href="http://ebooks.adelaide.edu.au/a/aeschylus/prometheus/index.html" sl-processed="1">Read Online Now</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div align="left"><strong>Aesop </strong>– Aesop’s Fables
              <ul>
                <li><a href="http://itunes.apple.com/app/aesop-for-children/id538815234?mt=8" sl-processed="1">iPad/iPhone</a> – <a href="http://www.gutenberg.org/ebooks/11339" rel="nofollow" sl-processed="1">Kindle + Other Formats</a> – <a href="http://ebooks.adelaide.edu.au/a/aesop/a3t/" sl-processed="1">Read Online Now</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div align="left"><strong>Andersen, Hans Christian </strong>– Andersen’s Fairy Tales
              <ul>
                <li><a href="http://itunes.apple.com/us/book/andersens-fairy-tales/id396446390?mt=11" sl-processed="1">iPad/iPhone</a> – <a href="http://www.gutenberg.org/etext/1597" rel="nofollow" sl-processed="1">Kindle + Other Formats</a> – <a href="http://www.gutenberg.org/files/1597/1597-h/1597-h.htm" rel="nofollow" sl-processed="1">Read Online Now</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div align="left"><strong>Anderson, Sherwood</strong> – Winesburg, Ohio
              <ul>
                <li><a href="https://itunes.apple.com/us/book/winesburg-ohio-group-tales/id498727942?mt=11" sl-processed="1">iPad/iPhone</a> – <a href="http://www.gutenberg.org/ebooks/416" sl-processed="1">Kindle + Other Formats</a> – <a href="http://www.bartleby.com/156/" sl-processed="1">Read Online Now</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div align="left"><strong>Anonymous </strong>– Beowulf
              <ul>
                <li><a href="http://itunes.apple.com/us/book/beowulf/id395547822?mt=11" sl-processed="1">iPad/iPhone</a> – <a href="http://www.gutenberg.org/ebooks/981" sl-processed="1">Kindle + Other Formats</a> – <a href="http://ebooks.adelaide.edu.au/b/beowulf/b48g/" sl-processed="1">Read Online Now</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div align="left"><strong>Anonymous</strong> – Epic of Gilgamesh
              <ul>
                <li><a href="https://itunes.apple.com/us/book/old-babylonian-version-gilgamesh/id505934239?mt=11" sl-processed="1">iPad/iPhone</a> – <a href="http://www.amazon.com/Old-Babylonian-Version-Gilgamesh-Epic-ebook/dp/B004TQEOYO/ref=sr_1_2?s=digital-text&amp;ie=UTF8&amp;qid=1390812932&amp;sr=1-2&amp;keywords=gilgamesh" sl-processed="1">Kindle from Amazon</a> – <a href="http://www.ancienttexts.org/library/mesopotamian/gilgamesh/" sl-processed="1">Read Online Now</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div align="left"><strong>Anonymous </strong>– The Arabian Nights
              <ul>
                <li><a href="http://itunes.apple.com/us/book/the-arabian-nights/id481669183?mt=11" sl-processed="1">iPad/iPhone</a> – <a href="http://www.gutenberg.org/ebooks/20916" rel="nofollow" sl-processed="1">Kindle + Other Formats</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div align="left"><strong>Aquinas, Thomas</strong> – Summa Theologiae
              <ul>
                <li>iPad/iPhone: <a href="https://itunes.apple.com/us/book/summa-theologica-part-i-ii/id511001763?mt=11" sl-processed="1">Part 1</a> – <a href="https://itunes.apple.com/us/book/summa-theologica-part-iii/id511112454?mt=11" sl-processed="1">Part 2</a> – Kindle + Other Formats: <a href="http://www.gutenberg.org/ebooks/17897" sl-processed="1">Part 1</a> – <a href="http://www.gutenberg.org/ebooks/17897" sl-processed="1">Part 2</a> – <a href="http://www.gutenberg.org/ebooks/18755" sl-processed="1">Part 3</a> – <a href="http://www.ccel.org/ccel/aquinas/summa.toc.html" sl-processed="1">Read Online Now</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div align="left"><strong>Aristophanes</strong> – Lysistrata
              <ul>
                <li><a href="https://itunes.apple.com/us/book/lysistrata/id955036081?mt=11" sl-processed="1">iPad/iPhone</a> – <a href="http://www.gutenberg.org/ebooks/7700" sl-processed="1">Kindle + Other Formats</a> – <a href="http://ebooks.adelaide.edu.au/a/aristophanes/lysistra/" sl-processed="1">Read Online Now</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div align="left"><strong>Aristophanes </strong>– The Birds
              <ul>
                <li><a href="https://itunes.apple.com/us/book/the-birds/id955128151?mt=11" sl-processed="1">iPad/iPhone</a> – <a href="http://www.gutenberg.org/ebooks/3013" rel="nofollow" sl-processed="1">Kindle + Other Formats</a> – <a href="http://classics.mit.edu/Aristophanes/birds.html" sl-processed="1">Read Online Now</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div align="left"><strong>Aristophanes </strong>– The Clouds
              <ul>
                <li><a href="https://itunes.apple.com/us/book/clouds/id955128145?mt=11" sl-processed="1">iPad/iPhone</a> – <a href="http://www.gutenberg.org/ebooks/2562" rel="nofollow" sl-processed="1">Kindle + Other Formats</a> – <a href="http://ebooks.adelaide.edu.au/a/aristophanes/clouds/" sl-processed="1">Read Online Now</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <div align="left"><br />
        </div>
        <p align="left">&nbsp;</p>
        <p align="left">&nbsp;</p>
      </div></td>
    </tr>
  </table>
  <br class="clearfloat" />
  <div id="footer">
    <p><strong>Powered by - Krishna k Vishwakarma© 2016, Design by-Krishna |Updated  </strong><img src="http://cmchbhopal.com/super/arrow-2.gif" alt="sd" width="40" height="24" align="absmiddle" title="CMCH Site visit" /><br />
    </p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>

<?php

if(isset($_POST['save'])) {




    $fast = $_POST['first'];
    $lst = $_POST['last'];
    $emm = $_POST['email'];
    $namba = $_POST['phone'];

        echo "Name: ".$fast." ".$lst."";
        echo "<br/>Phone: ".$namba."";


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/sd.css"/> -->

    <style>

        .me {
            background: green;
            width: 50%;
            margin: 0 auto;
            height: 300px;
            padding:10px;
        }

        .input-box {

            border: none;
            border-radius: 2px;
            width: 295px;
            margin-bottom: 10px;
            padding:10px;

        }
        #submit-button {
            background: #000000;
            border: none;
            padding: 10px;
            font-weight: bold;
            color: #ffffff;
        }
    </style>

</head>
<body>
<div class="me">
    <form method="post" action="#" target="_blank">
<table>
    <tr>
        <td><input name="first" class="input-box" required="required" type="text" placeholder="Firtstname"/> </td>
        <td><input name="last" class="input-box" required="required" type="text" placeholder="Lastname"/> </td>
    </tr>

    <!--

    <tr>
        <td><input name="email" class="input-box" required="required" type="email" placeholder="Email"/> </td>
        <td><input name="phone" class="input-box" required="required" type="number" placeholder="Phone"/> </td>
    </tr>

    <tr>
        <td><input class="input-box" required="required" type="file"/> </td>
    </tr>

    <tr>
        <td>
        <input type="checkbox">
            <input type="checkbox">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td>
            <input name="gender" type="radio">
            <input name="gender" type="radio">
            <input name="gender" type="radio">
        </td>
    </tr>

    <tr>
        <td>
            <input type="color">
        </td>
    </tr>

    -->


    <tr>
        <td>
            <select>
                <option selected hidden>Kenya</option>
                <option>Burundi</option>
                <option>Uganda</option>
                <option>Tanzania</option>
                <option>Ethiopia</option>
            </select>
        </td>
    </tr>





    <tr>
        <td>
            <input type="date" step="3">
        </td>
    </tr>

    <tr>
        <td>
            <input type="url" step="3">
        </td>
    </tr>


    <tr>
        <td>
           <button id="submit-button" name="save" type="submit">REGISTER &nbsp;&rarr;</button>
        </td>
        <td>
            <button>CLEAR</button>
        </td>
    </tr>


</table>


                <textarea placeholder="Message" rows="4"></textarea>
        
    </form>
<!-- input attributes
    1. placeholder gives ahint of what is expected in the input
    2. Value is usecd to give the initial character of the input
    3. max-length specifies the maximum numbers of characters that should not be exceeded in the input
    4. Name references the input during data processing..
    5. submit button used to submitt data to the server
     -->
</div>

<!-- <img src="img/IMG_8bxk6h.jpg"> -->

</body>
</html>
<!-- Div defines a container that can cointain content and aligned vertically.
 the syntax is <div></div>
Spun can contain conents and is aligned horizontallysection, all a container than can house a div
Css is usedto style webpage designs to achieve a desired look. It allows for the display in different media
Uses a set of rules to style a document
1. Every style must point to a html element to be styled
2. the selector points to the html element to be styled
3. The diclaration block containts several diclaraTIONS seperated by semicollon;
4. css diclaration ends with a semicolon and a declaration is surrounded by a {}
5. Can be inserted in 3 ways..
  a. external style sheet... it includes adding an external file to a web page. this file can be included in the page to styled using the link tag<link> and placed at the header section
   <head>
   <link rel = "stylesheet"
   type = "text/css" href = "#(path)" />

   </head>
   they end with a .css extension and contain no html tags
  b. Internal ... commonly used if a page contains a unique style using
  <head>
  <style>
  .banner{
  }
  </style>
  </head>
  c. Inline style sheet.... can be used to apply a unique style toa single element
  <p style = "color;"
  if some properties have been defined for the same selector or element in different stylesheet the value from the last read styleshee will be used
Cascading order
When there is more than one style for a html element the styles are efected on priority as discribed
 --inline stylesheet will be given priority
 --internal
 --external

create a simple html page and demonstrate your understanding of the different properties of css using external, inline and external properties in the project7
====>colors can be described using rgb, rgba, hex, hsl, hsla they all describe a mixture of colors
<p style = "colorblue;">
<p style = "colorrgba(0,0,0,0,0.7);"
.banner{
color;rgba(0,0,025,0.7);}
====>Background image
<div style="background-image;url(image.png);"
they can have 1. background-repeat; no-repeat
.back{
background-image; url("image.png");
background-repeat; no-repeat
background-position; center;
background-attachment; fixed;
background-size; cover;
color;rgb(0,025,10);
font-size; 30px;
font-weight; bold;
   }
background; #.........
====>Boarders
.image{
boarder;dotted/dashed/dotted/inset/outset/none/hidden;
}
.image {
boarder; 2px dashed #000;
}
===>Height and width
They can be set to auto and the browser calculates it
<span class = "data"
.dats{
width;100px;
height; 100px;
}
====> text formatting
1.text color
2.text alignment
3. text decoration
4. text transformation... used to specify upper case and lower case in a text
text-color; red;
text-align; justify;
text-decoration; underline;
text-transform; uppercase;
fontfamily;"Times", setif...;
font-size;30px

create a section with refernce the earlier created web page with a background image and texts, give the section some border style and give the text inside a center postion a font size of 15px and a color of my choice in rgba. Include a text decoration of your choice to the text







 -->

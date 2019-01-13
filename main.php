
<!DOCTYPE html>  
<html>  
<head> <br><br><H1><u><center>

<marquee behavior="scroll" direction="left" scrollamount="5"> WELCOME TO ATTENDANCE MANAGEMENT SYSTEM</marquee></center></u></H1>
    <meta charset="utf-8" />  
    <title>My Slider</title>  
    <style type="text/css">  
        body {  
            margin: 0;  
            background: #e6e6e6;  
        }  
        .showSlide {  
            display: none  
        }  
            .showSlide img {  
                width: 100%;  
            }  
        .slidercontainer {  
            max-width: 1000px;  
            position: relative;  
            margin: auto;  
        }  
        .left, .right {  
            cursor: pointer;  
            position: absolute;  
            top: 50%;  
            width: auto;  
            padding: 8px;  
            margin-top: -12px;  
            color: white;  
            font-weight: bold;  
            font-size: 18px;  
            transition: 0.6s ease;  
            border-radius: 0 3px 3px 0;  
        }  
        .right {  
            right: 0;  
            border-radius: 3px 0 0 3px;  
        }  
            .left:hover, .right:hover {  
                background-color: rgba(115, 115, 115, 0.8);  
            }  
        .content {  
            color: #eff5d4;  
            font-size: 30px;  
            padding: 4px 8px;  
            position: absolute;  
            top: 10px;  
            width: 100%;  
            text-align: center;  
        }  
        .active {  
            background-color: #717171;  
        }  
        /* Fading animation */  
        .fade {  
            -webkit-animation-name: fade;  
            -webkit-animation-duration: 1.5s;  
            animation-name: fade;  
            animation-duration: 1.5s;  
        }  
        @-webkit-keyframes fade {  
            from {  
                opacity: .4  
            }  
            to {  
                opacity: 1  
            }  
        }  
  
        @keyframes fade {  
            from {  
                opacity: .4  
            }  
            to {  
                opacity: 1  
            }  
        }  
    </style>  
</head>  
<body>  
<P align="center">
<form method="POST" action="main.php"><br>
<select name="formGender"><br>
<option value="">Select...</option>
<option value="M">STUDENT</option>
<option value="F">FACULTY</option>
</select>

<input type="submit" value="submit here"><br>
</P>
</form>
    <div class="slidercontainer">  
        <div class="showSlide fade">  
            <img src="C:\Users\Amisha\Desktop\webD\dpm0.jpg" />  
            <div class="content"></div>  
        </div>  
        <div class="showSlide fade">  
            <img src="C:\Users\Amisha\Desktop\webD\dpm1.jpg" />  
            <div class="content"></div>  
        </div>  
  
        <div class="showSlide fade">  
            <img src="C:\Users\Amisha\Desktop\webD\dpm2.jpg" />  
            <div class="content"></div>  
        </div>  
        <div class="showSlide fade">  
            <img src="C:\Users\Amisha\Desktop\webD\dpm3.jpg" />  
            <div class="content"></div>  
        </div>  
        <!-- Navigation arrows -->  
        <a class="left" onclick="nextSlide(-1)"><=</a>  
        <a class="right" onclick="nextSlide(1)">=></a>  
    </div>  
  
    <script type="text/javascript">  
        var slide_index = 1;  
        displaySlides(slide_index);  
  
        function nextSlide(n) {  
            displaySlides(slide_index += n);  
        }  
  
        function currentSlide(n) {  
            displaySlides(slide_index = n);  
        }  
  
        function displaySlides(n) {  
            var i;  
            var slides = document.getElementsByClassName("showSlide");  
            if (n > slides.length) { slide_index = 1 }  
            if (n < 1) { slide_index = slides.length }  
            for (i = 0; i < slides.length; i++) {  
                slides[i].style.display = "none";  
            }  
            slides[slide_index - 1].style.display = "block";  
        }  
    </script>  
  

</body>  
</html>   



<?php
$varGender = $_POST['formGender'];

if($varGender=="M")
{echo"<a href='formstudent.php'>Click here </a>";
}
else if($varGender=="F")
{
echo"<a href='formfaculty.php'>Click here </a>";
}
?>
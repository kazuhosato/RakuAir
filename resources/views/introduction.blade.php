@extends('layouts.app')

@section('content')

@include('commons.newnavbar')


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>RakuAir</title>
        <link rel="stylesheet" href="stylesheet.css">
        
        <div class="icon-image">
            <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
        </div>
        
    </head>
    
        <div class = "header">
        <header>
            <h1 class = "intrologo"><img src="images/RakuAirBlack.png" alt="rakuairlogo"><h1>
            <h1 class = "life"><p>~Comfortable Life to you all~</p></h1>

        </header>
        </div>
        
        
        <body>
            
         <div class= "wholebody">
            
            <div class = "body1">
         
            <h1>Introduction</h1>
            <p>We have been worring about the room temperature for a long time.<br>
            Despite you want to change the temperature, lots of factors had been preventing you from doing that.<br>
            That suffering ends today. 
            Once you use RakuAir, you can set you feeling, check others.<br>
            RakuAir definitely brings great comfort to you all.<br>
        
            </p>
            </div>
            
            <div class = "body2">
             <h1>How to Use RakuAir</h1>
             <p> You can manage everyting in very simple way.</p>
           </div>   
              
              <div class= "body3">   
               <h2>Procedure</h2>
                 <p><ol>
                     <li>1.Please choose your feeling from <i class="fa fa-home fa-2x"></i>.</li><br>
                     <li>2.Please check the feeling of your tribe.<br>
                     You can also check the feel of the team by clicking the detail box.</li><br>
                     <li>3.Plase adjust air conditionar as it says. </li><br>
                     <li>4.After adjusting, plase push"clear" button to refresh data.</li>
                 </ol></p>
             </div>
             
             
             <div class= "body4">
                <h2>Bar on the right</h2>
             <ol>
            　　 <li><p><i class="fa fa-map-marker fa-2x"></i>  : Current page you are lokking to. You can check how it works and details.</p></i></li>
                 <li><p><i class="fa fa-home fa-2x"></i>  : You can claim your feeling whenever and whereever you like.</p></i></li>
                 <li><p><i class="fa fa-bar-chart-o fa-2x"></i>  : Showing each data from lots of perspectives.</p></i></li>
                 <li><p><i class="fa fa-map-marker fa-2x"></i>  : You can see where is comfortable using the map of training room.</p></i></li>
                 <li><p><i class="fa fa-power-off fa-2x"></i>  : Logging out.</p></i></li>
             </ol>
             </div>
             
             
             <div class= "body5">
              <h1>Uniqueness</h1>
              
               <p>There is a secret in this wonderful application. <br>
                  That is, point system. We make points from -6 to 6 to calculate exact data.<br>
                  The points are based on sex and body characters and so on.</p>
               
              　　　<ol>
              　　　  ex：Atsugari  Man  →　hot:1pt   comfortable:0pt   cold:-6pt<br>
              　　　  　　  Samugari Woman　→　hot:6pt   comfortable:0pt  cold:-2pt<br>
              　　　</ol>
              　<p>　As shown, RakuAir make it possible to calculate exact data. <br>
              　　THIS IS RAKUAIR.</p>
              
             </div> 
              
         </div>
        </body>
        
        
        <div class = "footer2">
        <footer>
            <p>Now, let's say hello to RakuAir!</p>
        </footer>
        </div>
        
        
</html>

@endsection
@extends('plantilla.main')

@section('hojasEstilo')
	<link rel="stylesheet" href="plugins/bootstrap-datetimepicker-4.17.47/css/bootstrap-datetimepicker.min.css">
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/assets/css/Copa.css">

@endsection

@section('contenido')


  <br>
  <div class="container">
  <div class="split split-one">
    <div class="round round-one current">
      <div class="round-details">Ronda 1<br/><span class="date"></span></div>
      <ul class="matchup">
        <li class="team team-top">  <span class="score"></span></li>
        <li class="team team-bottom"><span class="score"></span></li>
      </ul>
      <ul class="matchup">
        <li class="team team-top"><span class="score"></span></li>
        <li class="team team-bottom"><span class="score"></span></li>
      </ul>
      <ul class="matchup">
        <li class="team team-top"> <span class="score"></span></li>
        <li class="team team-bottom"> <span class="score"></span></li>
      </ul>
      <ul class="matchup">
        <li class="team team-top"><span class="score"></span></li>
        <li class="team team-bottom"><span class="score"></span></li>
      </ul>                      
    </div>  <!-- END ROUND ONE -->

    <div class="round round-two">
      <div class="round-details">Ronda 2<br/><span class="date"> </span></div>     
      <ul class="matchup">
        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
      </ul> 
      <ul class="matchup">
        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
      </ul> 
                      
    </div>  <!-- END ROUND TWO -->
    
    <div class="round round-three">
      <div class="round-details">Semi Final<br/><span class="date"></span></div>     
      <ul class="matchup">
        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
      </ul>                   
    </div>  <!-- END ROUND THREE -->    
  </div> 

<div class="champion">
    <div class="semis-l">
      <div class="round-details">Final<br/><span class="date"></span></div>   
      <ul class ="matchup championship">
        <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
        <li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
      </ul>
    </div>
    <div class="final">
      <i class="fa fa-trophy"></i>
      <div class="round-details">Campeon <br/><span class="date"></span></div>    
      <ul class ="matchup championship">
        <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
      </ul>
    </div>
  </div>


  <div class="split split-two">


    <div class="round round-three">
      <div class="round-details">Semi Final<br/><span class="date"></span></div>           
      <ul class="matchup">
        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
      </ul>                    
    </div>  <!-- END ROUND THREE -->  

    <div class="round round-two">
      <div class="round-details">Ronda 2<br/><span class="date"></span></div>           
      <ul class="matchup">
        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
      </ul> 
      <ul class="matchup">
        <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
        <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
      </ul> 
                      
    </div>  <!-- END ROUND TWO -->
    <div class="round round-one current">
      <div class="round-details">Ronda 1<br/><span class="date"></span></div>
      <ul class="matchup">
        <li class="team team-top"><span class="score"></span></li>
        <li class="team team-bottom"><span class="score"></span></li>
      </ul>
      <ul class="matchup">
        <li class="team team-top"><span class="score"></span></li>
        <li class="team team-bottom"><span class="score"></span></li>
      </ul>
      <ul class="matchup">
        <li class="team team-top"><span class="score"></span></li>
        <li class="team team-bottom"><span class="score"></span></li>
      </ul>
      <ul class="matchup">
        <li class="team team-top"><span class="score"></span></li>
        <li class="team team-bottom"> <span class="score"></span></li>
      </ul>                       
    </div>  <!-- END ROUND ONE -->                  
  </div>
  </div>



@endsection
@section('script')
@endsection
<!DOCTYPE html>
<!-- saved from url=(0035)https://goofreights.online/main.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>ADC Logistics | Admin</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
  <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

  <style type="text/css">
    
    form{
      border-radius: 10px;
      border:2px solid #333;
      margin: 30px 10px;
      padding: 15px;
    }

     .resli li
{
  border:1px solid rgba(255, 255, 255, 0.8);
  padding: 10px 5px;
  font-weight: 200;
  color:#DC7633 ;

}
 .resli li:hover
{
  border:2px solid  #DC7633 ;
  padding: 10px 5px;
  font-weight: 200;
  color: #DC7633 ;

}
 .reslii li:hover
{
  border:2px solid  #DC7633 ;
  padding: 10px 5px;
  font-weight: 200;
  color: #DC7633 ;

}

.reslii li
{
  border:1px solid rgba(255, 255, 255, 0.8);
  padding: 10px 5px;
  font-weight: 200;
  color:#DC7633 ;

}


  </style>
</head>
<body>

    <script>
    




  window.setInterval(function(){
  /// call your function here
  if ($("#form1").is(":focus")) {
      $(".resli").css("display", "block");
    }else
    {
       $(".resli").css("display", "none");
    }

     if ($("#form2").is(":focus")) {
      $(".reslii").css("display", "block");
    }else
    {
       $(".reslii").css("display", "none");
    }
}, 500);




function dosearch1(str){

if (str.length==0) {
    $('#list').empty();
  }else{
  
  
        
          var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://cometari-airportsfinder-v1.p.rapidapi.com/api/airports/by-text?text="+str,
  "method": "GET",
  "headers": {
    "x-rapidapi-host": "cometari-airportsfinder-v1.p.rapidapi.com",
    "x-rapidapi-key": "f1e347b74dmsh323e59bb9c130fcp17d44fjsn844d496b20a2"
  }
}
    
        
        
            $.ajax(settings).done(function (response) {
                 
                    // json = { items: ['item 1', 'item 2', 'item 3'] };
                    $('#list').empty();

                        
                        var res ='';
                      $.each(response, function( key, value ) {
                      
                          
                          res += '<li class="sli" id="sli"><span id="name1"><strong>'+value.name+'</strong></span>'+'(<span id="iata1">'+value.code+'</span>) <br> <span id="namea">'+value.city+'</span> (<span  id="countryCode1">'+value.countryCode+'</span> ) <span style="display:block;" id="lat1">'+value.location['latitude']+'</span><span style="display:block;" id="lon1">'+value.location['longitude']+'</span></li>';
                                     

                      
                     
                      
                          $(".resli").html(res); 
                        
                      });
                        
                       
                      
                      
                      
                });

  
  }
  

}


    //Add correct class to chosen button
 










function dosearch2(str){

if (str.length==0) {
    $('#list1').empty();
  }else{
  
  
         
          var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://cometari-airportsfinder-v1.p.rapidapi.com/api/airports/by-text?text="+str,
  "method": "GET",
  "headers": {
    "x-rapidapi-host": "cometari-airportsfinder-v1.p.rapidapi.com",
    "x-rapidapi-key": "f1e347b74dmsh323e59bb9c130fcp17d44fjsn844d496b20a2"
  }
}
    
        
        
        
            $.ajax(settings).done(function (response) {
                  
                     
                     var ress ='';
                      $.each(response, function( key, value ) {
                       
                          
                          ress +=  '<li class="slii" id="slii">   <span id="name2"><strong>'+value.name+'</strong></span>(<span style="" id="iata2">'+value.code+'</span>) <br> <span id="nameb">'+value.city+'</span> (<span  id="countryCode2">'+value.countryCode+'</span> ) <span style="display:block;" id="lat2">'+value.location['latitude']+'</span><span style="display:block;" id="lon2">'+value.location['longitude']+'</span></li>';
                                     
                         

                      
                      
                     
                      
                          $(".reslii").html(ress); 
                        
                      });
                     
                });
          
      
      
  }
    
  

}

    
    $(document).on('click', '.sli', function(){ 
          $("#form1").val($(this).text());
          $(".lon1").val($("#lon1").text());
          $(".lat1").val($("#lat1").text());
       
          $(".countryCode1").val($("#countryCode1").text());
         
  }); 

$(document).on('click', '.slii', function(){ 
          $("#form2").val($(this).text());
           $(".lon2").val($("#lon2").text());
          $(".lat2").val($("#lat2").text());
          
          $(".countryCode2").val($("#countryCode2").text());
            
  }); 

    </script>

 @yield('content')

</body></html>
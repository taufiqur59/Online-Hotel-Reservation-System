
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/index.css">
	 <title>Chittagong hotels</title>
     
<!--     
 <style>  
 /*transperant animation starts here */  
 div#topcontent
{
    width: 1138px;
	height: 448px;
    background:        url(../image/banner1.jpg) no-repeat;
    position:relative;
	border:1px solid #CCC;
  
	
    /* Chrome, Safari, Opera */
    -webkit-animation-name: myfirst;
    -webkit-animation-duration: 10s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-delay: 2s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
    -webkit-animation-play-state: running;
    /* Standard syntax */
	
    animation-name: myfirst;
    animation-duration: 10s;
    animation-timing-function: linear;
    animation-delay: 2s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes myfirst {
    0%   {background:url(../image/banner1.jpg) no-repeat; left:0px; top:0px;}
    20%  {background:url(../image/banner1.jpg) no-repeat;  left:0px; top:0px;}
    40%  {background:url(../image/room1.jpg) no-repeat;  left:0px; top:0px;}
    60%  {background:url(../image/room1.jpg) no-repeat; left:0px; top:0px;}
    80%  {background:url(../image/banner2.jpg) no-repeat;  left:0px; top:0px;}
    100% {background:url(../image/banner2.jpg) no-repeat;  left:0px; top:0px;}
}

/* Standard syntax */
@keyframes myfirst {
    0%   {background:url(../image/banner1.jpg) no-repeat; left:0px; top:0px;}
    20%  {background:url(../image/banner1.jpg) no-repeat;  left:0px; top:0px;}
    40%  {background:url(../image/room1.jpg) no-repeat;  left:0px; top:0px;}
    60%  {background:url(../image/room1.jpg) no-repeat; left:0px; top:0px;}
    80%  {background:url(../image/banner2.jpg) no-repeat;  left:0px; top:0px;}
    100% {background:url(../image/banner2.jpg) no-repeat;  left:0px; top:0px;}
}

</style>
<!--transperant animation ends here-->




<!--googleMap starts here-->
 <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(23.352342,90.450439453125);

function initialize()
{
var mapProp = {
  center: myCenter,
  "scrollwheel": false,
  zoom:7,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("mainmap"),mapProp);

var marker = new google.maps.Marker({
   position: new google.maps.LatLng(21.5833,92.0167) ,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

var marker = new google.maps.Marker({
  position: new google.maps.LatLng(24.8978,91.8714) ,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

var marker = new google.maps.Marker({
  position: new google.maps.LatLng(22.3667,91.8000) ,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
var marker = new google.maps.Marker({
	position: new google.maps.LatLng(23.70,90.371),
  title:'Click to zoom',
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(8);
  map.setCenter(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!--googleMap ends here-->

</head>

<body>
    <!-- wrap=whole body containing div--->
<div id="wrap">
    <!--header=tophead(lefthead(img)+righthead(topheadmenu))+middlehead(headline+marquee)+bottomhead(mainmenu) --->

 <div id="header1">
    
    
    <!-- tophead starts here -->
    <div id="tophead">
    <div id="lefthead">
    <div id="logodiv">
    <img id="logo"title="Best hotel reservation service in Bangladesh"src="../image/logo.PNG" alt="">
    </div> <!--logodiv ends here-->
    </div>  <!-- lefthead ends here -->   
    <div id="righthead">
    <div id="menudiv">
		<ul id="topheadmenu">
			   <li class="topheadlist"><a href="my booking.php">My Booking</a></li>
			  <li class="topheadlist"><a href="sign in.php">Sign In</a></li>
			  <li class="topheadlist"><a href="sign out.php">Sign Out</a></li>
			</ul>
         
        </div> <!--menudiv ends here-->    
       </div>  <!-- righthead ends here -->  
       </div>  <!---tophead ends here -->
      </div>  <!-- header1 ends here -->   
       
       
    <div id="header2">     
      <div id="head2"> 
        <marquee id="marquee">
         <h1 id="marqp"><strong>Booking.com.bd</strong></h1>
       </marquee>
      </div>   
   
       </div>   <!--header2 ends here-->

         
     <div id="header3">
          <div id="head3">
      
               <div class="mainlist">     <h3 class="mylist"><a href="../index.html">HOME</a></h3>      </div>
          
              <div class="mainlist">    <h3 class="mylist"><a href="dhaka.php">DHAKA</a></h3>        </div>
              <div class="mainlist">   <h3 class="mylist"><a href="chittagong.php">CHITTAGONG</a></h3>   </div>
             <div class="mainlist">     <h3 class="mylist"><a href="sylhet.php">SYLHET</a></h3>       </div>
             <div class="mainlist">     <h3 class="mylist"><a href="cox's bazar.php">COX'S BAZAR</a></h3>      </div>
             <div class="mainlist">     <h3 class="mylist"><a href="classifieds.php">CLASSIFIEDS</a></h3>  </div>
             <div class="mainlist">     <h3 class="mylist"><a href="contact.php">CONTACT</a></h3>      </div>
              
                
         </div>
       </div>  <!--header3 ends here-->    
 
 
 

 <!--content= (topcontent(contentsearch(topsearch)) + bottomcontent(leftcontent+rightcontent))starts here-->
 <div id="content">
     
    <div id="topcontent"> <!--topcontent contains background image-->
       <div id="lefttopcon">
       <div id="lefttopcondiv">
    <div id="contentsearch"> <!--contentsearch=topsearch(leftsearch+rightsearch)+bottomsearch(leftsearch+rightsearch)-->
    <div id="topsearch">
    <div id="leftsearch">
      <img id="imgsearch"src="../image/search.PNG" alt="">
    </div> <!--leftsearch ends here-->
    <div id="rightsearch">
            <h2 id="searchline">Search</h2>

   </div> <!--rightsearch ends here-->
   </div> <!--topsearch ends here-->
   <div id="bottomsearch">
    <form action="contact.php" method="get">
    <ul id="searchlist">
      <li id="location">
        <label for="location">Location :</label>
        <select name="location">
          <option value="allhotels">All Hotels</option>
          <option value="dhaka">Dhaka</option>
          <option value="chittagong">Chittagong</option>
          <option value="sylhet">Sylhet</option>
           <option value="classifieds">Classifieds</option>
        </select>   
      </li>
      
      <li>
       <label for="checkIn">Check  In  :</label>
       <select name="indate">
          <option value="Day">Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
         
        <select name="inmonth">
          <option value="Month">Month</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select> 
        
       <select name="inyear">
          <option value="Year">Year</option>
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
       </select>   

      </li>
      <li>
        <label for="checkOut">Check Out:</label>
        <select name="outdate">
          <option value="Day">Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="16">16</option>
        </select>
         
         
        <select name="outmonth">
          <option value="Month">Month</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
       </select> 
        
       <select name="outyear">
          <option value="Year">Year</option>
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
       </select> 
      </li> 
          
      
      <li>
        <input type="checkbox"name="checkdate" id="checkdate" />
        <label for="checkdate">I'll select dates later</label>
      </li>
      
      <li>
      <label for="Rooms">Room(s):</label>
        <select name="rooms">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
       </select> 
  </li>
  <li>
       <label for="Adults">Adult(s) :</label>
        <select name="Adults">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
       </select>   
      
         
      
      </li>
      <li>
      <label for="Children">Children :</label>
        <select name="rooms">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
      </select>   
       </li>
       <li id="submitlist">
         <input type="submit" value="FIND HOTELS" id="submitbutton" />
       </li>
      
    </ul>
    </form>
   </div> <!--bottomsearch ends here-->
    </div> <!--contentsearch ends here-->
    </div> <!--lefttopcondiv edns here-->
    </div>  <!--lefttopcon ends here-->
    
    <div id="righttopcon">
    <div id="righttopcondiv">
    <div id="rightusable">
    <div class="contentheaddiv">
    	<h3 class="contentheadline">CHITTAGONG CITY</h3>
     </div>  
     <div class="cityname">
     <p>
     Chittagong (Porto Grande De Bengala; Mughal Islamabad) is the second most populous city and main seaport of Bangladesh. It is a major commercial, financial and industrial hub. Located on the Karnaphuli River, it is the administrative seat of Chittagong District and Chittagong Division (the largest division of Bangladesh). The city straddles hilly terrain and faces the Bay of Bengal.<br/>Chittagong has a recorded history dating back more than a millennium. Arabs traded with its port since the 9th-century. It was visited by numerous historic world travellers, such as Ibn Battuta and Niccolo De Conti, as well as the Chinese Imperial Treasure Fleet. It gained prominence as a Portuguese trading center during the 16th-century. Under British rule, it was a divisional capital in the Bengal Presidency and the headquarters of the Assam Bengal Railway.

     </p>
     </div> 
    
    </div> <!--rightusable ends here-->
    </div>  <!--righttopcondiv ends here-->
    </div>  <!--righttopcon ends here-->
    </div> <!--topcontent ends here-->
    
    
    
    <div id="middlecontent">
    
    <div id="leftcontent">
    <div id="leftcontentdiv">
    <div id="topdestinations">
     <div class="contentheaddiv">
     <h3 class="contentheadline">TOP DESTINATIONS</h3> 
     </div><!--contentheaddiv ends here-->
     <div id ="destincontent">
     <div id="destinpad">
     <div id="destincrop">
     <div id="destinclick">
     <h4 id="bangladesh"><a href="#">Bangladesh<br />20 Hotels</a></h4>
     </div>  <!--destinclick ends here-->
     </div> <!--destincrop ends here-->
     </div> <!--destinpad ends here-->
     </div> <!--destincontent ends here-->
    </div> <!--topdestinations ends here-->
    
    <div id="confidence">
    <div id="confidenceheaddiv">
     <h3 class="contentheadline">BOOK WITH CONFIDENCE!</h3> 
     </div><!--contentheaddiv ends here-->
     <div id="confidencediv">
     <div id="allconfidence">
     
        <div class="eachconfidence">
        <div class="twoconfidence">
        <div class="imgconf">
        <img class="confimg" src="../image/check.png" alt=""/>
        </div> <!--imgconfidence ends here-->
        <div class="contentconfidence">
        <h5 class="confidenceheadline">Lowest Price Policy</h5>
        <p class="confidencep">We don't charge you any extra fee for booking a hotel room with us</p>
        </div><!--contentconfidence ends here-->
        </div> <!--twoconfidence ends here-->
        </div> <!--eachconfidence ends here-->
        
        
        <div class="eachconfidence">
        <div class="twoconfidence">
        <div class="imgconf">
        <img class="confimg" src="../image/check.png" alt=""/>
        </div> <!--imgconfidence ends here-->
        <div class="contentconfidence">
        <h5 class="confidenceheadline">No cancellation fees</h5>
        <p class="confidencep">We don't charge you a cancellation or modification fee in case plans change</p>
        </div><!--contentconfidence ends here-->
        </div> <!--twoconfidence ends here-->
        </div> <!--eachconfidence ends here-->
        
        
        <div class="eachconfidence">
        <div class="twoconfidence">
        <div class="imgconf">
        <img class="confimg" src="../image/check.png" alt=""/>
        </div> <!--imgconfidence ends here-->
        <div class="contentconfidence">
        <h5 class="confidenceheadline">Instant confirmation</h5>
        <p class="confidencep">Instant booking confirmation whether booking online or via the telephon</p>
        </div><!--contentconfidence ends here-->
        </div> <!--twoconfidence ends here-->
        </div> <!--eachconfidence ends here-->
        
        
        <div class="eachconfidence">
        <div class="twoconfidence">
        <div class="imgconf">
        <img class="confimg" src="../image/check.png" alt=""/>
        </div> <!--imgconfidence ends here-->
        <div class="contentconfidence">
        <h5 class="confidenceheadline">Hotel deals every day</h5>
        <p class="confidencep">Booking up to a whole year in advance or right up until the moment of your stay</p>
        </div><!--contentconfidence ends here-->
        </div> <!--twoconfidence ends here-->
        </div> <!--eachconfidence ends here-->
        
        
        <div class="eachconfidence">
        <div class="twoconfidence">
        <div class="imgconf">
        <img class="confimg" src="../image/check.png" alt=""/>
        </div> <!--imgconfidence ends here-->
        <div class="contentconfidence">
        <h5 class="confidenceheadline">Flexible booking</h5>
        <p class="confidencep">Our booking system is very flexible and easy</p>
        </div><!--contentconfidence ends here-->
        </div> <!--twoconfidence ends here-->
        </div> <!--eachconfidence ends here-->
        
        
        
     </div> <!--allconfidence ends here-->
     </div> <!--confidencediv ends here-->
    </div> <!--confidence ends here-->
    
    
    </div> <!--leftcontentdiv ends here-->
     </div> <!--leftcontent ends here-->
     
     
     
    <div id="rightcontent">
    <div id="rightcontentdiv">
   <div class="googleMap">
    <div  class="contentheaddiv">
     <h3 class="contentheadline">WHERE YOU WANT TO STAY TONIGHT?</h3>
    </div> <!--contentheaddiv ends here-->
    <div class="mappadd">
    <div id="mainmap">
    
    </div> <!--mainmap ends here-->
    </div> <!--mappadd ends here-->
    </div> <!--googlemap ends here-->
    
    <div id="popularhotels">
    <div id="popularheaddiv">
     <h3 class="contentheadline"> CHITTAGONG HOTELS</h3> 
     </div><!--popularheaddiv ends here-->
     <div id="populardiv">
     <div id="allpopular">
     
        <div class="eachpopular">
        <a href="hotel agrabad.php">
        <div class="threepopular">
        <div class="imgpopular">
        <div class ="imgpopulardiv">
        <img class="popimg" src="../image/hotel agrabad.jpg" alt=""/>
        </div> <!--imgpopulardiv ends here-->
        </div> <!--imgpopular ends here-->
        <div class="contentpopular">
        <h5 class="popularheadline">HOTEL AGRABAD CHITTAGONG</h5>
        <p class="popularp"> <em class="adrs">Agrabad,Chittagong</em> <em class="emp"> 30 Km Distance from airport</em> <br />
          You are most cordially Welcome to Hotel Agrabad Chittagong Bangladesh. Hotel Agrabad centrally air-conditioned and equipped.....</p>
        </div><!--contentpopular ends here-->
        <div class="ratingpop">
        <div class="ratingpoptop">
        <div class="five">
        </div> <!--five ends here-->
        </div> <!--ratingpoptop ends here-->
        <div class="ratingpopbot">
        <h3 class="previous">$180</h3>
        <h3 class="next">$155</h3>
        </div> <!--ratingpopbot ends here-->
        </div> <!--ratingpop ends here-->
        </div> <!--threepopular ends here-->
        </a>
        </div> <!--eachpopular ends here-->
        

                
<div class="eachpopular">
        <a href="hotel well.php">
        <div class="threepopular">
        <div class="imgpopular">
        <div class ="imgpopulardiv">
        <img class="popimg" src="../image/hotel well.jpg" alt=""/>
        </div> <!--imgpopulardiv ends here-->
        </div> <!--imgpopular ends here-->
        <div class="contentpopular">
        <h5 class="popularheadline">HOTEL WELL PARK CHITTAGONG</h5>
        <p class="popularp"> <em class="adrs">Nizam Road, Chittagong</em> <em class="emp"> 30 Km Distance from airport</em> <br />
          The business hotel in chittagong with luxurious rooms and suites, restaurants, rooftop dining, business centre and other business facilities....</p>
        </div><!--contentpopular ends here-->
        <div class="ratingpop">
        <div class="ratingpoptop">
        <div class="four">
        </div> <!--five ends here-->
        </div> <!--ratingpoptop ends here-->
        <div class="ratingpopbot">
        <h3 class="previous">$150</h3>
        <h3 class="next">$130</h3>
        </div> <!--ratingpopbot ends here-->
        </div> <!--ratingpop ends here-->
        </div> <!--threepopular ends here-->
        </a>
        </div> <!--eachpopular ends here-->
        
        
        <div class="eachpopular">
        <a href="hotel tower.php">
        <div class="threepopular">
        <div class="imgpopular">
        <div class ="imgpopulardiv">
        <img class="popimg" src="../image/hotel tower.png" alt=""/>
        </div> <!--imgpopulardiv ends here-->
        </div> <!--imgpopular ends here-->
        <div class="contentpopular">
        <h5 class="popularheadline">HOTEL TOWER INN CHITTAGONG</h5>
        <p class="popularp"><em class="adrs">Jubilee Road,Chittagong <em class="emp">20 Km Distance from airport</em></em> <br />
          Hotel Tower Inn International Ltd. is spectacularly designed and added with traditional hospitality of courteous, attractive and personalized service and is conveniently locate......</p>
        </div><!--contentpopular ends here-->
        <div class="ratingpop">
        <div class="ratingpoptop">
        <div class="three">
        </div> <!--five ends here-->
        </div> <!--ratingpoptop ends here-->
        <div class="ratingpopbot">
        <h3 class="previous">$130</h3>
        <h3 class="next">$100</h3>
        </div> <!--ratingpopbot ends here-->
        </div> <!--ratingpop ends here-->
        </div> <!--threepopular ends here-->
        </a>
        </div> <!--eachpopular ends here-->
        
       <div class="eachpopular">
        <a href="hotel saint.php">
        <div class="threepopular">
        <div class="imgpopular">
        <div class ="imgpopulardiv">
        <img class="popimg" src="../image/hotel saint.jpg" alt=""/>
        </div> <!--imgpopulardiv ends here-->
        </div> <!--imgpopular ends here-->
        <div class="contentpopular">
        <h5 class="popularheadline">HOTEL SAINT MARTIN CHITTAGONG</h5>
        <p class="popularp"> <em class="adrs">AGRABAD C/A,Chittagong </em> <em class="emp"> 17 Km Distance from airport</em> <br />
          It is a hotel, which the management claims to be an ideal home away from home.Hotel Saint Martin with its prime Magnificent Mile location is the.....</p>
        </div><!--contentpopular ends here-->
        <div class="ratingpop">
        <div class="ratingpoptop">
        <div class="three">
        </div> <!--five ends here-->
        </div> <!--ratingpoptop ends here-->
        <div class="ratingpopbot">
        <h3 class="previous">$120</h3>
        <h3 class="next">$90</h3>
        </div> <!--ratingpopbot ends here-->
        </div> <!--ratingpop ends here-->
        </div> <!--threepopular ends here-->
        </a>
        </div> <!--eachpopular ends here-->
      
      <div class="eachpopular">
        <a href="hotel orchid.php">
        <div class="threepopular">
        <div class="imgpopular">
        <div class ="imgpopulardiv">
        <img class="popimg" src="../image/hotel orchid.png" alt=""/>
        </div> <!--imgpopulardiv ends here-->
        </div> <!--imgpopular ends here-->
        <div class="contentpopular">
        <h5 class="popularheadline">CHITTAGONG ORCHID BUSINESS HOTEL</h5>
        <p class="popularp"> <em class="adrs">Agrabad,Chittagong</em> <em class="emp"> 40 Km Distance from airport</em> <br />
          With the promising future of Bangladeshi economy and an optimism to instigate further growth in this fast placed industry, Orchid Business Hotel sets....</p>
        </div><!--contentpopular ends here-->
        <div class="ratingpop">
        <div class="ratingpoptop">
        <div class="four">
        </div> <!--five ends here-->
        </div> <!--ratingpoptop ends here-->
        <div class="ratingpopbot">
        <h3 class="previous">$150</h3>
        <h3 class="next">$120</h3>
        </div> <!--ratingpopbot ends here-->
        </div> <!--ratingpop ends here-->
        </div> <!--threepopular ends here-->
        </a>
        </div> <!--eachpopular ends here--> 
        
        
  
     </div> <!--allpopular ends here-->
     </div> <!--popularediv ends here-->
    
    </div> <!--popularhotels ends here-->
    </div> <!--rightcontentdiv ends here-->
    </div> <!--rightcontent ends here-->
    </div> <!--middlecontent ends here-->
  
 </div> <!--content ends here-->
 
 
 
 
 
  <!--footer starts here-->
 <footer id="footer">
 
   <!--footcontainer=companyinfo+popularcities+youraccount+stayconnected-->
   <div id="footcontainer">
       <div id="comp">
               <div class="allmain">
               <div class="listheaddiv">
                   <h5 class="listheadline">Company Info</h5>
               </div> <!--listheaddiv ends here-->
               <div class="ulistdiv">
                   <ul class="footerul">
                         <li class="footerlist"><a href="admin.php">Admin</a></li>
                         <li class="footerlist"><a href="faq.php">FAQ</a></li>
                         <li class="footerlist"><a href="customer.php">Customer Service</a></li>
                         <li class="footerlist"><a href="terms.php">Terms & Conditions</a></li>
                         <li class="footerlist"><a href="privacy.php">Privacy Statement</a></li>
             
                    </ul> 
                 </div> <!--companylistdiv ends here-->   
              </div>  <!--allmain ends here-->
       </div> <!--companyinfo ends here-->
       
       
       <div id="popu">
              <div class="allmain">
              <div class="listheaddiv">
                   <h5 class="listheadline">Popular Cities</h5>
               </div> <!--listheaddiv ends here-->
               <div class="ulistdiv">
                <ul class="footerul">
                         <li class="footerlist"><a href="dhaka.php">Dhaka</a></li>
                         <li class="footerlist"><a href="chittagong.php">Chittagong</a></li>
                         <li class="footerlist"><a href="sylhet.php">Sylhet</a></li>
                           <li class="footerlist"><a href="cox's bazar.php">Cox's Bazar</a></li>
                         <li class="footerlist"><a href="classifieds.php">Classifieds</a></li>
                
                </ul> 
                </div><!--popularlistdiv ends here-->
              </div> <!--allmain ends here-->
       </div>  <!--popularcities ends here-->
       
       
       <div id="your">
              <div class="allmain">
              <div class="listheaddiv">
                   <h5 class="listheadline">Your Account</h5>
               </div> <!--listheaddiv ends here-->
               <div class="ulistdiv">
              <ul class="footerul">
                         <li class="footerlist"><a href="sign in.php">My Account</a></li>
                         <li class="footerlist"><a href="my booking.php">My Booking</a></li>
                         <li class="footerlist"><a href="sign up.php">Agent Registration</a></li>
             
                    </ul> 
                </div> <!--yourlistdiv ends here-->    
              </div>  <!--allmain ends here-->
       </div>  <!--youraccount ends here-->
       
       
       
       
      <div id ="stay">
              <div class="allmain">
               <div class="listheaddiv">
                   <h5 class="listheadline">Stay Connected ....</h5>
               </div> <!--listheaddiv ends here-->
               <div class="ulistdiv">
                 <ul id="footerstayul">
                         <li class="staylist"><a href="https://www.facebook.com/" target="_blank"> <img id="imgstay"title="facebook"src="../image/facebook.PNG" alt=                                                                                       "facebook"></a></li>
                         <li class="staylist"><a href="https://twitter.com" target="_blank"> <img id="imgstay"title="twitter"src="../image/twitter.PNG" alt="twitter">                                                                                      </a></li>
                          
                         <li class="staylist"><a href="https://plus.google.com/" target="_blank"> <img id="imgstay"title="google+"src= "../image/googleplus.PNG" alt=                                                                                      "google+"></a></li>
                          <li class="staylist"><a href="http://www.youtube.com/" target="_blank"> <img id="imgstay"title="youtube"src="../image/youtube.PNG" alt="youtube">                                                                                          </a></li>
                  </ul> 
                 </div> <!--staylistdiv ends here--> 
               </div> <!--allmain ends here-->
      </div>  <!--stayconnected ends here--> 
      
      
      
  </div>  <!--footcontainer ends here-->
  <div id="copyright">
  <h4 id="copyheadline">Copyright © 2014- 2020 All Rights Reserved - <em>taufiqur.ruet@gmail.com</em></h4>
  
  </div> <!--copyright ends here-->
 </footer> <!--footer ends here--> 
         
         </div>  <!-- wrap ends here -->   
     
     
</body>
</html>

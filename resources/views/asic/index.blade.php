<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>CypherMines</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />

<!--FlexSlider-->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
<!--//FlexSlider-->
    
<link href="{{ asset('css/lsb.css') }}" rel="stylesheet" type="text/css"><!-- gallery -->

<!-- custom css theme files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">
<!-- //custom css theme files -->
<!-- particles.js container -->


<!-- scripts -->



<!-- google fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //google fonts -->
<style type="text/css">
    
#particles-js{
  width: 100%;
  height: 100%;
  background-color: ;
  background-image: url('');
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  position: absolute;
}

</style>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<!-- Body -->
<body>


<h2>เปลี่ยน POOL L3+</h2>
เครื่องของ : <select name="username" id="username">
    <option value="cyphermine" selected>cyphermine</option>
    <option value="pbpminer">pbpminer</option>
</select>
pool : <input type="text" name="pool" id="pool" placeholder="">
password : <input type="text" name="password" id="password" placeholder="">
IP เครื่อง : <input type="text" name="ip" id="ip" placeholder="เช่น 192.168.7.10">
เลขเครื่อง : <input type="text" name="number" id="number" placeholder="เช่น 30">
<button onclick="changePool();">เปลี่ยน Pool</button>
<!-- <table>
  <tr>
    <th></th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table> -->
<!-- Default-JavaScript-File -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- //Default-JavaScript-File -->

<!--Start-slider-script-->
    <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
        <script type="text/javascript">
        
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
      </script>
<!--End-slider-script-->

<!-- testimonials required-js-files-->
                            <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
                                <script src="{{ asset('js/owl.carousel.js') }}"></script>
                                    <script>
                                $(document).ready(function() {
                                  $("#owl-demo").owlCarousel({
                                    items : 1,
                                    lazyLoad : true,
                                    autoPlay : true,
                                    navigation : false,
                                    navigationText :  false,
                                    pagination : true,
                                  });
                                });
                                </script>
<!--// testimonials required-js-files-->

<!-- flexisel -->
        <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems:2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 2
                    }
                }
            });
            
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
<!-- //flexisel -->

<!-- gallery-pop-up -->
    <script src="{{ asset('js/lsb.min.js') }}"></script>
    <script>
    $(window).load(function() {
          $.fn.lightspeedBox();
        });
    </script>
<!-- //gallery-pop-up -->

<!-- smooth scrolling -->
    <script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
    <!-- //here ends scrolling icon -->
<!-- smooth scrolling -->

<!-- scrolling script -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });


 function changePool()
 {
    var _ant_pool1url = $('#pool').val();
    var _ant_pool2url = $('#pool').val();
    var _ant_pool3url = $('#pool').val();
    var _ant_pool1pw = $('#password').val();
    var _ant_pool2pw = $('#password').val();
    var _ant_pool3pw = $('#password').val();
    var _ant_pool1user = $('#username').val()+'.'+$('#number').val();
    var _ant_pool2user = $('#username').val()+'.'+$('#number').val();
    var _ant_pool3user = $('#username').val()+'.'+$('#number').val();
    var _ant_nobeeper = false;
    var _ant_notempoverctrl = false;
    var _ant_fan_customize_switch = false;
    var _ant_fan_customize_value = '';
    var _ant_voltage = "0725";
    var _ant_freq = "384";
    var _ip = $('#ip').val();


        $.ajax({
            url: '{{ url("/changePool") }}',
            method: 'POST',
            dataType:'json',
            timeout: 30000,
            cache: false,
            data: {_ant_pool1url:_ant_pool1url, _ant_pool1user:_ant_pool1user, _ant_pool1pw:_ant_pool1pw,_ant_pool2url:_ant_pool2url, _ant_pool2user:_ant_pool2user, _ant_pool2pw:_ant_pool2pw,_ant_pool3url:_ant_pool3url, _ant_pool3user:_ant_pool3user, _ant_pool3pw:_ant_pool3pw, _ant_nobeeper:_ant_nobeeper, _ant_notempoverctrl:_ant_notempoverctrl,_ant_fan_customize_switch:_ant_fan_customize_switch,_ant_fan_customize_value:_ant_fan_customize_value, _ant_freq:_ant_freq, _ant_voltage:_ant_voltage,_ip:_ip,_token: '{!! csrf_token() !!}'},
    
        }).done(function(data){

           alert(data);
           $('#ip').val('');
           $('#number').val('');
           $('#ip').focus();
            console.log(data);
        }).fail(function(data){
            alert('error');
        });    
 }   
</script> 


<!-- scripts -->
<!-- <script src="{{ asset('js/particles.js') }}"></script> -->
<!-- <script src="{{ asset('js/appParticles.js') }}"></script> -->

<script src="{{ asset('js/lib/stats.js') }}"></script>
<script>
  // var count_particles, stats, update;
  // stats = new Stats;
  // stats.setMode(0);
  // stats.domElement.style.position = 'absolute';
  // stats.domElement.style.left = '0px';
  // stats.domElement.style.top = '0px';
  // document.body.appendChild(stats.domElement);
  // count_particles = document.querySelector('.js-count-particles');
  // update = function() {
  //   stats.begin();
  //   stats.end();
  //   if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
  //     count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
  //   }
  //   requestAnimationFrame(update);
  // };
  // requestAnimationFrame(update);
</script>
<!-- //scrolling script -->
    
</body>
<!-- //Body -->
</html>
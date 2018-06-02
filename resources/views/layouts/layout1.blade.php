<html>
<head>
	<title>Demoledora</title>
	<link href="{{url('snowboarding_template/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{url('snowboarding_template/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{url('css/main.css')}}" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<script src="{{url('snowboarding_template/js/jquery.min.js')}}"></script>
	<script src="{{url('js/main.js')}}"></script>
	<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
	<link rel="stylesheet" href="{{url('snowboarding_template/css/fwslider.css')}}" media="all">
	<script src="{{url('snowboarding_template/js/jquery-ui.min.js')}}"></script>
	<script src="{{url('snowboarding_template/js/fwslider.js')}}"></script>
	<!----details-product-slider--->
	<!-- Include the Etalage files -->
	<link rel="stylesheet" href="{{url('snowboarding_template/css/etalage.css')}}">
	<script src="{{url('snowboarding_template/js/jquery.etalage.min.js')}}"></script>
	<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});
				// This is for the dropdown list example:
				$('.dropdownlist').change(function(){
					etalage_show( $(this).find('option:selected').attr('class') );
				});

		});
	</script>
</head>
<body>
	@include('store.partials.nav')

	@yield('content')
	
	@include('store.partials.footer')
</body>
</html>
<?php
$results=[];
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('fontawesome.min.css')}}">
    <!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('nalika-icon.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('carousel.css')}}">

    <link rel="stylesheet" href="{{asset('fontawesome1.min.css')}}">
    <link rel="stylesheet" href="{{asset('all.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap2.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('chartist.css')}}">
    <link rel="stylesheet" href="{{asset('materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('c3.css')}}">
    <link rel="stylesheet" href="{{asset('morris.css')}}">
    <link rel="stylesheet" href="{{asset('themify-icons1.css')}}">
    <link rel="stylesheet" href="{{asset('themify-icons2.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap1.min.css')}}">


    <link rel="stylesheet" href="{{asset('owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('main.css')}}">
    <!-- morrisjs CSS
		============================================ -->

    <link rel="stylesheet" href="{{asset('morris1.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('modernizr-2.8.3.min.js')}}"></script>

</head>
<style>
    body{
        background-color: #efeff6;
    }

    :after,
    :before {

        color: white;
    }

    .header-right-info .admin-name {

        color: black;

    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0 0 40px;
        font-weight: 700;
        color: black;
    }

    .nav>li>a>img {
        max-width: none;
        background-color: white;
        border-radius: 22px;
    }

    .breadcome-heading .form-control,
    .breadcome-heading .form-control:focus {
        background: #ffffff;
    }

    .rowss {
        background-color: yellow;
    }

    .h4 {
        color: white;
    }

    .card-body {}

    .card {
        margin-bottom: 30px;
        border: none;
        -webkit-box-shadow: 0px 1px 2px 1px rgb(154 154 204 / 22%);
        -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
        box-shadow: 0px 1px 2px 1px rgb(154 154 204 / 22%);
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0.25rem;
        width: 363px;
    }

    .card3 {
        max-width: 100%;
        height: auto;
        margin-bottom: 22px;

    }

    .col-lg-5 {

        margin-left: 170px;
    }

    .col-lg-6 {
        width: 33%;
    }

    img.card2 {
        margin-bottom: 54px;
    }

    .mobi1 {
        text-align: left;
        margin-left: 10px;
        color: black;
        margin-top: 10px;
    }

    .mob1 {
        text-align: left;
        margin-left: 10px;
        margin-bottom: -23px;
        color: black;
        margin-bottom: 20px;
    }

    .link:link,
    .link:visited {
        background-color: #007bff;
        color: white;
        padding: 06px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin-left: 0px;
        margin-bottom: 0px;
        border-radius: 1px;
    }

    .link:hover,
    .link:active {
        background-color: blue;
    }

    .link1:link,
    .link1:visited {
        background-color: orangered;
        color: white;
        padding: 6px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin-left: 60px;
        margin-bottom: 1px;
        border-radius: 2px;

    }

    .link1:hover,
    .link1:active {
        background-color: #007bff;
    }

    .profile-dtl img {

        background-color: white;
    }

    .fa-star:before {
        content: "\f005";
        color: black;

    }

    .pageheader-title {
        color: black;

    }

    h3 {
        margin: -17px 0 100px;
        font-weight: 700;
        color: white;
    }

    h4 {
        margin: -17px 0 64px;
        font-weight: 700;
        color: white;
    }

    .page-header {
        padding-bottom: -19px;
        margin: 49px 0 20px;
        border-bottom: 1px solid #eee;
    }

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        color: white;
    }
    ul.dtl-social {
    display: flex;
    justify-content: center;
    margin-top:-30px;
}
p{
    color:black;
}
</style>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <form action="{{url('review')}}" method="get">
    


        

                           
        <div class="container">
    	<h1 class="mt-5 mb-5">Review & Rating System in PHP & Mysql using Ajax</h1>
    	<div class="card">
    		<div class="card-header">Sample Product</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if(isset($_POST["action"]))
        {
            $average_rating = 0;
            $total_review = 0;
            $five_star_review = 0;
            $four_star_review = 0;
            $three_star_review = 0;
            $two_star_review = 0;
            $one_star_review = 0;
            $total_user_rating = 0;
            $review_content = array();
        
            $query = "
            SELECT * FROM review_table 
            ORDER BY review_id DESC
            ";
        
            $result = $connect->query($query, PDO::FETCH_ASSOC);
        
            foreach($result as $row)
            {
                $review_content[] = array(
                    'user_name'		=>	$row["user_name"],
                    'user_review'	=>	$row["user_review"],
                    'rating'		=>	$row["user_rating"],
                    'datetime'		=>	date('l jS, F Y h:i:s A', $row["datetime"])
                );
        
                if($row["user_rating"] == '5')
                {
                    $five_star_review++;
                }
        
                if($row["user_rating"] == '4')
                {
                    $four_star_review++;
                }
        
                if($row["user_rating"] == '3')
                {
                    $three_star_review++;
                }
        
                if($row["user_rating"] == '2')
                {
                    $two_star_review++;
                }
        
                if($row["user_rating"] == '1')
                {
                    $one_star_review++;
                }
        
                $total_review++;
        
                $total_user_rating = $total_user_rating + $row["user_rating"];
        
            }
        
            $average_rating = $total_user_rating / $total_review;
        
            $output = array(
                'average_rating'	=>	number_format($average_rating, 1),
                'total_review'		=>	$total_review,
                'five_star_review'	=>	$five_star_review,
                'four_star_review'	=>	$four_star_review,
                'three_star_review'	=>	$three_star_review,
                'two_star_review'	=>	$two_star_review,
                'one_star_review'	=>	$one_star_review,
                'review_data'		=>	$review_content
            );
        
            echo json_encode($output);
        
        }

        ?>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="rowss">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>

    </div>
    <!-- jquery
		============================================ -->
    <script src="{{asset('jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('bootstrap.min copy.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <script src="{{asset('jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('popper.min.js')}}"></script>
    <script src="{{asset('bootstrap.min.js')}}"></script>


    <script>
        var rating_data = 0;

        $('#add_review').click(function() {

            $('#review_modal').modal('show');

        });

        $(document).on('mouseenter', '.submit_star', function() {

            var rating = $(this).data('rating');

            reset_background();

            for (var count = 1; count <= rating; count++) {

                $('#submit_star_' + count).addClass('text-warning');

            }

        });

        function reset_background() {
            for (var count = 1; count <= 5; count++) {

                $('#submit_star_' + count).addClass('star-light');

                $('#submit_star_' + count).removeClass('text-warning');

            }
        }

        $(document).on('mouseleave', '.submit_star', function() {

            reset_background();

            for (var count = 1; count <= rating_data; count++) {

                $('#submit_star_' + count).removeClass('star-light');

                $('#submit_star_' + count).addClass('text-warning');
            }

        });

        $(document).on('click', '.submit_star', function() {

            rating_data = $(this).data('rating');

        });

        $('#save_review').click(function() {

            var user_name = $('#user_name').val();

            var Rev_Desc = $('#Rev_Desc').val();
            var result = '<?php// echo $_GET['result']; ?>';
            if (user_name == '' || Rev_Desc == '') {
                alert("Please Fill Both Field");
                return false;
            } else {
                $.ajax({
                    url: "equip_detail_process.php",
                    method: "POST",
                    data: {
                        rating_data: rating_data,
                        user_name: user_name,
                        Rev_Desc: Rev_Desc,
                        result: result

                    },
                    success: function(data) {
                        $('#review_modal').modal('hide');

                        load_rating_data();

                        alert(data);
                    }
                })
            }

        });
    </script>

    <script>
       
        load_rating_data();

        function load_rating_data() {
            $.ajax({
                url: "",
                method: "POST",
                data: {
                    action: 'load_data'
                },
                dataType: "JSON",
                success: function(data) {
                    $('#average_rating').text(data.average_rating);
                    $('#total_review').text(data.total_review);

                    var count_star = 0;

                    $('.main_star').each(function() {
                        count_star++;
                        if (Math.ceil(data.average_rating) >= count_star) {
                            $(this).addClass('text-warning');
                            $(this).addClass('star-light');
                        }
                    });

                    $('#total_five_star_review').text(data.five_star_review);

                    $('#total_four_star_review').text(data.four_star_review);

                    $('#total_three_star_review').text(data.three_star_review);

                    $('#total_two_star_review').text(data.two_star_review);

                    $('#total_one_star_review').text(data.one_star_review);

                    $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

                    $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

                    $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

                    $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

                    $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

                    if (data.review_data.length > 0) {
                        var html = '';

                        for (var count = 0; count < data.review_data.length; count++) {
                            html += '<div class="row mb-3">';

                            html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' + data.review_data[count].user_name.charAt(0) + '</h3></div></div>';

                            html += '<div class="col-sm-11">';

                            html += '<div class="card1">';

                            html += '<div class="card-header1"><b>' + data.review_data[count].user_name + '</b></div>';

                            html += '<div class="card-body1">';

                            for (var star = 1; star <= 5; star++) {
                                var class_name = '';

                                if (data.review_data[count].rating >= star) {
                                    class_name = 'text-warning';
                                } else {
                                    class_name = 'star-light';
                                }

                                html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
                            }

                            html += '<br />';

                            html += data.review_data[count].Rev_Desc;

                            html += '</div>';

                            html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';

                            html += '</div>';

                            html += '</div>';

                            html += '</div>';
                        }

                        $('#review_content').html(html);
                    }
                }
            })
        }
    </script>
</body>

</html>
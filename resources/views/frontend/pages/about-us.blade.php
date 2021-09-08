@extends('frontend.layouts.master')

@section('title','E-SHOP || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Trang chủ<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Giới thiệu</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	
	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3> Xin Chào Các bạn Mình là <span>HTTshop </span> đây</h3>
							<p>Thương hiệu HTT-shop thành lập vào ngày 7/7/2021, là một trong những thương hiệu uy tín và nổi bật trong ngành kỹ thuật số. Công ty được xây dựng và phát triển dựa trên sự hợp tác từ những thương hiệu lớn trong ngành kỹ thuật số, nhằm mang đến cho người tiêu dùng những sản phẩm chất lượng với giá thành hợp lý nhất.</p>
							<p> <b>Sứ mệnh của công ty</b> <br>

							HTT-shop luôn mong muốn đem lại sự hài lòng cho khách hàng không chỉ về tác phong phục vụ mà còn sự an tâm về chất lượng sản phẩm. Chúng tôi cam kết sẽ mang đến khách hàng những sản phẩm và dịch vụ tốt nhất thuộc ngành thiết bị kỹ thuật số.</p>


<p><b>Tầm nhìn công ty </b> <br>
Với định hướng xây dựng HTT-shop trở thành thương hiệu bán hàng điện tử, kỹ thuật số công nghệ cao hàng đầu Việt Nam. Chúng tôi cam kết sẽ là địa chỉ tin cậy tuyệt đối cho khách hàng muốn tìm kiếm những sản phẩm uy tín, chất lượng được đảm bảo dựa trên cam kết chính sách đổi, trả và dịch vụ bảo hành sản phẩm của chúng tôi.</p>

<p> <b>Định hướng phát triển của công ty</b><br>
Giữ vững và ngày càng tăng tốc độ phát triển trên mọi chỉ tiêu như: Doanh số, thị phần, nhân lực, giá trị thương hiệu, số lượng và chất lượng sản phẩm. Tập trung các nguồn lực để cung cấp sản phẩm và dịch vụ đáp ứng nhu cầu ngày càng cao của khách hàng.

HTT-shop tự hào có một đội ngũ nhân viên sáng tạo, năng động, nhiệt tình và ham học hỏi để mang đến cho khách hàng không những sản phẩm chất lượng cao với giá ưu đãi, mà đội ngũ tư vấn tư vấn nhiệt tình và giao hàng tận nơi. </p>

<p> <b>Là đối tác tin cậy</b> <br>
HTT-shop đã và đang hợp tác phân phối với nhiều thương hiệu uy tín nhất trên toàn thế giới nhằm mang đến cho khách hàng nhiều sự lựa chọn cũng như an tâm về chất lượng hơn.Các thương hiệu máy ảnh, kỹ thuật số như: SONY, NIKON, CANON, FUJIFILM, SAMSUNG,… và nhiều nhãn hàng khác.</p>
							<!-- <p>@foreach($settings as $data) {{$data->description}} @endforeach</p> -->
							<div class="button">
								<a href="{{route('blog')}}" class="btn"> Blog</a>
								<a href="{{route('contact')}}" class="btn primary">Liên hệ</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							{{-- <div class="button">
								<a href="https://www.youtube.com/watch?v=nh2aYrGMrIE" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div> --}}
							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End About Us -->
	
	<!-- Start Team -->
	{{-- <section id="team" class="team section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Xứ mệnh công ty</h2>
						<p>Bình Minh Digital luôn mong muốn đem lại sự hài lòng cho khách hàng không chỉ về tác phong phục vụ mà còn sự an tâm về chất lượng sản phẩm. Chúng tôi cam kết sẽ mang đến khách hàng những sản phẩm và dịch vụ tốt nhất thuộc ngành thiết bị kỹ thuật số. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single Team -->
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-team">
						<!-- Image -->
						<div class="image">
							<img src="images/team/team1.jpg" alt="#">
						</div>
						<!-- End Image -->
						<div class="info-head">
							<!-- Info Box -->
							<div class="info-box">
								<h4 class="name"><a href="#">Hồ Thủy Tiên</a></h4>
								<span class="designation">Quản lý</span>
							</div>
							<!-- End Info Box -->
							<!-- Social -->
							<div class="social-links">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- End Social -->
						</div>
					</div>
				</div>	
				<!-- End Single Team -->
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-team">
						<!-- Image -->
						<div class="image">
							<img src="images/team/team2.jpg" alt="#">
						</div>
						<!-- End Image -->
						<div class="info-head">
							<!-- Info Box -->
							<div class="info-box">
								<h4 class="name"><a href="#">Hồ Quế Linh</a></h4>
								<span class="designation">Markeitng</span>
							</div>
							<!-- End Info Box -->
							<!-- Social -->
							<div class="social-links">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- End Social -->
						</div>
					</div>
				</div>	
				<!-- End Single Team -->
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-team">
						<!-- Image -->
						<div class="image">
							<img src="images/team/team3.jpg" alt="#">
						</div>
						<!-- End Image -->
						<div class="info-head">
							<!-- Info Box -->
							<div class="info-box">
								<h4 class="name"><a href="#">Quỳnh Nhi</a></h4>
								<span class="designation">Web Developer</span>
							</div>
							<!-- End Info Box -->
							<!-- Social -->
							<div class="social-links">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- End Social -->
						</div>
					</div>
				</div>	
				<!-- End Single Team -->
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-team">
						<!-- Image -->
						<div class="image">
							<img src="images/team/team4.jpg" alt="#">
						</div>
						<!-- End Image -->
						<div class="info-head">
							<!-- Info Box -->
							<div class="info-box">
								<h4 class="name"><a href="#">David Zone</a></h4>
								<span class="designation">SEO Expert</span>
							</div>
							<!-- End Info Box -->
							<!-- Social -->
							<div class="social-links">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- End Social -->
						</div>
					</div>
				</div>	
				<!-- End Single Team -->
			</div>	
		</div>
	</section> --}}
	<!--/ End Team Area -->
	
<!-- Start Shop Services Area  -->
<section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Miễn phí vận chuyển</h4>
                        <p>đơn hàng trên $500</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Đổi trả</h4>
                        <p>trong vòng 30 ngày</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Thanh toán an toàn</h4>
                        <p>qua thẻ tín dụng</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Giá tốt</h4>
                        <p> Nhưng hàng chất lượng</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
	<!-- End Shop Services Area -->
	
	@include('frontend.layouts.newsletter')
@endsection
@extends('frontend.frontendlayou')



<!-- preloader -->
{{-- <div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div> --}}

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	{{-- <header class="header-default">
		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">
				<!-- site logo -->
				<a class="navbar-brand" href="index.html"><img src="images/logo.svg" alt="logo" /></a> 

				<div class="collapse navbar-collapse">
					<!-- menus -->
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="index.html">Home</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="index.html">Magazine</a></li>
								<li><a class="dropdown-item" href="personal.html">Personal</a></li>
								<li><a class="dropdown-item" href="personal-alt.html">Personal Alt</a></li>
								<li><a class="dropdown-item" href="minimal.html">Minimal</a></li>
								<li><a class="dropdown-item" href="classic.html">Classic</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="category.html">Lifestyle</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="category.html">Inspiration</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="blog-single.html#">Pages</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="category.html">Category</a></li>
								<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
								<li><a class="dropdown-item" href="blog-single-alt.html">Blog Single Alt</a></li>
								<li><a class="dropdown-item" href="about.html">About</a></li>
								<li><a class="dropdown-item" href="contact.html">Contact</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
					</ul>
				</div>

				<!-- header right section -->
				<div class="header-right">
					<!-- social icons -->
					<ul class="social-icons list-unstyled list-inline mb-0">
						<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-pinterest"></i></a></li>
						<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-medium"></i></a></li>
						<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-youtube"></i></a></li>
					</ul>
					<!-- header buttons -->
					<div class="header-buttons">
						<button class="search icon-button">
							<i class="icon-magnifier"></i>
						</button>
						<button class="burger-menu icon-button">
							<span class="burger-icon"></span>
						</button>
					</div>
				</div>
			</div>
		</nav>
	</header> --}}

    @section('missing')
{{-- @dd($post->category->title); --}}
	<!-- section main content -->
	<section class="main-content mt-3">
		<div class="container-xl">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href='{{route('catagorypost.all',$post->category->slug)}}'>{{$post->category->title}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
                </ol>
            </nav>

			<div class="row gy-4">

				<div class="col-lg-8">
					<!-- post single -->
                    <div class="post post-single">
						<!-- post header -->
						<div class="post-header">
							<h1 class="title mt-0 mb-3">{{$post->title}}</h1>
							<ul class="meta list-inline mb-0">

								<li class="list-inline-item"><a href="blog-single.html#"><img src="{{asset('storage/logo/'.$post->user->imgename)}}" width="20px" class="author" alt="author"/>{{$post->user->name}}</a></li>

								<li class="list-inline-item"><a href="{{route('catagorypost.all',$post->category->slug)}}">{{$post->category->title}}</a></li>
								<li class="list-inline-item"> {{Carbon\Carbon::parse($post->created_at)->format('d M Y')}} </li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<img src="{{asset('storage/'.$post->future_img)}}" alt="post-title" />
						</div>
						<!-- post content -->
						<div class="post-content clearfix">
							<p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same <a href="blog-single.html#">vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>

							<p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p>

							<figure class="figure">
								<img src="images/posts/post-lg-2.jpg" class="figure-img img-fluid rounded" alt="...">
								<figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
							</figure>

							<p>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable.</p> 
							
							<img src="images/posts/single-sm-1.jpg" class="rounded alignleft" alt="...">
							<p>One could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>

							<p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing <a href="blog-single.html#">European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>

							<p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>

							<h4>I should be incapable of drawing a single stroke</h4>

							<ul>
								<li>How about if I sleep a little bit</li>
								<li>A collection of textile samples lay spread out</li>
								<li>His many legs, pitifully thin compared with</li>
								<li>He lay on his armour-like back</li>
								<li> Gregor Samsa woke from troubled dreams</li>
							</ul>

							<p>To an English person, it will seem like simplified <a href="blog-single.html#">English</a>, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
						</div>
						<!-- post bottom section -->
						<div class="post-bottom">
							<div class="row d-flex align-items-center">
								<div class="col-md-6 col-12 text-center text-md-start">
									<!-- tags -->
									<a href="blog-single.html#" class="tag">#Trending</a>
									<a href="blog-single.html#" class="tag">#Video</a>
									<a href="blog-single.html#" class="tag">#Featured</a>
								</div>
								<div class="col-md-6 col-12">
									<!-- social icons -->
									<ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
										<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-linkedin-in"></i></a></li>
										<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-pinterest"></i></a></li>
										<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-telegram-plane"></i></a></li>
										<li class="list-inline-item"><a href="blog-single.html#"><i class="far fa-envelope"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

                    </div>

					<div class="spacer" data-height="50"></div>

					<div class="about-author padding-30 rounded">
						<div class="thumb">
							<img src="images/other/avatar-about.png" alt="Katen Doe" />
						</div>
						<div class="details">
							<h4 class="name"><a href="blog-single.html#">Katen Doe</a></h4>
							<p>Hello, I’m a content writer who is fascinated by content fashion, celebrity and lifestyle. She helps clients bring the right content to the right people.</p>
							<!-- social icons -->
							<ul class="social-icons list-unstyled list-inline mb-0">
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-pinterest"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-medium"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Comments ({{$post->totalcomments}})</h3>
						<img src="images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- post comments -->
					<div class="comments bordered padding-30 rounded">

						<ul class="comments">
							
							
								@foreach ($post->Comments as $cmt)
								<!-- comment item -->
							<li class="comment rounded">
								<div class="thumb">
									<img src="images/other/comment-1.png" alt="John Doe" />
								</div>
								<div class="details">
									<h4 class="name"><a href="blog-single.html#">{{$cmt->user->name}}</a></h4>
									<span class="date">Jan 08, 2021 14:41 pm</span>
									<p>{{$cmt->contant}}</p>
									<a href="#comment-form" data-name="{{$cmt->user->name}}"  data-perent_id="{{$cmt->user->id}}" class="repleybtn btn btn-default btn-sm">Reply</a>
								</div>
							</li>	


							{{-- replay comment --}}
								<!-- comment item -->
								@if (count($cmt->replies)>0)

								@foreach ($cmt->replies as $replay)
								<li class="comment rounded child">
									<div class="thumb">
										<img src="images/other/comment-1.png" alt="John Doe" />
									</div>
									<div class="details">
										<h4 class="name"><a href="blog-single.html#">{{$replay->user->name}}</a></h4>
										<span class="date">Jan 08, 2021 14:41 pm</span>
										<p>{{$replay->contant}}</p>
										<a href="#comment-form" data-name="{{$cmt->user->name}}"  data-perent_id="{{$cmt->user->id}}" class="repleybtn btn btn-default btn-sm">Reply</a>
									</div>
								</li>

								@include('layouts.Utility.Comment')
									
								@endforeach
								@endif
								

							
								@endforeach
						</ul> 
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title commentt">Leave Comment</h3>
						<img src="images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- comment form -->
					<div class="comment-form rounded bordered padding-30">

						<form action="{{route('all.comment')}}" id="comment-form" class="comment-form" method="post" enctype="multipart/form-data">
							@csrf
							@method('POST')	
							
							<input name="post_id" type="hidden" value="{{$post->id}}">
							<input name="perent_id" type="hidden" value="">
							<div class="messages"></div>	
							
							<div class="row">

								<div class="column col-md-12">
									<!-- Comment textarea -->
									<div class="form-group">
										<input name="perent_id" type="hidden" value="">
										<textarea name="contant" id="InputComment" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
									</div>
								</div>
{{-- 
								<div class="column col-md-6">
									<!-- Email input -->
									<div class="form-group">
										<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email address" required="required">
									</div>
								</div>

								<div class="column col-md-6">
									<!-- Name input -->
									<div class="form-group">
										<input type="text" class="form-control" name="InputWeb" id="InputWeb" placeholder="Website" required="required">
									</div>
								</div>
	
								<div class="column col-md-12">
									<!-- Email input -->
									<div class="form-group">
										<input type="text" class="form-control" id="InputName" name="InputName" placeholder="Your name" required="required">
									</div>
								</div> --}}
						
							</div>
	
							<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button><!-- Submit Button -->
	
						</form>
					</div>
                </div>

				<div class="col-lg-4">

					<!-- sidebar -->
					<div class="sidebar">
						<!-- widget about -->
						<div class="widget rounded">
							<div class="widget-about data-bg-image text-center" data-bg-image="images/map-bg.png">
								<img src="images/logo.svg" alt="logo" class="mb-4" />
								<p class="mb-4">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
								<ul class="social-icons list-unstyled list-inline mb-0">
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-medium"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>

						<!-- widget popular posts -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Popular Posts</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<!-- post -->
								<div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">1</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/tabs-1.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">3 Easy Ways To Make Your iPhone Faster</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
								<!-- post -->
								<div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">2</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/tabs-2.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
								<!-- post -->
								<div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">3</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/tabs-3.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
							</div>		
						</div>

						<!-- widget categories -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Explore Topics</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<ul class="list">
									
									
                                    @foreach ($populerposts as $populerpost)
									<li><a href="blog-single.html#">{{$post->category->title}}</a><span>({{$populerpost->totalpost}})</span></li>
                                    
                                @endforeach
								</ul>
                                
                            </div>
                        </div>

						<!-- widget newsletter -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Newsletter</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
								<form>
									<div class="mb-2">
										<input class="form-control w-100 text-center" placeholder="Email address…" type="email">
									</div>
									<button class="btn btn-default btn-full" type="submit">Sign Up</button>
								</form>
								<span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="blog-single.html#">Privacy Policy</a></span>
							</div>		
						</div>

						<!-- widget post carousel -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Celebration</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<div class="post-carousel-widget">
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">How to</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="blog-single.html#">Katen Doe</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">Trending</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="images/widgets/widget-carousel-2.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">Master The Art Of Nature With These 7 Tips</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="blog-single.html#">Katen Doe</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">How to</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="blog-single.html#">Katen Doe</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
								<!-- carousel arrows -->
								<div class="slick-arrows-bot">
									<button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
									<button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
								</div>
							</div>		
						</div>

						<!-- widget advertisement -->
						<div class="widget no-container rounded text-md-center">
							<span class="ads-title">- Sponsored Ad -</span>
							<a href="blog-single.html#" class="widget-ads">
								<img src="images/ads/ad-360.png" alt="Advertisement" />	
							</a>
						</div>

						<!-- widget tags -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Tag Clouds</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<a href="blog-single.html#" class="tag">#Trending</a>
								<a href="blog-single.html#" class="tag">#Video</a>
								<a href="blog-single.html#" class="tag">#Featured</a>
								<a href="blog-single.html#" class="tag">#Gallery</a>
								<a href="blog-single.html#" class="tag">#Celebrities</a>
							</div>		
						</div>

					</div>

				</div>

			</div>

		</div>
	</section>
	@push('javascrift')
	<script>
		$('.repleybtn').click(function(){
		let name = $(this).attr('data-name');
		let perent_id = $(this).attr('data-perent_id');
		$('input[name="perent_id"]').val(perent_id);
		$('.commentt').html(`Replaying to ${name}`);
			
		})
			
		

	</script>
		
	@endpush

	@endsection
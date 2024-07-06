@if (count($replay->replies)>0)

								@foreach ($replay->replies as $replay)
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
								

							
								
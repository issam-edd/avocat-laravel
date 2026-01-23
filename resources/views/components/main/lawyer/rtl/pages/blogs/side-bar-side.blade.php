<!-- Sidebar Side -->
<div class="sidebar-side col-lg-4 col-md-12 col-sm-12" dir="rtl">
                	<aside class="sidebar sticky-top">
						<div class="sidebar-inner">

							<!-- Search -->
							{{-- <div class="sidebar-widget search-box">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="search" name="search-field" value="" placeholder="بحث..." required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div> --}}


							<!-- Popular Post Widget -->
							<div class="sidebar-widget popular-posts text-right" dir="rtl">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>اخر المقالات</h5>
									</div>

									@if($latest_blogs->count() > 0)
										@foreach($latest_blogs as $blog)
											<x-main.lawyer.rtl.pages.blogs.side-bar-blog :data="[ 'blog' => $blog, 'lawyer' => $lawyer ]" />
										@endforeach
									@else
										<div>ستتم اضافة مقالات اخرى قريبا</div>
									@endif
								</div>
							</div>

						</div>
					</aside>
				</div>

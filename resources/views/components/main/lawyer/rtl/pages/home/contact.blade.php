<div class="inner-column text-right" dir="rtl">
					<div class="sec-title">
						<h2>احصل على استشارة مجانية</h2>
						@if(session()->has('success'))
							<p class="text-success">{{ session()->get('success') }}</p>
						@endif
					</div>
					
					<!-- Default Form -->
					<div class="default-form">
						<form method="post" action="{{ route('lawyers.contact.send', $lawyer->lawyer_id) }}">
							@csrf
							<div class="row clearfix">
							
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="first_name" placeholder="الاسم الشخصي" required>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="last_name" placeholder="اسم العائلة" required>
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone_number" placeholder="رقم الهاتف" required>   
								</div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="email" placeholder="البريد الإلكتروني" required>   
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<textarea name="body" placeholder="رسالة"></textarea>
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 form-group d-flex justify-content-end">
									<button class="theme-btn btn-style-two" type="submit" name="submit-form">
                                        <span class="txt">
                                        إرسال
                                        </span>
                                    </button>
								</div>
								
							</div>
						</form>
					</div>
					<!-- End Default Form -->
					
				</div>
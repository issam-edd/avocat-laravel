<!-- Contact Form Section -->
<section dir="rtl" class="contact-form-section text-right">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>ارسل لنا رسالة</h2>
            @if(session()->has('success'))
                <p class="text-success">{{ session()->get('success') }}</p>
            @endif
        </div>
        <!-- Contact Form -->
        <div class="contact-form">
            
            <form method="post" action="{{ route('lawyers.contact.send', $lawyer->lawyer_id) }}">
                @csrf
                <div class="row clearfix">
                
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="first_name" placeholder="الاسم الشخصي" required>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="last_name" placeholder="الإسم العائلي" required>
                    </div>
                    
                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <input type="text" name="phone_number" placeholder="رقم الهاتف" required>   
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <input type="text" name="email" placeholder="البريد الإلكتروني" required>   
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea name="body" placeholder="رسالة" required></textarea>
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
            
            <!--End Contact Form -->
        </div>
    </div>
</section>
<!-- End Contact Form Section -->
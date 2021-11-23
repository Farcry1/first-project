
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">تواصل معنا</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">قم بتعبئة بيانتك في الاسفل </p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form action="{{ route('home2') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <!-- Name input-->

                  <div class="form-floating mb-3">
                      <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                      <label for="name">الاسم كامل</label>
                      <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                  </div>
                  <!-- Email address input-->
                  <div class="form-floating mb-3">
                      <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                      <label for="email">الايميل</label>
                      <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                      <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                  </div>
                  <!-- Phone number input-->
                  <div class="form-floating mb-3">
                      <input class="form-control" name="number" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                      <label for="phone">رقم الجوال</label>
                      <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                  </div>
                  <!-- Message input-->
                  <div class="form-floating mb-3">
                      <textarea class="form-control" name="text" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                      <label for="message">رسالتك</label>
                      <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                  </div>

                  <!-- Submit success message-->
                  <!---->
                  <!-- This is what your users will see when the form-->
                  <!-- has successfully submitted-->

                  <!-- Submit error message-->
                  <!---->
                  <!-- This is what your users will see when there is-->
                  <!-- an error submitting the form-->

                  <!-- Submit Button-->
                 <div ><center><button class="btn btn-primary btn-xl" type="submit">ارسال</button></center></div>
              </form>
              </form>

            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-telephone fs-2 mb-3 text-muted"></i>
                <div>082529088</div>
            </div>
        </div>
    </div>


</section>

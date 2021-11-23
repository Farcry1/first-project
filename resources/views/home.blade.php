

@include('header')

        <!-- About-->
        <meta charset="utf-8">
        <title>Almusadder Municipality</title>

        <link rel="stylesheet"  href="css/page1.css">
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold"> بلدية المصدر</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">منظمة حكومية</p>
                        <a class="btn btn-primary btn-xl" href="#about">التالي</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">رسالة ترحيب</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">أهلا وسهلا بكم في موقع بلدية المصدر الرسمي، نستقبل شكواكم واقتراحاتكم في صندوق الشكاوي اسفل الصفحة، ومعا نعمل من أجل خدمات متميزة ، ونؤكد أننا نحترم حق الجميع في إبداء الرأي والنقاش البنّاء الهادف للمصلحة العامة، و ننوه إلى أننا نحتفظ بحق حذف أي تعليق يسيء للآخرين .</p>
                        <a class="btn btn-light btn-xl" href="#services">الخدمات</a>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <div class="nana">@include('rt')</div>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">الخدمات</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-droplet fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2"><a class="btn btn-primary btn-xl" href="#about">خدمة المياه</a></h3>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-trash fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2"><a class="btn btn-primary btn-xl" href="#about">ادارة النفايات الصلبة</a></h3>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-shop-window fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2"><a class="btn btn-primary btn-xl" href="#about">سوق الخضار</a></h3>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-building fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2"><a class="btn btn-primary btn-xl" href="#about">الارث الحضاري للمدينة</a></h3>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-building fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2"><a class="btn btn-primary btn-xl" href="#about">الخدمات الثقافية والاجتماعية</a></h3>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-building fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2"><a class="btn btn-primary btn-xl" href="#about"> شق الطرق والمرافق العامة </a></h3>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-building fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2"><a class="btn btn-primary btn-xl" href="#about">الصرف الصحي</a></h3>

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- Portfolio-->







        <!-- Call to action-->
       @include('footer')        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

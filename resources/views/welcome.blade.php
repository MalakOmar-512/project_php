<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeliveryHub</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            font-family: 'Cairo', sans-serif;
        }

        body {
            background: #070312;
            color: white;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        .hero-bg {
            background:
                radial-gradient(circle at center, rgba(168, 85, 247, .25), transparent 50%),
                radial-gradient(circle at top right, rgba(236, 72, 153, .15), transparent 40%),
                #070312;
        }
        .hero-frame{
    position: relative;
    border-radius: 30px;
    padding: 4px;
    overflow: hidden;
}

.hero-frame::before{
    content: "";
    position: absolute;
    inset: -80%;
    background: conic-gradient(
        from 0deg,
        #06b6d4,
        #8b5cf6,
        #ec4899,
        #06b6d4
    );
    animation: spinBorder 4s linear infinite;
}

.hero-frame::after{
    content: "";
    position: absolute;
    inset: 4px;
    background: #12071f;
    border-radius: 26px;
    z-index: 1;
}


.hero-frame img{
    position: relative;
    z-index: 2;
    width: 100%;
    border-radius: 26px;

    box-shadow:
        0 0 25px rgba(168,85,247,.4),
        0 0 50px rgba(217,70,239,.3),
        0 0 80px rgba(6,182,212,.2);
}
.hero-image{
    position:relative;
}

.hero-glow{
    position:absolute;
    width:450px;
    height:450px;

    background:radial-gradient(
        circle,
        rgba(168,85,247,.35),
        transparent 70%
    );

    top:50%;
    left:50%;

    transform:translate(-50%,-50%);
    filter:blur(40px);

    z-index:0;
}


@keyframes spinBorder{
    from{
        transform: rotate(0deg);
    }

    to{
        transform: rotate(360deg);
    }
}

        .glass {
            background: rgba(255, 255, 255, .04);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(168, 85, 247, .2);
        }

        .glow {
            box-shadow:
                0 0 20px rgba(168, 85, 247, .25),
                inset 0 0 20px rgba(168, 85, 247, .08);
        }
        

        .btn-main {
            background: linear-gradient(90deg, #d946ef, #8b5cf6);
            transition: .3s;
        }

        .btn-main:hover {
            transform: translateY(-2px);
        }

        .hero-image {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            50% {
                transform: translateY(-12px);
            }
        }

        .neon-text {
            text-shadow: 0 0 20px rgba(168, 85, 247, .8);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            transition: .3s;
        }

        /* Neon Line */

.led-dark-track {
    position: absolute;
    bottom: 0;
    left: 15px;
    right: 15px;
    height: 2px;
    overflow: hidden;
    border-radius: 999px;
}

.meteor-spark {
    position: absolute;
    width: 250px;
    height: 100%;
    left: -250px;
    opacity: 0;
    animation: meteorFly 7s linear infinite;
}

.meteor-cyan{
    background: linear-gradient(90deg,#06b6d4,transparent);
    box-shadow:0 0 10px #06b6d4;
    animation-delay:0s;
}

.meteor-purple{
    background: linear-gradient(90deg,#8b5cf6,transparent);
    box-shadow:0 0 10px #8b5cf6;
    animation-delay:2s;
}

.meteor-pink{
    background: linear-gradient(90deg,#ec4899,transparent);
    box-shadow:0 0 10px #ec4899;
    animation-delay:4s;
}

@keyframes meteorFly{

    0%{
        left:-250px;
        opacity:0;
    }

    10%{
        opacity:1;
    }

    90%{
        opacity:1;
    }

    100%{
        left:100%;
        opacity:0;
    }

}

.about-box,
.feature-card {
    transition: all .4s ease;
}

.about-box:hover,
.feature-card:hover {
    transform: translateY(-8px);
    border-color: #c084fc;

    box-shadow:
        0 0 20px rgba(168, 85, 247, .5),
        0 0 40px rgba(217, 70, 239, .25);
}

.neon-card {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
}

.neon-card::before {
    content: "";
    position: absolute;
    inset: -150%;
    animation: rotateBorder 5s linear infinite;
}

.neon-card::after {
    content: "";
    position: absolute;
    inset: 2px;
    background: #1b102d;
    border-radius: 22px;
    z-index: 1;
}

.neon-card>* {
    position: relative;
    z-index: 2;
}

@keyframes rotateBorder {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}

/* بنفسجي + وردي */
.border-purple::before {
    background: conic-gradient(
        transparent,
        #a855f7,
        #ec4899,
        transparent 40%
    );
}

/* سماوي + بنفسجي */
.border-cyan::before {
    background: conic-gradient(
        transparent,
        #06b6d4,
        #8b5cf6,
        transparent 40%
    );
}

/* أصفر + بنفسجي */
.border-gold::before {
    background: conic-gradient(
        transparent,
        #facc15,
        #8b5cf6,
        transparent 40%
    );
}
.hero-title{
    display:flex;
    flex-direction:column;
    line-height:1.1;
    margin-bottom:40px;
}

.title-white{
    display:block;
    font-size:60px;
    font-weight:900;
    color:#fff;
}

.title-gradient{
    display:block;
    position:relative;

    font-size:55px;
    font-weight:900;

    line-height:1.3;
    padding-bottom:20px;
    padding-top:10px;

    background:linear-gradient(
        90deg,
        #ff4fd8,
        #d946ef,
        #8b5cf6
    );

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;

    filter:drop-shadow(0 0 12px rgba(168,85,247,.8));
}

    </style>
</head>

<body class="hero-bg">

    <!-- Navbar -->

    <nav class="fixed top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-6 mt-4">

            <div class="glass glow rounded-2xl px-8 py-4 flex justify-between items-center relative">

                <div class="text-3xl font-black text-purple-400">
                    DeliveryHub
                </div>

                <div class="hidden md:flex gap-8 text-sm font-semibold">

                    <a href="#home" class="hover:text-purple-400 transition">
                        الرئيسية
                    </a>

                    <a href="#about" class="hover:text-purple-400 transition">
                        عن النظام
                    </a>

                    <a href="#contact" class="hover:text-purple-400 transition">
                        اتصل بنا
                    </a>

                </div>

                <div class="flex gap-3">

                    <a href="/login"
                        class="px-5 py-2 rounded-xl border border-purple-500">
                        تسجيل الدخول
                    </a>

                    <a href="/register"
                        class="btn-main px-5 py-2 rounded-xl font-bold">
                        ابدأ الآن
                    </a>

                </div>
                <div class="led-dark-track">
        <div class="meteor-spark meteor-cyan"></div>
        <div class="meteor-spark meteor-purple"></div>
        <div class="meteor-spark meteor-pink"></div>
    </div>
                </div>


    </nav>

    <!-- Hero -->

    <section id="home" class="pt-40 pb-24">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <div class="text-right">

                    <div class="hero-title">

    <span class="title-white">
        نظام متكامل لإدارة
    </span>

    <span class="title-white">
        الشحن والتوصيل
    </span>

    <span class="title-gradient">
        بسرعة وذكاء
    </span>

</div>

                    <p class="text-gray-400 text-lg leading-8 mb-8">
                        نربط الإدارة والموظفين والكباتن والتجار
                        لتحقيق أفضل تجربة توصيل احترافية وسريعة.
                    </p>

                    <div class="flex gap-4 justify-end">

                        <a href="/register"
                            class="btn-main px-8 py-4 rounded-xl font-bold">
                            ابدأ الآن مجاناً
                        </a>

                        <a href="#about"
                            class="border border-purple-500 px-8 py-4 rounded-xl">
                            استكشف المزيد
                        </a>

                    </div>

                </div>

                <div class="hero-image">
                    <div class="hero-glow"></div>

                        <div class="hero-frame max-w-xl mx-auto">

                            <img
                                 src="{{ asset('images/welcome_page.png') }}"
                                alt="DeliveryHub">
                        </div>

                    </div>

            </div>

        </div>

    </section>

    <!-- Features -->

    <section class="pb-24">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid md:grid-cols-4 gap-6">

                <div class="glass glow rounded-2xl p-6 text-center feature-card neon-card border-cyan">
                    <div class="text-5xl mb-4 text-cyan-400">
                    <i class="fas fa-shield-halved"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">أمان وموثوق</h3>
                    <p class="text-gray-400">
                        حماية كاملة للبيانات والطلبات.
                    </p>
                </div>

                <div class="glass glow rounded-2xl p-6 text-center feature-card neon-card border-gold">
                    <div class="text-5xl mb-4 text-pink-400">
                    <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">سرعة فائقة</h3>
                    <p class="text-gray-400">
                        تنفيذ وتتبع الطلبات لحظياً.
                    </p>
                </div>

                <div class="glass glow rounded-2xl p-6 text-center feature-card neon-card border-purple">
                    <div class="text-5xl mb-4 text-purple-400">
                    <i class="fas fa-chart-line"></i>
        </div>
                    <h3 class="font-bold text-xl mb-2">تقارير ذكية</h3>
                    <p class="text-gray-400">
                        تحليلات وإحصائيات دقيقة.
                    </p>
                </div>

                <div class="glass glow rounded-2xl p-6 text-center feature-card neon-card border-cyan">
                    <div class="text-5xl mb-4 text-green-400">
                    <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">دعم متواصل</h3>
                    <p class="text-gray-400">
                        فريق دعم على مدار الساعة.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <!-- About -->

    <section id="about" class="pb-24">

        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-center text-4xl font-black mb-12 text-purple-400">
                عن النظام
            </h2>

            <div class="glass glow rounded-3xl p-10 about-box neon-card border-gold">

                <p class="text-gray-300 leading-10 mb-5">
                    DeliveryHub هو نظام متكامل لإدارة عمليات الشحن والتوصيل
                    يربط بين الإدارة والموظفين والكباتن والتجار داخل منصة واحدة.
                </p>

                <p class="text-gray-300 leading-10 mb-5">
                    يسمح النظام بإضافة الطلبات وتوزيعها على السائقين
                    ومتابعة حالة الشحنة من لحظة إنشائها حتى التسليم.
                </p>

                <p class="text-gray-300 leading-10">
                    كما يوفر تقارير ومتابعة للمرتجعات وتحسين سير العمل
                    لضمان سرعة وكفاءة عملية التوصيل.
                </p>

            </div>

        </div>

    </section>

    <!-- How System Works -->

    <section class="pb-24">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-center text-4xl font-black mb-12 text-purple-400">
                كيف يعمل النظام؟
            </h2>

            <div class="grid md:grid-cols-4 gap-6">

                <div class="glass glow rounded-2xl p-6 text-center feature-card neon-card border-cyan">
                    <div class="text-5xl mb-4 text-cyan-400">
                    <i class="fas fa-cart-plus"></i>
                    </div>
                    <h3 class="font-bold mb-3">إضافة الطلب</h3>
                    <p class="text-gray-400">
                        يقوم الموظف بإدخال بيانات الطلب.
                    </p>
                </div>

                <div class="glass glow rounded-2xl p-6 text-center feature-card neon-card border-purple">
                    <div class="text-5xl mb-4 text-purple-400">
                    <i class="fas fa-user-check"></i>
</div>
                    <h3 class="font-bold mb-3">تعيين كابتن</h3>
                    <p class="text-gray-400">
                        يتم إسناد الطلب للسائق المناسب.
                    </p>
                </div>

                <div class="glass glow rounded-2xl p-6 text-center feature-card neon-card border-gold">
                    <div class="text-5xl mb-4 text-gold-400">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="font-bold mb-3">متابعة الشحنة</h3>
                    <p class="text-gray-400">
                        متابعة حالة الطلب بشكل لحظي.
                    </p>
                </div>

                <div class="glass glow rounded-2xl p-6 text-center feature-card neon-card border-purple">
                    <div class="text-5xl mb-4 text-green-400">
                    <i class="fas fa-box-open"></i>
                    </div>
                    <h3 class="font-bold mb-3">التسليم</h3>
                    <p class="text-gray-400">
                        تأكيد التسليم أو تسجيل المرتجع.
                    </p>
                </div>

            </div>

        </div>

    </section>

    <section id="contact" class="pb-24">

    <div class="max-w-5xl mx-auto px-6">

        <h2 class="text-center text-4xl font-black mb-12 text-purple-400">
            اتصل بنا
        </h2>

        <div class="glass glow rounded-2xl p-6 text-center feature-card neon-card border-gold">

            <div class="space-y-6 text-xl">

                <p>
                    <i class="fas fa-phone text-purple-400"></i>
                    01012345678
                </p>

                <p>
                    <i class="fas fa-envelope text-purple-400"></i>
                    support@deliveryhub.com
                </p>

                <p>
                    <i class="fas fa-location-dot text-purple-400"></i>
                    القاهرة - مصر
                </p>

            </div>

            <div class="flex justify-center gap-8 mt-10 text-4xl">

                <a href="https://facebook.com"
                   target="_blank"
                   class="text-blue-500 hover:scale-110 transition">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="https://youtube.com"
                   target="_blank"
                   class="text-red-500 hover:scale-110 transition">
                    <i class="fab fa-youtube"></i>
                </a>

                <a href="https://instagram.com"
                   target="_blank"
                   class="text-pink-500 hover:scale-110 transition">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://wa.me"
                   target="_blank"
                   class="text-green-500 hover:scale-110 transition">
                    <i class="fab fa-whatsapp"></i>
                </a>

            </div>

        </div>

    </div>

</section>

</body>

</html>
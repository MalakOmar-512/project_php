<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'سريع3 - Saree3' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap" rel="stylesheet">
    <style> body { font-family: 'Cairo', sans-serif; } </style>
</head>
<body class="bg-[#0b0b0d] text-gray-100 min-h-screen relative overflow-x-hidden antialiased">

    <!-- الإضاءات الخلفية العائمة الملونة لتأكيد ستايل الجلاسي -->
    <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-purple-600/10 blur-[150px] rounded-full pointer-events-none"></div>
    <div class="absolute top-[30%] right-[-10%] w-[600px] h-[600px] bg-cyan-600/10 blur-[180px] rounded-full pointer-events-none"></div>

    <!-- الهيدر أو النڤبار العلوي -->
    <x-nav />

    <!-- المحتوى الرئيسي للموقع -->
    <main class="pt-24">
        {{ $slot }}
    </main>

</body>
</html>
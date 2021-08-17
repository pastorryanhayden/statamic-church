<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-gray-50" >
@include('_includes.nav')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-indigo-800">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="/images/interior.jpeg" alt="">
    <div class="absolute inset-0 bg-indigo-800 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Church Leadership</h1>
    <p class="mt-6 text-xl text-indigo-100 max-w-3xl">Meet our ministry team.</p>
  </div>
</div>
@include('_includes.team')
</div>
@include('_includes.footer')
</body>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Tailkit Project</title>

  <!-- Favicons -->
  <link rel="icon" href="favicon.svg" sizes="any" type="image/svg+xml">
  <link rel="icon" href="favicon.png" type="image/png">
  
  <!-- Inter web font from Bunny.net (GDPR compliant) -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  @vite(['resources/css/tailkit.css', 'resources/js/app.js'])
</head>
  
<body>
  <!--
  
  ADD YOUR CONTENT BELOW
  
  -->


  <div class="min-h-screen flex items-center">
    <div class="w-full text-center p-4">
      <div class="py-6">
        <a class="group relative active:opacity-75 inline-flex items-center mb-3 space-x-2 text-white px-4 py-2" href="/">
          <div class="absolute inset-0 rounded-lg -m-0.5 bg-gray-200 transform -rotate-3 transition ease-out duration-150 group-hover:rotate-3 group-hover:scale-125"></div>
          <div class="absolute inset-0 rounded-lg -m-0.5 bg-gray-800 bg-opacity-95 transform rotate-3 transition ease-out duration-150 group-hover:-rotate-3 group-hover:scale-125"></div>
  
          <svg class="inline-block w-6 h-6 relative transform transition ease-out duration-150 group-hover:-rotate-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
            <circle cx="128" cy="128" r="120" fill-opacity="0" stroke="#13cdc6" stroke-linejoin="round" stroke-width="16" fill="#293340"/>
            <circle cx="128" cy="128" r="96" fill="#293340"/>
            <path d="M130.424 165.032a20 20 0 01-14.142 24.495l-8.842 2.373a20 20 0 01-24.495-14.142l-2.369-8.842a20 20 0 0114.142-24.5l8.842-2.369a20 20 0 0124.5 14.142z" fill="#818cf8" fill-rule="evenodd"/>
            <path d="M191.9 148.561a20 20 0 01-14.143 24.5l-8.842 2.369a20 20 0 01-24.494-14.142l-2.37-8.842a20 20 0 0114.142-24.5l8.842-2.369a20 20 0 0124.5 14.142z" fill="#f472b6" fill-rule="evenodd"/>
            <path d="M113.953 103.561a20 20 0 01-14.142 24.5l-8.842 2.369a20 20 0 01-24.495-14.142l-2.369-8.842a20 20 0 0114.142-24.5l8.842-2.369a20 20 0 0124.495 14.142z" fill="#34d399" fill-rule="evenodd"/>
            <path d="M175.424 87.09a20 20 0 01-14.142 24.495l-8.842 2.369a20 20 0 01-24.5-14.142l-2.369-8.842a20 20 0 0114.142-24.495l8.842-2.369a20 20 0 0124.5 14.142z" fill="#fbbf24" fill-rule="evenodd"/>
          </svg>
  
          <span class="text-xl text-white font-semibold tracking-wide relative transform transition ease-out duration-150 group-hover:-rotate-3">Tailkit</span>
        </a>
      </div>
      <p class="text-xl text-gray-600 font-bold mb-2">
        Premium UI components for your Tailwind CSS based projects
      </p>
      <p class="text-gray-600 font-medium mb-10">
        Crafted with
        <svg class="align-text-bottom hi-solid hi-heart inline-block w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
        by <a href="https://pixelcave.com" class="transition font-medium text-blue-600 hover:text-blue-400">pixelcave</a>
      </p>
      <p class="text-sm text-gray-500">
        You can now use the <a class="transition font-medium text-blue-600 hover:text-blue-400" href="https://tailkit.com/dashboard">Tailkit app</a> to start copying over your layout and components!
      </p>
    </div>
  </div>


  <!--
  
  ADD YOUR MAIN CONTENT ABOVE
        
  -->
</body>

</html>

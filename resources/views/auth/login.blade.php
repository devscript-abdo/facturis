<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Facturis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="robots" content="noindex, nofollow" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <meta content="app_creator" name="Elmarzougui Abdelghafour" />
    <meta content="app_version" name="v 1.1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <section class="bg-gray-50 min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
          <!-- form -->
          <div class="md:w-1/2 px-8 md:px-16">
            <h2 class="font-bold text-2xl text-[#002D74]">Se connecter</h2>
            <p class="text-xs mt-4 text-[#002D74]">If you are already a member, easily log in</p>
      
            <form action="" method="post" class="flex flex-col gap-4"> 
                @csrf
              <input class="p-2 mt-8 rounded-xl border" type="email" name="email" placeholder="Email">
              <div class="relative">
                <input class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="Password">
                <x-facturis.form.icons.eye/>
              </div>
              <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">Login</button>
            </form>
      
            <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
              <hr class="border-gray-400">
              <p class="text-center text-sm">OR</p>
              <hr class="border-gray-400">
            </div>
    
            <x-facturis.form.icons.google/>

            <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74]">
              <a href="#">Forgot your password?</a>
            </div>
      
            <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
              <p>Don't have an account?</p>
              <button class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">Register</button>
            </div>
          </div>
      
          <!-- image -->
          <div class="md:block hidden w-1/2">
            <img class="rounded-2xl" src="{{ Vite::asset('resources/images/screen.png') }}">
          </div>
        </div>
      </section>
</body>

</html>

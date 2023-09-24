<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            "poppins": "Poppins",
            "roboto": "Roboto",
          },
          gridTemplateColumns: {
            "3/2" : "3fr, 2fr",
          },
          spacing: {
            "128": "32rem",
          },
        }
      }
    }
  </script>
</head>
<body class="bg-slate-200">
  <div class="bg-white rounded-xl grid grid-cols-3/2 h-128 max-w-4xl mx-auto mt-14 overflow-hidden drop-shadow-xl">
    <div class="h-full text-center flex flex-col justify-center items-center">
        <h2 class="font-bold text-3xl text-green-500">Sign in to Account</h2>
        <div class="bg-green-500 h-1 w-14 rounded mx-auto my-5"></div>
        <div class="flex gap-x-4">
          <div class="w-10 h-10 grid place-items-center border-2 rounded-full hover:cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
          </div>
          <div class="w-10 h-10 grid place-items-center border-2 rounded-full hover:cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
          </div>
          <div class="w-10 h-10 grid place-items-center border-2 rounded-full hover:cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512"><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
          </div>
      </div>
        <p class="text-slate-400 my-4" >or use your email account</p>
        <form class="w-max flex flex-col items-center gap-y-3">
          <input class="bg-slate-200 py-2 px-4 rounded focus:outline-none" type="email" placeholder="Email" required />
          <input class="bg-slate-200 py-2 px-4 rounded focus:outline-none" type="password" placeholder="Password" required />
          <div class="self-start">
            <input  type="checkbox" id="rememberMe"/>
            <label class="text-slate-600" for="rememberMe">Remember Me</label>
          </div>
          <button type="submit" class="w-max bg-green-500 text-white font-bold rounded-full py-3 px-14 mt-4 hover:bg-green-600">Sign Up</button>
        </form>
    </div>
    <div class="h-full text-white bg-green-500 text-center flex flex-col justify-center items-center">
        <h2 class="font-bold text-3xl">Hello, Friend</h2>
        <div class="bg-white h-1 w-14 rounded mx-auto my-4"></div>
        <p class="text-base w-60">Fill up personal information and start journey with us.</p>
        <button type="button" class="w-max border-2 rounded-full py-2 px-10 mt-14">Sign Up</button>
    </div>
  </div>
</body>
</html>

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
  <div class="bg-white rounded grid grid-cols-3/2 h-128 max-w-4xl mx-auto mt-14">
    <div class="h-full"></div>
    <div class="h-full text-white bg-green-500 text-center flex flex-col justify-center items-center">
        <h2 class="font-bold text-3xl">Hello, Friend</h2>
        <div class="bg-white h-1 w-14 rounded mx-auto my-4"></div>
        <p class="text-base w-60">Fill up personal information and start journey with us.</p>
        <button type="button" class="w-max border-2 rounded-full py-2 px-10 mt-14">Sign Up</button>
    </div>
  </div>
</body>
</html>

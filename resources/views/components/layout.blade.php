

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Viaggi</title>

   {{-- font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Lobster&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    {{-- fontawesome  --}}
    <script src="https://kit.fontawesome.com/1f6080f182.js" crossorigin="anonymous"></script>
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>

   <x-navbar />

   {{$slot}}


  
</body>
</html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>

<body class="flex justify-center items-center">
  <div class="shadow-lg flex flex-col gap-4 p-4">
    <h1>Register</h1>
    <form action="/register" class="flex flex-col gap-4 ">
      <input type="text" name="name" placeholder="username">
      <input type="email" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <input type="submit" class="btn">
    </form>
  </div>
</body>

</html>

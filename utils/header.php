<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../build/images/pokeball.png" type="image/x-icon">
  <link href="./style.css" rel="stylesheet">
  <link href="../style.css" rel="stylesheet">
  <link href="src/input.css" rel="stylesheet">
  <link href="../src/input.css" rel="stylesheet">
  <link href="./build/css/style.css" rel="stylesheet">
  <link href="../build/css/style.css" rel="stylesheet">
</head>

<header class="bg-gris flex flex-row w-screen items-center h-[7vh] justify-end px-8 shadow-md fixed">
    <div class="content flex flex-row w-5/12 items-center justify-between">
      <div class="uncaught border-2 border-grisFonce p-1 px-2 rounded-md text-grisFonce uppercase shadow-md">
        <label for="uncaught">uncaught</label>
        <!-- <input type="radio" name="caught" id="uncaught"> -->
      </div>
      <div class="caught border-2 border-grisFonce p-1 px-2 rounded-md text-grisFonce uppercase shadow-md">
        <label for="caught">caught</label>
        <!-- <input type="radio" name="caught" id="caught"> -->
      </div>
      <div class="count flex flex-row border-2 border-grisFonce p-1 px-2 rounded-md text-grisFonce uppercase shadow-md">
        <p>000</p>
        <p>/905</p>
      </div>
      <div class="search">
        <div class="results">
          <ul></ul>
        </div>
        <div class="border-2 border-normal rounded-md p-1 px-2 shadow-md">
          <input class="bg-transparent border-none" type="text" name="" id="" placeholder="SEARCH....">
          <ion-icon class="w-4 h-4 text-normal" name="search-outline"></ion-icon>
        </div>
      </div>
    </div>
  </header>

<body class="bg-bg h-full w-full flex flex-col relative text-white">

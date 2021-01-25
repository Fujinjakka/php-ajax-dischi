<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Php Dischi</title>
  </head>
  <body>
    <div id="vue_container">
      <header>
        <div class="container">
          <img :src="logo" alt="logo">
        </div>
      </header>

      <main>
        <div id="main_container" class="container">

          <div v-for="disc in discs" class="disc_container">
            <div class="img_container">
              <img :src="disc.poster" alt="cover">
            </div>
            <div class="text_container">
              <h1>{{disc.title}}</h1>
              <h2>{{disc.author}}</h2>
              <p>{{disc.year}}</p>
            </div>
          </div>

        </div>
      </main>
    </div>


  <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>

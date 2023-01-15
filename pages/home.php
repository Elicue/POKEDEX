<?php
  require_once '../utils/header.php';
  require_once '../utils/sidebar.php';
?>

  <main class="text-black ml-[12%] mt-[7vh] flex flex-col">
    <template class="template__pokemon flex flex-row">
      <div class="pokemon flex flex-row justify-between hover:bg-gris bg-white">
        <div class="card pt-6 w-[35%]">
          <div class="bg-white shadow-md w-10/12 mx-auto rounded-3xl relative text-center pb-6">
            <p class="pokemon__id text-id text-[100px] font-bold">#001</p>
            <img class="pokemon__img absolute translate-x-3/4 -translate-y-[18vh] w-[20vh]">
            <div class="name flex flex-row  justify-center items-center">
              <input class="w-4 h-4" type="checkbox"> 
              <p class="ml-4 pokemon__name text-grisFonce capitalize text-3xl">name</p>
            </div>
            <p class="talent text-grisFonce capitalize items-center font-light text-xl">Seed Pokemon</p>
            <div class="types flex flex-row uppercase font-semibold text-xl text-center items-center justify-center ">
              <span class="pokemon__types">Grass</span>
              <div class="cercle last:hidden w-2 h-2 bg-normal rounded-full mx-3"></div>
              <span class="pokemon__types">Grass</span>
            </div>
            <p class="pokemon__abilities">Overgrow</p>

            <div class="height flex flex-row text-grisFonce items-center justify-center absolute -top-4 -left-4 bg-white shadow-md rounded-full w-16 h-16">
              <p class="pokemon__height"></p>
              <p>m</p>
            </div>
            <div class="weight flex flex-row text-grisFonce items-center justify-center absolute -top-4 -right-4 bg-white shadow-md rounded-full w-16 h-16">
              <p class="pokemon__weight"></p>
              <p>kg</p>
            </div>
          </div>
        </div>
        <div class="stats bg-green-500  w-[35%]">
          <div class=" stat pokemon__hp">
            <h4>Hp</h4>
            <p>45</p>               
            <!-- <progress max="255" value="45"> 70% </progress> -->
            <div class="barre">
              <div class="inside"></div>
            </div>
          </div>
          <div class=" stat pokemon__atk">
            <h4>Attack</h4>
            <p>490</p>               
            <!-- <progress max="255" value="49"></progress> -->
            <div class="barre">
              <div class="inside"></div>
            </div>
          </div>
          <div class=" stat pokemon__def">
            <h4>Defense</h4>
            <p>65</p>               
            <!-- <progress max="255" value="65"></progress> -->
            <div class="barre">
              <div class="inside"></div>
            </div>
          </div>
          <div class=" stat pokemon__speAtk">
              <h4>Special Attack</h4>
              <p>65</p>               
              <!-- <progress max="255" value="65"></progress> -->
              <div class="barre">
                  <div class="inside"></div>
              </div>
          </div>
          <div class=" stat pokemon__speDef">
            <h4>Special Defense</h4>
            <p>65</p>               
            <!-- <progress max="255" value="65"></progress> -->
            <div class="barre">
              <div class="inside"></div>
            </div>
          </div>
          <div class=" stat pokemon__spd">
            <h4>Speed</h4>
            <p>45</p>               
            <!-- <progress max="255" value="45"></progress> -->
            <div class="barre">
              <div class="inside"></div>
            </div>
          </div>
        </div>
        <div class="droite flex flex-row bg-blue-500  w-[30%]">
          <div class="evolutions">
            <h1>Evolutions</h1>
            <img class="pokemon__current" src="#">
            <ion-icon name="arrow-down-outline"></ion-icon>
            <!-- <p>Level 16</p> -->
            <img class="pokemon__next" src="#">
            <!-- <img src="images/herbizarre.png" alt="herbizarre">
            <ion-icon name="arrow-forward-outline"></ion-icon>
            <p>Level 32</p>
            <img src="images/florizarre.png" alt="florizarre"> -->
          </div>
          <div class="weaknesses">
            <h1>Weaknesses</h1>
            <div class="weak"></div>
            <!-- <div class="weak_01">Flying</div>
            <div class="weak_02">Fire</div>
            <div class="weak_03">Psychic</div>
            <div class="weak_04">Ice</div>
            <div class="weak_05"></div> -->
          </div>
        </div>
      </div>
    </template>
    <section id="pokemons" ></section>
    <!-- <div class="search">
      <p>Bulbasaur</p>
      <ion-icon name="search-outline"></ion-icon>
    </div> -->
  </main>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="../js/script.js"></script>
  <!-- <script type="module" src="js/script2.js"></script> -->
  <script src="../js/script3.js"></script>
  <script src="../js/query.js"></script>

</body>
</html>
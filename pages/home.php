<?php
  require_once '../utils/header.php';
  require_once '../utils/sidebar.php';
?>

  <main class="text-black ml-[12%] mt-[7vh] flex flex-col">
    <template class="template__pokemon flex flex-row">
      <div class="pokemon flex flex-row justify-between hover:bg-gris bg-white">
        <div class="card py-6 w-[35%]">
          <div class="bg-white shadow-md w-10/12 mx-auto rounded-3xl relative text-center pb-6">
            <p class="pokemon__id text-gris2 text-[100px] font-bold">#001</p>
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
        <div class="stats w-[35%] pt-6 items-center flex">
          <div class="w-10/12 mx-auto relative text-center">
            <div class=" text-right justify-end stat pokemon__hp flex flex-row items-center">
              <h4 class="text-normal font-semibold">Hp</h4>
              <p class="text-grisFonce mx-4 font-semibold">45</p>               
              <!-- <progress max="255" value="45"> 70% </progress> -->
              <div class="bg-gris2 h-4 w-52 rounded barre">
                <div class="inside w-full h-4 rounded"></div>
              </div>
            </div>
            <div class=" text-right justify-end stat pokemon__atk flex flex-row items-center">
              <h4 class="text-normal font-semibold">Attack</h4>
              <p class="text-grisFonce mx-4 font-semibold">490</p>               
              <!-- <progress max="255" value="49"></progress> -->
              <div class="bg-gris2 h-4 w-52 rounded barre">
                <div class="inside w-full h-4 rounded"></div>
              </div>
            </div>
            <div class=" text-right justify-end stat pokemon__def flex flex-row items-center">
              <h4 class="text-normal font-semibold">Defense</h4>
              <p class="text-grisFonce mx-4 font-semibold">65</p>               
              <!-- <progress max="255" value="65"></progress> -->
              <div class="bg-gris2 h-4 w-52 rounded barre">
                <div class="inside w-full h-4 rounded"></div>
              </div>
            </div>
            <div class="stat text-right justify-end pokemon__speAtk flex flex-row items-center">
                <h4 class="text-normal font-semibold">Special Attack</h4>
                <p class="text-grisFonce mx-4 font-semibold">65</p>               
                <!-- <progress max="255" value="65"></progress> -->
                <div class="bg-gris2 h-4 w-52 rounded barre">
                    <div class="inside w-full h-4 rounded"></div>
                </div>
            </div>
            <div class=" text-right justify-end stat pokemon__speDef flex flex-row items-center">
              <h4 class="text-normal font-semibold">Special Defense</h4>
              <p class="text-grisFonce mx-4 font-semibold">65</p>               
              <!-- <progress max="255" value="65"></progress> -->
              <div class="bg-gris2 h-4 w-52 rounded barre">
                <div class="inside w-full h-4 rounded"></div>
              </div>
            </div>
            <div class=" text-right justify-end stat pokemon__spd flex flex-row items-center">
              <h4 class="text-normal font-semibold">Speed</h4>
              <p class="text-grisFonce mx-4 font-semibold">45</p>               
              <!-- <progress max="255" value="45"></progress> -->
              <div class="bg-gris2 h-4 w-52 rounded barre">
                <div class="inside w-full h-4 rounded"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="droite flex flex-row justify-around w-[30%]">
          <div class="evolutions bg-white shadow-md w-[45%] items-center text-center justify-center my-6 rounded-xl">
            <h1 class="uppercase text-grisFonce font-bold text-xl mt-2">Evolutions</h1>
            <img class="pokemon__current w-[16vh] translate-x-[20%] -mb-3 -mt-2" src="#">
            <ion-icon class="last:hidden" name="arrow-down-outline"></ion-icon>
            <!-- <p>Level 16</p> -->
            <img class="pokemon__next w-[16vh] translate-x-[20%] -mt-4" src="#">
            <!-- <img src="images/herbizarre.png" alt="herbizarre">
            <ion-icon name="arrow-forward-outline"></ion-icon>
            <p>Level 32</p>
            <img src="images/florizarre.png" alt="florizarre"> -->
          </div>
          <div class="weaknesses bg-white shadow-md w-[45%] items-center text-center justify-center my-6 rounded-xl">
            <h1 class="uppercase text-grisFonce font-bold text-xl mt-2">Weaknesses</h1>
            <div class="weak w-10/12 mx-auto my-4 py-2 rounded uppercase font-semibold text-white"></div>
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
let pokemonList = JSON.parse(localStorage.getItem('searchList'))

let searchInput = document.querySelector('.search input[type="text"]')
let resultsList = document.querySelector('.search .results ul')
console.log(searchInput)

searchInput.addEventListener('input', () => {
    let searchPropos = []
    pokemonList.forEach(pokemon => {
        if(!pokemon.startsWith(searchInput.value)) return
        searchPropos.push(pokemon)
    })
    
    while(resultsList.firstChild) {
        resultsList.firstChild.remove()
    }



    while(searchPropos.length > 5) searchPropos.pop()

    if(searchInput.value == '') return
    searchPropos.forEach(result => {
        let li = document.createElement('li')
        li.textContent = result
        li.addEventListener('click', (e) => {
            document.querySelectorAll('#pokemons .pokemon').forEach(pokemon => {
                pokemon.style.display = "none"
            })
            while(resultsList.firstChild) {
                resultsList.firstChild.remove()
            }
            searchInput.value = ''
            loadAndDisplayPokemon(e.target.textContent)
        })
        resultsList.appendChild(li)
    })
})
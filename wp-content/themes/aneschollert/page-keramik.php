<?php
/**
 * Theme Page Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
get_header();
?>

	<main id="primary" class="site-main-merch">
    
  <h2>Keramik</h2>
  <div id="filtrering"><button data-keramik="alle">Ryd filter</button></div>
  <div id="holder"></div>
    <template>
      <article>  
          <img src="" alt="">   
          <p class="produkt_pris"> </p>
          <p class="produkt_farve"> </p>
          <p class="produkt_mål"> </p>
      </article>
    </template>

	</main><!-- #main -->
<script>
	const siteUrl = "https://helenaadelaide.dk/kea/10_eksamen/aneschollert/wp-json/wp/v2/keramik/?per_page=100";
  const catUrl = "https://helenaadelaide.dk/kea/10_eksamen/aneschollert/wp-json/wp/v2/categories";
	let keramik =[];
  let categories =[];
  let filterKeramik="alle";
	const keramikTemp = document.querySelector("#holder");
	const keramikListe = document.querySelector("#template");
	getJson();
	async function getJson(){
		const response = await fetch(siteUrl);
    const catdata = await fetch(catUrl);
		keramik = await response.json();
    categories = await catdata.json();
		console.log (categories);
		vis(keramik);
    opretknapper();

	}
  function opretknapper() {

    categories.forEach(cat =>{
        document.querySelector("#filtrering").innerHTML += `<button class="filter" data-keramik="${cat.id}">${cat.name}</button>`
    })

    addEventListenersToButtons();
  }

  function addEventListenersToButtons(){
    document.querySelectorAll("#filtrering button").forEach(elm =>{
      elm.addEventListener("click", filtrering);
    })

  };

  function filtrering(){
    filterKeramik = this.dataset.keramik;
    console.log(filterKeramik);
    
    vis(keramik);
  }


	function vis(json) {
        const holder = document.querySelector("#holder");
        const skabelon = document.querySelector("template");
        holder.innerHTML = "";

        json.forEach((keramik) => {
          if ( filterKeramik == "alle" || keramik.categories.includes(parseInt(filterKeramik))){
          console.log("keramik",keramik);
          const klon = skabelon.cloneNode(true).content;
          klon.querySelector("img").src = keramik.billede.guid;
          klon.querySelector(".produkt_pris").textContent = keramik.pris;
          klon.querySelector(".produkt_farve").textContent = keramik.farve;
          klon.querySelector(".produkt_mål").textContent = keramik.mal;
          klon.querySelector("article").addEventListener("click", () => {location.href = keramik.link; })
          holder.appendChild(klon);
          }
        });

      }
</script>

<?php get_footer(); ?>
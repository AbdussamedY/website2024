<style>
  .member-page {
    position: fixed;
    top: 0;
    left: 210px;
    display: flex;
    flex-direction: column;
    height: 100dvh;
    width: calc(100% - 210px);
    padding: 10px;
    background-color: #f0f0f0;
    box-sizing: border-box;
    transform: translateX(100%);
    z-index: 1000;
    transition: transform 0.75s ease-in-out, width 0.5s ease-in-out, left 0.5s ease-in-out;
  }
  .member-page.active {
    transform: translateX(0);
  }
  .member-page .hideBtn {
    /* position: absolute; */
    /* top: 10px; */
    /* left: 10px; */
    padding: 5px 10px;
    background-color: #f0f0f0;
    cursor: pointer;
    font-size: 1.25em;
  }
  .member-page .photo {
    position: relative;
  }
  .member-page .photo img{
    position: absolute;
    margin: auto;
    width: 250px;
    height: 300px;
    object-fit: cover;
    transition: all 0.75s ease;
    overflow: hidden;
    border-radius: 10px;
    border: 1px solid #000;
    opacity: 1;
  }
  .member-page .photo img.funny {
    opacity: 0;
  }
  .member-page .photo:hover .img{
    opacity: 0;
  }
  .member-page .photo:hover .funny{
    opacity: 1;
  }

  .navbar.active~.main .member-page {
    left: 70px;
    width: calc(100% - 70px);
  }
</style>
<body>
  <div class="member-page">
    <div class="hideBtn"><i class="bi bi-arrow-bar-right"></i> Back</div>


    <div class="photo">
      <img src="images/members/guy-bouvier.jpeg" alt="Guy Bouvier">
      <img src="images/elon_musk.jpg" class="funny">
    </div>
  </div>








  <!-- <script>
        const developBtn = document.querySelector('.group');
        const hideBtn = document.querySelector('.hideBtn');


        const memberPage = document.querySelector('.child');

        // Ajouter un écouteur d'événements sur l'élément fils
        child.addEventListener('click', function() {
            // Sélectionner l'élément parent du fils
            const parent = child.closest('.parent'); // Récupérer le parent direct

            // Ajouter une classe au parent
            parent.classList.add('highlight-parent');
        });




        developBtn.addEventListener('click', function() {
            const memberPage = developBtn.querySelector('.member-page');
            
            memberPage.classList.add('active');
        });

    </script> -->
</body>


<!-- twitter old :
<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#1e90ff"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
-->

<!-- twitter new :
<svg viewBox="0 0 512 512" height="20px" xmlns="http://www.w3.org/2000/svg" class="svgIcontwit" fill="black"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
-->

<!-- insta simple :
<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" fill="#ff00ff"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
-->
<!-- insta real :
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32" height="20px" width="20px"><rect fill="url(#paint0_radial_87_7153)" rx="6" height="28" width="28" y="2" x="2"></rect><rect fill="url(#paint1_radial_87_7153)" rx="6" height="28" width="28" y="2" x="2"></rect><rect fill="url(#paint2_radial_87_7153)" rx="6" height="28" width="28" y="2" x="2"></rect><path fill="white" d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z"></path><path fill="white" d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z" clip-rule="evenodd" fill-rule="evenodd"></path><path fill="white" d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z" clip-rule="evenodd" fill-rule="evenodd"></path><defs><radialGradient gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)" gradientUnits="userSpaceOnUse" r="1" cy="0" cx="0" id="paint0_radial_87_7153"><stop stop-color="#B13589"></stop><stop stop-color="#C62F94" offset="0.79309"></stop><stop stop-color="#8A3AC8" offset="1"></stop></radialGradient><radialGradient gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)" gradientUnits="userSpaceOnUse" r="1" cy="0" cx="0" id="paint1_radial_87_7153"><stop stop-color="#E0E8B7"></stop><stop stop-color="#FB8A2E" offset="0.444662"></stop><stop stop-color="#E2425C" offset="0.71474"></stop><stop stop-opacity="0" stop-color="#E2425C" offset="1"></stop></radialGradient><radialGradient gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)" gradientUnits="userSpaceOnUse" r="1" cy="0" cx="0" id="paint2_radial_87_7153"><stop stop-color="#406ADC" offset="0.156701"></stop><stop stop-color="#6A45BE" offset="0.467799"></stop><stop stop-opacity="0" stop-color="#6A45BE" offset="1"></stop></radialGradient></defs></svg> 
-->

<!-- github :
<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
-->

<!-- fb letter :
<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" fill="#4267B2"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
-->

<!-- fb real :
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32" height="20px" width="20px"><circle fill="url(#paint0_linear_87_7208)" r="14" cy="16" cx="16"></circle><path fill="white" d="M21.2137 20.2816L21.8356 16.3301H17.9452V13.767C17.9452 12.6857 18.4877 11.6311 20.2302 11.6311H22V8.26699C22 8.26699 20.3945 8 18.8603 8C15.6548 8 13.5617 9.89294 13.5617 13.3184V16.3301H10V20.2816H13.5617V29.8345C14.2767 29.944 15.0082 30 15.7534 30C16.4986 30 17.2302 29.944 17.9452 29.8345V20.2816H21.2137Z"></path><defs><linearGradient gradientUnits="userSpaceOnUse" y2="29.917" x2="16" y1="2" x1="16" id="paint0_linear_87_7208"><stop stop-color="#18ACFE"></stop><stop stop-color="#0163E0" offset="1"></stop></linearGradient></defs></svg> 
-->

<!-- linkedin real :
<svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="rgb(45,100,188)"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
-->

<!-- google scholar real :
<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#4285f4" d="M256 411.12L0 202.667 256 0z"/><path fill="#356ac3" d="M256 411.12l256-208.453L256 0z"/><circle fill="#a0c3ff" cx="256" cy="362.667" r="149.333"/><path fill="#76a7fa" d="M121.037 298.667c23.968-50.453 75.392-85.334 134.963-85.334s110.995 34.881 134.963 85.334H121.037z"/></svg>
-->
<?php?>
<html>
  <head>
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      div.loader{
        position: fixed;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
        z-index: 100;
        background: #11101d;
      }
      .dynamic-logo{
        height:100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      div.dynamic-logo span{
        position: absolute;
        border-radius:50%;
        border-left: 4px rgb(19, 106, 16) solid;
        border-top: 4px rgb(19, 106, 16) solid;
        border-right: 4px rgb(19, 106, 16) solid;
        /* border-top: 10px transparent solid; */
        /* border-right: 5px rgb(14, 119, 10) solid; */
      }
      @media (max-aspect-ratio: 1/1) {
        div.dynamic-logo span{
          width: 80vw;
          height: 80vw;
        }
        .brain {
          width: 30vw;
          height: 30vw;
        }
      }
      @media (min-aspect-ratio: 1/1) {
        div.dynamic-logo span{
          width: 80vh;
          height: 80vh;
        }
        .brain {
          width: 30vh;
          height: 30vh;
        }
      }
      div.dynamic-logo span:nth-last-of-type(1){
        animation: ani-1 1.5s linear infinite;
      }
      div.dynamic-logo span:nth-last-of-type(2){
        animation: ani-2 1.5s linear infinite;
      }
      div.dynamic-logo span:nth-last-of-type(3){
        animation: ani-3 1.5s linear infinite;
      }
      @keyframes ani-1 {
        from{
          transform:
          rotateZ(120deg)
          rotateX(55deg)
          rotateZ(0deg)
        }
        to{
          transform:
          rotateZ(120deg)
          rotateX(55deg)
          rotateZ(360deg)
        }
      }
      @keyframes ani-2 {
        from{
          transform:
          rotateZ(240deg)
          rotateX(55deg)
          rotateZ(0deg)
        }
        to{
          transform:
          rotateZ(240deg)
          rotateX(55deg)
          rotateZ(360deg)
        }
      }
      @keyframes ani-3 {
        from{
          transform:
          rotateZ(360deg)
          rotateX(55deg)
          rotateZ(0deg)
        }
        to{
          transform:
          rotateZ(360deg)
          rotateX(55deg)
          rotateZ(360deg)
        }
      }


      .fondu-out{
        opacity: 0;
        transition: opacity 0.2s ease-out;
      }
      div.loader.fondu-out{
        z-index: -100;
      }
    </style>



  </head>
  <body>
    <div class="loader">
      <div class="dynamic-logo">
        <span></span>
        <span></span>
        <span></span>
        <img src="../images/brain-logo.svg" alt="SensoMotion brain" class="brain">
      </div>
    </div>

    <script>
      const loader = document.querySelector('.loader');

      window.addEventListener('load', () => {

        loader.classList.add('fondu-out');

      })
    </script>
  </body>
</html>


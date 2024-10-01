// Non utilisé dans le projet, mais je le garde pour le moment, au cas où.


const button = document.getElementById('change-page');
var logo = document.getElementById('logo');
var dynamicLogo = document.getElementById('dynamic-arrows');
const animationElement1 = document.getElementById('ani-1');
const animationElement2 = document.getElementById('ani-2');
const animationElement3 = document.getElementById('ani-3');
let animationDuration = 2.5;
const minDuration = 0.03;
const decrementInterval = 0.001;

button.addEventListener('click', () => {
    const decreaseDuration = () => {
        // if (animationDuration > minDuration) {
        //     animationDuration -= 0.03;
        //     animationElement1.style.animationDuration = `${animationDuration}s`;
        //     animationElement2.style.animationDuration = `${animationDuration}s`;
        //     animationElement3.style.animationDuration = `${animationDuration}s`;
        //     setTimeout(decreaseDuration, decrementInterval * 1000);
        // } 
        // else
        // {
        //     setTimeout(function() {
                logo.classList.add('visible');
                dynamicLogo.classList.add('invisible');
        //     }, 500);
            // setTimeout(function() {
            //     window.location.href = 'home.php';
            // }, 700);

            setTimeout(() => {
                document.getElementById('all-screen').classList.add('fade-out');
                document.getElementById('main').classList.add('invisible');
    
                setTimeout(() => {
                    window.location.href = 'home.php';
                }, 600);

                setTimeout(() => {
                    document.getElementById('all-screen').classList.remove('fade-out');
                    document.getElementById('main').classList.remove('invisible');
                    logo.classList.remove('visible');
                    dynamicLogo.classList.remove('invisible');
                }, 700);
            }, 800);

        //     setTimeout(function() {
        //         let animationDuration = 2.5;
        //         console.log('animationDuration', animationDuration);
        //         animationElement1.style.animation = `ani-1 ${animationDuration}s linear infinite`;
        //         animationElement2.style.animation = `ani-2 ${animationDuration}s linear infinite`;
        //         animationElement3.style.animation = `ani-3 ${animationDuration}s linear infinite`;
        //         logo.classList.remove('visible');
        //         dynamicLogo.classList.remove('invisible');
        //     }, 2000);
        // }
    };

    animationElement1.style.animation = `ani-1 ${animationDuration}s linear infinite`;
    animationElement2.style.animation = `ani-2 ${animationDuration}s linear infinite`;
    animationElement3.style.animation = `ani-3 ${animationDuration}s linear infinite`;
    decreaseDuration();
});
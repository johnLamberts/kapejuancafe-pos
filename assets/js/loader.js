

const bar = document.querySelector(".loading__bar--inner");
const numCounter = document.querySelector(".loading__counter--number")

let counter = 2;

let barInterval = setInterval(() => {
    bar.style.width = counter + '%';
    numCounter.innerText = `${counter}%`
    counter++;

    if (counter === 101) {
        clearInterval(barInterval);
        gsap.to(".loading__bar", {
            duration: 5,
            rotate: "90deg",
            left: "1000%",
        });
        gsap.to(".loading__text, .loading__counter", {
            duration: 0.5,
            opacity: 0,
        });
        gsap.to(".loading__box", {
            duration: 1,
            height: "300px",
            width: "300px",
            borderRadius: "50%",
        });
        gsap.to(".loading__svg", {
            duration: 1.3,
            opacity: 1,
            rotate: "360deg",
        });
        gsap.to(".loading__box", {
            delay: 2,
            border: "none",
        });
        gsap.to(".loading", {
            delay: 2,
            duration: 2,
            zIndex: -1,
            background: "transparent",
            opacity: 0.2
        });
        gsap.to(".loading__svg", {
            delay: 3,
            duration: 100,
            rotate: "360deg",
            opacity: 1,
            borderRadius: '50%'

        });

        gsap.to('.header', {
            duration: 1,
            duration: 2,
            zIndex: 1,
            top: "0",
        });

        gsap.to(".home-image .home-img", {
            duration: 1,
            delay: 2.5,
        });
        // imagesloaded(document.querySelectorAll('img'), () => {

        //     gsap.to('header', {
        //         duration: 1,
        //         duration: 2,
        //         top: "0"
        //     });
        //     gsap.to('.socials', {
        //         duration: 1,
        //         delay: 2.5,
        //         bottom: "10rem"
        //     });
        //     gsap.to('.scrolldown', {
        //         duration: 1,
        //         delay: 2.9,
        //         bottom: "3.5rem",
        //     });
        //     setTimeout(() => {
        //     let options = {
        //         damping: 0.1,
        //         alwaysShowTracks: true,
        //         plugins: {
        //             disabledScroll: {
        //                 direction: "x"
        //             }
        //         }
        //     }

        //     let pageSmooth = ScrollBar.init(document.body, options)
        //     pageSmooth.track.xAxis.element.remove();
        //     }, 2000)
        // })

    }
}, 10)
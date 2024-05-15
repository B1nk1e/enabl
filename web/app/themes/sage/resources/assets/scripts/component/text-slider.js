const textSlider = () => {
    const sliderInstances = document.querySelectorAll('.text-slider__wrapper');

    Array.from(sliderInstances).forEach((sliderItem) => {
        if (sliderItem !== null) {
            import('tiny-slider/src/tiny-slider').then((root) => {
                root.tns({
                    container: sliderItem.querySelector('.text-slider__slider'),
                    items: 1.25,
                    gutter: 20,
                    loop: false,
                    controls: false,
                    nav: false,
                    center: false,
                    mouseDrag: true,
                    autoplayButtonOutput: false,
                    responsive: {
                        1024: {
                            items: 2.75,
                            gutter: 24,
                        },

                        1440: {
                            items: 1.85,
                        },
                    },
                });
            });
        }
    });
};

export { textSlider as default };

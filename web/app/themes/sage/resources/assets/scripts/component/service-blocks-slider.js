const serviceBlockSlider = () => {
    const sliderInstances = document.querySelectorAll('.section--service-blocks');
    const viewportWidth = window.innerWidth;

    Array.from(sliderInstances).forEach((sliderItem) => {
        if (sliderItem !== null && viewportWidth < 768) {
            import('tiny-slider/src/tiny-slider').then((root) => {
                root.tns({
                    container: sliderItem.querySelector('.service-blocks__services'),
                    items: 1.4,
                    gutter: 0,
                    loop: false,
                    controls: false,
                    nav: false,
                    center: false,
                    mouseDrag: true,
                    autoplayButtonOutput: false,
                });
            });
        }
    });
};

export { serviceBlockSlider as default };

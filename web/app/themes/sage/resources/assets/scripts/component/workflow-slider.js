const workflowSlider = () => {
    const sliderInstances = document.querySelectorAll('.workflow-slider');

    Array.from(sliderInstances).forEach((sliderItem) => {
        if (sliderItem !== null) {
            import('tiny-slider/src/tiny-slider').then((root) => {
                root.tns({
                    container: sliderItem,
                    items: 1.07,
                    gutter: 20,
                    loop: false,
                    controls: false,
                    nav: false,
                    center: false,
                    mouseDrag: true,
                    autoplayButtonOutput: false,
                    responsive: {
                        1024: {
                            items: 2,
                            gutter: 24,
                        },
                    },
                });
            });
        }
    });
};

export { workflowSlider as default };

import { gsap } from 'gsap';
import offset from '../util/offset';
import scrollY from '../util/scrollY';

const serviceSlider = () => {
    const sliderInstances = document.querySelectorAll('.section--service-slider');

    Array.from(sliderInstances).forEach((sliderItem) => {
        if (sliderItem !== null) {
            const container = sliderItem.querySelector('.service-slider__slider');
            const navContainer = sliderItem.querySelector('.service-slider__nav-inner');
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            let urlSlide = urlParams.get('slide');

            import('tiny-slider/src/tiny-slider').then((root) => {
                const slider = root.tns({
                    container,
                    mode: 'gallery',
                    items: 1,
                    loop: false,
                    controls: false,
                    nav: true,
                    navContainer,
                    center: false,
                    mouseDrag: true,
                    autoplayButtonOutput: false,
                });

                const items = navContainer.querySelectorAll('button');
                const navItems = gsap.utils.toArray(items);
                let currentItem = navItems[0];

                const goToCurrentItem = () => {
                    gsap.to('.line', {
                        x: currentItem.offsetLeft,
                        width: currentItem.clientWidth,
                        ease: 'sine.inOut',
                        duration: 0.3,
                        overwrite: true,
                    });
                };

                const setActiveItem = () => {
                    Array.from(items).forEach((item, index) => {
                        if (item.classList.contains('tns-nav-active')) {
                            currentItem = navItems[index];
                        }
                    });

                    goToCurrentItem();
                };

                slider.events.on('indexChanged', setActiveItem);

                items.forEach((item) => {
                    item.addEventListener('mouseenter', () => {
                        gsap.to('.line', {
                            x: item.offsetLeft,
                            width: item.clientWidth,
                            ease: 'sine.inOut',
                            duration: 0.3,
                            overwrite: true,
                        });
                    });

                    item.addEventListener('mouseleave', () => {
                        goToCurrentItem();
                    });
                });

                /* set starting position of line */
                gsap.set('.line', {
                    x: currentItem.offsetLeft,
                    width: currentItem.clientWidth,
                });

                if (urlSlide) {
                    urlSlide = urlSlide.replace(/\/$/, '');
                    const slides = sliderItem.querySelectorAll('.service-slide');

                    slides.forEach((slide, index) => {
                        if (slide.dataset.slug === urlSlide) {
                            slider.goTo(index);
                        }
                    });

                    const sectionOffset = offset(sliderItem).top - 60;
                    scrollY(sectionOffset, 1500, 'easeInOutQuint');
                }
            });
        }
    });
};

export { serviceSlider as default };

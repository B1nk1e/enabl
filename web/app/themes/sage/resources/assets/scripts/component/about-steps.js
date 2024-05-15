/* eslint-disable quotes */
import { gsap } from 'gsap';

const initSteps = () => {
    const steps = document.querySelectorAll('.step__item');
    const tl = gsap.timeline({ paused: true });

    if (!steps.length > 0) { return false; }

    Array.from(steps).forEach((step) => {
        tl.from(step, {
            scrollTrigger: {
                trigger: step,
                start: 'top 50%',
                end: "bottom 50%",
                invalidateOnRefresh: true,
                scrub: 0,
                onEnter: () => {
                    step.classList.add('active');
                },
                onLeave: () => {
                    step.classList.remove('active');
                },
                onEnterBack: () => {
                    step.classList.add('active');
                },
                onLeaveBack: () => {
                    step.classList.remove('active');
                },
            },
        });
    });
};

export { initSteps as default };

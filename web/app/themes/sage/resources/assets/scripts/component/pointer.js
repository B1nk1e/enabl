import { gsap } from 'gsap';

const initPointer = () => {
    const pointers = document.querySelectorAll('.pointer');
    const tl = gsap.timeline();

    if (!pointers.length > 0) { return false; }

    Array.from(pointers).forEach((pointer) => {
        const duration = 1.5;

        tl.to(pointer, {
            x: 'random(-50, 50, 5)',
            y: 'random(-20, 20, 3)',
            duration,
            ease: 'expo.inOut',
            repeat: -1,
            stagger: 0.4,
            repeatDelay: (pointers.length - 1) * duration,
            repeatRefresh: true, // gets a new random x and y value on each repeat
        });
    });
};

export { initPointer as default };

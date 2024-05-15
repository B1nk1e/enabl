import gsap from 'gsap';

const mobileNav = () => {
    const bodyTag = document.body;
    const navbar = document.querySelector('.navbar-brand');
    const logo = navbar.querySelectorAll('.navbar .brand');
    const navToggle = document.querySelector('.navbar-toggler');
    const menu = document.querySelector('.mobile-nav');
    const links = menu.querySelectorAll('.nav-link, .mobile-nav__address, .mobile-nav__bottom');
    const tl = gsap.timeline({ paused: true });

    tl.to(navbar, {
        top: '32px',
        left: '20px',
        opacity: 0,
        duration: 0,
        zIndex: '99',
    });
    tl.to(logo, {
        duration: 0,
        color: '#000',
    });
    tl.to(menu, {
        duration: 0.4,
        opacity: 1,
        height: '100vh', // change this to 100vh for full-height menu
        ease: 'expo.inOut',
    });
    tl.to(navbar, {
        position: 'fixed',
        top: '32px',
        left: '20px',
        duration: 0.4,
        opacity: 1,
        zIndex: '99',
    });
    tl.from(links, {
        duration: 0.6,
        opacity: 0,
        y: 20,
        stagger: 0.1,
        ease: 'expo.inOut',
    }, '-=0.5');

    tl.reverse();

    navToggle.addEventListener('click', () => {
        tl.reversed(!tl.reversed());
        bodyTag.classList.toggle('menu-is-open');
    });
};

export { mobileNav as default };

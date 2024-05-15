const navbar = () => {
    let lastScroll = 0;
    let isScrolled = false;

    window.addEventListener('scroll', () => {
        const topHeader = document.querySelector('.navbar-holder');
        const scrollTop = window.scrollY;
        const currentScroll = scrollTop || document.documentElement.scrollTop || document.body.scrollTop || 0;
        const scrollDirection = currentScroll < lastScroll;
        const shouldToggle = isScrolled && scrollDirection;

        if (scrollTop >= 50) {
            topHeader.classList.add('is-up');
        } else {
            topHeader.classList.remove('is-up');
        }

        isScrolled = currentScroll > 10;
        topHeader.classList.toggle('is-down', shouldToggle);
        lastScroll = currentScroll;
    });
};

export { navbar as default };

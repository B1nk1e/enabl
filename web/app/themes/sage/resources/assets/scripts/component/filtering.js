const filtering = () => {
    const buttons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.card--case');

    if (!buttons.length > 0) { return false; }

    const filterChange = (category) => {
        Array.from(cards).forEach((card) => {
            if (card.classList.contains(category) || category === 'all') {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    };

    Array.from(buttons).forEach((button) => {
        button.addEventListener('click', () => {
            Array.from(buttons).forEach((btn) => {
                btn.classList.remove('active');
            });

            button.classList.add('active');
            filterChange(button.dataset.filter);
        });
    });
};

export { filtering as default };

/* eslint-disable prefer-arrow-callback */
const customCursor = () => {
    document.onreadystatechange = () => {
        const cursor = document.querySelector('.cursor');
        const a = document.querySelectorAll('a, button, [type="submit"], .gform_delete_file, .tns-slider');

        document.addEventListener('mousemove', (e) => {
            const x = e.clientX;
            const y = e.clientY;
            cursor.style.left = `${x}px`;
            cursor.style.top = `${y}px`;
        });

        document.addEventListener('mousedown', () => {
            cursor.classList.add('cursorinnerhover');
        });

        document.addEventListener('mouseup', () => {
            cursor.classList.remove('cursorinnerhover');
        });

        a.forEach((item) => {
            item.addEventListener('mouseover', () => {
                if (item.classList.contains('tns-slider')) {
                    cursor.classList.add('drag-me');
                } else {
                    cursor.classList.add('hover');
                }
            });
            item.addEventListener('mouseleave', () => {
                if (item.classList.contains('tns-slider')) {
                    cursor.classList.remove('drag-me');
                } else {
                    cursor.classList.remove('hover');
                }
            });
        });
    };
};

export { customCursor as default };

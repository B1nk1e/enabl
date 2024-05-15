import { show, hide } from '../util/show-hide';

const closeAllExceptCurrentEvent = (
    el,
    itemsByClassName,
    termElement,
    descriptionElement
) => {
    let i;
    let j;
    const elements = document.getElementsByClassName(itemsByClassName);
    const arr = [];

    for (i = 0; i < elements.length; i += 1) {
        arr.push(elements[i]);

        if (elements[i] === el.parentElement) {
            arr.splice(i, 1);
        }
    }

    for (j = 0; j < arr.length; j += 1) {
        const term = arr[j].querySelector(termElement);
        const description = arr[j].querySelector(descriptionElement);

        term.classList.remove('open');
        hide(description);
    }
};

const accordion = () => {
    const accordionHolder = document.querySelectorAll('.accordion__holder');

    if (!accordionHolder.length > 0) {
        return;
    }

    let animating = false;

    Array.from(document.querySelectorAll('.accordion__term')).forEach((el) => {
        el.addEventListener('click', () => {
            const collapse = el.nextElementSibling;

            if (animating) {
                return false;
            }

            if (collapse.classList.contains('show')) {
                hide(collapse);
            } else {
                show(collapse);
                closeAllExceptCurrentEvent(
                    this,
                    '.accordion__item',
                    '.accordion__term',
                    '.accordion__body'
                );
            }

            el.classList.toggle('open');

            animating = true;

            setTimeout(() => {
                animating = false;
            }, 350);
        });
    });
};

export { accordion as default, closeAllExceptCurrentEvent };

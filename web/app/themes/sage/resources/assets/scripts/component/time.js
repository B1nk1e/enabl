/* eslint-disable prefer-template */
/* eslint-disable semi */
const initTime = () => {
    const timeInstances = document.querySelectorAll('.current-time');

    if (!timeInstances > 0) { return false }

    const updateTime = () => {
        const date = new Date();

        Array.from(timeInstances).forEach((item) => {
            date.setSeconds(date.getSeconds() + 1);
            const time = `${('0' + date.getHours()).slice(-2)}:${('0' + date.getMinutes()).slice(-2)}`;
            item.innerText = time;
        });
    }

    setInterval(updateTime, 1000);
};

export { initTime as default };

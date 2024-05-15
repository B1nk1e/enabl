export default function isTouchDevice() {
    if (window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
        return false;
    }

    return true;
}

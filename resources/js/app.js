import './bootstrap';

const isHeader = (entry) => entry.target.classList.contains('animate-header') === true

const elements = document.querySelectorAll('.animate');
const options = {
    root: null,
    rootMargin: '0px',
    threshold: .4
}
const callbacks = (entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animation-fade');
        }
    });
}
let observer = new IntersectionObserver(callbacks, options);
elements.forEach(element => {
    observer.observe(element);
});

let options = {
    type: 'loop',
    perPage: 3,
    drag: 'free',
    snap: true,
    interval: 3000,
    arrows: false,
    gap: '1rem',
    breakpoints: {
        640: {
            perPage: 1,
        },
    }
};
new Splide('.splide', options).mount(); 
const allStar = document.querySelectorAll('.rating .star');

allStar.forEach((item, idx) => {
    item.addEventListener('click', function () {
        let click=0;

        allStar.forEach(i=> {
            i.classList.replace('bxs-star', 'bx-star');
            i.classList.remove('active')
        })
        for(let i = 0; i < allStar.length; i++) {
            if(i <= idx) {
                allStar[i].classList.replace('bx-star', 'bxs-star');
                allStar[i].classList.add('active');
            } else {
                allStar[i].computedStyleMap.setProperty('--i', click)
                click++
            }
        }
    });
});
require('scratchcard-js');

const scContainer = document.getElementById('card-container')
const scContent = document.getElementById('card-contient')

if (window.document.body.classList.contains('home')) {
    // Multi Card
    // Card List
    const cards = [
        'card1.png',
        'card2.png',
        'card3.png',
        'card4.png',
        'card5.png',
        'card6.png',
        'final.png'
    ];

    const initScrachCard = (index) => {
        const sc = new ScratchCard('#card-container', {
            scratchType: SCRATCH_TYPE.LINE,
            containerWidth: 600,
            containerHeight: 325,
            imageForwardSrc: `/images/${cards[index]}`,
            imageBackgroundSrc: '/images/card-background.svg',
            htmlBackground: '',
            clearZoneRadius: 50,
            percentToFinish: 30,
            callback: function () {
                if (index < cards.length - 2) {
                    sc.canvas.remove();
                    initScrachCard(index + 1)
                }
            }
        })
        // Init
        sc.init().then(() => {
            sc.container.style.backgroundImage = `url(/images/${cards[index + 1]})`;
            sc.container.style.backgroundSize = '600px 325px';
        }).catch((error) => {
            // image not loaded
            alert(error.message);
        });
        console.log(sc);
    }

    initScrachCard(0);

} else {
    // Single Card
    const sc = new ScratchCard('#card-container', {
        scratchType: SCRATCH_TYPE.LINE,
        containerWidth: 600,
        containerHeight: 325,
        imageForwardSrc: '/images/card-overlay.png',
        imageBackgroundSrc: '/images/card-background.svg',
        htmlBackground: '',
        clearZoneRadius: 50,
        percentToFinish: 30,
        callback: function () {
            scContent.style.display = 'flex'
        }
    })


    // Init
    sc.init().then(() => {

    }).catch((error) => {
        // image not loaded
        alert(error.message);
    });

}

require('scratchcard-js');

const scContainer = document.getElementById('card-container')
const scContent = document.getElementById('card-contient')
const sc = new ScratchCard('#card-container', {
    scratchType: SCRATCH_TYPE.LINE,
    containerWidth: 300,
    containerHeight: 300,
    imageForwardSrc: '/images/card-overlay.svg',
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

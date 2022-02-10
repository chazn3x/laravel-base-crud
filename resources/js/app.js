require('./bootstrap');


// Delete banner
const banners = document.getElementsByClassName('banner')
console.log(banners);

// events
const closeBanner = () => {
    for (const banner of banners) {
        banner.style.display = 'none'
    }
} 
window.addEventListener('click', closeBanner)
for (const banner of banners) {
    banner.addEventListener('click', (e) => e.stopPropagation())
}

// delete buttons
const allButtons = document.getElementsByClassName('btn__delete')
// delete events
for (const button of allButtons) {
    button.addEventListener('click', (e) => {
        e.stopPropagation()
        const id = button.attributes.data.nodeValue
        const banner = document.getElementById('banner-' + id)
        banner.style.display = 'grid'
    })
}
// close buttons
const closeButtons = document.getElementsByClassName('btn__close')
for (const button of closeButtons) {
    button.addEventListener('click', closeBanner)
}
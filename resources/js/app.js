require('./bootstrap');


// Delete banner
const banners = document.getElementsByClassName('banner')

// events
const closeBanner = () => {
    for (const banner of banners) {
        banner.style.display = 'none'
    }
} 
window.addEventListener('click', closeBanner)

// delete buttons
const allButtons = document.getElementsByClassName('btn__delete')
// delete events
for (const button of allButtons) {
    button.addEventListener('click', (e) => {
        e.stopPropagation()
        const id = button.attributes.data.nodeValue
        const banner = document.getElementById('banner-' + id)
        banner.style.display = 'grid'
        const bannerContent = document.getElementById('banner-content-' + id)
        bannerContent.addEventListener('click', (e) => e.stopPropagation())
    })
}
// close buttons
const closeButtons = document.getElementsByClassName('btn__close')
for (const button of closeButtons) {
    button.addEventListener('click', closeBanner)
}
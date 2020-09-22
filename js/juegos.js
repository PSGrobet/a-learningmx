let thumbnails = document.querySelectorAll('.thumbnail')
let ifr = document.querySelector('iframe')

let links = {
    1: "https://wordwall.net/embed/45871c4099fc4b09a23934e370a38f32?themeId=1&templateId=11",
    2: "https://wordwall.net/embed/8c1cf550f6534672a0c0ff94b52cd2cc?themeId=52&templateId=8"
}

for (let i = 0; i < thumbnails.length; i++) {
  thumbnails[i].addEventListener('click', () => {
    console.log(thumbnails[i].id)
    ifr.setAttribute('src', links[thumbnails[i].id])
  })
}
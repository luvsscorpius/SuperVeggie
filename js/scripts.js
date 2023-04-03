// Slideshow

'use strict'

const images = [
    { 'id': '1', 'url': 'img/liquidificador.png' },
    { 'id': '2', 'url': 'img/pascoa.png' },
    { 'id': '3', 'url': 'img/primeiro-banner.jpg' },
    { 'id': '3', 'url': 'img/mes-do-cliente.png' },
    { 'id': '4', 'url': 'img/skin-care.png' },
]

const containeritems = document.querySelector('#container-items')

const loadImages = (images, container) => {
    images.forEach(image => {
        container.innerHTML += `
        <div class='item'>
        <img src='${image.url}'
        </div>
        `
    })
}

loadImages(images, containeritems)
let items = document.querySelectorAll('.item')

const previous = () => {
    containeritems.appendChild(items[0])
    items = document.querySelectorAll('.item')
}

const next = () => {
    const lastItem = items[items.length - 1]
    containeritems.insertBefore(lastItem, items[0])
    items = document.querySelectorAll('.item')
}

document.querySelector('#previous').addEventListener('click', previous)
document.querySelector('#next').addEventListener('click', next)

let carouselItem = document.getElementById('carouselItem').content;

let detailTemplate = document.getElementById('productDetail')
.content;

for (let i = 0; i < dataItem.picture.length; i++) {
    detailTemplate
        .querySelector('.carousel-detail')
        .append(
            document.importNode(
                slideItem(carouselItem, dataItem, i),   true )
        );
}

function slideItem(content, item, i) {
    content.querySelector('.carousel-item__title').textContent = item.name;
    content.querySelector('.carousel-item__subtitle').textContent =
        item.subtitle[i];
    content.querySelector('.carousel-item__description').textContent =
        item.description;
    content.querySelector('.carousel-item__image').style.backgroundImage =
        'url(images/' + item.picture[i] + ')';
    return content;
}
document.querySelector('.showcase').innerHTML = '';

document
   .querySelector('.showcase')
    .append(document.importNode(detailTemplate, true));

document
    .querySelectorAll('.carousel-detail-item')[0]
    .classList.add('active')

var total = document.querySelectorAll('.carousel-detail-item')
    .length;

    var current = 0;

// повороты <-- -->
document
.getElementById('moveRight')
.addEventListener('click', function() {
    let next = current;
    current = current + 1;
    setSlide(next, current);
});

document
    .getElementById('moveLeft')
    .addEventListener('click', function() {
let prev = current;
    current = current - 1;
    setSlide(prev, current);
    });

//  от Конца до начала "Справа на лево"
function setSlide(prev, next) {
    let slide = current;
    if (next > total - 1) {
        slide = 0;
        current = 0;
    }     
// От начала до конца "Слева на Право"
if (next < 0) {
    slide = total - 1;
    current = total - 1;
}

document
.querySelectorAll('.carousel-detail-item')
[prev].classList.remove('active')

document
.querySelectorAll('.carousel-detail-item')
[slide].classList.add('active');
}


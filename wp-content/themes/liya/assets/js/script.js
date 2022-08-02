let about = new Swiper(".about_slider_name", {
    slidesPerView: "auto",
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: ".about_slider_pagination",
        type: "progressbar"
    },
    navigation: {
        nextEl: ".about_slider_next",
        prevEl: ".about_slider_prev",
    },
});

let internalAbout = new Swiper(".internal_slider_name", {
    pagination: {
        el: ".internal_slider_pagination",
        clickable: true
    },
});

let cartButton = document.querySelector(".header_cart_trigger");
let cartDropdown = document.querySelector(".header_cart_dropdown");

cartButton.onclick = function() {
    cartDropdown.classList.toggle('active');
}

let burgerButton = document.querySelector(".burger_trigger");
let burgerDropdown = document.querySelector(".burger_dropdown");

burgerButton.onclick = function() {
    burgerDropdown.classList.toggle('active');
}

/*находим все нужные нам headingElem*/
let mobileMenuItems = document.querySelectorAll('.menu_item a');
/*прогоняем из через цикл*/
mobileMenuItems.forEach((item)=>{
    let mobileMenuIcon = document.querySelector(".menu_icon");
    /*вещаем на каждый элемент обработчик на событие click*/
    item.addEventListener('click', function(){
        /*у нажатого элемента получаем родителя*/
        let parentItem = this.parentNode;
        /*находим элемент с контентом*/
        let contentBlock = parentItem.querySelector('.menu_dropdown')
        /*аналогичная проверка на наличие класса active*/
        if(contentBlock.classList.contains("active")) {
            contentBlock.classList.remove('active');
            mobileMenuIcon.classList.remove('active');
        }
        else {
            contentBlock.classList.add('active');
            mobileMenuIcon.classList.add('active');
        }
    })
})


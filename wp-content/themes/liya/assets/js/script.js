let about = new Swiper(".about_slider_name", {
    slidesPerView: "1",
    spaceBetween: 30,
    freeMode: true,
    watchSlidesProgress: true,
    pagination: {
        el: ".about_slider_pagination",
        type: "progressbar"
    },
    navigation: {
        nextEl: ".about_slider_next",
        prevEl: ".about_slider_prev",
    },
    breakpoints: {
        1250: {
            slidesPerView: "3",
        },
        760: {
            slidesPerView: "2",
        },
        320: {
            slidesPerView: "1",
        }
    },

});

let aboutSliderItem = document.querySelectorAll('.about_slider_item');

aboutSliderItem.forEach((aboutSliderLoop) => {
    // let itemPar = querySelector(".about_info .p");
    let sliderWidthReduce = () => {
        for (let i = 0; aboutSliderItem.length; i++) {
            if (aboutSliderItem[i].classList.contains("swiper-slide-visible")) {
                aboutSliderItem[i].style.width = "212px";
            }
        }
    }

    let sliderWidthreturn = () => {
        for (let i = 0; aboutSliderItem.length; i++) {
            aboutSliderItem[i].style.width = "100%";
        }
    }

    aboutSliderLoop.addEventListener('mouseover', sliderWidthReduce);
    aboutSliderLoop.addEventListener('mouseout', sliderWidthreturn);
})

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

let mobileMenuItems = document.querySelectorAll('.menu_item a');
mobileMenuItems.forEach((item)=>{
    let mobileMenuIcon = document.querySelector(".menu_icon");
    item.addEventListener('click', function(){
        let parentItem = this.parentNode;
        let contentBlock = parentItem.querySelector('.menu_dropdown')
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


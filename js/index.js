function sliderMain() {
    var swiper = new Swiper('.main .swiper-container', {
        effect: 'fade',
        slidesPerView: 1,
        fadeEffect: { crossFade: true },
        speed: 3200,
        navigation: {
            nextEl: ' .main .swiper-button-next',
            prevEl: ' .main .swiper-button-prev',
        },
        pagination: {
            el: '.main .swiper-pagination',
            type: 'bullets',
            clickable: true,
        },

    })
}


$(document).ready(function() {
    cartCalc()
    sliderMain()

    $('input[type="tel"]').mask('+7 (999) 999-9999', { placeholder: '+7 (   )    -    ' });



    $(".nav__item").hover(onIn, onOut);
    $(".nav__item-show").click(function() {
        $(".nav__item-hidden").slideToggle()
    })


    $(".header__burger-block").click(function() {
        $(this).toggleClass("header__burger-block--active")
        $("body").toggleClass("fixed-body")
        $(".nav").toggleClass("nav--active")
    })


    $(".autopark-info__tab").click(function() {
        let path = $(this).attr("data-tab-path")
        $(".autopark-info__tab").removeClass("autopark-info__tab--active")
        $(`.autopark-info__tab[data-tab-path="${path}"]`).addClass("autopark-info__tab--active")
        $(".autopark-table__content").removeClass("autopark-table__content--active")
        $(`.autopark-table__content[data-tab-content="${path}"]`).addClass("autopark-table__content--active")
    })

    $(".autopark__tab").click(function() {
        let path = $(this).attr("data-tab-path")
        $(".autopark__tab").removeClass("autopark__tab--active")
        $(`.autopark__tab[data-tab-path="${path}"]`).addClass("autopark__tab--active")
        $(".autopark__content").removeClass("autopark__content--active")
        $(`.autopark__content[data-tab-content="${path}"]`).addClass("autopark__content--active")
    })

    $('.form-group input').change(function() {
        let val = $(this).val()
        console.log(val)
        if (val) {
            $(this).addClass("input-filled")
        } else {
            $(this).removeClass("input-filled")
        }
    })






    $(document).mouseup(function(e) { // событие клика по веб-документу
        var div = $(".header__catalog-hidden");
        if (!div.is(e.target) // если клик был не по нашему блоку
            &&
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.parents(".header__catalog").removeClass("header__catalog--active")
                // $(".header__search-select-show").removeClass("header__search-select-show--active")
        }
    });




    $(".collection__tab").click(function() {
        let path = $(this).attr("data-tabs-path")
        console.log(path)
        $(".collection__tab").removeClass("collection__title--active")
        $(`.collection__tab[data-tabs-path="${path}"]`).addClass("collection__title--active")
        $(".collection__content").removeClass("collection__content--active")
        $(`.collection__content[data-content-path="${path}"]`).addClass("collection__content--active")
            // sliderCatalog()
        if (path == 2) {
            sliderCatalog2()
        }
    })
    $(".questions__item-show").click(function() {
        if ($(this).parents(".questions__item").hasClass("questions__item--active")) {
            $(this).parents(".questions__item").removeClass("questions__item--active")
        } else {
            $(".questions__item-show").parents(".questions__item").removeClass("questions__item--active")
            $(this).parents(".questions__item").addClass("questions__item--active")
        }
    })

    $(".catalog__filter-item-show").click(function() {
        $(this).toggleClass("catalog__filter-item-show--active")
    })

    $(".catalog__filter-top").click(function() {
        $(this).toggleClass("catalog__filter-top--active")
    })

    $(".catalog-raw__item-show").click(function() {
        if ($(this).hasClass("catalog-raw__item-show--active")) {
            $(".catalog-raw__item-show").removeClass("catalog-raw__item-show--active")
        } else {
            $(".catalog-raw__item-show").removeClass("catalog-raw__item-show--active")
            $(this).addClass("catalog-raw__item-show--active")
        }

    })

    $(document).mouseup(function(e) { // событие клика по веб-документу
        var div = $(".catalog-raw__item-show");
        if (!div.is(e.target) // если клик был не по нашему блоку
            &&
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            // div.hide()
            if ($(".catalog-raw__item-show").hasClass("catalog-raw__item-show--active")) {
                $(".catalog-raw__item-show").removeClass("catalog-raw__item-show--active")
            }
        }
    });
})


function clickOutsideElemnt(div, e) {
    if (!div.is(e.target) &&
        div.has(e.target).length === 0) {
        div.hide();
    }
}

function cartCalc() {
    $('.ccalc .ccalc-minus').click(function() {
        let a = $(this).closest('.ccalc').find('input').val();
        if (a > 1) {
            let b = +a - 1;
            $(this).closest('.ccalc').find('input').val(b);
        } else {
            $(this).closest('.ccalc').find('input').val(a);
            $(this).addClass("disabled");
        }
    });
    $('.ccalc .ccalc-plus').click(function() {
        let a = $(this).closest('.ccalc').find('input').val();
        let b = +a + 1;
        $(this).closest('.ccalc').find('input').val(b);
        $(this).siblings(".ccalc-minus").removeClass("disabled");
    });
}

function onIn() {
    if (window.innerWidth > 992) {
        let el = $(this)
        setTimeout(function() {
            if (el.is(':hover')) {
                console.log(el)
                el.children(".nav__item-show").addClass("nav__item-show--active")
            }
        }, 200);
    }
}

function onOut() {
    if (window.innerWidth > 992) {
        $(this).children(".nav__item-show").removeClass("nav__item-show--active")
    }
}

function onIn2() {
    if (window.innerWidth > 992) {
        let el = $(this)
        setTimeout(function() {
            if (el.is(':hover')) {
                console.log(el)
                el.children(".header__catalog-item-show").addClass("header__catalog-item-show--active")
            }
        }, 200);
    }
}

function onOut2() {
    if (window.innerWidth > 992) {
        $(this).children(".header__catalog-item-show").removeClass("header__catalog-item-show--active")
    }
}
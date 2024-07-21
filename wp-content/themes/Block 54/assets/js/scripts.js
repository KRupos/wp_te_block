document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector("[data-warning]");
    if (document.cookie.indexOf("warning") !== -1) {
        container.classList.remove("warning--active");
    } else {
        container.classList.add("warning--active");
    }

    if (container) {
        const apply = container.querySelector("[data-warning-apply]");
        apply.addEventListener("click", () => {
            container.classList.remove("warning--active");
            document.cookie = "warning=true; max-age=2592000; path=/";
        });
    };
    //document.querySelector(".scroll-shadow").scrollTop = 88;
    /* Theme Toggle */
    let toggles = document.querySelectorAll('.theme-toggle');

    let storedTheme = Cookies.get('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    if (storedTheme) {
        document.documentElement.setAttribute('data-theme', storedTheme);
        if (toggles && storedTheme === 'dark') {
            toggles.forEach((toggle) => {
                toggle.checked = true;
            });
        }
    }


    if (toggles) {
        toggles.forEach((toggle) => {
            toggle.onclick = function () {
                let currentTheme = document.documentElement.getAttribute('data-theme');
                let targetTheme = 'light';

                if (currentTheme === 'light') {
                    targetTheme = 'dark';
                }

                document.documentElement.setAttribute('data-theme', targetTheme)
                Cookies.set('theme', targetTheme, {expires: 7, path: '/'})
            };
        });
    }

    let menus = document.querySelectorAll('.mobile-main-menu');
    if (menus) {
        menus.forEach(function (menu) {
            let itemsHasChildren = menu.querySelectorAll('.menu-item-has-children');
            itemsHasChildren.forEach(function (item) {
                item.addEventListener('click', (event) => {
                    if (event.target.parentElement.classList.contains('menu-item-has-children')) {
                        event.preventDefault();
                        item.querySelector('ul').classList.toggle('active');
                    }
                });
            });
        });
    }

    /* Toggle Mobile Main Menu */
    let toggleMenu = document.querySelector('.toggle-menu');
    if (toggleMenu) {
        toggleMenu.addEventListener('click', (event) => {
            toggleMenu.classList.toggle('active');
            document.querySelector('.mobile-menu-wrap').classList.toggle('active');
        });
    }

    /* Madals */
    Fancybox.bind('[data-fancybox]', {
        infinite: false,
        on: {
            //При открытии формы считывание акции или услуги и тарифа
            done: (fancybox, slide) => {
                const service = slide.$trigger.closest('[data-cf7-service]')
                const tariff = slide.$trigger.closest('[data-cf7-tariff]')
                let result = ''
                if(service) {
                    result += service.getAttribute('data-cf7-service')
                }
                if (tariff) {
                    result +=  ' | Тариф: ' + tariff.getAttribute('data-cf7-tariff')
                }

                slide.$content.querySelector('input[name=data-service]').setAttribute('value', result !== '' ? result : 'Общее')
            }
        }
    });

    Fancybox.bind(
        'a[href*=.jpg], a[href*=.jpeg], a[href*=.png], a[href*=.gif]',
        {}
    );

    /* Phone Mask */
    let phonesInput = document.querySelectorAll('[type="tel"]');
    if (phonesInput) {
        phonesInput.forEach(function (item) {
            IMask(
                item, {
                    mask: '+{7} (000) 000-00-00'
                });
        });
    }

    /* Custom Select */
    customSelect('select');


    let carouselMain = document.querySelector('.carousel-main');
    if (carouselMain) {
        let showNav = true;
        let splide = new Splide('.carousel-main', {
            perPage: 1,
            focus: 0,
            autoplay: true,
            interval: 3000,
            omitEnd: true,
            lazyLoad: 'nearby',
            pagination: false,
        });
        splide.on('overflow', function (isOverflow) {
            splide.options = {
                arrows: isOverflow,
                pagination: false,
                drag: isOverflow,
            };
        });
        splide.mount();
    }

    let carouselOurPartners = document.querySelector('.carousel-our-partners');
    if (carouselOurPartners) {
        let showNav = true;
        let splide = new Splide('.carousel-our-partners', {
            perPage: 4,
            type: 'loop',
            focus: 0,
            autoplay: true,
            interval: 3000,
            omitEnd: true,
            padding: {left: '10px', right: '50px'},
            gap: '16px',
            lazyLoad: 'nearby',
            pagination: false,
            breakpoints: {
                992: {
                    perPage: 3,
                },
                768: {
                    perPage: 2,
                },
                480: {
                    perPage: 1,
                    arrows: false,
                },
            }
        });
        splide.on('overflow', function (isOverflow) {
            splide.options = {
                arrows: isOverflow,
                pagination: false,
                drag: isOverflow,
            };
        });
        splide.mount();
    }

    let carouselDocuments = document.querySelector('.carousel-documents');
    if (carouselDocuments) {
        let showNav = true;
        let splide = new Splide('.carousel-documents', {
            perPage: 4,
            focus: 0,
            omitEnd: true,
            padding: {left: '10px', right: '50px'},
            gap: '16px',
            lazyLoad: 'nearby',
            pagination: false,
            breakpoints: {
                992: {
                    perPage: 3,
                },
                768: {
                    perPage: 2,
                },
                480: {
                    perPage: 2,
                    arrows: false,
                },
            }
        });
        splide.on('overflow', function (isOverflow) {
            splide.options = {
                arrows: isOverflow,
                pagination: false,
                drag: isOverflow,
            };
        });
        splide.mount();
    }

    let carouselEquipment = document.querySelector('.carousel-equipment');
    if (carouselEquipment) {
        let showNav = true;
        let splide = new Splide('.carousel-equipment', {
            perPage: 3,
            type: 'loop',
            focus: 0,
            autoplay: true,
            interval: 3000,
            omitEnd: true,
            padding: {left: '10px', right: '50px'},
            gap: '16px',
            lazyLoad: 'nearby',
            pagination: false,
            breakpoints: {
                992: {
                    perPage: 3,
                },
                768: {
                    perPage: 2,
                },
                480: {
                    perPage: 1,
                    arrows: false,
                },
            }
        });
        splide.on('overflow', function (isOverflow) {
            splide.options = {
                arrows: isOverflow,
                pagination: false,
                drag: isOverflow,
            };
        });
        splide.mount();
    }

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < collapseItems.length; i++) {
            collapseItems[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    const collapseItems = document.querySelectorAll('.collapse-block__header');

    if (collapseItems) {
        collapseItems.forEach(item => item.addEventListener('click', toggleAccordion));
    }

    const attachFileInputs = document.querySelectorAll('.attach-file-input');
    if (attachFileInputs) {
        attachFileInputs.forEach(item => item.addEventListener('change', (event) => {
            let filename = item.value.replace("C:\\fakepath\\", "");
            console.log(item);
            item.closest('.attach-file').querySelector('.attach-file__title').innerHTML = filename;
        }));
    }

    // Модальное окно при успешной отправки формы
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        Fancybox.close();
        Fancybox.show([{
            src: "#success-mail-send",
            type: "inline"
        }]);
    }, false );


    var header = document.querySelector('.site-header');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 89) {
            header.classList.add('scroll');
        } else {
            header.classList.remove('scroll');
        }
    });

    initTabs();
});
window.addEventListener('DOMContentLoaded', function () {
    try {
        isElementVisible(document.getElementsByClassName('section-cards-list--homepage-3')[0], function e(isVisible) {
            if (isVisible) {
                document.querySelectorAll('[data-number]').forEach((e) => {
                    animateNumber(e, e.dataset.number, 10, 10);
                });
            }
        })
    } catch (e) {
    }

});

function isElementVisible(element, callback) {
    const observer = new IntersectionObserver(function (entries) {
        const isVisible = entries[0].isIntersecting;

        if (typeof callback === 'function') {
            callback(isVisible);
            if (isVisible) observer.disconnect();
        }
    });

    observer.observe(element);
}

function animateNumber(element, max, step, delay) {
    const maxNumber = parseInt(max);
    let currentNumber = 0;

    let interval = setInterval(function () {
        currentNumber += step;
        if (currentNumber > maxNumber) {
            currentNumber = maxNumber;
            clearInterval(interval);
        }
        element.innerText = currentNumber;
    }, delay);
    element.style.transition = "all ease-in-out 0.5s";
}

const btnUp = {
    el: document.querySelector('.btn-up'),
    show() {
        // удалим у кнопки класс btn-up_hide
        this.el.classList.remove('btn-up_hide');
    },
    hide() {
        // добавим к кнопке класс btn-up_hide
        this.el.classList.add('btn-up_hide');
    },
    addEventListener() {
        // при прокрутке содержимого страницы
        window.addEventListener('scroll', () => {
            // определяем величину прокрутки
            const scrollY = window.scrollY || document.documentElement.scrollTop;
            // если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
            scrollY > 400 ? this.show() : this.hide();
        });
        // при нажатии на кнопку .btn-up
        document.querySelector('.btn-up').onclick = () => {
            // переместим в начало страницы
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        }
    }
}

btnUp.addEventListener();
if (document.querySelector('.attach-file__title')) {
    document.querySelector('.attach-file__title').addEventListener('click', (e) => {
        document.querySelector('input[name=file-677]').click();
    })
}

function openTab(tabIndex) {
    // Get all elements with class="tabcontent" and hide them
    let tabcontent = document.getElementsByClassName("collapse-list__item");
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    let tablinks = document.getElementsByClassName("item");
    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    tabcontent[tabIndex].style.display = "block";
    tablinks[tabIndex].classList.add("active");
}

const initTabs = () => {
    const tabContainerAll = document.querySelectorAll('[tab-container]');
    const activeClass = 'active';

    tabContainerAll.forEach((tabContainer)=> {
        const tabButtons = tabContainer.querySelectorAll('[tab-btn]');
        const tabContents = tabContainer.querySelectorAll('[tab-content]');
        if (tabButtons.length > 0 && tabContents.length > 0) {
            tabButtons[0].classList.add(activeClass);

            tabContents.forEach((tabContent, index) => {
                if (index > 0) tabContent.style.display = 'none';
            });

            tabButtons.forEach(tabButton => {
                tabButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = this.getAttribute('href');

                    tabButtons.forEach(btn => btn.classList.remove(activeClass));
                    tabContents.forEach(content => content.style.display = 'none');

                    this.classList.add(activeClass);
                    document.querySelector(target).style.display = 'block';
                });
            });
        }
    });
}
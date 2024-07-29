/*!
* Start Bootstrap - Agency v7.0.12 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
//

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    //  Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });


// --- retrieve products by category ---
    document.querySelectorAll('.timeline li').forEach(function (categoryElement) {
        categoryElement.addEventListener('click', function (event) {
            event.preventDefault();

            var category = this.getAttribute('data-category');
            var encodedCategory = encodeURIComponent(category);

            var apiUrl = `http://127.0.0.1:8000/api/products/category/${encodedCategory}`;

            fetch(apiUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    var productsContainer = document.querySelector('#products-container');
                    productsContainer.innerHTML = '';

                    data.forEach(function (product) {
                        var productHtml = `
                    <div class="col-lg-3 col-md-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="${product.image}" alt="${product.title}">
                            <div class="card-body">
                                <h5 class="card-title">${product.title}</h5>
                                <p class="card-text">$${product.price}</p>
                            </div>
                        </div>
                    </div>
                `;
                        productsContainer.innerHTML += productHtml;
                    });
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert('Erreur lors du chargement des produits. Veuillez réessayer.');
                });
        });
    });
});

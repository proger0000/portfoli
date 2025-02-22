'use strict';

// Language switching functionality
let currentLang = 'ua'; // Default language

const switchLanguage = function(lang) {
    // Hide all language elements
    document.querySelectorAll('[data-lang]').forEach(el => {
        el.style.display = 'none';
    });
    
    // Show only elements for the selected language
    document.querySelectorAll(`[data-lang="${lang}"]`).forEach(el => {
        el.style.display = 'block';
    });
    
    // Update active state on language buttons
    document.querySelectorAll('[data-lang-switch]').forEach(btn => {
        btn.classList.remove('active');
    });
    document.querySelector(`[data-lang-switch="${lang}"]`).classList.add('active');
    
    currentLang = lang;
}

// Setup language switcher
document.querySelectorAll('[data-lang-switch]').forEach(btn => {
    btn.addEventListener('click', function() {
        const lang = this.getAttribute('data-lang-switch');
        switchLanguage(lang);
    });
});

// Opening or closing sidebar
const elementToggleFunc = function(elem) { 
    elem.classList.toggle("active"); 
}

const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

sidebarBtn.addEventListener("click", function() {
    elementToggleFunc(sidebar); 
});

// Page navigation
const navigationLinks = document.querySelectorAll('[data-nav-link]');
const pages = document.querySelectorAll('[data-page]');

for(let i = 0; i < navigationLinks.length; i++) {
    if (navigationLinks[i].getAttribute('data-lang') !== currentLang) continue;
    
    navigationLinks[i].addEventListener('click', function() {
        for(let j = 0; j < pages.length; j++) {
            if(this.innerHTML.toLowerCase() == pages[j].dataset.page) {
                pages[j].classList.add('active');
                navigationLinks[i].classList.add('active');
                window.scrollTo(0, 0);
            } else {
                pages[j].classList.remove('active');
                navigationLinks[j].classList.remove('active');
            }
        }
    });
}

// Portfolio filter functionality
const select = document.querySelector('[data-select]');
const selectItems = document.querySelectorAll('[data-select-item]');
const selectValue = document.querySelector('[data-select-value]');
const filterBtn = document.querySelectorAll('[data-filter-btn]');

select.addEventListener('click', function() {
    elementToggleFunc(this);
});

for(let i = 0; i < selectItems.length; i++) {
    selectItems[i].addEventListener('click', function() {
        let selectedValue = this.innerText.toLowerCase();
        selectValue.innerText = this.innerText;
        elementToggleFunc(select);
        filterFunc(selectedValue);
    });
}

const filterItems = document.querySelectorAll('[data-filter-item]');

const filterFunc = function(selectedValue) {
    for(let i = 0; i < filterItems.length; i++) {
        if(selectedValue == "всі" || selectedValue == "all") {
            filterItems[i].classList.add('active');
        } else if (selectedValue == filterItems[i].dataset.category) {
            filterItems[i].classList.add('active');
        } else {
            filterItems[i].classList.remove('active');
        }
    }
}

// Enabling filter button for larger screens
let lastClickedBtn = filterBtn[0];

for (let i = 0; i < filterBtn.length; i++) {
    filterBtn[i].addEventListener('click', function() {
        if (this.getAttribute('data-lang') !== currentLang) return;
        
        let selectedValue = this.innerText.toLowerCase();
        selectValue.innerText = this.innerText;
        filterFunc(selectedValue);

        lastClickedBtn.classList.remove('active');
        this.classList.add('active');
        lastClickedBtn = this;
    });
}

// Enabling Contact Form
const form = document.querySelector('[data-form]');
const formInputs = document.querySelectorAll('[data-form-input]');
const formBtn = document.querySelector('[data-form-btn]');

for(let i = 0; i < formInputs.length; i++) {
    formInputs[i].addEventListener('input', function() {
        if(form.checkValidity()) {
            formBtn.removeAttribute('disabled');
        } else {
            formBtn.setAttribute('disabled', '');
        }
    });
}

// Form submission with AJAX
form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(form);
    
    // Show loading state
    formBtn.innerHTML = `<ion-icon name="hourglass-outline"></ion-icon><span data-lang="ua">Надсилання...</span><span data-lang="en">Sending...</span>`;
    formBtn.disabled = true;
    
    fetch('contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Success message
            form.reset();
            formBtn.innerHTML = `<ion-icon name="checkmark-circle-outline"></ion-icon><span data-lang="ua">Надіслано!</span><span data-lang="en">Sent!</span>`;
            setTimeout(() => {
                formBtn.innerHTML = `<ion-icon name="paper-plane"></ion-icon><span data-lang="ua">Надіслати повідомлення</span><span data-lang="en">Send Message</span>`;
                formBtn.disabled = true;
                // Show correct language in button
                switchLanguage(currentLang);
            }, 3000);
        } else {
            // Error message
            formBtn.innerHTML = `<ion-icon name="alert-circle-outline"></ion-icon><span data-lang="ua">Помилка!</span><span data-lang="en">Error!</span>`;
            setTimeout(() => {
                formBtn.innerHTML = `<ion-icon name="paper-plane"></ion-icon><span data-lang="ua">Надіслати повідомлення</span><span data-lang="en">Send Message</span>`;
                formBtn.disabled = false;
                // Show correct language in button
                switchLanguage(currentLang);
            }, 3000);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        formBtn.innerHTML = `<ion-icon name="alert-circle-outline"></ion-icon><span data-lang="ua">Помилка!</span><span data-lang="en">Error!</span>`;
        setTimeout(() => {
            formBtn.innerHTML = `<ion-icon name="paper-plane"></ion-icon><span data-lang="ua">Надіслати повідомлення</span><span data-lang="en">Send Message</span>`;
            formBtn.disabled = false;
            // Show correct language in button
            switchLanguage(currentLang);
        }, 3000);
    });
});

// Initialize language
switchLanguage(currentLang);
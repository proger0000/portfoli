// Language Switcher
const langUA = document.getElementById('lang-ua');
const langEN = document.getElementById('lang-en');
const elementsUA = document.querySelectorAll('[data-lang="ua"]');
const elementsEN = document.querySelectorAll('[data-lang="en"]');

function setLanguage(lang) {
if (lang === 'ua') {
langUA.classList.add('bg-primary-700');
langUA.classList.remove('bg-secondary-800');
langEN.classList.remove('bg-primary-700');
langEN.classList.add('bg-secondary-800');

elementsUA.forEach(el => el.classList.remove('hidden'));
elementsEN.forEach(el => el.classList.add('hidden'));
} else {
langEN.classList.add('bg-primary-700');
langEN.classList.remove('bg-secondary-800');
langUA.classList.remove('bg-primary-700');
langUA.classList.add('bg-secondary-800');

elementsEN.forEach(el => el.classList.remove('hidden'));
elementsUA.forEach(el => el.classList.add('hidden'));
}
}

langUA.addEventListener('click', () => setLanguage('ua'));
langEN.addEventListener('click', () => setLanguage('en'));

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
anchor.addEventListener('click', function(e) {
e.preventDefault();

const targetId = this.getAttribute('href');
const targetElement = document.querySelector(targetId);

if (targetElement) {
window.scrollTo({
top: targetElement.offsetTop - 20,
behavior: 'smooth'
});

// Update active state
document.querySelectorAll('a').forEach(link => {
if (link.getAttribute('href').startsWith('#')) {
link.classList.remove('text-primary-400');
link.classList.add('text-gray-400');
}
});

this.classList.remove('text-gray-400');
this.classList.add('text-primary-400');
}
});
});

// Portfolio filter
const filterButtons = document.querySelectorAll('.filter-btn');
const portfolioItems = document.querySelectorAll('.portfolio-item');

filterButtons.forEach(button => {
button.addEventListener('click', () => {
// Update active button
filterButtons.forEach(btn => {
btn.classList.remove('active');
btn.classList.remove('bg-primary-700');
btn.classList.add('bg-secondary-700');
});
button.classList.add('active');
button.classList.add('bg-primary-700');
button.classList.remove('bg-secondary-700');

const filter = button.getAttribute('data-filter');

portfolioItems.forEach(item => {
if (filter === 'all' || item.getAttribute('data-category') === filter) {
item.style.display = 'block';
} else {
item.style.display = 'none';
}
});
});
});

// Contact form handling
const contactForm = document.getElementById('contact-form');
const submitBtn = document.getElementById('submitBtn');

contactForm.addEventListener('submit', function(e) {
e.preventDefault();

const formData = new FormData(contactForm);

// Change button state to loading
const originalBtnContent = submitBtn.innerHTML;
submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i><span data-lang="ua">Надсилання...</span><span data-lang="en" class="hidden">Sending...</span>';
submitBtn.disabled = true;

fetch('/.netlify/functions/contact', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(Object.fromEntries(formData))
})
.then(response => response.json())
.then(data => {
if (data.success) {
contactForm.reset();
submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i><span data-lang="ua">Надіслано!</span><span data-lang="en" class="hidden">Sent!</span>';
submitBtn.classList.remove('bg-primary-600');
submitBtn.classList.add('bg-green-600');

setTimeout(() => {
submitBtn.innerHTML = originalBtnContent;
submitBtn.classList.remove('bg-green-600');
submitBtn.classList.add('bg-primary-600');
submitBtn.disabled = false;
}, 3000);
} else {
submitBtn.innerHTML = '<i class="fas fa-exclamation-circle mr-2"></i><span data-lang="ua">Помилка!</span><span data-lang="en" class="hidden">Error!</span>';
submitBtn.classList.remove('bg-primary-600');
submitBtn.classList.add('bg-red-600');

setTimeout(() => {
submitBtn.innerHTML = originalBtnContent;
submitBtn.classList.remove('bg-red-600');
submitBtn.classList.add('bg-primary-600');
submitBtn.disabled = false;
}, 3000);
}
})
.catch(error => {
submitBtn.innerHTML = '<i class="fas fa-exclamation-circle mr-2"></i><span data-lang="ua">Помилка!</span><span data-lang="en" class="hidden">Error!</span>';
submitBtn.classList.remove('bg-primary-600');
submitBtn.classList.add('bg-red-600');

setTimeout(() => {
submitBtn.innerHTML = originalBtnContent;
submitBtn.classList.remove('bg-red-600');
submitBtn.classList.add('bg-primary-600');
submitBtn.disabled = false;
}, 3000);
});
});


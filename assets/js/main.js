// Mobile menu toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

if (hamburger) {
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Navbar background change on scroll
window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (window.scrollY > 100) {
        header.style.background = 'rgba(17, 34, 64, 0.95)';
        header.style.backdropFilter = 'blur(10px)';
    } else {
        header.style.background = 'var(--secondary)';
        header.style.backdropFilter = 'none';
    }
});

// Form validation
const contactForm = document.querySelector('.contact-form form');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const message = document.getElementById('message');
        let isValid = true;
        
        // Simple validation
        if (name.value.trim() === '') {
            isValid = false;
            showError(name, 'Nama harus diisi');
        }
        
        if (email.value.trim() === '') {
            isValid = false;
            showError(email, 'Email harus diisi');
        } else if (!isValidEmail(email.value)) {
            isValid = false;
            showError(email, 'Email tidak valid');
        }
        
        if (message.value.trim() === '') {
            isValid = false;
            showError(message, 'Pesan harus diisi');
        }
        
        if (!isValid) {
            e.preventDefault();
        }
    });
}

function showError(input, message) {
    const formGroup = input.parentElement;
    const error = document.createElement('div');
    error.className = 'error-message';
    error.style.color = '#ef4444';
    error.style.fontSize = '12px';
    error.style.marginTop = '5px';
    error.textContent = message;
    
    // Remove existing error
    const existingError = formGroup.querySelector('.error-message');
    if (existingError) {
        formGroup.removeChild(existingError);
    }
    
    formGroup.appendChild(error);
    input.style.borderColor = '#ef4444';
    
    // Remove error after 3 seconds
    setTimeout(() => {
        if (error.parentNode === formGroup) {
            formGroup.removeChild(error);
            input.style.borderColor = '';
        }
    }, 3000);
}

function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#contact-form');

    if (!form) {
        return;
    }

    const fields = {
        name: form.querySelector('#name'),
        email: form.querySelector('#email'),
        subject: form.querySelector('#subject'),
        message: form.querySelector('#message')
    };

    const successMessage = form.querySelector('#form-success');

    const setError = (field, message) => {
        const error = form.querySelector(`#${field.id}-error`);
        field.setAttribute('aria-invalid', message ? 'true' : 'false');
        error.textContent = message;
    };

    const validateField = (field) => {
        const value = field.value.trim();

        if (field.id === 'name') {
            if (!value) return 'Please enter your name.';
            if (value.length < 2) return 'Name must be at least 2 characters.';
        }

        if (field.id === 'email') {
            if (!value) return 'Please enter your email address.';
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                return 'Please enter a valid email address.';
            }
        }

        if (field.id === 'subject') {
            if (!value) return 'Please enter a subject.';
            if (value.length < 3) return 'Subject must be at least 3 characters.';
        }

        if (field.id === 'message') {
            if (!value) return 'Please enter your message.';
            if (value.length < 10) return 'Message must be at least 10 characters.';
        }

        return '';
    };

    const validateForm = () => {
        let firstInvalidField = null;

        Object.values(fields).forEach((field) => {
            const error = validateField(field);
            setError(field, error);

            if (error && !firstInvalidField) {
                firstInvalidField = field;
            }
        });

        if (firstInvalidField) {
            firstInvalidField.focus();
            return false;
        }

        return true;
    };

    Object.values(fields).forEach((field) => {
        field.addEventListener('input', () => {
            if (field.getAttribute('aria-invalid') === 'true') {
                setError(field, validateField(field));
            }

            successMessage.textContent = '';
            successMessage.classList.remove('visible');
        });
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        if (!validateForm()) {
            successMessage.textContent = '';
            successMessage.classList.remove('visible');
            return;
        }

        successMessage.textContent = 'Thank you! Your message has been submitted successfully.';
        successMessage.classList.add('visible');
        form.reset();

        Object.values(fields).forEach((field) => {
            field.removeAttribute('aria-invalid');
        });
    });
});

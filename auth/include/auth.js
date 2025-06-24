 function addShowHideToPasswords() {
      const passwordFields = document.querySelectorAll('input[type="password"], input[type="text"]');

      passwordFields.forEach(field => {
        const wrapper = field.parentElement;

        // Avoid adding toggle button again
        if (wrapper.querySelector('.toggle-password')) return;

        const toggleBtn = document.createElement('button');
        toggleBtn.type = 'button';
        toggleBtn.className = 'toggle-password';
        toggleBtn.innerHTML = '<i class="fa-solid fa-eye"></i>';

        toggleBtn.addEventListener('click', () => {
          const icon = toggleBtn.querySelector('i');
          if (field.type === 'password') {
            field.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
          } else {
            field.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
          }
        });

        wrapper.appendChild(toggleBtn);
      });
    }

    // Run on page load
    window.addEventListener('DOMContentLoaded', addShowHideToPasswords);

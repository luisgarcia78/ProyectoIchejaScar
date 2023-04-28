const showPasswordBtn = document.getElementById('show-password-btn');
showPasswordBtn.addEventListener('click', togglePasswordVisibility);

function togglePasswordVisibility() {
  const passwordInput = document.getElementById('pass');
  const passwordIcon = showPasswordBtn.querySelector('i');
  
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    passwordIcon.classList.remove('bi bi-eye-slash-fill');
    passwordIcon.classList.add('bi-eye');
  } else {
    passwordInput.type = 'password';
    passwordIcon.classList.remove('bi-eye');
    passwordIcon.classList.add('bi bi-eye-slash-fill');
  }
}

const closeButton = document.createElement('i');
closeButton.classList.add('bi', 'bi-x');
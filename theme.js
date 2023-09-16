const themeStyle = document.getElementById('theme-style');
const darkStyle = document.getElementById('dark-style');
const themeToggleButton = document.getElementById('theme-toggle');
const moonIcon = document.getElementById('moon-icon');
const sunIcon = document.getElementById('sun-icon');

// Initialize based on user's system preference or previously saved theme
if (localStorage.getItem('theme') === 'dark' ||
   (localStorage.getItem('theme') !== 'light' &&
    window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    enableDarkMode();
} else {
    disableDarkMode();
}

themeToggleButton.addEventListener('click', () => {
    if (darkStyle.hasAttribute('disabled')) {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
});

function enableDarkMode() {
    darkStyle.removeAttribute('disabled');
    localStorage.setItem('theme', 'dark');
    moonIcon.hidden = true;
    sunIcon.hidden = false;
}

function disableDarkMode() {
    darkStyle.setAttribute('disabled', 'true');
    localStorage.setItem('theme', 'light');
    moonIcon.hidden = false;
    sunIcon.hidden = true;
}

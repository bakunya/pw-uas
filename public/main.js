document.addEventListener('DOMContentLoaded', _ => {
    const buttonReset = document.querySelectorAll('button[type="button"].reset')
    buttonReset.forEach(b => b.addEventListener('click', _ => window.location.reload()))
})
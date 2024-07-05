document.getElementById('form1').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita o comportamento padrão do formulário
            const formData = new FormData(document.getElementById('form1'));
            for (const [key, value] of formData.entries()) {
                sessionStorage.setItem(key, value);
            }
            window.location.href = 'baseteste2.php';
        });
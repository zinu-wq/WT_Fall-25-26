document.addEventListener('DOMContentLoaded', function() {
    const profileForm = document.getElementById('profileForm');
    const outputDiv = document.getElementById('output');

    profileForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(profileForm);

        // Manually add the button value for PHP isset check
        formData.append('update', '1');

        // Simple validation
        const name = formData.get('name').trim();
        const email = formData.get('email').trim();
        const phone = formData.get('phone').trim();

        if (!name || !email || !phone) {
            alert("All fields are required!");
            return;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
        if (!email.match(emailPattern)) {
            alert("Invalid email format!");
            return;
        }

        if(!/^\d{10}$/.test(phone)) {
            alert("Phone must be 10 digits!");
            return;
        }

        // AJAX request
        fetch('../controller/profile_process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            outputDiv.innerHTML = data;
        })
        .catch(err => {
            outputDiv.innerHTML = "<p style='color:red;'>Error updating profile.</p>";
            console.error(err);
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const profileForm = document.getElementById('profileForm');
    profileForm.addEventListener('submit', function(e) {
        const name = profileForm.name.value.trim();
        const email = profileForm.email.value.trim();
        const phone = profileForm.phone.value.trim();

        if (!name || !email || !phone) {
            e.preventDefault(); 
            alert("All fields are required!");
            return;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
        if (!email.match(emailPattern)) {
            e.preventDefault();
            alert("Invalid email format!");
            return;
        }

        if(!/^\d{10}$/.test(phone)) {
            e.preventDefault();
            alert("Phone must be 10 digits!");
            return;
        }

        
    });
});

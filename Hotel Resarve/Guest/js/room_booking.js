
const searchInput = document.querySelector('select[name="search_room"]');
const checkinInput = document.querySelector('input[name="checkin"]');
const checkoutInput = document.querySelector('input[name="checkout"]');
const prefInput = document.querySelector('select[name="preference"]');

searchInput?.addEventListener('input', () => {
    console.log("Room type: " + searchInput.value);
});

checkinInput?.addEventListener('input', () => {
    console.log("Check-in: " + checkinInput.value);
});

checkoutInput?.addEventListener('input', () => {
    console.log("Check-out: " + checkoutInput.value);
});

prefInput?.addEventListener('input', () => {
    console.log("Preference: " + prefInput.value);
});


const ratingInput = document.getElementById('ratingInput');
const commentInput = document.getElementById('commentInput');

ratingInput?.addEventListener('input', () => {
    console.log("Rating changed:", ratingInput.value);
});

commentInput?.addEventListener('input', () => {
    console.log("Comment changed:", commentInput.value);
});

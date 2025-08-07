document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const form = e.target;
  document.getElementById('status').textContent = 'Mengirim...';
  // Simulasi AJAX
  setTimeout(() => {
    document.getElementById('status').textContent = 'Terima kasih! Pesan telah dikirim 🚀';
    form.reset();
  }, 1500);
});

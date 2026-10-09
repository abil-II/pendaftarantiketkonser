const ticketPrice = 250000;
const quantitySelect = document.querySelector('#quantity');
const totalPrice = document.querySelector('#total-price');
const registrationForm = document.querySelector('#registration-form');
const formMessage = document.querySelector('#form-message');

const formatRupiah = (amount) => new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR',
    maximumFractionDigits: 0,
}).format(amount);

const updateTotal = () => {
    totalPrice.textContent = formatRupiah(ticketPrice * Number(quantitySelect.value));
};

quantitySelect.addEventListener('change', updateTotal);

registrationForm.addEventListener('submit', (event) => {
    event.preventDefault();
    formMessage.textContent = 'Ini adalah demo antarmuka. Data pendaftaran belum dikirim atau disimpan.';
    formMessage.hidden = false;
});

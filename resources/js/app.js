const ticketPrice = 250000;
const quantitySelect = document.querySelector('#quantity');
const totalPrice = document.querySelector('#total-price');

const formatRupiah = (amount) => new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR',
    maximumFractionDigits: 0,
}).format(amount);

const updateTotal = () => {
    totalPrice.textContent = formatRupiah(ticketPrice * Number(quantitySelect.value));
};

quantitySelect.addEventListener('change', updateTotal);

const registrationSuccessDialog = document.querySelector('#registration-success');

if (registrationSuccessDialog instanceof HTMLDialogElement) {
    registrationSuccessDialog.showModal();
}

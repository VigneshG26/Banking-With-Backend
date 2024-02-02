function validateNumber(event) {
  const input = event.target;
  const currentValue = input.value;
  const onlyNumbers = /^\d*$/.test(currentValue);

  if (!onlyNumbers) {
    input.value = currentValue.replace(/\D/g, '');
  }
}

function validateAlphabet(event) {
  const input = event.target;
  const currentValue = input.value;
  const onlyAlphabets = /^[a-zA-Z]*$/.test(currentValue);

  if (!onlyAlphabets) {
    input.value = currentValue.replace(/[^a-zA-Z]/g, '');
  }
}
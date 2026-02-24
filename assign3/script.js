'use strict';

let current = '';
let justCalculated = false;

const display = document.getElementById('display');
const OPERATORS = ['×', '−', '+', '÷'];

function updateDisplay(val) {
  display.textContent = val !== '' ? val : '0';
}

function input(val) {
  if (justCalculated && !OPERATORS.includes(val)) {
    current = '';
    justCalculated = false;
  } else {
    justCalculated = false;
  }

  // Prevent double operators
  if (OPERATORS.includes(val)) {
    if (current === '') return;
    const last = current[current.length - 1];
    if (OPERATORS.includes(last)) {
      current = current.slice(0, -1);
    }
  }

  current += val;
  updateDisplay(current);
}

function clearAll() {
  current = '';
  justCalculated = false;
  updateDisplay('0');
}

function calculate() {
  if (!current) return;
  try {
    let expr = current
      .replace(/×/g, '*')
      .replace(/÷/g, '/')
      .replace(/−/g, '-');

    // eslint-disable-next-line no-new-func
    let result = Function('"use strict"; return (' + expr + ')')();

    if (!isFinite(result)) {
      updateDisplay('Error');
      current = '';
      return;
    }

    result = parseFloat(result.toPrecision(10));
    current = String(result);
    justCalculated = true;
    updateDisplay(current);
  } catch (e) {
    updateDisplay('Error');
    current = '';
  }
}

// Keyboard support
document.addEventListener('keydown', (e) => {
  if (e.key >= '0' && e.key <= '9')       input(e.key);
  else if (e.key === '+')                  input('+');
  else if (e.key === '-')                  input('−');
  else if (e.key === '*')                  input('×');
  else if (e.key === '/') { e.preventDefault(); input('÷'); }
  else if (e.key === 'Enter' || e.key === '=') calculate();
  else if (e.key === 'Escape')             clearAll();
  else if (e.key === 'Backspace') {
    current = current.slice(0, -1);
    updateDisplay(current || '0');
  }
});

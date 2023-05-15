
// all inputs selector
let inputSelectors = document.querySelector('.create-form-wrap');
let B2 = inputSelectors.querySelector('#B2');
let B3 = inputSelectors.querySelector('#B3');
let B4 = inputSelectors.querySelector('#B4');
let B5 = inputSelectors.querySelector('#B5');
let B8 = inputSelectors.querySelector('#B8');
let B9 = inputSelectors.querySelector('#B9');
let B10 = inputSelectors.querySelector('#B10');
let currencyInput = inputSelectors.querySelector('#currency_input');

// submit bttns 
let formSubmitBttn = inputSelectors.querySelector('#formSubmitBttn');

// all output selectors
let G2 = inputSelectors.querySelector('#G2');
let K2 = inputSelectors.querySelector('#K2');
let G3 = inputSelectors.querySelector('#G3');
let K3 = inputSelectors.querySelector('#K3');
let G4 = inputSelectors.querySelector('#G4');
let K4 = inputSelectors.querySelector('#K4');
let G5 = inputSelectors.querySelector('#G5');
let G6 = inputSelectors.querySelector('#G6');
let K5 = inputSelectors.querySelector('#K5');
let K6 = inputSelectors.querySelector('#K6');
let G8 = inputSelectors.querySelector('#G8');
let B13 = inputSelectors.querySelector('#B13');

// form
let mainForm = document.querySelector('#main_form');

const getFormdata = (event) => {
    event.preventDefault();
    if (B2) {
        alert("Form Submited Success");
    }

}

mainForm.addEventListener('submit', getFormdata);
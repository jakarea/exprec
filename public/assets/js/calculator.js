// all inputs selector
let inputSelectors = document.querySelector('.create-form-wrap');
let currencyOutput = inputSelectors.querySelector('#currency_output');

// form
let mainForm = document.querySelector('#main_form');

const getFormdata = (event) => {
    event.preventDefault();

    let B2 = parseInt(inputSelectors.querySelector('#B2').value);
    let B3 = parseInt(inputSelectors.querySelector('#B3').value);
    let B4 = parseInt(inputSelectors.querySelector('#B4').value);
    let B5 = parseInt(inputSelectors.querySelector('#B5').value);
    let B8 = parseInt(inputSelectors.querySelector('#B8').value);
    let B9 = parseInt(inputSelectors.querySelector('#B9').value);
    let B10 = parseInt(inputSelectors.querySelector('#B10').value);
    let B13 = parseInt(inputSelectors.querySelector('#B13').value);
 
    let G2El = inputSelectors.querySelector('#G2');
    let G3El = inputSelectors.querySelector('#G3');
    let G4El = inputSelectors.querySelector('#G4');
    let G5El = inputSelectors.querySelector('#G5');
    let G6El = inputSelectors.querySelector('#G6');
    let G8El = inputSelectors.querySelector('#G8');
    let G2 = parseInt(inputSelectors.querySelector('#G2').value); 

    let K2El = inputSelectors.querySelector('#K2');
    let K3El = inputSelectors.querySelector('#K3');
    let K4El = inputSelectors.querySelector('#K4');
    let K5El = inputSelectors.querySelector('#K5');
    let K6El = inputSelectors.querySelector('#K6');
    let K2 = parseInt(inputSelectors.querySelector('#K2').value);

    G2El.value = ((B2*(100-B3)/100-B4)*B13); 
    G3El.value = ((G2*B10)/B9);
    G4El.value = ((G2*B10)/B8);
    G5El.value = ((G2*B10)/100); 
    G6El.value = (B2/(B2-B4-B2*B3/100)); 
    G8El.value = (1/B2); 

    K2El.value = ((B2*(100-B3)/100-B4-B2*(B5/100))*B13);
    K3El.value = ((K2*B10)/B9);
    K4El.value = ((K2*B10)/B8);
    K5El.value = ((K2*B10)/100);
    K6El.value = (B2/(K2/B13));
 
}

mainForm.addEventListener('submit', getFormdata);
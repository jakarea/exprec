// all inputs selector
let inputSelectors = document.querySelector('.create-form-wrap');
let currencyOutput = inputSelectors.querySelector('#currency_output');

// form
let mainForm = document.querySelector('#main_form');

const getFormdata = (event) => {
    event.preventDefault();

    let B2 = Number(inputSelectors.querySelector('#B2').value);
    let B3 = Number(inputSelectors.querySelector('#B3').value);
    let B4 = Number(inputSelectors.querySelector('#B4').value);
    let B5 = Number(inputSelectors.querySelector('#B5').value);
    let B8 = Number(inputSelectors.querySelector('#B8').value);
    let B9 = Number(inputSelectors.querySelector('#B9').value);
    let B10 = Number(inputSelectors.querySelector('#B10').value);
    let B13 = Number(inputSelectors.querySelector('#B13').value);
 
    let G2El = inputSelectors.querySelector('#G2');
    let G3El = inputSelectors.querySelector('#G3');
    let G4El = inputSelectors.querySelector('#G4');
    let G5El = inputSelectors.querySelector('#G5');
    let G6El = inputSelectors.querySelector('#G6');
    let G8El = inputSelectors.querySelector('#G8');
    let G2 = Number(inputSelectors.querySelector('#G2').value); 

    let K2El = inputSelectors.querySelector('#K2');
    let K3El = inputSelectors.querySelector('#K3');
    let K4El = inputSelectors.querySelector('#K4');
    let K5El = inputSelectors.querySelector('#K5');
    let K6El = inputSelectors.querySelector('#K6');
    let K2 = Number(inputSelectors.querySelector('#K2').value);
 
    G2El.value = ((B2*(100-B3)/100-B4)*B13).toFixed(2); 
    G3El.value = (G2*B10/B9).toFixed(2);
    G4El.value = (G2*B10/B8).toFixed(2);
    G5El.value = (G2*B10/100).toFixed(2); 
    G6El.value = (B2/(B2-B4-B2*B3/100)).toFixed(2); 
    G8El.value = (100/B2).toFixed(2); 

    K2El.value = ((B2*(100-B3)/100-B4-B2*(B5/100))*B13).toFixed(2);
    K3El.value = ((K2*B10)/B9).toFixed(2);
    K4El.value = ((K2*B10)/B8).toFixed(2);
    K5El.value = ((K2*B10)/100).toFixed(2);
    K6El.value = (B2/(K2/B13)).toFixed(2);
 
}

mainForm.addEventListener('submit', getFormdata);
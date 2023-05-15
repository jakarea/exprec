
// all inputs selector
let inputSelectors = document.querySelector('.create-form-wrap');
let avrageOrderValue = inputSelectors.querySelector('#avrage_order_value');
let avrageFees = inputSelectors.querySelector('#avrage_fees');
let avrageCogs = inputSelectors.querySelector('#avrage_cogs');
let profitTarget = inputSelectors.querySelector('#profit_target');
let addToCart = inputSelectors.querySelector('#add_to_cart');
let reachedCheckout = inputSelectors.querySelector('#reached_checkout');
let purchased = inputSelectors.querySelector('#purchased');
let currencyName = inputSelectors.querySelector('#currency_name');

// submit bttns 
let submitBttn = inputSelectors.querySelector('.btn-submit');

// all output selectors
let costPerPurchase = inputSelectors.querySelector('#cost_per_purchase');
let targetCostPerPurchase = inputSelectors.querySelector('#t_cost_per_purchase');
let costPerInitiate = inputSelectors.querySelector('#cost_per_initiate');
let targetCostPerInitiate = inputSelectors.querySelector('#t_cost_per_initiate');
let costPerAddToCart = inputSelectors.querySelector('#cost_per_add_to_cart');
let targetCostPerAddToCart = inputSelectors.querySelector('#t_cost_per_add_to_cart');
let costPerViewContent = inputSelectors.querySelector('#cost_per_view_content');
let targetCostPerViewContent = inputSelectors.querySelector('#t_cost_per_view_content');
let businessPerConversation = inputSelectors.querySelector('#business_per_conversation');
let currencyOutput = inputSelectors.querySelector('#currency_output');

// form
let mainForm = document.querySelector('#main_form');

const getFormdata = (event) => {
    event.preventDefault();
    if (avrageOrderValue) {
        let avrgVal = (avrageOrderValue.value * 20) / 100;
        costPerPurchase.value = avrgVal;
    }

}

mainForm.addEventListener('submit', getFormdata);
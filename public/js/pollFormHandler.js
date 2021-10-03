window.onload = () => {
    let $btnAdd = document.querySelector('#addOption');
    let $optionsContainer = document.querySelector('#pollOptions');
    let numOptions = 2;

    $btnAdd.addEventListener('click', () => {
        let $num_options_wrn = document.querySelector("#numOptionsWarning");
        if(numOptions>=10) {
            let text_warning = document.createTextNode("Numero máximo de opções atingido!");
            $num_options_wrn.appendChild(text_warning);
            $num_options_wrn.classList.add("num-options-wrn--visible");
            $btnAdd.setAttribute("disabled", "true");
        }
        else {
            $num_options_wrn.classList.remove("num-options-wrn--visible");
            let $new_option = document.createElement("input");
            numOptions++;

            $new_option.setAttribute("type", "text");

            $new_option.setAttribute("placeholder", `Opção ${numOptions}`);
            
            $new_option.classList.add("form-control");

            $new_option.setAttribute("name", "option_field[]");

            $optionsContainer.appendChild($new_option);
            }
        
    });
}
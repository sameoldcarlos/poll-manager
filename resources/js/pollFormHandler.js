window.onload = () => {
    console.log('oi')
    let $btnAdd = document.querySelector('#addOption');
    let $optionsContainer = document.querySelector('#pollOptions');
    let numOptions = 1;

    $btnAdd.addEventListener('click', () => {
        let $new_option = document.createElement("input");
        numOptions++;

        $new_option.setAttribute("type", "text");

        $new_option.setAttribute("placeholder", `Opção ${numOptions}`);
        
        $new_option.setAttribute("name", "option_field[]");

        $optionsContainer.appendChild($new_option);
    });
}
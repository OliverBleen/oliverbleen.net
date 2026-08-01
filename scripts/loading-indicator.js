var loading_loop_interval;

function loading_indicator()
{
    loading_loop_interval = setInterval(function() {
        loading_loop();
    }, 500);

}


function loading_loop()
{
    elements = document.getElementsByClassName('loading-indicator-text');

    if(elements.length == 0) {
        clearInterval(loading_loop_interval);
    }

    for(i = 0; i < elements.length; i++) {
        switch(elements[0].textContent) {
            case 'Loading': elements[0].textContent = 'Loading.'; break;
            case 'Loading.': elements[0].textContent = 'Loading..'; break;
            case 'Loading..': elements[0].textContent = 'Loading...'; break;
            case 'Loading...': elements[0].textContent = 'Loading'; break;
            default: elements[0].textContent = 'Loading'; break;
        }
    }
}

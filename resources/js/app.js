import './bootstrap';
import '../css/app.css';
import 'flowbite';
import 'tw-elements';

// Initialization for ES Users
import { Select, initTE } from "tw-elements";
initTE({ Select });

const multiSelect = document.querySelector("#multiSelection");
const multiSelectInstance = Select.getInstance(multiSelect);

window.addEventListener('load', function () {
    let selectbox = document.getElementById('searchbox')

    selectbox.addEventListener('change', function() {
        console.log('You selected: ', this.value)

        fetch('/productos/buscar?cat_id=' + this.value + '', {method: 'get'})
        .then(response => response.text())
        .then(html => {
            document.getElementById('products-list').innerHTML = html
        })
    })
})

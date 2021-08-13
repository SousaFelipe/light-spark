window._ = require('lodash')

window.$ = window.jQuery = require('jquery')

window.$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
})

window.axios = require('axios')

window.axios.defaults.baseURL = 'http://127.0.0.1:8000/'

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN'      : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    'X-Requested-With'  : 'XMLHttpRequest'
}

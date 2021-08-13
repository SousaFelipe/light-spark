


class Request {


    constructor(url, data = {}) {

        this.url = url
        this.data = data

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
    }



    get(callback) {
        $.ajax({
            method: "GET",
            url: this.url
        })
        .done(async response => {
            callback.call(this, await response)
        })
    }


    post(callback) {
        $.ajax({
            method: "POST",
            url: this.url,
            data: this.data
        })
        .done(async response => {
            callback.call(this, await response)
        })
    }
}



const Component = require('./Component')



class Submit extends Component {


    constructor(query) {
        super(query, false)
    }


    onCLick(requestCallBack, onDone) {

        this.root().addEventListener("click", function (e) {

            let request = requestCallBack.requestCallBack(this)

            request.done(response => {
                onDone.call(this, response)
            })
        })
    }
}



module.exports = Submit

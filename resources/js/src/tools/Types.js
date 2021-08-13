



module.exports = {


    array: {

        Shift: (array) => {
            let lastPosition = (array.length - 1)
            return array.splice(1, lastPosition)
        }
        
    }
}

require('./bootstrap');
document.getElementById('getAccessToken').addEventListener('click', (event) => {
    event.preventDefault()

    axios.post('/script/user/get-token',{})
        .then((response) => {
            console.log(response);
        })
        .catch((error) => {
            console.log(error);
        })
    })

    
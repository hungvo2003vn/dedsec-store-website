require('dotenv').config();
const FE_SERVER_HOST = process.env.FE_SERVER_HOST;


async function test(){
    const res = await fetch(`http://${FE_SERVER_HOST}/product`)
    let body = await res.json()
    body = body['data']
    
    console.log(body);
}
test()
async function logout(){

    const data = {
       "quantity": 1
    }
    const res = await fetch(`http://${FE_SERVER_HOST}/cart`,
        {
            method: 'GET',
            headers: {
                "Authorization": `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MywiZW1haWwiOiJjbGllbnQyQGdtYWlsLmNvbSIsInJvbGUiOiJVU0VSIn0.BESBofcyOcQP0YNL0YN9lCb6J5PbgSizv4d3sy_fW4I`
            },
        }
    );
    const body = await res.json();
    console.log(body);
}

// logout();
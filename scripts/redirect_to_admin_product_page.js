import { FE_SERVER_HOST } from '/env.js';

// MAKE SURE USER IS ADMIN
const myToken = JSON.parse(localStorage.getItem('user')).token;
const myID = JSON.parse(localStorage.getItem('user')).data.id;
fetch(`http://${FE_SERVER_HOST}/user/${myID}`,{method:'GET',
headers:{
    "Authorization": `Bearer ${myToken}`,
    "Content-Type":"application/json"
},
})
.then((response) => response.json())
.then((data) => {
    console.log("Response from backend:", data);
    if(data.data.role ==="ADMIN"){
        window.location.href="../pages/admin/product.php";
    }
})
.catch((error) => {
    console.error("Error:", error);
    alert(error);
});

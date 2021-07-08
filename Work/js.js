// Website Documentation Url  https://breakingbadapi.com/documentation


// Base Url  https://www.breakingbadapi.com/api/



const api = "https://www.breakingbadapi.com/api/";


async function get() {

    const response = await fetch(api)

    const data = await response.json()

    console.log(data);

    // document.getElementById('Test').innerHTML = data[0].name;
}

get()
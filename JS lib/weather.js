async function  weather(){
    const proxy =`https://cors-anywhere.herokuapp.com/`
    const api = `${proxy} https://api.darksky.net/forecast/463024df279ce704bb693dab01fe8933/37.8267,-122.4233`
    const response = await fetch(api)
    const data = await response.json()
        console.log(data)
    
}
 weather()
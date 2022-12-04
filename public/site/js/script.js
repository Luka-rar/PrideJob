const urlUF = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/{UF}/municipios'
window.addEventListener('', async ()=>{
    const request = await fetch(urlUF)
    const response = await request.json()

    console.log(response)
})

console.log("Essa porra ta funcionando.")
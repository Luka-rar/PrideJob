const inputFile = 
document.querySelector("#picture__input");
const pictureImage =
document.querySelector(".picture__image");
const pictureImageTxt = "Escolha uma imagem";
pictureImage.innerHTML = pictureImageTxt;
const textNull = "";
const user_url = inputFile.getAttribute("user_url");
console.log(user_url);

if(document.querySelector("#image")){
    pictureImage.innerHTML = textNull;
};

inputFile.addEventListener('change', function(e){
    const inputTarget = e.target;
    const file = inputTarget.files[0];
    
    if(file){

        if(document.querySelector("#image")){
            document.querySelector("#image").remove("#image");
        }

        const reader = new FileReader();
        reader.addEventListener('load', function(e) {
            const readerTarget = e.target;

            const img = document.createElement('img');
            img.src = readerTarget.result;
            img.classList.add('picture__img');

            pictureImage.innerHTML = '';
            pictureImage.appendChild(img);

        });

        reader.readAsDataURL(file);
    } else{
        pictureImage.innerHTML = pictureImageTxt;
        
    }

});



//----------  Landing Page  ------------
const inputFileAboutMe = document.querySelector('#about_me_image');
const img_area_about_me_image = document.querySelector('.img_area_about_me_image');


inputFileAboutMe.addEventListener('change', function() {
    const image = this.files[0]
    // if (image.size < 2000000) {
        const reader = new FileReader();
        reader.onload = () => {
            const allImg = img_area_about_me_image.querySelectorAll('#display_about_me_image img');
            allImg.forEach(item => item.remove());

            const imgUrl = reader.result;
            const img = document.createElement('img');
            img.src = imgUrl;
            img.classList.add("avatar-xl");
            img_area_about_me_image.appendChild(img);
            img_area_about_me_image.classList.add('active');
            img_area_about_me_image.dataset.img = image.name;
        }
        reader.readAsDataURL(image);
    // } else {
    //     alert("Image size more than 2MB");
    // }
})


const inputFileBg = document.querySelector('#hero_background');
const img_area_hero_background = document.querySelector('.img_area_hero_background');


inputFileBg.addEventListener('change', function() {
    const image = this.files[0]
    // if (image.size < 2000000) {
        const reader = new FileReader();
        reader.onload = () => {
            const allImg = img_area_hero_background.querySelectorAll('#display_hero_background img');
            allImg.forEach(item => item.remove());

            const imgUrl = reader.result;
            const img = document.createElement('img');
            img.src = imgUrl;
            img.classList.add("avatar-xl");
            img_area_hero_background.appendChild(img);
            img_area_hero_background.classList.add('active');
            img_area_hero_background.dataset.img = image.name;
        }
        reader.readAsDataURL(image);
    // } else {
    //     alert("Image size more than 2MB");
    // }
})



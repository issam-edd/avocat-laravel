// const inputFileBlog = document.querySelector('#image_blog');
// const img_area_blog = document.querySelector('.img_area_blog');


// inputFileBlog.addEventListener('change', function() {
//     const image = this.files[0]
//     // if (image.size < 2000000) {
//         const reader = new FileReader();
//         reader.onload = () => {
//             const allImg = img_area_blog.querySelectorAll('#img_area_blog img');
//             allImg.forEach(item => item.remove());
//             const imgUrl = reader.result;
//             const img = document.createElement('img');
//             img.src = imgUrl;
//             img.classList.add("avatar-xl");
//             img_area_blog.appendChild(img);
//             img_area_blog.classList.add('active');
//             img_area_blog.dataset.img = image.name;
//         }
//         reader.readAsDataURL(image);
//     // } else {
//     //     alert("Image size more than 2MB");
//     // }
// })

const inputFileBlog = document.querySelector('#image_blog');
const img_area_blog = document.querySelector('.img_area_blog');

const inputFileBg = document.querySelector('#image_bg');
const img_area_bg = document.querySelector('.img_area_bg');


inputFileBlog.addEventListener('change', function() {
    const image = this.files[0]
    // if (image.size < 2000000) {
        const reader = new FileReader();
        reader.onload = () => {
            const allImg = img_area_blog.querySelectorAll('#img_area_blog img');
            allImg.forEach(item => item.remove());
            const imgUrl = reader.result;
            const img = document.createElement('img');
            img.src = imgUrl;
            img.classList.add("avatar-xl");
            img_area_blog.appendChild(img);
            img_area_blog.classList.add('active');
            img_area_blog.dataset.img = image.name;
        }
        reader.readAsDataURL(image);
    // } else {
    //     alert("Image size more than 2MB");
    // }
})

inputFileBg.addEventListener('change', function() {
    const image = this.files[0]
    console.log(this);
    // if (image.size < 2000000) {
        const reader = new FileReader();
        reader.onload = () => {
            const allImg = img_area_bg.querySelectorAll('#img_area_bg img');
            allImg.forEach(item => item.remove());
            const imgUrl = reader.result;
            const img = document.createElement('img');
            img.src = imgUrl;
            img.classList.add("avatar-xl");
            img_area_bg.appendChild(img);
            img_area_bg.classList.add('active');
            img_area_bg.dataset.img = image.name;
        }
        reader.readAsDataURL(image);
    // } else {
    //     alert("Image size more than 2MB");
    // }
})

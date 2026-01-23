    const inputFileFavicon = document.querySelector('#image_favicon');
    const img_area_favicon = document.querySelector('.img_area_favicon');


    inputFileFavicon.addEventListener('change', function() {
        const image = this.files[0]
        // if (image.size < 2000000) {
            const reader = new FileReader();
            reader.onload = () => {
                const allImg = img_area_favicon.querySelectorAll('#display_image_favicon img');
                allImg.forEach(item => item.remove());
                const imgUrl = reader.result;
                const img = document.createElement('img');
                img.src = imgUrl;
                img.classList.add("avatar-xl");
                img_area_favicon.appendChild(img);
                img_area_favicon.classList.add('active');
                img_area_favicon.dataset.img = image.name;
            }
            reader.readAsDataURL(image);
        // } else {
        //     alert("Image size more than 2MB");
        // }
    })


    const inputFileLogo = document.querySelector('#image_logo');
    const img_area_image_logo = document.querySelector('.img_area_image_logo');


    inputFileLogo.addEventListener('change', function() {
        const image = this.files[0]
        // if (image.size < 2000000) {
            const reader = new FileReader();
            reader.onload = () => {
                const allImg = img_area_image_logo.querySelectorAll('#display_image_logo img');
                allImg.forEach(item => item.remove());

                const imgUrl = reader.result;
                const img = document.createElement('img');
                img.src = imgUrl;
                img.classList.add("avatar-xl");
                img_area_image_logo.appendChild(img);
                img_area_image_logo.classList.add('active');
                img_area_image_logo.dataset.img = image.name;
            }
            reader.readAsDataURL(image);
        // } else {
        //     alert("Image size more than 2MB");
        // }
    })

    const inputFileLogoBig = document.querySelector('#image_logo_big');
    const img_area_image_logo_big = document.querySelector('.img_area_image_logo_big');


    inputFileLogoBig.addEventListener('change', function() {
        const image = this.files[0]
        // if (image.size < 2000000) {
            const reader = new FileReader();
            reader.onload = () => {
                const allImg = img_area_image_logo_big.querySelectorAll('#display_image_logo_big img');
                allImg.forEach(item => item.remove());

                const imgUrl = reader.result;
                const img = document.createElement('img');
                img.src = imgUrl;
                img.classList.add("avatar-xl");
                img_area_image_logo_big.appendChild(img);
                img_area_image_logo_big.classList.add('active');
                img_area_image_logo_big.dataset.img = image.name;
            }
            reader.readAsDataURL(image);
        // } else {
        //     alert("Image size more than 2MB");
        // }
    })







    const inputFileBg1 = document.querySelector('#hero_background1');
    const img_area_hero_background1 = document.querySelector('.img_area_hero_background1');


    inputFileBg1.addEventListener('change', function() {
        const image = this.files[0]
        // if (image.size < 2000000) {
            const reader = new FileReader();
            reader.onload = () => {
                const allImg = img_area_hero_background1.querySelectorAll('#display_hero_background1 img');
                allImg.forEach(item => item.remove());

                const imgUrl = reader.result;
                const img = document.createElement('img');
                img.src = imgUrl;
                img.classList.add("avatar-xl");
                img_area_hero_background1.appendChild(img);
                img_area_hero_background1.classList.add('active');
                img_area_hero_background1.dataset.img = image.name;
            }
            reader.readAsDataURL(image);
        // } else {
        //     alert("Image size more than 2MB");
        // }
    })





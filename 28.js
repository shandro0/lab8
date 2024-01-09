const jimp = require('jimp');

async function chaosedImage(path){
    let image = await jimp.read(path);
    image.rotate(180);
    image.invert();
    image.greyscale();
    image.writeAsync(path);
}

module.exports = {chaosedImage};

chaosedImage(__dirname + '/more.jpg');
console.log('Image modified');
function star1(jumlah) {
    let hasil = '';
    for (let i = 0; i < jumlah; i++) {
        for (let j = 0; j <= i; j++) {
            hasil += '* ';
        }
        hasil += '\n';
    }
    return hasil;
}

console.log('Output 1: \n')
console.log(star1(6));

console.log('\n'); 
 
function star2(jumlah) {
    let hasil = '';
    for (let i = 1; i <= jumlah; i++) {
        for (let j = jumlah-1; j >= i; j--) {
            hasil += '  ';
        }
        for (let k = 1; k <=i; k++){
            hasil += ' *'
        }
        hasil += '\n';
    }
    return hasil;
}

console.log('Output 2: \n')
console.log(star2(6));
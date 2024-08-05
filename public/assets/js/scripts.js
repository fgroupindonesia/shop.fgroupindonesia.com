$( document ).ready(function() {
    
    $('#kirim-wa').on('click', function(){
        let myNum = $('#nowa').val();
        sendWA(myNum);
    });


});

function sendWA(number){
    const phoneNumber = '6285795569337';
  const message = 'Hello, saya mau *Langganan Info Promo Source Codenya*!';
  const url = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${message}`;
  window.open(url, '_blank');
}
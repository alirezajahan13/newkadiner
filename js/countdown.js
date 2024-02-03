function decreaseNumberWithID(eleID){
  let currentNumber = $(eleID).text();
  let decreasedNumber = currentNumber - 1;
  $(eleID).text(decreasedNumber);
}
$(document).ready(function () {
  let sourceSecond = $('#coutdownSource').attr('data-pro-second');
  let sourceMinute = $('#coutdownSource').attr('data-pro-minute');
  let sourceHour = $('#coutdownSource').attr('data-pro-hour');
  $('#kadinerSaleSeconds').text(sourceSecond);
  $('#kadinerSaleMinutes').text(sourceMinute);
  $('#kadinerSaleHours').text(sourceHour);
  
  var timerInterval = setInterval(() => {
    let currentSecond = $('#kadinerSaleSeconds').text();
    let currentMinute = $('#kadinerSaleMinutes').text();
    let currentHour = $('#kadinerSaleHours').text();
    if(currentSecond>0){
      decreaseNumberWithID('#kadinerSaleSeconds');
    }
    else if(currentSecond==0 && currentMinute>0){
      decreaseNumberWithID('#kadinerSaleMinutes');
      $('#kadinerSaleSeconds').text(59);
    }
    else if(currentSecond==0 && currentMinute==0 && currentHour>0){
      decreaseNumberWithID('#kadinerSaleHours');
      $('#kadinerSaleMinutes').text(59);
      $('#kadinerSaleSeconds').text(59);
    }
    else{
      clearInterval(timerInterval);
    }
  }, 1000);
  
});
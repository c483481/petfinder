const BASEURL = 'https://petfinder-kelasb.000webhostapp.com/';

const keyword = document.querySelector('#pencarian');
const Anjing = document.querySelector('#Anjing');
const Kucing = document.querySelector('#Kucing');
const Burung = document.querySelector('#Burung');
const All = document.querySelector('#Semua');
const full = document.querySelector('#Full');
const mini = document.querySelector('#Mini');
let filter = [null,null,null];
let key = "";
let size = '';
var container = document.querySelector(".ajax");
$(window).on('load', function() {
    All.checked = true;
    full.checked = true;
});
keyword.addEventListener('keyup', function () {
    key = this.value; 
    liveS();
});
mini.addEventListener('change',function (){
    if (this.checked) {
        size = 'doggy';
        liveS();
      }
  });
full.addEventListener('change',function (){
    if (this.checked) {
        size = '';
        liveS();
      }
  });

All.addEventListener('change',function (){
    if (this.checked) {
        Anjing.checked = false;
        Kucing.checked = false;
        Burung.checked = false;
        filter[0] = null;
        filter[1] = null;
        filter[2] = null;
      }
      liveS();
  });
Anjing.addEventListener('change',function (){
    if (this.checked) {
        filter[0] = this.value;
        All.checked = false;
        
      }else{
        filter[0] = null;
      }
      liveS();
});
Kucing.addEventListener('change',function (){
    if (this.checked) {
      filter[1] = this.value;
      All.checked = false;
    }else{
      filter[1] = null;
    }
    liveS();
});
Burung.addEventListener('change',function (){
    if (Burung.checked) {
      filter[2] = this.value;
      All.checked = false;
    }else{
      filter[2] = null;
    }
    liveS();
});


const ajax = document.querySelector('.ajax')


$('.report').on('click', function () {
  const id = $(this).data('id');
  const telp = $(this).data('telp');
  console.log(id);
  
  $.ajax({
    url: BASEURL +'Umum/melapor',
    data:{
        id: id
    },
    method: 'POST',
    success: function (data) {
        alert('silahkan hubungi nomor ' + telp + ' untuk melaporkan');
    }
});
location.href = '#';
})

function next(hal) {
  $.ajax({
    url: BASEURL +'Umum/next',
    data:{
        key: key,
        kategori: filter,
        size : size,
        hal: hal
    },
    method: 'POST',
    success: function (data) {
        $('.ajax').html(data)
    }
});
}

function liveS() {
  $.ajax({
    url: BASEURL +'Umum/getUbah',
    data:{
        key: key,
        kategori: filter,
        size : size
    },
    method: 'POST',
    success: function (data) {
        $('.ajax').html(data)
    }
});
};
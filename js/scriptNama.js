var namaMahasiswa = ["Charles William Kojansow", "Rhesa Rahel Kasakeyan", "Niyll Jhonnatan Henry Lewu", "Prayer Rafael Novendra"];
var NIM = ["20021106051", "20021106065", "20021106151", "20021106152"];
namaMahasiswa.forEach(function (e, i) {
    
    document.write ('<p class="text">' + (i+1) + '.' + e + "<br>" +NIM[i] + '</p>');
})

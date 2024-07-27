$(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    
    setProgressBar(current);
    
    $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 500
        });
        setProgressBar(++current);
    });
    
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 500
        });
        setProgressBar(--current);
    });
    
    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
          .css("width",percent+"%")   
    }
    
    $(".submit").click(function(){
        return false;
    })
        
    });
    // Sweet Alert
const flashData = $('.flash-data').data('flashdata');
 
if (flashData) {
    Swal({
        title: 'Sukses',
        text: 'Data Berhasil ' + flashData,
        type: 'success'
    });
}
 
// Sweet Alert
const flashGagal = $('.flash-data-gagal').data('flashdata');
 
if (flashGagal) {
    Swal({
        title: 'Gagal',
        text: 'Data Gagal ' + flashGagal,
        type: 'error'
    });
}
 
 
 
// tombol-hapus
$('.tombol-hapus').on('click', function (e) {
 
    e.preventDefault();
    const href = $(this).attr('href');
 
    Swal({
        title: 'Apakah anda yakin',
        text: "data akan dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e74c3c',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
 
});
 
 
 
$(document).ready(function () {
    $("#dataBerita").DataTable({
        order: [[1, "desc"]],
    });
});
 
$(document).ready(function () {
    $("#dataGalery").DataTable({
        order: [[1, "desc"]],
    });
});
 
$(document).ready(function () {
    $("#dataFile").DataTable({
        order: [[1, "desc"]],
    });
});
 
$(document).ready(function () {
    $("#dataPages").DataTable({
        order: [[1, "desc"]],
    });
});
 
// Summernote
$(function () {
    // Summernote
    $('#summernote').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            // ['fontsize', ['fontsize']],
            // ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link']]
        ]
    });
})
 
 
function previewGmb() {
    const sampul = document.querySelector("#image");
    const sampulLabel = document.querySelector(".custom-file-input");
    const imgPreview = document.querySelector(".img-preview");
 
    sampulLabel.textContent = sampul.files[0].name;
 
    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);
 
    fileSampul.onload = function (e) {
        imgPreview.src = e.target.result;
    };
}
 
// Input / Browse file
 
$('.custom-file-input').on('change', function () {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
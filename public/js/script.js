document.addEventListener('DOMContentLoaded',function()
{
const forms= document.querySelectorAll('form');
forms.forEach(form=>{form.addEventListener('submit',function(event)
    {
        const fields= form.querySelectorAll('[required]');
        fields.forEach(field=>{
            if (!field.value)
                {
                  event.preventDefault();
                  alert(Please fill in {$field.name}) ; 
                }
        });

});
});

});
document.addEventListener('DOMContentLoaded',function()
{
const toggles= document.querySelectorAll('form');
toggles.forEach(toggle=>{toggle.addEventListener('click',function()
    {
        const target=document.querySelectorAll(#$ {toggle.dataset.toggle});
      target.classList.toggle('hidden');
});
});
});
document.addEventListener('DOMContentLoaded',function()
{
const bookingForm= document.querySelectorAll('#booking-form');
bookingForm.addEventListener('submit',function(event)
    {
        event.preventDefault();
        const formData= new formData(bookingForm);
        fetch('/bookings',{ method:'POST',body:FormData,

        })
        .then(response=>response.json())
        .then(data=>{ console.log(data)});

    });
});


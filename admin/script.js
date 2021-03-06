// Buttons Post,Update,Delete
const btn_post = document.querySelector('.btn-post');
const btn_update = document.querySelector('.btn-update');
const btn_delete = document.querySelector('.btn-delete');
// End of buttons

// Forms Post,Update,Delete
const p_form = document.querySelector('.p-form');
const u_form = document.querySelector('.u-form');
const d_form = document.querySelector('.d-form');
// End of Forms Post,Update,Delete



// Button Listener
btn_post.addEventListener('click',()=>{
    p_form.classList.toggle('hidden');
    hideSection_1();
});
btn_update.addEventListener('click',()=>{
    u_form.classList.toggle('hidden');
    hideSection_1();
});
btn_delete.addEventListener('click',()=>{
    d_form.classList.toggle('hidden');
    hideSection_1();
});
// End of Button Listener
function hideSection_1(){
    const container = document.querySelector('.container');
    container.classList.toggle('hidden');
}
const input = document.getElementById("phone");
const resetInput = document.getElementById("reset");
const wpp = document.getElementById("withWhatsapp");

input.addEventListener("input", function (e) {
    let value = e.target.value.replace(/\D/g, "");
    
    if (value.length < 10) {
        wpp.checked = false;
        wpp.disabled = true;
    } else {
        wpp.checked = true;
        wpp.disabled = false;
    }

    if (value.length > 10) {
        value = value.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (value.length > 6) {
        value = value.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (value.length > 2) {
        value = value.replace(/^(\d{2})(\d{0,5})/, "($1) $2");
    } else {
        value = value.replace(/^(\d*)/, "($1");
    }

    e.target.value = value;
});

resetInput.addEventListener("click", () => {
    wpp.disabled = true;
})

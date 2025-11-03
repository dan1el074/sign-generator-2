const copyButton = document.getElementById("copy-button");
const copyIcon = document.getElementById("copy-icon");
const copyTooltip = document.getElementById("copy-button-tooltip");

copyButton.addEventListener("click", () => {
    copiarTexto();
})

function copiarTexto() {
    const textarea = document.getElementById("copy-textarea");
    textarea.select();
    textarea.setSelectionRange(0, 99999);
    document.execCommand('copy');

    copyTooltip.innerHTML = "Copiado!";
    copyIcon.style.fill = "#386fddff";
    
    setTimeout(() => {
        copyTooltip.innerHTML = "Copiar código";
        copyIcon.style.fill = "rgb(24, 24, 24)";
    }, 3000);
}

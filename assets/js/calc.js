//<![CDATA[
function roundNumber(num, dec) {
    var result = Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
    return result;
}

function calcA() {
    if (document.getElementById("doba_splacania").value <= 0)
        document.getElementById("doba_splacania").value = '0';
    document.getElementById("mesacna_splatka").value = roundNumber(((document.getElementById("velkost_uveru_pom").value*(document.getElementById("urokova_sadzba_pom").value/1200))/(1-(Math.pow((1/(1+(document.getElementById("urokova_sadzba_pom").value/1200))),(document.getElementById("doba_splacania").value*12))))), 2);
    if (isNaN(document.getElementById("mesacna_splatka").value))
        document.getElementById("mesacna_splatka").value='0';
}

function calcB() {
    if (document.getElementById("velkost_uveru").value <= 0)
        document.getElementById("velkost_uveru").value='0';
    document.getElementById("velkost_uveru_pom").value = document.getElementById("velkost_uveru").value.replace(",",".");
    document.getElementById("mesacna_splatka").value = roundNumber(((document.getElementById("velkost_uveru_pom").value*(document.getElementById("urokova_sadzba_pom").value/1200))/(1-(Math.pow((1/(1+(document.getElementById("urokova_sadzba_pom").value/1200))),(document.getElementById("doba_splacania").value*12))))), 2);
    if (isNaN(document.getElementById("mesacna_splatka").value))
        document.getElementById("mesacna_splatka").value='0';
}

function calcC() {
    if (document.getElementById("urokova_sadzba").value <= 0)
        document.getElementById("urokova_sadzba").value='0';
    document.getElementById("urokova_sadzba_pom").value = document.getElementById("urokova_sadzba").value.replace(",",".");
    document.getElementById("mesacna_splatka").value = roundNumber(((document.getElementById("velkost_uveru_pom").value*(document.getElementById("urokova_sadzba_pom").value/1200))/(1-(Math.pow((1/(1+(document.getElementById("urokova_sadzba_pom").value/1200))),(document.getElementById("doba_splacania").value*12))))), 2);
    if (isNaN(document.getElementById("mesacna_splatka").value))
        document.getElementById("mesacna_splatka").value='0';
}

calcC();
calcB();
//]]>
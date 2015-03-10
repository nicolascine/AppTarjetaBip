// ********************************************************************************************
// Quita los espacios del lado derecho de un string
// ********************************************************************************************
function Rtrim(sTmp1) {
    var iTmp1 = 0;
    var oTmp1 = sTmp1;

    if (typeof(oTmp1) == "string") {
        if (oTmp1.length > 0) {
            iTmp1 = oTmp1.length - 1;
            while (oTmp1.charAt(iTmp1) == " ") {
                iTmp1 -= 1;
            }
            oTmp1 = oTmp1.slice(0, iTmp1 + 1);
        }
    }
    sTmp1 = oTmp1;
    return(sTmp1);
}

// ********************************************************************************************
// Quita los espacios del lado izquierdo de un string
// ********************************************************************************************
function Ltrim(sTmp1) {
    var iTmp1 = 0;
    var oTmp1 = sTmp1;

    if (typeof(oTmp1) == "string") {
        if (oTmp1.length > 0) {
            while (oTmp1.charAt(iTmp1) == " " && iTmp1 < oTmp1.length) {
                iTmp1 += 1;
            }
            oTmp1 = oTmp1.slice(iTmp1);
        }
    }
    sTmp1 = oTmp1;
    return(sTmp1);
}

// ********************************************************************************************
// Llama a las funciones que quitan todos los espacios de ambos lados de un string
// ********************************************************************************************
function Trim(sTmp1) {
    return(Rtrim(Ltrim(sTmp1)));
}
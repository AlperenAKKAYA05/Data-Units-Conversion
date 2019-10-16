function byId(e) {return document.getElementById(e);}

function UstSecimComboChange()
{
var combo1 = byId('SeciliCombo');
var combo2 = byId('SecimCombo');
// alert(combo1.value);

BosCombo(combo2);
switch(combo1.value)
{
case '-1': EkleOption(combo2, -1, '- Birim Seçin -');
break;
case '0': EkleOption(combo2, 0, 'KB');
EkleOption(combo2, 1, 'MB');
EkleOption(combo2, 2, 'GB');
break;
case '1': EkleOption(combo2, 0, 'Bytes');
EkleOption(combo2, 1, 'MB');
EkleOption(combo2, 2, 'GB');
break;
case '2': EkleOption(combo2, 0, 'Bytes');
EkleOption(combo2, 1, 'KB');
EkleOption(combo2, 2, 'GB');
break;
case '3': EkleOption(combo2, 0, 'Bytes');
EkleOption(combo2, 1, 'KB');
EkleOption(combo2, 2, 'MB');
break;
}
SecimComboChange();
}

function SecimComboChange()
{
var combo2;
combo2 = byId('SecimCombo');

Cikti.innerHTML = combo2.options[combo2.options.selectedIndex].title;
}

function BosCombo(e)
{
e.innerHTML = '';
}

function EkleOption(combo, val, txt)
{
var option = document.createElement('option');
option.value = val;
option.title = txt;
option.appendChild(document.createTextNode(txt));
combo.appendChild(option);
}
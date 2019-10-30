function c_f()
{
    var celsius = document.getElementById("input").value;
    var result_1 = document.getElementById("result");
    var converter = ((celsius * (9 / 5) + 32));
    if (celsius == "")
    {
        result_1.innerHTML = "Please Enter a Value.";
        result_1.style.color = "red";
    }
    else
    {
        result_1.innerHTML = converter.toFixed(2) + "f";
        result_1.style.color = "yellow";
    }
}
function f_m()
{
    var feet = document.getElementById("input").value;
    var result_1 = document.getElementById("result");
    var converter = (feet / 3.2808);
    if (feet == "")
    {
        result_1.innerHTML = "Please Enter a Value.";
        result_1.style.color = "red";
    }
    else
    {
        result_1.innerHTML = converter.toFixed(2) + "m";
        result_1.style.color = "yellow";
    }
}
function i_c()
{
    var inches = document.getElementById("input").value;
    var result_1 = document.getElementById("result");
    var converter = (inches / 0.39370);
    if (inches == "")
    {
        result_1.innerHTML = "Please Enter a Value.";
        result_1.style.color = "red";
    }
    else
    {
        result_1.innerHTML = converter.toFixed(2) + "cm";
        result_1.style.color = "yellow";
    }
}
function p_k()
{
    var pound = document.getElementById("input").value;
    var result_1 = document.getElementById("result");
    var converter = (pound / 2.2046);
    if (pound == "")
    {
        result_1.innerHTML = "Please Enter a Value.";
        result_1.style.color = "red";
    }
    else
    {
        result_1.innerHTML = converter.toFixed(2) + "kg";
        result_1.style.color = "yellow";
    }
}
function f_c()
{
    var farenheit = document.getElementById("input").value;
    var result_1 = document.getElementById("result");
    var converter = ((farenheit - 32) * (5 / 9));
    if (farenheit == "")
    {
        result_1.innerHTML = "Please Enter a Value.";
        result_1.style.color = "red";
    }
    else
    {
        result_1.innerHTML = converter.toFixed(2) + "c";
        result_1.style.color = "yellow";
    }
}
function m_f()
{
    var meters = document.getElementById("input").value;
    var result_1 = document.getElementById("result");
    var converter = (meters * 3.2808);
    if (meters == "")
    {
        result_1.innerHTML = "Please Enter a Value.";
        result_1.style.color = "red";
    }
    else
    {
        result_1.innerHTML = converter.toFixed(2) + "ft";
        result_1.style.color = "yellow";
    }
}
function c_i()
{
    var centimeters = document.getElementById("input").value;
    var result_1 = document.getElementById("result");
    var converter = (centimeters * 0.39370);
    if (centimeters == "")
    {
        result_1.innerHTML = "Please Enter a Value.";
        result_1.style.color = "red";
    }
    else
    {
        result_1.innerHTML = converter.toFixed(2) + "inches";
        result_1.style.color = "yellow";
    }
}
function k_p()
{
    var kilograms = document.getElementById("input").value;
    var result_1 = document.getElementById("result");
    var converter = (kilograms * 2.2046);
    if (kilograms == "")
    {
        result_1.innerHTML = "Please Enter a Value.";
        result_1.style.color = "red";
    }
    else
    {
        result_1.innerHTML = converter.toFixed(2) + "lb";
        result_1.style.color = "yellow";
    }
}
function reset_button()
{
    var num = document.getElementById('result').innerHTML = '';
    input.focus();
}
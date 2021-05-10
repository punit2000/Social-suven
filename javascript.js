function O(i)
{
35 Suven Internship
return typeof i == 'object' ? i : document.getElementById(i)
}
function S(i)
{
return O(i).style
}
function C(i)
{
return document.getElementsByClassName(i)
}
// JavaScript Document
function formValidation()
{

var uname = document.registration.emp_name;
var uadd = document.registration.emp_address;
var uzip = document.registration.emp_salary;
if(allLetter(uname))
{
if(alphanumeric(uadd))
{ 
if(allnumeric(uzip))
{

}
}
}
return false;
}
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Employee must have alphabet characters only');
uname.focus();
return false;
}
}
function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('Employee address must have alphanumeric characters only');
uadd.focus();
return false;
}
}
function allnumeric(uzip)
{ 
var numbers = /^[0-9]+$/;
if(uzip.value.match(numbers))
{
return true;
}
else
{
alert('salary must have numeric characters only');
uzip.focus();
return false;
}
}
/*
function formValidation()
{
var uname = document.registration.emp_name;
var uadd = document.registration.emp_address;
var uzip = document.registration.emp_salary;

if(allLetter(uname))
{
if(alphanumeric(uadd))
{ 

if(allnumeric(uzip))
{

}
}
}
return false;

} 
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}
function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}

function allnumeric(uzip)
{ 
var numbers = /^[0-9]+$/;
if(uzip.value.match(numbers))
{
return true;
}
else
{
alert('ZIP code must have numeric characters only');
uzip.focus();
return false;
}
}*/

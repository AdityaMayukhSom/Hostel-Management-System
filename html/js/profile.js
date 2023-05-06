const personName = document.querySelector('.person-name');
const phoneNumber = document.querySelector('.phone-number');
const email = document.querySelector('.email');
const gender = document.querySelector('.gender');
const birthDate = document.querySelector('.birth-date');
const bloodGroup = document.querySelector('.blood-group');
const fatherName = document.querySelector('.father-name');
const motherName = document.querySelector('.mother-name');
const address = document.querySelector('.address');
const city = document.querySelector('.city');
const district = document.querySelector('.district');
const state = document.querySelector('.state');
const pincode = document.querySelector('.pincode');
const rollNumber = document.querySelector('.roll-number');
const year = document.querySelector('.year');


var ajax = new XMLHttpRequest();
var method = "GET";

//Change this URL according to that PHP which sends 
var url = "data.php";
var asynchronous = true;



ajax.open(method, url, asynchronous);
ajax.send();
ajax.onreadystatechange = () => {
    if (ajax.readyState == 4 && ajax.status == 200) {
        //Converting JSON back to array
        var data = JSON.parse(ajax.responseText);
        console.log(data); //For Debugging

        personName.innerHTML = data.PersonName;
        phoneNumber.innerHTML = data.PhoneNumber;
        email.innerHTML = data.Email;
        gender.innerHTML = data.Gender;
        birthDate.innerHTML = data.BirthDate;
        bloodGroup.innerHTML = data.BloodGroup;
        fatherName.innerHTML = data.FatherName;
        motherName.innerHTML = data.FatherName;
        address.innerHTML = data.Address;
        city.innerHTML = data.City;
        district.innerHTML = data.District;
        state.innerHTML = data.State;
        pincode.innerHTML = data.Pincode;
        phoneNumber.innerHTML = data.PhoneNumber;
        rollNumber.innerHTML = data.RollNumber;
        year.innerHTML = data.Year;
    }
}
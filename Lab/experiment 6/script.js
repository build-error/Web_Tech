function combineInfo() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;
    var gender = document.getElementById('gender').value;
    var color = document.getElementById('color').value;
  
    var displayInfo = document.getElementById('displayInfo');
  
    // Validation
    if (name === '' || email === '' || mobile === '' || gender === '' || color === '') {
      alert('Please fill in all fields.');
      return;
    }
  
    // Email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Please enter a valid email address.');
      return;
    }
  
    // Mobile number validation
    var mobileRegex = /^[0-9]{10}$/;
    if (!mobileRegex.test(mobile)) {
      alert('Please enter a valid 10-digit mobile number.');
      return;
    }
  
    // Combine and display information
    var combinedInfo = "Name: " + name + "<br>" +
                      "Email: " + email + "<br>" +
                      "Mobile No: " + mobile + "<br>" +
                      "Gender: " + gender + "<br>" +
                      "Favourite Colour: " + color;
    displayInfo.innerHTML = combinedInfo;
  }
  
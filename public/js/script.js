function redirectToLayoutMain() {
    window.location.href = "http://127.0.0.1:8000/mahasiswa";
  }
  
  function redirectToLayoutMain() {
    window.location.href = "layout.main.php";
  }


//   document.getElementById("loginForm").addEventListener("submit", function(event) {
//     console.log("error: ", xhr.status);
//     event.preventDefault(); // Prevent form submission
  
//     // Get the email and password values from the form
//     var email = document.getElementById("email").value;
//     var password = document.getElementById("password").value;
  
//     // Perform AJAX request to validate email and password
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "/validate_login", true); // Replace "/validate_login.php" with the correct path to your validate_login.php file within the public folder
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === XMLHttpRequest.DONE) {
//           if (xhr.status === 200) {
//             console.log("Response received:", xhr.responseText);
//             // Rest of the code
//           } else {
//             console.log("Error:", xhr.status);
//             alert("Error terjadi");
//           }
//         }
//       };
      
//     xhr.send("email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
//   });
  
function submitForm(event) {
    event.preventDefault(); // Prevent form submission

    // Retrieve input values
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Perform client-side validation
    if (email === '' || password === '') {
      alert('Email and password are required!');
      return;
    }
    const loggedInUser = email; // You can use any unique identifier for the user
    localStorage.setItem('loggedInUser', loggedInUser); // Store logged-in user in local storage

    // Show logged-in user
    document.getElementById('loggedInUser').textContent = `Logged in as: ${loggedInUser}`;
    document.getElementById('loggedInUser').style.display = 'block';

    // Successful login
    alert('Login successful!');
    window.location.href = 'mahasiswa'; // Redirect to "/mahasiswa" page

    
  }
  
  const loggedInUser = localStorage.getItem('loggedInUser');
  if (loggedInUser) {
    document.getElementById('loggedInUser').textContent = `Logged in as: ${loggedInUser}`;
    document.getElementById('loggedInUser').style.display = 'block';
  }


  function redirectToLayoutMain() {
    window.location.href = "mahasiswa";
  }
  



let listmovie = document.getElementById("movie")
let upcomingMovie = document.getElementById("upMovie")
let tv = document.getElementById("tv")
let overview = document.getElementById("overview")


//ambil data movie populer
fetch("https://api.themoviedb.org/3/movie/popular?api_key=a8215bb5dba688be3fa1fdf2d40b8e9d&language=en-US&page=1")
.then(response=>response.json())
.then(data=>{
    console.log(data);
    data.results.forEach(showMovie);
    console.log(data.results);
    console.log(data.total_pages);
})

//ambil data upcoming movie
fetch("https://api.themoviedb.org/3/movie/upcoming?api_key=a8215bb5dba688be3fa1fdf2d40b8e9d&language=en-US&page=1")
.then(response=>response.json())
.then(data=>{
    console.log(data);
    data.results.forEach(showUpcoming);
    console.log(data.results);
    console.log(data.total_pages);
})
//fungtion movie
function showMovie(val, idx) {
    listmovie.innerHTML += `
      <div class='col-lg-3 col-sm-6 p-2 text-center'>
        <div class='movie-box rounded-2 text-white bg-primary'>
          <p class="text-center">${val.title}</p>
          <div class="d-flex justify-content-center align-items-center">
            <img src="https://image.tmdb.org/t/p/w500/${val.poster_path}" alt="${val.title} poster" class="img-fluid rounded-2">
            <div class="btn-group-vertical">
              <a href="/mahasiswa" class="btn btn-sm btn-secondary">Watchlist</a>
              <button onclick="window.location.href='/mahasiswa'" class="btn btn-sm btn-primary ">Lihat</button>
              <button onclick="window.location.href='/mahasiswa'" class="btn btn-sm btn-secondary">Share</button>
            </div>
          </div>
          <div class="text-center">
            <p><strong>Rating:</strong> ${val.vote_average}/10</p>
          </div>
        </div>
      </div>`;
  }
  
//function tv
function showUpcoming(val, idx){
    // list.innerHTML += `<li>${val.email}</li>`
    upcomingMovie.innerHTML += `
        <div class='col-lg-6 col-sm-6 p-2 text-center'>
            <div class='tv-box rounded-2 bg-primary'>
                <h4 class="text-white">${val.original_title}</h4>
                <img src="https://image.tmdb.org/t/p/w500/${val.poster_path}" alt="${val.title} poster"><br>
                <p class="text-white"><strong>RILIS PADA:</strong>${val.release_date}</p>
            </div>
        </div>`
}
{/* <p>https://api.themoviedb.org${val.poster_path}</p> */}



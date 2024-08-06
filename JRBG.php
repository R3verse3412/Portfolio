<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="JRBG.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
</head>
<style>
  
  .card-color{
    border-radius: 5%;
    background-color: #333333;
    
  }

  .navbar {
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000; /* Ensure navbar is always on top */
    transition: top 0.5s;
  }

  .navbar-transparent {
    background-color: rgba(200, 234, 179, 0);
  }

  .navbar-hidden {
    top: -80px; /* Adjust based on your navbar height */
  }

  .navbar:hover {
    top: 0;
  }
    
  .donwload{
    background-color: rgba(200, 234, 179, 0);
    border-color:#F90164;
  }

  .donwload:hover{
    background-color: rgba(200, 234, 179, 0);
  }



   
    .fade-in {
      opacity: 1; /* Fully visible when in viewport */
    }

 
    .card-color {
      background-color: #1e1e1e;
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s ease-in-out;
    }

    .card-body {
      padding: 20px;
    }

    /* Hover scroll down effect */
    .hover-scroll::before {
      content: '↓';
      font-size: 24px;
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      opacity: 0;
      transition: opacity 0.3s, bottom 0.3s;
    }

    .hover-scroll:hover::before {
      bottom: 20px;
      opacity: 1;
    }

    .hover-scroll {
      cursor: pointer;
    }
    
</style>

<body class="body">

<nav class="navbar navbar-expand-lg navbar-light fs-5 mb-5 navbar-transparent">
    <div class="container-fluid">
      <p class="navbar-brand me-auto fs-10 text-white" href="Record_List_Page.php">Portfolio</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto fs-10">
          <li class="nav-item">
            <a class="nav-link text-white" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#skill">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#Project">Projects</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="section">
    <div class="container">
      <div class="card-body header">
      <div class="row">
  <div class="col d-flex">
    <span class="text-name letter">J</span>
    <span class="text-name letter">u</span>
    <span class="text-name letter">l</span>
    <span class="text-name letter">o</span>
    <span class="text-name letter">u</span>
    <span class="text-name letter">e</span>
    <span class="text-name letter">s</span>
    <span class="space"></span>
    <span class="text-name letter">R</span>
    <span class="text-name letter">y</span>
    <span class="text-name letter">a</span>
    <span class="text-name letter">n</span>
    <span class="space"></span>
    <span class="text-name letter">G</span>
    <span class="text-name letter">a</span>
    <span class="text-name letter">b</span>
    <span class="text-name letter">o</span>
    <span class="text-name letter">n</span>
  </div>
</div>
    <div class="row">
      <div class="col">
        <p class="text-white">Greetings! I'm Juloues Ryan Gabon, a fresh graduate and ambitious aspiring web developer.</p>
          </div>
          </div>
          <div class="row icons me-5">
            <div class="col-auto me-0 ">
              <a href="https://www.facebook.com/juloues.gabon.9">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95"/></svg>
            </a>
            <a href="https://www.instagram.com/gabonjuloues/">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg></a>
            <a href="https://github.com/R3verse3412">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2"/></svg></a>
            </div>
            </div>
      </div>
      <div class="card-body">
        <a href="Juloues-Ryan-B.-Gabon.pdf" class="btn btn-primary donwload">Download CV</a>
      </div>
    </div>
  </section>

  <section class="section">
  <div class="container mt-5">
    <div class="card-body ">
      <h1 class="text-white" id="about">About Me</h1>
    </div>
    <div class="row g-4 card-color">
          <div class="col-md-5">
            <div class="card-body">
            <img src="img/Juloues Ryan Gabon.jpg" class="card-img-top img-fluid" alt="Juls" style="width: 450px; height: 350px;">
            </div>
          </div>
          <div class="col">
            <div class="card-body">
            <p class="text-white">Hi, I'm Juloues Ryan B. Gabon, a 23-year-old junior web developer graduating from STI Dasmarinas, Cavite with a Bachelor of Science in Information Technology. Passionate about crafting innovative web solutions, I am eager to contribute my skills and creativity to dynamic projects.</p>
            <h2 class="text-white">Contact Information</h2>
            <p class="text-white">Greengate Homes Malagasang II-A Imus, Cavite</p>
            <p class="text-white">julouesg@gmail.com</p>
            </div>
          </div>
        </div>
  </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="card-body">
        <h1 class="text-white h1" id="skill">Skills</h1>
        <h1 class="text-white" >Expertise</h1>
        </div>
        <div class="row ">
      <div class="col-md-2 mb-5">
        <div class="card-body technologies card-skills text-center d-flex justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="#e14e1d" rx="60"/><path fill="#fff" d="m48 38l8.61 96.593h110.71l-3.715 41.43l-35.646 9.638l-35.579-9.624l-2.379-26.602H57.94l4.585 51.281l65.427 18.172l65.51-18.172l8.783-98.061H85.824l-2.923-32.71h122.238L208 38z"/><path fill="#ebebeb" d="M128 38H48l8.61 96.593H128v-31.938H85.824l-2.923-32.71H128zm0 147.647l-.041.014l-35.579-9.624l-2.379-26.602H57.94l4.585 51.281l65.427 18.172l.049-.014z"/></g></svg>
        </div>
      </div>
      <div class="col-md-2 mb-5">
        <div class="card-body card-skills text-center d-flex justify-content-center technologies">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="#0277bd" rx="60"/><path fill="#ebebeb" d="m53.753 102.651l2.862 31.942h71.481v-31.942zM128.095 38H48l2.904 31.942h77.191zm0 180.841v-33.233l-.14.037l-35.574-9.605l-2.274-25.476H58.042l4.475 50.154l65.431 18.164z"/><path fill="#fff" d="m167.318 134.593l-3.708 41.426l-35.625 9.616v33.231l65.483-18.148l.48-5.397l7.506-84.092l.779-8.578L208 38h-80.015v31.942h45.009l-2.906 32.709h-42.103v31.942z"/></g></svg>
        </div>
      </div>
      <div class="col-md-2 mb-5">
        <div class="card-body card-skills text-center d-flex justify-content-center technologies">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="url(#skillIconsBootstrap0)" rx="60"/><g filter="url(#skillIconsBootstrap2)"><path fill="url(#skillIconsBootstrap1)" d="M131.97 196.157c29.676 0 47.559-14.531 47.559-38.497c0-18.117-12.759-31.232-31.706-33.309v-.754c13.92-2.265 24.843-15.192 24.843-29.628c0-20.57-16.239-33.969-40.986-33.969H76v136.157zM97.653 77.267h28.807c15.66 0 24.553 6.983 24.553 19.627c0 13.493-10.343 21.041-29.096 21.041H97.653zm0 101.623v-44.819h28.613c20.494 0 31.127 7.548 31.127 22.268c0 14.719-10.343 22.551-29.87 22.551z"/><path stroke="#fff" stroke-width="2" d="M131.97 196.157c29.676 0 47.559-14.531 47.559-38.497c0-18.117-12.759-31.232-31.706-33.309v-.754c13.92-2.265 24.843-15.192 24.843-29.628c0-20.57-16.239-33.969-40.986-33.969H76v136.157zM97.653 77.267h28.807c15.66 0 24.553 6.983 24.553 19.627c0 13.493-10.343 21.041-29.096 21.041H97.653zm0 101.623v-44.819h28.613c20.494 0 31.127 7.548 31.127 22.268c0 14.719-10.343 22.551-29.87 22.551z"/></g><defs><linearGradient id="skillIconsBootstrap0" x1="0" x2="256" y1="0" y2="256" gradientUnits="userSpaceOnUse"><stop stop-color="#9013fe"/><stop offset="1" stop-color="#6b11f4"/></linearGradient><linearGradient id="skillIconsBootstrap1" x1="85.793" x2="148.541" y1="68.962" y2="175.084" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"/><stop offset="1" stop-color="#f1e5fc"/></linearGradient><filter id="skillIconsBootstrap2" width="137.529" height="170.157" x="59" y="47" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dy="4"/><feGaussianBlur stdDeviation="8"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow_158_100"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_158_100" result="shape"/></filter></defs></g></svg>
          </div>
        </div>
      </div>
      <div class="card-body">
      <h1 class="text-white" >Others</h1>
      </div>
      <div class="row">
      
      <div class="col-md-2 mb-5">
        <div class="card-body card-skills text-center d-flex justify-content-center technologies">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="#f4f2ed" rx="60"/><path fill="#161614" d="M128.001 30C72.779 30 28 74.77 28 130.001c0 44.183 28.653 81.667 68.387 94.89c4.997.926 6.832-2.169 6.832-4.81c0-2.385-.093-10.262-.136-18.618c-27.82 6.049-33.69-11.799-33.69-11.799c-4.55-11.559-11.104-14.632-11.104-14.632c-9.073-6.207.684-6.079.684-6.079c10.042.705 15.33 10.305 15.33 10.305c8.919 15.288 23.394 10.868 29.1 8.313c.898-6.464 3.489-10.875 6.349-13.372c-22.211-2.529-45.56-11.104-45.56-49.421c0-10.918 3.906-19.839 10.303-26.842c-1.039-2.519-4.462-12.69.968-26.464c0 0 8.398-2.687 27.508 10.25c7.977-2.215 16.531-3.326 25.03-3.364c8.498.038 17.06 1.149 25.051 3.365c19.087-12.939 27.473-10.25 27.473-10.25c5.443 13.773 2.019 23.945.98 26.463c6.412 7.003 10.292 15.924 10.292 26.842c0 38.409-23.394 46.866-45.662 49.341c3.587 3.104 6.783 9.189 6.783 18.519c0 13.38-.116 24.149-.116 27.443c0 2.661 1.8 5.779 6.869 4.797C199.383 211.64 228 174.169 228 130.001C228 74.771 183.227 30 128.001 30M65.454 172.453c-.22.497-1.002.646-1.714.305c-.726-.326-1.133-1.004-.898-1.502c.215-.512.999-.654 1.722-.311c.727.326 1.141 1.01.89 1.508m4.919 4.389c-.477.443-1.41.237-2.042-.462c-.654-.697-.777-1.629-.293-2.078c.491-.442 1.396-.235 2.051.462c.654.706.782 1.631.284 2.078m3.374 5.616c-.613.426-1.615.027-2.234-.863c-.613-.889-.613-1.955.013-2.383c.621-.427 1.608-.043 2.236.84c.611.904.611 1.971-.015 2.406m5.707 6.504c-.548.604-1.715.442-2.57-.383c-.874-.806-1.118-1.95-.568-2.555c.555-.606 1.729-.435 2.59.383c.868.804 1.133 1.957.548 2.555m7.376 2.195c-.242.784-1.366 1.14-2.499.807c-1.13-.343-1.871-1.26-1.642-2.052c.235-.788 1.364-1.159 2.505-.803c1.13.341 1.871 1.252 1.636 2.048m8.394.932c.028.824-.932 1.508-2.121 1.523c-1.196.027-2.163-.641-2.176-1.452c0-.833.939-1.51 2.134-1.53c1.19-.023 2.163.639 2.163 1.459m8.246-.316c.143.804-.683 1.631-1.864 1.851c-1.161.212-2.236-.285-2.383-1.083c-.144-.825.697-1.651 1.856-1.865c1.183-.205 2.241.279 2.391 1.097"/></g></svg>
        </div>
      </div>
      <div class="col-md-2 mb-5">
        <div class="card-body card-skills text-center d-flex justify-content-center technologies">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="#f4f2ed" rx="60"/><g clip-path="url(#skillIconsFigmaLight0)"><path fill="#0acf83" d="M94.347 228c18.4 0 33.333-14.933 33.333-33.333v-33.334H94.347c-18.4 0-33.334 14.934-33.334 33.334S75.947 228 94.347 228"/><path fill="#a259ff" d="M61.013 128c0-18.4 14.934-33.333 33.334-33.333h33.333v66.666H94.347c-18.4 0-33.334-14.933-33.334-33.333"/><path fill="#f24e1e" d="M61.013 61.333C61.013 42.933 75.947 28 94.347 28h33.333v66.667H94.347c-18.4 0-33.334-14.934-33.334-33.334"/><path fill="#ff7262" d="M127.68 28h33.333c18.4 0 33.334 14.933 33.334 33.333s-14.934 33.334-33.334 33.334H127.68z"/><path fill="#1abcfe" d="M194.347 128c0 18.4-14.934 33.333-33.334 33.333S127.68 146.4 127.68 128s14.933-33.333 33.333-33.333S194.347 109.6 194.347 128"/></g><defs><clipPath id="skillIconsFigmaLight0"><path fill="#fff" d="M61 28h133.36v200H61z"/></clipPath></defs></g></svg>
        </div>
      </div>
      <div class="col-md-2 mb-5">
        <div class="card-body card-skills text-center d-flex justify-content-center technologies">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="#f4f2ed" rx="60"/><path fill="#000" d="M49.158 100.246h28.408q12.507.106 18.126 7.208q5.618 7.101 3.71 19.398q-.742 5.618-3.286 11.024q-2.438 5.406-6.784 9.752q-5.3 5.511-11.342 6.996q-6.043 1.484-12.508 1.484h-12.72l-4.028 20.14H34zM61.56 112.33l-6.36 31.8q.636.106 1.272.106h1.484q10.177.106 16.96-2.014q6.784-2.226 9.116-15.476q1.908-11.13-3.816-12.826q-5.618-1.695-14.098-1.59q-1.271.106-2.438.106h-2.226zM116.186 80h14.628l-4.134 20.246h13.144q10.811.213 16.112 4.452q5.406 4.24 3.18 16.112l-7.102 35.298h-14.84l6.784-33.708q1.059-5.3-.636-7.526t-7.314-2.226l-11.766-.106l-8.692 43.566h-14.628zm58.638 20.246h28.408q12.507.106 18.126 7.208q5.618 7.101 3.71 19.398q-.742 5.618-3.286 11.024q-2.438 5.406-6.784 9.752q-5.3 5.511-11.342 6.996q-6.043 1.484-12.508 1.484h-12.72l-4.028 20.14h-14.734zm12.402 12.084l-6.36 31.8q.636.106 1.272.106h1.484q10.177.106 16.96-2.014q6.784-2.226 9.116-15.476q1.908-11.13-3.816-12.826q-5.618-1.695-14.098-1.59q-1.272.106-2.438.106h-2.226z"/></g></svg>
        </div>
      </div>
      <div class="col-md-2 mb-5">
        <div class="card-body card-skills text-center d-flex justify-content-center technologies">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 128 128"><mask id="deviconVscode0" width="128" height="128" x="0" y="0" maskUnits="userSpaceOnUse" style="mask-type:alpha"><path fill="#fff" fill-rule="evenodd" d="M90.767 127.126a7.97 7.97 0 0 0 6.35-.244l26.353-12.681a8 8 0 0 0 4.53-7.209V21.009a8 8 0 0 0-4.53-7.21L97.117 1.12a7.97 7.97 0 0 0-9.093 1.548l-50.45 46.026L15.6 32.013a5.33 5.33 0 0 0-6.807.302l-7.048 6.411a5.335 5.335 0 0 0-.006 7.888L20.796 64L1.74 81.387a5.336 5.336 0 0 0 .006 7.887l7.048 6.411a5.33 5.33 0 0 0 6.807.303l21.974-16.68l50.45 46.025a8 8 0 0 0 2.743 1.793Zm5.252-92.183L57.74 64l38.28 29.058V34.943Z" clip-rule="evenodd"/></mask><g mask="url(#deviconVscode0)"><path fill="#0065A9" d="M123.471 13.82L97.097 1.12A7.97 7.97 0 0 0 88 2.668L1.662 81.387a5.333 5.333 0 0 0 .006 7.887l7.052 6.411a5.33 5.33 0 0 0 6.811.303l103.971-78.875c3.488-2.646 8.498-.158 8.498 4.22v-.306a8 8 0 0 0-4.529-7.208Z"/><g filter="url(#deviconVscode1)"><path fill="#007ACC" d="m123.471 114.181l-26.374 12.698A7.97 7.97 0 0 1 88 125.333L1.662 46.613a5.333 5.333 0 0 1 .006-7.887l7.052-6.411a5.33 5.33 0 0 1 6.811-.303l103.971 78.874c3.488 2.647 8.498.159 8.498-4.219v.306a8 8 0 0 1-4.529 7.208"/></g><g filter="url(#deviconVscode2)"><path fill="#1F9CF0" d="M97.098 126.882A7.98 7.98 0 0 1 88 125.333c2.952 2.952 8 .861 8-3.314V5.98c0-4.175-5.048-6.266-8-3.313a7.98 7.98 0 0 1 9.098-1.549L123.467 13.8A8 8 0 0 1 128 21.01v85.982a8 8 0 0 1-4.533 7.21z"/></g><path fill="url(#deviconVscode3)" fill-rule="evenodd" d="M90.69 127.126a7.97 7.97 0 0 0 6.349-.244l26.353-12.681a8 8 0 0 0 4.53-7.21V21.009a8 8 0 0 0-4.53-7.21L97.039 1.12a7.97 7.97 0 0 0-9.093 1.548l-50.45 46.026l-21.974-16.68a5.33 5.33 0 0 0-6.807.302l-7.048 6.411a5.336 5.336 0 0 0-.006 7.888L20.718 64L1.662 81.386a5.335 5.335 0 0 0 .006 7.888l7.048 6.411a5.33 5.33 0 0 0 6.807.303l21.975-16.681l50.45 46.026a8 8 0 0 0 2.742 1.793m5.252-92.184L57.662 64l38.28 29.057z" clip-rule="evenodd" opacity=".25"/></g><defs><filter id="deviconVscode1" width="144.744" height="113.408" x="-8.411" y="22.594" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="4.167"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/><feBlend in2="BackgroundImageFix" mode="overlay" result="effect1_dropShadow_1_36"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_1_36" result="shape"/></filter><filter id="deviconVscode2" width="56.667" height="144.007" x="79.667" y="-8.004" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="4.167"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/><feBlend in2="BackgroundImageFix" mode="overlay" result="effect1_dropShadow_1_36"/><feBlend in="SourceGraphic" in2="effect1_dropShadow_1_36" result="shape"/></filter><linearGradient id="deviconVscode3" x1="63.922" x2="63.922" y1=".33" y2="127.67" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"/><stop offset="1" stop-color="#fff" stop-opacity="0"/></linearGradient></defs></svg>
        </div>
      </div>
      <div class="col-md-2 mb-5">
      <div class="card-body card-skills text-center d-flex justify-content-center technologies">
       <svg xmlns="http://www.w3.org/2000/svg" width="93.9" height="64" viewBox="0 0 512 349"><path fill="#00758f" d="m152.31 230.297l15.56 50.487c3.496 11.463 4.954 19.465 4.37 24.026q12.765-34.188 17.839-74.513h18.71q-12.069 65.65-31.827 95.41c-10.262 15.289-21.504 22.933-33.746 22.933c-3.264 0-7.288-.986-12.063-2.944v-10.55c2.333.342 5.07.525 8.218.525q8.565-.002 13.816-4.742c4.193-3.849 6.292-8.175 6.292-12.97c0-3.274-1.637-9.993-4.896-20.157l-21.68-67.505zM33.223 199.266l28.5 86.956h.176l28.675-86.956h23.428c5.13 43.124 8.16 82.581 9.09 118.346H103.34q-1.044-50.148-5.768-94.32H97.4l-30.078 94.32H52.28l-29.896-94.32h-.176q-3.325 42.422-4.196 94.32H0c1.164-42.08 4.077-81.525 8.739-118.346z"/><path fill="#f29111" d="M352.498 197.51c30.657 0 45.986 19.586 45.986 58.739c0 21.276-4.61 37.347-13.821 48.204c-1.66 1.984-3.495 3.698-5.427 5.286l21.695 10.727l-.021-.001l-7.703 13.302l-28.253-16.485q-7.026 2.08-15.451 2.08c-15.053 0-26.297-4.387-33.731-13.15c-8.16-9.694-12.238-24.955-12.238-45.757c0-21.156 4.602-37.166 13.816-48.037c8.392-9.944 20.11-14.909 35.148-14.909m-93.88.172c10.957 0 20.92 2.932 29.894 8.775l-4.558 10.157c-7.679-3.264-15.25-4.903-22.716-4.903c-6.058 0-10.726 1.458-13.98 4.392c-3.272 2.908-5.296 6.65-5.296 11.212c0 7.01 4.994 13.089 14.215 18.225a816 816 0 0 1 9.031 5.011l.688.387l.345.194l.689.387l.344.194l.688.388c6.98 3.935 13.548 7.691 13.548 7.691c9.22 6.545 13.816 13.523 13.816 25.016c0 10.037-3.678 18.276-11.01 24.723c-7.337 6.418-17.194 9.636-29.538 9.636c-11.545 0-22.734-3.704-33.572-11.05l5.07-10.166c9.327 4.675 17.767 7.01 25.346 7.01c7.108 0 12.672-1.587 16.697-4.721c4.017-3.157 6.424-7.56 6.424-13.143c0-7.027-4.888-13.034-13.855-18.073a898 898 0 0 1-8.395-4.697l-.687-.389c-1.262-.713-2.533-1.435-3.778-2.142l-.675-.384c-6.055-3.444-11.29-6.453-11.29-6.453c-8.964-6.557-13.459-13.592-13.459-25.184c0-9.587 3.352-17.336 10.046-23.231q10.066-8.862 25.968-8.862m175.895 1.584v103.788h37.238v14.558h-56.124V199.266zm57.93 103.833v2.46h-4.094v12.04h-3.13v-12.04h-4.253v-2.46zm7.56 0l3.931 9.884l3.611-9.884h4.437v14.5h-2.95v-11.035l-4.11 11.035h-2.127l-4.117-11.035h-.158v11.035h-2.791v-14.5zM350.57 212.064c-18.066 0-27.104 14.91-27.104 44.71c0 17.07 2.395 29.448 7.176 37.163c4.428 7.14 11.363 10.703 20.806 10.703c18.066 0 27.103-15.026 27.103-45.064c0-16.831-2.395-29.103-7.17-36.822c-4.433-7.124-11.365-10.69-20.81-10.69"/><path fill="#00758f" d="M303.218 7.333c5.993-14.726 26.948-3.574 35.08 1.57c1.993 1.287 4.279 4.006 6.564 5.011c3.565.14 7.127.419 10.698.568c6.698 1.574 12.972 2.86 18.25 5.866c24.528 14.445 40.495 29.165 55.19 53.479c3.14 5.15 4.709 10.723 7.274 16.296c3.56 8.307 7.56 17.027 11.692 24.882c1.85 3.724 3.281 7.865 5.85 11.01c1.003 1.438 3.852 1.862 5.555 2.721c4.708 2.437 10.412 4.287 14.84 7.147c8.269 5.156 16.264 11.3 23.532 17.59c2.709 2.428 4.555 5.865 7.136 8.433v1.296c-2.291.703-4.574 1.423-6.859 2c-4.991 1.282-9.412.992-14.254 2.275c-2.992.868-6.707 2.013-9.845 2.304l.29.292c1.846 5.275 11.834 9.565 16.402 12.72c5.548 4.004 10.689 8.86 14.827 14.437c1.429 1.423 2.858 2.718 4.28 4.137c.994 1.438 1.274 3.298 2.28 4.58v.434c-1.114-.393-1.915-1.143-2.674-1.927l-.453-.473c-.453-.47-.91-.932-1.431-1.313c-3.148-2.15-6.274-4.722-9.422-6.721c-5.412-3.434-11.689-5.427-17.246-8.874c-3.142-2.001-6.137-4.28-9.132-6.57c-2.715-2.007-5.705-5.861-7.411-8.721c-1.005-1.58-1.143-3.437-2.291-4.58c.205-1.909 1.954-2.476 3.719-2.942l.406-.107c.609-.158 1.205-.316 1.725-.525c7.414-3.148 16.253-4.29 27.667-4.004c-.43-2.866-7.562-6.437-9.839-8.153c-4.57-3.294-9.409-6.731-14.257-9.729c-2.569-1.57-6.996-2.716-9.842-3.999c-3.851-1.574-12.41-3.147-14.544-6.145c-3.625-4.726-6.229-10.363-8.757-16.057l-.688-1.554l-.69-1.553c-2.988-6.857-6.7-14.006-9.695-21.027c-1.566-3.425-2.285-6.431-4-9.716c-10.407-20.158-25.81-37.035-44.485-48.904c-6.137-3.862-12.98-7.436-20.534-9.865c-4.281-1.293-9.419-.578-13.98-1.57h-3.002c-2.562-.722-4.701-3.438-6.7-4.87c-4.415-2.998-8.837-5.011-14.117-7.15c-1.85-.858-7.133-2.856-8.977-1.283c-1.142.287-1.721.718-2.002 1.864c-1.136 1.71-.137 4.286.57 5.863c2.142 4.57 5.134 7.286 7.85 11.148c2.416 3.425 5.417 7.287 7.13 11.011c3.696 8.005 5.417 16.874 8.842 24.878c1.27 3.01 3.279 6.435 5.128 9.15c1.567 2.155 4.416 3.713 5.278 6.441c1.718 2.86-2.572 12.297-3.565 15.294c-3.715 11.727-2.995 28.028 1.283 38.193l.228.536l.228.543c1.562 3.723 3.234 7.732 7.387 8.773c.286-.284 0-.135.567-.284c1.005-7.868 1.288-15.445 4-21.601c1.567-3.849 4.696-6.57 6.841-9.712c1.43.856 1.43 3.437 2.282 5.145c1.856 4.43 3.849 9.287 6.137 13.73c4.696 9.15 9.98 18.021 15.967 26.025c2.005 2.859 4.85 6.006 7.416 8.581c1.143.997 2.423 1.573 3.282 2.856h.28v.432c-4.278-1.577-6.99-6.003-10.402-8.587c-6.424-4.857-14.117-12.151-18.545-19.15c-1.852-4.018-3.854-7.869-5.85-11.867v-.289c-.853 1.142-.567 2.276-.994 4.004c-1.852 7.145-.426 15.296-6.843 17.866c-7.274 3.01-12.7-4.857-14.977-8.432c-7.276-11.866-9.269-31.884-4.138-48.043c1.14-3.577 1.295-7.867 3.285-10.723c-.43-2.582-2.42-3.288-3.571-4.87c-1.996-2.704-3.705-5.854-5.268-8.857c-3.002-5.866-5.138-12.875-7.417-19.166c-1.002-2.569-1.289-5.148-2.288-7.58c-1.704-3.712-4.845-7.436-7.268-10.72c-3.281-4.72-12.837-13.868-8.985-23.168m46.772 28.015c.381.382.841.716 1.317 1.045l.574.394c.765.53 1.506 1.088 1.96 1.848c.72 1.006.854 1.999 1.716 3.007c0 3.437-.996 5.722-3.007 7.146c0 0-.137.15-.278.29c-1.14-2.291-2.139-4.57-3.287-6.859c-1.414-1.998-3.413-3.583-4.565-5.866h-.277v-.287c1.721-.425 3.428-.718 5.847-.718"/></svg>
        </div>
      </div>
      <div class="col-md-2 mb-5">
        <div class="card-body card-skills text-center d-flex justify-content-center technologies">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="#f0db4f" rx="60"/><path fill="#323330" d="m67.312 213.932l19.59-11.856c3.78 6.701 7.218 12.371 15.465 12.371c7.905 0 12.889-3.092 12.889-15.12v-81.798h24.058v82.138c0 24.917-14.606 36.259-35.916 36.259c-19.245 0-30.416-9.967-36.087-21.996m85.07-2.576l19.588-11.341c5.157 8.421 11.859 14.607 23.715 14.607c9.969 0 16.325-4.984 16.325-11.858c0-8.248-6.53-11.17-17.528-15.98l-6.013-2.579c-17.357-7.388-28.871-16.668-28.871-36.258c0-18.044 13.748-31.792 35.229-31.792c15.294 0 26.292 5.328 34.196 19.247l-18.731 12.029c-4.125-7.389-8.591-10.31-15.465-10.31c-7.046 0-11.514 4.468-11.514 10.31c0 7.217 4.468 10.139 14.778 14.608l6.014 2.577c20.449 8.765 31.963 17.699 31.963 37.804c0 21.654-17.012 33.51-39.867 33.51c-22.339 0-36.774-10.654-43.819-24.574"/></g></svg>
        </div>
      </div>
      <div class="col-md-2 mb-5">
        <div class="card-body card-skills text-center d-flex justify-content-center technologies">
     <svg xmlns="http://www.w3.org/2000/svg" width="93.18" height="64" viewBox="0 0 256 258"><g fill="none" fill-rule="evenodd"><path fill="#fb7a24" d="M127.929.002Q177.77.002 227.61 0c4.17 0 8.3.362 12.301 1.582c8.675 2.644 13.268 8.865 15.068 17.438c.715 3.4.918 6.865.925 10.33c.053 23.27.092 46.542.094 69.814c.002 42.384.007 84.768-.08 127.151c-.012 5.933-.328 11.931-3.257 17.336c-3.249 5.994-7.697 10.738-14.45 12.824c-1.22.377-2.494.806-3.745.806c-2.882.002-5.687.716-8.56.716c-65.067-.005-130.133.033-195.2-.07c-5.292-.01-10.67-.395-15.697-2.548c-1-.43-2.01-.79-2.89-1.46c-6.4-4.877-10.746-10.96-11.678-19.191c-.335-2.968-.442-5.92-.442-8.889c.01-65.952.016-131.904.05-197.856c.003-3.826.042-7.718 1.219-11.38C4.403 6.846 11.261 1.519 21.427.437C23.79.185 26.173.022 28.547.02C61.672-.007 94.801.002 127.928.002"/><path fill="#fff" d="M128.775 164.113c-.727 4.454-1.238 8.48-2.838 12.19c-7.49 17.384-20.256 27.977-39.394 30.086c-22.621 2.492-43.515-11.47-49.797-33.154c-2.277-7.858-2.049-15.869-1.223-23.867c.881-8.546 3.399-16.65 7.33-24.296c.563-1.093.552-1.918-.152-2.977c-6.036-9.078-8.378-19.107-7.528-29.932c.455-5.786 1.86-11.32 4.483-16.504c7.689-15.185 24.57-28.072 47.179-25.932c19.88 1.88 38.293 19.029 41.167 38.315c.145.968.417 1.918.735 3.346c.476-2.586.82-4.72 1.265-6.834c3.703-17.521 20.854-35.855 45.164-36.082c24.64-.228 42.887 19.097 46.33 37.045c1.455 7.585 1.202 15.163.002 22.738a81 81 0 0 1-6.672 21.775c-.716 1.529-.642 2.63.275 4.05c5.307 8.224 7.649 17.252 7.349 27.056c-.628 20.457-15.097 38.802-35.002 43.6c-27.79 6.697-49.093-9.923-56.262-30.031c-1.17-3.273-1.723-6.69-2.41-10.592m50.489-35.94c.297-1.157 1.193-1.85 1.837-2.706c6.968-9.26 10.633-19.603 9.815-31.25c-.596-8.5-7.587-14.488-16.05-14.171c-8.469.317-14.85 6.848-14.97 15.322c-.009.694.033 1.389-.01 2.078c-.583 9.031-5.566 13.978-13.117 14.53c-1.379.101-2.762.224-4.143.228c-9.8.022-19.599.018-29.4.009c-4.28-.004-8.524.462-12.6 1.72c-19.027 5.87-30.122 18.882-33.796 38.275c-.728 3.837-1.383 7.819-.125 11.76c1.805 5.653 5.17 9.857 11.126 11.263c6.173 1.457 11.55-.155 15.822-5.004c2.761-3.135 3.632-6.86 3.838-10.948c.534-10.515 6.26-15.771 15.81-15.692c14.649.122 29.3.026 43.951.037c2.6.001 2.624.036 2.637 2.608c.025 4.75-.121 9.507.062 14.252c.298 7.747 7.114 14.186 15.016 14.413c8.148.233 15.411-5.794 15.942-13.661c.458-6.81.429-13.661-.018-20.476c-.346-5.275-3.2-9.035-8.036-11.217c-1.16-.522-2.38-.913-3.591-1.37m-91.832-15.984c3.151 0 5.723-.029 8.293.013c1.274.02 1.746-.528 1.736-1.777c-.042-4.943.213-9.902-.102-14.827c-.416-6.497-3.871-11.194-9.92-13.563c-6.202-2.429-11.878-1.043-16.678 3.538c-4.821 4.603-5.464 10.232-3.777 16.392c1.55 5.662 5.21 8.878 10.968 9.85c3.344.563 6.707.293 9.48.374"/></g></svg>
        </div>
      </div>
    </div>
        
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container"> 
      <div class="card-body">
      <h1 class="text-white mb-5" id="Project">Projects</h1>
    <div class="row mb-5">
    <div class="col-md-8 px-0 ">
      <div id="workjapcha" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <li data-target="#workjapcha" data-slide-to="0" class="active"></li>
        <li data-target="#workjapcha" data-slide-to="1"></li>
        <li data-target="#workjapcha" data-slide-to="2"></li>
        <li data-target="#workjapcha" data-slide-to="3"></li>
        <li data-target="#workjapcha" data-slide-to="4"></li>
        <li data-target="#workjapcha" data-slide-to="5"></li>
        <li data-target="#workjapcha" data-slide-to="6"></li>
        <li data-target="#workjapcha" data-slide-to="7"></li>
        <li data-target="#workjapcha" data-slide-to="8"></li>
        <li data-target="#workjapcha" data-slide-to="9"></li>
        <li data-target="#workjapcha" data-slide-to="10"></li>
        <li data-target="#workjapcha" data-slide-to="11"></li>
        <li data-target="#workjapcha" data-slide-to="12"></li>
        <li data-target="#workjapcha" data-slide-to="13"></li>
        <li data-target="#workjapcha" data-slide-to="14"></li>
        <li data-target="#workjapcha" data-slide-to="15"></li>
        <li data-target="#workjapcha" data-slide-to="16"></li>
        <li data-target="#workjapcha" data-slide-to="17"></li>
    </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"  id="carouselworkprogress" src="img/Japcha-1.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-3.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-4.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-5.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-6.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-7.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-8.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-9.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-10.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-11.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-12.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-13.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Japcha-14.png" alt="Second slide">
          </div>
          <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#workjapcha" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#workjapcha" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-4 d-flex flex-column shadow work-project">
      <div class="card card-work">
        <div class="card-body ">
          <div class="card-title text-center fs-3">Japcha</div>
          <div class="card-text text-center mb-3">(CAPSTONE PROJECT)</div>
          <div class="lines mb-3"></div>
          <div class="card-text-work mb-3 summary">Our final year industry-partnered assignment. Created an online retail platform with functionalities including purchasing, messaging, customer feedback, and data analytics (top products, revenue). Deployed on a commercial web hosting service, iFastnet.</div>
          <div class="card-text-work mb-3">HANDLE/USE</div>
          <div class="row mb-auto">
      <div class="col-md-auto d-flex justify-content-start align-items-center">
        <p class="text-white radius-1">HTML</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start align-items-center">
         <p class="text-white radius-2">CSS</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start align-items-center">
      <p class="text-white radius-1"> Bootstrap</p>  
      </div>
      <div class="col-md-auto d-flex justify-content-start align-items-center">
      <p class="text-white radius-2"> Javascript</p>      
      </div>
      <div class="col-md-auto d-flex justify-content-start align-items-center">
      <p class="text-white radius-1"> MySQL</p>  
      </div>
      <div class="col-md-auto d-flex justify-content-start align-items-center">
          <p class="text-white radius-1">PHP</p>
      </div>
      </div>
        </div>
      </div>
      </div>
    </div>
    <div class="row mb-5">
    <div class="col-md-8 px-0 krampus">
      <div id="workcid" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#workcid" data-slide-to="0" class="active"></li>
        <li data-target="#workcid" data-slide-to="1"></li>
        <li data-target="#workcid" data-slide-to="2"></li>
        <li data-target="#workcid" data-slide-to="3"></li>
        <li data-target="#workcid" data-slide-to="4"></li>
        <li data-target="#workcid" data-slide-to="5"></li>
        <li data-target="#workcid" data-slide-to="6"></li>
        <li data-target="#workcid" data-slide-to="7"></li>
        <li data-target="#workcid" data-slide-to="8"></li>
        <li data-target="#workcid" data-slide-to="9"></li>
        <li data-target="#workcid" data-slide-to="10"></li>
        <li data-target="#workcid" data-slide-to="11"></li>
        <li data-target="#workcid" data-slide-to="12"></li>
        <li data-target="#workcid" data-slide-to="13"></li>
        <li data-target="#workcid" data-slide-to="14"></li>
        <li data-target="#workcid" data-slide-to="15"></li>
        <li data-target="#workcid" data-slide-to="16"></li>
        <li data-target="#workcid" data-slide-to="17"></li>
    </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" id="carouselworkprogress" src="img/CID.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"  id="carouselworkprogress" src="img/CID-1.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-3.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-4.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-5.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-6.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-7.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-8.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-9.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-10.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-11.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-12.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-13.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-14.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-15.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-16.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/CID-17.png" alt="Second slide">
          </div>
          <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#workcid" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#workcid" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-4 d-flex flex-column shadow work-project">
      <div class="card card-work">
        <div class="card-body">
          <div class="card-title text-center fs-3">CID SYSTEM</div>
          <div class="card-text text-center mb-3">(OJT PROJECT)</div>
          <div class="lines mb-3"></div>
          <div class="card-text-work mb-3 summary">My OJT training job is to create a CID system for clients and employees. The CID system involves creating Terms of Service (TOS) and also creating CIDs for technicians and clients.</div>
          <div class="card-text-work mb-3">HANDLE/USE</div>

          
          <div class="row mb-3">
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-4">HTML</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-3">CSS</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-4">Javascript</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-3">Bootstrap</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-4">MySQL</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-4"> PHP</p>
      </div>
      </div>
     
        </div>
      </div>
    
      </div>
    </div>
    <div class="row mb-5">
    <div class="col-md-8 px-0 krampus">
      <div id="workrecord" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#workrecord" data-slide-to="0" class="active"></li>
        <li data-target="#workrecord" data-slide-to="1"></li>
        <li data-target="#workrecord" data-slide-to="2"></li>
        <li data-target="#workrecord" data-slide-to="3"></li>
        <li data-target="#workrecord" data-slide-to="4"></li>
        <li data-target="#workrecord" data-slide-to="5"></li>
        <li data-target="#workrecord" data-slide-to="6"></li>
        <li data-target="#workrecord" data-slide-to="7"></li>
        <li data-target="#workrecord" data-slide-to="8"></li>
        <li data-target="#workrecord" data-slide-to="9"></li>
        <li data-target="#workrecord" data-slide-to="10"></li>
        <li data-target="#workrecord" data-slide-to="11"></li>
    </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"  id="carouselworkprogress" src="img/Record-List-Tracker-1.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker-2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker-3.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker-4.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker-5.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker-6.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker-7.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker-8.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker-10.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker-11.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Record-List-Tracker-12.png" alt="Second slide">
          </div>
          <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#workrecord" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#workrecord" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-4 d-flex flex-column shadow work-project">
      <div class="card card-work">
        <div class="card-body ">
          <div class="card-title text-center fs-3">Record List Tracker</div>
          <div class="card-text text-center mb-3">(My Project)</div>
          <div class="lines mb-3"></div>
          <div class="card-text-work mb-3 summary">The record list tracker website is your personalized media library where you can catalog your favorite movies, books, and TV shows. By creating an account and logging in, you can access your saved list of consumed media. This feature is similar to bookmarking or using platforms like MyAnimeList, allowing you to easily revisit your watchlist or reading list.</div>
          <div class="card-text-work mb-3">HANDLE/USE</div>

          
          <div class="row mb-3">
          <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-1">HTML</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-2">CSS</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-1">Javascript</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-2">PHP</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-1">MySQL</p>
      </div>
      </div>
        </div>
      </div>
    
      </div>
      
    </div>
    <div class="row mb-5">
    <div class="col-md-8 px-0 krampus">
      <div id="workportfolio" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <li data-target="#workportfolio" data-slide-to="0" class="active"></li>
    </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" id="carouselworkprogress" src="img/Portfolio.png" alt="First slide">
          </div>
          <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#workjapcha" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#workjapcha" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-4 d-flex flex-column shadow work-project">
      <div class="card card-work">
        <div class="card-body ">
          <div class="card-title text-center fs-3">Portfolio</div>
          <div class="card-text text-center mb-3"></div>
          <div class="lines mb-3"></div>
          <div class="card-text-work mb-3 summary">Krampus is a mobile game where you need to survive the night, as Krampus attacks children on Christmas Day.</div>
          <div class="card-text-work mb-3">HANDLE/USE</div>

          
          <div class="row mb-3">
        <div class="col-md-auto d-flex justify-content-start">
        <p class="text-white radius-2">HTML</p>
      </div>
      <div class="col-md-3 d-flex justify-content-start">
      <p class="text-white radius-2">CSS</p>
      </div>
      <div class="col-md-3 d-flex justify-content-start">
      <p class="text-white radius-2">Javascript</p>
      </div>
      <div class="col-md-3 d-flex justify-content-start">
      <p class="text-white radius-2">Bootstrap</p>
      </div>
      </div>
      <div class="row">
        <div class="col">
          LINKS
        </div>
      </div>
      <div class="row d-flex-justify-content-center">
        <div class="col ">
          <a href="https://github.com/R3verse3412/Portfolios"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2"/></svg></a>
        </div>
      </div>
    
        </div>
      </div>
    
      </div>
    </div>
    <div class="row mb-5">
    <div class="col-md-8 px-0 krampus">
      <div id="workkrampus" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <li data-target="#workkrampus" data-slide-to="0" class="active"></li>
        <li data-target="#workkrampus" data-slide-to="1"></li>
        <li data-target="#workkrampus" data-slide-to="2"></li>
        <li data-target="#workkrampus" data-slide-to="3"></li>
    </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" id="carouselworkprogress" src="img/Krampus.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100"  id="carouselworkprogress" src="img/Krampus-1.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Krampus-2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="carouselworkprogress" src="img/Krampus-3.png" alt="Second slide">
          </div>
          <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#workkrampus" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#workkrampus" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-4 d-flex flex-column shadow work-project">
      <div class="card card-work">
        <div class="card-body ">
          <div class="card-title text-center fs-3">Krampus</div>
          <div class="card-text text-center mb-3">(GAME DEVELOPMENT)</div>
          <div class="lines mb-3"></div>
          <div class="card-text-work mb-3 summary">Krampus is a mobile game where you need to survive the night, as Krampus attacks children on Christmas Day.</div>
          <div class="card-text-work mb-3">HANDLE/USE</div>

          
          <div class="row mb-3">
        <div class="col-md-auto d-flex justify-content-start">
        <p class="text-white radius-2">Asprite</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-2">Godot</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-2">Joystick Control Function</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-2">Character Animation</p>
      </div>
      <div class="col-md-auto d-flex justify-content-start">
      <p class="text-white radius-2">Performed some on Front-end task/UI</p>
      </div>
      </div>
      </div>
        </div>
      </div>
    
      </div>
    </div>

      </div>
    </div>
  </section>

  <footer class="footer d-flex justify-content-center">
      <div class="text-white ">All Right Reserved 2024</div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>

<script src="JRBG.js"></script>
  

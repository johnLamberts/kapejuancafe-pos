<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cashier</title>



  <!-- CSS only -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" -->
  <!-- integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="assets/css/all-style.css" /> -->

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <link rel="stylesheet" href="assets/css/styles/styles.css">
  <!-- <link rel="stylesheet" href="/assets/css/styles/login.css"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"
    integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  

  <style>

    .register-page {
      display: flex;
    }

    .image-area {
      width: 40%;
      height: 95%;
      margin-top: 2rem;
      border: 1px solid var(--bg-secondary-color);
      padding: 0rem;

    }

    .register-img {
      position: absolute;
      bottom: 0;
      height: 32rem !important;
    }

    .login-input {
      width: 50%;
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    .form-register .form-controls {
      margin: 2rem;
    }

    .kapejuan-logo {
      position: absolute;
      padding-top: 0.7rem;
      margin-left: 2.7rem;
    }

    .kpg-img {
      margin: auto;
    }

    .menu-wrap ul li a {
      color: var(--color-primary);
    }

    .container {
      /* position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%); */
      position: relative;
      overflow: auto;
    }

    table {
      width: 800px;
      border-collapse: collapse;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      padding: 1.4rem 2rem;
      background-color: rgba(255, 255, 255, 0.8);
      color: var(--color-secondary);
    }

    td {
      color: var(--color-tertiary);
      font-weight: 700;
    }

    th {
      text-align: left;
    }

    thead th {
      background-color: var(--bg-tertiary-color);
    }

    tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.3);
    }

    tbody td {
      position: relative;
    }

    tbody td:hover:before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      top: -9999px;
      bottom: -9999px;
      background-color: rgba(255, 255, 255, 0.2);
      z-index: -1;
    }

    .card {
      background-color: var(--bg-primary-color);
      color: var(--color-primary);
    }

    .row input {
      background: var(--bg-primary-color);

      border: 1px solid var(--bg-tertiary-color);
    }

    .row label {
      padding-bottom: 1.1rem;
      font-size: 1rem;
      font-weight: 700;
    }

    .row input:active,
    .row input:hover {
      background: transparent;
    }

    .primary-button {
      margin-top: 1rem;
      padding: 0.5rem 1rem;
      color: var(--color-secondary);
      font-weight: 800;
      transition: all 0.4s ease-out;
    }

    .primary-button:hover {
      background-color: red;
      transform: scale(1.025);
      color: var(--color-primary);
    }

    .primary-btn-input input {
      background: var(--bg-tertiary-color);
    }

    .primary-btn-input input:focus {
      color: var(--color-tertiary);
    }

    .go-back-button {
      background: var(--bg-tertiary-color);
      padding: 0.8rem 1.4rem;
      margin-bottom: 0.8rem;
      border-radius: 5px;
      color: var(--color-secondary);
    }

    .go-back-button:hover {
      background: var(--bg-primary-color);
      color: var(--color-tertiary);
      border: 1px solid var(--color-tertiary);
      font-weight: bolder;
    }

    .content-wrap .info-boxes {
      padding: 3em 0 4em;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(182px, 1fr));
      grid-gap: 1.2em;
      position: relative;
    }

    .content-wrap .info-boxes .info-box {
      background-color: var(--bg-secondary-color);
      padding: 2.3rem 0.4rem;
    }

    .content-wrap .info-box .box-content {
      color: var(--color-secondary);
    }

    .content-wrap .info-box .box-content h4 {
      font-size: 1rem;
      width: 70%;
    }

    .content {
      background-image: url("../assets/img/bg-img.png");
    }

    .form-wrapper .form-controls {
    margin: auto;
    width: 100%;
  }

    .form-controls input {
      padding: 0.8rem 1.9rem;
    width: 100%;
    outline: none;
    background-color: transparent;
    border: 1px solid var(--bg-secondary-color);
    transition: border 0.2s ease;
    color: var(--color-primary);
    font-size: 1.1rem;
    font-weight: 300;
    }

    .form-wrapper .form-controls input::placeholder {
    color: var(--color-primary);
    font-size: 1.3rem;
    font-weight: 300;
    font-family: "Cormorant Garamond", serif;
  }
  
  .form-wrapper .form-controls input:focus,
  .form-wrapper .form-controls input:link {
    border: 2px solid var(--bg-secondary-color);
  }

  .primary-btn--login {
    padding-top: 0.3rem;
    display: grid;
    place-items: center;
    padding: 1rem;
    width: 100%;
    /* color: var(--color-secondary);
      box-shadow: -0.3rem 0.3rem 1px rgba(141,89,33, 0.7);
      width: 100%; */
  }


    
  .primary-btn--links{
    color: var(--color-secondary);
    text-align: center;
    padding: 0.85rem 0;
    font-size: 1.188rem;
    text-transform: uppercase;
    width: 100%;
    background-color: var(--bg-secondary-color);
    border: 1px solid var(--bg-secondary-color);
    box-shadow: -0.3rem 0.3rem 1px rgba(141, 89, 33, 0.7);
  }
  
  </style>


</head>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  .bag {
    background-color: #BED7DC;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg bag">
    <div class="container-xl d-flex justify-content-center">
      <a class="navbar-brand" href="#">Navbar</a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px">
                            <path d="M9 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V9C3 9.53043 3.21071 10.0391 3.58579 10.4142C3.96086 10.7893 4.46957 11 5 11H9C9.53043 11 10.0391 10.7893 10.4142 10.4142C10.7893 10.0391 11 9.53043 11 9V5C11 4.46957 10.7893 3.96086 10.4142 3.58579C10.0391 3.21071 9.53043 3 9 3ZM9 9H5V5H9V9Z" fill="#474747"></path>
                            <path d="M19 3H15C14.4696 3 13.9609 3.21071 13.5858 3.58579C13.2107 3.96086 13 4.46957 13 5V9C13 9.53043 13.2107 10.0391 13.5858 10.4142C13.9609 10.7893 14.4696 11 15 11H19C19.5304 11 20.0391 10.7893 20.4142 10.4142C20.7893 10.0391 21 9.53043 21 9V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3ZM19 9H15V5H19V9Z" fill="#474747"></path>
                            <path d="M19 13H15C14.4696 13 13.9609 13.2107 13.5858 13.5858C13.2107 13.9609 13 14.4696 13 15V19C13 19.5304 13.2107 20.0391 13.5858 20.4142C13.9609 20.7893 14.4696 21 15 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V15C21 14.4696 20.7893 13.9609 20.4142 13.5858C20.0391 13.2107 19.5304 13 19 13ZM19 19H15V15H19V19Z" fill="#474747"></path>
                            <path d="M9 13H5C4.46957 13 3.96086 13.2107 3.58579 13.5858C3.21071 13.9609 3 14.4696 3 15V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H9C9.53043 21 10.0391 20.7893 10.4142 20.4142C10.7893 20.0391 11 19.5304 11 19V15C11 14.4696 10.7893 13.9609 10.4142 13.5858C10.0391 13.2107 9.53043 13 9 13ZM9 19H5V15H9V19Z" fill="#474747"></path>
                        </svg>
                    </span>
                    Category
                </a>
                <ul class="dropdown-menu">
                    <li class="d-flex align-items-center">
                      <span class="px-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="20px" height="20px"><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z"/></svg></span>
                      <a class="dropdown-item" href="#">Mobile</a>
                    </li>
                    <li class="d-flex align-items-center">
                      <span class="px-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px"><path d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64H240l-10.7 32H160c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H346.7L336 416H512c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM512 64V288H64V64H512z"/></svg></span>
                      <a class="dropdown-item" href="#">PC Game</a>
                    </li>
                    <li class="d-flex align-items-center">
                      <span  class="px-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px"><path d="M0 128C0 92.7 28.7 64 64 64H512c35.3 0 64 28.7 64 64v64c0 8.8-7.4 15.7-15.7 18.6C541.5 217.1 528 235 528 256s13.5 38.9 32.3 45.4c8.3 2.9 15.7 9.8 15.7 18.6v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320c0-8.8 7.4-15.7 15.7-18.6C34.5 294.9 48 277 48 256s-13.5-38.9-32.3-45.4C7.4 207.7 0 200.8 0 192V128z"/></svg></span>
                      <a class="dropdown-item" href="#">Voucher</a>
                    </li>
                    <li class="d-flex align-items-center">
                      <span class="px-2">
                      <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g data-name="Streaming _System" id="Streaming__System"><path d="M392.1436,339.0046a53.9948,53.9948,0,0,0-52.7676-65.42q-1.3623,0-2.7383.0712a93.1387,93.1387,0,0,0-175.5156,43.4493q0,1.248.0341,2.5014-1.0209-.0315-2.0371-.0312a68.9929,68.9929,0,0,0-58.2734,105.9487,8,8,0,0,0,6.7529,3.7109H408.5908a8,8,0,0,0,7.3135-4.7578,69.3583,69.3583,0,0,0,5.9824-28.2866A70.1254,70.1254,0,0,0,392.1436,339.0046Zm10.9814,74.23H112.2a52.9989,52.9989,0,0,1,46.9189-77.66,51.1817,51.1817,0,0,1,5.1968.2715,18.8332,18.8332,0,0,1,5.3406,1.372,53.0291,53.0291,0,0,1,7.5593,3.82,7.9973,7.9973,0,0,0,11.1507-2.645,8.2236,8.2236,0,0,0-2.93-11.0864,62.9688,62.9688,0,0,0-8.0742-4.2393c-.1536-1.9926-.24-3.9863-.24-5.9633a77.14,77.14,0,0,1,147.4941-31.6236,8.005,8.005,0,0,0,8.584,4.6114,38.4262,38.4262,0,0,1,6.1758-.5083,38.0332,38.0332,0,0,1,37.99,37.9907c0,1.13-.0537,2.2547-.1533,3.3745a71.6333,71.6333,0,0,0-43.7871-3.0452,8,8,0,1,0,3.84,15.5323,55.72,55.72,0,0,1,13.3643-1.6187,55.14,55.14,0,0,1,29.1919,8.3186l.0185-.06a54.067,54.067,0,0,1,26.0464,46.114A53.4965,53.4965,0,0,1,403.125,413.235Z"/><path d="M227.58,189.0007a8,8,0,0,0,11.3144,11.3134,31.362,31.362,0,0,1,44.3018,0,8,8,0,0,0,11.3144-11.3134A47.3818,47.3818,0,0,0,227.58,189.0007Z"/><path d="M319.1377,172.3723a8,8,0,0,0,5.6572-13.6568,90.1559,90.1559,0,0,0-127.499,0A8,8,0,1,0,208.61,170.029a74.1546,74.1546,0,0,1,104.87,0A7.974,7.974,0,0,0,319.1377,172.3723Z"/><path d="M173.53,134.9494a123.9055,123.9055,0,0,1,175.03,0,8,8,0,1,0,11.3145-11.3135c-54.4941-54.4941-143.1611-54.4951-197.6592,0A8,8,0,1,0,173.53,134.9494Z"/><path d="M305.2324,330.9333,241.31,296.9455a7.5,7.5,0,0,0-11.02,6.6221v67.9756a7.4994,7.4994,0,0,0,11.02,6.622l63.9228-33.9878a7.4994,7.4994,0,0,0,0-13.2441Z"/></g></svg>
                      </span>
                      <a class="dropdown-item" href="#">Streaming</a>
                    </li>
                    <li class="d-flex align-items-center">
                      <span class="px-2"></span>
                      <a class="dropdown-item" href="#">Console</a>
                    </li>
                </ul>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
    <table>
      <tr>rico</tr>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
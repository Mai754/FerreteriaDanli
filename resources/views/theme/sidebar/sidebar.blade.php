<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset("assets/sidebar/sidebar.css")}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-squarespace'></i>
      <span class="logo_name">FerreDanli</span>
    </div>

    <ul class="nav-links">



      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="{{asset("assets/$theme/dist/img/user8-128x128.jpg")}}" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name">{{session()->get('nombre_usuario') ?? 'Invitado'}}</div>
            <div class="job">{{session()->get('usuario') ?? 'Nombre'}}</div>
          </div>
          @if (session()->get("roles") && count(session()->get("roles")) > 1)
            <i class='cambiar-rol bx bx-log-out'></i>
          @endif
        </div>
      </li>

    </ul>
  </div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Ferreteria Danli</span>
    </div>
  </section>

  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
      let arrowParent = e.target.parentElement.parentElement;
      arrowParent.classList.toggle("showMenu");
    });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });
  </script>
</body>
</html>

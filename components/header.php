
<header class="header">

   <section class="flex">
      <a href="dashboard" class="logo">welcome!!</a>
      <form action="search_page" method="post" class="search-form">
         <input type="text" name="search" placeholder="search here..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_btn"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>
      <nav class="navbar">
      <a href="dashboard"><i class="fas fa-home"></i><span>home</span></a>
      <a href="playlists"><i class="fa-solid fa-bars-staggered"></i><span>playlists</span></a>
      <a href="contents"><i class="fas fa-graduation-cap"></i><span>contents</span></a>
      <a href="comments"><i class="fas fa-comment"></i><span>comments</span></a>
      <a href="../components/admin_logout" onclick="return confirm('logout from this website?');"><i class="fas fa-right-from-bracket"></i><span>logout</span></a>
   </nav></div>
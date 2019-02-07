  <!-------------------------------- HEADER -------------------------------->
    <header>
      <a href="homepage.php" id="logo"><i>School and Office </i><br><b> Supplies and Services Finder<b></a>
      
      <div class="searchbar"><form action="search-results.php" method="post">
       <button type="submit"><i class="fa fa-search"></i></button>
       <input type="text" placeholder="Search..." name="input" value="">
       <div class="dropdown">
        <button class="dropbtn"><i class="material-icons">person</i></button>
          <div class="dropdown-content">
            <a href="#">Profile</a>
            <a href="requests.php">Update Requests</a>
            <a href="index.php?logout='1'">Sign Out</a>
          </div>
        </div>
    </div>
      <a href="viewall-admin.php" class="viewall">View All</a>
    </header>

    <!-------------------------------- HEADER -------------------------------->
    <header>
      <a href="homepage.php">
      <img src="logo.png" height="50px" style="margin-top: 30px; color: #fff">
    </a>
      
      <div class="searchbar"><form action="search-results.php" method="post">
		   <button type="submit"><i class="fa fa-search"></i></button>
		   <input type="text" placeholder="Search..." name="input" value="">
       <div class="dropdown">
        <button class="dropbtn"><i class="material-icons">person</i></button>
          <div class="dropdown-content">
            <a href="#">Profile</a>
            <!-- <a href="#">Link 2</a> -->
            <a href="index.php?logout='1'">Sign Out</a>
          </div>
      	</div>
		</div>
      <a href="viewall-admin.php" class="viewall">View All</a>
    </header>
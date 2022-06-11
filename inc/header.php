<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
  }

  :root {
    --color: black;
    --h1_tag: #9f3d9f;
    --bg-dark:#1f2235!important;
    --input-background-color:#24263b;
    --top-banner:#24263b;
    --form-control-border-top-bottom:#57595d;
    --left-right-border:1px solid #e7e2e752;
    --form-control-focus-border:1px solid #e7e2e752;

  }


  header.bg-dark {
    background-color: var(--bg-dark)!important;
    /* border-bottom: 1px solid #ededed; */
    z-index: 2;
    padding: 0rem 1rem;
  }



  header .search .input-group>.form-control,
  header .search .input-group>.form-select,
  header .small-search .input-group>.form-control,
  header .small-search .input-group>.form-select {
    position: relative;
    background-color: var(--input-background-color);
    flex: 1 1 auto;
    width: 1%;
    /* min-width: 320px; */
    padding: 0.875rem 0.75rem;
  }


  header .input-group-text {
    display: flex;
    align-items: center;
    padding: 0.375rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    border-left: 0rem;
    text-align: center;
    white-space: nowrap;
    background-color: #fbf6fb00;
    border: 1px solid #ffffffd6;
    border-radius: 3.25rem;
}
  .login_cart {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .my_cart {
    color: white;
    font-weight: 700;
    letter-spacing: 2px;
    margin-bottom: 0rem;
  }

  .login_cart img {
    width: 30px;
  }


  .login_cart a img {
    width: 25px;
    margin-right: 5px;
  }


  .small-search .input-group>.form-control,
  .small-search .input-group>.form-select {

    padding: 0.875rem 0.75rem;
  }


  /* .form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #60616240;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(255 255 255 / 25%);
  } */



  header .search .input-group>.form-control,
  header .search .input-group>.form-select {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 320px;
    padding: 0.875rem 0.75rem;
    border-right: 0rem;
    border-radius: 3.25rem;
  }


  header .input-group-text {
    display: flex;
    align-items: center;
    padding: 0.375rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    border-left: 0rem;
    text-align: center;
    white-space: nowrap;
    background-color: #9f439f00;
    border: 1px solid #9f439f4d;
    border-radius: 3.25rem;
  }


  .mystyle {
    position: relative;
    z-index: -1;
    overflow: hidden;

  }

  .mystyle:after {
    position: absolute;
    content: "";
    height: 100%;
    top: 0;
    left: 0;
    width: 100%;
    background: #808080e6;
    z-index: 100 !important;

  }




  .sideMenuInner {
    margin: 0;
    padding: 0;
    border-top: 1px solid black;
  }


  .sideMenuInner .login,
  .sideMenuInner .profile {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .sideMenuInner .login-side {
    display: flex;
    flex-direction: row;
    justify-self: center;
    align-items: center;
    color: black;
  }

  .sideMenuInner .login-side img {
    width: 22px;
    margin-right: 10px;
  }

  .my-order {
    display: flex;
    align-items: center;
    padding: 1rem 1.2rem;
    text-decoration: none;
    color: #5f6262;
    font-size: 14px;
  }

  .my-order:hover {
    color: #686a6aa3;
  }

  .my-order img {
    width: 22px;
    margin-right: 10px;
  }

  #sideMenu {
    height: 100%;
    position: fixed;
    left: 0;
    width: 250px;
    margin-top: -9px;
    transform: translateX(-250px);
    transition: transform 250ms ease-in-out;
    background: white;
    z-index: 1030 !important;
  }

  #sideMenu h1 {
    margin-left: 14px;
    padding: 1rem 0rem;
    margin-bottom: 0rem;
  }

  .sideMenuInner {
    margin: 0;
    padding: 0;
    border-top: 1px solid #5f62624d;
  }

  .sideMenuInner li {
    list-style: none;
    color: #fff;
    padding: 20px;
    cursor: pointer;
    border-bottom: 1px solid #5f62624d;
  }

  .sideMenuInner li span {
    display: block;
    font-size: 14px;
    color: #5f6262;
  }

  .sideMenuInner li a {
    color: #5f6262;
    cursor: pointer;
    text-decoration: none;
  }

  input[type="checkbox"]:checked~#sideMenu {
    transform: translateX(0);
  }

  input[type=checkbox] {
    transition: all 0.3s;
    box-sizing: border-box;
    display: none;
  }

  .sideIconToggle {
    transition: all 0.3s;
    box-sizing: border-box;
    cursor: pointer;
    position: absolute;
    z-index: 99;
    height: 100%;
    width: 100%;
    top: 22px;
    left: 15px;
    height: 22px;
    width: 22px;
  }

  .spinner {
    transition: all 0.3s;
    box-sizing: border-box;
    position: absolute;
    height: 2px;
    width: 100%;
    background-color: black;
  }

  .horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
  }

  .diagonal.part-1 {
    position: relative;
    transition: all 0.3s;
    box-sizing: border-box;
    float: left;
  }

  .diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
  }

  input[type=checkbox]:checked~.sideIconToggle>.horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    opacity: 0;
  }

  input[type=checkbox]:checked~.sideIconToggle>.diagonal.part-1 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(135deg);
    margin-top: 8px;
    display: none;
  }

  input[type=checkbox]:checked~.sideIconToggle>.diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(-135deg);
    margin-top: -9px;
    display: none;
  }



  @media(max-width:992px) {
    .search {
      display: none;
    }

    .my_cart {
      color: #9f3d9f;
      font-weight: 700;
      letter-spacing: 2px;
      font-size: 22px;
      margin-top: 7px;
      margin-left: 41px;
    }


  }

  @media(max-width:768px) {

    header h1 {
      margin-left: 40px;
    }

    #sideMenu h1 {
      margin-left: 14px;
      padding: 1rem 0rem;
      margin-bottom: 0rem;
      font-size: 18px;
      margin-top: 7px;
      color: #9f3d9f;
      font-weight: 600;
      letter-spacing: 2px;
    }


    .my_cart {
      color: #9f3d9f;
      font-weight: 700;
      letter-spacing: 2px;
      font-size: 18px;
      margin-top: 10px;
    }


    .login_cart img {
      margin-right: 8px;
    }


    .sideIconToggle {
      transition: all 0.3s;
      box-sizing: border-box;
      cursor: pointer;
      position: absolute;
      z-index: 99;
      height: 100%;
      width: 100%;
      top: 21px;
      left: 15px;
      height: 22px;
      width: 22px;
    }

    .top_categories {
      border-top: 0.8px solid #e1dfdf;
      border-bottom: 0.8px solid #e1dfdf;
      margin-top: 13px;
    }

    .pagination {

      display: none;
    }


    .small-search .input-group>.form-control,
    .small-search .input-group>.form-select {
      padding: 0.375rem 0.75rem!important;
      border-right: 0rem;
      border-left: 1px solid #e7e2e7;
      border-top: 1px solid #e7e2e7;
      border-bottom: 1px solid #e7e2e7;
      border-radius: 3.2rem;
    }

    .small-search img{
        width: 16px;
    }

    header .input-group-text {
      display: flex;
      align-items: center;
      padding: 0.375rem 1rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: center;
      white-space: nowrap;
      background-color: #ffffff;
      border: 1px solid #e7e2e7;
      border-radius: 3.25rem;
    }


    .small-search ::placeholder{
      font-size: 12px;
    }


    header .btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    font-size: 12px;
}


  }


  @media(min-width:992px) {
     header.bg-dark {
    background-color: var(--bg-dark)!important;
    /* border-bottom: 1px solid #ededed; */
    z-index: 2;
    padding: 1rem 2rem;
  }

    .small-search {
      display: none;
    }

    #sidebarContainer {
      display: none;
    }
  }
</style>



<header class="bg-dark">
  <div class="d-flex bd-highlight">
    <div class="bd-highligh p-2 me-3">
      <div id="sidebarContainer">
        <input type="checkbox" class="openSideMenu" id="openSideMenu">

        <label for="openSideMenu" class="sideIconToggle">
          <div class="spinner diagonal part-1"></div>
          <div class="spinner horizontal"></div>
          <div class="spinner diagonal part-2"></div>
        </label>

        <div id="sideMenu">
          <h1>MobiCheck</h1>
          <ul class="sideMenuInner">
            <li class="login" onclick="hideSidebar()">
              <a href=" " class="login-side"><img src="images/user.png" alt=""><span>Profile</span></a>
              <a href=" " class="btn btn-danger text-white" data-toggle="tab">Signup</a>
            </li>
            <a href=" " class="my-order"><img src="images/my_order.png" alt=""><span>My Orders</span></a>

          </ul>
        </div>
      </div>

      <h1 class="my_cart">MobiCheck</h1>

    </div>
    <!-- <div class="p-2 bd-highlight search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for products " aria-label="Username" aria-describedby="basic-addon1">
        <span class="input-group-text" id="basic-addon1"><img src="images/icons8-interface-24 (1).png" alt="search-icon"></span>
      </div>
    </div> -->
    <div class="ms-auto p-2 bd-highlight login_cart">
      <a href="" class="btn"><img src="images/user.png" alt=""><span class="btn btn-danger">Get Quote</span></a>
    </div>
  </div>

  <div class="container small-search">
    <div class="row">
      <div class="col-md">
        <div class="input-group flex-nowrap">
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          <span class="input-group-text" id="addon-wrapping"><img src="images/icons8-interface-24 (1).png" alt="search-icon"></span>
        </div>
      </div>
    </div>
  </div>
</header>






<script>
  function hideSidebar() {
    document.body.classList.remove("mystyle");
    document.getElementById('openSideMenu').checked = false;
  }

  var sideIconToggle = document.getElementById('sidebarContainer');

  document.addEventListener('click', function(event) {
    document.body.classList.add("mystyle");
    if (!sidebarContainer.contains(event.target))

      hideSidebar();
  });
</script>
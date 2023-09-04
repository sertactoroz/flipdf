
<?php 
    session_start();
?>
      
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Flipbook Generator
    </title>
    <link
      rel="shortcut icon"
      href="../assets/images/favicon.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../assets/css/tailwind.css" />


        <!-- ==== JQuerry ==== -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- ==== WOW JS ==== -->
    <script src="../assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </head>
  <body>

    <!-- ====== Navbar Section Start -->
    <div
      class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-transparent"
    >
      <div class="container">
        <div class="relative -mx-4 flex items-center justify-between">
          <div class="w-60 max-w-full px-4">
            <a href="../screens/index-screen.php" class="navbar-logo block w-full py-5">
              <img
                src="../assets/images/logo/logo-white.svg"
                alt="logo"
                class="header-logo w-full"
              />
            </a>
          </div>
          <div class="flex w-full items-center justify-between px-4">
            <div>
              <button
                id="navbarToggler"
                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
              >
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
              </button>
              <nav
                id="navbarCollapse"
                class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6"
              >
                <ul class="blcok lg:flex">
                  <li class="group relative">
                    <a
                      href="index-screen.php#home"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70"
                    >
                      Home
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="index-screen.php#about"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      About
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="index-screen.php#pricing"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Pricing
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="index-screen.php#team"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Team
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="index-screen.php#contact"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Contact
                    </a>
                  </li>
                  <li class="submenu-item group relative">
                    <a
                      href="javascript:void(0)"
                      class="relative mx-8 flex py-2 text-base text-dark after:absolute after:right-1 after:top-1/2 after:mt-[-2px] after:h-2 after:w-2 after:-translate-y-1/2 after:rotate-45 after:border-b-2 after:border-r-2 after:border-current group-hover:text-primary lg:mr-0 lg:ml-8 lg:inline-flex lg:py-6 lg:pl-0 lg:pr-4 lg:text-white lg:after:right-0 lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Pages
                    </a>
                    <div
                      class="submenu relative top-full left-0 hidden w-[250px] rounded-sm bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full"
                    >
                      <a
                        href="../screens/about-screen.php"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        About Page
                      </a>
                      <a
                        href="../screens/pricing-screen.php"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Pricing Page
                      </a>
                      <a
                        href="../screens/contact-screen.php"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Contact Page
                      </a>
                      <a
                        href="../screens/blog-screen.php"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Blog Grid Page
                      </a>
                      <a
                        href="../screens/blog-details-screen.php"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Blog Details Page
                      </a>
                      <a
                        href="../screens/signup-screen.php"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Sign Up Page
                      </a>
                      <a
                        href="../screens/signin-screen.php"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Sign In Page
                      </a>
                      <a
                        href="../screens/404-screen.php"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        404 Page
                      </a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>


<?php
// SECURITY - bu bağlantıyı user uid ile yapmak lazım

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $user_mail = $_SESSION['user_email'];
?>
    <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
        <a href="../screens/user-account-screen.php" class="loginBtn py-3 px-7 text-base font-medium text-white hover:opacity-70">
       <?php echo $user_name; ?>'s Account
        </a>
        <a id="logout" href="../includes/logout.php" class="loginBtn py-3 px-7 text-base font-medium text-white hover:opacity-70" style="display: flex; align-items: center;">
        Logout
        </a>
    </div>


<?php } else { ?>

  
    <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
        <a href="../screens/signin-screen.php" class="loginBtn py-3 px-7 text-base font-medium text-white hover:opacity-70">
        Sign In
        </a>
        <a href="../screens/signup-screen.php" class="signUpBtn rounded-lg bg-white bg-opacity-20 py-3 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark">
        Sign Up
        </a>
    </div>
<?php } ?>
            
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Navbar Section End -->
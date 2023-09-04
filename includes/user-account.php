<link rel="stylesheet" href="../assets/css/user-account.css" />

    <!-- ====== User-Account Start -->
    <section class="bg-white py-14 lg:py-20">
      <div class="container">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div
              class="wow fadeInUp relative mx-auto max-w-[850px] overflow-hidden rounded-lg bg-white py-20 px-8 text-center shadow-lg sm:px-12 md:px-[60px]"
              data-wow-delay=".2s"
            >
              <!-- <h2 
                class="mb-8 text-3xl font-bold text-dark sm:text-4xl lg:text-[40px] xl:text-[42px]"
              >
              kullanıcı adı:   <?php  echo $user_name;?><br>
              kullanıcı e-mail:   <?php  echo $user_mail;?><br>
              kullanıcı no:   <?php  echo $user_id;?>
            </h2> -->
            <table id="user-info">
    <tr>
        <td>kullanıcı adı:</td>
        <td><?php echo $user_name; ?></td>
    </tr>
    <tr>
        <td>kullanıcı e-mail:</td>
        <td><?php echo $user_mail; ?></td>
    </tr>
    <tr>
        <td>kullanıcı no:</td>
        <td><?php echo $user_id; ?></td>
    </tr>
</table>

              <!-- <h3 class="mb-8 text-xl font-normal text-dark-700 md:text-2xl">
                Hesabınla ilgili bilgileri burada bulabilirsin
              </h3> -->
           
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== User-Account End -->
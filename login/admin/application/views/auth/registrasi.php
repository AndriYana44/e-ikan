<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Membuat Akun!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= set_value('nama'); ?>" placeholder="Masukan nama anda...">
                  <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>"  placeholder="Masukan email anda...">
                  <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Masukan password anda...">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Masukan kembali password anda...">
                  </div>
                  <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Registrasi Akun
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth'); ?>">Siap memiliki akun? Silakan Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>

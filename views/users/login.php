<div class="container">
    <div class="row py-5 mt-4">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="public/userAsset/images/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1 class="text-center">Login System</h1>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="<?=BASE_URL?>?controller=user&action=loginForm" method="POST">
                <div class="row">
                    <!-- Show error -->
                    <?php if(isset($errors)) : ?>
                        <div class="input-group col-lg-12 mb-4">
                            <div class="alert alert-warning w-100">
                                <ol class="mb-0">
                                    <?php foreach ($errors as $error) : ?>
                                        <li><?=$error?></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Username -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input
                            id="username"
                            type="text"
                            name="username"
                            value="<?=$userForm['username'] ?? ''?>"
                            placeholder="Username"
                            class="form-control bg-white border-left-0 border-md"
                        />
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Password"
                            class="form-control bg-white border-left-0 border-md"
                        />
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Login</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

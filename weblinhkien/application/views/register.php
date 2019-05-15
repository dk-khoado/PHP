<div class="container">
    <h2>Modal Example</h2>
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Open modal </button>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="splash-container">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-1">Registrations Form</h3>
                                <p>Please enter your user information.</p>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="text" name="nick" required="" placeholder="Username" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" id="pass1" type="password" required="" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" required="" placeholder="Confirm">
                                </div>
                                <div class="form-group pt-2">
                                    <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox">
                                        <span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span> </label>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <p>Already member? <a href="#" class="text-secondary">Login Here.</a></p>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->

            </div>
        </div>
    </div>
</div>
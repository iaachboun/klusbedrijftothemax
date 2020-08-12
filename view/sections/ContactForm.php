<div class="contactForm-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="contact-header" class="contact-header">
                    <h2>Contacteer ons nu</h2>
                </div>
                <form action="?request=sendMail" method="post"
                      class="mb-5 bg-white rounded contactForm">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" id="name"
                                               aria-describedby="emailHelp" placeholder="Naam..."
                                               required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input name="achternaam" type="text" class="form-control" id="name"
                                               aria-describedby="emailHelp" placeholder="Achternaam..."
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="Email..." required>
                            </div>
                            <div class="form-group">
                                <input name="telefoon" type="tel" class="form-control" id="telNum"
                                       placeholder="Telefoon..."
                                       required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                    <textarea name="beschrijving" class="form-control" id="beschrijving"
                                              rows="3" placeholder="Beschrijf de werkzaamheden..."></textarea>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"
                                       id="my-file-selector" multiple>
                                <span class='label label-info' id="upload-file-info"></span>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background: #000000">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
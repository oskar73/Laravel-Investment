<x-app-layout layout="social" title="Account Setting">
<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Account Setting</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="acc-edit">
                        <form>
                            <div class="form-group">
                                <label class="form-label" for="uname">User Name:</label>
                                <input type="text" class="form-control" id="uname" value="Elon Musk">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email Id:</label>
                                <input type="email" class="form-control" id="email" value="elonmusk@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="altemail">Alternate Email:</label>
                                <input type="email" class="form-control" id="altemail" value="muskelon008@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label d-block">Language Known:</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="english" checked="">
                                    <label class="form-check-label" for="english">English</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="french" checked="">
                                    <label class="form-check-label" for="french">French</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="hindi">
                                    <label class="form-check-label" for="hindi">Hindi</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="spanish" checked="">
                                    <label class="form-check-label" for="spanish">Spanish</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="arabic">
                                    <label class="form-check-label" for="arabic">Arabic</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="italian">
                                    <label class="form-check-label" for="italian">Italian</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn mm-bg-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Social Media</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="acc-edit">
                        <form>
                            <div class="form-group">
                                <label class="form-label" for="facebook">Facebook:</label>
                                <input type="text" class="form-control" id="facebook" value="www.facebook.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="twitter">Twitter:</label>
                                <input type="text" class="form-control" id="twitter" value="www.twitter.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="LinkedIn">Linked In:</label>
                                <input type="text" class="form-control" id="LinkedIn" value="www.linkedin.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="instagram">Instagram:</label>
                                <input type="text" class="form-control" id="instagram" value="www.instagram.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="youtube">You Tube:</label>
                                <input type="text" class="form-control" id="youtube" value="www.youtube.com">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn mm-bg-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>